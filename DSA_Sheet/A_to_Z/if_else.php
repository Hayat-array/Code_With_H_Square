<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF/Else Statement</title>
</head>
<style>
    .code-container {
        font-family: 'Courier New', monospace;
        background-color: #1e1e1e;
        color: #ffffff;
        border-radius: 8px;
        padding: 10px;
        position: relative;
    }

    .keyword {
        color: rgb(216, 60, 148);
        font-weight: bold;
    }

    .function {
        color: #dcdcaa;
    }

    .string {
        color: #ce9178;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .br {
        border: 1px;
        border-radius: 10px;
    }

    .cpp {
        width: 80px;
        border-radius: 14px;
        border: 2px solid #1e131d;
        font-weight: bold;
        font-size: 22px;
        background-color: #b627ff;
        cursor: pointer;
    }

    .code-container {
        font-family: 'Courier New', monospace;
        background-color: #1e1e1e;
        color: #dcdcdc;
        border-radius: 10px;
        padding: 20px;
        width: 80%;
        max-width: 800px;
        display: block;
        overflow-x: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    .code-keyword {
        color: #569cd6;
        font-weight: bold;
    }

    .code-function {
        color: #dcdcaa;
    }

    .code-string {
        color: #ce9178;
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

    .code-btn-container {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        padding: 10px;
    }

    .code-btn {
        padding: 12px 24px;
        font-size: 16px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .code-btn:hover {
        background-color: #0056b3;
    }

    .code-cpp-btn {
        width: 80px;
        border-radius: 14px;
        border: 2px solid #1e131d;
        font-weight: bold;
        font-size: 22px;
        background-color: #b627ff;
        cursor: pointer;
    }

    .code-br {
        border: 1px;
        border-radius: 10px;
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
            <div class="col-9 ">
                <div class="p-3">
                    <h1 class="md-5"><strong>If-Else Statements</strong></h1>
                    <p class="md-3">In case you are learning DSA, you should definitely check out our free <span
                            style="color:red"><u>A2Z DSA Course</u></span> with videos and blogs.</p>
                    <p class="md-3">Conditional statements are a fundamental concept in programming that allows you to
                        make decisions based on certain conditions. These statements enable your code to <strong>execute
                            different blocks of code </strong>depending on whether <strong> specific conditions</strong>
                        are met or not. In this blog post, we'll delve into the basics of<strong> conditional statements
                        </strong>, starting with the ubiquitous <strong>if-else </strong>statement and gradually
                        exploring more complex scenarios.</p>
                    <h5><strong>The `if-else` Statement </strong></h5>
                    <img src="https://static.takeuforward.org/wp/uploads/2023/09/if-else.png" alt=""
                        style="width:500px">
                    <p class="md-2"><strong>'if statement'</strong> is used to execute a block of code only if a certain
                        condition is met. It allows us to conditionally execute code based on whether the specified
                        condition is true.</p>
                    <p><strong>'else statement'</strong>, on the other hand, is an optional companion to the if
                        statement. It specifies what code to execute if the condition in the if statement is not met
                        (i.e. if it is false).</p>
                    <div class="md-2">Let's break down the flow of control:</div>
                    <ul>
                        <li>If the test condition in the if statement is true, a block of code inside the if block will
                            be executed.</li>
                        <li>If the test condition is false, the code inside the else block (if present) will be
                            executed.</li>
                    </ul>
                </div>
                <!-- yaha div katm -->


                <div class="container my-5 p-3">
                    <button type="button" class="btn btn-primary">C++</button>
                    <div class="card code-container p-3 mb-3">
                        <div class="card-body z-1 bg-black br mb-3">
                            <button class="btn btn-success position-absolute top-0 end-0 m-2"
                                onclick="copyCode()">Copy</button>
                            <pre id="cppCode" class="mb-3 p-2">
<span class="keyword">#include&lt;bits/stdc++.h&gt;</span>
<span class="keyword">using namespace std;</span>

<span class="keyword">int main()</span> <span class="function">{</span>
    <span class="function">int age = 10;</span>

    <span class="keyword">if</span> (age >= 18) <span class="function">{</span>
        <span class="function">cout << <span class="string">"You are an adult."</span> << endl;</span>
        <span class="function">}</span> <span class="keyword">else</span> {
        <span class="function">cout << <span class="string">"You are not an adult."</span> << endl;</span>
    <span class="function"> }</span>
<span class="function">}</span>
        </pre>
                        </div>
                    </div>
                    <!-- yaha per hi likhna hai -->
                    <div class="top-3 mb-3" style="mb-3">
                        <p><strong>Output: </strong> You are not an adult.</p>
                        <img src="https://static.takeuforward.org/wp/uploads/2023/09/if-else-age.png" alt=""
                            style="width:500px">
                    </div>
                    <div class="mb-3">
                        <p>In this example, we take the <strong>user's age as input </strong>and use an <strong>if
                                statement</strong> to check if the age is greater than or equal to 18. If the condition
                            is true, it prints "You are an adult," and if it's false ie. the <strong>'else'</strong>
                            condition is satisfied, it prints "You are not an adult."</p>
                        <h6><b>Simplifying Code with "else if"</b></h6>
                        <p class="mb-3">As your code becomes more complex, you'll often encounter scenarios where you
                            need to check multiple conditions. Instead of writing multiple independent if statements,
                            you can streamline your code using else if statements.</p>
                        <p class="mb-3">Let's say we want to grade students based on their marks within specific ranges:
                        </p>
                        <!-- yaha se shuru hua hai -->
                        <div class="code-btn-container">
                            <button class="code-btn code-btn-cpp" onclick="showCode('cppCodeBlock')">C++</button>
                            <button class="code-btn code-btn-java" onclick="showCode('javaCodeBlock')">Java</button>
                            <!-- <button class="btn btn-success position-absolute top-0 end-0 m-2 card-body z-1 bg-black br mb-3" onclick="copyCode()">Copy</button> -->
                        </div>

                        <div id="cppCodeBlock" class="code-container" style="display: block;">
                            <pre>
<span class="code-keyword">#include &lt;iostream&gt;</span>
<span class="code-keyword">using namespace std;</span>

<span class="code-keyword">int</span> main() {
    <span class="code-function">int marks = 54;</span>

    <span class="code-keyword">if</span> (marks < 25) {
        <span class="code-function">cout << <span class="code-string">"Grade: F"</span> << endl;</span>
    } <span class="code-keyword">else if</span> (marks >= 25 && marks <= 44) {
        <span class="code-function">cout << <span class="code-string">"Grade: E"</span> << endl;</span>
    } <span class="code-keyword">else if</span> (marks >= 45 && marks <= 49) {
        <span class="code-function">cout << <span class="code-string">"Grade: D"</span> << endl;</span>
    } <span class="code-keyword">else if</span> (marks >= 50 && marks <= 59) {
        <span class="code-function">cout << <span class="code-string">"Grade: C"</span> << endl;</span>
    } <span class="code-keyword">else if</span> (marks >= 60 && marks <= 69) {
        <span class="code-function">cout << <span class="code-string">"Grade: B"</span> << endl;</span>
    } <span class="code-keyword">else if</span> (marks >= 70) {
        <span class="code-function">cout << <span class="code-string">"Grade: A"</span> << endl;</span>
    } <span class="code-keyword">else</span> {
        <span class="code-function">cout << <span class="code-string">"Invalid marks entered."</span> << endl;</span>
    }
    <span class="code-keyword">return</span> <span class="code-keyword">0</span>;
}
        </pre>
                        </div>
                        <!-- java content -->
                        <div id="javaCodeBlock" class="code-container" style="display: none;">
                            <pre>
<span class="code-keyword">import java.util.Scanner;</span>

<span class="code-keyword">public class</span> Main {
    <span class="code-keyword">public static void</span> main(String[] args) {
        <span class="code-function">int marks = 54;</span>

        <span class="code-keyword">if</span> (marks < 25) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: F"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 25 && marks <= 44) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: E"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 45 && marks <= 49) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: D"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 50 && marks <= 59) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: C"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 60 && marks <= 69) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: B"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 70) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: A"</span>);</span>
        } <span class="code-keyword">else</span> {
            <span class="code-function">System.out.println(<span class="code-string">"Invalid marks entered."</span>);</span>
        }
    }
}
        </pre>
                        </div>

                        <!-- yaha katm hua hai  -->
                        <p class="m-3"><strong>Output:</strong> Grade: C</p>
                        <img src="https://static.takeuforward.org/wp/uploads/2023/09/if-else-long-1024x850.png" alt
                            class="wp-image-12583" width="768" height="638">
                        <div>
                            <ul>
                                <li>If marks are less than 25, it prints "Grade: F."</li>
                                <li>If marks are between 25 and 44 (inclusive), it prints "Grade: E."</li>
                                <li>If marks are between 45 and 49 (inclusive), it prints "Grade: D."</li>
                                <li>If marks are between 50 and 59 (inclusive), it prints "Grade: C."</li>
                                <li>If marks are between 60 and 69 (inclusive), it prints "Grade: B."</li>
                                <li>If marks are 70 or higher, it prints "Grade: A."</li>
                                <li>If marks are outside the valid range, it prints "Invalid marks entered."</li>
                            </ul>
                            <p class="mb-3">The provided code for grading based on marks is functional, but it
                                <strong>can be simplified </strong> for better readability and maintainability. In the
                                current code, there are <strong>several redundant comparisons</strong> of marks with
                                specific values. For example, when checking for grades E, C, B, and A, you have to
                                <strong> repeatedly check</strong> marks >= X && marks <= Y, which can be error-prone
                                    and hard to maintain as the grade ranges change.</p>
                                    <p class="mb-3">We can refactor the code, we can <strong>remove the lower
                                            bounds</strong> and check only the <strong>upper bounds</strong> for each
                                        grade as the code flow is such that we move along the conditions only after
                                        satisfying the previous one.</p>
                        </div>
                        <h4><b>Code:</b></h4>
                        <!-- yaha se code likhna hai -->
                        <div class="code-btn-container">
                            <button class="code-btn code-btn-cpp" onclick="toggleCode('cppContent')">C++</button>
                            <button class="code-btn code-btn-java" onclick="toggleCode('javaContent')">Java</button>
                            <!-- <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button> -->
                        </div>

                        <div id="cppContent" class="code-container" style="display: block;">
                            <pre>
