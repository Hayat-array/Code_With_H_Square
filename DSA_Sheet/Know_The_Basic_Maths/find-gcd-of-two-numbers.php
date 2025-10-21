<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find GCD of two numbers</title>
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

    .code-content, .code-content2, .code-content3  {
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
    .code-switcher-container,.code-switcher-container1, .code-switcher-container2, .code-switcher-container3{
      margin-top: 30px;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .code-switcher-actions,.code-switcher-actions1,.code-switcher-actions2,.code-switcher-actions3 {
      background-color: #f3f4f6;
      padding: 0.5rem;
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .code-switcher-btn,.code-switcher-btn1,.code-switcher-btn2,.code-switcher-btn3 {
      padding: 0.3rem 0.75rem;
      border-radius: 0.375rem;
      background-color: #e5e7eb;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s;
      border: none;
    }

    .code-switcher-btn:hover ,.code-switcher-btn1:hover,.code-switcher-btn2:hover,.code-switcher-btn3:hover{
      background-color: #d1d5db;
    }

    .code-switcher-btn.active ,.code-switcher-btn.active1,.code-switcher-btn.active2,.code-switcher-btn.active3{
      background-color: #3b82f6;
      color: white;
    }

    .code-switcher-content,.code-switcher-content1,.code-switcher-content2,.code-switcher-content3 {
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
      background: #fff;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.2s;
    }

    .copy-btn:hover {
      background: #f0f0f0;
    }

    /* Algorithm box styling */
    .algorithm-toggle-btn,.algorithm-toggle-btn1, .algorithm-toggle-btn2, .algorithm-toggle-btn3 {
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

    .algorithm-toggle-btn:hover,.algorithm-toggle-btn1:hover, .algorithm-toggle-btn2:hover, .algorithm-toggle-btn3:hover {
      background: #0056b3;
    }

    .algorithm-content, .algorithm-content1,.algorithm-content2, .algorithm-content3 {
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
        <h1><strong>Find GCD of two numbers</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong>Given two integers N1 and N2, find their greatest common divisor.</p>
        </div>
        <div>
          <p>The Greatest Common Divisor of any two integers is the largest number that divides both integers.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N1 = 9, N2 = 12
<strong>Output</strong>: 3
<strong>Explanation</strong>:Factors of 9: 1, 3 and 9
<div>Factors of 12: 1, 2, 3, 4, 6, 12</div>
<strong>Common Factors:</strong> 1, 3 out of which 3 is the greatest hence it is the GCD.
<strong>Example 2</strong>: <strong>Input:</strong> N1 = 20, N2 = 15 
<strong>Output:</strong>5    
<strong>Explanation:</strong> Factors of 20: 1, 2, 4, 5
Factors of 15: 1, 3, 5
Common Factors: 1, 5 out of which 5 is the greatest hence it is the GCD.
                
</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation 1
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("./animation/find-gcd-of-two-number-video.php")
            ?>
          </div>
        </div>
<div class="code-block">
          <div class="section-header" data-section="example-1">
            Animation 2
          </div>
          <div class="section-content hidden" data-content="example-1">
            <?php
              include("./animation/find-gcd-of-two-number-video2.php")
            ?>
          </div>
        </div>
  </div>
          </div>

        <div class="disclaimer">
          <span>Disclaimer:</span> <span>Don't jump directly to the solution, try it out yourself first.</span>
        </div>


           <!-- Breute Approach -->
        <div class="code-block">
          <div class="section-header" data-section="brute-force">
            Brute Approach
          </div>
          <div class="section-content hidden" data-content="brute-force">
            <div class="card shadow-sm">
              <button class="algorithm-toggle-btn" data-toggle="algorithm">
                <span>Algorithm / Intuition</span>
                <span class="toggle-icon">▼</span>
              </button>

              <div class="algorithm-content hidden" id="algorithm-content">
                <strong>Algorithm / Intuition</strong>
                <p class="fw-medium">
                  The GCD of two numbers is the largest number that divides both of them without leaving a remainder. We iterate through all numbers from 1 up to the minimum of the two input numbers, checking if each number is a common factor of both input numbers.
                </p>
                 <p>
                   If a number is a common factor, we update our gcd variable to that number. This process continues until we have iterated through all possible common factors. Finally, we return the gcd variable, which will hold the greatest common divisor of the two input numbers.
                 </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong> Initialise a variable gcd to 1. This variable will store the greatest common divisor of the input numbers n1 and n2.</li>
                  <li><strong>Step 2:</strong>Iterate from 1 to the minimum of n1 and n2.</li>
                  <ul>
                    <li>We start from 1 because the GCD of any two numbers is at least 1, and it cannot be greater than the smaller of the two numbers.</li>
                  </ul>
                  <li><strong>Step 3:</strong> At each iteration, if i is a common factor of both n1 and n2 update the gcd variable to i. We keep updating gcd as long as we find common factors.</li> 
                   <li><strong>Step 4:</strong> After the iteration, the gcd variable will store the greatest common divisor of n1 and n2. Return this value as the output of the function.</li>
                </ul>

                
              </div>
            </div>

            <div class="code-switcher-container1 mt-4">
              <div class="section-header" data-section="code1">
                Code Implementation
              </div>
              
              <div class="code-switcher-content1 hidden" data-content="code1">
                <div class="code-switcher-actions1">
                  <button class="code-switcher-btn1 active1" data-lang="cpp1">C++</button>
                  <button class="code-switcher-btn1" data-lang="c1">C</button>
                  <button class="code-switcher-btn1" data-lang="java1">Java</button>
                  <button class="code-switcher-btn1" data-lang="python1"1>Python</button>
                  <button class="code-switcher-btn1" data-lang="javascript1">JavaScript</button>
                </div>

                <!-- C++ Code Block -->
                <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"class="code-block-content;" id="cpp1-code">
                  <button class="copy-btn" data-copy="cpp1">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">#include</span> <span class="string">&lt;algorithm&gt;</span>

<span class="keyword">using</span> <span class="keyword">namespace</span> std;

<span class="keyword">int</span> <span class="function">findGcd</span>(<span class="keyword">int</span> n1, <span class="keyword">int</span> n2) {
    <span class="comment">// Initialize gcd to 1</span>
    <span class="keyword">int</span> gcd = <span class="number">1</span>;

    <span class="comment">// Iterate from 1 up to</span>
    <span class="comment">// the minimum of n1 and n2</span>
    <span class="keyword">for</span>(<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= min(n1, n2); i++) {
        <span class="comment">// Check if i is a common</span>
        <span class="comment">// factor of both n1 and n2</span>
        <span class="keyword">if</span>(n1 % i == <span class="number">0</span> &amp;&amp; n2 % i == <span class="number">0</span>) {
            <span class="comment">// Update gcd to the</span>
            <span class="comment">// current common factor i</span>
            gcd = i;
        }
    }

    <span class="comment">// Return the greatest</span>
    <span class="comment">// common divisor (gcd)</span>
    <span class="keyword">return</span> gcd;
}

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;

    <span class="comment">// Find the GCD of n1 and n2</span>
    <span class="keyword">int</span> gcd = findGcd(n1, n2);

    cout &lt;&lt; <span class="string">"GCD of "</span> &lt;&lt; n1 &lt;&lt; <span class="string">" and "</span> &lt;&lt; n2 &lt;&lt; <span class="string">" is: "</span> &lt;&lt; gcd &lt;&lt; endl;

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c1-code">
  <button class="copy-btn" data-copy="c1">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">#include</span><span class="string">&lt;stdio.h&gt;</span>

<span class="comment">// Function to find the GCD of two numbers</span>
<span class="keyword">int</span> <span class="function">findGcd</span>(<span class="keyword">int</span> n1, <span class="keyword">int</span> n2) {
    <span class="comment">// Initialize gcd to 1</span>
    <span class="keyword">int</span> gcd = <span class="number">1</span>;

    <span class="comment">// Iterate from 1 to the minimum of n1 and n2</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> i = <span class="number">1</span>; i &lt;= (n1 &lt; n2 ? n1 : n2); i++) {
        <span class="comment">// Check if i is a common factor</span>
        <span class="keyword">if</span> (n1 % i == <span class="number">0</span> &amp;&amp; n2 % i == <span class="number">0</span>) {
            gcd = i;
        }
    }

    <span class="comment">// Return the greatest common divisor</span>
    <span class="keyword">return</span> gcd;
}

<span class="comment">// Main function</span>
<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;

    <span class="comment">// Find GCD</span>
    <span class="keyword">int</span> gcd = <span class="function">findGcd</span>(n1, n2);

    <span class="comment">// Print result</span>
    printf(<span class="string">"GCD of %d and %d is: %d\n"</span>, n1, n2, gcd);

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java1-code">
                  <button class="copy-btn" data-copy="java1">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public</span> <span class="keyword">class</span> <span class="type">Main</span> {
    <span class="keyword">public static</span> <span class="type">int</span> <span class="function">findGcd</span>(<span class="type">int</span> n1, <span class="type">int</span> n2) {
        <span class="comment">// Initialize gcd to 1</span>
        <span class="type">int</span> gcd = <span class="number">1</span>;

        <span class="comment">// Iterate from 1 up to</span>
        <span class="comment">// the minimum of n1 and n2</span>
        <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">1</span>; i &lt;= <span class="type">Math</span>.min(n1, n2); i++) {
            <span class="comment">// Check if i is a common</span>
            <span class="comment">// factor of both n1 and n2</span>
            <span class="keyword">if</span> (n1 % i == <span class="number">0</span> &amp;&amp; n2 % i == <span class="number">0</span>) {
                <span class="comment">// Update gcd to the</span>
                <span class="comment">// current common factor i</span>
                gcd = i;
            }
        }

        <span class="comment">// Return the greatest</span>
        <span class="comment">// common divisor (gcd)</span>
        <span class="keyword">return</span> gcd;
    }

    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="type">String</span>[] args) {
        <span class="type">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;

        <span class="comment">// Find the GCD of n1 and n2</span>
        <span class="type">int</span> gcd = <span class="function">findGcd</span>(n1, n2);

        <span class="type">System</span>.out.println(<span class="string">"GCD of "</span> + n1 + <span class="string">" and "</span> + n2 + <span class="string">" is: "</span> + gcd);
    }
}
    </code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python1-code">
                  <button class="copy-btn" data-copy="python1">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">def</span> <span class="func">find_gcd</span>(n1, n2):
    <span class="comment"># Initialize gcd to 1</span>
    gcd = <span class="number">1</span>

    <span class="comment"># Iterate from 1 up to</span>
    <span class="comment"># the minimum of n1 and n2</span>
    <span class="keyword">for</span> i <span class="keyword">in</span> <span class="func">range</span>(<span class="number">1</span>, <span class="func">min</span>(n1, n2) + <span class="number">1</span>):
        <span class="comment"># Check if i is a common</span>
        <span class="comment"># factor of both n1 and n2</span>
        <span class="keyword">if</span> n1 % i == <span class="number">0</span> <span class="keyword">and</span> n2 % i == <span class="number">0</span>:
            <span class="comment"># Update gcd to the</span>
            <span class="comment"># current common factor i</span>
            gcd = i

    <span class="comment"># Return the greatest</span>
    <span class="comment"># common divisor (gcd)</span>
    <span class="keyword">return</span> gcd


<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    n1, n2 = <span class="number">20</span>, <span class="number">15</span>

    <span class="comment"># Find the GCD of n1 and n2</span>
    gcd = <span class="func">find_gcd</span>(n1, n2)

    <span class="func">print</span>(<span class="string">"GCD of"</span>, n1, <span class="string">"and"</span>, n2, <span class="string">"is:"</span>, gcd)
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript1-code">
                  <button class="copy-btn" data-copy="javascript1">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">function</span> findGcd(n1, n2) {
    <span class="comment">// Initialize gcd to 1</span>
    <span class="keyword">let</span> gcd = <span class="number">1</span>;

    <span class="comment">// Iterate from 1 up to</span>
    <span class="comment">// the minimum of n1 and n2</span>
    <span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i &lt;= Math.min(n1, n2); i++) {
        <span class="comment">// Check if i is a common</span>
        <span class="comment">// factor of both n1 and n2</span>
        <span class="keyword">if</span> (n1 % i === <span class="number">0</span> &amp;&amp; n2 % i === <span class="number">0</span>) {
            <span class="comment">// Update gcd to the</span>
            <span class="comment">// current common factor i</span>
            gcd = i;
        }
    }

    <span class="comment">// Return the greatest</span>
    <span class="comment">// common divisor (gcd)</span>
    <span class="keyword">return</span> gcd;
}

