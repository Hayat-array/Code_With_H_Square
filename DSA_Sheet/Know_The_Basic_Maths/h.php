<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reverse Digits of A Number</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    .code-container {
      height: 300px;              /* Fixed height */
      overflow-y: scroll;         /* Scrollbar when content overflows vertically */
      background: #1e1e1e;        /* Dark background */
      color: #ffffff;             /* Light text */
      padding: 1rem;
      font-family: monospace;
      border-radius: 8px;
      border: 1px solid #444;
      scrollbar-width: auto;      /* For Firefox */
      scrollbar-color: #888 #1e1e1e;
    }

    /* Show scrollbar always in Chrome, Edge, etc. */
    .code-container::-webkit-scrollbar {
      width: 8px;
    }

    .code-container::-webkit-scrollbar-thumb {
      background-color: #888;
      border-radius: 4px;
    }

    .code-container::-webkit-scrollbar-track {
      background-color: #1e1e1e;
    }
    /* Main container styling */
    .code-container {
      background: linear-gradient(135deg, #0d324d, #1a2a6c, #b21f1f, #fdbb2d);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
      padding: 30px;
      color: #e0e0e0;
      margin-top: 20px;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Section styling */
    .section-card {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 12px;
      margin-bottom: 20px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .section-header {
      background: linear-gradient(45deg, #007bff, #0056b3);
      color: white;
      padding: 15px 20px;
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }

    .section-header:hover {
      background: linear-gradient(45deg, #0056b3, #007bff);
      transform: translateY(-2px);
    }

    .section-header::after {
      content: "▼";
      transition: transform 0.3s ease;
    }

    .section-header.collapsed::after {
      transform: rotate(-90deg);
    }

    .section-content {
      padding: 20px;
      transition: all 0.3s ease;
    }

    .section-content.hidden {
      display: none;
    }

    /* Code block styling with vibrant colors */
    .code-block {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      border-radius: 12px;
      padding: 20px;
      margin: 15px 0;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .code-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .code-title {
      color: #ffffff;
      font-weight: 600;
      font-size: 18px;
    }

    .copy-btn {
      background: linear-gradient(45deg, #00ffff, #0077ff);
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.4);
    }

    .copy-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.8);
    }

    /* Colorful syntax highlighting */
    .code-content {
      background: #1a1a2e;
      border-radius: 8px;
      padding: 20px;
      overflow-x: auto;
      font-family: 'Courier New', monospace;
      line-height: 1.6;
    }

    .code-content pre {
      margin: 0;
      color: #f8f8f2;
    }

    /* Vibrant syntax colors */
    .comment { color: #6a994e; font-style: italic; }
    .keyword { color: #ff6b6b; font-weight: bold; }
    .function { color: #4ecdc4; font-weight: bold; }
    .string { color: #ffe66d; }
    .number { color: #a8e6cf; }
    .operator { color: #ff8b94; }
    .variable { color: #95e1d3; }
    .type { color: #fce38a; }
    .preprocessor { color: #c7ceea; }
    .iostream { color: #ff9999; }
    .namespace { color: #87ceeb; }

    /* Language switcher */
    .lang-switcher {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .lang-btn {
      background: linear-gradient(45deg, #667eea, #764ba2);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .lang-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .lang-btn.active {
      background: linear-gradient(45deg, #ff6b6b, #ee5a24);
      box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
    }

    /* Algorithm box */
    .algorithm-box {
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 12px;
      padding: 20px;
      margin: 15px 0;
      color: white;
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .algorithm-box h4 {
      color: #fff;
      margin-bottom: 15px;
    }

    .algorithm-box ul {
      list-style: none;
      padding-left: 0;
    }

    .algorithm-box li {
      background: rgba(255, 255, 255, 0.1);
      margin: 8px 0;
      padding: 10px;
      border-radius: 8px;
      border-left: 4px solid #00ffff;
    }

    /* Success message */
    .success-message {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: linear-gradient(45deg, #00ffff, #0077ff);
      color: white;
      padding: 12px 24px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 119, 255, 0.4);
      display: none;
      animation: slideIn 0.3s ease;
      z-index: 1000;
      font-weight: 500;
    }

    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    /* Custom scrollbar */
    .code-content::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    .code-content::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 4px;
    }

    .code-content::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #00ffff, #0077ff);
      border-radius: 4px;
    }

    .problem-statement {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      padding: 20px;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .disclaimer {
      background: linear-gradient(45deg, #ff6b6b, #ee5a24);
      color: white;
      padding: 15px;
      border-radius: 8px;
      margin: 15px 0;
      font-style: italic;
      text-align: center;
    }
  </style>
</head>

<body class="bg-light py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mb-4"><strong>🔄 Reverse Digits of A Number</strong></h1>

        <div class="problem-statement">
          <h4>📋 Problem Statement</h4>
          <p><strong>Given an integer N, return the reverse of the given number.</strong></p>
          <p><em>Note: If a number has trailing zeros, then its reverse will not include them. For example, reverse of 10400 will be 401 instead of 00401.</em></p>
        </div>

        <!-- Examples Section -->
        <div class="section-card">
          <div class="section-header" data-section="examples">
            <span>📝 Examples</span>
          </div>
          <div class="section-content hidden" data-content="examples">
            <div class="code-block">
              <pre><strong>Example 1:</strong>
<span class="keyword">Input:</span> N = 12345
<span class="function">Output:</span> 54321
<span class="comment">Explanation:</span> The reverse of 12345 is 54321.

<strong>Example 2:</strong>
<span class="keyword">Input:</span> N = 7789
<span class="function">Output:</span> 9877
<span class="comment">Explanation:</span> The reverse of number 7789 is 9877.</pre>
            </div>
          </div>
        </div>

        <div class="disclaimer">
          <strong>⚠️ Disclaimer:</strong> Don't jump directly to the solution, try it out yourself first!
        </div>

        <!-- Algorithm Section -->
        <div class="section-card">
          <div class="section-header" data-section="algorithm">
            <span>🧠 Algorithm & Approach</span>
          </div>
          <div class="section-content hidden" data-content="algorithm">
            <div class="algorithm-box">
              <h4>🎯 Optimal Approach</h4>
              <p>To reverse the digits of a number, we extract each digit and build the reversed number step by step.</p>
              
              <h5>📋 Algorithm Steps:</h5>
              <ul>
                <li><strong>Step 1:</strong> Initialize an integer <code>revNum = 0</code> to store the reversed number.</li>
                <li><strong>Step 2:</strong> While n > 0:
                  <ul style="margin-left: 20px;">
                    <li>Extract the last digit: <code>lastDigit = n % 10</code></li>
                    <li>Build reversed number: <code>revNum = (revNum * 10) + lastDigit</code></li>
                    <li>Remove last digit: <code>n = n / 10</code></li>
                  </ul>
                </li>
                <li><strong>Step 3:</strong> Return the reversed number.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Code Implementation Section -->
        <div class="section-card">
          <div class="section-header" data-section="code">
            <span>💻 Code Implementation</span>
          </div>
          <div class="section-content hidden" data-content="code">
            <div class="lang-switcher">
              <button class="lang-btn active" data-lang="cpp">C++</button>
              <button class="lang-btn" data-lang="java">Java</button>
              <button class="lang-btn" data-lang="python">Python</button>
              <button class="lang-btn" data-lang="javascript">JavaScript</button>
            </div>

            <!-- C++ Code -->
            <div class="code-block" id="cpp-code">
              <div class="code-header">
                <div class="code-title">🔵 C++ Implementation</div>
                <button class="copy-btn" data-copy="cpp">📋 Copy Code</button>
              </div>
              <div class="code-content code-container">
                <pre><code><span class="comment">// C++: Reverse digits of a number</span>
<span class="preprocessor">#include</span> <span class="iostream">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="namespace">namespace</span> <span class="namespace">std</span>;

<span class="type">int</span> <span class="function">reverseNumber</span>(<span class="type">int</span> <span class="variable">n</span>) {
    <span class="comment">// Initialize variable to store reversed number</span>
    <span class="type">int</span> <span class="variable">revNum</span> = <span class="number">0</span>;
    
    <span class="comment">// Loop until all digits are processed</span>
    <span class="keyword">while</span>(<span class="variable">n</span> <span class="operator">&gt;</span> <span class="number">0</span>) {
        <span class="comment">// Extract the last digit</span>
        <span class="type">int</span> <span class="variable">lastDigit</span> = <span class="variable">n</span> <span class="operator">%</span> <span class="number">10</span>;
        
        <span class="comment">// Build the reversed number</span>
        <span class="variable">revNum</span> = (<span class="variable">revNum</span> <span class="operator">*</span> <span class="number">10</span>) <span class="operator">+</span> <span class="variable">lastDigit</span>;
        
        <span class="comment">// Remove the last digit from original number</span>
        <span class="variable">n</span> = <span class="variable">n</span> <span class="operator">/</span> <span class="number">10</span>;
    }
    
    <span class="keyword">return</span> <span class="variable">revNum</span>;
}

<span class="type">int</span> <span class="function">main</span>() {
    <span class="type">int</span> <span class="variable">number</span>;
    <span class="iostream">cout</span> <span class="operator">&lt;&lt;</span> <span class="string">"Enter a number: "</span>;
    <span class="iostream">cin</span> <span class="operator">&gt;&gt;</span> <span class="variable">number</span>;
    
    <span class="type">int</span> <span class="variable">result</span> = <span class="function">reverseNumber</span>(<span class="variable">number</span>);
    <span class="iostream">cout</span> <span class="operator">&lt;&lt;</span> <span class="string">"Reversed number: "</span> <span class="operator">&lt;&lt;</span> <span class="variable">result</span> <span class="operator">&lt;&lt;</span> <span class="iostream">endl</span>;
    
    <span class="keyword">return</span> <span class="number">0</span>;
}</code></pre>
              </div>
            </div>

            <!-- Java Code -->
            <div class="code-block hidden" id="java-code">
              <div class="code-header">
                <div class="code-title">☕ Java Implementation</div>
                <button class="copy-btn" data-copy="java">📋 Copy Code</button>
              </div>
              <div class="code-content">
                <pre><code><span class="comment">// Java: Reverse digits of a number</span>
<span class="keyword">public</span> <span class="keyword">class</span> <span class="type">ReverseNumber</span> {
    
    <span class="keyword">public</span> <span class="keyword">static</span> <span class="type">int</span> <span class="function">reverseNumber</span>(<span class="type">int</span> <span class="variable">n</span>) {
        <span class="type">int</span> <span class="variable">revNum</span> = <span class="number">0</span>;
        
        <span class="keyword">while</span>(<span class="variable">n</span> <span class="operator">&gt;</span> <span class="number">0</span>) {
            <span class="type">int</span> <span class="variable">lastDigit</span> = <span class="variable">n</span> <span class="operator">%</span> <span class="number">10</span>;
            <span class="variable">revNum</span> = (<span class="variable">revNum</span> <span class="operator">*</span> <span class="number">10</span>) <span class="operator">+</span> <span class="variable">lastDigit</span>;
            <span class="variable">n</span> = <span class="variable">n</span> <span class="operator">/</span> <span class="number">10</span>;
        }
        
        <span class="keyword">return</span> <span class="variable">revNum</span>;
    }
    
    <span class="keyword">public</span> <span class="keyword">static</span> <span class="type">void</span> <span class="function">main</span>(<span class="type">String</span>[] <span class="variable">args</span>) {
        <span class="type">int</span> <span class="variable">number</span> = <span class="number">12345</span>;
        <span class="type">int</span> <span class="variable">result</span> = <span class="function">reverseNumber</span>(<span class="variable">number</span>);
        <span class="iostream">System.out.println</span>(<span class="string">"Reversed number: "</span> <span class="operator">+</span> <span class="variable">result</span>);
    }
}</code></pre>
              </div>
            </div>

            <!-- Python Code -->
            <div class="code-block hidden" id="python-code">
              <div class="code-header">
                <div class="code-title">🐍 Python Implementation</div>
                <button class="copy-btn" data-copy="python">📋 Copy Code</button>
              </div>
              <div class="code-content">
                <pre><code><span class="comment"># Python: Reverse digits of a number</span>
<span class="keyword">def</span> <span class="function">reverse_number</span>(<span class="variable">n</span>):
    <span class="variable">rev_num</span> = <span class="number">0</span>
    
    <span class="keyword">while</span> <span class="variable">n</span> <span class="operator">&gt;</span> <span class="number">0</span>:
        <span class="variable">last_digit</span> = <span class="variable">n</span> <span class="operator">%</span> <span class="number">10</span>
        <span class="variable">rev_num</span> = (<span class="variable">rev_num</span> <span class="operator">*</span> <span class="number">10</span>) <span class="operator">+</span> <span class="variable">last_digit</span>
        <span class="variable">n</span> = <span class="variable">n</span> <span class="operator">//</span> <span class="number">10</span>
    
    <span class="keyword">return</span> <span class="variable">rev_num</span>

<span class="comment"># Test the function</span>
<span class="variable">number</span> = <span class="number">12345</span>
<span class="variable">result</span> = <span class="function">reverse_number</span>(<span class="variable">number</span>)
<span class="function">print</span>(<span class="string">f"Reversed number: {result}"</span>)</code></pre>
              </div>
            </div>

            <!-- JavaScript Code -->
            <div class="code-block hidden" id="javascript-code">
              <div class="code-header">
                <div class="code-title">🟨 JavaScript Implementation</div>
                <button class="copy-btn" data-copy="javascript">📋 Copy Code</button>
              </div>
              <div class="code-content">
                <pre><code><span class="comment">// JavaScript: Reverse digits of a number</span>
<span class="keyword">function</span> <span class="function">reverseNumber</span>(<span class="variable">n</span>) {
    <span class="keyword">let</span> <span class="variable">revNum</span> = <span class="number">0</span>;
    
    <span class="keyword">while</span>(<span class="variable">n</span> <span class="operator">&gt;</span> <span class="number">0</span>) {
        <span class="keyword">let</span> <span class="variable">lastDigit</span> = <span class="variable">n</span> <span class="operator">%</span> <span class="number">10</span>;
        <span class="variable">revNum</span> = (<span class="variable">revNum</span> <span class="operator">*</span> <span class="number">10</span>) <span class="operator">+</span> <span class="variable">lastDigit</span>;
        <span class="variable">n</span> = <span class="iostream">Math.floor</span>(<span class="variable">n</span> <span class="operator">/</span> <span class="number">10</span>);
    }
    
    <span class="keyword">return</span> <span class="variable">revNum</span>;
}

<span class="comment">// Test the function</span>
<span class="keyword">let</span> <span class="variable">number</span> = <span class="number">12345</span>;
<span class="keyword">let</span> <span class="variable">result</span> = <span class="function">reverseNumber</span>(<span class="variable">number</span>);
<span class="iostream">console.log</span>(<span class="string">`Reversed number: ${result}`</span>);</code></pre>
              </div>
            </div>
          </div>
        </div>

        <!-- Complexity Analysis -->
        <div class="section-card">
          <div class="section-header" data-section="complexity">
            <span>⏱️ Complexity Analysis</span>
          </div>
          <div class="section-content hidden" data-content="complexity">
            <div class="algorithm-box">
              <h4>📊 Time & Space Complexity</h4>
              <ul>
                <li><strong>Time Complexity:</strong> O(log₁₀(n)) where n is the input number</li>
                <li><strong>Space Complexity:</strong> O(1) - only using constant extra space</li>
                <li><strong>Explanation:</strong> We process each digit once, and the number of digits in n is log₁₀(n)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="success-message" id="copy-success">✅ Code copied to clipboard!</div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Section toggle functionality
      const sectionHeaders = document.querySelectorAll('.section-header[data-section]');
      sectionHeaders.forEach(header => {
        header.classList.add('collapsed');
        header.addEventListener('click', function () {
          const sectionName = this.getAttribute('data-section');
          const content = document.querySelector(`[data-content="${sectionName}"]`);
          
          if (content) {
            content.classList.toggle('hidden');
            this.classList.toggle('collapsed');
          }
        });
      });

      // Language switcher functionality
      const langButtons = document.querySelectorAll('.lang-btn');
      const codeBlocks = document.querySelectorAll('[id$="-code"]');

      langButtons.forEach(button => {
        button.addEventListener('click', function () {
          const lang = this.getAttribute('data-lang');
          
          // Update active button
          langButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');
          
          // Show selected language block
          codeBlocks.forEach(block => block.classList.add('hidden'));
          const selectedBlock = document.getElementById(lang + '-code');
          if (selectedBlock) {
            selectedBlock.classList.remove('hidden');
          }
        });
      });

      // Copy functionality
      const copyButtons = document.querySelectorAll('.copy-btn');
      const successMessage = document.getElementById('copy-success');

      copyButtons.forEach(button => {
        button.addEventListener('click', function () {
          const copyType = this.getAttribute('data-copy');
          const codeElement = document.querySelector(`#${copyType}-code .code-content code`);
          
          if (codeElement) {
            const textToCopy = codeElement.textContent;
            navigator.clipboard.writeText(textToCopy).then(() => {
              const originalText = this.innerHTML;
              this.innerHTML = '✅ Copied!';
              
              // Show success message
              successMessage.style.display = 'block';
              setTimeout(() => {
                successMessage.style.display = 'none';
              }, 2000);
              
              // Reset button text
              setTimeout(() => {
                this.innerHTML = originalText;
              }, 1500);
            }).catch(err => {
              console.error('Failed to copy:', err);
              this.innerHTML = '❌ Failed';
              setTimeout(() => {
                this.innerHTML = '📋 Copy Code';
              }, 1500);
            });
          }
        });
      });
    });
  </script>
</body>

</html>