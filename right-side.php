
            <nav class="navbar navbar-light p-3">
                <div class="container-fluid d-flex justify-content-end">  <!-- Aligned to Left -->
                    <div>
                        <button id="toggleTheme" class="btn btn-dark me-2">☀️ Day Mode</button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-login">Login</button>
                    </div>
                </div>
            </nav>

            
            <div class="p-3 right-side">
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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">PROBLEM</th>
                                        <th scope="col">ANIMATION</th>
                                        <th scope="col">ARTICLE</th>
                                        <th scope="col">YOU TUBE</th>
                                        <th scope="col">PRACTICE</th>
                                        <th scope="col">NOTE</th>
                                        <th scope="col">DIFFICULTY</th>
                                        <th scope="col">REVISION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                            <label class="green-check-box" for="btncheck1"></label>
                                        </div>
                                    </td>
                                        <td>Otto</td>
                                        <td><a href="#" class="link-question">User Input / Output</a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content modal-body-1">
                        <form action="login-process.php" method="POST">
                            <div class="modal-header">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <p class="modal-text">
                                    <span style="color: white;">Ready to Begin Your Journey with</span><br>
                                    <span class="animated-title">Code With H-Square</span>
                                </p>
                                
                                <div class="mb-3">
                                    <label class="form-label" style="color:white;"><b>E-Mail Id</b></label>
                                    <input class="form-control" type="email" name="studentMail" placeholder="Email" aria-label="Email input" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" style="color:white;"><b>Password</b></label>
                                    <input class="form-control" type="password" name="studentPassword" placeholder="Password" aria-label="Password input" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                            <button type="submit" class="btn w-100 btn-color" style="color:white;">Login</button>
                            </div>

                            <div>
                                <p class="register-text">
                                    Don’t have an account? <a class="register-page-link" data-bs-toggle="modal" data-bs-target="#modal-register">Create account</a>
                                </p> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-register" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content modal-body-1">
                        <form action="student-related/register-process.php" method="POST">
                            <div class="modal-header">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="modal-text">
                                    <span style="color: white;">Ready to Begin Your Journey with</span><br>
                                    <span class="animated-title">Code With H-Square</span>
                                </p>
                                
                                <div class="mb-3">
                                    <label class="form-label" style="color:white;"><b>User Name</b></label>
                                    <input class="form-control" type="text" name="studentName" placeholder="username" aria-label="Email input" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="color:white;"><b>E-Mail Id</b></label>
                                    <input class="form-control" type="email" name="studentMail" placeholder="Email" aria-label="Email input" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" style="color:white;"><b>Password</b></label>
                                    <input class="form-control" type="password" name="studentPassword" placeholder="Password" aria-label="Password input" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn w-100 btn-color" style="color:white;">Verify and Sign-up</button>
                            </div>

                            <div>
                                <p class="register-text">
                                   Already have an account? <a class="register-page-link" data-bs-toggle="modal" data-bs-target="#modal-login" >Sign in</a>
                                </p> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        