<span class="comment">// Main function</span>
<span class="keyword">function</span> main() {
    <span class="keyword">let</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;
    
    <span class="comment">// Find the GCD of n1 and n2</span>
    <span class="keyword">let</span> gcd = findGcd(n1, n2);

    console.log(<span class="string">"GCD of "</span> + n1 + <span class="string">" and "</span> + n2 + <span class="string">" is: "</span> + gcd);
}

<span class="comment">// Call the main function</span>
main();
</code></pre>

                </div>
                <div ><strong>Output: </strong>GCD of 20 and 15 is: 5
</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(min(N1, N2))</strong> where N1 and N2 is the input number. The algorithm iterates from 1 to the minimum of N1 and N2 and each iteration checks whether both the numbers are divisible by the current number (constant time operations).
            <!-- <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log10N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul> -->
            <div><strong>Space Complexity: O(1)</strong> as the space complexity remains constant and independent of the input size. Only a fixed amount of memory is required to store the integer variables.</div>
          </div>
        </div>
        </div>
        </div>


           <!-- Better Approach -->
        <div class="code-block">
          <div class="section-header" data-section="solution">
            Better Approach
          </div>
          <div class="section-content hidden" data-content="solution">
            <div class="card shadow-sm">
              <button class="algorithm-toggle-btn2" data-toggle="algorithm2">
                <span>Algorithm / Intuition</span>
                <span class="toggle-icon2">▼</span>
              </button>

              <div class="algorithm-content2 hidden" id="algorithm-content2">
                <strong>Algorithm / Intuition</strong>
                <p class="fw-medium">
                  We can optimise the time complexity of the previous approach. In the worst case, the loop iterates from 1 up to the minimum of N1 and N2. This could potentially result in a large number of iterations, especially when one input number is significantly larger than the other.
                </p>
                 <p>
                   If we iterate from the minimum of N1 and N2 down to 1, we reduce the number of iterations because we start from the potentially largest common factor and work downwards.
                 </p>
                 <p>
                    The time complexity of this approach remains O(min(N1, N2)) but in practice, it will execute fewer iterations on average.
                 </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong>Iterate from the minimum of n1 and n2 because the greatest common divisor of two numbers cannot exceed the smaller number.</li>
                  <li><strong>Step 2:</strong>For each i in the iteration, we check if it is a common factor of both n1 and n2.</li>
                  <ul>
                    <li>If a common factor i is found, we return it as the gcd as we are iterating from the largest potential gcd to 1, the first common factor we encounter will be the greatest common divisor.</li>
                  </ul>
                  <li><strong>Step 3:</strong> If the loop completes without finding any common factors we return 1. This is because 1 is always a divisor of any number any number hence is also the GCD of any pair of numbers where no other common factors exist.</li> 
                </ul>

                
              </div>
            </div>

            <div class="code-switcher-container mt-4">
              <div class="section-header" data-section="code2">
                Code Implementation
              </div>
              
              <div class="code-switcher-content2 hidden" data-content="code2">
                <div class="code-switcher-actions2">
                  <button class="code-switcher-btn2 active2" data-lang="cpp2">C++</button>
                  <button class="code-switcher-btn2" data-lang="c2">C</button>
                  <button class="code-switcher-btn2" data-lang="java2">Java</button>
                  <button class="code-switcher-btn2" data-lang="python2">Python</button>
                  <button class="code-switcher-btn2" data-lang="javascript2">JavaScript</button>
                </div>

                <!-- C++ Code Block -->
                <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"class="code-block-content;" id="cpp2-code">
                  <button class="copy-btn" data-copy="cpp2">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">#include</span> <span class="string">&lt;algorithm&gt;</span>

