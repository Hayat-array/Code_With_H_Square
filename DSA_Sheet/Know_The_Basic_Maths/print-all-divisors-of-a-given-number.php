<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Print all Divisors of a given Number</title>
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
        <b>Sabbir</b>
      </div>
      <div class="col-8">
        <h1><strong>Print all Divisors of a given Number</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong> Given an integer N, return all divisors of N.</p>
          <p>A divisor of an integer N is a positive integer that divides N without leaving a remainder. In other words, if N is divisible by another integer without any remainder, then that integer is considered a divisor of N.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 36
<strong>Output</strong>: [1, 2, 3, 4, 6, 9, 12, 18, 36]
<strong>Explanation</strong>: The number 12345 has 5 digits.

<strong>Example 2</strong>: <strong>Input:</strong> N = 12
<strong>Output:</strong>[1, 2, 3, 4, 6, 12]
<strong>Explanation:</strong>The divisors of 12 are 1, 2, 3, 4, 6, 12.</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("./animation/print-all-divisors-of-a-given-num-video.php")
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
                  A brute force approach would be to iterate from 1 to n checking each value if it divides n without leaving a remainder. For each divisor found, store it in an array and a count of divisors is maintained. After iterating through all possible values, the size of the array is updated with the count of divisors and the array is returned.
                </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong>Initialise an array to store the divisors.</li>
                  <li><strong>Step 2:</strong> Iterate from 1 to n using a loop variable ‘i’. For each value of ‘i’:</li> 
                    <ul class="ps-3">
                      <li>Check if ‘i’ is a divisor of ‘n’ by checking if ‘n’ is divisible by ‘i’ without a remainder (‘n’%i == 0).</li>
                      <li>If i is a divisor, store it in the array of divisors and increment the count of divisors.</li>
                    </ul>
                   <li><strong>Step 3:</strong>After the loop, return the array of divisors.</li>
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
<span class="preprocessor">#include &lt;bits/stdc++.h&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> std;

<span class="comment">// Function to find all divisors of a number</span>
<span class="datatype">int</span>* <span class="func">findDivisors</span>(<span class="datatype">int</span> n, <span class="datatype">int</span> &amp;count) {
    <span class="datatype">int</span>* divisors = <span class="keyword">new</span> <span class="datatype">int</span>[n];
    count = 0;

    <span class="keyword">for</span> (<span class="datatype">int</span> i = 1; i &lt;= n; ++i) {
        <span class="keyword">if</span> (n % i == 0) {
            divisors[count++] = i;
        }
    }

    <span class="keyword">return</span> divisors;
}

<span class="datatype">int</span> <span class="func">main</span>() {
    <span class="datatype">int</span> num = <span class="literal">36</span>;
    <span class="datatype">int</span> size;
    
    <span class="comment">// Get all divisors</span>
    <span class="datatype">int</span>* divisors = <span class="func">findDivisors</span>(num, size);

    cout &lt;&lt; <span class="string">"Divisors of "</span> &lt;&lt; num &lt;&lt; <span class="string">" are: "</span>;
    <span class="keyword">for</span> (<span class="datatype">int</span> i = 0; i &lt; size; ++i) {
        cout &lt;&lt; divisors[i] &lt;&lt; <span class="string">" "</span>;
    }
    cout &lt;&lt; endl;

    <span class="comment">// Free dynamically allocated memory</span>
    <span class="keyword">delete</span>[] divisors;

    <span class="keyword">return</span> 0;
}
</code></pre>
                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// C program to print divisors of a number</span>
<span class="keyword">#include</span> <span class="function">&lt;stdio.h&gt;</span>

