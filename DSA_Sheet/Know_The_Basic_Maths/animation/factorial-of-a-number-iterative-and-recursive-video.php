<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Factorial Calculator</title>
    <style>

        .container {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
            position: relative;
            border: 2px solid #825da6ff;
            border-radius: 10px;
        }

        /* Compact particles for mobile */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 4s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.5; }
            50% { transform: translateY(-15px) rotate(180deg); opacity: 0.8; }
        }

        .container {
            position: relative;
            z-index: 10;
            max-width: 100%;
            margin: 0 auto;
            padding: 10px;
        }

        /* Compact header */
        .header {
            text-align: center;
            margin-bottom: 15px;
            padding: 15px 10px;
        }

        .header h1 {
            font-size: 2.2em;
            font-weight: 900;
            background: linear-gradient(45deg, #ffd700, #ffed4e, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
            margin-bottom: 8px;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 15px #ffd700); }
            to { filter: drop-shadow(0 0 25px #ffd700); }
        }

        .subtitle {
            font-size: 0.9em;
            opacity: 0.9;
            margin-bottom: 10px;
        }

        /* Compact input section */
        .input-section {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 20px;
            margin-bottom: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        .input-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        input[type="number"] {
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            width: 100px;
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            color: #333;
            font-weight: bold;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn1-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn1 {
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            flex: 1;
            min-width: 90px;
            max-width: 120px;
        }

        .btn1:active {
            transform: scale(0.95);
        }

        .btn1.iterative {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
        }

        .btn1.recursive {
            background: linear-gradient(45deg, #f093fb, #f5576c);
        }

        .btn1.both {
            background: linear-gradient(45deg, #ffecd2, #fcb69f);
        }

        /* Single column layout for mobile */
        .methods-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .method-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .method-title {
            text-align: center;
            font-size: 1.3em;
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
        }

        /* Compact calculation display */
        .calculation-display {
            min-height: 200px;
            max-height: 300px;
            overflow-y: auto;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
        }

        .step {
            margin: 8px 0;
            padding: 10px 12px;
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0;
            transform: translateY(-15px) scale(0.9);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            font-size: 13px;
            line-height: 1.4;
        }

        .step::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .step.animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .step.animate::before {
            transform: scaleY(1);
        }

        .step.highlight {
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.3), rgba(255, 215, 0, 0.1));
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.2);
        }

        .step.current {
            background: linear-gradient(135deg, rgba(255, 105, 180, 0.4), rgba(255, 105, 180, 0.2));
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.01); }
        }

        .multiplication {
            color: #ffd700;
            font-weight: bold;
            text-shadow: 0 0 8px rgba(255, 215, 0, 0.5);
            font-size: 1.1em;
        }

        .result {
            color: #4caf50;
            font-weight: bold;
            font-size: 1.2em;
            text-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
        }

        .final-result {
            text-align: center;
            font-size: 1.8em;
            font-weight: 900;
            background: linear-gradient(45deg, #ffd700, #ffed4e, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-top: 15px;
            padding: 15px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 215, 0, 0.5);
            animation: finalGlow 2s ease-in-out infinite alternate;
        }

        @keyframes finalGlow {
            from { 
                filter: drop-shadow(0 0 15px #ffd700);
                transform: scale(1);
            }
            to { 
                filter: drop-shadow(0 0 25px #ffd700);
                transform: scale(1.02);
            }
        }

        .loading {
            text-align: center;
            font-size: 1.2em;
            color: #ffeb3b;
            animation: loadingPulse 1.5s infinite;
            padding: 20px;
        }

        @keyframes loadingPulse {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.03); }
        }

        .explanation {
            margin-bottom: 15px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            border-left: 3px solid #4caf50;
            font-style: italic;
            font-size: 12px;
            line-height: 1.5;
        }

        /* Mobile-specific effects */
        .sparkle {
            position: fixed;
            width: 3px;
            height: 3px;
            background: #ffd700;
            border-radius: 50%;
            pointer-events: none;
            z-index: 999;
            animation: sparkleAnim 1s ease-out forwards;
        }

        @keyframes sparkleAnim {
            to {
                transform: scale(0);
                opacity: 0;
            }
        }

        .number-animate {
            display: inline-block;
            animation: numberPop 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        @keyframes numberPop {
            0% { transform: scale(0) rotate(-90deg); opacity: 0; }
            50% { transform: scale(1.1) rotate(0deg); }
            100% { transform: scale(1) rotate(0deg); opacity: 1; }
        }

        /* Tab-style method selector for mobile */
        .method-tabs {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 5px;
            margin-bottom: 15px;
            backdrop-filter: blur(10px);
        }

        .tab-btn1 {
            flex: 1;
            padding: 10px 8px;
            border: none;
            background: transparent;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 13px;
            font-weight: bold;
        }

        .tab-btn1.active {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Scrollbar styling for mobile */
        .calculation-display::-webkit-scrollbar {
            width: 4px;
        }

        .calculation-display::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
        }

        .calculation-display::-webkit-scrollbar-thumb {
            background: rgba(255, 215, 0, 0.5);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>
    
    <div class="container">
        <div class="header">
            <h1>✨ FACTORIAL CALC ✨</h1>
            <p class="subtitle">Math Magic on Mobile</p>
        </div>

        <div class="input-section">
            <div class="input-group">
                <div class="input-row">
                    <label>Number:</label>
                    <input type="number" id="numberInput" min="1" max="10" value="5">
                </div>
                <div class="btn1-row">
                    <button class="btn1 iterative" onclick="calculateIterative()">
                        🔄 Loop
                    </button>
                    <button class="btn1 recursive" onclick="calculateRecursive()">
                        🔁 Recursive
                    </button>
                    <button class="btn1 both" onclick="calculateBoth()">
                        ⚡ Both
                    </button>
                </div>
            </div>
        </div>

        <!-- Tab-style method selector -->
        <div class="method-tabs">
            <button class="tab-btn1 active" onclick="switchTab('iterative')">🔄 Iterative</button>
            <button class="tab-btn1" onclick="switchTab('recursive')">🔁 Recursive</button>
        </div>

        <div class="methods-container">
            <!-- Iterative Method -->
            <div id="iterative-tab" class="tab-content active">
                <div class="method-section">
                    <div class="explanation">
                        <strong>🎯 Loop Method:</strong> Start with 1, multiply by each number up to N.
                    </div>
                    <div id="iterativeDisplay" class="calculation-display">
                        <p style="text-align: center; margin-top: 30px; opacity: 0.7;">
                            🚀 Tap a button to start!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recursive Method -->
            <div id="recursive-tab" class="tab-content">
                <div class="method-section">
                    <div class="explanation">
                        <strong>🎯 Recursive:</strong> Break N! into N × (N-1)! until base case.
                    </div>
                    <div id="recursiveDisplay" class="calculation-display">
                        <p style="text-align: center; margin-top: 30px; opacity: 0.7;">
                            🌟 Watch recursion unfold!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Create fewer particles for mobile performance
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = window.innerWidth < 768 ? 20 : 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 4 + 2 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 4 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Lightweight sparkle effect for mobile
        function createSparkles(element) {
            const rect = element.getBoundingClientRect();
            for (let i = 0; i < 5; i++) {
                const sparkle = document.createElement('div');
                sparkle.className = 'sparkle';
                sparkle.style.left = (rect.left + Math.random() * rect.width) + 'px';
                sparkle.style.top = (rect.top + Math.random() * rect.height) + 'px';
                document.body.appendChild(sparkle);
                
                setTimeout(() => sparkle.remove(), 1000);
            }
        }

        // Tab switching functionality
        function switchTab(tabName) {
            // Update tab buttons
            document.querySelectorAll('.tab-btn1').forEach(btn1 => btn1.classList.remove('active'));
            event.target.classList.add('active');

            // Update tab content
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            document.getElementById(tabName + '-tab').classList.add('active');
        }

        function getInputValue() {
            const input = document.getElementById('numberInput');
            const value = parseInt(input.value);
            if (isNaN(value) || value < 1 || value > 10) {
                alert('Please enter a number between 1 and 10 for mobile! ✨');
                return null;
            }
            return value;
        }

        function calculateIterative() {
            const n = getInputValue();
            if (n === null) return;

            // Switch to iterative tab
            switchTabProgrammatically('iterative');

            const display = document.getElementById('iterativeDisplay');
            display.innerHTML = '<div class="loading">🔄 Calculating...</div>';

            setTimeout(() => {
                let steps = [];
                let result = 1;
                
                steps.push(`<div class="step">🚀 Calculate ${n}!</div>`);
                steps.push(`<div class="step">Start: result = 1</div>`);

                for (let i = 1; i <= n; i++) {
                    const oldResult = result;
                    result *= i;
                    steps.push(`<div class="step">Step ${i}: ${oldResult} × ${i} = <span class="multiplication">${result}</span></div>`);
                }

                steps.push(`<div class="step result">🎉 ${n}! = ${result}</div>`);

                animateSteps(display, steps, () => {
                    const finalDiv = document.createElement('div');
                    finalDiv.className = 'final-result';
                    finalDiv.innerHTML = `✨ ${n}! = ${result} ✨`;
                    display.appendChild(finalDiv);
                    createSparkles(finalDiv);
                });
            }, 800);
        }

        function calculateRecursive() {
            const n = getInputValue();
            if (n === null) return;

            // Switch to recursive tab
            switchTabProgrammatically('recursive');

            const display = document.getElementById('recursiveDisplay');
            display.innerHTML = '<div class="loading">🔁 Recursing...</div>';

            setTimeout(() => {
                let steps = [];
                steps.push(`<div class="step">🚀 Calculate ${n}! recursively</div>`);
                generateRecursiveSteps(n, 0, steps);
                
                const result = factorial(n);
                steps.push(`<div class="step result">🎉 ${n}! = ${result}</div>`);

                animateSteps(display, steps, () => {
                    const finalDiv = document.createElement('div');
                    finalDiv.className = 'final-result';
                    finalDiv.innerHTML = `✨ ${n}! = ${result} ✨`;
                    display.appendChild(finalDiv);
                    createSparkles(finalDiv);
                });
            }, 800);
        }

        function calculateBoth() {
            calculateIterative();
            setTimeout(() => calculateRecursive(), 3000);
        }

        function switchTabProgrammatically(tabName) {
            document.querySelectorAll('.tab-btn1').forEach(btn1 => btn1.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            
            if (tabName === 'iterative') {
                document.querySelector('.tab-btn1:first-child').classList.add('active');
            } else {
                document.querySelector('.tab-btn1:last-child').classList.add('active');
            }
            document.getElementById(tabName + '-tab').classList.add('active');
        }

        function generateRecursiveSteps(n, depth, steps) {
            const indent = '  '.repeat(depth);
            
            if (n === 0 || n === 1) {
                steps.push(`<div class="step">${indent}🎯 Base: ${n}! = 1</div>`);
                return 1;
            } else {
                steps.push(`<div class="step">${indent}📞 ${n}! = ${n} × ${n-1}!</div>`);
                steps.push(`<div class="step">${indent}⏳ Find ${n-1}! first...</div>`);
                
                const subResult = generateRecursiveSteps(n - 1, depth + 1, steps);
                const result = n * subResult;
                
                steps.push(`<div class="step">${indent}✅ ${n-1}! = ${subResult}</div>`);
                steps.push(`<div class="step">${indent}🔥 ${n}! = ${n} × ${subResult} = <span class="multiplication">${result}</span></div>`);
                
                return result;
            }
        }

        function factorial(n) {
            if (n === 0 || n === 1) return 1;
            return n * factorial(n - 1);
        }

        function animateSteps(container, steps, callback) {
            container.innerHTML = '';
            let currentStep = 0;

            function showNextStep() {
                if (currentStep < steps.length) {
                    const stepElement = document.createElement('div');
                    stepElement.innerHTML = steps[currentStep];
                    const stepDiv = stepElement.firstElementChild;
                    container.appendChild(stepDiv);

                    stepDiv.classList.add('current');
                    
                    setTimeout(() => {
                        stepDiv.classList.add('animate');
                        stepDiv.classList.remove('current');
                        
                        if (stepDiv.innerHTML.includes('multiplication') || stepDiv.innerHTML.includes('result')) {
                            setTimeout(() => {
                                stepDiv.classList.add('highlight');
                                createSparkles(stepDiv);
                            }, 200);
                        }
                    }, 100);

                    currentStep++;
                    setTimeout(showNextStep, 800);
                } else {
                    setTimeout(callback, 500);
                }
            }

            showNextStep();
        }

        // Initialize
        window.onload = function() {
            createParticles();
            
            // Auto-start demo
            setTimeout(() => {
                calculateIterative();
            }, 1500);
        };

        // Touch-friendly input handling
        document.getElementById('numberInput').addEventListener('input', function() {
            if (this.value > 10) this.value = 10;
            if (this.value < 1) this.value = 1;
        });

        // Enter key support
        document.getElementById('numberInput').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                calculateBoth();
            }
        });

        // Touch feedback for buttons
        document.querySelectorAll('.btn1').forEach(btn1 => {
            btn1.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.95)';
            });
            
            btn1.addEventListener('touchend', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>