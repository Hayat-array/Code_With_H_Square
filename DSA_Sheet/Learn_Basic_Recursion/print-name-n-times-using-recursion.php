<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Print Name N times using Recursion</title>
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
        <div style="padding:10px;">
        <h1><strong>Print Name N times using Recursion</strong></h1>

        <div class="problem-statement">
          <p><strong>Pre-requisite:</strong>The learner must know how to write a simple function in any language with parameters.</p>
          <p>Now, after understanding the basics of recursion, the recursion tree, and the base case of recursion we can solve some basic problems of recursion which would strengthen our concepts and make us understand how recursion functions at its core.</p>
        </div>
        <h2><strong>Problem:</strong> Print your Name N times using recursion</h2>
        <div>
            <p>Since in this problem, there is no count that can be incremented each time we call a function, how can we keep a track of how many times we have printed the name?</p>
            <p>For this problem, we’re going to be using a function along with parameters in which we can keep track of the number of times we’ve printed something. To understand this problem better, let us see the pseudocode below for this: </p>
        </div>
            <pre style="font-size:18px; background:#ffffff; padding:15px; border:2px solid #e6e6e6; border-radius:5px;">
void func( i, n )
{
   if(i>n) return;
 print(“Raj”);
   f( i+1,N );
}
main()
{
  int n;
  input(n);
  f(1,n);
}
            </pre>
            <div>
                <p>We can clearly see in this pseudocode that we first call the function when the value of i is 1 and then print the name and increment i by 1 inside the parameter of the function and make a call again. But, we know that this will go on forever as i will be increasing continuously after every function call. So, to avoid this we put a base condition that if i exceeds n, then simply terminate the current recursive call and return to the previous call.</p>
                <p>In this way, the text that we want to print would be printed n times and as soon as we exceed the count of printing by n, the function terminates.</p>
            </div>
            <h4>Recursion Tree for the following problem can be represented as follows : </h4>
            <div><img src="../../images/print_recursion.png" width="600px" height="300px" style="border:2px solid #e6e6e6; border-radius:20px;" alt=""></div>
        <div>
        </div>
    </div>

          <!-- Optimal Approach -->
        <div class="code-block">
          <div class="section-header" data-section="brute-force">
            Recursive Approach : 
          </div>
          <div class="section-content hidden" data-content="brute-force">

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
<span style="color:#00ffff;">#include</span>&lt;<span style="color:#ff66cc;">bits/stdc++.h</span>&gt;
<span style="color:#00ffff;">using namespace</span> std;

<span style="color:#00ffff;">void</span> <span style="color:#00ffcc;">func</span>(<span style="color:#00ffff;">int</span> i, <span style="color:#00ffff;">int</span> n){
    
    <span style="color:#00ff00;">// Base Condition.</span>
    <span style="color:#00ffff;">if</span>(i &gt; n) <span style="color:#00ffff;">return</span>;
    cout &lt;&lt; <span style="color:#ffaa00;">"CodeWithH-Square"</span> &lt;&lt; endl;

    <span style="color:#00ff00;">// Function call to print till i increments.</span>
    func(i + <span style="color:#ff66cc;">1</span>, n);
}

<span style="color:#00ffff;">int</span> <span style="color:#00ffcc;">main</span>(){

    <span style="color:#00ff00;">// Let’s take the value of n to be 4.</span>
    <span style="color:#00ffff;">int</span> n = <span style="color:#ff66cc;">4</span>;
    func(<span style="color:#ff66cc;">1</span>, n);
    <span style="color:#00ffff;">return</span> <span style="color:#ff66cc;">0</span>;
}
</code></pre>
                </div>

                <!-- C Code Block -->
                  <div style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" class="code-block-content hidden" id="c-code">
  <button class="copy-btn" data-copy="c">Copy</button>
  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// C: Reverse digits of a number</span>
<span style="color:#00ffff;">#include&lt;stdio.h&gt;</span>

<span style="color:#00ffff;">void</span> <span style="color:#00ffcc;">func</span>(<span style="color:#00ffff;">int</span> i, <span style="color:#00ffff;">int</span> n) {
    <span style="color:#00ff00;">// Base Condition</span>
    <span style="color:#00ffff;">if</span> (i &gt; n) <span style="color:#00ffff;">return</span>;
    <span style="color:#00ffff;">printf</span>(<span style="color:#ffaa00;">"CodeWithH-Square\n"</span>);

    <span style="color:#00ff00;">// Function call to print till i increments.</span>
    func(i + <span style="color:#ff66cc;">1</span>, n);
}

