<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code With H-Square</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Smooth Transition */
        body, .navbar, .btn, .m {
            transition: background-color 0.3s, color 0.3s, border 0.3s;
        }
        .m {
            font-size: 17px;
            border: 2px solid black;
            border-radius: 7px;
            padding: 2px 6px;
            cursor: pointer;
        }
        .mm {
            cursor: pointer;
            font-size: 12px;
            border: 2px solid transparent;
            border-radius: 6px;
            padding: 2px 6px;
            background: linear-gradient(white, white) padding-box, linear-gradient(to right, #db2777, #f472b6) border-box;
        }
        .heading {
            font-size: 2.2rem;
        }
        /* Default Light Mode */
        .light-mode {
            background-color: #ffffff;
            color: #000000;
        }
        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
        /* Navbar Styling */
        .navbar-light {
            background-color: #f8f9fa !important;
        }
        .navbar-dark {
            background-color: #333 !important;
        }
        @media (prefers-color-scheme: dark) {
            .custom-dark-bg {
                background-color: #333; /* Your dark background color */
            }
        }
        .star {
            cursor: pointer;
            transition: fill 0.3s ease;
        }
        /* Style when the star is filled with golden color */
        .filled {
            fill: gold;
        }

    </style>
</head>
<body class="light-mode">

    <div class="row m-3"> <!-- Added margin for better spacing -->
        <!-- Sidebar -->
        <div class="col-3 p-3 border-end">
            <b>Sabbir</b>
        </div>

        <!-- Main Content -->
        <div class="col-9">
            <nav class="navbar navbar-light p-3">
                <div class="container-fluid d-flex justify-content-end">  <!-- Aligned to Left -->
                    <div>
                        <button id="toggleTheme" class="btn btn-dark me-2">☀️ Day Mode</button>
                        <button type="button" class="btn btn-success">Login</button>
                    </div>
                </div>
            </nav>

            <!-- Heading & Description -->
            <div class="p-3">
                <div class="heading"><b>Code With H-Square A2Z DSA Course/Sheet <sup><sup class="mm">FAQ</sup></sup></b></div>
                <p>
                    This course is made for people who want to learn DSA from A to Z in a well-organized and structured manner.
                    The lecture quality is better than what you get in paid courses, the only thing we don’t provide is doubt support.
                </p>

                <div class="btn-group p-3 w-100 col-12 col-sm-8 col-lg-4 d-flex flex-column gap-1 bg-white shadow-sm p-3 rounded-3 border border-light"
                     style="bottom: 5px;">
                    <button class="btn btn-m w-100 dropdown-toggle m text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Key Highlights</b>
                    </button>
                    <ul class="dropdown-menu w-100 text-start" style="position: absolute; left: 0; width: 100vw; padding: 1rem;">
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> Teaches problem solving with 450+ modules.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> In-depth coverage of brute, better, and optimal solutions.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> Well-structured articles/notes for quick revision.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> C++, Java, Python, and JavaScript code.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> Company tags associated with each problem.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> Notes section to save your notes for quick revision.
                        </li>
                        <li class="dropdown-item d-flex align-items-start">
                            <span class="me-2">•</span> None of the paid/unpaid courses have these many modules.
                        </li>
                    </ul>
                </div>

                <!-- Notes Dropdown -->
                <div class="btn-group p-3 w-100 col-12 col-sm-8 col-lg-4 d-flex flex-column gap-1 bg-white shadow-sm p-3 rounded-3 border border-light">
                    <button class="btn btn-m w-100 dropdown-toggle m text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Notes</b>
                    </button>
                    <div class="dropdown-menu w-100 text-start p-3 border-1 shadow-m " 
                         style="max-width: 90vw; overflow-wrap: break-word; white-space: normal;">
                        <div class="dropdown-item d-flex align-items-start text-wrap">
                            The Series doesn’t focus on any specific programming language. Instead, it emphasizes logic and uses pseudocode.<br>
                            The first two basic videos might use C++, but for Java tutorials, you can watch other YouTube videos. When tackling core problems of data structures and algorithms (DSA), the Series uses pseudocode that isn’t tied to any particular programming language.<br>
                            However, you can find code examples in your preferred language in the notes and articles provided.
                        </div>
                    </div>
                </div>

                <!-- Progress and Revision Button -->
                <div class="d-flex justify-content-between align-items-center p-4 w-100" style="max-width: 90vw;">
                    <div class="col-12 col-sm-8 col-lg-5 d-flex flex-column gap-1 bg-white shadow-sm p-3 rounded-3 border border-light">
                        <div class="d-flex flex-wrap">
                            <span class="text-muted small me-sm-2 me-md-2">
                                Your Progress: <strong>0 / 455</strong>
                            </span>   
                            <span class="text-end ms-auto">
                                <span class="d-block">0% complete</span>
                            </span>
                        </div>

                        <!-- Progress Bar -->
                        <div class="container mt-4">
                            <div class="progress" style="height: 8px; max-width: 90vw;">
                                <div id="course-progress" class="progress-bar bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2" style="font-size: 14px;">
                                <span>Your Progress: <strong id="course-completion-text">0 / 455</strong></span>
                                <span id="course-progress-text">0% complete</span>
                            </div>
                        </div>
                    </div>

                    <!-- Show Revision Button (aligned to left) -->
                    <button type="button" class="btn btn-outline-danger ms-auto">Show Revision</button>
                </div>
           
    
                <div class="btn-group p-3 w-100 col-12 col-sm-8 col-lg-4 d-flex flex-column gap-1 bg-white shadow-sm rounded-3 border border-light" style="bottom: 5px;">
                 <button class="btn btn-m w-100 dropdown-toggle m text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Step 1: Learn Basic</b>
                </button>

                <div class="dropdown-menu w-100 text-start" style="position: absolute; left: 0; width: 100vw; padding: 1rem;">
                 <b>Lec 1: Thing To Know in C++/Java/Python or any language</b>
    
                 <div class="table-responsive">
                    <table class="table w-100" style="border: 1px solid black; border-collapse: collapse;">
                     <thead>
                          <tr style="border: 2px solid black;">
                          <th style="border: 2px solid black; padding: 8px;">STATUS</th>
                          <th class="px-2 border-end w-33% ps-4 pe-4 py-3 text-nowrap">PROBLEM</th>
                           <th style="border: 2px solid black; padding: 8px;">ANIMATION</th>
                            <th style="border: 2px solid black; padding: 8px;">ARTICLE</th>
                            <th style="border: 2px solid black; padding: 8px;">YOUTUBE</th>
                            <th style="border: 2px solid black; padding: 8px;">PRACTICE</th>
                            <th style="border: 2px solid black; padding: 8px;">NOTE</th>
                            <th style="border: 2px solid black; padding: 8px;">DIFFICULTY</th>
                            <th style="border: 2px solid black; padding: 8px;">REVISION</th>
                          </tr>
                        </thead>
                        <tbody>
                                <tr style="border: 1px solid black;">
                                <td class="px-2 ps-3 pe-3 py-4 text-nowrap d-flex justify-content-center align-items-center">
                                  <input id="srinpttpt" name="complete" type="checkbox" class="form-check-input rounded-1" style="width: 1.25rem; height: 1.25rem; background-color:rgb(42, 164, 95);">
                                </td>
                                  <td><a href="./DSA_Sheet/A_to_Z/Input_Output.php" target="_blank" rel="noreferrer" class="text-primary text-decoration-black">User Input / Output</a></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">Sorting Notes</td>
                                  <td style="border: 1px solid black; padding: 8px;">Easy</td>
                                  <td>
                                <!--SVG Star -->
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-zinc-700 dark:fill-zinc-800 fill-slate-300 stroke-slate-200 star" id="srinpttpt2">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14 18.18 21.19 12 17.27 5.82 21.19 7 14 2 9.27 8.91 8.26 12 2"></polygon>
                                     </svg>
                                </td>
                                </tr>
                        </tbody>
                        <tbody>
                                <tr style="border: 1px solid black;">
                                <td class="px-2 ps-3 pe-3 py-4 text-nowrap d-flex justify-content-center align-items-center">
                                  <input id="srinpttpt" name="complete" type="checkbox" class="form-check-input rounded-1" style="width: 1.25rem; height: 1.25rem; background-color:rgb(42, 164, 95);">
                                </td>
                                  <td><a href="https://takeuforward.org/c/c-basic-input-output/" target="_blank" rel="noreferrer" class="text-primary text-decoration-black">Data Types</a></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">Sorting Notes</td>
                                  <td style="border: 1px solid black; padding: 8px;">Easy</td>
                                  <td>
                                <!--SVG Star -->
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-zinc-700 dark:fill-zinc-800 fill-slate-300 stroke-slate-200 star" id="srinpttpt2">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14 18.18 21.19 12 17.27 5.82 21.19 7 14 2 9.27 8.91 8.26 12 2"></polygon>
                                     </svg>
                                </td>
                                </tr>
                        </tbody>
                        <tbody>
                                <tr style="border: 1px solid black;">
                                <td class="px-2 ps-3 pe-3 py-4 text-nowrap d-flex justify-content-center align-items-center">
                                  <input id="srinpttpt" name="complete" type="checkbox" class="form-check-input rounded-1" style="width: 1.25rem; height: 1.25rem; background-color:rgb(42, 164, 95);">
                                </td>
                                  <td><a href="./DSA_Sheet/A_to_Z/if_else.php" target="_blank" rel="noreferrer" class="text-primary text-decoration-black">IF/Else Statement</a></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;"></td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">m</td>
                                  <td style="border: 1px solid black; padding: 8px;">Sorting Notes</td>
                                  <td style="border: 1px solid black; padding: 8px;">Easy</td>
                                  <td>
                                <!--SVG Star -->
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-zinc-700 dark:fill-zinc-800 fill-slate-300 stroke-slate-200 star" id="srinpttpt2">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14 18.18 21.19 12 17.27 5.82 21.19 7 14 2 9.27 8.91 8.26 12 2"></polygon>
                                     </svg>
                                </td>
                                </tr>
                        </tbody>
                              </table>
                            </div>
                         </div>
                        </div>

                        </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- JavaScript for Theme Toggle -->
    <script>
        const toggleButton = document.getElementById("toggleTheme");

        toggleButton.addEventListener("click", function () {
            document.body.classList.toggle("light-mode");
            document.body.classList.toggle("dark-mode");

            // Change Navbar Theme
            document.querySelector(".navbar").classList.toggle("navbar-light");
            document.querySelector(".navbar").classList.toggle("navbar-dark");

            // Change FAQ Box Border
            document.querySelector(".m").classList.toggle("border-light");
            document.querySelector(".m").classList.toggle("border-dark");

            // Change Button Theme
            if (document.body.classList.contains("dark-mode")) {
                toggleButton.textContent = "🌙 Night Mode";
                toggleButton.classList.remove("btn-dark");
                toggleButton.classList.add("btn-light");
            } else {
                toggleButton.textContent = "☀️ Day Mode";
                toggleButton.classList.remove("btn-light");
                toggleButton.classList.add("btn-dark");
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateProgress(percentage) {
            const progressBar = document.getElementById('course-progress');
            const progressText = document.getElementById('course-progress-text');
            const completionText = document.getElementById('course-completion-text');

            // Update the progress bar width and the text dynamically
            progressBar.style.width = percentage + '%';
            progressBar.setAttribute('aria-valuenow', percentage);  // Update ARIA value for accessibility
            progressText.innerText = percentage + '% complete';

            // Update the course completion text (e.g., "0 / 455")
            completionText.innerText = `0 / 455`;  // This can be updated dynamically as well if you have the current/total data
        }

        // Example: Set progress to 60%
        updateProgress(0);
    </script>

<script>
    // Function to toggle the 'filled' class on click for any SVG star in the table
    const stars = document.querySelectorAll('.star');
    
    stars.forEach(star => {
        star.addEventListener("click", function () {
            // Toggle the 'filled' class on the star when clicked
            star.classList.toggle("filled");
        });
    });
</script>
</script>

</body>
</html>
