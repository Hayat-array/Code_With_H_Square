<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Reverse Digits Visualization – Algorithm & Animation</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap');
  /* body {
    margin: 0; padding: 0;
    min-height: 100vh;
    background: linear-gradient(135deg, #5ee7df, #b490ca);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex; align-items: start; justify-content: center;
  } */

    .maincontainer {
    justify-content: center;
    align-items: center;
    padding: 10px 10px;
    margin: 30px 0px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 16px 50px rgba(94, 231, 223, 0.13);
    max-width: 45rem;
    width: 85vw;
    resize: none;
    display: flex
;
    flex-direction: column;
    gap: 0;
    /* overflow: hidden; */
    border: 2.5px solid #b490ca36;
}

  /* .maincontainer {
    margin: 40px 0;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 16px 50px rgba(94,231,223,0.13);
    max-width: 70rem;
    width: 85vw;
    resize: none;
    display: flex;
    flex-direction: column;
    gap: 0;
    /* overflow: hidden; */
    /* border: 2.5px solid #b490ca36; */
  /* } */ */
  .viz-section {
    flex: 2;
    min-width: 330px;
    padding: 36px 42px 32px 42px;
    box-sizing: border-box;
    border-right: 2.5px solid #b490ca36;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .algo-section {
    flex: 10;
    min-width: 465px;
    box-sizing: border-box;
    padding: 16px 10px 10px 15px;
    background: #f7f4ff;
    display: flex;
    border: 2px solid #9173d1; 
    border-radius:15px;
    flex-direction: column;
    align-items: stretch;
}

