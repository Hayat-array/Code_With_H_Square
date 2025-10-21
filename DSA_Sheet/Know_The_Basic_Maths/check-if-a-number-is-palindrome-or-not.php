<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Check if a number is Palindrome or Not</title>
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
        <h1><strong>Check if a number is Palindrome or Not</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong>Given an integer N, return true if it is a palindrome else return false</p>
        </div>
        <div>
          <p>Note: A palindrome is a number that reads the same backward as forward. For example, 121, 1331, and 4554 are palindromes because they remain the same when their digits are reversed.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 4554
<strong>Output</strong>: Palindrome Number
<strong>Explanation</strong>:The reverse of 4554 is 4554 and therefore it is palindrome number

<strong>Example 2</strong>: <strong>Input:</strong> N = 7789  
<strong>Output:</strong>  Not Palindrome
<strong>Explanation:</strong> The reverse of number 7789 is 9877 and therefore it is not palindrome</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php include("./animation/check-if-a-number-is-palindrome-or-not-video.php")?>
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
                  To check if a number is a palindrome, we can use the algorithm created in <span style="color: red; font:bold">Extract Digits</span> as now we extract the digits of the number to create a reversed number.
                </p>
                 <p>
                    We then compare the reversed number with the original number. If they are equal, the original number is a palindrome. If they are not equal the original number is not a palindrome.
                 </p>
                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ul class="ps-3">
                  <li><strong>Step 1:</strong>Initialise an integer revNum to 0. This variable will store the reverse of the number.</li>
                  <li><strong>Step 2:</strong>Make a duplicate of the original number and store it in an integer dup for later comparison.</li>
                  <li><strong>Step 3:</strong>Run a while loop with the condition n>0 to reverse the number and at each iteration:</li> 
                    <ul class="ps-3">
                      <li>Get the last digit of n by using the modulus operator % with 10 and store it in a temporary variable ld.</li>
                      <li>Update the revNum by multiplying it by 10 and adding the last digit ld.</li>
                      <li>Update n by integer division with 10 effectively removing the last digit.</li>
                    </ul>
                   <li><strong>Step 4:</strong> After the loop, check if the original number dup is equal to the reversed number revNum.</li>
                   <ul>
                    <li>If they are equal, return true indicating the number is a palindrome.</li>
                    <li>If they are not equal, return false indicating that the number is not a palindrome.</li>
                   </ul>
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
<span class="comment">// Include the iostream library</span>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> std;

<span class="comment">// Function to check if a given integer is a palindrome</span>
<span class="type">bool</span> <span class="function">palindrome</span>(<span class="type">int</span> n) {
    <span class="comment">// Initialize a variable to store the reverse of the number</span>
    <span class="type">int</span> revNum = <span class="number">0</span>;

    <span class="comment">// Create a duplicate variable to store the original number</span>
    <span class="type">int</span> dup = n;

    <span class="comment">// Iterate through each digit of the number until it becomes 0</span>
    <span class="keyword">while</span> (n &gt; <span class="number">0</span>) {
        <span class="comment">// Extract the last digit of the number</span>
        <span class="type">int</span> ld = n % <span class="number">10</span>;

        <span class="comment">// Build the reverse number by appending the last digit</span>
        revNum = (revNum * <span class="number">10</span>) + ld;

        <span class="comment">// Remove the last digit from the original number</span>
        n = n / <span class="number">10</span>;
    }

    <span class="comment">// Check if the original number is equal to its reverse</span>
    <span class="keyword">if</span> (dup == revNum) {
        <span class="comment">// If equal, return true indicating it's a palindrome</span>
        <span class="keyword">return</span> <span class="keyword">true</span>;
    } <span class="keyword">else</span> {
        <span class="comment">// If not equal, return false</span>
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
}

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="type">int</span> number = <span class="number">4554</span>;

    <span class="keyword">if</span> (palindrome(number)) {
        cout &lt;&lt; number &lt;&lt; <span class="string">" is a palindrome."</span> &lt;&lt; endl;
    } <span class="keyword">else</span> {
        cout &lt;&lt; number &lt;&lt; <span class="string">" is not a palindrome."</span> &lt;&lt; endl;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}</code></pre>

                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
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
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
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
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span class="comment"># Function to check if a</span>
<span class="comment"># given integer is a palindrome</span>
<span class="keyword">def</span> <span class="function">palindrome</span>(n):
    <span class="comment"># Initialize a variable to</span>
    <span class="comment"># store the reverse of the number</span>
    revNum = <span class="number">0</span>
    <span class="comment"># Create a duplicate variable to</span>
    <span class="comment"># store the original number</span>
    dup = n
    <span class="comment"># Iterate through each digit of</span>
    <span class="comment"># the number until it becomes 0</span>
    <span class="keyword">while</span> n &gt; <span class="number">0</span>:
        <span class="comment"># Extract the last</span>
        <span class="comment"># digit of the number</span>
        ld = n % <span class="number">10</span>
        <span class="comment"># Build the reverse number</span>
        <span class="comment"># by appending the last digit</span>
        revNum = (revNum * <span class="number">10</span>) + ld
        <span class="comment"># Remove the last digit</span>
        <span class="comment"># from the original number</span>
        n = n // <span class="number">10</span>
    <span class="comment"># Check if the original number</span>
    <span class="comment"># is equal to its reverse</span>
    <span class="keyword">if</span> dup == revNum:
        <span class="comment"># If equal, return True</span>
        <span class="comment"># indicating it's a palindrome</span>
        <span class="keyword">return</span> <span class="keyword">True</span>
    <span class="keyword">else</span>:
        <span class="comment"># If not equal, return False</span>
        <span class="comment"># indicating it's not a palindrome</span>
        <span class="keyword">return</span> <span class="keyword">False</span>


<span class="keyword">def</span> <span class="function">main</span>():
    number = <span class="number">4554</span>

    <span class="keyword">if</span> <span class="function">palindrome</span>(number):
        <span class="function">print</span>(number, <span class="string">"is a palindrome."</span>)
    <span class="keyword">else</span>:
        <span class="function">print</span>(number, <span class="string">"is not a palindrome."</span>)


<span class="keyword">if</span> __name__ == <span class="string">"__main__"</span>:
    <span class="function">main</span>()
</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
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
                <div ><strong>Output: </strong>4554 is a palindrome.
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