<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Factorial of a Number : Iterative and Recursive</title>
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
      color: rgb(246 228 22);
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
        <div style="border-top: 1px solid #e1d9d9ff; width:75%; margin-left:287px;"></div>
      <div class="col-3 p-3 border-end">
        <b>CodeWithH-Square</b>
      </div>
      <div class="col-8">
        <h1><strong>Factorial of a Number : Iterative and Recursive</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong>Given a number X,  print its factorial.</p>
          <p>To obtain the factorial of a number, it has to be multiplied by all the whole numbers preceding it. More precisely X! = X*(X-1)*(X-2) … 1.</p>
          <p>Note: X  is always a positive number. </p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre style="color:black;"><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 5
<strong>Output</strong>: 120
<strong>Explanation</strong>:5! = 5*4*3*2*1

<strong>Example 2</strong>: <strong>Input:</strong> N = 3
<strong>Output:</strong>6
<strong>Explanation:</strong>3! = 3*2*1
</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("../Know_The_Basic_Maths/animation/factorial-of-a-number-iterative-and-recursive-video.php")
            ?>
          </div>
          </div>
          
        </div>
  </div>
        <div class="disclaimer">
           <!-- <span>Don't jump directly to the solution, try it out yourself first.</span> -->
           <span><span style="color:red;">Disclaimer : </span>Here is the practice link for <a href="/" style="color:red;">Iterative</a>  and <a href="/" style="color:red;">Recursive</a> Problems to help you assess your knowledge better. It's highly recommend trying to solve it before looking at the solution.</span>
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
                <p class="fw-medium">
                </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                    <li>Since the factorial of a number X is the product of the number itself and all its preceding positive integers, we can calculate it using a loop.</li>
                    <li>We initialize a variable (say fact) to 1, which will hold the running product.</li>
                    <li>We run a loop from i = 1 to X.</li>
                    <li>In each iteration, we multiply fact by i (i.e., fact = fact * i).</li>
                    <li>After the loop ends, fact will contain the factorial of X.</li>
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
                  <pre><code>
<span class="comment">// C++ program to calculate factorial of a number</span>
<span class="keyword">#include</span> <span class="iostream">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="namespace">namespace</span> <span class="namespace">std</span>;

<span class="comment">// Function to calculate factorial of a number</span>
<span class="keyword">int</span> <span class="func">factorial</span>(<span class="keyword">int</span> X) {
    <span class="keyword">int</span> ans = <span class="number">1</span>;

    <span class="comment">// Loop from 1 to X to compute factorial</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= X; i++) {
        ans = ans * i;
    }

    <span class="comment">// Return the final result</span>
    <span class="keyword">return</span> ans;
}

<span class="keyword">int</span> <span class="func">main</span>() {
    <span class="comment">// Input value for which factorial is to be calculated</span>
    <span class="keyword">int</span> X = <span class="number">5</span>;

    <span class="comment">// Call the factorial function and store the result</span>
    <span class="keyword">int</span> result = <span class="func">factorial</span>(X);

    <span class="comment">// Print the result</span>
    cout &lt;&lt; <span class="string">"The factorial of "</span> &lt;&lt; X &lt;&lt; <span class="string">" is "</span> &lt;&lt; result;

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to calculate factorial of a number</span>
<span class="keyword">#include</span> <span class="header">&lt;stdio.h&gt;</span>

<span class="keyword">int</span> <span class="func">factorial</span>(<span class="keyword">int</span> <span class="var">X</span>) {
    <span class="keyword">int</span> <span class="var">ans</span> = <span class="number">1</span>;

    <span class="comment">// Loop from 1 to X to compute factorial</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="var">i</span> = <span class="number">1</span>; <span class="var">i</span> &lt;= <span class="var">X</span>; <span class="var">i</span>++) {
        <span class="var">ans</span> = <span class="var">ans</span> * <span class="var">i</span>;
    }

    <span class="comment">// Return the final result</span>
    <span class="keyword">return</span> <span class="var">ans</span>;
}

