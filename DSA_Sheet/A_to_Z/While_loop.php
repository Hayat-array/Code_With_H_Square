<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    .code-box {
      background-color: #212529;
      margin:15px;
      color: #f8f9fa;
      padding: 1rem;
      border-radius: 10px;
      font-family: 'Courier New', monospace;
      font-size: 0.95rem;
      overflow-x: auto;
    }

    .keyword { color: #0dcaf0; font-weight: bold; }
    .string  { color: #ffc107; }
    .class   { color: #0d6efd; font-weight: bold; }
    .function { color: #20c997; }
    .variable { color: #f8f9fa; }
    .number   { color: #ffc107; }

    .copy-btn {
      position: relative;
      top: -10px;
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
                <h3>
                    <strong>
                        While Loops in Programming
                    </strong>
                </h3>
                <div>
                    <p>
                       In case you are learning DSA, you should definitely check out our free <span style="color:red;"><u>A2Z DSA Course</u></span>
                    </p>
                    <p>
                        In the world of computer programming, loops are invaluable tools that allow us to execute a block of <strong>code repeatedly </strong> until <strong>a certain condition is met</strong>. One such loop is the "while" loop.
                    </p>
                    <p>
                        A while loop follows a simple sequence of steps:
                    </p>
                        <li><strong>Evaluation of Test Expression:</strong> The loop begins by evaluating a test expression.</li>
                        <li><strong>Condition Check: </strong> If the test expression is true, the code inside the loop's body is executed.</li>
                        <li><strong>Re-evaluation:</strong>After executing the code, the test expression is evaluated again.</li>
                    <p>
                        <strong>Continuation or Termination:</strong>This process continues until the test expression becomes false, at which point the while loop terminates.
                    </p>
                        <strong>Syntax</strong>
                        <p style="display:flex; flex-direction: column;" >
                            <span>while (condition) {</span>
                            <span style="margin-left:20px;">// body of the loop</span>
                            <span>}</span>
                        </p>
                        <p>
                           A <strong>while loop </strong>is a control structure in programming that <strong>repeatedly executes a block</strong> of code as long as a specified <strong> condition remains true</strong>. A "while" loop will not execute the code at all if the <strong>initial condition</strong> is false. It relies on the condition being true from the outset for any code execution to occur.
                        </p> 
                        <img src="https://static.takeuforward.org/wp/uploads/2023/09/while-loop.png" alt class="wp-image-12598" width="360" height="248">
                        <p>
                            <ul>
                                While loops can be best illustrated with the practical example of finding the <strong>Factorial</strong>. Factorial of a number 'n' is the product of all positive integers from 1 to 'n'. To compute this using a while loop, we initialise a <strong>factorial variable to 1 </strong>and repeatedly <strong> multiply it by 'n'</strong> while <strong> decrementing 'n' until 'n' becomes 0</strong>. This ensures that we calculate the factorial correctly.
                            </ul>
                        </p>
                        <!-- yaha code likhna hai  -->
                          <div class="container my-5">
                            <div class="card shadow">
    <h3 class="mb-4 text-center">Factorial Code in C++ and Java</h3>

     <!-- Toggle Buttons -->
     <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
      <div>
        <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
        <button class="btn btn-outline-success" onclick="showJava()">Java</button>
      </div>
      <!-- Copy Buttons -->
      <div>
        <button id="copyCppBtn" onclick="copyCode('codeCpp1')" class="btn btn-sm btn-primary copy-btn">Copy</button>
        <button id="copyJavaBtn" onclick="copyCode('codeJava1')" class="btn btn-sm btn-success copy-btn d-none">Copy</button>
      </div>
    </div>

     <!-- C++ Code -->
     <div id="codeCppWrapper" class="code-content">
        <pre id="codeCpp1" class="code-box">
    <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
    <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

    <span class="keyword">int</span> <span class="function">main</span>() {
        <span class="keyword">int</span> <span class="variable">n</span> = <span class="number">5</span>;
        <span class="keyword">int</span> <span class="variable">factorial</span> = <span class="number">1</span>;

       <span class="keyword">while</span> (<span class="variable">n</span> &gt; <span class="number">0</span>) {
            <span class="variable">factorial</span> *= <span class="variable">n</span>;
            <span class="variable">n</span>--;
        }

        <span class="class">cout</span> &lt;&lt; <span class="string">"Factorial of 5 is: "</span> &lt;&lt; <span class="variable">factorial</span> &lt;&lt; <span class="class">endl</span>;

        <span class="keyword">return</span> <span class="number">0</span>;
    }
    </pre>
        <button onclick="copyCode('codeCpp1')" style="margin-left:54vw;" class="btn btn-sm btn-primary copy-btn">Copy</button>
      </div>

      <!-- Java Code -->
      <div id="codeJavaWrapper" class="code-content d-none">
        <pre id="codeJava1" class="code-box">
    <span class="keyword">public class</span> <span class="class">Main</span> {
        <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
            <span class="keyword">int</span> <span class="variable">n</span> = <span class="number">5</span>;
            <span class="keyword">int</span> <span class="variable">factorial</span> = <span class="number">1</span>;

            <span class="keyword">while</span> (<span class="variable">n</span> &gt; <span class="number">0</span>) {
                <span class="variable">factorial</span> *= <span class="variable">n</span>;
                <span class="variable">n</span>--;
            }

            <span class="class">System.out</span>.println(<span class="string">"Factorial of 5 is: "</span> + <span class="variable">factorial</span>);
        }
    }
    </pre>
        <button onclick="copyCode('codeJava1')" style="margin-left:54vw;" class="btn btn-sm btn-success copy-btn">Copy</button>
      </div>
    </div>
</div>

                        <p>
                            While loops are particularly useful when you need to ensure that a block of code executes only when the condition is satisfied as it terminates as soon as that condition becomes false. This can be vital for tasks like validating user input or processing data until a specific condition is met. By checking the condition at the beginning of the loop, you can control whether the loop body is executed or not.
                        </p>
                        <span>
                            <strong>
                                Termination Conditions:
                            </strong>
                        </span>
                        <p>
                            In algorithm design, it's essential to define clear and well-defined termination conditions for while loops. The termination condition specifies when the loop should stop executing. Without proper termination conditions, a while loop can run indefinitely, leading to what's known as an "infinite loop." Infinite loops can crash programs and consume excessive system resources, making them a critical issue to avoid.
                        </p>
                        <p>
                            It's crucial to define clear termination conditions for while loops in algorithms to prevent infinite loops. Termination conditions ensure that the loop will eventually exit, making the algorithm correct and efficient.
                        </p>
                        <span>
                            <strong>
                                Optimisation:
                            </strong>
                        </span>
                        <p>
                            Optimising while loops involves making them more efficient by minimising unnecessary iterations. One common optimization technique is to use loop control statements like break or continue within the loop body.
                        </p>
                        <p>
                            <strong>break:</strong>It allows you to exit the loop prematurely, even before the termination condition is met. For example, if you're searching for a value in an array, once you find it, you can break out of the loop instead of continuing to search through the remaining elements.
                        </p>
                        <p>
                            <strong>continue:</strong>It skips the current iteration of the loop and moves to the next one. This can be useful when you want to skip certain elements or avoid executing some code under specific conditions.
                        </p>
                        <p>
                            By using these control statements judiciously, you can reduce the number of iterations, which can significantly improve the efficiency of your algorithm.
                        </p>
                        <!-- yaha code likhana hai  -->
                        <div class="container my-5">
                        <div class="card shadow">
  <h3 class="mb-4 text-center">Break and Continue in C++ and Java</h3>
  

  <!-- Language Toggle Buttons -->
  <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
      <div>
        <button class="btn btn-outline-primary me-2" onclick="showCppBC()">C++</button>
        <button class="btn btn-outline-success" onclick="showJavaBC()">Java</button>
      </div>
      <div>
        <button id="copyCppBCBtn" onclick="copyCodeBC('codeCppBlockBC')" class="btn btn-sm btn-primary">Copy</button>
        <button id="copyJavaBCBtn" onclick="copyCodeBC('codeJavaBlockBC')" class="btn btn-sm btn-success d-none">Copy</button>
      </div>
    </div>
  <!-- C++ Code Block -->
  <div id="codeCppWrapperBC" class="code-content">
    <pre id="codeCppBlockBC" class="code-box">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> <span class="variable">numbers</span>[] = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>, <span class="number">7</span>, <span class="number">8</span>, <span class="number">9</span>, <span class="number">10</span>};
    <span class="keyword">int</span> <span class="variable">target</span> = <span class="number">6</span>;

    <span class="comment">// Using 'break' to exit the loop early</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">num</span> : <span class="variable">numbers</span>) {
        <span class="keyword">if</span> (<span class="variable">num</span> == <span class="variable">target</span>) {
            <span class="class">cout</span> &lt;&lt; <span class="string">"Target found: "</span> &lt;&lt; <span class="variable">target</span> &lt;&lt; <span class="class">endl</span>;
            <span class="keyword">break</span>;
        }
        <span class="class">cout</span> &lt;&lt; <span class="string">"Checking: "</span> &lt;&lt; <span class="variable">num</span> &lt;&lt; <span class="class">endl</span>;
    }

    <span class="comment">// Using 'continue' to skip even numbers</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">num</span> : <span class="variable">numbers</span>) {
        <span class="keyword">if</span> (<span class="variable">num</span> % <span class="number">2</span> == <span class="number">0</span>) {
            <span class="keyword">continue</span>;
        }
        <span class="class">cout</span> &lt;&lt; <span class="string">"Odd number: "</span> &lt;&lt; <span class="variable">num</span> &lt;&lt; <span class="class">endl</span>;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</pre>
    <button onclick="copyCodeBC('codeCppBlockBC')" style="margin-left:54vw;" class="btn btn-sm btn-primary">Copy</button>
  </div>

  <!-- Java Code Block -->
  <div id="codeJavaWrapperBC" class="code-content d-none">
    <pre id="codeJavaBlockBC" class="code-box">
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">int</span>[] <span class="variable">numbers</span> = {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>, <span class="number">7</span>, <span class="number">8</span>, <span class="number">9</span>, <span class="number">10</span>};
        <span class="keyword">int</span> <span class="variable">target</span> = <span class="number">6</span>;

        <span class="comment">// Using break</span>
        <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">num</span> : <span class="variable">numbers</span>) {
            <span class="keyword">if</span> (<span class="variable">num</span> == <span class="variable">target</span>) {
                <span class="class">System.out</span>.println(<span class="string">"Target found: "</span> + <span class="variable">target</span>);
                <span class="keyword">break</span>;
            }
            <span class="class">System.out</span>.println(<span class="string">"Checking: "</span> + <span class="variable">num</span>);
        }

        <span class="comment">// Using continue</span>
        <span class="keyword">for</span> (<span class="keyword">int</span> <span class="variable">num</span> : <span class="variable">numbers</span>) {
            <span class="keyword">if</span> (<span class="variable">num</span> % <span class="number">2</span> == <span class="number">0</span>) {
                <span class="keyword">continue</span>;
            }
            <span class="class">System.out</span>.println(<span class="string">"Odd number: "</span> + <span class="variable">num</span>);
        }
    }
}
</pre>
    <button onclick="copyCodeBC('codeJavaBlockBC')" style="margin-left:54vw;" class="btn btn-sm btn-success">Copy</button>
  </div>
</div>
</div>
                        
                        <div style="display:flex; flex-direction:column;">
                        <span style="margin-left:5px;"><strong>Output:</strong></span>

                            <span style="margin-left:5px;">Checking: 1</span>
                            <span style="margin-left:5px;">Checking: 2</span>
                            <span style="margin-left:5px;">Checking: 3</span>
                            <span style="margin-left:5px;">Checking: 4</span>
                            <span style="margin-left:5px;">Checking: 5</span>
                            <span style="margin-left:5px;">Target found: 6</span>
                            <span style="margin-left:5px;">Odd number: 1</span>
                            <span style="margin-left:5px;">Odd number: 3</span>
                            <span style="margin-left:5px;">Odd number:5</span>
                            <span style="margin-left:5px;">Odd number: 7</span>
                            <span style="margin-left:5px;">Odd number: 9</span>
                        </div>
<!-- JavaScript -->
                         <ul>
                            <li>The first loop uses <strong>break</strong> to <strong>exit the loop immediately</strong> when the target value is found, <strong>preventing unnecessary iterations.</strong></li>
                            <li>The second loop uses <strong>continue</strong> to <strong>skip even numbers,</strong> so only odd numbers are printed, <strong>avoiding the execution of code</strong> for even numbers.</li>
                         </ul>
                </div>
            </div>
        </div>
    </div>
<!-- JavaScript -->
<script>
  function showCpp() {
    document.getElementById("codeCppWrapper").classList.remove("d-none");
    document.getElementById("codeJavaWrapper").classList.add("d-none");
  }

  function showJava() {
    document.getElementById("codeCppWrapper").classList.add("d-none");
    document.getElementById("codeJavaWrapper").classList.remove("d-none");
  }

  function copyCode(id) {
    const code = document.getElementById(id).innerText;
    navigator.clipboard.writeText(code).then(() => {
      alert("Code copied to clipboard!");
    }).catch(err => {
      alert("Failed to copy: " + err);
    });
  }
</script>
<script>
  function showCppBC() {
    document.getElementById("codeCppWrapperBC").classList.remove("d-none");
    document.getElementById("codeJavaWrapperBC").classList.add("d-none");
  }

  function showJavaBC() {
    document.getElementById("codeCppWrapperBC").classList.add("d-none");
    document.getElementById("codeJavaWrapperBC").classList.remove("d-none");
  }

  function copyCodeBC(blockId) {
    const code = document.getElementById(blockId).innerText;
    navigator.clipboard.writeText(code).then(() => {
      alert("Code copied to clipboard!");
    }).catch(err => {
      alert("Failed to copy: " + err);
    });
  }
</script>
<script>
  function showCpp() {
    document.getElementById("codeCppWrapper").classList.remove("d-none");
    document.getElementById("codeJavaWrapper").classList.add("d-none");

    document.getElementById("copyCppBtn").classList.remove("d-none");
    document.getElementById("copyJavaBtn").classList.add("d-none");
  }

  function showJava() {
    document.getElementById("codeCppWrapper").classList.add("d-none");
    document.getElementById("codeJavaWrapper").classList.remove("d-none");

    document.getElementById("copyCppBtn").classList.add("d-none");
    document.getElementById("copyJavaBtn").classList.remove("d-none");
  }

  function copyCode(codeId) {
    const text = document.getElementById(codeId).innerText;
    navigator.clipboard.writeText(text).then(() => {
      alert("Code copied to clipboard!");
    });
  }
</script>
<script>
  function showCppBC() {
    document.getElementById("codeCppWrapperBC").classList.remove("d-none");
    document.getElementById("codeJavaWrapperBC").classList.add("d-none");

    document.getElementById("copyCppBCBtn").classList.remove("d-none");
    document.getElementById("copyJavaBCBtn").classList.add("d-none");
  }

  function showJavaBC() {
    document.getElementById("codeCppWrapperBC").classList.add("d-none");
    document.getElementById("codeJavaWrapperBC").classList.remove("d-none");

    document.getElementById("copyCppBCBtn").classList.add("d-none");
    document.getElementById("copyJavaBCBtn").classList.remove("d-none");
  }

  function copyCodeBC(codeId) {
    const text = document.getElementById(codeId).innerText;
    navigator.clipboard.writeText(text).then(() => {
      alert("Code copied to clipboard!");
    });
  }
</script>


<!-- Bootstrap 5.2 JS Bundle (for modal, etc. if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>