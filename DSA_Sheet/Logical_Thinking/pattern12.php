<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern - 12: Number Crown Pattern</title>
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
          <h2><strong>Pattern - 12: Number Crown Pattern</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-15.png" alt class="wp-image-7549"
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

1    1
12  21
123321    
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

1          1
12        21
12       321
1234    4321
12345  54321
123456654321
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
          <p>In this problem, we want to print a combination of a numbered pyramid and a reverse-numbered pyramid. So,
            as per our observation in each row, numbers are printed from 1 to the row number and then some spaces and
            then again numbers from 1 to the row number but in reverse order. So, the outer loop will run from 1 to N
            and there will be three inner loops for numbers, spaces, and then again numbers. </p>
        </div>
        <div>
          <p>The first inner loop will have numbers printed from 1 to the row number, the second will print the spaces (
            8 spaces in row 1, 6 spaces in row 2, and so on) and then the last loop will run from row number to 1 in
            decreasing manner. For spaces, we can say that initially, spaces are 2*(N-1) for Row 1 where N is the total
            no. of rows and then the spaces decrease by 2 in each iteration till the last row is reached.</p>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
          <div class="card shadow">
            <h3 class="mb-4 text-start">Increasing-Decreasing Number with Spaces Pattern</h3>
            <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
              <div>
                <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
                <button class="btn btn-outline-success" onclick="showJava()">Java</button>
              </div>
              <div>
                <button id="CopyCppBtn" onclick="copyCode('CodeCpp12')"
                  class="btn btn-sm btn-primary copy-btn">Copy</button>
                <button id="CopyJavaBtn" onclick="copyCode('CodeJava12')"
                  class="btn btn-sm btn-success copy-btn d-none">Copy</button>
              </div>
            </div>

            <!-- C++ Code Block -->
            <div id="CodeCpp" class="code-content">
              <div id="CodeCpp12" class="code-box">
                <div><span class="keyword">#include</span> &lt;bits/stdc++.h&gt;</div>
                <div><span class="keyword">using namespace</span> std;</div>
                <br>
                <div><span class="keyword">void</span> <span class="function">pattern12</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">int</span> spaces = 2 * (N - 1);</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 1; i &lt;= N; i++) {</div>
                <div> <span class="comment">// Print increasing numbers</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++)</div>
                <div> cout &lt;&lt; j;</div>
                <div> <span class="comment">// Print middle spaces</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= spaces; j++)
                </div>
                <div> cout &lt;&lt; " ";</div>
                <div> <span class="comment">// Print decreasing numbers</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = i; j &gt;= 1; j--)</div>
                <div> cout &lt;&lt; j;</div>
                <div> cout &lt;&lt; endl;</div>
                <div> spaces -= 2;</div>
                <div> }</div>
                <div>}</div>
                <br>
                <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern12(N);</div>
                <div> <span class="keyword">return</span> 0;</div>
                <div>}</div>
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="codeJava" class="code-content d-none">
              <div id="CodeJava12" class="code-box">
                <div><span class="keyword">public class</span> <span class="class-name">Main</span> {</div>
                <br>
                <div> <span class="comment">// Method to print the increasing-decreasing number pattern</span></div>
                <div> <span class="keyword">static void</span> <span class="function">pattern12</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">int</span> spaces = 2 * (N - 1);</div>
                <div> <span class="comment">// Outer loop for rows</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 1; i &lt;= N; i++) {</div>
                <div> <span class="comment">// Print increasing sequence</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++) {</div>
                <div> System.out.print(j);</div>
                <div> }</div>
                <div> <span class="comment">// Print spaces</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= spaces; j++) {
                </div>
                <div> System.out.print(" ");</div>
                <div> }</div>
                <div> <span class="comment">// Print decreasing sequence</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = i; j &gt;= 1; j--) {</div>
                <div> System.out.print(j);</div>
                <div> }</div>
                <div> <span class="comment">// Move to next line</span></div>
                <div> System.out.println();</div>
                <div> spaces -= 2; <span class="comment">// Reduce spaces by 2 after each row</span></div>
                <div> }</div>
                <div> }</div>
                <br>
                <div> <span class="keyword">public static void</span> <span class="function">main</span>(<span
                    class="keyword">String</span>[] args) {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern12(N);</div>
                <div> }</div>
                <div>}</div>
              </div>
            </div>
          </div>
        </div>



        <div>
          <pre>
<strong>Output: 
    
1          1
12        21
12       321
1234    4321
12345  54321
123456654321
</strong>
                    </pre>
        </div>

        <div>
        </div>
      </div>
      <script>
        // Show C++ code and hide Java
        function showCpp() {
          document.getElementById("CodeCpp").classList.remove("d-none");
          document.getElementById("codeJava").classList.add("d-none");
          document.getElementById("CopyCppBtn").classList.remove("d-none");
          document.getElementById("CopyJavaBtn").classList.add("d-none");
        }
        // Show Java code and hide C++
        function showJava() {
          document.getElementById("CodeCpp").classList.add("d-none");
          document.getElementById("codeJava").classList.remove("d-none");
          document.getElementById("CopyCppBtn").classList.add("d-none");
          document.getElementById("CopyJavaBtn").classList.remove("d-none");
        }
        function copyCode(id) {
          const codeElement = document.getElementById(id);
          const tempTextArea = document.createElement("textarea");
          tempTextArea.value = codeElement.innerText;
          document.body.appendChild(tempTextArea);
          tempTextArea.select();
          try {
            document.execCommand("copy");
            alert("Code copied to clipboard!");
          }
          catch (err) {
            alert("Faild to copy!");
          }
          document.body.removeChild(tempTextArea);
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