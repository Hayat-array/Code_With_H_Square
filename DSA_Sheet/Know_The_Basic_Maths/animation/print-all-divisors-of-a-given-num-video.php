<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Divisors Animation DSA</title>
  <style>
    
    h1 {
      color: #2d3748;
    }
    #inputSection {
      margin-bottom: 34px;
    }
    input[type="number1"] {
      padding: 8px;
      font-size: 1.1rem;
      width: 90px;
      border-radius: 5px;
      border: 1px solid #cbd5e1;
    }
    button {
      padding: 7px 16px;
      background: #3182ce;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 1.1rem;
      cursor: pointer;
      margin-left: 8px;
    }
    button[disabled] {
      background: #90cdf4;
      cursor: not-allowed;
    }
    #algoBox {
      margin: 0 auto 20px auto;
      max-width: 600px;
      background: #fffbea;
      border: 1.5px solid #ecc94b;
      border-radius: 8px;
      padding: 20px 18px 12px 18px;
      text-align: left;
      box-shadow: 0 2px 7px 0 rgba(0,0,0,0.05);
      font-size: 1.05rem;
      position: relative;
    }
    #algoBox code {
      display: block;
      padding: 7px 7px 7px 24px;
      background: #f2e9d8;
      margin: 8px 0;
      border-radius: 5px;
      font-family: 'Fira Mono', monospace;
      color: #92400e;
    }
    #algoStep {
      margin-top: 6px;
      color: #7b341e;
      min-height: 28px;
      font-weight: 600;
      font-size: 1.07rem;
      text-align: center;
    }
    #animation {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 25px;
      min-height: 56px;
      text-align: center;
    }
    .number1 {
      width: 32px;
      height: 32px;
      line-height: 32px;
      border-radius: 50%;
      background: #e2e8f0;
      border: 2px solid #cbd5e1;
      display: inline-block;
      font-weight: 600;
      font-size: 1.1rem;
      transition: background 0.25s, border-color 0.25s;
      text-align: center;
    }
    .testing {
      background: #f6e05e;
      border-color: #ecc94b;
      color: #7b341e;
      text-align: center;
    }
    .divisor {
      text-align: center;
      background: #68d391;
      border-color: #38a169;
      color: #22543d;
    }
    #result {
      margin-top: 16px;
      font-size: 1.15rem;
    }
    #num{
        justify-content: center;
        justify-items: center;
        align-items: center;
        margin-left: 5px;
    }
  </style>
</head>
<body>
  <h1>DSA Animation: Divisors of a number1</h1>
  <div id="inputSection">
    <input type="number1" id="numberInput" min="1" placeholder="Enter N (e.g. 36)" />
    <button id="startBtn">Show Animation</button>
  </div>
  <div id="algoBox">
    <strong>Algorithm: Find Divisors of <span id="algoN">N</span></strong>
    <code>
for i from 1 to N:<br>
&nbsp;&nbsp;if N modulo i is 0:<br>
&nbsp;&nbsp;&nbsp;&nbsp;add i to divisors
    </code>
    <div id="algoStep">Step-by-step actions will appear here as the animation runs.</div>
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

    function reset() {
      animationDiv.innerHTML = '';
      resultDiv.textContent = '';
      algoStep.textContent = 'Step-by-step actions will appear here as the animation runs.';
    }

    function createNumberElements(N) {
      animationDiv.innerHTML = '';
      for (let i = 1; i <= N; i++) {
        const span = document.createElement('span');
        span.className = ' number1 ';
        span.id = `num-${ i }`;
        span.textContent = i;
        animationDiv.appendChild(span);
      }
    }

    function animateDivisors(N) {
      let divisors = [];
      let i = 1;

      function step() {
        if (i > N) {
          algoStep.innerHTML = `Done! All divisors are collected.`;
          resultDiv.innerHTML = `<strong>Divisors of ${N}: [${divisors.join(', ')}]</strong>`;
          startBtn.disabled = false;
          input.disabled = false;
          return;
        }
        const current = document.getElementById(`num-${i}`);
        current.classList.add('testing');
        algoStep.innerHTML = `Test if ${N} is divisible by <b>${i}</b>:<br>
        ${N} % ${i} = ${N % i} 
        ${N % i === 0 ? "<span style='color: #276749;'>✓ Yes! Add " + i + " as divisor.</span>" : "<span style='color: #b83280;'>✗ No.</span>"}`;

        setTimeout(() => {
          if (N % i === 0) {
            current.classList.add('divisor');
            divisors.push(i);
          }
          current.classList.remove('testing');
          i++;
          step();
        }, 700); // 700ms delay for visualization
      }
      step();
    }

    startBtn.addEventListener('click', () => {
      const value = parseInt(input.value, 10);
      if (isNaN(value) || value < 1) {
        resultDiv.textContent = 'Please enter a positive integer greater than 0.';
        return;
      }
      algoN.textContent = value;
      reset();
      createNumberElements(value);
      startBtn.disabled = true;
      input.disabled = true;
      setTimeout(() => {
        animateDivisors(value);
      }, 400);
    });
  </script>
</body>
</html>