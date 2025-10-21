<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern - 17: Alpha-Hill Pattern</title>
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
          <h2><strong>Pattern - 17: Alpha-Hill Pattern</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-20.png" alt class="wp-image-7549"
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

  A  
 ABA 
ABCBA
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

     A     
    ABA    
   ABCBA   
  ABCDCBA  
 ABCDEDCBA 
ABCDEFEDCBA
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
          <p>In this pattern problem, as we can observe we have to print a right-angled pyramid just like our last
            pattern but with a twist. Here, in every row, we have to print the same character i times where i is the row
            number. For example, the 1st row will print 1 A, the 2nd row will print 2 B’s, and so on. So, similar to the
            previous patterns the outer loop will loop for N times and the inner loop for i times with the character
            value incrementing each time we enter a new row.</p>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
          <div class="card shadow">
            <h3 class="mb-4 text-start">Alphabet Pyramid Pattern</h3>
            <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
              <div>
                <button class="btn btn-outline-primary me-2" onclick="showCpp17()">C++</button>
                <button class="btn btn-outline-success" onclick="showJava17()">Java</button>
              </div>
              <div>
                <button id="CopyCppBtn17" onclick="copyCode('CodeCpp17')"
                  class="btn btn-sm btn-primary copy-btn">Copy</button>
                <button id="CopyJavaBtn17" onclick="copyCode('CodeJava17')"
                  class="btn btn-sm btn-success copy-btn d-none">Copy</button>
              </div>
            </div>

            <!-- C++ Code Block -->
            <div id="CodeCppBox17" class="code-content">
              <div id="CodeCpp17" class="code-box">
                <div><span class="keyword">#include</span> &lt;bits/stdc++.h&gt;</div>
                <div><span class="keyword">using namespace</span> std;</div>
                <br>
                <div><span class="keyword">void</span> <span class="function">pattern17</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="comment">// Outer loop for the number of rows</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                <div> <span class="comment">// Print leading spaces</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                </div>
                <div> cout &lt;&lt; " ";</div>
                <div> <span class="comment">// Print characters in pyramid</span></div>
                <div> <span class="keyword">char</span> ch = 'A';</div>
                <div> <span class="keyword">int</span> breakpoint = (2 * i + 1) / 2;</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= 2 * i + 1; j++)
                  {</div>
                <div> cout &lt;&lt; ch;</div>
                <div> <span class="keyword">if</span> (j &lt;= breakpoint) ch++;</div>
                <div> <span class="keyword">else</span> ch--;</div>
                <div> }</div>
                <div> <span class="comment">// Print trailing spaces (optional)</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                </div>
                <div> cout &lt;&lt; " ";</div>
                <div> cout &lt;&lt; endl;</div>
                <div> }</div>
                <div>}</div>
                <br>
                <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern17(N);</div>
                <div> <span class="keyword">return</span> 0;</div>
                <div>}</div>
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="CodeJavaBox17" class="code-content d-none">
              <div id="CodeJava17" class="code-box">
                <div><span class="keyword">public class</span> <span class="class-name">Main</span> {</div>
                <br>
                <div> <span class="comment">// Method to print alphabet pyramid</span></div>
                <div> <span class="keyword">static void</span> <span class="function">pattern17</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                <div> <span class="comment">// Print leading spaces</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                </div>
                <div> System.out.print(" ");</div>
                <div> <span class="comment">// Print characters in pyramid</span></div>
                <div> <span class="keyword">char</span> ch = 'A';</div>
                <div> <span class="keyword">int</span> breakpoint = (2 * i + 1) / 2;</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 1; j &lt;= 2 * i + 1; j++)
                  {</div>
                <div> System.out.print(ch);</div>
                <div> <span class="keyword">if</span> (j &lt;= breakpoint) ch++;</div>
                <div> <span class="keyword">else</span> ch--;</div>
                <div> }</div>
                <div> <span class="comment">// Optional trailing spaces for symmetry</span></div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                </div>
                <div> System.out.print(" ");</div>
                <div> System.out.println();</div>
                <div> }</div>
                <div> }</div>
                <br>
                <div> <span class="keyword">public static void</span> <span class="function">main</span>(<span
                    class="keyword">String</span>[] args) {</div>
                <div> <span class="keyword">int</span> N = 5;</div>
                <div> pattern17(N);</div>
                <div> }</div>
                <div>}</div>
              </div>
            </div>
          </div>
        </div>





        <div>
          <pre>
<strong>Output: 
    
        A    
       ABA   
      ABCBA  
     ABCDCBA 
    ABCDEDCBA
</strong>
                    </pre>
        </div>

        <div>
        </div>
      </div>
      <script>
        function showCpp17() {
          document.getElementById("CodeCppBox17").classList.remove("d-none");
          document.getElementById("CodeJavaBox17").classList.add("d-none");
          document.getElementById("CopyCppBtn17").classList.remove("d-none");
          document.getElementById("CopyJavaBtn17").classList.add("d-none");
        }

        function showJava17() {
          document.getElementById("CodeCppBox17").classList.add("d-none");
          document.getElementById("CodeJavaBox17").classList.remove("d-none");
          document.getElementById("CopyCppBtn17").classList.add("d-none");
          document.getElementById("CopyJavaBtn17").classList.remove("d-none");
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