<span class="keyword">using namespace</span> std;

<span class="type">int</span> <span class="function">findGcd</span>(<span class="type">int</span> n1, <span class="type">int</span> n2) {
    <span class="comment">// Iterate from the minimum of</span>
    <span class="comment">// n1 and n2 down to 1</span>
    <span class="comment">// Start from the minimum of n1 and n2</span>
    <span class="comment">// because the GCD cannot</span>
    <span class="comment">// exceed the smaller number</span>
    
    <span class="keyword">for</span>(<span class="type">int</span> i = <span class="function">min</span>(n1, n2); i &gt; 0; i--) {
        <span class="comment">// Check if i is a common</span>
        <span class="comment">// factor of both n1 and n2</span>
        <span class="keyword">if</span>(n1 % i == 0 &amp;&amp; n2 % i == 0) {
            <span class="comment">// If i is a common factor,</span>
            <span class="comment">// return it as the GCD</span>
            <span class="keyword">return</span> i;
        }
    }
    <span class="comment">// If no common factors are found,</span>
    <span class="comment">// return 1 (as 1 is always a</span>
    <span class="comment">// divisor of any number)</span>
    <span class="keyword">return</span> 1;
}

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="type">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;
    
    <span class="comment">// Find the GCD of n1 and n2</span>
    <span class="type">int</span> gcd = <span class="function">findGcd</span>(n1, n2);

    <span class="function">cout</span> &lt;&lt; <span class="string">"GCD of "</span> &lt;&lt; n1 &lt;&lt; <span class="string">" and "</span> &lt;&lt; n2 &lt;&lt; <span class="string">" is: "</span> &lt;&lt; gcd &lt;&lt; endl;

    <span class="keyword">return</span> 0;
}
</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c2-code">
  <button class="copy-btn" data-copy="c2">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// C: Reverse digits of a number</span>
