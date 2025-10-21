<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reverse Digits of A Number</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Style for the code container with gradient background */
    .code-container {
      position: relative;
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
      overflow: hidden;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .code-container h1 {
      margin-top: 0;
      font-size: 24px;
      color: #fff;
      text-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
    }

    /* Collapsible section styles */
    .code-block {
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
      margin-top: 10px;
    }

    .section-header {
      background-color: #f8f9fa;
      padding: 0.75rem;
      cursor: pointer;
      border-bottom: 1px solid #dee2e6;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s;
    }

    .section-header:hover {
      background-color: #e9ecef;
    }

    .section-header::after {
      content: "▼";
      font-size: 0.8rem;
      transition: transform 0.3s ease;
    }

    .section-header.collapsed::after {
      transform: rotate(-90deg);
    }

    .section-content {
      padding: 1rem;
      background-color: #f8f9fa;
      transition: max-height 0.3s ease;
      overflow: hidden;
    }

    .section-content.hidden {
      max-height: 0;
      padding-top: 0;
      padding-bottom: 0;
    }

    /* Code styling */
    .code-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .code-title {
      color: #ffffff;
      font-weight: 600;
      font-size: 18px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .code-title svg {
      width: 22px;
      height: 22px;
      fill: #6ca9f2;
    }

    .code-actions {
      display: flex;
      gap: 10px;
    }

    .btn {
      background-color: rgba(255, 255, 255, 0.15);
      color: #ffffff;
      border: none;
      border-radius: 12px;
      padding: 8px 14px;
      font-size: 14px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: all 0.2s ease;
      backdrop-filter: blur(5px);
    }

    .btn:hover {
      background-color: rgba(255, 255, 255, 0.25);
    }

    .btn-copy {
      background: linear-gradient(45deg, #00ffff, #0077ff);
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.6);
    }

    .btn-copy:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.9);
      background: linear-gradient(45deg, #0077ff, #00ffff);
    }

    .btn svg {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    .code-content {
      padding: 20px;
      overflow-x: auto;
      transition: max-height 0.3s ease;
      max-height: 500px;
    }

    .code-content.hidden {
      max-height: 0;
      padding: 0 20px;
      overflow: hidden;
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
      background: rgba(0, 255, 255, 0.6);
      border-radius: 4px;
    }

    .code-content::-webkit-scrollbar-thumb:hover {
      background: rgba(0, 255, 255, 0.8);
    }

    pre {
      margin: 0;
      color: rgb(62, 53, 53);
      font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
      font-size: 15px;
    }

    code {
      font-family: inherit;
    }

    /* Syntax highlighting */
    .comment { color: #6a9955; }
    .keyword { color: #569cd6; }
    .function { color: #dcdcaa; }
    .string { color: #ce9178; }
    .number { color: #b5cea8; }
    .operator { color: #d4d4d4; }
    .variable { color: #9cdcfe; }
    .type { color: #4ec9b0; }
    .preprocessor { color: #c586c0; }
    .iostream {color: white}

    /* Copy success notification */
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
      animation: fadeIn 0.3s, fadeOut 0.3s 1.7s;
      z-index: 1000;
      font-weight: 500;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeOut {
      from { opacity: 1; transform: translateY(0); }
      to { opacity: 0; transform: translateY(-20px); }
    }

    /* Extra styling */
    .disclaimer {
      font-style: italic;
      margin: 15px 0;
    }

    .disclaimer span:first-child {
      color: #dc3545;
      font-weight: 500;
    }

    .disclaimer span:last-child {
      color: #6c757d;
    }

    .problem-statement {
      margin-top: 15px;
      margin-bottom: 25px;
    }

    strong {
      color: #212121;
    }

    /* Multi-language code switcher styles */
    .code-switcher-container {
      margin-top: 30px;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .code-switcher-actions {
      background-color: #f3f4f6;
      padding: 0.5rem;
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .code-switcher-btn {
      padding: 0.3rem 0.75rem;
      border-radius: 0.375rem;
      background-color: #e5e7eb;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s;
      border: none;
    }

    .code-switcher-btn:hover {
      background-color: #d1d5db;
    }

    .code-switcher-btn.active {
      background-color: #3b82f6;
      color: white;
    }

    .code-switcher-content {
      padding: 1rem;
      background-color: #f8f9fa;
    }

    .code-switcher-content pre {
      margin: 0;
    }

    .hidden {
      display: none !important;
    }

    .copy-btn {
      border: 2px solid #333;
      border-radius: 5px;
      margin: 2px 0 10px 0;
      padding: 4px 8px;
      background: #0a0303ff;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.2s;
    }

    .copy-btn:hover {
      background: #f0f0f0;
    }

    /* Algorithm box styling */
    .algorithm-toggle-btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s;
    }

    .algorithm-toggle-btn:hover {
      background: #0056b3;
    }

    .algorithm-content {
      padding: 20px;
      background: #f8f9fa;
      border-top: 1px solid #dee2e6;
      transition: all 0.3s ease;
    }

    .code-example-box {
      background: #6c757d !important;
      color: white !important;
      padding: 15px !important;
      border-radius: 8px !important;
      margin-top: 15px;
    }
  </style>
</head>

<body class="bg-light py-4">
  <?php include("../../header.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 p-3 border-end">
        <b>Sabbir</b>
      </div>
      <div class="col-8">
        <h1><strong>Reverse Digits of A Number</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong> Given an integer N return the reverse of the given number.</p>
        </div>
        <div>
          <p>Note: If a number has trailing zeros, then its reverse will not include them. For e.g., reverse of 10400 will be 401 instead of 00401.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 12345
<strong>Output</strong>: 54321
<strong>Explanation</strong>: The reverse of 12345 is 54321..

<strong>Example 2</strong>: <strong>Input:</strong> N = 7789
<strong>Output:</strong> 9877
<strong>Explanation:</strong> The reverse of number 7789 is 9877.</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("./animation/reverse-digit-video.php")
            ?>
          </div>
          </div>
          </div>
        </div>

        <div class="disclaimer">
          <span>Disclaimer:</span> <span>Don't jump directly to the solution, try it out yourself first.</span>
        </div>

          <!-- Optimal Approach -->
        <div class="code-block">
          <div class="section-header" data-section="brute-force">
            Optimal Approach
          </div>
          <div class="section-content hidden" data-content="brute-force">
            <div class="card shadow-sm">
              <button class="algorithm-toggle-btn" data-toggle="algorithm">
                <span>Algorithm / Intuition</span>
                <span class="toggle-icon">▼</span>
              </button>

              <div class="algorithm-content hidden" id="algorithm-content">
                <strong>Logarithmic Approach (Optimal)</strong>
                <p class="fw-medium">
                  To reverse the digits of a number, we can use the algorithm created in <span style="color: red; font: bold;">Extract Digits</span> as now instead of extracting digits we are simply appending them to the reversed number.
                </p>
                 <img src="../../images/reverse-number.png" style="width: 40vw; height: 25vw;" alt="">
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong>Initialise an integer revNum to 0. This variable will store the reversed number.</li>
                  <li><strong>Step 2:</strong> Using a while loop we iterate while n is greater than 0 and at each iteration:</li> 
                    <ul class="ps-3">
                      <li>Calculate the last digit of the number using the modulus operator (N%10) and store it in a variable last digit.</li>
                      <li>Update the reversed number by multiplying it with 10 and adding the last digit. This effectively appends the last digit to the end of the reversed number.</li>
                      <li>Remove the last digit of the number by dividing it by 10.</li>
                    </ul>
                   <li><strong>Step 3:</strong>  After exiting the while loop, return the reversed number.</li>
                </ul>

                
              </div>
            </div>

            <div class="code-switcher-container mt-4">
              <div class="section-header" data-section="code">
                Code Implementation
              </div>
              
              <div class="code-switcher-content hidden" data-content="code">
                <div class="code-switcher-actions">
                  <button class="code-switcher-btn active" data-lang="cpp">C++</button>
                  <button class="code-switcher-btn" data-lang="c">C</button>
                  <button class="code-switcher-btn" data-lang="java">Java</button>
                  <button class="code-switcher-btn" data-lang="python">Python</button>
                  <button class="code-switcher-btn" data-lang="javascript">JavaScript</button>
                </div>

                <!-- C++ Code Block -->
                <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"class="code-block-content;" id="cpp-code">
                  <button class="copy-btn" data-copy="cpp">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// C++: Reverse digits of a number</span>
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

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// C: Reverse digits of a number</span>
<span class="preprocessor">#include</span> <span class="header">&lt;stdio.h&gt;</span>

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
    <span class="keyword">printf</span>(<span class="string">"Enter a number: "</span>);
    <span class="keyword">scanf</span>(<span class="string">"%d"</span>, &<span class="variable">number</span>);
    
    <span class="type">int</span> <span class="variable">result</span> = <span class="function">reverseNumber</span>(<span class="variable">number</span>);
    <span class="keyword">printf</span>(<span class="string">"Reversed number: %d\n"</span>, <span class="variable">result</span>);
    
    <span class="keyword">return</span> <span class="number">0</span>;
}</code></pre>
</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// Java: Reverse digits of a number</span>
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

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># Python: Reverse digits of a number</span>
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

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// JavaScript: Reverse digits of a number</span>
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
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(log10N + 1) </strong>where N is the input number. The time complexity is determined by the number of digits in the input integer N. In the worst case when N is a multiple of 10 the number of digits in N is log10 N + 1.
            <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log10N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul>
            <div><strong>Space Complexity: O(1) </strong> as only a constant amount of additional memory for the reversed number regardless of size of the input number.</div>
          </div>
        </div>
        </div>
        </div>
        <!-- Video Explanation -->
        <div class="code-block">
          <div class="section-header" data-section="video">
            Video Explanation
          </div>
          <div class="section-content hidden" data-content="video">
            <p>The video explanation for this algorithm is currently not available. Check back later or contact Sabbir for more information.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="success-message" id="copy-success">Code copied to clipboard!</div>
</div>
  <script>
    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function () {
      console.log('DOM loaded, initializing...');

      // Section toggle functionality
      function initSectionToggles() {
        const sectionHeaders = document.querySelectorAll('.section-header[data-section]');
        console.log('Found section headers:', sectionHeaders.length);
        
        sectionHeaders.forEach(header => {
          // Start collapsed
          header.classList.add('collapsed');
          
          header.addEventListener('click', function () {
            const sectionName = this.getAttribute('data-section');
            const content = document.querySelector(`[data-content="${sectionName}"]`);
            
            if (content) {
              content.classList.toggle('hidden');
              this.classList.toggle('collapsed');
              console.log(`Toggled section: ${sectionName}`);
            }
          });
        });
      }

      // Algorithm toggle functionality
      function initAlgorithmToggle() {
        const toggleBtn = document.querySelector('[data-toggle="algorithm"]');
        const content = document.getElementById('algorithm-content');
        const icon = toggleBtn ? toggleBtn.querySelector('.toggle-icon') : null;

        if (toggleBtn && content && icon) {
          toggleBtn.addEventListener('click', function () {
            content.classList.toggle('hidden');
            icon.textContent = content.classList.contains('hidden') ? '▼' : '▲';
            console.log('Toggled algorithm section');
          });
        }
      }

      // Language switcher functionality
      function initLanguageSwitcher() {
        const langButtons = document.querySelectorAll('[data-lang]');
        const codeBlocks = document.querySelectorAll('[id$="-code"]');

        langButtons.forEach(button => {
          button.addEventListener('click', function () {
            const lang = this.getAttribute('data-lang');
            
            // Remove active class from all buttons
            langButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Hide all code blocks
            codeBlocks.forEach(block => block.classList.add('hidden'));
            // Show selected language block
            const selectedBlock = document.getElementById(lang + '-code');
            if (selectedBlock) {
              selectedBlock.classList.remove('hidden');
            }
            
            console.log(`Switched to language: ${lang}`);
          });
        });
      }

      // Copy functionality
      function initCopyFunctionality() {
        const copyButtons = document.querySelectorAll('[data-copy]');
        const successMessage = document.getElementById('copy-success');

        copyButtons.forEach(button => {
          button.addEventListener('click', function () {
            const copyType = this.getAttribute('data-copy');
            let textToCopy = '';
            
            if (copyType === 'optimal') {
              const codeElement = document.querySelector('#optimal-code-content code');
              textToCopy = codeElement ? codeElement.textContent : '';
            } else {
              const codeElement = document.querySelector(`#${copyType}-code code`);
              textToCopy = codeElement ? codeElement.textContent : '';
            }
            
            if (textToCopy) {
              navigator.clipboard.writeText(textToCopy).then(() => {
                const originalText = this.textContent;
                this.textContent = 'Copied!';
                
                // Show success message
                if (successMessage) {
                  successMessage.style.display = 'block';
                  setTimeout(() => {
                    successMessage.style.display = 'none';
                  }, 2000);
                }
                
                // Reset button text
                setTimeout(() => {
                  this.textContent = originalText;
                }, 1500);
                
                console.log(`Copied ${copyType} code`);
              }).catch(err => {
                console.error('Failed to copy:', err);
                this.textContent = 'Failed to copy';
                setTimeout(() => {
                  this.textContent = 'Copy';
                }, 1500);
              });
            }
          });
        });
      }

      // Optimal code toggle functionality
      function initOptimalCodeToggle() {
        const toggleBtn = document.querySelector('[data-toggle="optimal-code"]');
        const codeContent = document.getElementById('optimal-code-content');
        const toggleText = toggleBtn ? toggleBtn.querySelector('.toggle-text') : null;

        if (toggleBtn && codeContent && toggleText) {
          toggleBtn.addEventListener('click', function () {
            codeContent.classList.toggle('hidden');
            toggleText.textContent = codeContent.classList.contains('hidden') ? 'Show Code' : 'Hide Code';
            console.log('Toggled optimal code visibility');
          });
        }
      }

      // Initialize all functionality
      try {
        initSectionToggles();
        initAlgorithmToggle();
        initLanguageSwitcher();
        initCopyFunctionality();
        initOptimalCodeToggle();
        console.log('All functionality initialized successfully');
      } catch (error) {
        console.error('Error initializing functionality:', error);
      }
    });
  </script>
</body>

</html>