<span class="keyword">void</span> <span class="function">printDivisors</span>(<span class="keyword">int</span> n) {
    <span class="comment">// Loop through 1 to n and check divisibility</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= n; i++) {
        <span class="keyword">if</span> (n % i == <span class="number">0</span>) {
            printf(<span class="function">"%d "</span>, i);
        }
    }
}

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> number = <span class="number">12</span>;
    
    printf(<span class="function">"Divisors of %d are: "</span>, number);
    <span class="function">printDivisors</span>(number);
    printf(<span class="function">"\n"</span>);
    
    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public class</span> <span class="function">Main</span> {
    <span class="keyword">public static</span> <span class="keyword">int[]</span> <span class="function">printDivisors</span>(<span class="keyword">int</span> n, <span class="keyword">int[]</span> size) {
        <span class="comment">// Allocate memory for the array of divisors</span>
        <span class="keyword">int[]</span> divisors = <span class="keyword">new</span> <span class="keyword">int</span>[n];
        <span class="comment">// Initialize the count of divisors</span>
        <span class="keyword">int</span> count = 0;

        <span class="keyword">for</span> (<span class="keyword">int</span> i = 1; i &lt;= n; i++) {
            <span class="keyword">if</span> (n % i == 0) {
                <span class="comment">// Add the divisor to the array</span>
                divisors[count++] = i;
            }
        }

        <span class="comment">// Update the size parameter with the count of divisors</span>
        size[0] = count;

        <span class="comment">// Return the array of divisors</span>
        <span class="keyword">return</span> divisors;
    }

    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> args) {
        <span class="keyword">int</span> number = <span class="number">12</span>;
        <span class="keyword">int[]</span> size = <span class="keyword">new</span> <span class="keyword">int</span>[1];
        <span class="keyword">int[]</span> divisors = printDivisors(number, size);

        <span class="function">System.out.print</span>(<span class="string">"Divisors of "</span> + number + <span class="string">" are: "</span>);
        <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; size[0]; i++) {
            <span class="function">System.out.print</span>(divisors[i] + <span class="string">" "</span>);
        }
        <span class="function">System.out.println</span>();

        <span class="comment">// Free dynamically allocated memory</span>
        divisors = <span class="keyword">null</span>;
    }
}
  </code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">def</span> <span class="function">print_divisors</span>(n):
    <span class="comment"># Store divisors in a list</span>
    divisors = []
    <span class="keyword">for</span> i <span class="keyword">in</span> <span class="function">range</span>(<span class="number">1</span>, n + <span class="number">1</span>):
        <span class="keyword">if</span> n % i == <span class="number">0</span>:
            divisors.append(i)
    <span class="keyword">return</span> divisors

<span class="keyword">def</span> <span class="function">main</span>():
    number = <span class="number">12</span>
    divisors = <span class="function">print_divisors</span>(number)

    <span class="function">print</span>(f<span class="string">"Divisors of {number} are: "</span>, end=<span class="string">""</span>)
    <span class="keyword">for</span> d <span class="keyword">in</span> divisors:
        <span class="function">print</span>(d, end=<span class="string">" "</span>)
    <span class="function">print</span>()

<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    <span class="function">main</span>()
</code>
</pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">function</span> <span class="function">printDivisors</span>(<span class="variable">n</span>) {
    <span class="keyword">const</span> <span class="variable">divisors</span> = [];

    <span class="keyword">for</span> (<span class="keyword">let</span> <span class="variable">i</span> = <span class="number">1</span>; <span class="variable">i</span> &lt;= <span class="variable">n</span>; <span class="variable">i</span>++) {
        <span class="keyword">if</span> (<span class="variable">n</span> % <span class="variable">i</span> === <span class="number">0</span>) {
            <span class="variable">divisors</span>.push(<span class="variable">i</span>);
        }
    }

    <span class="keyword">return</span> <span class="variable">divisors</span>;
}

<span class="comment">// Main code</span>
<span class="keyword">const</span> <span class="variable">number</span> = <span class="number">12</span>;
<span class="keyword">const</span> <span class="variable">divisors</span> = <span class="function">printDivisors</span>(<span class="variable">number</span>);