<span class="comment">// Function to check if a</span>
<span class="comment">// given integer is a palindrome</span>
<span class="datatype">int</span> <span class="function">palindrome</span>(<span class="datatype">int</span> n) {
    <span class="comment">// Initialize a variable to</span>
    <span class="comment">// store the reverse of the number</span>
    <span class="datatype">int</span> revNum = <span class="number">0</span>;
    <span class="comment">// Create a duplicate variable to</span>
    <span class="comment">// store the original number</span>
    <span class="datatype">int</span> dup = n;
    <span class="comment">// Iterate through each digit of</span>
    <span class="comment">// the number until it becomes 0</span>
    <span class="keyword">while</span> (n > <span class="number">0</span>) {
        <span class="comment">// Extract the last</span>
        <span class="comment">// digit of the number</span>
        <span class="datatype">int</span> ld = n % <span class="number">10</span>;
        <span class="comment">// Build the reverse number</span>
        <span class="comment">// by appending the last digit</span>
        revNum = (revNum * <span class="number">10</span>) + ld;
        <span class="comment">// Remove the last digit</span>
        <span class="comment">// from the original number</span>
        n = n / <span class="number">10</span>;
    }
    <span class="comment">// Check if the original number</span>
    <span class="comment">// is equal to its reverse</span>
    <span class="keyword">if</span> (dup == revNum) {
        <span class="comment">// If equal, return 1</span>
        <span class="comment">// indicating it's a palindrome</span>
        <span class="keyword">return</span> <span class="number">1</span>;
    } <span class="keyword">else</span> {
        <span class="comment">// If not equal, return 0</span>
        <span class="comment">// indicating it's not a palindrome</span>
        <span class="keyword">return</span> <span class="number">0</span>;
    }
}

