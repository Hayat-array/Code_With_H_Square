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
      background: #fff;
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
        <h1><strong>Check if a number is Armstrong Number or not</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong> Given an integer N, return true it is an Armstrong number otherwise return false.</p>
        </div>
        <div>
          <p>An Amrstrong number is a number that is equal to the sum of its own digits each raised to the power of the number of digits.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 153
<strong>Output</strong>: True
<strong>Explanation</strong>: 1<strong><sup>3</sup></strong>+5<strong><sup>3</sup></strong>+3<strong><sup>3</sup></strong> = 1 + 125 + 27 = 153

<strong>Example 2</strong>: <strong>Input:</strong> N = 371 
<strong>Output: True
<strong>Explanation:</strong> </strong> 3<strong><sup>3</sup></strong>+5<strong><sup>3</sup></strong>+1<strong><sup>3</sup></strong> = 27 + 343 + 1 = 371</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("./animation/check-if-a-number-is-armstrong-number-or-not-video.php")
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
                <strong>Algorithm / Intuition</strong>
                <p class="fw-medium">
                  To check if a number is an armstrong number, we can use the algorithm created in <span style="color:red"><u>Extract Digits.</u></span>
                </p>
                <p>An Armstrong number, also known as a narcissistic number or plenary number, is a number that is equal to the sum of its own digits each raised to the power of the number of digits.</p>
                <div>
                    <p>Number of digits: 3, 153 = 1<strong><sup>3</sup></strong>+5<strong><sup>3</sup></strong>+3<strong><sup>3</sup></strong><br>153 = 1 + 125 + 27 = 153</p>
                </div>
                <div>We extract the digits of the number, raise each digit to the power of the total number of digits in the number. Sum up all the results obtained and check if the sum equals to the original number.</div>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong>Calculate the number of digits in the input number and store it in k. Read more about this Approach here:</li><u><a style="color:red" href="./Count_digit.php">Count Digits</a></u>
                  <li><strong>Step 2:</strong> Initialise a variable sum to 0. This variable will store the sum of each digit raised to the power of number of digits in number.</li> 
                    <ul class="ps-3">
                      <li>Make a copy of the original number to store it in a temporary variable.</li>
                      <!-- <li>Update the reversed number by multiplying it with 10 and adding the last digit. This effectively appends the last digit to the end of the reversed number.</li>
                      <li>Remove the last digit of the number by dividing it by 10.</li> -->
                    </ul>
                   <li><strong>Step 3:</strong> Run a while loop with the condition n>0 and at each iteration:
                        <ul>
                            <li>Get the last digit of n by using the modulus operator % with 10 and store it in a temporary variable ld.</li>
                            <li>Add the digit ld raised to the power of k of the sum.</li>
                            <li>Update n by integer division with 10 effectively removing the last digit.</li>
                        </ul>
                    </li>
                    <li><strong>Step 4:</strong>After the loop, check if the original input number is equal to the sum of the digits raised to the power of the number of digits in the number.
                        <ul>
                            <li>If they are equal, return true indicating the number is an Armstrong number.</li>
                            <li>If they are not equal, return false indicating that the number is not an Armstrong number.</li>
                        </ul>
                    </li>
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
<span class="keyword">#include</span> <span class="datatype">&lt;bits/stdc++.h&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> std;

<span class="comment">// Function to check if a number is an Armstrong number</span>
<span class="datatype">bool</span> <span class="func">isArmstrong</span>(<span class="datatype">int</span> num) {
    <span class="comment">// Calculate the number of digits</span>
    <span class="datatype">int</span> k = to_string(num).length();

    <span class="comment">// Initialize sum</span>
    <span class="datatype">int</span> sum = 0;
    <span class="datatype">int</span> n = num;

    <span class="comment">// Iterate through each digit</span>
    <span class="keyword">while</span>(n > 0){
        <span class="datatype">int</span> ld = n % 10;
        sum += pow(ld, k);
        n = n / 10;
    }

    <span class="keyword">return</span> sum == num ? <span class="keyword">true</span> : <span class="keyword">false</span>;
}

<span class="datatype">int</span> <span class="func">main</span>() {
    <span class="datatype">int</span> number = <span class="number">153</span>;
    
    <span class="keyword">if</span> (isArmstrong(number)) {
        cout << number << <span class="string">" is an Armstrong number."</span> << endl;
    } <span class="keyword">else</span> {
        cout << number << <span class="string">" is not an Armstrong number."</span> << endl;
    }
    <span class="keyword">return</span> 0;
}
</code>
    </pre>
                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// number is an Armstrong number</span>
<span class="keyword">#include</span> <span class="string">&lt;stdio.h&gt;</span>
<span class="keyword">#include</span> <span class="string">&lt;math.h&gt;</span>

<span class="datatype">int</span> <span class="func">isArmstrong</span>(<span class="datatype">int</span> num) {
    <span class="datatype">int</span> n = num;
    <span class="datatype">int</span> sum = <span class="number">0</span>;
    <span class="datatype">int</span> k = <span class="number">0</span>;
    <span class="datatype">int</span> temp = num;

    <span class="comment">// Count number of digits</span>
    <span class="keyword">while</span> (temp != <span class="number">0</span>) {
        k++;
        temp /= <span class="number">10</span>;
    }

    <span class="keyword">while</span> (n > <span class="number">0</span>) {
        <span class="datatype">int</span> ld = n % <span class="number">10</span>;
        sum += <span class="func">pow</span>(ld, k);
        n = n / <span class="number">10</span>;
    }

    <span class="keyword">return</span> sum == num;
}

