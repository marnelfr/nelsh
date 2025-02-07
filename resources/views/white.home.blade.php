<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Custom styles to mimic Google homepage */
        body {
            background-color: #fff;
        }
        .google-logo {
            max-width: 272px;
            width: 100%;
            height: auto;
        }
        .search-box {
            max-width: 584px;
            width: 100%;
        }
        .search-buttons .btn {
            min-width: 120px;
        }
        footer a {
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="d-flex flex-column vh-100">
<!-- Top Navigation (Gmail, Images) -->
<div class="container mt-3">
    <div class="d-flex justify-content-end">
        <a href="#" class="me-3 text-decoration-none text-dark">Gmail</a>
        <a href="#" class="me-3 text-decoration-none text-dark">Images</a>
    </div>
</div>

<!-- Main Content -->
<div class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center">
    <!-- Google Logo -->
    <img
        class="google-logo mb-4"
        src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
        alt="Google Logo"
    />
    <!-- Search Form -->
    <form class="w-100">
        <div class="input-group search-box mx-auto">
            <input type="text" class="form-control border-end-0 rounded-start" placeholder="" aria-label="Search" />
            <span class="input-group-text bg-white border-start-0 rounded-end">
          <!-- Optionally add a microphone icon here -->
        </span>
        </div>
        <div class="d-flex justify-content-center search-buttons mt-3">
            <button type="submit" class="btn btn-light border me-2">Google Search</button>
            <button type="submit" class="btn btn-light border">I'm Feeling Lucky</button>
        </div>
    </form>
</div>

<!-- Footer -->
<footer class="bg-light">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <p class="mb-0 small text-muted">
                    Country: <a href="#" class="text-decoration-none text-muted">United States</a>
                </p>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="small text-decoration-none text-muted me-2">Advertising</a>
                <a href="#" class="small text-decoration-none text-muted me-2">Business</a>
                <a href="#" class="small text-decoration-none text-muted me-2">How Search Works</a>
                <a href="#" class="small text-decoration-none text-muted me-2">Privacy</a>
                <a href="#" class="small text-decoration-none text-muted me-2">Terms</a>
                <a href="#" class="small text-decoration-none text-muted">Settings</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
