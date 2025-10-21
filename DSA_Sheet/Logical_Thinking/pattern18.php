<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern-18: Alpha-Triangle Pattern</title>
</head>
  <style>
        svg{
            cursor: pointer;
        }
    .square {
      width: 15px;
      height: 15px;
      border: 3px solid rgb(15, 20, 23);
      background-color: transparent;
      border-radius: 2px;
      transition: background-color 0.3s;
      cursor: pointer;
    }

    .square.filled {
      background-color:rgb(8, 22, 31);
    }
    </style>
<style>
  .code-box {
    background-color: rgb(34, 1, 45);
    color: #b78282;
    font-family: 'Courier New', monospace;
    padding: 1rem;
    border-radius: 8px;
    position: relative;
  }

  .code-line {
    display: block;
    white-space: pre;
  }

  .keyword {
    color: #569cd6;
  }

  .class-name {
    color: #4ec9b0;
  }

  .function {
    color: #dcdcaa;
  }

  .string {
    color: #ce9178;
  }

  .symbol {
    color: #d4d4d4;
  }

  .number {
    color: #b5cea8;
  }

  .comment {
    color: #6a9955;
    font-style: italic;
  }

  .copy-btn {
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    background-color: #0d6efd;
    color: #fff;
    border: none;
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 4px;
    cursor: pointer;
  }
</style>

<body class="bg-light py-4">
  <?php include("../../header.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 p-3 border-end">
        <b>Sabbir</b>
      </div>
      <div class="col-8">
        <div>
          <h2><strong>Pattern-18: Alpha-Triangle Pattern</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-22.png" alt class="wp-image-7549"
            width="140" height="167">
        </div>
        <div>
          <h5><strong>Examples:</strong></h5>
          <pre style="
                        margin-bottom: -3rem;
                    "><strong>
Example 1:
Input: N = 3
Output: 

C
B C
A B C
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

F
E F
D E F
C D E F
B C D E F
A B C D E F
</strong>
                    </pre>
        </div>
        <div>
          <h4><strong>Solution</strong></h4>
          <p><i><span style="color:red;">Disclaimer:</span> Don't jump directly to the solution, try it out yourself
              first.</i></p>
        </div>
        <div>
          <a href=""><u style="color:red">Problem Link</u></a>
        </div>
        <div class="mb-3">
          <h4>Approach: </h4>
          <ul>
            There are 4 general rules for solving a pattern-based question:
            <li>We always use nested loops for printing the patterns. For the outer loop, we count the number of
              lines/rows and loop for them.</li>
            <li>Next, for the inner loop, we focus on the number of columns and somehow connect them to the rows by
              forming a logic such that for each row we get the required number of columns to be printed.</li>
            <li>We print the ‘*’ inside the inner loop.</li>
            <li>Observe symmetry in the pattern or check if a pattern is a combination of two or more similar patterns.
            </li>
          </ul>
        </div>
        <div>
          <p>In this problem, we have to print an alpha triangle as shown in the examples above. We observe from the
            examples that each row ends with the letter E in the case when N = 5 ( ‘A’ + 4 ). Also the triangle has to
            be right-angled so like the previous patterns, the outer loop will run for N times and the inner loop for i
            times. In the inner loop, we’ll start from the letter that comes i before the (‘A’ + N -1)th letter and then
            run the loop till we reach (‘A’ + N-1) in every row. For example, for N = 5 in each row, the letters will be
            printed from ‘E’ - i to ‘E’ where i is the row index.</p>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
          <!-- Main card container for the pattern display -->
          <div class="card shadow">

            <!-- Title for the pattern -->
            <h3 class="mb-4 text-start">Character Right-Aligned Pattern</h3>

            <!-- Card Header with buttons for toggling between C++ and Java code -->
            <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
              <div>
                <!-- Button to display C++ code -->
                <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
                <!-- Button to display Java code -->
                <button class="btn btn-outline-success" onclick="showJava()">Java</button>
              </div>
              <div>
                <!-- Copy button for C++ code -->
                <button id="CopyCppBtn" onclick="copyCode('CodeCpp18')"
                  class="btn btn-sm btn-primary copy-btn">Copy</button>
                <!-- Copy button for Java code (initially hidden) -->
                <button id="CopyJavaBtn" onclick="copyCode('CodeJava18')"
                  class="btn btn-sm btn-success copy-btn d-none">Copy</button>
              </div>
            </div>

            <!-- C++ Code Block -->
            <div id="CodeCpp" class="code-content">
              <div id="CodeCpp18" class="code-box">
                <!-- C++ Code begins here -->
                <div><span class="keyword">#include</span> &lt;bits/stdc++.h&gt;</div>
                <div><span class="keyword">using namespace</span> std;</div>
                <br>
                <!-- Function definition for pattern18 -->
                <div><span class="keyword">void</span> <span class="function">pattern18</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">char</span> ch = ('A' + N - 1) - i; ch
                  &lt;= ('A' + N - 1); ch++) {</div>
                <div> cout &lt;&lt; ch &lt;&lt; " ";</div>
                <div> }</div>
                <div> cout &lt;&lt; endl;</div>
                <div> }</div>
                <div>}</div>
                <br>
                <!-- Main function where N is set to 5 and the pattern function is called -->
                <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern18(N);</div>
                <div> <span class="keyword">return</span> 0;</div>
                <div>}</div>
                <!-- C++ Code ends here -->
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="CodeJava" class="code-content d-none">
              <div id="CodeJava18" class="code-box">
                <!-- Java Code begins here -->
                <div><span class="keyword">public class</span> <span class="class-name">Main</span> {</div>
                <br>
                <!-- Java pattern function definition -->
                <div> <span class="keyword">static void</span> <span class="function">pattern18</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">char</span> ch = (char)(('A' + N - 1) -
                  i); ch &lt;= (char)('A' + N - 1); ch++) {</div>
                <div> System.out.print(ch + " ");</div>
                <div> }</div>
                <div> System.out.println();</div>
                <div> }</div>
                <div> }</div>
                <br>
                <!-- Main method to call pattern18 function -->
                <div> <span class="keyword">public static void</span> <span class="function">main</span>(<span
                    class="keyword">String</span>[] args) {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern18(N);</div>
                <div> }</div>
                <div>}</div>
                <!-- Java Code ends here -->
              </div>
            </div>
          </div>
        </div>







        <div>
          <pre>
<strong>Output: 
    
E
D E
C D E
B C D E
A B C D E
</strong>
                    </pre>
        </div>

        <div>
        </div>
      </div>
      <script>
        function showCpp() {
          document.getElementById("CodeCpp").classList.remove("d-none");
          document.getElementById("CodeJava").classList.add("d-none");
          document.getElementById("CopyCppBtn").classList.remove("d-none");
          document.getElementById("CopyJavaBtn").classList.add("d-none");
        }

        function showJava() {
          document.getElementById("CodeCpp").classList.add("d-none");
          document.getElementById("CodeJava").classList.remove("d-none");
          document.getElementById("CopyCppBtn").classList.add("d-none");
          document.getElementById("CopyJavaBtn").classList.remove("d-none");
        }

        function copyCode(id) {
          const code = document.getElementById(id).innerText;
          navigator.clipboard.writeText(code).then(() => {
            alert("Code copied to clipboard!");
          });
        }
      </script>
          <script>
    // Toggle the 'filled' class on click
    function toggleFill(element) {
      element.classList.toggle('filled');
    }
</script>
</body>

</html>