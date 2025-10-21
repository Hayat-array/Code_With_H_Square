<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Count digits in a number</title>
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
        <h1><strong>Count digits in a number</strong></h1>

        <div class="problem-statement">
          <p><strong>Problem Statement:</strong> Given an integer N, return the number of digits in N.</p>
        </div>

        <!-- Example Section -->
        <div class="code-block">
          <div class="section-header" data-section="example">
            Example
          </div>
          <div class="section-content hidden" data-content="example">
            <pre><strong>Examples</strong>
<strong>Example 1:</strong> <strong>Input</strong>: N = 12345
<strong>Output</strong>: 5
<strong>Explanation</strong>: The number 12345 has 5 digits.

<strong>Example 2</strong>: <strong>Input:</strong> N = 7789
<strong>Output:</strong> 4
<strong>Explanation:</strong> The number 7789 has 4 digits.</pre>
<div class="code-block">
          <div class="section-header" data-section="example0">
            Animation
          </div>
          <div class="section-content hidden" data-content="example0">
            <?php
              include("./animation/Count_digit.video.php")
            ?>
          </div>
          </div>
          
        </div>
  </div>
        <div class="disclaimer">
          <span>Disclaimer:</span> <span>Don't jump directly to the solution, try it out yourself first.</span>
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
                  To count the number of digits in a number, we can use a simple algorithm where we repeatedly divide the number by 10 and count how many times we can do this until the number becomes zero.
                </p>

                <h6 class="fw-bold mt-3">Algorithm:</h6>
                <ol class="ps-3">
                  <li>Initialize a counter to store the number of digits.</li>
                  <li>
                    While N is greater than 0, execute the following:
                    <ul class="ps-3">
                      <li>Increment the counter by 1</li>
                      <li>Update N by removing its last digit by dividing it by 10</li>
                    </ul>
                  </li>
                  <li>After exiting the while loop, return the counter as the number of digits.</li>
                </ol>

                <div class="code-example-box">
<pre class="mb-0">// Example in JavaScript
function countDigits(N) {
  let count = 0;
  while (N > 0) {
    count++;
    N = Math.floor(N / 10);
  }
  return count;
}</pre>
                </div>
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
                <div class="code-block-content" id="cpp-code">
                  <button class="copy-btn" data-copy="cpp">Copy</button>
                  <pre><code>// C++: Count digits in an integer
#include &lt;iostream&gt;
#include &lt;cmath&gt;
using namespace std;

int countDigits(int n) {
    if (n == 0) return 1;      // Handle 0
    n = abs(n);                // Handle negatives
    int count = 0;
    while (n &gt; 0) {
        count++;
        n /= 10;
    }
    return count;
}

// Bonus: Logarithmic method
int countDigitsLog(int n) {
    if (n == 0) return 1;
    return floor(log10(abs(n))) + 1;
}

int main() {
    int N = -329823;
    cout &lt;&lt; "Digits in " &lt;&lt; N &lt;&lt; " = " &lt;&lt; countDigits(N) &lt;&lt; endl;
    cout &lt;&lt; "Using log: " &lt;&lt; countDigitsLog(N) &lt;&lt; endl;
    return 0;
}</code></pre>
                </div>

                <!-- C Code Block -->
                <div class="code-block-content hidden" id="c-code">
                  <button class="copy-btn" data-copy="c">Copy</button>
                  <pre><code>// C: Count digits in an integer
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int countDigits(int n) {
    if (n == 0) return 1;
    n = abs(n);
    int count = 0;
    while (n &gt; 0) {
        count++;
        n /= 10;
    }
    return count;
}

int main() {
    int N = -329823;
    printf("Digits in %d = %d\n", N, countDigits(N));
    return 0;
}</code></pre>
                </div>

                <!-- Java Code Block -->
                <div class="code-block-content hidden" id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre><code>// Java: Count digits in an integer
public class Main {
    public static int countDigits(int n) {
        if (n == 0) return 1;
        n = Math.abs(n);
        int count = 0;
        while (n &gt; 0) {
            count++;
            n /= 10;
        }
        return count;
    }

    // Bonus: String conversion
    public static int countDigitsStr(int n) {
        return String.valueOf(Math.abs(n)).length();
    }

    public static void main(String[] args) {
        int N = -329823;
        System.out.println("Digits in " + N + " = " + countDigits(N));
        System.out.println("Using string: " + countDigitsStr(N));
    }
}</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre><code># Python: Count digits in an integer
def count_digits(n):
    if n == 0:
        return 1
    n = abs(n)
    count = 0
    while n &gt; 0:
        count += 1
        n //= 10
    return count