<span class="code-keyword">#include &lt;iostream&gt;</span>
<span class="code-keyword">using namespace std;</span>

<span class="code-keyword">int</span> main() {
    <span class="code-function">int marks = 54;</span>
    <span class="code-function">char grade;</span>

    <span class="code-keyword">if</span> (marks < 25) {
        <span class="code-function">grade = <span class="code-string">'F'</span>;</span>
    } <span class="code-keyword">else if</span> (marks <= 44) {
        <span class="code-function">grade = <span class="code-string">'E'</span>;</span>
    } <span class="code-keyword">else if</span> (marks <= 49) {
        <span class="code-function">grade = <span class="code-string">'D'</span>;</span>
    } <span class="code-keyword">else if</span> (marks <= 59) {
        <span class="code-function">grade = <span class="code-string">'C'</span>;</span>
    } <span class="code-keyword">else if</span> (marks <= 69) {
        <span class="code-function">cout << <span class="code-string">'B'</span>;</span>
    } <span class="code-keyword">else if</span> (marks >= 70) {
        <span class="code-function">grade =<span class="code-string">'A'</span>;</span>
    } <span class="code-keyword">else</span> {
        <span class="code-function">grade =<span class="code-string">"Invalid marks entered."</span>;</span>
    }

    <span class="code-keyword">return</span> <span class="code-keyword">0</span>;
}
        </pre>
                        </div>

                        <div id="javaContent" class="code-container e" style="display: none;">
                            <pre>
