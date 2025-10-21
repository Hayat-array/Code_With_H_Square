<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loop Statements</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* General container styling */
    .container {
      margin: 3rem auto;
      max-width: 800px;
      color: rgb(206, 232, 63);
    }

    /* C++ language tag styling */
    .cpp {
      font-size: 1.2rem;
      font-weight: bold;
      background-color: #f8f9fa;
      padding: 5px 10px;
      border-radius: 5px;
    }

    /* Card container for the code block */
    .card {
      overflow: auto;
      background-color: #212529;
      border-radius: 10px;
      border: none;
      box-shadow: 0 2px 10px rgba(248, 18, 18, 0.2);
    }

    /* Styling for the code container */
    .code-container {
      position: relative;
      padding: 1rem;
    }

    /* Code block styling */
    .card-body {
      padding: 20px;
      /* background-color: #111; */
      color: rgb(236, 244, 252);
      font-family: "Courier New", Courier, monospace;
      font-size: 1rem;
      border-radius: 10px;
      /* white-space: pre-wrap; */
      word-wrap: break-word;
    }

    /* Button styling */
    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
      color: white;
      border-radius: 5px;
    }

    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }

    /* Syntax highlighting classes */
    .keyword {
      color: rgb(218, 83, 148);
      font-weight: bold;
    }

    .string {
      color: #1e90ff;
    }

    .function {
      color: #00bfff;
    }

    .variable {
      color: #d1ecf1;
    }

    .code-btn {
      width: 70px;
      margin: 5px;
      height: 40px;
      background-color: blue;
    }

    /* For copy button */
    .position-absolute {
      position: absolute;
    }

    .top-0 {
      top: 0;
    }

    .end-0 {
      right: 0;
    }

    .m-2 {
      margin: 0.5rem;
    }

    /* Rounded border */
    .br {
      border-radius: 10px;
    }

    .code-btn-cpp {
      background-color: #17a2b8;
      border-radius: 10px;
    }

    .code-btn-java {
      background-color: #28a745;
      border-radius: 10px;
    }

    .code-btn-cpp:hover {
      background-color: #138496;
    }

    .code-btn-java:hover {
      background-color: #218838;
    }

    .code-btn-container button {
      margin-right: 10px;
    }

    .code-block {
      display: none;
    }

    .code-block.active {
      display: block;
    }

    pre {
      background-color: #1e1e1e;
      border-radius: 5px;
      overflow-x: auto;
      color: white;
    }

    .keyword {
      color: #569cd6;
    }

    .string {
      color: #ce9178;
    }

    .class {
      color: #4ec9b0;
    }

    .function {
      color: #dcdcaa;
    }

    .variable {
      color: #9cdcfe;
    }

    .number {
      color: #b5cea8;
    }

    .comment {
      color: #6a9955;
      font-style: italic;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .code-box {
      background-color: #212529;
      color: #f8f9fa;
      font-family: monospace;
      padding: 1rem;
      border-radius: 0.5rem;
      overflow-x: auto;
      white-space: pre;
      max-width: 60vw;
      margin-left: 14px;
      margin-top: 18px;
    }

    .keyword {
      color: #0dcaf0;
    }

    /* Bootstrap Cyan */
    .string {
      color: #ffc107;
    }

    /* Bootstrap Yellow */
    .function {
      color: #d63384;
    }

    /* Bootstrap Pink */
    .class {
      color: #fd7e14;
    }

    /* Bootstrap Orange */
    .variable {
      color: #198754;
    }

    /* Bootstrap Green */
    .code-content {
      position: relative;
    }

    .copy-btn {
      position: absolute;
      top: 0.5rem;
      left: 0.5rem;
      z-index: 10;
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
        <h2 class="mb-3"><strong>Understanding For Loop</strong></h2>
        <p>In case you are learning DSA, you should definitely check out our free <span style="color:red"><strong><u>A2Z
                DSA Course</u></strong></span> </p>
        <div>
          <ul>
            <p class=""><strong>What is a For Loop and Why is it Used?</strong></p>
            <p>A for loop is a control structure in programming that allows you to execute a specific block
              of code repeatedly. It's especially useful when you want to perform the same task multiple
              times without duplicating your code. Let's break down the essential components of a for
              loop:</p>
            <li><strong>Initialization: </strong> You declare and initialize a variable that serves as a
              counter. This step only happens once at the beginning.</li>
            <li><strong>Condition: </strong>You specify a condition that determines when the loop should
              stop executing.</li>
          </ul>
          <ul>
            <p><strong>Increment/Decrement: </strong>You define how the counter variable changes after each
              iteration.</p>
            <img src="https://static.takeuforward.org/wp/uploads/2023/09/for-loop1.png" alt class="wp-image-12589"
              width="488" height="120">
          </ul>
        </div>
        <h5><b>Code:</b></h5>

        <div class="container my-4">
          <!-- Language Buttons -->
          <div class="code-btn-container mb-3">
            <button class="btn btn-primary" onclick="toggleCode('loopCppBlock')">C++</button>
            <button class="btn btn-warning" onclick="toggleCode('loopJavaBlock')">Java</button>
          </div>

          <!-- C++ Code Block -->
          <div id="loopCppBlock" class="code-block active">
            <div class="card bg-dark text-white">
              <div class="card-body position-relative">
                <button class="btn btn-success position-absolute top-0 end-0 m-2"
                  onclick="copyCode('loopCppCode')">Copy</button>
                <pre id="loopCppCode" class="p-3 mb-0"><code>
                <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;
                
                <span class="keyword">int</span> <span class="function">main</span>() {
                    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = <span class="number">1</span>; <span class="variable">i</span> &lt;= <span class="number">10</span>; <span class="variable">i</span>++) {
                        <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Hey, Striver, this is the "</span> <span class="function"><<</span> <span class="variable">i</span> <span class="function"><<</span> <span class="string">"'th iteration"</span> <span class="function"><<</span> <span class="class">endl</span>;
                    }
                    <span class="keyword">return</span> <span class="number">0</span>;
                }
                </code></pre>
              </div>
            </div>
          </div>

          <!-- Java Code Block -->
          <div id="loopJavaBlock" class="code-block">
            <div class="card bg-dark text-white">
              <div class="card-body position-relative">
                <button class="btn btn-success position-absolute top-0 end-0 m-2"
                  onclick="copyCode('loopJavaCode')">Copy</button>
                <pre id="loopJavaCode" class="p-3 mb-0"><code>
                <span class="keyword">public class</span> <span class="class">Main</span> {
                    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
                        <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = <span class="number">1</span>; <span class="variable">i</span> &lt;= <span class="number">10</span>; <span class="variable">i</span>++) {
                            <span class="class">System.out</span>.println(<span class="string">"Hey, Striver, this is the "</span> + <span class="variable">i</span> + <span class="string">"'th iteration"</span>);
                        }
                    }
                }
                </code></pre>
              </div>
            </div>
          </div>
        </div>

        <!-- Output -->
        <div class="mt-3 mb-3">
          <strong>Output:</strong><br>
          Code With H-Square, this is the 1'th iteration<br>
          Code With H-Square, this is the 2'th iteration<br>
          Code With H-Square, this is the 3'th iteration<br>
          Code With H-Square, this is the 4'th iteration<br>
          Code With H-Square, this is the 5'th iteration<br>
          Code With H-Square, this is the 6'th iteration<br>
          Code With H-Square, this is the 7'th iteration<br>
          Code With H-Square, this is the 8'th iteration<br>
          Code With H-Square, this is the 9'th iteration<br>
          Code With H-Square, this is the 10'th iteration
        </div>
        <div>
          <p>In this example, the loop will run ten times because it starts with i equal to 1, and the
            condition is met until i becomes 11 then the loop breaks. The variable i is incremented by 1 in
            each iteration.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/09/for-loop2-1024x699.png" alt
            class="wp-image-12590 p-3 mb-3" width="512" height="350">
        </div>
        <div class="p-3">
          <img src="https://static.takeuforward.org/wp/uploads/2023/09/forloop-chart-1024x774.png" alt
            class="wp-image-12591 p-3" width="512" height="387">
        </div>
        <div>
          <ul>
            <li><strong>Start: </strong>The process begins at the "start" point, indicating the beginning of
              the loop.</li>
            <li><strong>Initialize counter: </strong> In this step, the loop control variable is
              initialised. This typically involves assigning an initial value to the counter. Usually
              denoted by the variable ‘i’</li>
            <li><strong>Condition check:</strong> The condition for the loop is checked in this stage. If
              the condition is evaluated as "true," the loop continues to execute; otherwise, it
              terminates.</li>
            <li>If the<strong>condition is "true," </strong> the loop proceeds to execute the loop body and
              increment/decrement the counter.</li>
            <li>After completing an<strong>iteration</strong>, the process returns to the "Condition check"
              step to re-evaluate the condition.</li>
            <li>After executing the loop body, the<strong>counter</strong>is incremented or decremented.
              This step is crucial for <strong>controlling the loop's termination.</strong></li>
            <li>The loop continues to execute as long as the<strong>condition remains "true."</strong> Once
              the condition becomes "false," the loop exits.</li>
            <li>After <strong>exit from the loop</strong>, the code below the for-loop is executed and the
              program moves on.</li>
          </ul>

        </div>

        <div>
          <h4><strong>Nested For Loops</strong></h4>
          <ul>
            <p>Just like for loops, you can nest one for loop inside another. This concept becomes
              incredibly useful when you're working with <strong>multi-dimensional data
                structures</strong>like a 2-D Array or need to solve complex problems involving
              <strong>multiple iterations.</strong>
            </p>
            <img src="https://static.takeuforward.org/wp/uploads/2023/09/multidimensional-1024x540.png" alt
              class="wp-image-12592" width="512" height="270">
          </ul>
          <!-- yaha code likhana hai  -->
          <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Loop Example</h5>
              <div class="btn-group">
                <button class="btn btn-outline-primary" onclick="showCode1('cpp')">C++</button>
                <button class="btn btn-outline-success" onclick="showCode1('java')">Java</button>
              </div>
            </div>
            <div class="text-end mt-2 me-3">
              <button id="cppCopyBtn" onclick="copyCode1('cppCode')" class="btn btn-sm btn-primary">Copy</button>
              <button id="javaCopyBtn" onclick="copyCode1('javaCode')"
                class="btn btn-sm btn-success d-none">Copy</button>
            </div>
            <div class="card">
              <!-- C++ Code -->
              <div id="cppContent" class="code-content">
                <pre id="cppCode" class="code-box">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
  <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = 0; <span class="variable">i</span> &lt; 3; <span class="variable">i</span>++) {
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">j</span> = 0; <span class="variable">j</span> &lt; 3; <span class="variable">j</span>++) {
      <span class="class">cout</span> &lt;&lt; <span class="string">"i = "</span> &lt;&lt; <span class="variable">i</span> &lt;&lt; <span class="string">", j = "</span> &lt;&lt; <span class="variable">j</span> &lt;&lt; <span class="string">"\n"</span>;
    }
  }
  <span class="keyword">return</span> 0;
}
</pre>
              </div>

              <!-- Java Code -->
              <div id="javaContent" class="code-content d-none">
                <pre id="javaCode" class="code-box">
