<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Case</title>
</head>
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
    background-color: #111;
    color: rgb(236, 244, 252);
    font-family: "Courier New", Courier, monospace;
    font-size: 1rem;
    border-radius: 10px;
    white-space: pre-wrap;
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

<body>
  <?php include("../../header.php")?>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar (Sabbir) -->
      <div class="col-3 p-3 border-end">
        <b>Sabbir</b>
      </div>
      <!-- Main Content (Navbar) -->
      <div class="col-8">
        <div>
          <h1 class="p-3 mb-3"><b>Switch Case Statements</b></h1>
          <ul>
            <p>In case you are learning DSA, you should definitely check out our free <span style="color:red"><u>A2Z DSA
                  Course.</u></span></p>
          </ul>
        </div>
        <div>
          <ul>
            <p>If-else statements are like the Swiss Army knife of decision-making. They offer flexibility
              and
              can handle a wide range of conditions and branching logic. You can use them when you need to
              <strong> evaluate complex conditions</strong> or when <strong>conditions aren't based on
                simple
                equality checks</strong>. If-else statements are often the preferred choice for
              scenarios
              where the <strong> conditions are not easily enumerable </strong>or where you need to
              execute
              different blocks of code based on various conditions. <br>
              On the other hand, <strong> switch statements shine when you have a single variable to
                compare
                against multiple distinct values</strong>. They are concise, making the code cleaner and
              more structured. So, if-else statements and switch statements can complement each other,
              with
              if-else statements handling complex conditions and switch statements simplifying cases with
              multiple exact matches.
            </p>
          </ul>
        </div>
        <div>
          <h5><b>The ‘Switch’ Statement</b></h5>
          <img src="https://static.takeuforward.org/wp/uploads/2023/09/switch-case.png" alt class="wp-image-12586"
            width="401" height="463">
          <p>To illustrate the switch statement, let's consider a common problem: given a number between 1 and
            7, print the corresponding day of the week. Here's how we can use the switch statement for this
            task:</p>
        </div>
        <div>
          <h5><b>Code:</b></h5>

          <div class="container my-5">
            <!-- Language Buttons -->
            <div class="code-btn-container">
              <button class="code-btn code-btn-cpp" onclick="toggleCode('cppContent')">C++</button>
              <button class="code-btn code-btn-java" onclick="toggleCode('javaContent')">Java</button>
            </div>

            <!-- C++ Section -->
            <div id="cppContent" class="code-block" style="display: block;">
              <div class="p-1 cpp backgound-white">C++</div>
              <div class="card code-container">
                <div class="card-body z-1 bg-black br">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('cppCode')">Copy</button>
                  <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="keyword">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> <span class="variable">day</span> = 4;

    <span class="keyword">switch</span> (<span class="variable">day</span>) {
        <span class="keyword">case</span> 1:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Monday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 2:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Tuesday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 3:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Wednesday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 4:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Thursday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 5:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Friday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 6:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Saturday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 7:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Sunday"</span>;
            <span class="keyword">break</span>;
        <span class="keyword">default</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Invalid"</span>;
    }

    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
                </div>
              </div>
            </div>

            <!-- Java Section -->
            <div id="javaContent" class="code-block" style="display: none;">
              <div class="p-1 cpp backgound-white">Java</div>
              <div class="card code-container">
                <div class="card-body z-1 bg-black br">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('javaCode')">Copy</button>
                  <pre id="javaCode" class="mb-0 p-3">
<span class="keyword">import</span> <span class="package">java.util.Scanner</span>;

