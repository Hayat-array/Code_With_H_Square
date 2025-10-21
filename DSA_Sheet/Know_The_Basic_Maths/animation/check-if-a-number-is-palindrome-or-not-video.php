<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Palindrome Number Checker</title>
    <style>
        /* Responsive Palindrome Checker - Container Optimized */
        .palindrome-checker-wrapper {
            font-family: 'Arial', sans-serif;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: min(20px, 5vw);
            margin: 0;
            width: 100%;
            box-sizing: border-box;
        }
        .palindrome-checker-wrapper .digit {
    width: clamp(30px, 6vw, 37px);
    height: clamp(30px, 6vw, 37px);
    background: linear-gradient(45deg, #007bff, #0056b3);
    color: white;
    border-radius: clamp(6px, 1.5vw, 12px);
    display: flex
;
    align-items: center;
    justify-content: center;
    font-size: clamp(1rem, 4vw, 1.8rem);
    font-weight: bold;
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    animation: palindromeDigitFadeIn 0.6s ease-in;
    transition: all 0.3s ease;
    position: relative;
}
        .palindrome-checker-wrapper .container {
            background: white;
            border-radius: clamp(10px, 2vw, 20px);
            padding: clamp(15px, 4vw, 40px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            max-width: min(1200px, 95vw);
            width: 100%;
            margin-bottom: clamp(10px, 2vw, 20px);
            box-sizing: border-box;
        }

        .palindrome-checker-wrapper .number-section {
    flex: 1;
    min-width: min(200px, 80vw);
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    /* padding: clamp(15px, 3vw, 30px); */
    border-radius: clamp(10px, 2vw, 20px);
    /* border: 3px solid #dee2e6; */
    /* box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); */
    box-sizing: border-box;
}

        .palindrome-checker-wrapper .title {
            text-align: center;
            color: #333;
            margin-bottom: clamp(15px, 3vw, 30px);
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: bold;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: palindromeFadeIn 1s ease-in;
            line-height: 1.2;
        }

        .palindrome-checker-wrapper .problem-statement {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: clamp(15px, 3vw, 25px);
            border-radius: clamp(8px, 1.5vw, 15px);
            margin-bottom: clamp(15px, 3vw, 30px);
            border-left: 5px solid #007bff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .palindrome-checker-wrapper .controls {
            text-align: center;
            margin: clamp(15px, 3vw, 30px) 0;
            padding: clamp(15px, 3vw, 25px);
            background: #f8f9fa;
            border-radius: clamp(8px, 1.5vw, 15px);
            border: 2px solid #dee2e6;
        }

        .palindrome-checker-wrapper .input-group {
            margin: clamp(10px, 2vw, 20px) 0;
        }

        .palindrome-checker-wrapper .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: clamp(5px, 1vw, 10px);
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .palindrome-checker-wrapper .input-group input {
            padding: clamp(8px, 2vw, 15px);
            border: 3px solid #ddd;
            border-radius: clamp(5px, 1vw, 10px);
            font-size: clamp(1rem, 3vw, 1.5rem);
            width: min(200px, 80vw);
            max-width: 100%;
            text-align: center;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .palindrome-checker-wrapper .input-group input:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0,123,255,0.3);
            outline: none;
        }

        .palindrome-checker-wrapper .btn {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border: none;
            padding: clamp(8px, 2vw, 15px) clamp(15px, 3vw, 30px);
            border-radius: clamp(5px, 1vw, 10px);
            font-size: clamp(0.9rem, 2.5vw, 1.2rem);
            cursor: pointer;
            transition: all 0.3s ease;
            margin: clamp(5px, 1vw, 10px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }

        .palindrome-checker-wrapper .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,123,255,0.4);
        }

        .palindrome-checker-wrapper .visualization {
            margin: clamp(20px, 4vw, 40px) 0;
            text-align: center;
        }

        .palindrome-checker-wrapper .number-display {
            font-size: clamp(2rem, 8vw, 4rem);
            font-weight: bold;
            color: #007bff;
            margin: clamp(15px, 3vw, 30px) 0;
            letter-spacing: clamp(3px, 1vw, 15px);
            text-align: center;
            word-break: break-all;
        }

        .palindrome-checker-wrapper .comparison-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: clamp(20px, 4vw, 40px) 0;
            gap: clamp(10px, 3vw, 30px);
            flex-wrap: wrap;
        }

        /* .palindrome-checker-wrapper .number-section {
            flex: 1;
            min-width: min(250px, 90vw);
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: clamp(15px, 3vw, 30px);
            border-radius: clamp(10px, 2vw, 20px);
            border: 3px solid #dee2e6;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            box-sizing: border-box;
        } */

        .palindrome-checker-wrapper .section-title {
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            font-weight: bold;
            margin-bottom: clamp(10px, 2vw, 20px);
            color: #333;
        }

        .palindrome-checker-wrapper .digit-container {
            display: flex;
            justify-content: center;
            gap: clamp(3px, 1vw, 10px);
            margin: clamp(10px, 2vw, 20px) 0;
            flex-wrap: wrap;
        }

        /* .palindrome-checker-wrapper .digit {
            width: clamp(35px, 8vw, 60px);
            height: clamp(35px, 8vw, 60px);
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border-radius: clamp(6px, 1.5vw, 12px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1rem, 4vw, 1.8rem);
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
            animation: palindromeDigitFadeIn 0.6s ease-in;
            transition: all 0.3s ease;
            position: relative;
        } */

        .palindrome-checker-wrapper .digit.original {
            background: linear-gradient(45deg, #007bff, #0056b3);
        }

        .palindrome-checker-wrapper .digit.reversed {
            background: linear-gradient(45deg, #28a745, #20c997);
            animation-delay: 0.3s;
        }

        .palindrome-checker-wrapper .digit.highlight-match {
            background: linear-gradient(45deg, #28a745, #20c997);
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(40,167,69,0.4);
        }

        .palindrome-checker-wrapper .digit.highlight-mismatch {
            background: linear-gradient(45deg, #dc3545, #c82333);
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(220,53,69,0.4);
        }

        .palindrome-checker-wrapper .vs-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.2rem, 4vw, 2rem);
            font-weight: bold;
            color: #6c757d;
            width: clamp(50px, 12vw, 80px);
            height: clamp(50px, 12vw, 80px);
            background: white;
            border-radius: 50%;
            border: 3px solid #dee2e6;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        .palindrome-checker-wrapper .result-display {
            margin: clamp(20px, 4vw, 40px) 0;
            padding: clamp(15px, 3vw, 30px);
            border-radius: clamp(10px, 2vw, 20px);
            text-align: center;
            font-size: clamp(1.1rem, 3vw, 1.5rem);
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.5s ease;
        }

        .palindrome-checker-wrapper .result-palindrome {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            animation: palindromeSuccessPulse 1s infinite;
        }

        .palindrome-checker-wrapper .result-not-palindrome {
            background: linear-gradient(45deg, #dc3545, #c82333);
            color: white;
            animation: palindromeErrorShake 0.5s ease-in-out;
        }

        .palindrome-checker-wrapper .process-visualization {
            background: #f8f9fa;
            padding: clamp(15px, 3vw, 30px);
            border-radius: clamp(8px, 1.5vw, 15px);
            margin: clamp(15px, 3vw, 30px) 0;
            border: 2px solid #dee2e6;
        }

        .palindrome-checker-wrapper .step {
            padding: clamp(8px, 2vw, 15px);
            margin: clamp(8px, 1.5vw, 15px) 0;
            background: white;
            border-radius: clamp(5px, 1vw, 10px);
            border-left: 5px solid #007bff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            opacity: 0.5;
            transform: translateX(-20px);
            font-size: clamp(0.9rem, 2.2vw, 1rem);
        }

        .palindrome-checker-wrapper .step.active {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border-left-color: #28a745;
            transform: translateX(0);
            opacity: 1;
            animation: palindromeSlideIn 0.5s ease;
        }

        .palindrome-checker-wrapper .method-tabs {
            display: flex;
            justify-content: center;
            gap: clamp(5px, 1vw, 10px);
            margin: clamp(15px, 3vw, 30px) 0;
            flex-wrap: wrap;
        }

        .palindrome-checker-wrapper .tab {
            padding: clamp(6px, 1.5vw, 12px) clamp(12px, 3vw, 25px);
            background: #e9ecef;
            border: none;
            border-radius: clamp(12px, 3vw, 25px);
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: clamp(0.8rem, 2vw, 1rem);
        }

        .palindrome-checker-wrapper .tab.active {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }

        .palindrome-checker-wrapper .method-content {
            display: none;
            padding: clamp(15px, 3vw, 25px);
            background: white;
            border-radius: clamp(8px, 1.5vw, 15px);
            border: 2px solid #dee2e6;
            margin: clamp(10px, 2vw, 20px) 0;
        }

        .palindrome-checker-wrapper .method-content.active {
            display: block;
            animation: palindromeFadeIn 0.5s ease;
        }

        .palindrome-checker-wrapper .complexity-analysis {
            background: linear-gradient(135deg, #fff3e0, #ffe0b2);
            padding: clamp(15px, 3vw, 25px);
            border-radius: clamp(8px, 1.5vw, 15px);
            margin: clamp(10px, 2vw, 20px) 0;
            border: 2px solid #ff9800;
        }

        .palindrome-checker-wrapper .example-section {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            padding: clamp(15px, 3vw, 25px);
            border-radius: clamp(8px, 1.5vw, 15px);
            margin: clamp(15px, 3vw, 30px) 0;
            border: 2px solid #2196f3;
        }

        .palindrome-checker-wrapper .position-indicator {
            display: flex;
            justify-content: center;
            gap: clamp(3px, 1vw, 10px);
            margin: clamp(8px, 1.5vw, 15px) 0;
            flex-wrap: wrap;
        }

        .palindrome-checker-wrapper .position {
            width: clamp(20px, 5vw, 30px);
            height: clamp(20px, 5vw, 30px);
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(0.7rem, 2vw, 0.9rem);
            font-weight: bold;
            color: #6c757d;
        }

        .palindrome-checker-wrapper .position.active {
            background: linear-gradient(45deg, #ffc107, #e0a800);
            color: #333;
            animation: palindromePulse 1s infinite;
        }

        /* Responsive Pre Code Blocks */
        .palindrome-checker-wrapper pre {
            background: #f8f9fa;
            padding: clamp(10px, 2vw, 20px);
            border-radius: clamp(5px, 1vw, 10px);
            overflow-x: auto;
            border: 2px solid #dee2e6;
            font-size: clamp(0.8rem, 2vw, 1rem);
            line-height: 1.4;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        /* Scoped Animations */
        @keyframes palindromeFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes palindromeDigitFadeIn {
            from { opacity: 0; transform: scale(0) rotate(180deg); }
            to { opacity: 1; transform: scale(1) rotate(0deg); }
        }

        @keyframes palindromeSlideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes palindromeSuccessPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        @keyframes palindromeErrorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        @keyframes palindromePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Additional Responsive Breakpoints */
        @media (max-width: 480px) {
            .palindrome-checker-wrapper .comparison-container {
                flex-direction: column;
                gap: 15px;
            }
            
            .palindrome-checker-wrapper .digit-container {
                gap: 5px;
            }
            
            .palindrome-checker-wrapper .btn {
                width: 100%;
                margin: 5px 0;
            }
            
            .palindrome-checker-wrapper .method-tabs {
                flex-direction: column;
                align-items: center;
            }
            
            .palindrome-checker-wrapper .tab {
                width: 100%;
                max-width: 200px;
            }
        }

        @media (max-width: 360px) {
            .palindrome-checker-wrapper .digit {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
            
            .palindrome-checker-wrapper .vs-divider {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }

        /* High DPI / Retina Display Optimization */
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .palindrome-checker-wrapper .digit {
                box-shadow: 0 3px 8px rgba(0,123,255,0.4);
            }
        }

        /* Container Query Support (when available) */
        @supports (container-type: inline-size) {
            .palindrome-checker-wrapper .container {
                container-type: inline-size;
            }
            
            @container (max-width: 600px) {
                .palindrome-checker-wrapper .comparison-container {
                    flex-direction: column;
                }
            }
        }

        /* Print Styles */
        @media print {
            .palindrome-checker-wrapper {
                background: white;
                color: black;
            }
            
            .palindrome-checker-wrapper .btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Wrapped in a unique container to scope all styles -->
    <div class="palindrome-checker-wrapper">
        <div class="container">
            <h1 class="title">Palindrome Number Checker</h1>
            
            <div class="problem-statement">
                <h3><strong>Problem Statement:</strong></h3>
                <p><strong>Given an integer N, return true if it is a palindrome else return false.</strong></p>
                <p><strong>Note:</strong> A palindrome is a number that reads the same backward as forward.</p>
                
                <div class="example-section">
                    <h4>Examples:</h4>
                    <p><strong>Example 1:</strong> Input: N = 4554, Output: Palindrome Number</p>
                    <p><strong>Explanation:</strong> The reverse of 4554 is 4554, therefore it is a palindrome.</p>
                    <p><strong>Example 2:</strong> Input: N = 7789, Output: Not Palindrome</p>
                    <p><strong>Explanation:</strong> The reverse of 7789 is 9877, therefore it is not a palindrome.</p>
                </div>
            </div>

            <div class="controls">
                <div class="input-group">
                    <label>Enter a Number:</label>
                    <input type="number" id="numberInput" value="4554" min="0" max="999999999">
                </div>
                <button class="btn" onclick="checkPalindrome()">🔄 Check Palindrome</button>
                <button class="btn" onclick="showAlgorithms()">⚙️ Show Algorithms</button>
                <button class="btn" onclick="runDemo()">🎬 Demo Examples</button>
            </div>

            <div class="visualization" id="visualization">
                <!-- Content will be generated by JavaScript -->
            </div>

            <div class="method-tabs" id="methodTabs" style="display: none;">
                <button class="tab active" onclick="showMethod('reverse')">Reverse & Compare</button>
                <button class="tab" onclick="showMethod('twopointer')">Two Pointer</button>
                <button class="tab" onclick="showMethod('string')">String Method</button>
                <button class="tab" onclick="showMethod('recursive')">Recursive Method</button>
            </div>

            <div id="methodContent">
                <!-- Method explanations will be shown here -->
            </div>
        </div>
    </div>

    <script>
        let currentNumber = 4554;
        let animationSpeed = 800;
        let demoIndex = 0;
        const demoNumbers = [4554, 121, 1331, 7789, 12321, 1234];

        function checkPalindrome() {
            currentNumber = parseInt(document.getElementById('numberInput').value) || 0;
            visualizePalindromeCheck(currentNumber);
        }

        function visualizePalindromeCheck(number) {
            const visualization = document.getElementById('visualization');
            const numStr = Math.abs(number).toString();
            const reversedStr = numStr.split('').reverse().join('');
            const isPalindrome = numStr === reversedStr;
            
            visualization.innerHTML = `
                <div class="number-display">${Math.abs(number)}</div>
                
                <div class="comparison-container">
                    <div class="number-section">
                        <div class="section-title">Original Number</div>
                        <div class="digit-container" id="originalDigits"></div>
                        <div class="position-indicator" id="originalPositions"></div>
                    </div>
                    
                    <div class="vs-divider">VS</div>
                    
                    <div class="number-section">
                        <div class="section-title">Reversed Number</div>
                        <div class="digit-container" id="reversedDigits"></div>
                        <div class="position-indicator" id="reversedPositions"></div>
                    </div>
                </div>
                
                <div class="process-visualization">
                    <h3>Step-by-Step Process:</h3>
                    <div id="stepsList"></div>
                </div>
                
                <div class="result-display ${isPalindrome ? 'result-palindrome' : 'result-not-palindrome'}" id="finalResult">
                    <div style="font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 15px;">
                        ${isPalindrome ? '✅ PALINDROME' : '❌ NOT PALINDROME'}
                    </div>
                    <div>
                        ${number} ${isPalindrome ? 'reads the same forwards and backwards!' : 'is different when reversed.'}
                    </div>
                </div>
            `;

            animatePalindromeCheck(numStr, reversedStr, isPalindrome);
        }

        function animatePalindromeCheck(original, reversed, isPalindrome) {
            const originalContainer = document.getElementById('originalDigits');
            const reversedContainer = document.getElementById('reversedDigits');
            const originalPositions = document.getElementById('originalPositions');
            const reversedPositions = document.getElementById('reversedPositions');
            const stepsList = document.getElementById('stepsList');
            
            // Create steps
            const steps = [
                `Original number: ${original}`,
                `Extracting digits: ${original.split('').join(', ')}`,
                `Reversing the digits: ${reversed.split('').join(', ')}`,
                `Reversed number: ${reversed}`,
                `Comparing: ${original} ${isPalindrome ? '==' : '!='} ${reversed}`,
                `Result: ${isPalindrome ? 'PALINDROME' : 'NOT PALINDROME'}`
            ];
            
            steps.forEach((step, index) => {
                const stepElement = document.createElement('div');
                stepElement.className = 'step';
                stepElement.innerHTML = `<strong>Step ${index + 1}:</strong> ${step}`;
                stepsList.appendChild(stepElement);
            });
            
            // Create position indicators
            for (let i = 0; i < original.length; i++) {
                const originalPos = document.createElement('div');
                originalPos.className = 'position';
                originalPos.textContent = i + 1;
                originalPositions.appendChild(originalPos);
                
                const reversedPos = document.createElement('div');
                reversedPos.className = 'position';
                reversedPos.textContent = original.length - i;
                reversedPositions.appendChild(reversedPos);
            }
            
            // Animate digit appearance and comparison
            original.split('').forEach((digit, index) => {
                setTimeout(() => {
                    // Add original digit
                    const originalDigit = document.createElement('div');
                    originalDigit.className = 'digit original';
                    originalDigit.textContent = digit;
                    originalContainer.appendChild(originalDigit);
                    
                    // Add reversed digit
                    const reversedDigit = document.createElement('div');
                    reversedDigit.className = 'digit reversed';
                    reversedDigit.textContent = reversed[index];
                    reversedContainer.appendChild(reversedDigit);
                    
                    // Highlight positions
                    originalPositions.children[index].classList.add('active');
                    reversedPositions.children[index].classList.add('active');
                    
                    // Activate current step
                    if (index < 3) {
                        document.querySelectorAll('.step')[index].classList.add('active');
                    }
                    
                    // Compare digits and highlight
                    setTimeout(() => {
                        if (digit === reversed[index]) {
                            originalDigit.classList.add('highlight-match');
                            reversedDigit.classList.add('highlight-match');
                        } else {
                            originalDigit.classList.add('highlight-mismatch');
                            reversedDigit.classList.add('highlight-mismatch');
                        }
                        
                        // Show final steps
                        if (index === original.length - 1) {
                            setTimeout(() => {
                                document.querySelectorAll('.step')[3].classList.add('active');
                                setTimeout(() => {
                                    document.querySelectorAll('.step')[4].classList.add('active');
                                    setTimeout(() => {
                                        document.querySelectorAll('.step')[5].classList.add('active');
                                    }, 800);
                                }, 800);
                            }, 500);
                        }
                    }, 300);
                }, index * animationSpeed);
            });
        }

        function showAlgorithms() {
            const methodTabs = document.getElementById('methodTabs');
            methodTabs.style.display = 'flex';
            showMethod('reverse');
        }

        function showMethod(method) {
            // Update active tab
            document.querySelectorAll('.palindrome-checker-wrapper .tab').forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');
            
            const methodContent = document.getElementById('methodContent');
            
            const methods = {
                reverse: {
                    title: 'Reverse and Compare Method',
                    description: 'Create a reversed version of the number and compare it with the original.',
                    complexity: 'Time: O(log N), Space: O(log N)',
                    steps: [
                        'Extract all digits from the number',
                        'Reverse the order of digits',
                        'Compare original with reversed number',
                        'Return true if they match, false otherwise'
                    ],
                    code: `function isPalindromeReverse(n) {
    const original = Math.abs(n).toString();
    const reversed = original.split('').reverse().join('');
    return original === reversed;
}`
                },
                twopointer: {
                    title: 'Two Pointer Method',
                    description: 'Use two pointers from both ends to compare digits without creating reversed number.',
                    complexity: 'Time: O(log N), Space: O(1)',
                    steps: [
                        'Convert number to string',
                        'Use left pointer at start, right pointer at end',
                        'Compare digits at both pointers',
                        'Move pointers towards center',
                        'Return false if any mismatch, true if all match'
                    ],
                    code: `function isPalindromeTwoPointer(n) {
    const str = Math.abs(n).toString();
    let left = 0, right = str.length - 1;
    
    while (left < right) {
        if (str[left] !== str[right]) {
            return false;
        }
        left++;
        right--;
    }
    return true;
}`
                },
                string: {
                    title: 'String Comparison Method',
                    description: 'Convert to string and compare with its reverse using built-in methods.',
                    complexity: 'Time: O(log N), Space: O(log N)',
                    steps: [
                        'Convert number to string',
                        'Create reversed string',
                        'Compare strings directly'
                    ],
                    code: `function isPalindromeString(n) {
    const str = Math.abs(n).toString();
    return str === str.split('').reverse().join('');
}`
                },
                recursive: {
                    title: 'Recursive Method',
                    description: 'Recursively check if first and last digits match, then check the middle part.',
                    complexity: 'Time: O(log N), Space: O(log N)',
                    steps: [
                        'Base case: single digit is always palindrome',
                        'Extract first and last digits',
                        'Compare first and last digits',
                        'Recursively check middle part',
                        'Return false if any mismatch'
                    ],
                    code: `function isPalindromeRecursive(n, str = n.toString()) {
    if (str.length <= 1) return true;
    if (str[0] !== str[str.length - 1]) return false;
    return isPalindromeRecursive(n, str.slice(1, -1));
}`
                }
            };
            
            const methodInfo = methods[method];
            methodContent.innerHTML = `
                <div class="method-content active">
                    <div class="process-visualization">
                        <div style="font-size: clamp(1.4rem, 3.5vw, 1.8rem); font-weight: bold; margin-bottom: 20px; text-align: center;">${methodInfo.title}</div>
                        <p><strong>Description:</strong> ${methodInfo.description}</p>
                        
                        <div class="complexity-analysis">
                            <h4>Complexity Analysis:</h4>
                            <p><strong>${methodInfo.complexity}</strong></p>
                        </div>
                        
                        <h4>Algorithm Steps:</h4>
                        <div id="algorithmSteps">
                            ${methodInfo.steps.map((step, index) => 
                                `<div class="step" id="step${index}">${step}</div>`
                            ).join('')}
                        </div>
                        
                        <h4>Code Implementation:</h4>
                        <pre><code>${methodInfo.code}</code></pre>
                        
                        <button class="btn" onclick="animateAlgorithm('${method}')">▶️ Animate This Algorithm</button>
                        <button class="btn" onclick="testMethod('${method}')">🧪 Test on Current Number</button>
                    </div>
                </div>
            `;
        }

        function animateAlgorithm(method) {
            const steps = document.querySelectorAll('#algorithmSteps .step');
            steps.forEach(step => step.classList.remove('active'));
            
            steps.forEach((step, index) => {
                setTimeout(() => {
                    step.classList.add('active');
                }, index * 1000);
            });
        }

        function testMethod(method) {
            const testNumber = Math.abs(currentNumber);
            let result;
            
            switch(method) {
                case 'reverse':
                    result = isPalindromeReverse(testNumber);
                    break;
                case 'twopointer':
                    result = isPalindromeTwoPointer(testNumber);
                    break;
                case 'string':
                    result = isPalindromeString(testNumber);
                    break;
                case 'recursive':
                    result = isPalindromeRecursive(testNumber);
                    break;
            }
            
            alert(`Using ${method} method:\nNumber: ${testNumber}\nResult: ${result ? 'PALINDROME' : 'NOT PALINDROME'}`);
        }

        function runDemo() {
            const demoNumber = demoNumbers[demoIndex % demoNumbers.length];
            document.getElementById('numberInput').value = demoNumber;
            visualizePalindromeCheck(demoNumber);
            demoIndex++;
        }

        // Implementation of different palindrome checking methods
        function isPalindromeReverse(n) {
            const original = Math.abs(n).toString();
            const reversed = original.split('').reverse().join('');
            return original === reversed;
        }

        function isPalindromeTwoPointer(n) {
            const str = Math.abs(n).toString();
            let left = 0, right = str.length - 1;
            
            while (left < right) {
                if (str[left] !== str[right]) {
                    return false;
                }
                left++;
                right--;
            }
            return true;
        }

        function isPalindromeString(n) {
            const str = Math.abs(n).toString();
            return str === str.split('').reverse().join('');
        }

        function isPalindromeRecursive(n, str = n.toString()) {
            if (str.length <= 1) return true;
            if (str[0] !== str[str.length - 1]) return false;
            return isPalindromeRecursive(n, str.slice(1, -1));
        }

        // Initialize with default number
        window.onload = function() {
            visualizePalindromeCheck(currentNumber);
        };
    </script>
</body>
</html>