<span class="keyword">int</span> <span class="func">main</span>() {
    <span class="comment">// Input value for which factorial is to be calculated</span>
    <span class="keyword">int</span> <span class="var">X</span> = <span class="number">5</span>;

    <span class="comment">// Call the factorial function and store the result</span>
    <span class="keyword">int</span> <span class="var">result</span> = <span class="func">factorial</span>(<span class="var">X</span>);

    <span class="comment">// Print the result</span>
    <span class="func">printf</span>(<span class="string">"The factorial of %d is %d"</span>, <span class="var">X</span>, <span class="var">result</span>);

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public class</span> <span class="class">Main</span> {

    <span class="comment">// Function to calculate factorial of a number</span>
    <span class="keyword">public static int</span> <span class="func">factorial</span>(<span class="keyword">int</span> X) {
        <span class="keyword">int</span> ans = <span class="number">1</span>;

        <span class="comment">// Loop from 1 to X to compute factorial</span>
        <span class="keyword">for</span> (<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= X; i++) {
            ans = ans * i;
        }

        <span class="comment">// Return the final result</span>
        <span class="keyword">return</span> ans;
    }

    <span class="keyword">public static void</span> <span class="func">main</span>(String[] args) {
        <span class="comment">// Input value for which factorial is to be calculated</span>
        <span class="keyword">int</span> X = <span class="number">5</span>;

        <span class="comment">// Call the factorial function and store the result</span>
        <span class="keyword">int</span> result = <span class="func">factorial</span>(X);

        <span class="comment">// Print the result</span>
        System.out.println(<span class="string">"The factorial of "</span> + X + <span class="string">" is "</span> + result);
    }
}
</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># Function to calculate factorial of a number</span>
<span class="keyword">def</span> <span class="func">factorial</span>(<span class="var">X</span>):
    <span class="var">ans</span> = <span class="number">1</span>

    <span class="comment"># Loop from 1 to X to compute factorial</span>
    <span class="keyword">for</span> <span class="var">i</span> <span class="keyword">in</span> <span class="func">range</span>(<span class="number">1</span>, <span class="var">X</span> + <span class="number">1</span>):
        <span class="var">ans</span> *= <span class="var">i</span>

    <span class="comment"># Return the final result</span>
    <span class="keyword">return</span> <span class="var">ans</span>

<span class="comment"># Input value for which factorial is to be calculated</span>
<span class="var">X</span> = <span class="number">5</span>

<span class="comment"># Call the factorial function and store the result</span>
<span class="var">result</span> = <span class="func">factorial</span>(<span class="var">X</span>)

<span class="comment"># Print the result</span>
<span class="func">print</span>(<span class="string">f"The factorial of {X} is {result}"</span>)
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to calculate factorial of a number</span>
<span class="keyword">function</span> <span class="func">factorial</span>(<span class="var">X</span>) {
    <span class="keyword">let</span> <span class="var">ans</span> = <span class="number">1</span>;

    <span class="comment">// Loop from 1 to X to compute factorial</span>
    <span class="keyword">for</span> (<span class="keyword">let</span> <span class="var">i</span> = <span class="number">1</span>; <span class="var">i</span> &lt;= <span class="var">X</span>; <span class="var">i</span>++) {
        <span class="var">ans</span> *= <span class="var">i</span>;
    }

    <span class="comment">// Return the final result</span>
    <span class="keyword">return</span> <span class="var">ans</span>;
}

<span class="comment">// Input value for which factorial is to be calculated</span>
<span class="keyword">const</span> <span class="var">X</span> = <span class="number">5</span>;

<span class="comment">// Call the factorial function and store the result</span>
<span class="keyword">const</span> <span class="var">result</span> = <span class="func">factorial</span>(<span class="var">X</span>);

<span class="comment">// Print the result</span>
<span class="func">console</span>.log(<span class="string">`The factorial of ${X} is ${result}`</span>);
</code></pre>
                </div>
                <div><strong>Output:</strong> The factorial of 5 is 120</div>
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
    Recursive Solution
  </div>
  <div class="section-content hidden" data-content="optimal2">
    <div class="card shadow-sm" style="padding:10px;">
      <button class="algorithm2-toggle-btn" data-toggle="algorithm2">
        <span>Algorithm / Intuition</span>
        <span class="toggle2-icon">▼</span>
      </button>

      <div class="algorithm2-content hidden" id="algorithm2-content">
        <h6 class="fw-bold mt-3">Algorithm:</h6>
            <p class="fw-medium">
                The factorial of a number N can be calculated by multiplying all natural numbers from 1 to N.
            </p>
            <ul>
                <li>We can visualize this using recursion:</li>
                <ul>
                    <li>factorial(N) = N * factorial(N - 1)</li>
                    <li>This means the factorial of N is the product of N and the factorial of N - 1.</li>
                </ul>
            </ul>
            <ul>
                <li>We define a base case</li>
                <ul>
                    <li>If N == 0, we return 1, since 0! = 1 by definition.</li>
                </ul>
                <li>This approach breaks the problem into smaller subproblems, and the results of each subproblem are multiplied together as the recursive calls return.</li>
                <li>The final result is stored and printed as the output of the factorial(N) function.</li>
            </ul>
            <p style="mb:10px;"><strong>Recursion Tree for the following problem can be represented as follows :</strong></p>
            <div style="border:1px solid #CFCFCF; border-radius:5px; z-index;">
                <img src="../../images/factorial.png" style="width: 40vw; height: 25vw;" alt="">
            </div>
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
<span class="keyword">#include</span> <span class="header">&lt;bits/stdc++.h&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="var">std</span>;

<span class="comment">// Recursive function to calculate factorial of a number</span>
<span class="keyword">int</span> <span class="func">factorial</span>(<span class="keyword">int</span> <span class="var">n</span>) {
    <span class="comment">// Base case: factorial of 0 is 1</span>
    <span class="keyword">if</span> (<span class="var">n</span> == <span class="number">0</span>) {
        <span class="keyword">return</span> <span class="number">1</span>;
    }

    <span class="comment">// Recursive case: n * factorial of (n-1)</span>
    <span class="keyword">return</span> <span class="var">n</span> * <span class="func">factorial</span>(<span class="var">n</span> - <span class="number">1</span>);
}

<span class="keyword">int</span> <span class="func">main</span>() {
    <span class="comment">// Define the number to compute factorial</span>
    <span class="keyword">int</span> <span class="var">n</span> = <span class="number">3</span>;

    <span class="comment">// Call the factorial function and print the result</span>
    <span class="var">cout</span> &lt;&lt; <span class="func">factorial</span>(<span class="var">n</span>) &lt;&lt; <span class="var">endl</span>;

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c3-code">
  <button class="copy-btn" data-copy="c3">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Recursive function to calculate factorial of a number</span>
<span class="keyword">int</span> <span class="func">factorial</span>(<span class="keyword">int</span> <span class="var">n</span>) {
    <span class="comment">// Base case: factorial of 0 is 1</span>
    <span class="keyword">if</span> (<span class="var">n</span> == <span class="number">0</span>) {
        <span class="keyword">return</span> <span class="number">1</span>;
    }

    <span class="comment">// Recursive case: n * factorial of (n-1)</span>
    <span class="keyword">return</span> <span class="var">n</span> * <span class="func">factorial</span>(<span class="var">n</span> - <span class="number">1</span>);
}

<span class="keyword">int</span> <span class="func">main</span>() {
    <span class="comment">// Define the number to compute factorial</span>
    <span class="keyword">int</span> <span class="var">n</span> = <span class="number">3</span>;

    <span class="comment">// Call the factorial function and print the result</span>
    printf(<span class="string">"The factorial of %d is %d\n"</span>, <span class="var">n</span>, <span class="func">factorial</span>(<span class="var">n</span>));

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

</div>
                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java3-code">
                  <button class="copy-btn" data-copy="java3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public</span> <span class="keyword">class</span> <span class="class">Main</span> {

    <span class="comment">// Recursive function to calculate factorial of a number</span>
    <span class="keyword">public</span> <span class="keyword">static</span> <span class="keyword">int</span> <span class="func">factorial</span>(<span class="keyword">int</span> <span class="var">n</span>) {
        <span class="comment">// Base case: factorial of 0 is 1</span>
        <span class="keyword">if</span> (<span class="var">n</span> == <span class="number">0</span>) {
            <span class="keyword">return</span> <span class="number">1</span>;
        }

        <span class="comment">// Recursive case: n * factorial of (n-1)</span>
        <span class="keyword">return</span> <span class="var">n</span> * <span class="func">factorial</span>(<span class="var">n</span> - <span class="number">1</span>);
    }

    <span class="keyword">public</span> <span class="keyword">static</span> <span class="keyword">void</span> <span class="func">main</span>(<span class="class">String</span>[] <span class="var">args</span>) {
        <span class="comment">// Define the number to compute factorial</span>
        <span class="keyword">int</span> <span class="var">n</span> = <span class="number">3</span>;

        <span class="comment">// Call the factorial function and print the result</span>
        <span class="class">System</span>.<span class="func">out</span>.<span class="func">println</span>(<span class="func">factorial</span>(<span class="var">n</span>));
    }
}
</code></pre>

                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python3-code">
                  <button class="copy-btn" data-copy="python3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># Recursive function to calculate factorial of a number</span>
<span class="keyword">def</span> <span class="func">factorial</span>(<span class="var">n</span>):
    <span class="comment"># Base case: factorial of 0 is 1</span>
    <span class="keyword">if</span> <span class="var">n</span> == <span class="number">0</span>:
        <span class="keyword">return</span> <span class="number">1</span>

    <span class="comment"># Recursive case: n * factorial of (n-1)</span>
    <span class="keyword">return</span> <span class="var">n</span> * <span class="func">factorial</span>(<span class="var">n</span> - <span class="number">1</span>)

<span class="comment"># Define the number to compute factorial</span>
<span class="var">n</span> = <span class="number">3</span>

<span class="comment"># Call the factorial function and print the result</span>
<span class="func">print</span>(<span class="func">factorial</span>(<span class="var">n</span>))
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript3-code">
                  <button class="copy-btn" data-copy="javascript3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Recursive function to calculate factorial of a number</span>
<span class="keyword">function</span> <span class="func">factorial</span>(<span class="var">n</span>) {
    <span class="comment">// Base case: factorial of 0 is 1</span>
    <span class="keyword">if</span> (<span class="var">n</span> === <span class="number">0</span>) {
        <span class="keyword">return</span> <span class="number">1</span>;
    }

    <span class="comment">// Recursive case: n * factorial of (n-1)</span>
    <span class="keyword">return</span> <span class="var">n</span> * <span class="func">factorial</span>(<span class="var">n</span> - <span class="number">1</span>);
}

<span class="comment">// Define the number to compute factorial</span>
<span class="keyword">const</span> <span class="var">n</span> = <span class="number">3</span>;

<span class="comment">// Call the factorial function and print the result</span>
<span class="func">console</span>.log(<span class="func">factorial</span>(<span class="var">n</span>));
</code></pre>

                </div>
               <div><strong>Output:</strong> The factorial of 3 is 6</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example3">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example3">
            <strong>Time Complexity: O(N),</strong>  Since the function is being called n times, and for each function, we have only one printable line that takes O(1) time, so the cumulative time complexity would be O(N)
            <div><strong>Space Complexity : O(N)</strong>, In the worst case, the recursion stack space would be full with all the function calls waiting to get completed and that would make it an O(N) recursion stack space.</div>
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