user agent stylesheet
div {
    display: block;
    unicode-bidi: isolate;
}


  .algo-title {
    color: #7e57c2;
    font-weight: bold;
    font-size: 1.17rem;
    margin-bottom: 13px;
    letter-spacing: .01em;
  }
  .algo-block {
    background: #fff;
    border-radius: 14px;
    border: 2px solid #b490ca55;
    font-family: 'Fira Mono', monospace;
    font-size: 1.03rem;
    color: #6247a9;
    box-shadow: 0 3px 22px rgba(49,188,196,0.06);
    padding: 15px 14px;
    overflow-x: auto;
    white-space: pre;
    line-height: 1.55;
    min-height: 240px;
  }
  .algo-line {
    display: block;
    padding: 1.5px 7px 1.5px 8px;
    border-radius: 7px;
    margin-bottom: 3px;
    transition: background 0.3s, color 0.2s;
  }
  .algo-line.active {
    background: #30b9c826;
    color: #30236a;
    font-weight: bold;
    position: relative;
  }
  .algo-line.active:before {
    content: "";
    display: inline-block;
    width: 12px; height: 12px;
    background: #30b9c8;
    border-radius: 30%;
    margin-right: 7px;
    vertical-align: middle;
  }
  .viz-title {
    margin: 0 0 12px 0;
    font-weight: 700;
    color: #6a4bcf;
    font-size: 2rem;
    align-self: flex-start;
  }
  .desc {
    font-size: 1rem;
    color: #473a8fcc;
    margin-bottom: 1.4em;
    align-self: flex-start;
  }
  .inputRow {
    margin: 0 0 20px 0;
    display: flex;
    justify-content: start;
    align-items: center;
    gap: 8px;
    width: 100%;
  }
  input[type=number] {
    font-size: 1.18rem;
    padding: 12px 15px;
    border: 2px solid #9173d1;
    border-radius: 10px;
    width: 170px;
    transition: border 0.3s;
  }
  input[type=number]:focus { border-color: #30b9c8;}
  button {
    background: #6a4bcf;
    color: white;
    border: none;
    border-radius: 9px;
    font-size: 1.07rem;
    padding: 11px 30px;
    cursor: pointer;
    margin-left: 10px;
    transition: background 0.22s;
    user-select: none;
  }
  button:hover:not(:disabled) { background: #30b9c8;}
  button:disabled { background: #cec4ea;}
  .digits-block {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .digits-row {
    margin-top: 22px;
    display: flex;
    justify-content: center;
    gap: 9px;
    min-height: 70px;
    flex-wrap: wrap;
    width: 100%;
    box-sizing: border-box;
  }
  .digits-label {
    margin-top: 10px;
    font-size: 1rem;
    color: #6a4bcfbb;
    font-weight: 600;
    margin-bottom: 2px;
    letter-spacing: .01em;
    align-self: flex-start;
  }
  .digit {
    background: #7e57c2;
    color: white;
    font-family: 'Fira Mono', monospace;
    font-size: 2.2rem;
    width: 47px; height: 67px;
    border-radius: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    filter: drop-shadow(0 3px 10px #4a3495aa);
    transition: transform 0.33s cubic-bezier(0.46, 0.03, 0.52, 0.96), background 0.25s;
    will-change: transform;
    user-select: none;
    margin: 0 2.5px;
    position: relative;
    min-width: 47px;
  }
  .digit.active {
    background: #30b9c8;
    transform: scale(1.13) translateY(-9px);
    box-shadow: 0 10px 20px #30b9c855;
    z-index: 3;
  }
  .digit.removing {
    animation: removeDigit .55s linear forwards;
  }
  @keyframes removeDigit {
    0% {opacity: 1;}
    80% {transform: scale(0.35) translateY(40px);}
    100% {opacity: 0; transform: scale(0.2) translateY(80px);}
  }
  .arrow {
    font-size: 2.62rem;
    color: #6a4bcfbb;
    user-select: none;
    margin: 25px 0 12px 0;
  }
  .step-text {
    margin-top: 26px;
    font-size: 1.11rem;
    color: #4c2f9c;
    min-height: 23px;
    font-weight: 600;
    width: 100%;
    text-align: center;
    padding-bottom: 8px;
  }
  .result-text {
    margin-top: 29px;
    font-size: 1.24rem;
    color: #6a4bcf;
    font-weight: 700;
    width: 100%;
    text-align: center;
    min-height: 32px;
  }
  @media (max-width: 900px) {
    .maincontainer {flex-direction: column; max-width: 99vw;}
    .viz-section, .algo-section {border-right: none;}
    .viz-section {padding: 22px 4vw;}
    .algo-section {padding: 22px 4vw 24px 4vw;}
  }
  @media (max-width: 600px) {
    .maincontainer {margin: 5vw 0;}
    .viz-section, .algo-section {min-width: 10px;}
    .viz-section {padding: 16px 3vw;}
    .algo-section {padding: 12px 3vw;}
    .algo-block {font-size: 0.93rem; min-height: 90px;}
    .desc {font-size: 0.98rem;}
    .digits-label {font-size: 0.94rem;}
    .result-text, .step-text {font-size: 1.01rem;}
    input[type=number] {font-size: 1.01rem;}
    button {font-size: 0.98rem;}
  }
</style>
</head>
<body>
<div class="maincontainer">
  <div class="viz-section">
    <div class="viz-title">Reverse Digits Animation</div>
    <div class="desc">
      Enter a positive integer to visualize its reversal step-by-step.<br>
      <span style="color:#30b9c8">Trailing zeros are removed in the result.</span>
    </div>
    <div class="inputRow">
      <input id="numberInput" type="number" min="0"
        placeholder="E.g. 10400, 7789, 12345"
        aria-label="Enter a positive integer" autocomplete="off" />
      <button id="animateBtn">Animate</button>
    </div>
    <div class="digits-block">
      <div class="digits-label">Original number</div>
      <div class="digits-row" id="inputDigits"></div>
    </div>
    <div class="arrow" aria-hidden="true">↓</div>
    <div class="digits-block">
      <div class="digits-label">Reversed number</div>
      <div class="digits-row" id="outputDigits"></div>
    </div>
    <div class="step-text" id="stepText"></div>
    <div class="result-text" id="finalResult"></div>
  </div>
  <div class="algo-section">
    <div class="algo-title">Algorithm (Pseudocode)</div>
    <div class="algo-block" id="algoBlock"></div>
  </div>
</div>
<script>
  // Algorithm lines (should match animation phases)
  const algorithmLines = [
    "1. Input: N as integer",
    "2. Convert N to string S",
    "3. digits = list(S)",
    "4. While digits ends with '0':",
    "       Remove last element from digits",
    "5. reversed_digits = []",
    "6. For i from len(digits)-1 to 0:",
    "       reversed_digits.append(digits[i])",
    "7. Return ''.join(reversed_digits)"
  ];

  // Highlight lines in the algorithm
  function highlightAlgo(stepIdxs=[]) {
    const algoBlock = document.getElementById('algoBlock');
    algoBlock.innerHTML = algorithmLines.map((l, idx) =>
      `<span class="algo-line${stepIdxs.includes(idx) ? " active" : ""}">${l}</span>`
    ).join('\n');
  }

  function sleep(ms) {
    return new Promise(resolve=>setTimeout(resolve, ms));
  }

  // Renders digits in a container, highlighting the index if needed
  function renderDigits(arr, container, highlightIdx = -1) {
    container.innerHTML = '';
    arr.forEach((digit, index) => {
      const d = document.createElement('div');
      d.className = 'digit';
      d.textContent = digit;
      if (index === highlightIdx) d.classList.add('active');
      container.appendChild(d);
    });
  }

  async function removeTrailingZeros(digits, inputContainer) {
    highlightAlgo([3,4]);
    let count = 0;
    while(digits.length > 1 && digits[digits.length-1]==='0') {
      renderDigits(digits, inputContainer, digits.length-1);
      document.getElementById('stepText').textContent = `Step: Removing trailing zero '${digits[digits.length-1]}' ...`;
      // Animate the removal
      const lastDigit = inputContainer.children[digits.length-1];
      lastDigit.classList.add('removing');
      await sleep(480);
      digits.pop();
      renderDigits(digits, inputContainer);
      await sleep(150);
      count++;
    }
    if (count === 0) {
      document.getElementById('stepText').textContent = "No trailing zeros to remove.";
      await sleep(700);
    }
    return digits;
  }

  async function animateReversal(digits, inputContainer, outputArr, outputContainer) {
    highlightAlgo([5,6,7]);
    for(let i = digits.length-1; i >= 0; i--) {
      renderDigits(digits, inputContainer, i);
      document.getElementById('stepText').textContent = `Step: Moving digit '${digits[i]}' to output.`;
      renderDigits(outputArr, outputContainer);
      // Animate slide/appear
      let tempDigit = document.createElement('div');
      tempDigit.className = 'digit active';
      tempDigit.textContent = digits[i];
      tempDigit.style.opacity = '0';
      tempDigit.style.transform = 'translateY(-40px) scale(0.83)';
      outputContainer.appendChild(tempDigit);
      await sleep(80);
      tempDigit.style.transition = 'transform 0.47s cubic-bezier(.44,.16,.37,1.25), opacity 0.28s';
      tempDigit.style.opacity = '1';
      tempDigit.style.transform = 'none';
      await sleep(420);
      outputArr.push(digits[i]);
      renderDigits(outputArr, outputContainer);
      await sleep(110);
    }
    highlightAlgo([8]);
    document.getElementById('stepText').textContent = "Reversal complete!";
  }

  document.getElementById('animateBtn').onclick = async function() {
    this.disabled = true;
    document.getElementById('inputDigits').innerHTML = "";
    document.getElementById('outputDigits').innerHTML = "";
    document.getElementById('finalResult').textContent = "";
    document.getElementById('stepText').textContent = "";
    highlightAlgo([0,1,2]);
    let val = document.getElementById('numberInput').value.trim();

    if(!val || isNaN(val)) {
      document.getElementById('stepText').textContent = "Please enter a valid integer!";
      this.disabled = false;
      return;
    }
    // Remove leading zeros and keep purely digits
    val = String(BigInt(val));
    let digits = val.split('');
    renderDigits(digits, document.getElementById('inputDigits'));

    digits = await removeTrailingZeros(digits, document.getElementById('inputDigits'));
    if(digits.length===0) {
      highlightAlgo([8]);
      document.getElementById('finalResult').textContent = "Reversed number: 0";
      this.disabled = false;
      return;
    }
    let outputArr = [];
    await animateReversal(digits, document.getElementById('inputDigits'), outputArr, document.getElementById('outputDigits'));
    document.getElementById('finalResult').textContent = `Reversed number: ${outputArr.join('')}`;
    this.disabled = false;
  };

  document.getElementById('numberInput').addEventListener('keypress', e => {
    if(e.key === 'Enter') document.getElementById('animateBtn').click();
  });

  highlightAlgo([0,1,2]);
</script>
</body>
</html>