<span class="keyword">public class</span> <span class="class">Main</span> {
  <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = 0; <span class="variable">i</span> &lt; 3; <span class="variable">i</span>++) {
      <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">j</span> = 0; <span class="variable">j</span> &lt; 3; <span class="variable">j</span>++) {
        <span class="class">System.out</span>.println(<span class="string">"i = "</span> + <span class="variable">i</span> + <span class="string">", j = "</span> + <span class="variable">j</span>);
      }
    }
  }
}
</pre>
              </div>
            </div>


          </div>
          <div style="display: flex; flex-direction: column;">
            <span> <strong>Output:</strong></span>
            <span style="margin-left:10px;">i = 0, j = 0</span>
            <span style="margin-left:10px;">i = 0, j = 1</span>
            <span style="margin-left:10px;">i = 0, j = 2</span>
            <span style="margin-left:10px;">i = 1, j = 0</span>
            <span style="margin-left:10px;">i = 1, j = 1</span>
            <span style="margin-left:10px;">i = 1, j = 2</span>
            <span style="margin-left:10px;">i = 2, j = 0</span>
            <span style="margin-left:10px;">i = 2, j = 1</span>
            <span style="margin-left:10px;">i = 2, j = 2</span>
          </div>
          <div>
            <p><strong>Conditionals Inside For Loops</strong></p>
            <p>For loops are versatile; you can include <strong> conditional statements</strong> (if, else
              if, else) within them. This allows you to execute <strong>different code blocks based on
                certain conditions during each iteration</strong>.</p>

            <pre style="background-color:white color:black">
    for(int i = 1; i <= 10; i++) {
            if (i % 2 == 0) {
                // Code for even numbers
            } else {
               // Code for odd numbers
            }
        }                               
                            </pre>
          </div>
        </div>
        <div>
          <span><strong>Customising For Loops</strong></span>
          <p>You have flexibility in how you structure your for loop. For instance, you can customise <strong>
              the increment step to achieve specific patterns or iterate a certain number of
              times</strong>.</p>
          <!-- yaha code likhna hai  -->
          <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Loop Increment Example</h5>
              <div class="btn-group">
                <button class="btn btn-outline-primary" onclick="showCode('cpp')">C++</button>
                <button class="btn btn-outline-success" onclick="showCode('java')">Java</button>
              </div>
            </div>

            <div class="card-body">
              <!-- C++ Code -->
              <div id="codeCppWrapper" class="code-content">
                <pre id="codeCpp" class="code-box">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = 1; <span class="variable">i</span> &lt;= 25; <span class="variable">i</span> += 5) {
        <span class="class">cout</span> &lt;&lt; <span class="string">"i = "</span> &lt;&lt; <span class="variable">i</span> &lt;&lt; <span class="string">endl</span>;
    }
    <span class="keyword">return</span> 0;
}
</pre>
                <button onclick="copyCode('codeCpp1')" style="margin-left:54vw; "
                  class="btn btn-sm btn-primary copy-btn">Copy</button>
              </div>

              <!-- Java Code -->
              <div id="codeJavaWrapper" class="code-content d-none">
                <pre id="codeJava" class="code-box">
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">i</span> = 1; <span class="variable">i</span> &lt;= 25; <span class="variable">i</span> += 5) {
            <span class="class">System.out</span>.println(<span class="string">"i = "</span> + <span class="variable">i</span>);
        }
    }
}
</pre>
                <button onclick="copyCode('codeJava1')" style="margin-left:54vw; "
                  class="btn btn-sm btn-success copy-btn">Copy</button>

              </div>
            </div>
          </div>
          <div style="display: flex; flex-direction: column;">
            <span><strong>Output:</strong></span>
            <span style="margin-left: 10px;">i = 1</span>
            <span style="margin-left: 10px;">i = 6</span>
            <span style="margin-left: 10px;">i = 11</span>
            <span style="margin-left: 10px;">i = 16</span>
            <span style="margin-left: 10px;">i = 21</span>

          </div>
        </div>

        <div>
          <p>n this example, i starts at 1 and increases by 5 in each iteration, resulting in five iterations.
          </p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/09/5incloop-1024x733.png" alt class="wp-image-12593"
            width="512" height="367">
        </div>
      </div>
    </div>
  </div>
  <script>

    function toggleCode(activeId) {
      const codeBlocks = document.querySelectorAll('.code-block');
      codeBlocks.forEach(block => {
        if (block.id === activeId) {
          block.classList.add('active');
          block.style.display = 'block';
        } else {
          block.classList.remove('active');
          block.style.display = 'none';
        }
      });
    }
  </script>
  <script>
    function showCode(language) {
      // Toggle code blocks
      document.getElementById('cppContent').classList.add('d-none');
      document.getElementById('javaContent').classList.add('d-none');
      document.getElementById(`${language}Content`).classList.remove('d-none');

      // Toggle copy buttons
      document.getElementById('cppCopyBtn').classList.add('d-none');
      document.getElementById('javaCopyBtn').classList.add('d-none');
      document.getElementById(`${language}CopyBtn`).classList.remove('d-none');
    }

    function copyCode(codeId) {
      const codeElement = document.getElementById(codeId);
      const text = codeElement.innerText;

      navigator.clipboard.writeText(text)
        .then(() => alert("Code copied to clipboard!"))
        .catch(err => console.error("Copy failed:", err));
    }
  </script>

  <script>
    function showCode(lang) {
      document.getElementById('codeCppWrapper').classList.add('d-none');
      document.getElementById('codeJavaWrapper').classList.add('d-none');
      document.getElementById('code' + lang.charAt(0).toUpperCase() + lang.slice(1) + 'Wrapper').classList.remove('d-none');
    }

    function copyCode(id) {
      const text = document.getElementById(id).innerText;
      navigator.clipboard.writeText(text).then(() => {
        alert('Code copied to clipboard!');
      });
    }
  </script>
  <script>
    function showCode1(language) {
      // Toggle code blocks
      document.getElementById('cppContent').classList.add('d-none');
      document.getElementById('javaContent').classList.add('d-none');
      document.getElementById(`${language}Content`).classList.remove('d-none');

      // Toggle copy buttons
      document.getElementById('cppCopyBtn').classList.add('d-none');
      document.getElementById('javaCopyBtn').classList.add('d-none');
      document.getElementById(`${language}CopyBtn`).classList.remove('d-none');
    }

    function copyCode1(codeId) {
      const codeElement = document.getElementById(codeId);
      const text = codeElement.innerText;

      navigator.clipboard.writeText(text)
        .then(() => alert("Code copied to clipboard!"))
        .catch(err => console.error("Copy failed:", err));
    }
  </script>

</body>

</html>