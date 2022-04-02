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

    <style>
        /* Font */
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            background-color: #ecf9ff;
        }

        body {
            color: #272727;
            font-family: 'Quicksand', serif;
            font-style: normal;
            font-weight: 400;
            letter-spacing: 0;
            padding: 1rem;
        }

        .main {
            max-width: 1200px;
            margin: auto;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .btn {
            color: #ffffff;
            padding: 0.8rem;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: transparent;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        .made_by {
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
        }
    </style>

    <title>Book Catalog</title>
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

    <div class="main">
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card1.jfif"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">'Classic'- a book which people praise and don't read.
                            -Mark Twain</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card2.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">Sleep is good, he said, and books are better.
                            -George R.R. Martin</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card3.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">Many people, myself among them, feel better at the mere sight of a book.
                            -Jane Smiley </p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card2.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">The library is inhabited by spirits that come out of the pages at night.
                            -Isabel Allende</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card5.png"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">If you don't like to read, you haven't found the right book.
                            -J.K. Rowling</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="img/card6.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Books for all</h2>
                        <p class="card_text">Fill your house with stacks of books, in all the crannies and all the nooks.
                            -Dr. Seuss</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <?php
    include_once('footer.php');
    ?>

</body>

</html>