<span class="variable">console</span>.log(<span class="string">`Divisors of ${number} are: ${divisors.join(" ")}`</span>);
</code></pre>
                </div>
                <div><strong>Output:</strong> Divisors of 12 are: 1 2 3 4 6 12</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(N) </strong>where N is the input number. The algorithm iterates through each number from 1 to n once to check if it is a divisor.
            <!-- <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log10N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul> -->
            <div><strong>Space Complexity: O(N) </strong> where N is the input number. The algorithm iterates through each number from 1 to n once to check if it is a divisor.</div>
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
          We can optimise the previous approach by using the property that for any non-negative integer n, if d is a divisor of n then n/d is also a divisor of n.
        </p>
        <p>This property is symmetric about the square root of n by traversing just the first half we can avoid redundant iteration and computations improving the efficiency of the algorithm.</p>
        <img src="../../images/print-all-divisors-image1.png" style="width: 40vw; height: 25vw;" alt="">
        <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul>
                    <div><strong>Step 1:</strong>Initialise an array to store the divisors.</div>
                    <div><strong>Step 2:</strong>Step 2: Iterate from 1 to square root of n using a loop variable ‘i’. For each value of ‘i’:</div>
                    <ul>
                      <li>Check if ‘i’ is a divisor of ‘n’ by checking if ‘n’ is divisible by ‘i’ without a remainder (‘n’%i == 0).</li>
                      <li>If i is a divisor, add it to the vectors of divisors.</li>
                      <li>If i is different from n/i add the counterpart divisor n/i to the vector of divisors.</li>
                    </ul>
                    <div><strong>Step 3:</strong>Initialise an array to store the divisors.</div>
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
<span class="keyword">#include</span> <span class="header">&lt;iostream&gt;</span>
<span class="keyword">#include</span> <span class="header">&lt;vector&gt;</span>
<span class="keyword">#include</span> <span class="header">&lt;cmath&gt;</span>

<span class="keyword">using namespace</span> std;

<span class="type">vector&lt;int&gt;</span> <span class="function">findDivisors</span>(<span class="type">int</span> n) {
    <span class="comment">// Initialize an empty vector to store the divisors</span>
    <span class="type">vector&lt;int&gt;</span> divisors;

    <span class="comment">// Calculate the square root of n</span>
    <span class="type">int</span> sqrtN = sqrt(n);

    <span class="comment">// Loop from 1 to the square root of n</span>
    <span class="keyword">for</span> (<span class="type">int</span> i = 1; i &lt;= sqrtN; ++i) {
        <span class="comment">// Check if i divides n without leaving a remainder</span>
        <span class="keyword">if</span> (n % i == 0) {
            <span class="comment">// Add divisor i to the list</span>
            divisors.push_back(i);

            <span class="comment">// Add the counterpart divisor if it's different from i</span>
            <span class="keyword">if</span> (i != n / i) {
                divisors.push_back(n / i);
            }
        }
    }

    <span class="comment">// Return the list of divisors</span>
    <span class="keyword">return</span> divisors;
}

<span class="type">int</span> <span class="function">main</span>() {
    <span class="type">int</span> number = 12;
    <span class="type">vector&lt;int&gt;</span> divisors = findDivisors(number);

    cout &lt;&lt; <span class="string">"Divisors of "</span> &lt;&lt; number &lt;&lt; <span class="string">" are: "</span>;
    <span class="keyword">for</span> (<span class="type">int</span> divisor : divisors) {
        cout &lt;&lt; divisor &lt;&lt; <span class="string">" "</span>;
    }
    cout &lt;&lt; endl;

    <span class="keyword">return</span> 0;
}
</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c3-code">
  <button class="copy-btn" data-copy="c3">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// C program to find all divisors of a number</span>
<span class="keyword">#include </span> &lt;stdio.h&gt;
<span class="keyword">#include </span> &lt;math.h&gt;

<span class="function">int main() {</span>
    <span class="type">int</span> n = 12;

    printf("Divisors of %d are:\n", n);

    <span class="comment">// Loop from 1 to sqrt(n)</span>
    for (int i = 1; i &lt;= sqrt(n); i++) {
        if (n % i == 0) {
            printf("%d ", i);

            <span class="comment">// Check for distinct divisors</span>
            if (i != n / i) {
                printf("%d ", n / i);
            }
        }
    }

    printf("\n");
    return 0;
}
</code></pre>

</div>
                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java3-code">
                  <button class="copy-btn" data-copy="java3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Import ArrayList from the Java utility package</span>
import java.util.ArrayList;

