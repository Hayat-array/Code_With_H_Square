<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern - 7: Star Pyramid</title>
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
          <h2><strong>Pattern - 7: Star Pyramid</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-11.png" alt class="wp-image-7549"
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

    *    
   ***   
  *****  
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

    *    
   ***   
  *****  
 ******* 
*********
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
          <p>As we can clearly observe that for each row there are some spaces that get printed then some stars and then
            again some spaces giving it a final pyramidal look. For eg: In the first row (i=0) there are 4 spaces, 1
            star, then again 4 spaces. In the second row (i=1) there are 3 spaces, 3 stars, then again 3 spaces so we
            can say that there are N-i-1 spaces, 2*i+1 stars, and then again N-i-1 spaces for each row where i is the
            row index. We thus simply run 3 inner loops first for printing the spaces, then the stars, and then the
            spaces again.</p>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
          <div class="card shadow">
            <h3 class="mb-4 text-start">Pattern-7</h3>
            <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
              <div>
                <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
                <button class="btn btn-outline-success" onclick="showJava()">Java</button>
              </div>
              <div>
                <button id="CopyCppBtn" onclick="copyCode('CodeCpp7')"
                  class="btn btn-sm btn-primary copy-btn">Copy</button>
                <button id="CopyJavaBtn" onclick="copyCode('CodeJava7')"
                  class="btn btn-sm btn-success copy-btn d-none">Copy</button>
              </div>
            </div>

            <!-- C++ Code Block -->
            <div id="CodeCpp" class="code-content">
              <div id="CodeCpp7" class="code-box">
                <div><span class="keyword">#include</span> <span class="string">&lt;bits/stdc++.h&gt;</span></div>
                <div><span class="keyword">using namespace</span> std;</div>
                <br>
                <div><span class="keyword">void</span> <span class="function">pattern7</span>(<span
                    class="keyword">int</span> N) {</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                <div class="comment"> // Print spaces before stars</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++) {
                </div>
                <div> cout &lt;&lt; <span class="string">" "</span>;</div>
                <div> }</div>
                <div class="comment"> // Print stars</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; 2 * i + 1; j++) {
                </div>
                <div> cout &lt;&lt; <span class="string">"*"</span>;</div>
                <div> }</div>
                <div class="comment"> // Print spaces after stars (not needed but included for symmetry)</div>
                <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++) {
                </div>
                <div> cout &lt;&lt; <span class="string">" "</span>;</div>
                <div> }</div>
                <div> cout &lt;&lt; endl;</div>
                <div> }</div>
                <div>}</div>
                <br>
                <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
                <div> <span class="keyword">int</span> N = 5; <span class="comment">// You can also take input from
                    user</span></div>
                <div> pattern7(N);</div>
                <div> <span class="keyword">return</span> 0;</div>
                <div>}</div>
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="codeJava" class="code-content d-none">
              <div class="code-box text-light p-4">
                <div id="CodeJava7" class="code-box">
                  <div><span class="keyword">class</span> <span class="class-name">Main</span> {</div>
                  <div> <span class="keyword">static void</span> <span class="function">pattern7</span>(<span
                      class="keyword">int</span> N) {</div>
                  <div> <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; N; i++) {</div>
                  <div> <span class="comment">// Print spaces before stars</span></div>
                  <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                    {</div>
                  <div> System.out.print(<span class="string">" "</span>);</div>
                  <div> }</div>
                  <div> <span class="comment">// Print stars</span></div>
                  <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; 2 * i + 1; j++)
                    {</div>
                  <div> System.out.print(<span class="string">"*"</span>);</div>
                  <div> }</div>
                  <div> <span class="comment">// Print spaces after stars (optional)</span></div>
                  <div> <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; N - i - 1; j++)
                    {</div>
                  <div> System.out.print(<span class="string">" "</span>);</div>
                  <div> }</div>
                  <div> System.out.println();</div>
                  <div> }</div>
                  <div> }</div>
                  <br>
                  <div> <span class="keyword">public static void</span> <span class="function">main</span>(<span
                      class="keyword">String</span>[] args) {</div>
                  <div> <span class="keyword">int</span> N = 5;</div>
                  <div> pattern7(N);</div>
                  <div> }</div>
                  <div>}</div>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div>
          <pre>
<strong>Output: 
    
    *    
   ***   
  *****  
 ******* 
********* 
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