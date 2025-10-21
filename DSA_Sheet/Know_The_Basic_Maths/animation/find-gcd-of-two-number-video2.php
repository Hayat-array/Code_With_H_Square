<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD Visualization</title>
    <style>
      

        .title {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: bold;
        }

        .problem-statement {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 5px solid #007bff;
        }

        .visualization {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            gap: 30px;
            margin: 30px 0;
        }

        .number-section {
            text-align: center;
            flex: 1;
        }

        .number-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .number-display {
            font-size: 3em;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        .blocks-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            max-width: 300px;
            margin: 0 auto;
        }

        .block {
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 3px;
            animation: fadeIn 0.5s ease-in;
            transition: all 0.3s ease;
        }

        .block.highlight {
            background: #28a745;
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(40, 167, 69, 0.5);
        }

        .gcd-section {
            text-align: center;
            margin: 40px 0;
            padding: 30px;
            background: linear-gradient(45deg, #28a745, #20c997);
            border-radius: 15px;
            color: white;
        }

        .gcd-display {
            font-size: 4em;
            font-weight: bold;
            margin: 20px 0;
            animation: bounce 1s infinite;
        }

        .factors-section {
            margin: 30px 0;
        }

        .factors-title {
            font-size: 1.3em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .factors-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .factor {
            padding: 8px 15px;
            background: #e9ecef;
            border-radius: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .factor.common {
            background: #ffc107;
            color: #333;
            animation: glow 1.5s infinite;
        }

        .factor.gcd {
            background: #28a745;
            color: white;
            transform: scale(1.2);
            animation: pulse 1s infinite;
        }

        .controls {
            text-align: center;
            margin: 30px 0;
        }

        .input-group {
            margin: 15px;
        }

        .input-group label {
            display: inline-block;
            width: 80px;
            font-weight: bold;
        }

        .input-group input {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1.2em;
            width: 100px;
            text-align: center;
        }

        .btnr {
            background: #007bff;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1.1em;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px;
        }

        .btnr:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .algorithm-steps {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .step {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .step.active {
            background: #d4edda;
            border-left: 5px solid #28a745;
            animation: slideIn 0.5s ease;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0); }
            to { opacity: 1; transform: scale(1); }
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 5px rgba(255, 193, 7, 0.5); }
            50% { box-shadow: 0 0 20px rgba(255, 193, 7, 0.8); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">GCD Visualization</h1>
        
        <div class="problem-statement">
            <h3>Problem Statement:</h3>
            <p>Given two integers N1 and N2, find their Greatest Common Divisor (GCD).</p>
            <p><strong>The GCD is the largest number that divides both integers without leaving a remainder.</strong></p>
        </div>

        <div class="controls">
            <div class="input-group">
                <label>N1:</label>
                <input type="number" id="num1" value="20" min="1" max="50">
            </div>
            <div class="input-group">
                <label>N2:</label>
                <input type="number" id="num2" value="15" min="1" max="50">
            </div>
            <button class="btnr" onclick="visualizeGCD()">Visualize GCD</button>
            <button class="btnr" onclick="animateAlgorithm()">Show Algorithm</button>
        </div>

        <div class="visualization" id="visualization">
            <!-- Content will be generated by JavaScript -->
        </div>

        <div class="gcd-section" id="gcdSection" style="display: none;">
            <h2>Greatest Common Divisor</h2>
            <div class="gcd-display" id="gcdDisplay">5</div>
            <p>This is the largest number that divides both numbers evenly!</p>
        </div>

        <div class="algorithm-steps" id="algorithmSteps" style="display: none;">
            <h3>Algorithm Steps:</h3>
            <div id="stepsList"></div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        let algorithmInterval;

        function createBlocks(number, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';
            
            for (let i = 0; i < number; i++) {
                const block = document.createElement('div');
                block.className = 'block';
                block.style.animationDelay = `${i * 0.05}s`;
                container.appendChild(block);
            }
        }

        function findFactors(num) {
            const factors = [];
            for (let i = 1; i <= num; i++) {
                if (num % i === 0) {
                    factors.push(i);
                }
            }
            return factors;
        }

        function findGCD(a, b) {
            while (b !== 0) {
                let temp = b;
                b = a % b;
                a = temp;
            }
            return a;
        }

        function visualizeGCD() {
            const num1 = parseInt(document.getElementById('num1').value);
            const num2 = parseInt(document.getElementById('num2').value);
            
            const visualization = document.getElementById('visualization');
            const gcdSection = document.getElementById('gcdSection');
            const algorithmSteps = document.getElementById('algorithmSteps');
            
            algorithmSteps.style.display = 'none';
            
            // Create visualization structure
            visualization.innerHTML = `
                <div class="number-section">
                    <div class="number-title">Number 1</div>
                    <div class="number-display">${num1}</div>
                    <div class="blocks-container" id="blocks1"></div>
                    <div class="factors-section">
                        <div class="factors-title">Factors of ${num1}:</div>
                        <div class="factors-list" id="factors1"></div>
                    </div>
                </div>
                <div class="number-section">
                    <div class="number-title">Number 2</div>
                    <div class="number-display">${num2}</div>
                    <div class="blocks-container" id="blocks2"></div>
                    <div class="factors-section">
                        <div class="factors-title">Factors of ${num2}:</div>
                        <div class="factors-list" id="factors2"></div>
                    </div>
                </div>
            `;

            // Create visual blocks
            createBlocks(num1, 'blocks1');
            createBlocks(num2, 'blocks2');

            // Find and display factors
            setTimeout(() => {
                const factors1 = findFactors(num1);
                const factors2 = findFactors(num2);
                const commonFactors = factors1.filter(f => factors2.includes(f));
                const gcd = Math.max(...commonFactors);

                displayFactors(factors1, 'factors1', commonFactors, gcd);
                displayFactors(factors2, 'factors2', commonFactors, gcd);

                // Highlight common factor blocks
                highlightCommonFactorBlocks(num1, num2, gcd);

                // Show GCD
                setTimeout(() => {
                    gcdSection.style.display = 'block';
                    document.getElementById('gcdDisplay').textContent = gcd;
                }, 1500);
            }, 1000);
        }

        function displayFactors(factors, containerId, commonFactors, gcd) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';
            
            factors.forEach((factor, index) => {
                setTimeout(() => {
                    const factorElement = document.createElement('div');
                    factorElement.className = 'factor';
                    factorElement.textContent = factor;
                    
                    if (commonFactors.includes(factor)) {
                        factorElement.classList.add('common');
                        if (factor === gcd) {
                            setTimeout(() => {
                                factorElement.classList.add('gcd');
                            }, 1000);
                        }
                    }
                    
                    container.appendChild(factorElement);
                }, index * 200);
            });
        }

        function highlightCommonFactorBlocks(num1, num2, gcd) {
            const blocks1 = document.querySelectorAll('#blocks1 .block');
            const blocks2 = document.querySelectorAll('#blocks2 .block');
            
            // Highlight blocks that represent the GCD
            for (let i = 0; i < gcd; i++) {
                setTimeout(() => {
                    if (blocks1[i]) blocks1[i].classList.add('highlight');
                    if (blocks2[i]) blocks2[i].classList.add('highlight');
                }, i * 100);
            }
        }

        function animateAlgorithm() {
            const num1 = parseInt(document.getElementById('num1').value);
            const num2 = parseInt(document.getElementById('num2').value);
            const algorithmSteps = document.getElementById('algorithmSteps');
            const stepsList = document.getElementById('stepsList');
            
            // Euclidean algorithm steps
            const steps = [];
            let a = num1, b = num2;
            steps.push(`Start with: GCD(${a}, ${b})`);
            
            while (b !== 0) {
                const remainder = a % b;
                steps.push(`${a} ÷ ${b} = ${Math.floor(a/b)} remainder ${remainder}`);
                steps.push(`GCD(${a}, ${b}) = GCD(${b}, ${remainder})`);
                a = b;
                b = remainder;
            }
            steps.push(`Since remainder is 0, GCD = ${a}`);
            
            algorithmSteps.style.display = 'block';
            stepsList.innerHTML = '';
            
            // Add all steps
            steps.forEach((step, index) => {
                const stepElement = document.createElement('div');
                stepElement.className = 'step';
                stepElement.textContent = `Step ${index + 1}: ${step}`;
                stepsList.appendChild(stepElement);
            });
            
            // Animate steps
            currentStep = 0;
            if (algorithmInterval) clearInterval(algorithmInterval);
            
            algorithmInterval = setInterval(() => {
                if (currentStep < steps.length) {
                    document.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
                    document.querySelectorAll('.step')[currentStep].classList.add('active');
                    currentStep++;
                } else {
                    clearInterval(algorithmInterval);
                }
            }, 1500);
        }

        // Initialize with default values
        window.onload = function() {
            visualizeGCD();
        };
    </script>
</body>
</html>
