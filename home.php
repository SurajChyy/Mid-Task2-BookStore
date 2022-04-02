<!-- Home page development static pages using html of an online book store.
•   Registration, User Login
•   User Profile Page
•   Books Catalog
•   Shopping Cart
•   Payment By Credit Card
•   Order Confirmation
 -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>HomePage</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="myNav">
                    <h1 class="logo"><a href="home.php">Rokomari Book Store</a></h1>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 300px;">
                        <li class="nav-item">
                            <a class="nav-link" href="books_catalog.php">Book Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shopping_cart.php">Shopping Cart</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="order_confirmation.php">Order Confirmation</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="payment.php">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_profile.php">User Profile</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/book-7.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/books.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/istockphoto1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php
        include_once('footer.php');
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>
        //Carousel
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 1400,
            wrap: true
        });
    </script>
</body>

</html>