<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netflix Clone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .netflix-header h1 {
            font-weight: bold;
            letter-spacing: 2px;
        }

        .hero {
            background-image: url('https://assets.nflxext.com/ffe/siteui/vlv3/0541a398-9d4b-4dd7-a556-70ae6bdf10f1/67e1ecf3-3978-4f14-81f2-80e8aa2659b0/NP-en-20240415-popsignuptwoweeks-perspective_alpha_website_large.jpg');
            background-size: cover;
            background-position: center;
            height: 85vh;
        }

        .movie-box {
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .movie-box:hover {
            transform: scale(1.08);
        }

        footer {
            background-color: #111;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="netflix-header d-flex justify-content-between align-items-center px-5 py-3">
    <h1 class="text-danger">NETFLIX</h1>
    <button class="btn btn-danger btn-sm">Sign In</button>
</header>

<!-- Hero Section -->
<section class="hero d-flex align-items-center justify-content-center text-center text-white">
    <div>
        <h1 class="display-4 fw-bold">Unlimited movies, TV shows, and more</h1>
        <p class="lead">Watch anywhere. Cancel anytime.</p>
        <form class="d-flex justify-content-center mt-4">
            <input type="email" class="form-control w-50" placeholder="Email address" required>
            <button class="btn btn-danger ms-2">Get Started</button>
        </form>
    </div>
</section>

<!-- Movie Row -->
<section class="container mt-5">
    <h2 class="text-white">Trending Now</h2>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-3 mt-2">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '
            <div class="col">
                <img src="https://via.placeholder.com/200x300?text=Movie+' . $i . '" class="img-fluid rounded movie-box">
            </div>';
        }
        ?>
    </div>
</section>

<!-- Footer -->
<footer class="text-center text-muted py-4 mt-5">
    <p>Netflix Clone © <?php echo date("Y"); ?> | Created for educational purposes</p>
</footer>

<!-- JS (optional) -->
<script>
    // Example JavaScript: Alert on movie click
    document.querySelectorAll('.movie-box').forEach(box => {
        box.addEventListener('click', () => {
            alert("Movie clicked!");
        });
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
