<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern - 22: The Number Pattern</title>
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
          <h2><strong>Pattern - 22: The Number Pattern</strong></h2>
          <p class="mb-3">his article contains all the important pattern problems that you must solve before starting
            DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>
          </p>
          <div class="square mb-3" onclick="toggleFill(this)"></div>
          <p class="mb-3"><strong>Problem Statement:</strong> Given an integer <strong>N</strong>, print the following
            pattern.</p>
          <img src="https://static.takeuforward.org/wp/uploads/2023/02/image-26.png" alt class="wp-image-7549"
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

3 3 3 3 3 
3 2 2 2 3 
3 2 1 2 3 
3 2 2 2 3 
3 3 3 3 3
</strong>
                    </pre>
        </div>

        <div>
          <pre><strong>
Example 2:
Input: N = 6
Output:

6 6 6 6 6 6 6 6 6 6 6 
6 5 5 5 5 5 5 5 5 5 6 
6 5 4 4 4 4 4 4 4 5 6 
6 5 4 3 3 3 3 3 4 5 6 
6 5 4 3 2 2 2 3 4 5 6 
6 5 4 3 2 1 2 3 4 5 6 
6 5 4 3 2 2 2 3 4 5 6 
6 5 4 3 3 3 3 3 4 5 6 
6 5 4 4 4 4 4 4 4 5 6 
6 5 5 5 5 5 5 5 5 5 6 
6 6 6 6 6 6 6 6 6 6 6
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
          <p>This problem is not generally asked in the interviews but it is good to practice such problems for the sake of logic building. So, what we can observe from the above examples is that on the perimeter of the square, there is an integer no. N which decreases by 1 as we move inside the square level-wise. Since this cannot be printed directly, we print it in reverse fashion (0’s at the border of the square, then 1 in the inner perimeter, then 2, and so on ) and then subtract the whole pattern by N at the end which just makes the outermost perimeter filled with the number N, inner perimeter with N-1 and finally the centermost element with the integer 1. The outer and the inner loop will run for the same number of times ( since we have to print square) i.e, 2*N-1 times and the inner loop would print the numbers based on the logic as described below ( for N = 4 ):</p>
        </div>
        <div>
            <img src="https://static.takeuforward.org/wp/uploads/2023/03/Screenshot-2023-03-13-222516.png" alt class="wp-image-7873">
        </div>
        <div>
            <p>As per the above illustration, we take the minimum distance of the current cell from each of the ends of the square ( min(1,3,3,5) ) and make the current cell value equal to that number. </p>
            <ul>
                <li>The distance of the current cell from the top can be written as the row number i.e, <strong>i</strong>.</li>
                <li>The distance of the current cell from the left can be written as the column number i.e, <strong>j</strong>.</li>
                <li>The distance of the current cell from the right can be written as <strong>(2*n-2) - j</strong>.</li>
                <li>The distance of the current cell from the bottom can be written as <strong>(2*n-2) - i</strong>.</li>
            </ul>
        </div>
        <!-- yaha code karna hai  -->
        <div class="container my-5">
  <!-- Card for displaying the pattern and code -->
  <div class="card shadow">
    <!-- Title -->
    <h3 class="mb-4 text-start">Number Square Pattern with Decreasing Layers</h3>

    <!-- Buttons for toggling C++ and Java -->
    <div class="text-center mb-3 card-header d-flex justify-content-between align-items-center">
      <div>
        <button class="btn btn-outline-primary me-2" onclick="showCpp()">C++</button>
        <button class="btn btn-outline-success" onclick="showJava()">Java</button>
      </div>
      <div>
        <button id="CopyCppBtn" onclick="copyCode('CodeCpp22')" class="btn btn-sm btn-primary copy-btn">Copy</button>
        <button id="CopyJavaBtn" onclick="copyCode('CodeJava22')" class="btn btn-sm btn-success copy-btn d-none">Copy</button>
      </div>
    </div>

    <!-- C++ Code Block -->
    <div id="CodeCpp" class="code-content">
      <div id="CodeCpp22" class="code-box">
        <div><span class="keyword">#include</span> &lt;bits/stdc++.h&gt; <span class="comment">// Includes all standard C++ libraries</span></div>
        <div><span class="keyword">using namespace</span> std; <span class="comment">// Avoids using std:: prefix</span></div>
        <br>
        <div><span class="keyword">void</span> <span class="function">numberSquarePattern</span>(<span class="keyword">int</span> n) {</div>
        <div>  <span class="comment">// Outer loop for the rows of the square</span></div>
        <div>  <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; 2 * n - 1; i++) {</div>
        <div>    <span class="comment">// Inner loop for the columns of the square</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; 2 * n - 1; j++) {</div>
        <div>      <span class="comment">// Calculate minimum distance from the borders</span></div>
        <div>      <span class="keyword">int</span> top = i;</div>
        <div>      <span class="keyword">int</span> left = j;</div>
        <div>      <span class="keyword">int</span> right = (2 * n - 2) - j;</div>
        <div>      <span class="keyword">int</span> bottom = (2 * n - 2) - i;</div>
        <div>      <span class="comment">// Minimum distance to an edge subtracted from n gives the number</span></div>
        <div>      cout &lt;&lt; (n - min(min(top, bottom), min(left, right))) &lt;&lt; " ";</div>
        <div>    }</div>
        <div>    <span class="comment">// Line break after each row</span></div>
        <div>    cout &lt;&lt; endl;</div>
        <div>  }</div>
        <div>}</div>
        <br>
        <div><span class="keyword">int</span> <span class="function">main</span>() {</div>
        <div>  <span class="comment">// Define the size of the pattern</span></div>
        <div>  <span class="keyword">int</span> n = 5;</div>
        <div>  <span class="comment">// Call the function to print the pattern</span></div>
        <div>  numberSquarePattern(n);</div>
        <div>  <span class="keyword">return</span> 0;</div>
        <div>}</div>
      </div>
    </div>

    <!-- Java Code Block -->
    <div id="CodeJava" class="code-content d-none">
      <div id="CodeJava22" class="code-box">
        <div><span class="keyword">public class</span> <span class="class-name">Main</span> {</div>
        <div>  <span class="comment">// Function to print number square pattern with decreasing layers</span></div>
        <div>  <span class="keyword">static void</span> <span class="function">numberSquarePattern</span>(<span class="keyword">int</span> n) {</div>
        <div>    <span class="comment">// Outer loop for the rows of the square</span></div>
        <div>    <span class="keyword">for</span> (<span class="keyword">int</span> i = 0; i &lt; 2 * n - 1; i++) {</div>
        <div>      <span class="comment">// Inner loop for the columns of the square</span></div>
        <div>      <span class="keyword">for</span> (<span class="keyword">int</span> j = 0; j &lt; 2 * n - 1; j++) {</div>
        <div>        <span class="comment">// Calculate minimum distance from the edges</span></div>
        <div>        <span class="keyword">int</span> top = i;</div>
        <div>        <span class="keyword">int</span> left = j;</div>
        <div>        <span class="keyword">int</span> right = (2 * n - 2) - j;</div>
        <div>        <span class="keyword">int</span> bottom = (2 * n - 2) - i;</div>
        <div>        <span class="comment">// Compute the minimum and subtract from n to determine the number to print</span></div>
        <div>        System.out.print((n - Math.min(Math.min(top, bottom), Math.min(left, right))) + " ");</div>
        <div>      }</div>
        <div>      <span class="comment">// Move to next line after each row</span></div>
        <div>      System.out.println();</div>
        <div>    }</div>
        <div>  }</div>
        <br>
        <div>  <span class="comment">// Main method - entry point</span></div>
        <div>  <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String</span>[] args) {</div>
        <div>    <span class="comment">// Define the size of the square</span></div>
        <div>    <span class="keyword">int</span> n = 5;</div>
        <div>    <span class="comment">// Call function to display the pattern</span></div>
        <div>    numberSquarePattern(n);</div>
        <div>  }</div>
        <div>}</div>
      </div>
    </div>
  </div>
</div>



        <div>
          <pre>
<strong>Output: 
    
5 5 5 5 5 5 5 5 5 
5 4 4 4 4 4 4 4 5 
5 4 3 3 3 3 3 4 5 
5 4 3 2 2 2 3 4 5 
5 4 3 2 1 2 3 4 5 
5 4 3 2 2 2 3 4 5 
5 4 3 3 3 3 3 4 5 
5 4 4 4 4 4 4 4 5 
5 5 5 5 5 5 5 5 5
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