<span class="datatype">int</span> <span class="func">main</span>() {
    <span class="datatype">int</span> number = <span class="number">153</span>;
    
    <span class="keyword">if</span> (<span class="func">isArmstrong</span>(number)) {
        <span class="func">printf</span>(<span class="string">"%d is an Armstrong number.\n"</span>, number);
    } <span class="keyword">else</span> {
        <span class="func">printf</span>(<span class="string">"%d is not an Armstrong number.\n"</span>, number);
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code>
    </pre>
</div>


                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Import Math package</span>
<span class="keyword">import</span> java.lang.Math;

<span class="keyword">public class</span> <span class="datatype">ArmstrongNumber</span> {
    <span class="comment">// Function to check if a number is an Armstrong number</span>
    <span class="keyword">public static boolean</span> <span class="func">isArmstrong</span>(<span class="datatype">int</span> num) {
        <span class="datatype">int</span> k = String.valueOf(num).length();
        <span class="datatype">int</span> sum = 0;
        <span class="datatype">int</span> n = num;

        <span class="keyword">while</span>(n > 0) {
            <span class="datatype">int</span> ld = n % 10;
            sum += Math.pow(ld, k);
            n = n / 10;
        }

        <span class="keyword">return</span> sum == num ? <span class="keyword">true</span> : <span class="keyword">false</span>;
    }

    <span class="keyword">public static void</span> <span class="func">main</span>(String[] args) {
        <span class="datatype">int</span> number = <span class="number">153</span>;

        <span class="keyword">if</span> (isArmstrong(number)) {
            System.out.println(number + <span class="string">" is an Armstrong number."</span>);
        } <span class="keyword">else</span> {
            System.out.println(number + <span class="string">" is not an Armstrong number."</span>);
        }
    }
}
</code>
    </pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># Function to check if a</span>
<span class="comment"># number is an Armstrong number</span>
<span class="keyword">def</span> <span class="func">isArmstrong</span>(num):
    <span class="comment"># Calculate the number of digits</span>
    k = <span class="func">len</span>(<span class="func">str</span>(num))
    sum = 0
    n = num

    <span class="comment"># Iterate through each digit</span>
    <span class="keyword">while</span> n > 0:
        ld = n % <span class="number">10</span>
        sum += ld ** k
        n = n // <span class="number">10</span>

    <span class="keyword">return</span> sum == num

<span class="keyword">def</span> <span class="func">main</span>():
    number = <span class="number">153</span>
    <span class="keyword">if</span> isArmstrong(number):
        <span class="func">print</span>(number, <span class="string">"is an Armstrong number."</span>)
    <span class="keyword">else</span>:
        <span class="func">print</span>(number, <span class="string">"is not an Armstrong number."</span>)

<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    <span class="func">main</span>()
</code>
    </pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment">// Function to check if a</span>
<span class="comment">// number is an Armstrong number</span>
<span class="keyword">function</span> <span class="func">isArmstrong</span>(num) {
    <span class="comment">// Calculate the number of digits</span>
    <span class="keyword">const</span> k = <span class="func">String</span>(num).length;
    <span class="keyword">let</span> sum = <span class="number">0</span>;
    <span class="keyword">let</span> n = num;

    <span class="keyword">while</span> (n > <span class="number">0</span>) {
        <span class="keyword">const</span> ld = n % <span class="number">10</span>;
        sum += <span class="func">Math.pow</span>(ld, k);
        n = <span class="func">Math.floor</span>(n / <span class="number">10</span>);
    }

    <span class="keyword">return</span> sum === num ? <span class="keyword">true</span> : <span class="keyword">false</span>;
}

<span class="comment">// Main function to test isArmstrong</span>
<span class="keyword">function</span> <span class="func">main</span>() {
    <span class="keyword">const</span> number = <span class="number">153</span>;

    <span class="keyword">if</span> (<span class="func">isArmstrong</span>(number)) {
        <span class="func">console.log</span>(number + <span class="string">" is an Armstrong number."</span>);
    } <span class="keyword">else</span> {
        <span class="func">console.log</span>(number + <span class="string">" is not an Armstrong number."</span>);
    }
}

<span class="comment">// Call the main function</span>
<span class="func">main</span>();
</code>
    </pre>
                </div>
                <div><strong>Output:</strong>153 is an Armstrong number.</div>
              </div>
            </div>
          
          <!-- Time Complexity -->
<div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(log<sub>10</sub>N + 1) </strong>where N is the input number. The time complexity is determined by the number of digits in the input integer N. In the worst case when N is a multiple of 10 the number of digits in N is log<sub>10</sub> N + 1.
            <ul>
              <li>In the while loop we divide N by 10 until it becomes 0 which takes log<sub>10</sub>N iterations.</li>
              <li>In each iteration of the while loop we perform constant time operations like modulus and division and pushing elements into the vector.</li>
            </ul>
            <div><strong>Space Complexity: O(1) </strong>as only a constant amount of additional memory for the reversed number regardless of size of the input number.</div>
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