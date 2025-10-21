<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prime Checker Animation (Modern Style)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root {
      --primary: #2563eb;
      --accent: #22d3ee;
      --fail: #ef4444;
      --success: #10b981;
      --light-bg: #f3f4f6;
      --progress: #818cf8;
      --code-bg: #fde68a;
      --step-bg: #fff7ed;
      --number1-base: #e5e7eb;
    }
    /* body {
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(120deg, #f3f4f6 60%, #e0e7ff 100%);
      font-family: 'Segoe UI', 'Fira Sans', Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 10px 30px 10px;
    } */
    h1 {
      color: var(--primary);
      font-size: 2.1rem;
      font-weight: 700;
      margin: 32px 0 10px 0;
      text-shadow: 0 1px 0 #bcd;
    }
    #inputSection {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-bottom: 24px;
      flex-wrap: wrap;
    }
    input[type="number1"] {
      padding: 10px 14px;
      font-size: 1.22rem;
      width: 120px;
      background: #fff;
      border-radius: 8px;
      border: 1.6px solid #cbd5e1;
      transition: border-color 0.25s;
      outline: none;
      box-shadow: 0 1px 4px rgba(39,99,235,0.08);
    }
    input[type="number1"]:focus {
      border-color: var(--primary);
    }
    button {
      padding: 10px 28px;
      background: var(--primary);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1.18rem;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.2s;
      box-shadow: 0 2px 8px #2563eb22;
    }
    button[disabled] {
      background: #93c5fd;
      cursor: not-allowed;
    }
    #algoBox {
      max-width: 640px;
      width: 100%;
      background: var(--step-bg);
      margin: 0 auto 26px auto;
      border-radius: 10px;
      border: 1.7px solid #fbbf24;
      box-shadow: 0 2px 10px 0 #bfdbfe22;
      padding: 18px 22px 10px 22px;
      text-align: left;
      position: relative;
    }
    #algoBox strong {
      color: #c2410c;
      font-size: 1.12rem;
    }
    #algoBox code {
      display: block;
      background: var(--code-bg);
      padding: 12px 16px 12px 36px;
      border-radius: 8px;
      margin: 10px 0 4px 0;
      font-family: 'Fira Mono', monospace;
      font-size: 1.02rem;
      color: #904400;
      border-left: 4px solid #fbbf24;
      white-space: pre-line;
    }
    #algoStep {
      margin-top: 8px;
      color: #075985;
      font-weight: 600;
      min-height: 26px;
      font-size: 1.08rem;
      padding-left: 5px;
    }
    #progressBar {
      width: 100%;
      height: 8px;
      background: #eef2ff;
      border-radius: 4px;
      margin: 22px 0 10px 0;
      overflow: hidden;
      box-shadow: 0 1px 6px #7c3aed18;
      position: relative;
      max-width: 420px;
      margin-left: auto;
      margin-right: auto;
    }
    #progress {
      width: 0;
      height: 100%;
      background: linear-gradient(90deg, var(--progress) 55%, var(--accent));
      transition: width 0.48s cubic-bezier(.77,.02,.34,1.09);
    }
    #animation {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 18px;
      min-height: 62px;
      transition: min-height 0.2s;
    }
    .number1 {
      width: 42px;
      height: 42px;
      line-height: 42px;
      border-radius: 50%;
      background: var(--number1-base);
      border: 2px solid #cbd5e1;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      font-weight: 700;
      color: #1e293b;
      box-shadow: 0 1px 6px #818cf830;
      opacity: 0.95;
      position: relative;
      transition: 
        background 0.38s cubic-bezier(.7,.2,.31,1),
        border-color 0.44s cubic-bezier(.7,.2,.31,1),
        color 0.32s cubic-bezier(.7,.2,.31,1),
        scale 0.38s;
    }
    .testing {
      background: var(--accent);
      border-color: #06b6d4;
      color: #083344;
      scale: 1.19;
      box-shadow: 0 0 14px #22d3ee66;
      z-index: 2;
      animation: pulse 0.70s;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 14px #22d3ee00; scale: 1;}
      55% { box-shadow: 0 0 30px #22d3ee73; scale: 1.12;}
      100% { box-shadow: 0 0 14px #22d3ee44; scale: 1.19;}
    }
    .divisor {
      background: var(--fail);
      border-color: #991b1b;
      color: #fff;
      animation: shake 0.6s 1;
      scale: 1.08;
    }
    @keyframes shake {
      20% { transform: translateX(-1.5px);}
      40% { transform: translateX(2.5px);}
      60% { transform: translateX(-2.5px);}
      80% { transform: translateX(1.7px);}
      100% { transform: translateX(0);}
    }
    .prime {
      background: var(--success);
      border-color: #047857;
      color: #fff;
      animation: pop 0.4s;
      scale: 1.12;
    }
    @keyframes pop {
      0%   { scale: 0.96;}
      70%  { scale: 1.18;}
      100% { scale: 1.12;}
    }
    #result {
      margin-top: 18px;
      font-size: 1.22rem;
      font-weight: 700;
      color: #27272a;
      letter-spacing: 0.01em;
      min-height: 26px;
      line-height: 1.7;
    }
    .primeText   { color: var(--success);}
    .compositeText { color: var(--fail); }
    @media (max-width: 520px) {
      #algoBox { padding: 16px 6vw 8px 6vw; }
      #animation { gap: 6px; }
      .number1 { width: 36px; height: 36px; font-size: 1.1rem;}
      #progressBar { max-width: 95vw;}
    }
  </style>
</head>
<body>
  <h1 style="text-align:center;">Prime number1? Efficient DSA Animation</h1>
  <div id="inputSection">
    <input type="number1" id="numberInput" min="1" placeholder="Enter N (e.g. 37)" autocomplete="off" />
    <button id="startBtn">Show Animation</button>
  </div>
  <div id="algoBox">
    <strong>Algorithm: Is <span id="algoN">N</span> Prime?</strong>
    <code>
if N &lt; 2:<br>
&nbsp;&nbsp;not prime<br>
for i from 2 to √N:<br>
&nbsp;&nbsp;if N % i == 0:<br>
&nbsp;&nbsp;&nbsp;&nbsp;not prime<br>
prime
    </code>
    <div id="algoStep">Step-by-step actions will appear here.</div>
  </div>
  <div id="progressBar" style="display:none;">
    <div id="progress"></div>
  </div>
  <div id="animation"></div>
  <div id="result"></div>
  <script>
    const animationDiv = document.getElementById('animation');
    const resultDiv = document.getElementById('result');
    const startBtn = document.getElementById('startBtn');
    const input = document.getElementById('numberInput');
    const algoStep = document.getElementById('algoStep');
    const algoN = document.getElementById('algoN');
    const progressBar = document.getElementById('progressBar');
    const progress = document.getElementById('progress');

    function resetAll() {
      animationDiv.innerHTML = '';
      resultDiv.innerHTML = '';
      algoStep.textContent = 'Step-by-step actions will appear here.';
      progressBar.style.display = 'none';
      progress.style.width = '0';
    }

    function createNumberElements(N, upper) {
      animationDiv.innerHTML = '';
      for (let i = 2; i <= upper; i++) {
        const span = document.createElement('span');
        span.className = 'number1';
        span.id = `num-${i}`;
        span.textContent = i;
        animationDiv.appendChild(span);
      }
    }

    function animatePrimeCheck(N) {
      if (N < 2) {
        algoStep.innerHTML = `Since N = ${N} &lt; 2, <span class="compositeText"><b>not prime</b></span>.`;
        resultDiv.innerHTML = `<span class="compositeText">❌ ${N} is <b>NOT</b> a prime number1</span>`;
        startBtn.disabled = false;
        input.disabled = false;
        return;
      }
      let upper = Math.floor(Math.sqrt(N));
      createNumberElements(N, upper);
      let steps = upper - 1 + 1;
      let i = 2;
      let foundDivisor = false;
      progressBar.style.display = '';
      progress.style.width = '0';

      function animateStep() {
        if (i > upper) {
          if (!foundDivisor) {
            algoStep.innerHTML = `Checked all i up to √N. <span class="primeText"><b>No divisors found. This is a PRIME number1!</b></span>`;
            resultDiv.innerHTML = `<span class="primeText">✅ ${N} is a <b>PRIME</b> number1</span>`;
            // Optionally, color all circles green
            document.querySelectorAll('.number1').forEach(s => s.classList.add('prime'));
          }
          startBtn.disabled = false;
          input.disabled = false;
          return;
        }

        let percent = Math.round((i-1)*100/steps);
        progress.style.width = percent + "%";
        const current = document.getElementById(`num-${i}`);
        current.classList.add('testing');

        algoStep.innerHTML = `
          Test if ${N} is divisible by <b>${i}</b>:<br>
          ${N} % ${i} = ${N % i} 
          ${N % i === 0 
            ? "<span class='compositeText'>❌ Yes! Divisor found. Not Prime.</span>" 
            : "<span class='primeText'>✓ No.</span>"
          }
        `;

        setTimeout(() => {
          if (N % i === 0) {
            current.classList.remove('testing');
            current.classList.add('divisor');
            algoStep.innerHTML = `First divisor found: ${N} % ${i} = 0. <span class="compositeText"><b>Not a prime number1.</b></span>`;
            resultDiv.innerHTML = `<span class="compositeText">❌ ${N} is <b>NOT</b> a prime number1</span>`;
            foundDivisor = true;
            // Fade rest
            document.querySelectorAll('.number1').forEach((s, idx) => {
              if (idx+i+2 <= upper+2) s.style.opacity = "0.38";
            });
            startBtn.disabled = false;
            input.disabled = false;
            progress.style.width = "100%";
            return;
          }
          current.classList.remove('testing');
          i++;
          animateStep();
        }, 750);
      }
      animateStep();
    }

    startBtn.addEventListener('click', () => {
      const value = parseInt(input.value, 10);
      if (isNaN(value) || value < 1) {
        resultDiv.innerHTML = '<span style="color:#b91c1c;">Please enter a positive integer greater than 0.</span>';
        return;
      }
      algoN.textContent = value;
      resetAll();
      startBtn.disabled = true;
      input.disabled = true;
      setTimeout(() => {
        animatePrimeCheck(value);
      }, 370);
    });
  </script>
</body>
</html>