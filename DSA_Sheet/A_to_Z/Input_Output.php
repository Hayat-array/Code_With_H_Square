<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input / Output</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .code-container {
            position: relative;
            background-color: #2c2c2c; /* Light black background for the code block */
            border-radius: 8px;
        }

        pre {
            color:rgb(82, 154, 19); /* Default light text color inside the code block */
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        button {
            z-index: 10; /* Keep button on top */
        }

        /* Color classes for specific code elements */
        .keyword {
            color:rgb(216, 60, 148); /* Red for keywords like #include */
        }

        .function {
            color: #1e90ff; /* Blue for functions like std::cout */
        }

        .string {
            color: #32cd32; /* Green for strings like "Hey, Striver!" */
        }
        .br{
            border:1px;
            border-radius:10px;
        }
        .cpp{
            width: 80px;
            border-radius: 14px;
            border: 2px solid #1e131d;
            font-weight: bold;
            font-size: 22px;
            background-color: #b627ff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include("../../header.php"); ?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-3 p-3 border-end">
            <b>Sabbir</b>
        </div>
        <div class="col-8">
            <div class="p-3">
                <h1><b>C++ Basic Input/Output</b></h1>
                <div>In case you are learning DSA, you should definitely check out our free A2Z DSA Course with videos and blogs.</div>
                <br>
                <div>In case you want to read basic <b>input/output</b> in <b style="color:red"><u>Java</b></u> and <b style="color:red"><u>Python.</u></b></div><br>
                <p>When you embark on your C++ programming journey, it's perfectly okay not to dive too deep into the intricacies of the language right from the start. In fact, it's advisable to initially focus on grasping the big picture and building a strong foundation. In this guide, we'll walk you through the basic skeleton of a C++ program and the essential components you need to know to get started.</p>
                <h2 ><b>Including Libraries</b></h2>
                <p>C++ is a versatile language, and it relies on libraries to access various functionalities. To perform tasks like input and output, we include specific libraries at the beginning of our code. For instance, <strong>#include< iostream ></strong> is used for input and output operations, while <strong>#include< math.h ></strong> allows us to use mathematical functions. Simply put, libraries provide pre-built functions and tools for us to use in our code.</p>
                <h2><b>The Generic Skeleton</b></h2>
                <p>The generic skeleton of a C++ program consists of two main components: the <strong>library inclusion</strong> and the <strong>main function.</strong> After including the necessary libraries, you declare the main function using int main() { /* Your code here */ return 0; }. This serves as the entry point for your program.</p>
            </div>
            <pre class=" btn-group p-3 w-25 text-start col-12 col-sm-8 col-lg-4 d-flex flex-column gap-1 bg-white  flex-column gap-1 shadow-sm p-3 rounded-3 border border-light">
    #include< iostream>
    int main() {
    // Your code here
    return 0;
    }
            </pre>
            <h2><b>Output with cout</b></h2>
            <p>To display output in C++, you'll commonly use the cout function from the iostream library. However, you need to specify that it belongs to the std (standard) namespace. For instance, <strong>std::cout << "Hey, Code With H-Square!";</strong> will print "Hey, Striver!" to the console. You enclose the text you want to display within double quotation marks.</p>
            <h5><b>Code:</b></h5>
            <!-- code likhna hai yaha per  -->
             <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>

<span class="keyword">int</span> main() {
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>

             <p><strong>Output:</strong> Hey, Code With H-Square!</p>
             <br>
             <br>
             <br>
             <br>
             <br>
             <p>If we want to print <strong>Hey, Code With H-Square!</strong>  twice in 2 lines and we write <strong>std::cout << "Hey, Code With H-Square!";</strong>  again and again then it will print it consecutively on the same line.</p>
             <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>

<span class="keyword">int</span> main() {
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
             <p><strong>Output:</strong> Hey, Code With H-Square! Hey, Code With H-Square!</p>
             <p>You can use the <b>newline character \n</b> to insert a <b>line break</b> within a single std::cout statement. Here's the code and its corresponding terminal output:</p>
             <h5><b>Code:</b></h5>
             <br>
             <p>[tabby title="C++ Code"]</p>
             <!-- yaha bhi code likhna hai -->
             <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>

<span class="keyword">int</span> main() {
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
             <p><strong>Output:</strong><br> Hey, Code With H-Square!</p> <br>
             <p> Hey, Code With H-Square!</p><br>
             <p>As you can see, the newline character \n inserts a line break, but the second "Hey, Striver!" is still on the same line as the first one.</p>
             <p>You can also use <strong>std::endl</strong> to insert a <strong>newline character</strong> and <strong>flush the output buffer.</strong> Here's the code and its corresponding terminal output:</p>
             <h5><b>Code:</b></h5>
             <!-- yaha bhi code likhna hai -->
             <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>

<span class="keyword">int</span> main() {
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
             <p><strong>Output:</strong><br> Hey, Code With H-Square!</p> <br><p>Hey, Code With H-Square!</p> <br>
             <p>Using \n for line breaks in C++ is a common and efficient way to achieve the desired output. It's a simple and straightforward approach, and it's typically faster than other methods for adding line breaks, such as using std::endl.</p>
             <br>
             <p>The reason for this is that \n is a simple escape sequence that inserts a newline character, which is a <strong>low-level operation</strong> that directly <strong>moves the cursor to the beginning of the next line in the output.</strong> On the other hand, std::endl not only adds a newline character but also flushes the output buffer. Flushing the buffer can be a more costly operation in terms of performance, especially when you're printing a large amount of text.</p>
             <h4><b>using namespace std</b></h4><br>
             <p>By adding <strong>using namespace std;</strong> at the beginning of your program, you're telling the compiler that you want to use all the <strong>names from the std namespace</strong> without explicitly specifying std:: each time. This can make your code cleaner and more concise.</p>
             <h5><b>Code:</b></h5>
             <!-- yaha bhi code likhna hai  -->
             <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>
<span class="keyword">using namespace std;</span>
<span class="keyword">int</span> main() {
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="function">std::cout</span> <span class="function"><<</span> <span class="string">"Hey, Code With H-Square!"</span>;
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
             <strong>Output:</strong>
             <p>Hey, Code With H-Square!</p> <br>
             <p>Hey, Code With H-Square!</p> <br>
             <p><strong>"using namespace std;"</strong>is a useful shortcut for simplifying your C++ code, especially when you're learning the language and writing smaller programs. It helps <strong> reduce clutter</strong> and makes your <strong>code more readable. </strong> However, as your programming projects grow in complexity, consider using it sparingly to avoid potential naming conflicts. It's a tool that can make your C++ journey smoother, so use it wisely.</p>
            <br>
            <h4><b>Taking User Input using cin</b></h4>
            <p>One of the fundamental aspects of programming is taking input from the user. In C++, this is achieved with the help of the <strong>cin stream</strong>, which allows you to <strong> receive input </strong> from the user via the terminal or console.</p>
            <h5><b>Code:</b></h5>
            <!-- yaha bhi code likhana hai  -->
            <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>
<span class="keyword">using namespace std;</span>
<span class="keyword">int</span> main() {
    <span class="function">int x;</span>
    <span class="function">int y;</span>
    <span class="function"> cin >> x >> y;</span>
    <span class="function"> cout << "Value of x: " << x << “ and y: “ <<y;</span>
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
            <p><strong>Input:</strong>10</p>
            <p><strong>Output:</strong>x is: 10</p><br>
            <p>When you run this program and enter a value (e.g., 10) in the terminal, cin captures that value, stores it in the variable x, and then displays it using cout. Here's how it works:</p>
            <div>
                <ul>
                    <li>The program waits for user input.</li>
                    <li>You enter a value (e.g., 10) and press Enter.</li>
                    <li>cin reads the entered value and stores it in the variable x.</li>
                    <li>cout then displays the value of x.</li>
                </ul>
            </div>
            <p>To accept multiple inputs, we can simply use the <strong>>> operator</strong> with cin for each variable we want to receive input for. Let's demonstrate this by taking two variables, x, and y, as input and displaying their values:</p>
            <h5><b>Code:</b></h5>
            <!-- yaha bhi code likhana hai  -->
            <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>
<span class="keyword">using namespace std;</span>
<span class="keyword">int</span> main() {
    <span class="function">int x;</span>
    <span class="function">int y;</span>
    <span class="function"> cin >> x >> y;</span>
    <span class="function"> cout << "Value of x: " << x << “ and y: “ <<y;</span>
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>

             
            <p><strong>Input:</strong>10 20</p>
            <p><strong>Output:</strong>x is: 10 and y is: 20</p><br>
            <p>When you run this program, it waits for two separate inputs from the user, which should be entered one after the other, separated by spaces or Enter key presses. Here's how it works:</p>
            <div>
                <ul>
                    <li>The program waits for the first input (for x).</li>
                    <li>You enter a value (e.g., 10) and press Enter.</li>
                    <li>cin reads and stores the value in x.</li>
                    <li>The program then waits for the second input (for y).</li>
                    <li>You enter another value (e.g., 20) and press Enter.</li>
                    <li>cin reads and stores this value in y.</li>
                </ul>
            </div>
            <p>You might be wondering about the meaning of "int x" and "int y." Let's now dive into the topic of data types in C++.</p>
            <h5><b>Note:</b></h5>
            <p>To make the process more convenient, there's a shortcut that allows you to include almost all standard libraries at once using <strong>#include<bits/stdc++.h></strong>.</p>
            <p>The bits/stdc++.h header is a shortcut that includes a <strong>vast number of standard C++ libraries</strong>, making it easier to access a wide range of functions and classes without specifying each library individually. It's a <strong>time-saving approach </strong> for programmers, especially when you need several standard libraries in your code.</p>
            <p>However, it's important to be aware of potential compatibility issues and consider the impact on compile time, especially in large projects. When used judiciously, it can be a valuable asset in streamlining your C++ development process.</p>
            <h5><b>Code:</b></h5>
            <!-- yaha bhi code likhna hai -->
            <div class="container my-5">
        <div class="p-1 cpp backgound-white">C++</div>

        <div class="card code-container">
            <div class="card-body z-1 bg-black br">
                <button class="btn btn-success position-absolute top-0 end-0 m-2" onclick="copyCode()">Copy</button>
                <pre id="cppCode" class="mb-0 p-3">
<span class="keyword">#include&lt;iostream&gt;</span>
<span class="keyword">using namespace std;</span>
<span class="keyword">int</span> main() {
    <span class="function">int x;</span>
    <span class="function">int y;</span>
    <span class="function"> cin >> x >> y;</span>
    <span class="function"> cout << "Value of x: " << x << “ and y: “ <<y;</span>
    <span class="keyword">return</span> <span class="keyword">0</span>;
}
                </pre>
            </div>
        </div>
    </div>
<!-- yaha katm hai code -->

            <p><strong>Input:</strong>10 20</p>
            <p><strong>Output:</strong>x is: 10 and y is: 20</p><br>


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta2/dist/js/bootstrap.min.js"></script>
<!-- first code script -->
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

        </div>
</body>
</html>