<span class="datatype">int</span> <span class="function">main</span>() {
    <span class="datatype">int</span> number = <span class="number">4554</span>;

    <span class="keyword">if</span> (palindrome(number)) {
        printf(<span class="string">"%d is a palindrome.\n"</span>, number);
    } <span class="keyword">else</span> {
        printf(<span class="string">"%d is not a palindrome.\n"</span>, number);
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java2-code">
                  <button class="copy-btn" data-copy="java2">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// Java: Reverse digits of a number</span>
<span class="keyword">public</span> <span class="keyword">class</span> <span class="class-name">Main</span> {

    <span class="comment">// Function to check if a</span>
    <span class="comment">// given integer is a palindrome</span>
    <span class="keyword">static</span> <span class="keyword">boolean</span> <span class="function">palindrome</span>(<span class="keyword">int</span> n) {
        <span class="comment">// Initialize a variable to</span>
        <span class="comment">// store the reverse of the number</span>
        <span class="keyword">int</span> revNum = <span class="number">0</span>;
        <span class="comment">// Create a duplicate variable to</span>
        <span class="comment">// store the original number</span>
        <span class="keyword">int</span> dup = n;
        <span class="comment">// Iterate through each digit of</span>
        <span class="comment">// the number until it becomes 0</span>
        <span class="keyword">while</span> (n > <span class="number">0</span>) {
            <span class="comment">// Extract the last</span>
            <span class="comment">// digit of the number</span>
            <span class="keyword">int</span> ld = n % <span class="number">10</span>;
            <span class="comment">// Build the reverse number</span>
            <span class="comment">// by appending the last digit</span>
            revNum = (revNum * <span class="number">10</span>) + ld;
            <span class="comment">// Remove the last digit</span>
            <span class="comment">// from the original number</span>
            n = n / <span class="number">10</span>;
        }
        <span class="comment">// Check if the original number</span>
        <span class="comment">// is equal to its reverse</span>
        <span class="keyword">if</span> (dup == revNum) {
            <span class="comment">// If equal, return true</span>
            <span class="comment">// indicating it's a palindrome</span>
            <span class="keyword">return</span> <span class="keyword">true</span>;
        } <span class="keyword">else</span> {
            <span class="comment">// If not equal, return false</span>
            <span class="comment">// indicating it's not a palindrome</span>
            <span class="keyword">return</span> <span class="keyword">false</span>;
        }
    }

    <span class="keyword">public</span> <span class="keyword">static</span> <span class="keyword">void</span> <span class="function">main</span>(<span class="class-name">String</span>[] args) {
        <span class="keyword">int</span> number = <span class="number">4554</span>;

        <span class="keyword">if</span> (<span class="function">palindrome</span>(number)) {
            <span class="class-name">System</span>.out.<span class="function">println</span>(number + <span class="string">" is a palindrome."</span>);
        } <span class="keyword">else</span> {
            <span class="class-name">System</span>.out.<span class="function">println</span>(number + <span class="string">" is not a palindrome."</span>);
        }
    }
}</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python2-code">
                  <button class="copy-btn" data-copy="python2">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">def</span> <span class="func">find_gcd</span>(n1, n2):
    <span class="comment"># Initialize gcd to 1</span>
    gcd = <span class="number">1</span>

    <span class="comment"># Iterate from 1 up to</span>
    <span class="comment"># the minimum of n1 and n2</span>
    <span class="keyword">for</span> i <span class="keyword">in</span> <span class="func">range</span>(<span class="number">1</span>, <span class="func">min</span>(n1, n2) + <span class="number">1</span>):
        <span class="comment"># Check if i is a common</span>
        <span class="comment"># factor of both n1 and n2</span>
        <span class="keyword">if</span> n1 % i == <span class="number">0</span> <span class="keyword">and</span> n2 % i == <span class="number">0</span>:
            <span class="comment"># Update gcd to the</span>
            <span class="comment"># current common factor i</span>
            gcd = i

    <span class="comment"># Return the greatest</span>
    <span class="comment"># common divisor (gcd)</span>
    <span class="keyword">return</span> gcd


<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    n1, n2 = <span class="number">20</span>, <span class="number">15</span>

    <span class="comment"># Find the GCD of n1 and n2</span>
    gcd = <span class="func">find_gcd</span>(n1, n2)

    <span class="func">print</span>(<span class="string">"GCD of"</span>, n1, <span class="string">"and"</span>, n2, <span class="string">"is:"</span>, gcd)
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript2-code">
                  <button class="copy-btn" data-copy="javascript2">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// JavaScript: Reverse digits of a number</span>
<span class="comment">// Function to check if a</span>
<span class="comment">// given integer is a palindrome</span>
<span class="keyword">function</span> <span class="function">palindrome</span>(<span class="identifier">n</span>) {
    <span class="comment">// Initialize a variable to</span>
    <span class="comment">// store the reverse of the number</span>
    <span class="keyword">let</span> <span class="identifier">revNum</span> = <span class="number">0</span>;
    <span class="comment">// Create a duplicate variable to</span>
    <span class="comment">// store the original number</span>
    <span class="keyword">let</span> <span class="identifier">dup</span> = <span class="identifier">n</span>;
    <span class="comment">// Iterate through each digit of</span>
    <span class="comment">// the number until it becomes 0</span>
    <span class="keyword">while</span> (<span class="identifier">n</span> > <span class="number">0</span>) {
        <span class="comment">// Extract the last</span>
        <span class="comment">// digit of the number</span>
        <span class="keyword">let</span> <span class="identifier">ld</span> = <span class="identifier">n</span> % <span class="number">10</span>;
        <span class="comment">// Build the reverse number</span>
        <span class="comment">// by appending the last digit</span>
        <span class="identifier">revNum</span> = (<span class="identifier">revNum</span> * <span class="number">10</span>) + <span class="identifier">ld</span>;
        <span class="comment">// Remove the last digit</span>
        <span class="comment">// from the original number</span>
        <span class="identifier">n</span> = <span class="identifier">Math</span>.<span class="function">floor</span>(<span class="identifier">n</span> / <span class="number">10</span>);
    }
    <span class="comment">// Check if the original number</span>
    <span class="comment">// is equal to its reverse</span>
    <span class="keyword">if</span> (<span class="identifier">dup</span> == <span class="identifier">revNum</span>) {
        <span class="comment">// If equal, return true</span>
        <span class="comment">// indicating it's a palindrome</span>
        <span class="keyword">return</span> <span class="keyword">true</span>;
    } <span class="keyword">else</span> {
        <span class="comment">// If not equal, return false</span>
        <span class="comment">// indicating it's not a palindrome</span>
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
}

<span class="comment">// Main function</span>
<span class="keyword">function</span> <span class="function">main</span>() {
    <span class="keyword">let</span> <span class="identifier">number</span> = <span class="number">4554</span>;

    <span class="keyword">if</span> (<span class="function">palindrome</span>(<span class="identifier">number</span>)) {
        <span class="identifier">console</span>.<span class="function">log</span>(<span class="identifier">number</span> + <span class="string">" is a palindrome."</span>);
    } <span class="keyword">else</span> {
        <span class="identifier">console</span>.<span class="function">log</span>(<span class="identifier">number</span> + <span class="string">" is not a palindrome."</span>);
    }
}

<span class="comment">// Calling the main function</span>
<span class="function">main</span>();
</code></pre>

                </div>
                <div ><strong>Output: </strong> GCD of 20 and 15 is: 5
</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example2">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example2">
            <strong>Time Complexity: O(min(N1, N2)) </strong>where N1 and N2 is the input number. The algorithm iterates from the minimum of N1 and N2 to 1 and each iteration checks whether both the numbers are divisible by the current number (constant time operations).
            <div><strong>Space Complexity: O(1) </strong>as the space complexity remains constant and independent of the input size. Only a fixed amount of memory is required to store the integer variables.</div>
          </div>
        </div>
        </div>
        </div>


          <!-- Optimal Approach -->
        <div class="code-block">
          <div class="section-header" data-section="optimal-solution">
            Optimal Approach
          </div>
          <div class="section-content hidden" data-content="optimal-solution">
            <div class="card shadow-sm">
              <button class="algorithm-toggle-btn3" data-toggle="algorithm3">
                <span>Algorithm / Intuition</span>
                <span class="toggle-icon3">▼</span>
              </button>

              <div class="algorithm-content3 hidden" id="algorithm-content3">
                <strong>Algorithm:</strong>
                <p class="fw-medium">
                    The Euclidean Algorithm is a method for finding the greatest common divisor of two numbers. It operates on the principle that the GCD of two numbers remains the same even if the smaller number is subtracted from the larger number.
                </p>
                <ul>
                    <p>To find the GCD of n1 and n2 where n1 > n2:</p>
                    <ul>
                      <li>Repeatedly subtract the smaller number from the larger number until one of them becomes 0.</li>
                      <li>Once one of them becomes 0, the other number is the GCD of the original numbers.</li>
                    </ul>
                    <p>Eg, n1 = 20, n2 = 15:</p>
                    <p>gcd(20, 15) = gcd(20-15, 15) = gcd(5, 15)</p>
                    <p>gcd(5, 15) = gcd(15-5, 5) = gcd(10, 5)</p>
                    <p>gcd(10, 5) = gcd(10-5, 5) = gcd(5, 5)</p>
                    <p>gcd(5, 5) = gcd(5-5, 5) = gcd(0, 5)</p>
                    <p>Hence, return 5 as the gcd.</p>
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
<span class="keyword">#include</span> &lt;iostream&gt;
<span class="keyword">#include</span> &lt;algorithm&gt;

<span class="keyword">using namespace</span> std;

<span class="type">int</span> findGcd(<span class="type">int</span> a, <span class="type">int</span> b) {
    <span class="comment">// Continue loop as long as both a and b are greater than 0</span>
    <span class="keyword">while</span>(a &gt; 0 &amp;&amp; b &gt; 0) {
        <span class="comment">// If a is greater than b, subtract b from a and update a</span>
        <span class="keyword">if</span>(a &gt; b) {
            <span class="comment">// Update a to the remainder of a divided by b</span>
            a = a % b;
        } 
        <span class="keyword">else</span> {
            <span class="comment">// Update b to the remainder of b divided by a</span>
            b = b % a;
        }
    }
    <span class="comment">// If a becomes 0, return b as the GCD</span>
    <span class="keyword">if</span>(a == 0) {
        <span class="keyword">return</span> b;
    }
    <span class="comment">// Otherwise return a as the GCD</span>
    <span class="keyword">return</span> a;
}

<span class="type">int</span> main() {
    <span class="type">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;

    <span class="comment">// Find the GCD of n1 and n2</span>
    <span class="type">int</span> gcd = findGcd(n1, n2);

    cout &lt;&lt; <span class="string">"GCD of "</span> &lt;&lt; n1 &lt;&lt; <span class="string">" and "</span> &lt;&lt; n2 &lt;&lt; <span class="string">" is: "</span> &lt;&lt; gcd &lt;&lt; endl;

    <span class="keyword">return</span> 0;
}</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c3-code">
  <button class="copy-btn" data-copy="c3">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// C program to find GCD of two numbers</span>
<span class="keyword">#include</span> <span class="string">&lt;stdio.h&gt;</span>

<span class="keyword">int</span> <span class="func">findGCD</span>(<span class="keyword">int</span> a, <span class="keyword">int</span> b) {
    <span class="comment">// Continue loop while both numbers are not zero</span>
    <span class="keyword">while</span> (a &gt; <span class="number">0</span> &amp;&amp; b &gt; <span class="number">0</span>) {
        <span class="keyword">if</span> (a &gt; b) {
            a = a % b;
        } <span class="keyword">else</span> {
            b = b % a;
        }
    }
    <span class="keyword">return</span> (a == <span class="number">0</span>) ? b : a;
}

<span class="keyword">int</span> <span class="func">main</span>() {
    <span class="keyword">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>, gcd;

    gcd = <span class="func">findGCD</span>(n1, n2);

    <span class="func">printf</span>(<span class="string">"GCD of %d and %d is: %d\n"</span>, n1, n2, gcd);
    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>

</div>
                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java3-code">
                  <button class="copy-btn" data-copy="java3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">public class</span> <span class="type">Main</span> {
    <span class="comment">// Continue loop as long as both a and b are greater than 0</span>
    <span class="keyword">public static int</span> <span class="func">findGcd</span>(<span class="type">int</span> a, <span class="type">int</span> b) {
        <span class="keyword">while</span>(a > 0 && b > 0) {
            <span class="comment">// If a is greater than b</span>
            <span class="keyword">if</span>(a > b) {
                <span class="comment">// Update a to the remainder of a divided by b</span>
                a = a % b;
            } <span class="keyword">else</span> {
                <span class="comment">// Update b to the remainder of b divided by a</span>
                b = b % a;
            }
        }
        <span class="keyword">if</span>(a == 0) {
            <span class="keyword">return</span> b;
        }
        <span class="keyword">return</span> a;
    }

    <span class="keyword">public static void</span> <span class="func">main</span>(<span class="type">String</span>[] args) {
        <span class="type">int</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;
        <span class="comment">// Find the GCD of n1 and n2</span>
        <span class="type">int</span> gcd = <span class="func">findGcd</span>(n1, n2);
        <span class="type">System</span>.out.<span class="func">println</span>(<span class="string">"GCD of "</span> + n1 + <span class="string">" and "</span> + n2 + <span class="string">" is: "</span> + gcd);
    }
}</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python3-code">
                  <button class="copy-btn" data-copy="python3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="keyword">def</span> <span class="function">find_gcd</span>(a, b):
    <span class="comment"># Continue loop as long as both a and b are greater than 0</span>
    <span class="keyword">while</span> a &gt; <span class="number">0</span> <span class="keyword">and</span> b &gt; <span class="number">0</span>:
        <span class="comment"># If a is greater than b</span>
        <span class="keyword">if</span> a &gt; b:
            a = a % b
        <span class="keyword">else</span>:
            b = b % a
    <span class="keyword">if</span> a == <span class="number">0</span>:
        <span class="keyword">return</span> b
    <span class="keyword">return</span> a

<span class="keyword">def</span> <span class="function">main</span>():
    n1 = <span class="number">20</span>
    n2 = <span class="number">15</span>
    gcd = <span class="function">find_gcd</span>(n1, n2)
    <span class="function">print</span>(f<span class="string">"GCD of {n1} and {n2} is: {gcd}"</span>)

<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    <span class="function">main</span>()
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript3-code">
                  <button class="copy-btn" data-copy="javascript3">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// JavaScript: Reverse digits of a number</span>
<span class="keyword">function</span> <span class="function">findGcd</span>(a, b) {
  <span class="comment">// Continue loop as long as both a and b are greater than 0</span>
  <span class="keyword">while</span> (a &gt; <span class="number">0</span> &amp;&amp; b &gt; <span class="number">0</span>) {
    <span class="comment">// If a is greater than b</span>
    <span class="keyword">if</span> (a &gt; b) {
      <span class="comment">// Update a to the remainder of a divided by b</span>
      a = a % b;
    } <span class="keyword">else</span> {
      <span class="comment">// Update b to the remainder of b divided by a</span>
      b = b % a;
    }
  }
  <span class="comment">// Check if a becomes 0, if so, return b as the GCD</span>
  <span class="keyword">if</span> (a === <span class="number">0</span>) {
    <span class="keyword">return</span> b;
  }
  <span class="keyword">return</span> a;
}

<span class="comment">// Set the values of n1 and n2</span>
<span class="keyword">let</span> n1 = <span class="number">20</span>, n2 = <span class="number">15</span>;

<span class="comment">// Find the GCD of n1 and n2</span>
<span class="keyword">let</span> gcd = <span class="function">findGcd</span>(n1, n2);

<span class="comment">// Output the result</span>
<span class="function">console</span>.log(<span class="string">"GCD of"</span>, n1, <span class="string">"and"</span>, n2, <span class="string">"is:"</span>, gcd);
</code></pre>

                </div>
                <div ><strong>Output: </strong>GCD of 20 and 15 is: 5
</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example3">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example3">
            <strong>Time Complexity: O(min(N1, N2)) </strong>where N1 and N2 is the input number. The algorithm iterates from the minimum of N1 and N2 to 1 and each iteration checks whether both the numbers are divisible by the current number (constant time operations).
            <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log10N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul>
            <div><strong>Space Complexity: O(1) </strong> as the space complexity remains constant and independent of the input size. Only a fixed amount of memory is required to store the integer variable.</div>
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
      // Algorithm toggle2 functionality
      function initAlgorithmToggle2() {
        const toggleBtn = document.querySelector('[data-toggle="algorithm2"]');
        const content = document.getElementById('algorithm-content2');
        const icon = toggleBtn ? toggleBtn.querySelector('.toggle-icon2') : null;

        if (toggleBtn && content && icon) {
          toggleBtn.addEventListener('click', function () {
            content.classList.toggle('hidden');
            icon.textContent = content.classList.contains('hidden') ? '▼' : '▲';
            console.log('Toggled algorithm section');
          });
        }
      }
  
      // Algorithm toggle2 functionality
      function initAlgorithmToggle3() {
        const toggleBtn = document.querySelector('[data-toggle="algorithm3"]');
        const content = document.getElementById('algorithm-content3');
        const icon = toggleBtn ? toggleBtn.querySelector('.toggle-icon3') : null;

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
           
            langButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.style.backgroundColor = '';
                btn.style.color = 'black';
            });
            this.classList.add('active');
            this.style.backgroundColor='#0077ff';
            this.style.color='#ebeff4ff';
            // Hide all code blocks
            codeBlocks.forEach(block => block.classList.add('hidden'));
            // Show selected language block
            const selectedBlock = document.getElementById(lang + '-code');
            if (selectedBlock) {
              selectedBlock.classList.remove('hidden');
              selectedBlock.style.backgroundColor='blue';
              // selectedBlock.style.backgroundColor = "blue";
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
        initAlgorithmToggle2();
        initAlgorithmToggle3();
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