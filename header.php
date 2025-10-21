<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example with Theme Toggle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Default Light Mode */
        .light-mode {
            background-color: #ffffff;
            color: #000000;
        }
        /* Dark Mode */
        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
    </style>
</head>
<body class="light-mode">

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar (Sabbir) -->
        <div class="col-3 p-3 border-end">
            <b>Sabbir</b>
        </div>

        <!-- Main Content (Navbar) -->
        <div class="col-9">
            <!-- Navbar -->
            <nav class="navbar navbar-light p-3">
                <div class="container-fluid d-flex justify-content-end">
                    <div>
                        <button id="toggleTheme" class="btn btn-dark me-2">☀️ Day Mode</button>
                        <button type="button" class="btn btn-success">Login</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for Theme Toggle -->
<script>
    const toggleButton = document.getElementById("toggleTheme");

    toggleButton.addEventListener("click", function () {
        document.body.classList.toggle("light-mode");
        document.body.classList.toggle("dark-mode");

        // Change Navbar Theme
        document.querySelector(".navbar").classList.toggle("navbar-light");
        document.querySelector(".navbar").classList.toggle("navbar-dark");

        // Change Button Text and Theme
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

</body>
</html>
