<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sum of first N Natural Numbers</title>
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

    code, code2 {
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
    .code-switcher-container, .code-switcher-container3 {
      margin-top: 30px;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .code-switcher-actions , .code-switcher-actions3{
      background-color: #f3f4f6;
      padding: 0.5rem;
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .code-switcher-btn,.code-switcher-btn2,.code-switcher-btn3 {
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

    .code-switcher-btn.active, .code-switcher-btn2.active,.code-switcher-btn3.active {
      background-color: #3b82f6;
      color: white;
    }

    .code-switcher-content,.code-switcher-content2,.code-switcher-content3 {
      padding: 1rem;
      background-color: #f8f9fa;
    }

    .code-switcher-content pre,.code-switcher-content2,.code-switcher-content3 {
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
      /* background: #fff; */
      cursor: pointer;
      font-weight: bold;
      transition: all 0.2s;
    }

    .copy-btn:hover {
      background: #f0f0f0;
    }

    /* Algorithm box styling */
    .algorithm-toggle-btn, .algorithm2-toggle-btn {
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

    .algorithm-toggle-btn:hover, .algorithm2-toggle-btn:hover {
      background: #0056b3;
    }

    .algorithm-content, .algorithm-content2 {
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
        <b>CodeWithH-Square</b>
      </div>
      <div class="col-8">
        <h1><strong>Sum of first N Natural Numbers</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong>Given a number ‘N’, find out the sum of the first N natural numbers.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 5
<strong>Output</strong>: 15
<strong>Explanation</strong>:1+2+3+4+5=15

<strong>Example 2</strong>: <strong>Input:</strong> N =6
<strong>Output:</strong>21
<strong>Explanation:</strong>1+2+3+4+5+6=21
</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("../Know_The_Basic_Maths/animation/sum-of-first-n-natural-numbers-video.php")
            ?>
          </div>
          </div>
          
        </div>
  </div>
        <div class="disclaimer">
          <span style="color:red;">Disclaimer:</span> <span>Don't jump directly to the solution, try it out yourself first.</span>
        </div>

        <!-- Brute Force Approach -->
                <div class="code-block">
          <div class="section-header" data-section="brute-force">
            Brute Force Approach
          </div>
          <div class="section-content hidden" data-content="brute-force">
            <div class="card shadow-sm">
              <button class="algorithm-toggle-btn" data-toggle="algorithm">
                <span>Algorithm / Intuition</span>
                <span class="toggle-icon">▼</span>
              </button>

              <div class="algorithm-content hidden" id="algorithm-content">
                <strong> Algorithm </strong>
                <p class="fw-medium">
                  <strong>Solution1:</strong> Using Loop
                  <p><strong>Intuition:</strong> We can simply add numbers one by one from 1 to N.</p>
                  <p>For eg. if N = 5, we can add 1+2+3+4+5=15.</p>
                  <p>We can use a for loop or while loop to achieve the goal</p>
                </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                    <li>Take a variable sum and initialize it as 0.</li>
                    <li>Take a for loop and run from 1 to N.</li>
                    <li>Save the result in sum.</li>
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
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color:#569cd6;">#include</span> <span style="color:#d69d85;">&lt;bits/stdc++.h&gt;</span> 
<span style="color:#569cd6;">#include</span> <span style="color:#d69d85;">&lt;iostream&gt;</span>
<span style="color:#569cd6;">using</span> <span style="color:#569cd6;">namespace</span> <span style="color:#4ec9b0;">std</span>;

<span style="color:#c586c0;">bool</span> <span style="color:#dcdcaa;">checkPrime</span>(<span style="color:#569cd6;">int</span> <span style="color:#9cdcfe;">n</span>) { 
    <span style="color:#569cd6;">int</span> <span style="color:#9cdcfe;">cnt</span> = <span style="color:#b5cea8;">0</span>;

    <span style="color:#569cd6;">for</span> (<span style="color:#569cd6;">int</span> <span style="color:#9cdcfe;">i</span> = <span style="color:#b5cea8;">1</span>; <span style="color:#9cdcfe;">i</span> &lt;= <span style="color:#9cdcfe;">n</span>; <span style="color:#9cdcfe;">i</span>++) { 
        <span style="color:#569cd6;">if</span> (<span style="color:#9cdcfe;">n</span> % <span style="color:#9cdcfe;">i</span> == <span style="color:#b5cea8;">0</span>) { 
            <span style="color:#9cdcfe;">cnt</span> = <span style="color:#9cdcfe;">cnt</span> + <span style="color:#b5cea8;">1</span>;
        }
    }

    <span style="color:#569cd6;">if</span> (<span style="color:#9cdcfe;">cnt</span> == <span style="color:#b5cea8;">2</span>) {
        <span style="color:#569cd6;">return</span> <span style="color:#569cd6;">true</span>;
    } <span style="color:#569cd6;">else</span> {
        <span style="color:#569cd6;">return</span> <span style="color:#569cd6;">false</span>;
    }
}

<span style="color:#569cd6;">int</span> <span style="color:#dcdcaa;">main</span>() {
    <span style="color:#569cd6;">int</span> <span style="color:#9cdcfe;">n</span> = <span style="color:#b5cea8;">1483</span>;
    <span style="color:#c586c0;">bool</span> <span style="color:#9cdcfe;">isPrime</span> = <span style="color:#dcdcaa;">checkPrime</span>(<span style="color:#9cdcfe;">n</span>);
    
    <span style="color:#569cd6;">if</span> (<span style="color:#9cdcfe;">isPrime</span>) {
        <span style="color:#4ec9b0;">cout</span> &lt;&lt; <span style="color:#9cdcfe;">n</span> &lt;&lt; <span style="color:#ce9178;">" is a prime number."</span> &lt;&lt; <span style="color:#4ec9b0;">endl</span>;
    } <span style="color:#569cd6;">else</span> {
        <span style="color:#4ec9b0;">cout</span> &lt;&lt; <span style="color:#9cdcfe;">n</span> &lt;&lt; <span style="color:#ce9178;">" is not a prime number."</span> &lt;&lt; <span style="color:#4ec9b0;">endl</span>;
    }

    <span style="color:#569cd6;">return</span> <span style="color:#b5cea8;">0</span>;
}
</code></pre>
                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// given number is prime.</span>
<span class="datatype">#include</span> &lt;stdio.h&gt;
<span class="datatype">#include</span> &lt;stdbool.h&gt;

<span class="datatype">bool</span> <span class="function">checkPrime</span>(<span class="datatype">int</span> n) {
    <span class="comment">// Initialize a counter variable to</span>
    <span class="comment">// count the number of factors.</span>
    <span class="datatype">int</span> cnt = <span class="number">0</span>;

    <span class="comment">// Loop through numbers from 1 to n.</span>
    <span class="keyword">for</span> (<span class="datatype">int</span> i = <span class="number">1</span>; i &lt;= n; i++) {
        <span class="comment">// If n is divisible by i</span>
        <span class="comment">// without any remainder.</span>
        <span class="keyword">if</span> (n % i == <span class="number">0</span>) {
            <span class="comment">// Increment the counter.</span>
            cnt = cnt + <span class="number">1</span>;
        }
    }

    <span class="comment">// If the number of</span>
    <span class="comment">// factors is exactly 2.</span>
    <span class="keyword">if</span> (cnt == <span class="number">2</span>) {
        <span class="comment">// Return true, indicating</span>
        <span class="comment">// that the number is prime.</span>
        <span class="keyword">return</span> <span class="keyword">true</span>;
    } <span class="keyword">else</span> {
        <span class="comment">// Return false, indicating</span>
        <span class="comment">// that the number is not prime.</span>
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
}

<span class="datatype">int</span> <span class="function">main</span>() {
    <span class="datatype">int</span> n = <span class="number">1483</span>;
    <span class="datatype">bool</span> isPrime = <span class="function">checkPrime</span>(n);

    <span class="keyword">if</span> (isPrime) {
        <span class="function">printf</span>(<span class="string">"%d is a prime number.\n"</span>, n);
    } <span class="keyword">else</span> {
        <span class="function">printf</span>(<span class="string">"%d is not a prime number.\n"</span>, n);
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public</span> <span class="keyword">class</span> <span class="classname">Main</span> {
    <span class="comment">// Function to check if a</span>
    <span class="comment">// given number is prime.</span>
    <span class="keyword">static</span> <span class="datatype">boolean</span> <span class="function">checkPrime</span>(<span class="datatype">int</span> n) {
        <span class="comment">// Initialize a counter variable to</span>
        <span class="comment">// count the number of factors.</span>
        <span class="datatype">int</span> cnt = <span class="number">0</span>;
        <span class="comment">// Loop through numbers from 1 to n.</span>
        <span class="keyword">for</span> (<span class="datatype">int</span> i = <span class="number">1</span>; i &lt;= n; i++) {
            <span class="comment">// If n is divisible by i</span>
            <span class="comment">// without any remainder.</span>
            <span class="keyword">if</span> (n % i == <span class="number">0</span>) {
                <span class="comment">// Increment the counter.</span>
                cnt = cnt + <span class="number">1</span>;
            }
        }

        <span class="comment">// If the number of</span>
        <span class="comment">// factors is exactly 2</span>
        <span class="keyword">if</span> (cnt == <span class="number">2</span>) {
            <span class="comment">// Return true, indicating</span>
            <span class="comment">// that the number is prime.</span>
            <span class="keyword">return</span> <span class="boolean">true</span>;
        }
        <span class="comment">// If the number of</span>
        <span class="comment">// factors is not 2.</span>
        <span class="keyword">else</span> {
            <span class="comment">// Return false, indicating</span>
            <span class="comment">// that the number is not prime.</span>
            <span class="keyword">return</span> <span class="boolean">false</span>;
        }
    }

    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="datatype">String</span>[] args) {
        <span class="datatype">int</span> n = <span class="number">1483</span>;
        <span class="datatype">boolean</span> isPrime = <span class="function">checkPrime</span>(n);
        <span class="keyword">if</span> (isPrime) {
            <span class="class">System</span>.out.<span class="function">println</span>(n + <span class="string">" is a prime number."</span>);
        } <span class="keyword">else</span> {
            <span class="class">System</span>.out.<span class="function">println</span>(n + <span class="string">" is not a prime number."</span>);
        }
    }
}
  </code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># given number is prime.</span>
<span class="keyword">def</span> <span class="function">checkPrime</span>(<span class="var">n</span>):
    <span class="comment"># Initialize a counter variable to</span>
    <span class="comment"># count the number of factors.</span>
    <span class="var">cnt</span> = <span class="number">0</span>
    <span class="comment"># Loop through numbers from 1 to n.</span>
    <span class="keyword">for</span> <span class="var">i</span> <span class="keyword">in</span> <span class="function">range</span>(<span class="number">1</span>, <span class="var">n</span> + <span class="number">1</span>):
        <span class="comment"># If n is divisible by i</span>
        <span class="comment"># without any remainder.</span>
        <span class="keyword">if</span> <span class="var">n</span> % <span class="var">i</span> == <span class="number">0</span>:
            <span class="comment"># Increment the counter.</span>
            <span class="var">cnt</span> = <span class="var">cnt</span> + <span class="number">1</span>

    <span class="comment"># If the number of</span>
    <span class="comment"># factors is exactly 2</span>
    <span class="keyword">if</span> <span class="var">cnt</span> == <span class="number">2</span>:
        <span class="comment"># Return True, indicating</span>
        <span class="comment"># that the number is prime.</span>
        <span class="keyword">return</span> <span class="literal">True</span>
    <span class="comment"># If the number of</span>
    <span class="comment"># factors is not 2.</span>
    <span class="keyword">else</span>:
        <span class="comment"># Return False, indicating</span>
        <span class="comment"># that the number is not prime.</span>
        <span class="keyword">return</span> <span class="literal">False</span>

<span class="keyword">if</span> <span class="var">__name__</span> == <span class="string">"__main__"</span>:
    <span class="var">n</span> = <span class="number">1483</span>
    <span class="var">isPrime</span> = <span class="function">checkPrime</span>(<span class="var">n</span>)
    <span class="keyword">if</span> <span class="var">isPrime</span>:
        <span class="function">print</span>(<span class="var">n</span>, <span class="string">"is a prime number."</span>)
    <span class="keyword">else</span>:
        <span class="function">print</span>(<span class="var">n</span>, <span class="string">"is not a prime number."</span>)
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// given number is prime.</span>
<span class="keyword">function</span> <span class="function">checkPrime</span>(<span class="param">n</span>) {
&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Initialize a counter variable to</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// count the number of factors.</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">let</span> <span class="variable">cnt</span> = <span class="number">0</span>;
&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Loop through numbers from 1 to n.</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">for</span> (<span class="keyword">let</span> <span class="variable">i</span> = <span class="number">1</span>; <span class="variable">i</span> &lt;= <span class="variable">n</span>; <span class="variable">i</span>++) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// If n is divisible by i</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// without any remainder.</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> (<span class="variable">n</span> % <span class="variable">i</span> === <span class="number">0</span>) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Increment the counter.</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">cnt</span> = <span class="variable">cnt</span> + <span class="number">1</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// If the number of</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// factors is exactly 2.</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> (<span class="variable">cnt</span> === <span class="number">2</span>) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Return true, indicating</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// that the number is prime.</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="keyword">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;} <span class="keyword">else</span> {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Return false, indicating</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// that the number is not prime.</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="keyword">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;}
}

<span class="comment">// Main function</span>
<span class="keyword">function</span> <span class="function">main</span>() {
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">let</span> <span class="variable">n</span> = <span class="number">1483</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">let</span> <span class="variable">isPrime</span> = <span class="function">checkPrime</span>(<span class="variable">n</span>);
&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> (<span class="variable">isPrime</span>) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="function">console</span>.log(<span class="variable">n</span> + <span class="string">" is a prime number."</span>);
&nbsp;&nbsp;&nbsp;&nbsp;} <span class="keyword">else</span> {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="function">console</span>.log(<span class="variable">n</span> + <span class="string">" is not a prime number."</span>);
&nbsp;&nbsp;&nbsp;&nbsp;}
}

<span class="comment">// Calling the main function</span><br>
<span class="function">main</span>();<br>
</code></pre>
                </div>
                <div><strong>Output:</strong> 1483 is a prime number.</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(N) </strong> where N is the input number as we iterate from 1 to N performing constant-time operation for each iteration.
            <div><strong>Space Complexity: O(1) </strong>as the space used by the algorithm does not increase with the size of the input.</div>
          </div>
        </div>
        </div>
        </div>
        <!-- Optimal Approach -->
        <div class="code-block">
  <div class="section-header" data-section="optimal2">
    Optimal Approach
  </div>
  <div class="section-content hidden" data-content="optimal2">
    <div class="card shadow-sm" style="padding:10px;">
      <button class="algorithm2-toggle-btn" data-toggle="algorithm2">
        <span>Algorithm / Intuition</span>
        <span class="toggle2-icon">▼</span>
      </button>

      <div class="algorithm2-content hidden" id="algorithm2-content">
        <strong>Algorithm</strong>
        <p class="fw-medium">
          We can optimise the algorithm by only iterating up to the square root of n when checking for factors. This is because if n has a factor greater than its square root, it must also have a factor smaller than its square root.
        </p>
        <p>This property is symmetric about the square root of n by traversing just the first half we can avoid redundant iteration and computations improving the efficiency of the algorithm. Discusses in detail here: <u> <a  style="color:red;" href="./print-all-divisors-of-a-given-number.php">Print All Divisiors</a></u></p>
        <img src="../../images/print-all-divisors-image1.png" style="width: 40vw; height: 25vw;" alt="">
        <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul>
                    <div><strong>Step 1:</strong> Initialise a counter variable cnt to count the number of factors to 0.</div>
                    <div><strong>Step 2:</strong>Begin a loop from 1 to the square root of n. This loop iterates through possible factors of n. For each value of i within the loop:</div>
                    <ul>
                      <li>Check if n is divisible by i without any remainder.</li>
                      <li>If n is divisible by i, it means i is a factor of n, so increment the counter variable cnt by 1.</li>
                      <li>Check if the reciprocal factor of i ie. n/i is not equal to i. If they are not equal, it means there is a distinct factor so increment cnt by 1 again.</li>
                    </ul>
                    <div><strong>Step 3:</strong> After the loop, cnt will contain the total numbers of factors of n.</div>
                    <div><strong>Step 4:</strong> Check if the value of cnt is exactly 2, it means that n has exactly two distinct factors (1 and itself), indicating that it is a prime number.
                      <ul>
                        <li>If the the number of factors is greater than 2 then it is a composite number, return false.</li>
                      </ul>
                    </div>
                </ul>
              </div>
            </div>

            <div class="code-switcher-container mt-4">
              <div class="section-header" data-section="code3">
                Code Implementation
              </div>
              
              <div class="code-switcher-content3 hidden" data-content="code3">
                <div class="code-switcher-actions3">
                  <button class="code-switcher-btn3 active3" data-lang="cpp3">C++</button>
                  <button class="code-switcher-btn3" data-lang="c3">C</button>
                  <button class="code-switcher-btn3" data-lang="java3">Java</button>
                  <button class="code-switcher-btn3" data-lang="python3">Python</button>
                  <button class="code-switcher-btn3" data-lang="javascript3">JavaScript</button>
                </div>

                <!-- C++ Code Block -->
                <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"class="code-block-content;" id="cpp3-code">
                  <button class="copy-btn" data-copy="cpp3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// given number is prime.</span>
<span class="keyword">#include</span> <span class="angle">&lt;bits/stdc++.h&gt;</span> 
<span class="keyword">#include</span> <span class="angle">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> std;

<span class="keyword">bool</span> <span class="function">checkPrime</span>(<span class="keyword">int</span> n) {
    <span class="comment">// Initialize a counter variable to</span>
    <span class="comment">// count the number of factors.</span>
    <span class="keyword">int</span> cnt = <span class="number">0</span>;

    <span class="comment">// Loop through numbers from 1</span>
    <span class="comment">// to the square root of n.</span>
    <span class="keyword">for</span>(<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= sqrt(n); i++) {

        <span class="comment">// If n is divisible by i</span>
        <span class="comment">// without any remainder.</span>
        <span class="keyword">if</span>(n % i == <span class="number">0</span>) {

            <span class="comment">// Increment the counter.</span>
            cnt = cnt + <span class="number">1</span>;

            <span class="comment">// If n is not a perfect square,</span>
            <span class="comment">// count its reciprocal factor.</span>
            <span class="keyword">if</span>(n / i != i){
                cnt = cnt + <span class="number">1</span>;
            }
        }
    }

    <span class="comment">// If the number of</span>
    <span class="comment">// factors is exactly 2.</span>
    <span class="keyword">if</span>(cnt == <span class="number">2</span>) {
        <span class="comment">// Return true, indicating</span>
        <span class="comment">// that the number is prime.</span>
        <span class="keyword">return</span> <span class="keyword">true</span>;
    }
    <span class="keyword">else</span> {
        <span class="comment">// Return false, indicating</span>
        <span class="comment">// that the number is not prime.</span>
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
}

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> n = <span class="number">1483</span>;
    <span class="keyword">bool</span> isPrime = <span class="function">checkPrime</span>(n);

    <span class="keyword">if</span>(isPrime){
        cout &lt;&lt; n &lt;&lt; <span class="string">" is a prime number."</span> &lt;&lt; endl;
    } <span class="keyword">else</span> {
        cout &lt;&lt; n &lt;&lt; <span class="string">" is not a prime number."</span> &lt;&lt; endl;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code>
</pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c3-code">
  <button class="copy-btn" data-copy="c3">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color:#00ffff;">#include</span> <span style="color:#ffcc00;">&lt;stdio.h&gt;</span>
<span style="color:#00ffff;">#include</span> <span style="color:#ffcc00;">&lt;math.h&gt;</span>

<span style="color:#00ff00;">// Function to check if a given number is prime</span>
<span style="color:#00ffff;">int</span> <span style="color:#00ffcc;">checkPrime</span>(<span style="color:#00ffff;">int</span> n) {
    <span style="color:#00ffff;">int</span> cnt = 0;

    <span style="color:#00ff00;">// Loop from 1 to sqrt(n)</span>
    <span style="color:#00ffff;">for</span>(<span style="color:#00ffff;">int</span> i = 1; i &lt;= sqrt(n); i++) {
        <span style="color:#00ffff;">if</span>(n % i == 0) {
            cnt = cnt + 1;

            <span style="color:#00ff00;">// If i and n/i are different, count both factors</span>
            <span style="color:#00ffff;">if</span>(n / i != i) {
                cnt = cnt + 1;
            }
        }
    }

    <span style="color:#00ff00;">// Prime number has exactly 2 factors</span>
    <span style="color:#00ffff;">if</span>(cnt == 2) {
        <span style="color:#00ffff;">return</span> 1;
    } <span style="color:#00ffff;">else</span> {
        <span style="color:#00ffff;">return</span> 0;
    }
}

<span style="color:#00ffff;">int</span> <span style="color:#00ffcc;">main</span>() {
    <span style="color:#00ffff;">int</span> n = 1483;
    <span style="color:#00ffff;">int</span> isPrime = checkPrime(n);

    <span style="color:#00ffff;">if</span>(isPrime) {
        printf(<span style="color:#ffcc00;">"%d is a prime number.\n"</span>, n);
    } <span style="color:#00ffff;">else</span> {
        printf(<span style="color:#ffcc00;">"%d is not a prime number.\n"</span>, n);
    }

    <span style="color:#00ffff;">return</span> 0;
}
</code></pre>

</div>
                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java3-code">
                  <button class="copy-btn" data-copy="java3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">import</span> java.util.*;

<span class="keyword">public class</span> <span class="class-name">Main</span> {

    <span class="comment">// Function to check if a</span>
    <span class="comment">// given number is prime.</span>
    <span class="keyword">static boolean</span> <span class="method">checkPrime</span>(<span class="keyword">int</span> n){ 

        <span class="comment">// Initialize a counter variable to</span>
        <span class="comment">// count the number of factors.</span>
        <span class="keyword">int</span> cnt = <span class="number">0</span>;

        <span class="comment">// Loop through numbers from 1</span>
        <span class="comment">// to the square root of n.</span>
        <span class="keyword">for</span>(<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= Math.sqrt(n); i++){ 

            <span class="comment">// If n is divisible by i</span>
            <span class="comment">// without any remainder.</span>
            <span class="keyword">if</span>(n % i == <span class="number">0</span>){ 

                <span class="comment">// Increment the counter.</span>
                cnt = cnt + <span class="number">1</span>;

                <span class="comment">// If n is not a perfect square,</span>
                <span class="comment">// count its reciprocal factor.</span>
                <span class="keyword">if</span>(n / i != i){
                    cnt = cnt + <span class="number">1</span>;
                }
            }
        }

        <span class="comment">// If the number of</span>
        <span class="comment">// factors is exactly 2.</span>
        <span class="keyword">if</span>(cnt == <span class="number">2</span>){
             <span class="comment">// Return true, indicating</span>
             <span class="comment">// that the number is prime.</span>
            <span class="keyword">return true</span>;
        }
        <span class="comment">// If the number of</span>
        <span class="comment">// factors is not 2.</span>
        <span class="keyword">else</span>{ 
            <span class="comment">// Return false, indicating</span>
            <span class="comment">// that the number is not prime.</span>
            <span class="keyword">return false</span>; 
        }
    }

    <span class="keyword">public static void</span> <span class="method">main</span>(<span class="class-name">String</span>[] args) {
        <span class="keyword">int</span> n = <span class="number">1483</span>;
        <span class="keyword">boolean</span> isPrime = checkPrime(n);
        <span class="keyword">if</span>(isPrime){
            <span class="class-name">System</span>.out.<span class="method">println</span>(n + <span class="string">" is a prime number."</span>);
        } <span class="keyword">else</span> {
            <span class="class-name">System</span>.out.<span class="method">println</span>(n + <span class="string">" is not a prime number."</span>);
        }
    }
}
</code></pre>

                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python3-code">
                  <button class="copy-btn" data-copy="python3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color:#c792ea;">import</span> math

<span style="color:#39ac39;"># Function to check if a</span>
<span style="color:#39ac39;"># given number is prime.</span>
<span style="color:#c792ea;">def</span> <span style="color:#39ac39;">checkPrime</span>(n):
    <span style="color:#39ac39;"># Initialize a counter variable to</span>
    <span style="color:#39ac39;"># count the number of factors.</span>
    cnt = <span style="color:#f78c6c;">0</span>

    <span style="color:#39ac39;"># Loop through numbers from 1</span>
    <span style="color:#39ac39;"># to the square root of n.</span>
    <span style="color:#c792ea;">for</span> i <span style="color:#c792ea;">in</span> <span style="color:#39ac39;">range</span>(<span style="color:#f78c6c;">1</span>, <span style="color:#39ac39;">int</span>(math.sqrt(n)) + <span style="color:#f78c6c;">1</span>):
        <span style="color:#39ac39;"># If n is divisible by i</span>
        <span style="color:#39ac39;"># without any remainder.</span>
        <span style="color:#c792ea;">if</span> n % i == <span style="color:#f78c6c;">0</span>:
            <span style="color:#39ac39;"># Increment the counter.</span>
            cnt = cnt + <span style="color:#f78c6c;">1</span>

            <span style="color:#39ac39;"># If n is not a perfect square,</span>
            <span style="color:#39ac39;"># count its reciprocal factor.</span>
            <span style="color:#c792ea;">if</span> n // i != i:
                cnt = cnt + <span style="color:#f78c6c;">1</span>

    <span style="color:#39ac39;"># If the number of</span>
    <span style="color:#39ac39;"># factors is exactly 2.</span>
    <span style="color:#c792ea;">if</span> cnt == <span style="color:#f78c6c;">2</span>:
        <span style="color:#39ac39;"># Return true, indicating</span>
        <span style="color:#39ac39;"># that the number is prime.</span>
        <span style="color:#c792ea;">return</span> <span style="color:#c3e88d;">True</span>
    <span style="color:#c792ea;">else</span>:
        <span style="color:#39ac39;"># Return false, indicating</span>
        <span style="color:#39ac39;"># that the number is not prime.</span>
        <span style="color:#c792ea;">return</span> <span style="color:#c3e88d;">False</span>

<span style="color:#39ac39;"># Main function</span>
<span style="color:#c792ea;">def</span> <span style="color:#39ac39;">main</span>():
    n = <span style="color:#f78c6c;">1483</span>
    isPrime = checkPrime(n)
    <span style="color:#c792ea;">if</span> isPrime:
        <span style="color:#39ac39;">print</span>(n, <span style="color:#c3e88d;">"is a prime number."</span>)
    <span style="color:#c792ea;">else</span>:
        <span style="color:#39ac39;">print</span>(n, <span style="color:#c3e88d;">"is not a prime number."</span>)

<span style="color:#c792ea;">if</span> __name__ == <span style="color:#c3e88d;">"__main__"</span>:
    main()
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript3-code">
                  <button class="copy-btn" data-copy="javascript3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// given number is prime.</span>
<span class="keyword">function</span> <span class="function">checkPrime</span>(n) { 

    <span class="comment">// Initialize a counter variable to</span>
    <span class="comment">// count the number of factors.</span>
    <span class="keyword">let</span> cnt = <span class="number">0</span>;

    <span class="comment">// Loop through numbers from 1</span>
    <span class="comment">// to the square root of n.</span>
    <span class="keyword">for</span>(<span class="keyword">let</span> i = <span class="number">1</span>; i &lt;= Math.sqrt(n); i++) { 

        <span class="comment">// If n is divisible by i</span>
        <span class="comment">// without any remainder.</span>
        <span class="keyword">if</span>(n % i === <span class="number">0</span>) { 

            <span class="comment">// Increment the counter.</span>
            cnt = cnt + <span class="number">1</span>;

            <span class="comment">// If n is not a perfect square,</span>
            <span class="comment">// count its reciprocal factor.</span>
            <span class="keyword">if</span>(n / i !== i) {
                cnt = cnt + <span class="number">1</span>;
            }
        }
    }

    <span class="comment">// If the number of</span>
    <span class="comment">// factors is exactly 2.</span>
    <span class="keyword">if</span>(cnt === <span class="number">2</span>) {
        <span class="comment">// Return true, indicating</span>
        <span class="comment">// that the number is prime.</span>
        <span class="keyword">return</span> <span class="keyword">true</span>;
    }
    <span class="comment">// If the number of</span>
    <span class="comment">// factors is not 2.</span>
    <span class="keyword">else</span> {
        <span class="comment">// Return false, indicating</span>
        <span class="comment">// that the number is not prime.</span>
        <span class="keyword">return</span> <span class="keyword">false</span>; 
    }
}

<span class="comment">// Test the function with a sample number.</span>
<span class="keyword">let</span> n = <span class="number">1483</span>;
<span class="keyword">let</span> isPrime = checkPrime(n);
<span class="keyword">if</span>(isPrime) {
    console.log(n + <span class="string">" is a prime number."</span>);
} <span class="keyword">else</span> {
    console.log(n + <span class="string">" is not a prime number."</span>);
}
    </code></pre>

                </div>
                <div ><strong>Output: </strong>1483 is a prime number.
</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example3">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example3">
            <strong>Time Complexity: O(sqrt(N))</strong>where N is the input number. The loop iterates up to the square root of n performing constant time operations at each step.
            <div><strong>Space Complexity : O(1)</strong>as the space complexity remains constant and independent of the input size. Only a fixed amount of memory is required to store the integer variables.</div>
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
            <p>The video explanation for this algorithm is currently not available. Check back later or contact CodeWithH-Square for more information.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="success-message" id="copy-success">Code copied to clipboard!</div>
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

      function initAlgorithmToggle2() {
  const toggleBtn = document.querySelector('[data-toggle="algorithm2"]');
  const content = document.getElementById('algorithm2-content'); // ✅ Corrected ID
  const icon = toggleBtn ? toggleBtn.querySelector('.toggle2-icon') : null; // ✅ Ensure class matches your HTML

  if (toggleBtn && content && icon) {
    toggleBtn.addEventListener('click', function () {
      content.classList.toggle('hidden');
      icon.textContent = content.classList.contains('hidden') ? '▼' : '▲';
      console.log('Toggled algorithm section');
    });
  }
}

      // Initialize all functionality
      try {
        initSectionToggles();
        initAlgorithmToggle();
        initAlgorithmToggle2();
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