# Bonus: String conversion
def count_digits_str(n):
    return len(str(abs(n)))

N = -329823
print(f"Digits in {N} = {count_digits(N)}")
print(f"Using string: {count_digits_str(N)}")</code></pre>
                </div>

                <!-- JavaScript Code Block -->
                <div class="code-block-content hidden" id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre><code>// JavaScript: Count digits in an integer
function countDigits(n) {
    if (n === 0) return 1;
    n = Math.abs(n);
    let count = 0;
    while (n &gt; 0) {
        count++;
        n = Math.floor(n / 10);
    }
    return count;
}

// Bonus: String conversion
function countDigitsStr(n) {
    return Math.abs(n).toString().length;
}

let N = -329823;
console.log("Digits in", N, "=", countDigits(N));
console.log("Using string:", countDigitsStr(N));</code></pre>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Optimal Approach -->
        <div class="code-block">
          <div class="section-header" data-section="optimal">
            Optimal Approach
          </div>
          <div class="section-content hidden" data-content="optimal">
            <pre><strong>Logarithmic Approach (Optimal)</strong>
We can calculate the number of digits in a number using logarithms, which is more efficient:

<strong>Mathematical Formula:</strong> Number of digits in N = floor(log10(N)) + 1

This is because:
log10(10) = 1 (1 digit)
log10(100) = 2 (2 digits)
log10(1000) = 3 (3 digits) And so on...

The formula works because the log10 of a number gives us the power to which 10 must be raised to get that number. The floor function gives us the integer part, and we add 1 because indexing starts from 0.</pre>

            <!-- Code Container -->
            <div class="code-container">
              <div class="code-header">
                <div class="code-title">
                  <span>Optimal Solution in C++</span>
                </div>
                <div class="code-actions">
                  <button class="btn" data-toggle="optimal-code">
                    <span class="toggle-text">Hide Code</span>
                  </button>
                  <button class="btn btn-copy" data-copy="optimal">
                    <span>Copy Code</span>
                  </button>
                </div>
              </div>
              <div class="code-content" id="optimal-code-content">
                <pre><code><span class="preprocessor">#include &lt;iostream&gt;</span>
<span class="preprocessor">#include &lt;cmath&gt;</span>
<span class="keyword">using namespace</span> <span class="variable">std</span>;

<span class="comment">// Optimal function to count digits using logarithm</span>
<span class="type">int</span> <span class="function">countDigitsOptimal</span>(<span class="type">int</span> <span class="variable">n</span>) {
    <span class="comment">// Handle edge case of n = 0</span>
    <span class="keyword">if</span> (<span class="variable">n</span> == <span class="number">0</span>) {
        <span class="keyword">return</span> <span class="number">1</span>;
    }

    <span class="comment">// For negative numbers, use absolute value</span>
    <span class="keyword">if</span> (<span class="variable">n</span> < <span class="number">0</span>) {
        <span class="variable">n</span> = -<span class="variable">n</span>;
    }

    <span class="comment">// Using log10 to find the number of digits</span>
    <span class="keyword">return</span> <span class="function">floor</span>(<span class="function">log10</span>(<span class="variable">n</span>)) + <span class="number">1</span>;
}

<span class="type">int</span> <span class="function">main</span>() {
    <span class="type">int</span> <span class="variable">N</span> = <span class="number">329823</span>;
    <span class="variable">cout</span> << <span class="string">"N: "</span> << <span class="variable">N</span> << <span class="variable">endl</span>;
    <span class="variable">cout</span> << <span class="string">"Number of Digits (Logarithmic): "</span> << <span class="function">countDigitsOptimal</span>(<span class="variable">N</span>) << <span class="variable">endl</span>;

    <span class="comment">// Test with large numbers</span>
    <span class="type">int</span> <span class="variable">largeN</span> = <span class="number">1000000000</span>;
    <span class="variable">cout</span> << <span class="string">"\nLarge number: "</span> << <span class="variable">largeN</span> << <span class="variable">endl</span>;
    <span class="variable">cout</span> << <span class="string">"Number of Digits (Logarithmic): "</span> << <span class="function">countDigitsOptimal</span>(<span class="variable">largeN</span>) << <span class="variable">endl</span>;

    <span class="keyword">return</span> <span class="number">0</span>;
}</code></pre>
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