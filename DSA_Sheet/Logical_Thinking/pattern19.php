<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern-19: Symmetric-Void Pattern</title>
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
          <h2><strong>Pattern-19: Symmetric-Void Pattern</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-23.png" alt class="wp-image-7549"
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

******
**  **
*    *
*    *
**  **
******
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

************
*****  *****
****    ****
***      ***
**        **
*          *
*          *
**        **
***      ***
****    ****
*****  *****
************
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
          <p>Contrary to the previous patterns, this pattern observes symmetry. We can clearly see that the first half of the pattern is just a mirror image of the second half of the pattern. If we observe the first part, we see that like some previous patterns, it can also be divided into 3 parts i.e. stars, spaces, and then stars. In the first row, there are no spaces and 10 stars, in the second row, there are 2 spaces and 8 stars, and so on. So, we initialize the spaces with 0 initially which will eventually increment by 2 whenever we enter a new row. The stars, however, will be twice the row number, half of the stars would be printed before the spaces and half after the spaces.</p>
        </div>
        <div>
            <p>Similar will be the case of the second half of the pattern too. The initial number of spaces would be equal to 2*(N-1) and 1 star each would be printed on either side of the spaces initially. The spaces will decrease by 2 and the stars will increase by 2 in each row.</p>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
  <!-- Card for displaying the pattern and code -->
  <div class="card shadow">
    <!-- Title -->
    <h3 class="mb-4 text-start">Butterfly Star Pattern</h3>

    <!-- Buttons for toggling C++ and Java -->
    <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
      <div>
        <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
        <button class="btn btn-outline-success" onclick="showJava()">Java</button>
      </div>
      <div>
        <button id="CopyCppBtn" onclick="copyCode('CodeCpp19')" class="btn btn-sm btn-primary copy-btn">Copy</button>
        <button id="CopyJavaBtn" onclick="copyCode('CodeJava19')" class="btn btn-sm btn-success copy-btn d-none">Copy</button>
      </div>
    </div>

    <!-- C++ Code Block -->
    <div id="CodeCpp" class="code-content">
      <div id="CodeCpp19" class="code-box">
        <div><span class="keyword">#include</span> &lt;bits/stdc++.h&gt;</div>
        <div><span class="keyword">using namespace</span> std;</div>
        <br>
        <div><span class="keyword">void</span> <span class="function">pattern19</span>(<span class="keyword">int</span> N) {</div>
        <div>  <span class="comment">// Upper half of the pattern</span></div>
        <div>  <span class="keyword">int</span> iniS = 0;</div>
        <div>  <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
        <div>    <span class="comment">// Left stars</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= N - i; j++) cout &lt;&lt; "*";</div>
        <div>    <span class="comment">// Spaces in the middle</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; iniS; j++) cout &lt;&lt; " ";</div>
        <div>    <span class="comment">// Right stars</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= N - i; j++) cout &lt;&lt; "*";</div>
        <div>    iniS += 2;</div>
        <div>    cout &lt;&lt; endl;</div>
        <div>  }</div>
        <div>  <span class="comment">// Lower half of the pattern</span></div>
        <div>  iniS = 2 * N - 2;</div>
        <div>  <span class="keyword">for</span> (<span class="keyword">int</span> i = 1; i &lt;= N; i++) {</div>
        <div>    <span class="comment">// Left stars</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++) cout &lt;&lt; "*";</div>
        <div>    <span class="comment">// Spaces in the middle</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; iniS; j++) cout &lt;&lt; " ";</div>
        <div>    <span class="comment">// Right stars</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++) cout &lt;&lt; "*";</div>
        <div>    iniS -= 2;</div>
        <div>    cout &lt;&lt; endl;</div>
        <div>  }</div>
        <div>}</div>
        <br>
        <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
        <div>  <span class="keyword">int</span> N = 5;</div>
        <div>  pattern19(N);</div>
        <div>  <span class="keyword">return</span> 0;</div>
        <div>}</div>
      </div>
    </div>

    <!-- Java Code Block -->
    <div id="CodeJava" class="code-content d-none">
      <div id="CodeJava19" class="code-box">
        <div><span class="keyword">public class</span> <span class="class-name">Main</span> {</div>
        <div>  <span class="comment">// Function to print butterfly pattern</span></div>
        <div>  <span class="keyword">static void</span> <span class="function">pattern19</span>(<span class="keyword">int</span> N) {</div>
        <div>    <span class="comment">// Upper half of the pattern</span></div>
        <div>    <span class="keyword">int</span> iniS = 0;</div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
        <div>      <span class="comment">// Left stars</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= N - i; j++) System.out.print("*");</div>
        <div>      <span class="comment">// Spaces in the middle</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; iniS; j++) System.out.print(" ");</div>
        <div>      <span class="comment">// Right stars</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= N - i; j++) System.out.print("*");</div>
        <div>      iniS += 2;</div>
        <div>      System.out.println();</div>
        <div>    }</div>
        <div>    <span class="comment">// Lower half of the pattern</span></div>
        <div>    iniS = 2 * N - 2;</div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> i = 1; i &lt;= N; i++) {</div>
        <div>      <span class="comment">// Left stars</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++) System.out.print("*");</div>
        <div>      <span class="comment">// Spaces in the middle</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; iniS; j++) System.out.print(" ");</div>
        <div>      <span class="comment">// Right stars</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= i; j++) System.out.print("*");</div>
        <div>      iniS -= 2;</div>
        <div>      System.out.println();</div>
        <div>    }</div>
        <div>  }</div>
        <br>
        <div>  <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String</span>[] args) {</div>
        <div>    <span class="keyword">int</span> N = 5;</div>
        <div>    pattern19(N);</div>
        <div>  }</div>
        <div>}</div>
      </div>
    </div>
  </div>
</div>








        <div>
          <pre>
<strong>Output: 
    
**********
****  ****
***    ***
**      **
*        *
*        *
**      **
***    ***
****  ****
**********
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