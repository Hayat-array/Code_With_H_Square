<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modern Sum of N Natural Numbers Visualization</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --bg: #18122B;
      --panel: #393053;
      --accent: #635dff;
      --highlight: #ffa53c;
      --text: #ececec;
      --shadow: 0 4px 32px rgba(86, 80, 255, 0.09);
    }
    .bodyr {
      background: var(--bg);
      min-height: 100vh;
      color: var(--text);
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0;
      font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
      border: 2px solid #504586;
      border-radius: 10px;
    }
    h2 {
      margin: 2rem 0 0.5rem 0;
      font-weight: 600;
      letter-spacing: -0.5px;
    }
    .input-bar {
      background: var(--panel);
      box-shadow: var(--shadow);
      border-radius: 18px;
      padding: 16px 32px;
      margin-top: 12px;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .input-bar input[type="number"] {
      width: 72px;
      padding: 8px;
      border: none;
      border-radius: 6px;
      font-size: 1.15rem;
      background: #221c37;
      color: var(--text);
      text-align: center;
      outline: none;
      box-shadow: 0 2px 4px #221c3718;
      transition: background 0.2s;
    }
    .input-bar button {
      background: linear-gradient(90deg, var(--accent), #7062c7);
      color: #fff;
      border: none;
      padding: 10px 26px;
      border-radius: 8px;
      font-size: 1.07rem;
      font-weight: bold;
      cursor: pointer;
      transition: filter 0.2s;
      box-shadow: 0 2px 14px #5e53ff40;
    }
    .input-bar button:hover { filter: brightness(1.12); }
    #visualization {
      margin-top: 38px;
      min-height: 100px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 14px;
    }
    .number-box {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, var(--panel) 60%, #504586);
      border-radius: 13px;
      font-size: 1.23rem;
      font-weight: 600;
      color: var(--accent);
      box-shadow: 0 2px 12px #635dff33;
      opacity: 0;
      transform: scale(0.8) translateY(10px);
      transition: all 0.35s cubic-bezier(.62,.28,.23,1.07);
    }
    .number-box.visible {
      opacity: 1;
      transform: scale(1) translateY(0);
    }
    .number-box.active {
      box-shadow: 0 0 20px var(--highlight), 0 4px 32px #ffc27824;
      background: linear-gradient(135deg, #ffe29f 60%, var(--highlight));
      color: #1c1a24;
    }
    #progress {
      margin: 1.5rem auto 1rem auto;
      position: relative;
      height: 8px;
      width: 400px;
      background: #221c37;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 14px #1c1a2433;
    }
    #progress-bar {
      position: absolute;
      left: 0; top: 0; bottom: 0;
      background: linear-gradient(90deg, #ffa53c 40%, var(--accent));
      width: 0;
      border-radius: 12px;
      transition: width 0.6s cubic-bezier(.59,.1,.12,1.01);
      box-shadow: 0 0 10px #ffa53c80;
    }
    #sum-container {
      margin-top: 1.5rem;
      font-size: 1.32rem;
      font-weight: 500;
      color: var(--highlight);
      letter-spacing: -0.5px;
      text-align: center;
      min-height: 32px;
    }
    @media (max-width: 450px) {
      #progress { width: 95vw; }
      .number-box { width: 38px; height: 38px; font-size: 1.08rem; }
    }
  </style>
</head>
<body>
  <div class="bodyr">
  <h2>Sum of First N Natural Numbers</h2>
  <div class="input-bar">
    <input type="number" id="inputN" placeholder="Enter N" min="1" max="50" value="7">
    <button onclick="startAnimation()">Visualize</button>
  </div>
  <div id="progress">
    <div id="progress-bar"></div>
  </div>
  <div id="visualization"></div>
  <div id="sum-container"></div>
</div>
  <script>
    function sleep(ms) { return new Promise(res => setTimeout(res, ms)); }
    function reset() {
      document.getElementById('visualization').innerHTML = "";
      document.getElementById('sum-container').textContent = "";
      document.getElementById('progress-bar').style.width = "0";
    }
    async function startAnimation() {
      reset();
      const N = parseInt(document.getElementById('inputN').value);
      if (isNaN(N) || N < 1) return;

      // Create boxes
      let vis = document.getElementById('visualization');
      const boxes = [];
      for (let i = 1; i <= N; i++) {
        let div = document.createElement('div');
        div.className = 'number-box';
        div.textContent = i;
        vis.appendChild(div);
        boxes.push(div);
        await sleep(70);
        div.classList.add('visible');
      }

      let sum = 0;
      for (let i = 0; i < N; i++) {
        boxes[i].classList.add('active');
        document.getElementById('progress-bar').style.width = ((i+1)/N*100) + '%';
        sum += i + 1;

        document.getElementById('sum-container').textContent =
          `Current Sum: 1 + 2 + ... + ${i + 1} = ${sum}`;

        await sleep(800);
        boxes[i].classList.remove('active');
      }

      document.getElementById('sum-container').textContent =
        `Final Sum of first ${N} natural numbers: ${sum}`;
      document.getElementById('progress-bar').style.width = "100%";
    }
  </script>
</body>
</html>