<span style="color:#00ffff;">int</span> <span style="color:#00ffcc;">main</span>() {
    <span style="color:#00ff00;">// Here, let’s take the value of n to be 4.</span>
    <span style="color:#00ffff;">int</span> n = <span style="color:#ff66cc;">4</span>;
    func(<span style="color:#ff66cc;">1</span>, n);
    <span style="color:#00ffff;">return</span> <span style="color:#ff66cc;">0</span>;
}
</code></pre>
</div>
                <!-- Java Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="java-code">
                  <button class="copy-btn" data-copy="java">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;"><span class="comment">// Java: Reverse digits of a number</span>
<span style="color:#00ffff;">class</span> <span style="color:#00ffcc;">Recursion</span> {

    <span style="color:#00ffff;">static void</span> <span style="color:#00ffcc;">func</span>(<span style="color:#00ffff;">int</span> i, <span style="color:#00ffff;">int</span> n){
        
        <span style="color:#00ff00;">// Base Condition.</span>
        <span style="color:#00ffff;">if</span>(i &gt; n) <span style="color:#00ffff;">return</span>;
        System.out.println(<span style="color:#ffaa00;">"CodeWithH-Square"</span>);

        <span style="color:#00ff00;">// Function call to print till i increments.</span>
        func(i + <span style="color:#ff66cc;">1</span>, n);
    }

    <span style="color:#00ffff;">public static void</span> <span style="color:#00ffcc;">main</span>(String[] args) {

        <span style="color:#00ff00;">// Here, let’s take the value of n to be 4.</span>
        <span style="color:#00ffff;">int</span> n = <span style="color:#ff66cc;">4</span>;
        func(<span style="color:#ff66cc;">1</span>, n);
    }
}
</code></pre>
                </div>

                <!-- Python Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;" id="python-code">
                  <button class="copy-btn" data-copy="python">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color:#00ffff;">def</span> <span style="color:#00ffcc;">func</span>(i, n):
    <span style="color:#00ff00;"># Base Condition</span>
    <span style="color:#00ffff;">if</span> i &gt; n:
        <span style="color:#00ffff;">return</span>
    <span style="color:#00ffff;">print</span>(<span style="color:#ffaa00;">"CodeWithH-Square"</span>)

    <span style="color:#00ff00;"># Function call to print till i increments.</span>
    func(i + <span style="color:#ff66cc;">1</span>, n)

<span style="color:#00ff00;"># Here, let’s take the value of n to be 4.</span>
n = <span style="color:#ff66cc;">4</span>
func(<span style="color:#ff66cc;">1</span>, n)
</code></pre>
                </div>
                <!-- Javascript Code Block -->
                <div class="code-block-content hidden" style=" background: linear-gradient(45deg, black, #000000b0); padding:10px; border: 2px; border-radius:5px;"  id="javascript-code">
                  <button class="copy-btn" data-copy="javascript">Copy</button>
                  <pre style="overflow: hidden;"><code style="font-size: inherit; color: rgb(255 255 255); word-break: normal; padding:10px;">
<span style="color:#00ffff;">function</span> <span style="color:#00ffcc;">func</span>(i, n) {
    <span style="color:#00ff00;">// Base Condition</span>
    <span style="color:#00ffff;">if</span> (i &gt; n) <span style="color:#00ffff;">return</span>;
    <span style="color:#00ffff;">console</span>.log(<span style="color:#ffaa00;">"CodeWithH-Square"</span>);

    <span style="color:#00ff00;">// Function call to print till i increments.</span>
    func(i + <span style="color:#ff66cc;">1</span>, n);
}

<span style="color:#00ff00;">// Here, let’s take the value of n to be 4.</span>
<span style="color:#00ffcc;">let</span> n = <span style="color:#ff66cc;">4</span>;
func(<span style="color:#ff66cc;">1</span>, n);
</code></pre>
                </div>
                <div><strong>Output:</strong> <br>CodeWithH-Square <br> CodeWithH-Square <br> CodeWithH-Square <br>CodeWithH-Square</div>
              </div>
            </div>
        <div class="code-block">
          <div class="section-header" data-section="example1">
            Complexity
          </div>
          <div class="section-content hidden" data-content="example1">
            <strong>Time Complexity: O(N) </strong>{ Since the function is being called n times, and for each function, we have only one printable line that takes O(1) time, so the cumulative time complexity would be O(N) }
            <div><strong>Space Complexity: O(N) </strong>{ In the worst case, the recursion stack space would be full with all the function calls waiting to get completed and that would make it an O(N) recursion stack space }.</div>
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