<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">int</span> <span class="variable">day</span>;
        <span class="class">Scanner</span> <span class="variable">scanner</span> = <span class="keyword">new</span> <span class="class">Scanner</span>(<span class="keyword">System.in</span>);
        
        <span class="class">System.out</span>.print(<span class="string">"Enter a number (1-7): "</span>);
        <span class="variable">day</span> = <span class="variable">scanner</span>.nextInt();

        <span class="keyword">switch</span> (<span class="variable">day</span>) {
            <span class="keyword">case</span> 1:
                <span class="class">System.out</span>.println(<span class="string">"Monday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 2:
                <span class="class">System.out</span>.println(<span class="string">"Tuesday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 3:
                <span class="class">System.out</span>.println(<span class="string">"Wednesday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 4:
                <span class="class">System.out</span>.println(<span class="string">"Thursday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 5:
                <span class="class">System.out</span>.println(<span class="string">"Friday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 6:
                <span class="class">System.out</span>.println(<span class="string">"Saturday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 7:
                <span class="class">System.out</span>.println(<span class="string">"Sunday"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">default</span>:
                <span class="class">System.out</span>.println(<span class="string">"Invalid"</span>);
        }

        <span class="variable">scanner</span>.close();
    }
}
                </pre>
                </div>
              </div>
            </div>
          </div>


          <!-- yaha katm ho raha hai code  -->
          <div class="mb-3"><strong>Output:</strong> Thursday</div>
          <div>
            <ul>
              <p>In this example, if you set the <strong>day </strong> variable to 4, it will print
                <strong>
                  "Thursday"</strong> since it matches the case 4 statement. <strong>The break
                  statement
                  is crucial</strong>; it ensures that the switch statement exits after the matching
                case
                is executed, preventing the execution of subsequent cases.
              </p>
              <p><strong><b>The Default Case: </b></strong> The default case serves as a <strong>safety
                  net</strong>. If <strong>none of the cases match</strong> the expression, the code
                inside the <strong>default block will execute</strong>. In our example, if you input a
                number outside the range of 1 to 7, it will print "Invalid."</p>
              <p>Key Considerations for Switch Case Statements:</p>
            </ul>
          </div>

          <div>
            <ul>
              <li><strong>Requirement for a Constant Expression</strong></li>
              <p>A switch statement necessitates that its expression results in a constant value. This can
                include constants and arithmetic operations.</p>
            </ul>
          </div>
          <h5><b>Code:</b></h5>

          <div class="container my-5">
            <!-- Language Buttons -->
            <div class="code-btn-container mb-3">
              <button class="code-btn code-btn-cpp" onclick="toggleCode('cppResultContent')">C++</button>
              <button class="code-btn code-btn-java" onclick="toggleCode('javaResultContent')">Java</button>
            </div>

            <!-- C++ Section -->
            <div id="cppResultContent" class="code-block" style="display: block;">
              <div class="p-1 cpp backgound-white">C++</div>
              <div class="card code-container">
                <div class="card-body z-1 bg-black br position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('cppResultCode')">Copy</button>
                  <pre id="cppResultCode" class="mb-0 p-3 text-white">
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">const int</span> <span class="variable">x</span> = 10;
    <span class="keyword">const int</span> <span class="variable">y</span> = 5;

    <span class="keyword">switch</span> (<span class="variable">x</span> + <span class="variable">y</span>) {
        <span class="keyword">case</span> 15:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Result is 15."</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 20:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Result is 20."</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="keyword">default</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"No match found."</span> <span class="function"><<</span> <span class="class">endl</span>;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
                </pre>
                </div>
              </div>
            </div>

            <!-- Java Section -->
            <div id="javaResultContent" class="code-block" style="display: none;">
              <div class="p-1 cpp backgound-white">Java</div>
              <div class="card code-container">
                <div class="card-body z-1 bg-black br position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('javaResultCode')">Copy</button>
                  <pre id="javaResultCode" class="mb-0 p-3 text-white">
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">final int</span> <span class="variable">x</span> = 10;
        <span class="keyword">final int</span> <span class="variable">y</span> = 5;

        <span class="keyword">switch</span> (<span class="variable">x</span> + <span class="variable">y</span>) {
            <span class="keyword">case</span> 15:
                <span class="class">System.out</span>.println(<span class="string">"Result is 15."</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 20:
                <span class="class">System.out</span>.println(<span class="string">"Result is 20."</span>);
                <span class="keyword">break</span>;
            <span class="keyword">default</span>:
                <span class="class">System.out</span>.println(<span class="string">"No match found."</span>);
        }
    }
}
                </pre>
                </div>
              </div>
            </div>

            <!-- Output -->
            <div class="mb-3 mt-2" style="color:black"><strong>Output:</strong> Result is 15.</div>

          </div>
          <div>
            <ul>
              <li><strong>Limited to Integer or Character Types</strong></li>
              <p>
                Switch statements are exclusively designed to handle integer or character values. Ensure that the
                expression provides values of type int or char.
              </p>
            </ul>
          </div>

          <!-- yaha se shuru hoga code  -->
          <h5><b>Code:</b></h5>

          <div class="container my-4">
            <!-- Language Buttons -->
            <div class="code-btn-container mb-3">
              <button class="btn btn-primary" onclick="toggleCode('cppBlock')">C++</button>
              <button class="btn btn-warning" onclick="toggleCode('javaBlock')">Java</button>
            </div>

            <!-- C++ Code Block -->
            <div id="cppBlock" class="code-block active">
              <div class="card bg-dark text-white">
                <div class="card-body position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('cppCode')">Copy</button>
                  <pre id="cppCode" class="p-3 mb-0"><code>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">char</span> <span class="variable">grade</span> = <span class="string">'B'</span>;

    <span class="keyword">switch</span> (<span class="variable">grade</span>) {
        <span class="keyword">case</span> <span class="string">'A'</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Excellent!"</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> <span class="string">'B'</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Good!"</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="keyword">default</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Not specified."</span> <span class="function"><<</span> <span class="class">endl</span>;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
                </div>
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="javaBlock" class="code-block">
              <div class="card bg-dark text-white">
                <div class="card-body position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('javaCode')">Copy</button>
                  <pre id="javaCode" class="p-3 mb-0"><code>
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">char</span> <span class="variable">grade</span> = <span class="string">'B'</span>;

        <span class="keyword">switch</span> (<span class="variable">grade</span>) {
            <span class="keyword">case</span> <span class="string">'A'</span>:
                <span class="class">System.out</span>.println(<span class="string">"Excellent!"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> <span class="string">'B'</span>:
                <span class="class">System.out</span>.println(<span class="string">"Good!"</span>);
                <span class="keyword">break</span>;
            <span class="keyword">default</span>:
                <span class="class">System.out</span>.println(<span class="string">"Not specified."</span>);
        }
    }
}
</code></pre>
                </div>
              </div>
            </div>
          </div>

          <!-- Output -->
          <div class="mt-3 mb-5"><strong>Output:</strong> Good!</div>

          <div>
            <ul>
              <li><strong>Significance of the 'Break' Keyword</strong></li>

              <p> The 'break' keyword holds significant importance within switch cases. It serves as an
                exit
                mechanism from the switch statement. Its omission implies the execution of all
                subsequent
                cases.</p>
            </ul>
          </div>
          <div>
            <ul>
              <li> <strong>Optional Default Case</strong></li>
              <p> Optionally, you can include a 'default' case, which executes when none of the case
                values
                match. It's not obligatory and can be excluded if not needed.</p>
            </ul>
          </div>
          <div>
            <ul>
              <li><strong>Prohibition of Duplicate Case Values</strong> </li>
              <p>Within a switch statement in C++, duplicates of case values are disallowed. Each case
                value
                must be distinct</p>
            </ul>
          </div>
          <h5><b>Code:</b></h5>

          <div class="container my-4">
            <!-- Language Buttons -->
            <div class="code-btn-container mb-3">
              <button class="btn btn-primary" onclick="toggleCode('dayCppBlock')">C++</button>
              <button class="btn btn-warning" onclick="toggleCode('dayJavaBlock')">Java</button>
            </div>

            <!-- C++ Code Block -->
            <div id="dayCppBlock" class="code-block active">
              <div class="card bg-dark text-white">
                <div class="card-body position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('dayCppCode')">Copy</button>
                  <pre id="dayCppCode" class="p-3 mb-0"><code>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> <span class="variable">day</span> = 2;

    <span class="keyword">switch</span> (<span class="variable">day</span>) {
        <span class="keyword">case</span> 1:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Monday."</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="keyword">case</span> 2:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Tuesday."</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">break</span>;
        <span class="comment">// case 2: Duplicate case not allowed</span>
        <span class="keyword">default</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"Invalid day."</span> <span class="function"><<</span> <span class="class">endl</span>;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
                </div>
              </div>
            </div>

            <!-- Java Code Block -->
            <div id="dayJavaBlock" class="code-block">
              <div class="card bg-dark text-white">
                <div class="card-body position-relative">
                  <button class="btn btn-success position-absolute top-0 end-0 m-2"
                    onclick="copyCode('dayJavaCode')">Copy</button>
                  <pre id="dayJavaCode" class="p-3 mb-0"><code>
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">int</span> <span class="variable">day</span> = 2;

        <span class="keyword">switch</span> (<span class="variable">day</span>) {
            <span class="keyword">case</span> 1:
                <span class="class">System.out</span>.println(<span class="string">"Monday."</span>);
                <span class="keyword">break</span>;
            <span class="keyword">case</span> 2:
                <span class="class">System.out</span>.println(<span class="string">"Tuesday."</span>);
                <span class="keyword">break</span>;
            <span class="comment">// case 2: Duplicate case not allowed</span>
            <span class="keyword">default</span>:
                <span class="class">System.out</span>.println(<span class="string">"Invalid day."</span>);
        }
    }
}
</code></pre>
                </div>
              </div>
            </div>


            <!-- Output -->
            <div class="mt-3" style="color:black"><strong>Output:</strong> Tuesday.</div>
          </div>
          <ul>
            <li>
              <strong>Potential for Nested Switch Statements</strong>
            </li>
            <p>While it's possible to nest one switch statement inside another in C++, this practice is generally
              discouraged due to its potential to introduce complexity and hinder code readability.</p>
          </ul>
        </div>
        <h5><b>Code:</b></h5>

        <div class="container my-4">
          <!-- Language Buttons -->
          <div class="code-btn-container mb-3">
            <button class="btn btn-primary" onclick="toggleCode('nestedCppBlock')">C++</button>
            <button class="btn btn-warning" onclick="toggleCode('nestedJavaBlock')">Java</button>
          </div>

          <!-- C++ Code Block -->
          <div id="nestedCppBlock" class="code-block active">
            <div class="card bg-dark text-white">
              <div class="card-body position-relative">
                <button class="btn btn-success position-absolute top-0 end-0 m-2"
                  onclick="copyCode('nestedCppCode')">Copy</button>
                <pre id="nestedCppCode" class="p-3 mb-0"><code>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
<span class="keyword">using</span> <span class="keyword">namespace</span> <span class="class">std</span>;

<span class="keyword">int</span> <span class="function">main</span>() {
    <span class="keyword">int</span> <span class="variable">x</span> = <span class="number">2</span>;
    <span class="keyword">int</span> <span class="variable">y</span> = <span class="number">3</span>;

    <span class="keyword">switch</span> (<span class="variable">x</span>) {
        <span class="keyword">case</span> <span class="number">1</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"x is 1."</span> <span class="function"><<</span> <span class="class">endl</span>;
            <span class="keyword">switch</span> (<span class="variable">y</span>) {
                <span class="keyword">case</span> <span class="number">1</span>:
                    <span class="function">cout</span> <span class="function"><<</span> <span class="string">"y is 1."</span> <span class="function"><<</span> <span class="class">endl</span>;
                    <span class="keyword">break</span>;
                <span class="keyword">default</span>:
                    <span class="function">cout</span> <span class="function"><<</span> <span class="string">"y is not 1."</span> <span class="function"><<</span> <span class="class">endl</span>;
            }
            <span class="keyword">break</span>;
        <span class="keyword">default</span>:
            <span class="function">cout</span> <span class="function"><<</span> <span class="string">"x is not 1."</span> <span class="function"><<</span> <span class="class">endl</span>;
    }

    <span class="keyword">return</span> <span class="number">0</span>;
}
</code></pre>
              </div>
            </div>
          </div>

          <!-- Java Code Block -->
          <div id="nestedJavaBlock" class="code-block">
            <div class="card bg-dark text-white">
              <div class="card-body position-relative">
                <button class="btn btn-success position-absolute top-0 end-0 m-2"
                  onclick="copyCode('nestedJavaCode')">Copy</button>
                <pre id="nestedJavaCode" class="p-3 mb-0"><code>
<span class="keyword">public class</span> <span class="class">Main</span> {
    <span class="keyword">public static void</span> <span class="function">main</span>(<span class="keyword">String[]</span> <span class="variable">args</span>) {
        <span class="keyword">int</span> <span class="variable">x</span> = <span class="number">2</span>;
        <span class="keyword">int</span> <span class="variable">y</span> = <span class="number">3</span>;

        <span class="keyword">switch</span> (<span class="variable">x</span>) {
            <span class="keyword">case</span> <span class="number">1</span>:
                <span class="class">System.out</span>.println(<span class="string">"x is 1."</span>);
                <span class="keyword">switch</span> (<span class="variable">y</span>) {
                    <span class="keyword">case</span> <span class="number">1</span>:
                        <span class="class">System.out</span>.println(<span class="string">"y is 1."</span>);
                        <span class="keyword">break</span>;
                    <span class="keyword">default</span>:
                        <span class="class">System.out</span>.println(<span class="string">"y is not 1."</span>);
                }
                <span class="keyword">break</span>;
            <span class="keyword">default</span>:
                <span class="class">System.out</span>.println(<span class="string">"x is not 1."</span>);
        }
    }
}
</code></pre>
              </div>
            </div>
          </div>
        </div>
        <!-- Output -->
        <div class="mt-3"><strong>Output:</strong> x is not 1.</div>
      </div>
    </div>
    <!-- copy function -->
    <script>
      function copyCode() {
        var code = document.getElementById("cppCode").textContent;
        var textArea = document.createElement("textarea");
        textArea.value = code;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert("Code copied to clipboard!");
      }
    </script>
    <!-- JavaScript for Toggle and Copy -->
    <script>
      function toggleCode(id) {
        document.getElementById('cppContent').style.display = 'none';
        document.getElementById('javaContent').style.display = 'none';
        document.getElementById(id).style.display = 'block';
      }

      function copyCode(codeId) {
        const code = document.getElementById(codeId).innerText;
        navigator.clipboard.writeText(code).then(() => {
          alert("Code copied to clipboard!");
        });
      }
    </script>
    <!-- Toggle & Copy Scripts -->
    <script>
      function toggleCode(id) {
        document.getElementById("cppResultContent").style.display = "none";
        document.getElementById("javaResultContent").style.display = "none";
        document.getElementById(id).style.display = "block";
      }

      function copyCode(id) {
        const text = document.getElementById(id).innerText;
        navigator.clipboard.writeText(text).then(() => {
          alert("Code copied to clipboard!");
        });
      }
    </script>
    <script>
      function toggleCode(id) {
        document.getElementById("cppResultContent").style.display = "none";
        document.getElementById("javaResultContent").style.display = "none";
        document.getElementById(id).style.display = "block";
      }

      function copyCode(id) {
        const codeElement = document.getElementById(id);
        const text = codeElement.textContent || codeElement.innerText;

        const textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        try {
          document.execCommand("copy");
          alert("Code copied to clipboard!");
        } catch (err) {
          alert("Failed to copy code.");
        }
        document.body.removeChild(textarea);
      }
    </script>
    <script>
      function toggleCode(id) {
        document.querySelectorAll('.code-block').forEach(el => el.classList.remove('active'));
        document.getElementById(id).classList.add('active');
      }

      function copyCode(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
          alert("Code copied!");
        });
      }
    </script>
    <script>
      function toggleCode(id) {
        document.querySelectorAll('.code-block').forEach(el => el.classList.remove('active'));
        document.getElementById(id).classList.add('active');
      }

      function copyCode(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
          alert("Code copied!");
        });
      }
    </script>
    <script>
      function toggleCode(id) {
        document.querySelectorAll('.code-block').forEach(el => el.classList.remove('active'));
        document.getElementById(id).classList.add('active');
      }

      function copyCode(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
          alert("Code copied!");
        });
      }
    </script>
    <script>
      // Toggle Code Blocks
      function toggleCode(blockId) {
        // Hide all code blocks
        const allBlocks = document.querySelectorAll('.code-block');
        allBlocks.forEach(block => block.style.display = 'none');

        // Show the selected block
        const activeBlock = document.getElementById(blockId);
        if (activeBlock) {
          activeBlock.style.display = 'block';
        }
      }

      // Copy Code Function
      <script>
    // Toggle Code Blocks
        function toggleCode(bl) {
        // Hide all code blocks
        const allBlocks = document.querySelectorAll('.code-block');
        allBlocks.forEach(block => block.style.display = 'none');

        // Show the selected block
        const activeBlock = document.getElementById(bl);
        if (activeBlock) {
          activeBlock.style.display = 'block';
        }
    }

    </script>



</body>

</html>