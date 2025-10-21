<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time and Space Complexity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light py-4">
<?php include("../../header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-3 border-end">
                <b>Sabbir</b>
            </div>
            <div class="col-8">
                <h4 class="mb-5"><strong>Time and Space Complexity - Code With H-Square A2Z DSA Course</strong></h4>
                <p>
                    this article, we are going to discuss the terms time complexity and space complexity. Here, we will learn the basics of them and in the upcoming part, we will learn complex algorithms with a detailed discussion of their time complexity and space complexity.
                </p>
                <div>
                    <h3 class="mb-3"><strong>What is Time Complexity?</strong></h3>
                    <p>
                        We can solve a problem using different logic and different codes. Time complexity basically helps to judge different codes and also helps to decide which code is better. In an interview, an interviewer generally judges a code by its time complexity.
                    </p>
                    <p>
                        Now, the term, time complexity, seems that it is referring to the time taken by a machine to execute a particular code. But in real life, <strong>Time complexity does not refer to the time taken by the machine to execute a particular code.</strong> 
                    </p>
                    <h4 class="mb-2"><strong>Let’s understand why we should not judge any code on the basis of the time taken by a machine.</strong></h4>
                    <p class="mb-2">
                        If we run the same code in a low-end machine(e.g. old windows machine) and in a high-end machine(e.g. Latest MacBook), we will observe that two different machines take different amounts of time for the same code. The high-end machine will take lesser time as compared to the low-end machine. 
                    </p>
                    <p class="mb-2">
                        So, the time taken by a machine can be changed depending on the configuration.<strong><i> That is why we should not compare the two different codes on the basis of the time taken by a machine as the time is dependent on it.</i></strong>
                    </p>
                    <div>
                        <h4><strong>Definition:</strong></h4>
                        <p>
                            The rate at which the time, required to run a code, changes with respect to the input size, is considered the time complexity.
                            <strong>Basically, the time complexity of a particular code depends on the given input size, not on the machine used to run the code.</strong>
                        </p>
                        <p>
                            Let’s understand this using the following diagram:
                        </p>
                        <img src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-183223.png" alt class="wp-image-7303">
                        <p>
                            Now, the next question that comes to our mind is how we will represent the time complexity of a code as we are not going to use the standard units like minutes or seconds. Let’s discuss it below:
                        </p>
                    </div>
                    <div>
                        <h5 class="mb-2"><strong>How we will represent the time complexity of any code:</strong></h5>
                        <p>To represent the time complexity, we generally use the Big O notation. The Big O notation looks like the following:</p>
                        <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-183353.png" alt class="wp-image-7304">
                        <p class="mb-3">Let’s understand this using the following example:</p>
                        <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-183453.png" alt class="wp-image-7305">
                        <p class="mb-5">The time complexity for this code will be nothing but the number of steps, this code will take to be executed. So, if we write this in terms of Big O notation, it will be like O(no. of steps).</p>
                        <ul>
                            <p class="mb-3">Let’s observe the steps for this code:</p>
                            <li class="mb-3">First, the assigning step(i = 1) will be done.</li>
                            <li class="mb-3">The second step will be the comparison i.e. i <= 5.</li>
                            <li class="mb-3">The third step will be the print statement (i.e. cout << <strong>“Raj”</strong>;).</li>
                            <li class="mb-3">The fourth step will be the increment(i.e. i++).</li>
                            <li class="mb-3">In the fifth step, the updated value of i will be again checked i.e. the comparison(i <= 5).</li>
                            <li class="mb-3">In the sixth step, the print statement will be executed and so on.</li>
                        </ul>
                        <p class="mb-3">This flow will continue until the value of i becomes greater than 5(i.e. 6). In a broader sense, we can observe that the ‘for loop’ will run 5 times and for each time three steps will be surely executed i.e. checking/comparison, printing, and increment. So, the total steps will be 5*3 = 15. And the time complexity in terms of Big O notation will be O(15).</p>
                        <p class="mb-3">Now, if we write N instead of 5, the number of steps will be then N*3 = 3N and the time complexity will be O(3*N).</p>
                        <p class="mb-3">But this manual counting process is not feasible for any code. As the ‘for loop’ might run a billion or million times and inside that ‘for loop’, there might be a large no. of operations or some other ‘for loops’ as well. So, we have to find out a better approach to calculate the time complexity of any given code.</p>
                        <p class="mb-3">Here come the three rules, that we are going to follow while calculating the time complexity:</p>
                        <ul>
                            <li class="mb-3">We will always <strong>calculate the time complexity for the worst-case scenario.</strong></li>
                            <li class="mb-3">We will<strong> avoid including the constant terms.</strong></li>
                            <li class="mb-3">We will also<strong>avoid the lower values.</strong></li>
                            <p class="mb-3">Let’s discuss the rules individually:</p>
                            <li class="mb-3"><strong>Calculate the time complexity for the worst-case scenario:</strong></li>
                            <p class="mb-3">Before discussing the point we need to understand the three terms i.e. Best Case, Worst Case, and Average Case.</p>
                            <p class="mb-3">Let’s understand these three terms considering the following piece of code:</p>
                            <img src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-183632.png" alt class="wp-image-7306">
                        </ul>
                        <div>
                            <ul>
                                <li class="mb-3"><strong>Best Case:</strong> This term refers to the case where the code takes the least amount of time to get executed. For example, if the mark is 10(i.e. < 25), only the first line will be executed and the rest of the lines will be skipped. So, the least amount of steps i.e. only 2 steps are required in this case. This is an example of the best case.</li>
                                <li class="mb-3"><strong>Worst Case:</strong> This term refers to the case where the code takes the maximum amount of time to get executed. For example, if the mark is 70(i.e. > 65), the last line will be executed after checking all the above conditions. So, the maximum amount of steps i.e. 4 steps are required in this case. This is an example of the worst case.</li>
                                <li class="mb-3"><strong>Average Case:</strong> This term is pretty self-explanatory. This is basically the case between the best and the worst.</li>
                                <p class="mb-3">Now, as we always want that our system serves the maximum number of clients, we need to calculate the time complexity for the worst-case scenario. With this, we can actually judge the robustness of any code or any system.</p>
                            </ul>
                            <h5 class="mb-3"><strong>2. Avoid including the constant terms:</strong></h5>
                            <p class="mb-3">Let’s understand this rule considering the time complexity: O(4N<sup>3</sup> + 3N<sup>2</sup> + 8). Now, if we consider the value of N as 10<sup>5</sup> the time complexity will be like this:  O(4*10<sup>15</sup> + 3*10<sup>10</sup> + 8). In this case, the constant term 8 is very less significant in terms of changing the time complexity with different values of N. That is why we should avoid the constant terms while calculating the time complexity.</p>
                            <p class="mb-3">If we want to think of this case in terms of code, we can consider the following code:</p>
                            <img src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-183828.png" alt class="wp-image-7307">
                            <p class="mb-3">Here, the first step (i.e. int x = 2) will be executed in unit time i.e. constant time. The precise time complexity is O(3N + 1) but in this case, the constant 1 is very less significant. So we will write the time complexity as O(3N) avoiding the constant term.</p>
                        </div>
                        <div>
                            <h5 class="mb-3"><strong>3. Avoid the lower values:</strong></h5>
                            <p class="mb-3">Now, in the previous example, the given time complexity is O(4N<sup>3</sup> + 3N<sup>2</sup> + 8) and we have reduced it to O(4N<sup>3</sup> + 3N<sup>2</sup>). Here, we can clearly observe if the value of N is a large number, the second term i.e. 3N<sup>2</sup> will also be a less significant term. For example, if the value of N is 10<sup>5</sup> then the term 3*10<sup>10</sup> becomes less significant with respect to 4*10<sup>15</sup>. So, we can also avoid the lower values and the final time complexity will be O(4N<sup>3</sup>)</p>
                            <p class="mb-3">Note: A point to remember is that we can actually ignore the constant coefficients as well. For example, considering the time complexity O(4N<sup>3</sup>) as O(N<sup>3</sup>) is also correct.</p>
                            <p class="mb-3">Apart from the widely used Big O notation, there are several other notations. Among them, the two most common are the Theta notation(θ) and the Omega notation(Ω). The differences are shown in the below table:</p>
                            <img class="mb-3"src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-184041.png" alt class="wp-image-7308">
                            <p class="mb-3">These concepts are not much important from the interview perspective and so here we are not going to discuss these in detail. Please follow any standard textbook if you want the details and the mathematical derivations.</p>
                            <p class="mb-3">Let’s quickly discuss some questions to make the concepts clear:</p>
                        </div>
                        <div>
                            <h4><strong>Question 1:</strong></h4>
                            <p class="mb-3">Given the following code:</p>
                            <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-184431.png" alt class="wp-image-7309">
                            <p class="mb-3">In order to calculate the time complexity of the code, we need to first observe how the loops are working. The outer loop i.e. i runs from 0 to N-1 i.e. N times and for every value of i, the inner loop i.e. j also runs from 0 to N-1 i.e. N times. The following illustration depicts the process:</p>
                            <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-184736.png" alt class="wp-image-7310">
                            <p class="mb-3">Now, we can clearly observe the total number of steps i.e. N+N+N+N+.......+N times = N*N = N<sup>2</sup>. So, the time complexity will be O(N<sup>2</sup>). We can ignore other constant steps as well as the innermost block of code as it runs in constant time.</p>
                        </div>
                        <div>
                            <h4 class="mb-3"><strong>Question 2:</strong></h4>
                            <p class="mb-3">Given the following code:</p>
                            <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-184837.png" alt class="wp-image-7311">
                            <p class="mb -3">In order to calculate the time complexity of the code, we again need to first observe how the loops are working. The outer loop i.e. i runs from 0 to N-1 i.e. N times and for every value of i, the inner loop i.e. j also runs from 0 to i i.e. (i+1) times. The following illustration depicts the process:</p>
                            <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-184931.png" alt class="wp-image-7312">
                            <p class="mb-3">Now, we can clearly observe the total number of steps i.e. 1+2+3+4+.......+N. Now we know the formula of the summation of the first N natural numbers i.e. (N*(N+1))/2 = N<sup>2</sup>/2 + N/2. So, the precise time complexity will be O(N<sup>2</sup>/2 + N/2). Now, we should ignore the lower values. So, <strong>the time complexity will be O(N <sup>2</sup>/2).</strong> It can be also written as <strong>O(N<sup>2</sup>)</strong> avoiding the coefficient 1/2.</p>
                            <p class="mb-3">These are the basics of time complexity. Now, let’s move on to the space complexity part.</p>
                        </div>
                        <div>
                            <h3 class="mb-3"><strong>What is Space Complexity?</strong></h3>
                            <p class="mb-3">The term space complexity generally refers to the memory space that a code uses while being executed. Again space complexity is also dependent on the machine and so we are going to <strong>represent the space complexity using the Big O notation</strong> instead of using the standard units of memory like MB, GB, etc.</p>
                            <h4 class="mb-3"><strong>Definition:</strong></h4>
                            <p class="mb-3">Space complexity generally represents the summation of auxiliary space and the input space. Auxiliary space refers to the space that we use additionally to solve a problem. And input space refers to the space that we use to store the inputs.</p>
                            <p class="mb-3">Let’s understand this using the following example:</p>
                            <img class="mb-3" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-22-185032.png" alt class="wp-image-7313">
                            <p class="mb-3">The variables a and b are used to store the inputs but c refers to the space we are using to solve the problem and c is the auxiliary space. Here the space complexity will be O(3).</p>
                            <p class="mb-3">Similarly, if we use an array of size n, the space complexity will be O(N).</p>
                        </div>
                        <div>
                            <h4 class="mb-3"><strong>Good coding practice:</strong></h4>
                            <p class="mb-3">If a question of adding two numbers like a and b is asked, one of the possible methods will be </p>
                            <p class="mb-3">b = a+b. In this case, the space complexity is definitely reduced as we are not using any extra variable but this is not a good practice to manipulate the given inputs or data. In an interview, we must be careful that we will not manipulate the given data even if the space complexity becomes 2N instead of N. If the interviewer specifically instructs us to manipulate, then only we should attempt this method.</p>
                            <p class="mb-3"><strong>Note: </strong><i>A company may use the same data for different purposes. That is why we should not attempt to manipulate the given data for reducing the space complexity. So, we will never manipulate the given data i.e. the inputs until the interviewer specifically says so.</i></p>
                            <p class="mb-3">We are now pretty much done with our concepts of time complexity and space complexity. Now, we will briefly discuss some points about competitive programming or the online judge.</p>
                        </div>
                        <div>
                            <h4><strong>Points to remember:</strong></h4>
                            <p class="mb-3">In competitive programming or in the platforms like Leetcode and GeeksforGeeks, we generally run our codes on online servers. Most of these servers execute roughly 10<sup>8</sup> operations in approximately 1 second i.e. 1s. We must be careful that if the time limit is given as 2s the operations in our code must be roughly 2*10<sup>8</sup>, not 10<sup>16</sup>. Similarly, 5s refers to 5*10<sup>8</sup>. Simply, if we want our code to be run in 1s, the time complexity of our code must be around O(10<sup>8</sup>) avoiding the constants and the lower values.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>