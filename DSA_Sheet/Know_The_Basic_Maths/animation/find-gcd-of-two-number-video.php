<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD Algorithm Visualization</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .title {
            font-size: 2.2em;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6c757d;
            font-size: 1.1em;
        }

        .problem-box {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        .controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            align-items: center;
            flex-wrap: wrap;
        }

        .input-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .input-group label {
            font-weight: 600;
            color: #495057;
        }

        .input-group input {
            padding: 8px 12px;
            border: 2px solid #dee2e6;
            border-radius: 6px;
            width: 70px;
            text-align: center;
            font-size: 16px;
        }

        .input-group input:focus {
            outline: none;
            border-color: #2196f3;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s;
        }

        .btn-start {
            background: #2196f3;
            color: white;
        }

        .btn-start:hover {
            background: #1976d2;
        }

        .btn-reset {
            background: #6c757d;
            color: white;
        }

        .btn-reset:hover {
            background: #545b62;
        }

        .visualization {
            background: #fafafa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .numbers-display {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 30px;
        }

        .number-card {
            background: #2196f3;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.8em;
            font-weight: bold;
            min-width: 100px;
            transition: all 0.3s;
        }

        .step-info {
            text-align: center;
            margin-bottom: 25px;
        }

        .current-step {
            font-size: 1.2em;
            color: #495057;
            margin-bottom: 15px;
        }

        .checking-number {
            display: inline-block;
            background: #ff5722;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 1.5em;
            font-weight: bold;
            margin: 0 10px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .division-check {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 25px 0;
        }

        .division-item {
            background: white;
            padding: 15px;
            border-radius: 6px;
            text-align: center;
            border: 2px solid #e9ecef;
        }

        .equation {
            font-size: 1.1em;
            margin-bottom: 8px;
            color: #495057;
        }

        .remainder {
            font-weight: bold;
            color: #dc3545;
        }

        .remainder.zero {
            color: #28a745;
        }

        .progress-area {
            margin: 20px 0;
        }

        .progress-bar {
            background: #e9ecef;
            height: 6px;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .progress-fill {
            background: #2196f3;
            height: 100%;
            width: 0%;
            transition: width 0.3s;
        }

        .progress-text {
            text-align: center;
            color: #6c757d;
            font-size: 0.9em;
        }

        .result-box {
            background: #d4edda;
            border: 2px solid #28a745;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-top: 25px;
            transform: scale(0);
            transition: transform 0.4s;
        }

        .result-box.show {
            transform: scale(1);
        }

        .result-text {
            font-size: 1.5em;
            font-weight: bold;
            color: #155724;
        }

        .explanation {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 6px;
            padding: 15px;
            margin: 15px 0;
            text-align: center;
            color: #856404;
        }

        .speed-control {
            text-align: center;
            margin: 15px 0;
        }

        .speed-slider {
            width: 150px;
            margin: 0 10px;
        }

        .hidden {
            display: none;
        }

        /* Simple success animation */
        .success-glow {
            animation: glow 0.6s ease-in-out;
        }

        @keyframes glow {
            0% { box-shadow: 0 0 5px #28a745; }
            50% { box-shadow: 0 0 20px #28a745; }
            100% { box-shadow: 0 0 5px #28a745; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">GCD Algorithm Visualization</h1>
            <p class="subtitle">See how we find the Greatest Common Divisor step by step</p>
        </div>
        
        <div class="problem-box">
            <strong>What is GCD?</strong><br>
            The Greatest Common Divisor (GCD) of two numbers is the largest number that can divide both of them evenly.
        </div>

        <div class="controls">
            <div class="input-group">
                <label>First Number:</label>
                <input type="number" id="num1" value="20" min="1" max="100">
            </div>
            <div class="input-group">
                <label>Second Number:</label>
                <input type="number" id="num2" value="15" min="1" max="100">
            </div>
            <button class="btn btn-start" onclick="startDemo()">Start</button>
            <button class="btn btn-reset" onclick="resetDemo()">Reset</button>
        </div>

        <div class="speed-control">
            <label>Speed: </label>
            <input type="range" class="speed-slider" id="speedSlider" min="0.5" max="2" step="0.5" value="1">
            <span id="speedDisplay">1x</span>
        </div>

        <div class="visualization">
            <div class="numbers-display">
                <div class="number-card" id="n1Card">20</div>
                <div class="number-card" id="n2Card">15</div>
            </div>

            <div class="step-info">
                <div class="current-step" id="stepText">Ready to find GCD!</div>
                <div id="checkingDiv" class="hidden">
                    Checking if <span class="checking-number" id="currentNum">?</span> divides both numbers
                </div>
            </div>

            <div class="division-check" id="divisionArea"></div>

            <div class="progress-area">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressBar"></div>
                </div>
                <div class="progress-text" id="progressText"></div>
            </div>

            <div class="explanation" id="explanation">
                We'll check numbers from the smaller number down to 1. The first number that divides both evenly is our GCD!
            </div>

            <div class="result-box" id="resultBox">
                <div class="result-text" id="resultText">GCD Found!</div>
            </div>
        </div>
    </div>

    <script>
        let speed = 1;
        let isRunning = false;
        
        document.getElementById('speedSlider').addEventListener('input', function() {
            speed = parseFloat(this.value);
            document.getElementById('speedDisplay').textContent = speed + 'x';
        });

        async function startDemo() {
            if (isRunning) return;
            isRunning = true;
            
            const n1 = parseInt(document.getElementById('num1').value);
            const n2 = parseInt(document.getElementById('num2').value);
            
            if (n1 <= 0 || n2 <= 0) {
                alert('Please enter positive numbers!');
                isRunning = false;
                return;
            }

            resetDemo();
            
            // Update display
            document.getElementById('n1Card').textContent = n1;
            document.getElementById('n2Card').textContent = n2;
            
            const startFrom = Math.min(n1, n2);
            let step = 0;
            const totalSteps = startFrom;
            
            document.getElementById('stepText').textContent = `Starting from ${startFrom}, checking each number...`;
            document.getElementById('checkingDiv').classList.remove('hidden');
            
            for (let i = startFrom; i >= 1; i--) {
                step++;
                
                // Update progress
                const progress = (step / totalSteps) * 100;
                document.getElementById('progressBar').style.width = progress + '%';
                document.getElementById('progressText').textContent = `Step ${step} of ${totalSteps}`;
                
                // Show current number being checked
                document.getElementById('currentNum').textContent = i;
                
                await wait(800 / speed);
                
                // Show division results
                const rem1 = n1 % i;
                const rem2 = n2 % i;
                
                document.getElementById('divisionArea').innerHTML = `
                    <div class="division-item">
                        <div class="equation">${n1} ÷ ${i} = ${Math.floor(n1/i)}</div>
                        <div class="remainder ${rem1 === 0 ? 'zero' : ''}">Remainder: ${rem1}</div>
                    </div>
                    <div class="division-item">
                        <div class="equation">${n2} ÷ ${i} = ${Math.floor(n2/i)}</div>
                        <div class="remainder ${rem2 === 0 ? 'zero' : ''}">Remainder: ${rem2}</div>
                    </div>
                `;
                
                await wait(1000 / speed);
                
                if (rem1 === 0 && rem2 === 0) {
                    // Found GCD!
                    document.getElementById('explanation').textContent = `Perfect! ${i} divides both numbers evenly. This is our GCD!`;
                    document.getElementById('explanation').classList.add('success-glow');
                    
                    document.getElementById('resultText').textContent = `GCD(${n1}, ${n2}) = ${i}`;
                    document.getElementById('resultBox').classList.add('show');
                    
                    // Highlight the number cards
                    document.getElementById('n1Card').style.background = '#28a745';
                    document.getElementById('n2Card').style.background = '#28a745';
                    
                    isRunning = false;
                    return;
                } else {
                    document.getElementById('explanation').textContent = `${i} doesn't divide both numbers evenly. Let's try the next smaller number.`;
                }
                
                await wait(600 / speed);
            }
            
            isRunning = false;
        }

        function resetDemo() {
            document.getElementById('resultBox').classList.remove('show');
            document.getElementById('progressBar').style.width = '0%';
            document.getElementById('progressText').textContent = '';
            document.getElementById('stepText').textContent = 'Ready to find GCD!';
            document.getElementById('checkingDiv').classList.add('hidden');
            document.getElementById('divisionArea').innerHTML = '';
            document.getElementById('explanation').textContent = "We'll check numbers from the smaller number down to 1. The first number that divides both evenly is our GCD!";
            document.getElementById('explanation').classList.remove('success-glow');
            
            // Reset colors
            document.getElementById('n1Card').style.background = '#2196f3';
            document.getElementById('n2Card').style.background = '#2196f3';
            
            isRunning = false;
        }

        function wait(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    </script>
</body>
</html>
