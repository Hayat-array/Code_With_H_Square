<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Armstrong Number Visualization – Algorithm & Animation</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap');
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
    display: flex;
    flex-direction: column;
    gap: 0;
    border: 2.5px solid #b490ca36;
  }
  .viz-section {
    flex: 2;
    min-width: 330px;
    padding: 36px 42px 32px 42px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .algo-section {
    width: 97%;
    min-width: 320px;
    box-sizing: border-box;
    padding: 18px 10px 10px 15px;
    background: #f7f4ff;
    display: flex;
    border: 2px solid #9173d1; 
    border-radius:15px;
    flex-direction: column;
    align-items: stretch;
    margin-bottom: 10px;
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
    min-height: 180px;
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
  buttonr {
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
  buttonr:hover:not(:disabled) { background: #30b9c8;}
  buttonr:disabled { background: #cec4ea;}
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
  .digit, .powered {
    background: #7e57c2;
    color: white;
    font-family: 'Fira Mono', monospace;
    font-size: 2.2rem;
    min-width: 47px;
    height: 67px;
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
  }
  .digit.active, .powered.active {
    background: #30b9c8;
    transform: scale(1.13) translateY(-9px);
    box-shadow: 0 10px 20px #30b9c855;
    z-index: 3;
  }
  .powered {
    background: #f7f4ff;
    color: #6247a9;
    border: 2px dashed #b490ca;
    min-width: 54px;
    box-sizing: border-box;
    font-size: 1.6rem;
    height: 50px;
    margin-top: 8px;
    transition: background 0.2s;
  }
  .plus {
    display: flex;
    align-items: center;
    font-weight: bold;
    font-size: 2rem;
    margin: 0 7px 0 3px;
    color: #30b9c8;
    user-select: none;
    height: 60px;
  }
  .equals {
    display: flex; align-items: center;
    font-weight: bolder;
    font-size: 2rem;
    margin: 0 10px 0 7px;
    color: #6a4bcf;
    user-select: none;
    height: 60px;
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
  @media (max-width: 790px) {
    .maincontainer { max-width:99vw; }
    .viz-section, .algo-section {padding: 16px 5vw;}
    .algo-section {margin-bottom: 13px;}
  }
  @media (max-width: 600px) {
    .maincontainer {margin: 5vw 0;}
    .viz-section, .algo-section {min-width: 10px;}
    .viz-title { font-size: 1.15rem;}
    .algo-block {font-size: 0.92rem; min-height: 75px;}
    .desc {font-size: 0.94rem;}
    .digits-label {font-size: 0.94rem;}
    .result-text, .step-text {font-size: 1.01rem;}
    input[type=number] {font-size: 0.98rem;}
    buttonr {font-size: 0.94rem;}
    .digits-row {gap: 6px;}
    .digit, .powered {font-size: 1.23rem;}
  }
</style>
</head>
<body>
<div class="maincontainer">
  <div class="viz-section">
    <div class="viz-title">Armstrong Number Animation</div>
    <div class="desc">
      Enter a positive integer to see if it's an <b>Armstrong number</b>.<br>
      We'll show the calculation step-by-step visually below.
    </div>
    <div class="inputRow">
      <input id="numberInput" type="number" min="0"
        placeholder="E.g. 153, 371, 9474, 123"
        aria-label="Enter a positive integer" autocomplete="off" />
      <buttonr id="animateBtn">Animate</buttonr>
    </div>
    <div class="digits-block">
      <div class="digits-label">Digits</div>
      <div class="digits-row" id="digitsRow"></div>
    </div>
    <div class="digits-block">
      <div class="digits-label" style="margin-top:12px">Calculation <small>(Each digit to power of n)</small></div>
      <div class="digits-row" id="powersRow"></div>
    </div>
    <div class="digits-block">
      <div class="digits-label" style="margin-top:12px">Result</div>
      <div class="digits-row" id="sumRow"></div>
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
  // Pseudocode for Armstrong number step-by-step
  const algorithmLines = [
    "1. Input: N as integer",
    "2. digits = list(str(N))",
    "3. n = len(digits)",
    "4. sum = 0",
    "5. For each digit d in digits:",
    "       sum += int(d) ** n",
    "6. If sum == N:",
    "       return True",
    "   else:",
    "       return False"
  ];

  function highlightAlgo(steps=[]) {
    const algoBlock = document.getElementById('algoBlock');
    algoBlock.innerHTML = algorithmLines.map((l, i) =>
      `<span class="algo-line${steps.includes(i) ? " active" : ""}">${l}</span>`).join('\n');
  }

  function sleep(ms) { return new Promise(r=>setTimeout(r, ms)); }

  function renderDigits(arr, container, highlightIdx = -1) {
    container.innerHTML = '';
    arr.forEach((digit, idx) => {
      const el = document.createElement('div');
      el.className = 'digit' + (highlightIdx === idx ? ' active' : '');
      el.textContent = digit;
      container.appendChild(el);
    });
  }

  function renderPowers(arrPowers, container, highlightIdx = -1) {
    container.innerHTML = '';
    arrPowers.forEach((pow, idx) => {
      const el = document.createElement('div');
      el.className = 'powered' + (highlightIdx === idx ? ' active' : '');
      el.innerHTML = pow; // innerHTML to allow for superscript display
      container.appendChild(el);
      if(idx < arrPowers.length -1 ) {
        const plus = document.createElement('div');
        plus.className = 'plus';
        plus.textContent = '+';
        container.appendChild(plus);
      }
    });
  }

  function renderSum(parts, container) {
    container.innerHTML = '';
    parts.forEach((num, idx) => {
      const el = document.createElement('div');
      el.className = 'powered active';
      el.textContent = num;
      container.appendChild(el);
      if(idx < parts.length -1 ) {
        const plus = document.createElement('div');
        plus.className = 'plus';
        plus.textContent = '+';
        container.appendChild(plus);
      }
    });
    if (parts.length > 1) {
      const eq = document.createElement('div');
      eq.className = 'equals';
      eq.textContent = '=';
      container.appendChild(eq);
      const sumEl = document.createElement('div');
      sumEl.className = 'powered active';
      sumEl.style.fontWeight = 'bold';
      sumEl.textContent = parts.reduce((a,b)=>a+b, 0);
      container.appendChild(sumEl);
    }
  }

  document.getElementById('animateBtn').onclick = async function() {
    // Reset UI
    this.disabled = true;
    ['digitsRow','powersRow','sumRow','stepText','finalResult'].forEach(id => document.getElementById(id).innerHTML = '');
    highlightAlgo([0,1,2,3]);
    let val = document.getElementById('numberInput').value.trim();
    if (!val || isNaN(val) || Number(val)<0) {
      document.getElementById('stepText').textContent = "Please enter a valid positive integer!";
      this.disabled = false; return;
    }
    const N = val;
    const digits = String(N).split('');
    const n = digits.length;
    renderDigits(digits, document.getElementById('digitsRow'), -1);
    document.getElementById('stepText').textContent = `Step: Splitting "${N}" into digits and counting n = ${n}.`;
    await sleep(800);
    highlightAlgo([4,5]);

    // Animate each digit raised to n
    let sum = 0;
    let powers = [];
    for (let i=0;i<digits.length;i++) {
      renderDigits(digits, document.getElementById('digitsRow'), i);
      const powStr = `<span>${digits[i]}<sup>${n}</sup></span>`;
      powers.push(powStr);
      renderPowers(powers, document.getElementById('powersRow'), i);
      document.getElementById('stepText').textContent = `Step: Calculating ${digits[i]}<sup>${n}</sup>`;
      await sleep(850);
    }

    // Now compute numeric values
    document.getElementById('stepText').textContent = `Step: Calculating each digit raised to power ${n}.`;
    let poweredNums = digits.map(x => Math.pow(Number(x), n));
    renderPowers(poweredNums.map((y,i)=>`${digits[i]}<sup>${n}</sup>=${y}`), document.getElementById('powersRow'), -1);
    await sleep(900);

    // Show sum
    highlightAlgo([4,5]);
    renderSum(poweredNums, document.getElementById('sumRow'));
    document.getElementById('stepText').textContent = `Step: Summing ${poweredNums.join(' + ')} = ${poweredNums.reduce((a,b)=>a+b,0)}`;
    await sleep(1100);

    // Final check
    highlightAlgo([6, N==poweredNums.reduce((a,b)=>a+b,0)?7:8]);
    renderDigits(digits, document.getElementById('digitsRow'), -1);
    const finalIs = (N == poweredNums.reduce((a,b)=>a+b,0));
    document.getElementById('finalResult').innerHTML =
      finalIs
      ? `<span style="color:#20a95c">✔ ${N} is an Armstrong number!</span>`
      : `<span style="color:#d23844">✖ ${N} is NOT an Armstrong number.</span>`;
    document.getElementById('stepText').textContent = finalIs
      ? `The sum matches the original number. Armstrong!`
      : `Result does not match the original. Not Armstrong.`;
    this.disabled = false;
  };

  document.getElementById('numberInput').addEventListener('keypress', e => {
    if(e.key === 'Enter') document.getElementById('animateBtn').click();
  });

  highlightAlgo([0,1,2,3]);
</script>
</body>
</html>