<span class="code-keyword">import java.util.Scanner;</span>

<span class="code-keyword">public class</span> Main {
    <span class="code-keyword">public static void</span> main(String[] args) {
        <span class="code-function">int marks=54;</span>

        <span class="code-function">char grade;</span>

        <span class="code-keyword">if</span> (marks < 25) {
            <span class="code-function">grade = <span class="code-string">'F'</span>;</span>
        } <span class="code-keyword">else if</span> (marks <= 44) {
            <span class="code-function">grade = <span class="code-string">'E'</span>;</span>
        } <span class="code-keyword">else if</span> (marks <= 49) {
            <span class="code-function">grade = <span class="code-string">'D'</span>;</span>
        } <span class="code-keyword">else if</span> (marks <= 59) {
            <span class="code-function">grade = <span class="code-string">'C'</span>;</span>
        } <span class="code-keyword">else if</span> (marks <= 69) {
            <span class="code-function">System.out.println(<span class="code-string">"Grade: B"</span>);</span>
        } <span class="code-keyword">else if</span> (marks >= 70) {
            <span class="code-function">grade = <span class="code-string">'A'</span>;</span>
        } <span class="code-keyword">else</span> {
            <span class="code-function">System.out.println(<span class="code-string">"Invalid marks entered."</span>);</span>
        }
    }
}
        </pre>
                        </div>

                        <p class="m-4"><strong>Output:</strong> Grade: C</p>
                        <p class="m-4">Conditional statements are indispensable tools for <strong>controlling the flow
                                of your program</strong>. Whether you're making simple decisions or handling complex
                            logic, if-else statements and their variants empower you to write code that <strong>responds
                                dynamically to changing conditions</strong>. Mastering these fundamentals is essential
                            for any aspiring programmer.</p>
                        <!-- yaha katm hai  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
    <script>
        function copyCode() {
            var code = document.getElementById("cppCodeBlock").textContent;
            var textArea = document.createElement("textarea");
            textArea.value = code;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert("Code copied to clipboard!");
        }
    </script>
    <script>
        function copyCode() {
            var code = document.getElementById("javaCodeBlock").textContent;
            var textArea = document.createElement("textarea");
            textArea.value = code;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert("Code copied to clipboard!");
        }
    </script>
    <script>
        function showCode(codeBlockId) {
            var cppCodeBlock = document.getElementById('cppCodeBlock');
            var javaCodeBlock = document.getElementById('javaCodeBlock');

            if (codeBlockId === 'cppCodeBlock') {
                cppCodeBlock.style.display = 'block';
                javaCodeBlock.style.display = 'none';
            } else if (codeBlockId === 'javaCodeBlock') {
                cppCodeBlock.style.display = 'none';
                javaCodeBlock.style.display = 'block';
            }
        }
    </script>
    <script>
        function toggleCode(contentId) {
            var cppContent = document.getElementById('cppContent');
            var javaContent = document.getElementById('javaContent');

            if (contentId === 'cppContent') {
                cppContent.style.display = 'block';
                javaContent.style.display = 'none';
            } else if (contentId === 'javaContent') {
                cppContent.style.display = 'none';
                javaContent.style.display = 'block';
            }
        }
    </script>

</body>

</html>