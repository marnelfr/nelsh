<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

       /* .nelsh-logo {
            font-family: cursive;
            font-size: 5.75rem; !* Approximately 92px if 1rem = 16px *!
            color: #46cbf0;  !* A blue tone similar to one of Google's colors *!
        }*/
        .nelsh-logo-img {
            max-width: 60%
        }
        .nel-logo {
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
        @media screen and (min-width: 1024px) {
            .nel-logo {
                width: 2%;
                position: relative;
                left: 14.2rem;
                top: -4.2rem;
            }
        }
        @media screen and (max-width: 1024px) {
            .nel-logo {
                width: 3%;
                position: relative;
                left: 14.14rem;
                top: -4.4rem;
            }
        }
        @media screen and (max-width: 768px) {
            .nel-logo {
                width: 3%;
                position: relative;
                left: 12.7rem;
                top: -3.8rem;
            }
        }
        @media screen and (max-width: 425px) {
            .nel-logo {
                width: 4%;
                position: relative;
                left: 7.35rem;
                top: -2.35rem;
            }
        }
        @media screen and (max-width: 375px) {
            .nel-logo {
                width: 4%;
                position: relative;
                left: 6.4rem;
                top: -2.1rem;
            }
        }
        @media screen and (max-width: 320px) {
            .nel-logo {
                width: 4%;
                position: relative;
                left: 5.5rem;
                top: -1.8rem;
            }
        }
    </style>
</head>
<body class="d-flex flex-column vh-100">
    <!-- Header: Top Navigation -->
    <header class="py-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}" class="ms-4 text-decoration-none">Login</a>
                <a href="{{ route('register') }}" class="me-4 text-decoration-none">Signup</a>
            </div>
        </div>
    </header>

        <!-- Main Content: Centered in available space -->
    <main class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center main-content-up">
        <img class="nelsh-logo-img" src="https://marnelfr.github.io/assets/images/nelsh_logo.webp" alt="NelSH Logo">
        <img class="nel-logo" src="https://avatars.githubusercontent.com/u/25979352?v=4" alt="Nel Logo">

        <!-- Search Form -->
        <form action="{{ route('links.store') }}" method="POST" class="w-100 mt-3">
            <div class="input-group search-box mx-auto">
                <input
                    type="text"
                    class="form-control border-end-0 rounded-start bg-dark text-light"
                    placeholder=""
                    aria-label="Search"
                    required
                    name="url"
                />
                <span class="input-group-text bg-dark border-start-0 rounded-end">
                    <!-- Optionally, you can add an icon here -->
                </span>
            </div>
            <div class="d-flex justify-content-center search-buttons mt-4">
                <button type="submit" id="btn-quick-short" class="btn me-2">Quick Short</button>
                <button disabled type="submit" class="btn">Shorten File</button>
            </div>
        </form>

        <div class="row" id="short-link-card" style="display: none">
            <div class="col-12 text-center mt-5 alert alert-success">
                <p>
                    <b>Here is your link</b> <br>
                    👇 <br>
                    <span id="new_short_link" style="cursor: pointer;" data-link=""></span>
                </p>
            </div>
        </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const shortLink = document.querySelector('#new_short_link');
            const form = document.querySelector("form");
            const submitButton = document.getElementById("btn-quick-short");

            form.addEventListener("submit", async (event) => {
                event.preventDefault(); // Prevent default form submission

                // Get the input value
                const urlInput = form.querySelector("input[name='url']");
                if (!urlInput.value.trim()) {
                    alert("Please enter a URL.");
                    return;
                }

                // Disable the button and add a spinner
                submitButton.disabled = true;
                submitButton.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Shortening...`;

                try {
                    // Send an AJAX POST request using Fetch API
                    const response = await fetch(form.action, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content, // CSRF token
                        },
                        body: JSON.stringify({ url: urlInput.value.trim() }),
                    });

                    const result = await response.json();

                    // Handle success
                    if (response.ok) {
                        document.querySelector('#short-link-card').removeAttribute('style')
                        document.querySelector('#new_short_link').innerHTML = result.short_url
                        document.querySelector('#new_short_link').setAttribute('data-link', result.short_url)

                        if (shortLink) {
                            shortLink.addEventListener('click', function() {
                                // Retrieve the project code from the data attribute.
                                var link = this.getAttribute('data-link');
                                try {
                                    copyToClipboard(link).then(function (){
                                        alert('Link copied to clipboard!');
                                    })
                                } catch(error) {
                                    console.error('Error copying the link: ', error);
                                }
                            });
                        }
                    } else {
                        throw new Error(result.message || "Something went wrong.");
                    }
                } catch (error) {
                    alert("Error: " + error.message);
                } finally {
                    // Reset the button state
                    submitButton.disabled = false;
                    submitButton.innerHTML = "Quick Short";
                    urlInput.value = ''
                    urlInput.select()
                }
            });
        });

        async function copyToClipboard(textToCopy) {
            // Navigator clipboard api needs a secure context (https)
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(textToCopy);
            } else {
                // Use the 'out of viewport hidden text area' trick
                const textArea = document.createElement("textarea");
                textArea.value = textToCopy;

                // Move textarea out of the viewport so it's not visible
                textArea.style.position = "absolute";
                textArea.style.left = "-999999px";

                document.body.prepend(textArea);
                textArea.select();

                try {
                    document.execCommand('copy');
                } catch (error) {
                    console.error(error);
                } finally {
                    textArea.remove();
                }
            }
        }
    </script>
</body>
</html>
