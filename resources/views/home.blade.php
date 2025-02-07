<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google - Dark Mode</title>
    <!-- Bootstrap CSS (Bootstrap 5.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <style>
        /* Dark mode base colors */
        body {
            background-color: #202124;
            color: #e8eaed;
        }
        a {
            color: #8ab4f8;
        }
        a:hover {
            text-decoration: underline;
        }
        /* Header and footer styling */
        header,
        footer {
            background-color: #202124;
        }

        .nelsh-logo {
            font-family: cursive;
            font-size: 5.75rem; /* Approximately 92px if 1rem = 16px */
            color: #46cbf0;  /* A blue tone similar to one of Google's colors */
        }
        .nel-logo {
            width: 1rem;
            /*transform: translateY(-3rem);*/
            -webkit-animation: spinHorizontal 1s infinite linear;
            animation: spinHorizontal 0.8s infinite linear;
        }
        @-webkit-keyframes spinHorizontal {
            0% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(360deg);
            }
        }

        @keyframes spinHorizontal {
            0% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(360deg);
            }
        }

        footer {
            border-top: 1px solid #5f6368;
        }

        /* Search box styling */
        .search-box {
            max-width: 584px;
            width: 100%;
        }
        .search-buttons .btn {
            min-width: 120px;
            background-color: #303134;
            border: 1px solid #5f6368;
            color: #e8eaed;
        }
        .search-buttons .btn:hover {
            background-color: #3c4043;
        }
        .main-content-up {
            transform: translateY(-3.5rem);
        }
        {{--
                /* Container for the table: spacing, width, and fade effect */
                .fade-table {
                    margin-top: 3rem;
                    width: 90%;          /* Makes the container wider */
                    max-width: 1200px;    /* Optional: limits the maximum width on large screens */
                    margin-left: auto;
                    margin-right: auto;
                    background: transparent;
                    /* Fade from opaque at the top to transparent at the bottom /
                    -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
                    mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
                }

                /* Ensure the table fills the container and is transparent */
                .fade-table table {
                    width: 60%;
                    background-color: transparent;
                }*/
        --}}
            </style>
        </head>
        <body class="d-flex flex-column vh-100">
        <!-- Header: Top Navigation -->
        <header class="py-2">
            <div class="container">
                <div class="d-flex justify-content-end">
                    <a href="#" class="me-3 text-decoration-none">Login</a>
{{--                    <a href="#" class="me-3 text-decoration-none">Signup</a>--}}
                </div>
            </div>
        </header>

        <!-- Main Content: Centered in available space -->
        <main class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center main-content-up">
            <!-- Google Logo -->
            {{--<img
                class="google-logo mb-4"
                src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
                alt="Google Logo"
            />--}}
            <h1 class="nelsh-logo mb-4">
                NelSh<img class="nel-logo" src="https://avatars.githubusercontent.com/u/25979352?v=4" alt="Nel Logo">
            </h1>
            <!-- Search Form -->
            <form class="w-100">
                <div class="input-group search-box mx-auto">
                    <input
                        type="text"
                        class="form-control border-end-0 rounded-start bg-dark text-light"
                        placeholder=""
                        aria-label="Search"
                    />
                    <span class="input-group-text bg-dark border-start-0 rounded-end">
                  <!-- Optionally, you can add an icon here -->
                </span>
                </div>
                <div class="d-flex justify-content-center search-buttons mt-4">
                    <button type="submit" class="btn me-2">Quick Short</button>
                    <button type="submit" class="btn">Shorten File</button>
                </div>
            </form>

            <!-- Fading Table of Links -->
            {{--<div class="fade-table">
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td><a href="#">Link 1</a></td>
                        <td><a href="#">Link 2</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Link 3</a></td>
                        <td><a href="#">Link 4</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Link 5</a></td>
                        <td><a href="#">Link 6</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Link 7</a></td>
                        <td><a href="#">Link 8</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Link 9</a></td>
                        <td><a href="#">Link 10</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>--}}
</main>

<!-- Footer -->
<footer class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0 small">
                    Country: <a href="#" class="text-decoration-none">United States</a>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="small text-decoration-none me-2">Advertising</a>
                <a href="#" class="small text-decoration-none me-2">Business</a>
                <a href="#" class="small text-decoration-none me-2">How Search Works</a>
                <a href="#" class="small text-decoration-none me-2">Privacy</a>
                <a href="#" class="small text-decoration-none me-2">Terms</a>
                <a href="#" class="small text-decoration-none">Settings</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
