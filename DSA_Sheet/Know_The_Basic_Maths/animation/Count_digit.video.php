<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Digits Visualization</title>
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
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        .examples {
            background: #f3e5f5;
            border-left: 4px solid #9c27b0;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        .example-item {
            margin: 8px 0;
            font-family: 'Courier New', monospace;
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
            padding: 10px 15px;
            border: 2px solid #dee2e6;
            border-radius: 6px;
            width: 150px;
            text-align: center;
            font-size: 16px;
            font-family: 'Courier New', monospace;
        }

        .input-group input:focus {
            outline: none;
            border-color: #4caf50;
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
            background: #4caf50;
            color: white;
        }

        .btn-start:hover {
            background: #45a049;
        }

        .btn-reset {
            background: #6c757d;
            color: white;
        }

        .btn-reset:hover {
            background: #545b62;
        }

        .speed-control {
            text-align: center;
            margin: 15px 0;
        }

        .speed-slider {
            width: 150px;
            margin: 0 10px;
        }

        .visualization {
            background: #fafafa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .number-display {
            text-align: center;
            margin-bottom: 30px;
        }

        .number-card {
            background: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            font-size: 2.5em;
            font-weight: bold;
            display: inline-block;
            letter-spacing: 8px;
            font-family: 'Courier New', monospace;
            transition: all 0.3s;
        }

        .digits-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .digit-box {
            background: #2196f3;
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            font-size: 1.8em;
            font-weight: bold;
            font-family: 'Courier New', monospace;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s;
            position: relative;
        }

        .digit-box.show {
            opacity: 1;
            transform: translateY(0);
        }

        .digit-box.highlight {
            background: #ff5722;
            transform: scale(1.1);
        }

        .digit-counter {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ff9800;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .step-info {
            text-align: center;
            margin: 25px 0;
        }

        .current-step {
            font-size: 1.2em;
            color: #495057;
            margin-bottom: 15px;
        }

        .algorithm-box {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .algorithm-title {
            font-size: 1.1em;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .algorithm-step {
            background: #f8f9fa;
            border-left: 4px solid #6c757d;
            padding: 10px 15px;
            margin: 10px 0;
            border-radius: 4px;
            opacity: 0.5;
            transition: all 0.3s;
        }

        .algorithm-step.active {
            background: #e3f2fd;
            border-left-color: #2196f3;
            opacity: 1;
            transform: translateX(5px);
        }

        .result-box {
            background: #e8f5e9;
            border: 2px solid #4caf50;
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
            font-size: 1.8em;
            font-weight: bold;
            color: #2e7d32;
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

        .method-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 8px 16px;
            border: 2px solid #4caf50;
            background: white;
            color: #4caf50;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .tab-btn.active {
            background: #4caf50;
            color: white;
        }

        .division-display {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            text-align: center;
            font-family: 'Courier New', monospace;
            font-size: 1.2em;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Count Digits Visualization</h1>
            <p class="subtitle">See how we count digits in a number step by step</p>
        </div>
        
        <div class="problem-box">
            <strong>Problem:</strong> Given an integer N, return the number of digits in N.
        </div>

        <div class="examples">
            <strong>Examples:</strong><br>
            <div class="example-item">Example 1: Input N = 12345 → Output: 5 digits</div>
            <div class="example-item">Example 2: Input N = 7789 → Output: 4 digits</div>
        </div>

        <div class="method-tabs">
            <button class="tab-btn active" onclick="setMethod('visual')">Visual Method</button>
            <button class="tab-btn" onclick="setMethod('division')">Division Method</button>
        </div>

        <div class="controls">
            <div class="input-group">
                <label>Enter Number:</label>
                <input type="number" id="numberInput" value="12345" min="0">
            </div>
            <button class="btn btn-start" onclick="startDemo()">Start</button>
            <button class="btn btn-reset" onclick="resetDemo()">Reset</button>
        </div>

        <div class="speed-control">
            <label>Speed: </label>
            <input type="range" class="speed-slider" id="speedSlider" min="0.5" max="2.5" step="0.5" value="1">
            <span id="speedDisplay">1x</span>
        </div>

        <div class="visualization">
            <div class="number-display">
                <div class="number-card" id="numberCard">12345</div>
            </div>

            <div class="step-info">
                <div class="current-step" id="stepText">Ready to count digits!</div>
            </div>

            <!-- Visual Method -->
            <div id="visualMethod">
                <div class="digits-container" id="digitsContainer"></div>
                
                <div class="algorithm-box">
                    <div class="algorithm-title">Algorithm Steps:</div>
                    <div class="algorithm-step" id="step1">Step 1: Break the number into individual digits</div>
                    <div class="algorithm-step" id="step2">Step 2: Count each digit one by one</div>
                    <div class="algorithm-step" id="step3">Step 3: Return the total count</div>
                </div>
            </div>

            <!-- Division Method -->
            <div id="divisionMethod" class="hidden">
                <div class="division-display" id="divisionDisplay">
                    Ready to start division method
                </div>
                
                <div class="algorithm-box">
                    <div class="algorithm-title">Division Algorithm:</div>
                    <div class="algorithm-step" id="divStep1">Step 1: Initialize count = 0</div>
                    <div class="algorithm-step" id="divStep2">Step 2: While number > 0: divide by 10, increment count</div>
                    <div class="algorithm-step" id="divStep3">Step 3: Return count</div>
                </div>
            </div>

            <div class="explanation" id="explanation">
                Choose a method above and click Start to see how we count digits!
            </div>

            <div class="result-box" id="resultBox">
                <div class="result-text" id="resultText">Total Digits: 5</div>
            </div>
        </div>
    </div>

    <script>
        let speed = 1;
        let isRunning = false;
        let currentMethod = 'visual';
        
        document.getElementById('speedSlider').addEventListener('input', function() {
            speed = parseFloat(this.value);
            document.getElementById('speedDisplay').textContent = speed + 'x';
        });

        function setMethod(method) {
            currentMethod = method;
            
            // Update tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Show/hide method sections
            document.getElementById('visualMethod').classList.toggle('hidden', method !== 'visual');
            document.getElementById('divisionMethod').classList.toggle('hidden', method !== 'division');
            
            resetDemo();
        }

        async function startDemo() {
            if (isRunning) return;
            isRunning = true;
            
            const number = parseInt(document.getElementById('numberInput').value);
            
            if (isNaN(number) || number < 0) {
                alert('Please enter a valid positive number!');
                isRunning = false;
                return;
            }

            resetDemo();
            document.getElementById('numberCard').textContent = number;
            
            if (currentMethod === 'visual') {
                await visualMethod(number);
            } else {
                await divisionMethod(number);
            }
            
            isRunning = false;
        }

        async function visualMethod(number) {
            const digits = number.toString().split('');
            const container = document.getElementById('digitsContainer');
            
            document.getElementById('stepText').textContent = 'Breaking number into digits...';
            document.getElementById('step1').classList.add('active');
            
            await wait(800 / speed);
            
            // Show each digit one by one
            for (let i = 0; i < digits.length; i++) {
                const digitBox = document.createElement('div');
                digitBox.className = 'digit-box';
                digitBox.innerHTML = `
                    ${digits[i]}
                    <div class="digit-counter">${i + 1}</div>
                `;
                container.appendChild(digitBox);
                
                await wait(200 / speed);
                digitBox.classList.add('show');
                
                document.getElementById('stepText').textContent = `Found digit ${i + 1}: ${digits[i]}`;
                
                if (i === 0) {
                    document.getElementById('step1').classList.remove('active');
                    document.getElementById('step2').classList.add('active');
                }
                
                await wait(600 / speed);
            }
            
            // Highlight all digits
            document.querySelectorAll('.digit-box').forEach(box => {
                box.classList.add('highlight');
            });
            
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step3').classList.add('active');
            document.getElementById('stepText').textContent = `Counting complete! Total digits: ${digits.length}`;
            
            await wait(800 / speed);
            
            // Show result
            document.getElementById('resultText').textContent = `Total Digits: ${digits.length}`;
            document.getElementById('resultBox').classList.add('show');
            document.getElementById('explanation').textContent = `The number ${number} has ${digits.length} digit${digits.length !== 1 ? 's' : ''}.`;
        }

        async function divisionMethod(number) {
            let n = number;
            let count = 0;
            const display = document.getElementById('divisionDisplay');
            
            document.getElementById('stepText').textContent = 'Using division method to count digits...';
            document.getElementById('divStep1').classList.add('active');
            
            display.textContent = `count = 0, number = ${n}`;
            await wait(1000 / speed);
            
            document.getElementById('divStep1').classList.remove('active');
            document.getElementById('divStep2').classList.add('active');
            
            // Handle special case of 0
            if (n === 0) {
                count = 1;
                display.textContent = `Special case: 0 has 1 digit`;
            } else {
                while (n > 0) {
                    count++;
                    const oldN = n;
                    n = Math.floor(n / 10);
                    
                    display.innerHTML = `
                        Step ${count}: ${oldN} ÷ 10 = ${n}<br>
                        count = ${count}, remaining = ${n}
                    `;
                    
                    document.getElementById('stepText').textContent = `Division ${count}: ${oldN} ÷ 10 = ${n}`;
                    
                    await wait(1200 / speed);
                }
            }
            
            document.getElementById('divStep2').classList.remove('active');
            document.getElementById('divStep3').classList.add('active');
            
            document.getElementById('stepText').textContent = `Division complete! Counted ${count} digits`;
            
            await wait(800 / speed);
            
            // Show result
            document.getElementById('resultText').textContent = `Total Digits: ${count}`;
            document.getElementById('resultBox').classList.add('show');
            document.getElementById('explanation').textContent = `Using division method: ${number} has ${count} digit${count !== 1 ? 's' : ''}.`;
        }

        function resetDemo() {
            document.getElementById('resultBox').classList.remove('show');
            document.getElementById('stepText').textContent = 'Ready to count digits!';
            document.getElementById('digitsContainer').innerHTML = '';
            document.getElementById('divisionDisplay').textContent = 'Ready to start division method';
            document.getElementById('explanation').textContent = 'Choose a method above and click Start to see how we count digits!';
            
            // Reset algorithm steps
            document.querySelectorAll('.algorithm-step').forEach(step => {
                step.classList.remove('active');
            });
            
            isRunning = false;
        }

        function wait(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    </script>
</body>
</html>