<span class="keyword">public class</span> Main {
    <span class="comment">// Method to find all divisors of a number</span>
    <span class="keyword">public static</span> ArrayList&lt;Integer&gt; findDivisors(<span class="type">int</span> n) {
        <span class="comment">// Initialize an empty ArrayList to store the divisors</span>
        ArrayList&lt;Integer&gt; divisors = <span class="keyword">new</span> ArrayList&lt;&gt;();

        <span class="comment">// Calculate the square root of n</span>
        <span class="type">int</span> sqrtN = (<span class="type">int</span>) Math.sqrt(n);

        <span class="comment">// Loop from 1 to the square root of n</span>
        <span class="keyword">for</span> (<span class="type">int</span> i = 1; i &lt;= sqrtN; ++i) {
            <span class="comment">// Check if i divides n without leaving a remainder</span>
            <span class="keyword">if</span> (n % i == 0) {
                <span class="comment">// Add divisor i to the list</span>
                divisors.add(i);

                <span class="comment">// Add the counterpart divisor if it's different from i</span>
                <span class="keyword">if</span> (i != n / i) {
                    <span class="comment">// Add the counterpart divisor to the list</span>
                    divisors.add(n / i);
                }
            }
        }

        <span class="comment">// Return the list of divisors</span>
        <span class="keyword">return</span> divisors;
    }

    <span class="comment">// Main method to run the program</span>
    <span class="keyword">public static void</span> main(String[] args) {
        <span class="type">int</span> number = 12;
        ArrayList&lt;Integer&gt; divisors = findDivisors(number);

        <span class="comment">// Display the divisors</span>
        System.out.print(<span class="string">"Divisors of "</span> + number + <span class="string">" are: "</span>);
        <span class="keyword">for</span> (<span class="type">int</span> divisor : divisors) {
            System.out.print(divisor + <span class="string">" "</span>);
        }
        System.out.println();
    }
}</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python3-code">
                  <button class="copy-btn" data-copy="python3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">import</span> math

<span class="keyword">def</span> <span class="function">findDivisors</span>(n):
    <span class="comment"># Initialize an empty list to store the divisors</span>
    divisors = []

    <span class="comment"># Calculate the square root of n</span>
    sqrtN = <span class="type">int</span>(math.sqrt(n))

    <span class="comment"># Loop from 1 to the square root of n</span>
    <span class="keyword">for</span> i <span class="keyword">in</span> <span class="function">range</span>(<span class="number">1</span>, sqrtN + <span class="number">1</span>):
        <span class="comment"># Check if i divides n without leaving a remainder</span>
        <span class="keyword">if</span> n % i == <span class="number">0</span>:
            <span class="comment"># Add divisor i to the list</span>
            divisors.append(i)

            <span class="comment"># Add the counterpart divisor if it's different</span>
            <span class="keyword">if</span> i != n // i:
                divisors.append(n // i)

    <span class="keyword">return</span> divisors

<span class="keyword">if</span> __name__ == "__main__":
    number = <span class="number">12</span>
    divisors = findDivisors(number)
    <span class="function">print</span>(<span class="string">"Divisors of"</span>, number, <span class="string">"are:"</span>, divisors)
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript3-code">
                  <button class="copy-btn" data-copy="javascript3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color: gray;">// Function to find all divisors of a number</span>
function findDivisors(n) {
    <span style="color: gray;">// Initialize an empty array to store the divisors</span>
    let divisors = [];

    <span style="color: gray;">// Calculate the square root of n</span>
    let sqrtN = Math.sqrt(n);

    <span style="color: gray;">// Loop from 1 to the square root of n</span>
    for (let i = 1; i <= sqrtN; ++i) {
        <span style="color: gray;">// Check if i divides n without leaving a remainder</span>
        if (n % i === 0) {
            <span style="color: gray;">// Add divisor i to the array</span>
            divisors.push(i);

            <span style="color: gray;">// Add the counterpart divisor if it's different from i</span>
            if (i !== n / i) {
                divisors.push(n / i);
            }
        }
    }

    <span style="color: gray;">// Return the array of divisors</span>
    return divisors;
}

<span style="color: gray;">// Test the function</span>
let number = 12;
let divisors = findDivisors(number);

console.log("Divisors of " + number + " are: ");
for (let divisor of divisors) {
    console.log(divisor + " ");
}
console.log();
</code></pre>

                </div>
                <div ><strong>Output: </strong>Divisors of 12 are: 1 2 3 4 6 12
</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example3">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example3">
            <strong>Time Complexity: O(sqrt(N))</strong>where N is the input number. The algorithm iterates through each number from 1 to the square root of N once to check if it is a divisor.
            <!-- <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log10N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul> -->
            <div><strong>Space Complexity : O(2*sqrt(N))</strong> where N is the input number. This approach allocates memory for an array to hold all the divisors. The size of this array could go to be 2*(sqrt(N)).</div>
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