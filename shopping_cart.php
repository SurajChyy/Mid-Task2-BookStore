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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }


        .cart {

            display: flex;

        }

        .products {
            margin-top: 10px;
            flex: 0.75;
        }

        .product {
            display: flex;
            width: 100%;
            height: 200px;
            overflow: hidden;
            border: 1px solid silver;
            margin-bottom: 20px;
        }

        .product:hover {
            border: none;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            transform: scale(1.01);
        }

        .product>img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        .product>img:hover {
            transform: scale(1.04);
        }

        .product-info {

            padding: 20px;

            width: 100%;

            position: relative;

        }

        .product-name,
        .product-price,
        .product-offer {

            margin-bottom: 20px;

        }

        .product-remove {

            position: absolute;

            bottom: 20px;

            right: 20px;

            padding: 10px 25px;

            background-color: green;

            color: white;

            cursor: pointer;

            border-radius: 5px;

        }

        .product-remove:hover {

            background-color: white;

            color: green;

            font-weight: 600;

            border: 1px solid green;

        }

        .product-quantity>input {

            width: 40px;

            padding: 5px;

            text-align: center;

        }

        .fa {

            margin-right: 5px;

        }

        .cart-total {

            margin-top: 10px;

            flex: 0.25;

            margin-left: 20px;

            padding: 20px;

            height: 240px;

            border: 1px solid silver;

            border-radius: 5px;

        }

        .cart-total p {

            display: flex;

            justify-content: space-between;

            margin-bottom: 30px;

            font-size: 20px;

        }

        .cart-total a {

            display: block;

            text-align: center;

            height: 40px;

            line-height: 40px;

            background-color: tomato;

            color: white;

            text-decoration: none;

        }

        .cart-total a:hover {
            background-color: red;
        }

        @media screen and (max-width: 700px) {
            .remove {
                display: none;
            }

            .product {
                height: 150px;
            }

            .product>img {
                height: 150px;
                width: 200px;
            }

            .product-name,
            .product-price,
            .product-offer {
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 900px) {
            .cart {
                flex-direction: column;
            }

            .cart-total {
                margin-left: 0;
                margin-bottom: 20px;
            }
        }

        @media screen and (max-width: 1220px) {
            .container {
                max-width: 95%;
            }
        }
    </style>

    <title>Shopping Cart</title>
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

    <div class="container">
        <div class="cart">
            <div class="products">
                <div class="product">
                    <img src="img/book-7.jpg">
                    <div class="product-info">
                        <h3 class="product-name">Angels And Demons</h3>
                        <h4 class="product-price">৳ 1,000</h4>
                        <h4 class="product-offer">50%</h4>
                        <p class="product-quantity">Qnt: <input value="1" name="">
                        <p class="product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="remove">Remove</span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <img src="img/card2.jpg">
                    <div class="product-info">
                        <h3 class="product-name">The Vinci Code</h3>
                        <h4 class="product-price"> ৳ 2,000</h4>
                        <h4 class="product-offer">40%</h4>
                        <p class="product-quantity">Qnt: <input value="1" name="">
                        <p class="product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="remove">Remove</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="cart-total">
                <p>
                    <span>Total Price</span>
                    <span>৳ 3,000</span>
                </p>
                <p>
                    <span>Number of Items</span>
                    <span>2</span>
                </p>
                <p>
                    <span>You Save</span>
                    <span>৳ 1,000</span>
                </p>
                <a href="#">Proceed to Checkout</a>
            </div>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>