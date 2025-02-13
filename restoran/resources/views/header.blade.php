<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="/front_css/img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/front_css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/front_css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/front_css/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/front_css/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/front_css/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link">Service</a>
                        <a href="/menu" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="/booking" class="dropdown-item">Booking</a>
                                <a href="/team" class="dropdown-item">Our Team</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="/booking" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
                <a href="/cart" class="nav-item nav-link">
                    <i class="fa badge fa-lg" style="font-size: 1.30rem">&#xf07a;</i>
                    <span class="cart-count">0</span> <!-- This will display the total number of products -->
                </a>

            </nav>
        </div>
        <!-- Navbar & Hero End -->
        <!-- JavaScript -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const navLinks = document.querySelectorAll(".navbar-nav a");
                navLinks.forEach(link => {
                    link.addEventListener("click", function () {
                        navLinks.forEach(nav => nav.classList.remove("active"));
                        this.classList.add("active");
                    });
                });
            });
        </script>
        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                // Function to update the cart count
                function updateCartCount(totalProducts) {
                    const cartCountElement = document.querySelector('.cart-count');
                    if (cartCountElement) {
                        cartCountElement.textContent = totalProducts;
                    }
                }

                // Fetch the total products count from the session (or update it whenever the cart is modified)
                const totalProducts = '{{ session("totalProducts") }}';

                // Update the cart count on page load
                updateCartCount(totalProducts);
            });


        </script>
    </div>
</body>

</html>