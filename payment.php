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

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
        }

        .wrapper {
            background-color: #fff;
            width: 500px;
            padding: 25px;
            margin: 25px auto 25px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        }

        .wrapper h2 {
            background-color: #fcfcfc;
            color: #4169E1;
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #333;

        }

        form h4 {
            padding-bottom: 5px;
            color: #4169E1;
        }

        .input-group {
            margin-bottom: 8px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            padding: 5px 0;
        }

        .input-box {
            width: 100%;
            margin-right: 12px;
            position: relative;
        }

        .input-box:last-child {
            margin-right: 0;
        }

        .name {
            padding: 14px 10px 14px 50px;
            width: 100%;
            background-color: #fcfcfc;
            border: 1px solid #00000033;
            outline: none;
            letter-spacing: 1px;
            transition: 0.3s;
            border-radius: 3px;
            color: #333;
        }

        .name:focus,
        .dob {
            -webkit-box-shadow: 0 0 2px 1px #4169E1;
            -moz-box-shadow: 0 0 2px 1px #4169E1;
            border: 1px solid #4169E1;
        }

        .input-box .icon {
            width: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            color: #333;
            background-color: #f1f1f1;
            transition: 0.3s;
            border-radius: 2px 0 0 2px;
            font-size: 20px;
            pointer-events: none;
            border: 1px solid#000033;
            border-right: none;
        }

        .name:focus+.icon {
            background-color: #4169E1;
            transition: 1s;
            border-right: 1px solid #4169E1;
            color: #fff;
            border: none
        }

        .dob {
            width: 30%;
            padding: 14px;
            text-align: center;
            background-color: #fcfcfc;
            transition: 0.3s;
            outline: none;
            border: 1px solid#c0bfbf;
            border-radius: 3px;
        }

        .radio {
            display: none;
        }

        .input-box label {
            width: 50%;
            padding: 13px;
            background-color: #fcfcfc;
            display: inline-block;
            float: left;
            text-align: center;
            border-radius: 1px solid #c0bfbf;
        }

        .input-box label:first-of-type {
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-right: none;
        }

        .input-box label:last-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .radio:checked+label {
            background-color: #4169e1;
            color: #fff;
            transition: 0.5s;
        }


        input-box select {
            display: inline-block;
            width: 50%;
            padding: 12px;
            background-color: #fcfcfc;
            float: left;
            text-align: center;
            font-size: 16px;
            outline: none;
            border: 1px solid #c0bfbf;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .input-box select:focus {
            background-color: #4169e1;
            color: #fff;
            text-align: center;
        }

        button {
            width: 100%;
            background: transparent;
            border: none;
            background: #4169e1;
            color: #fff;
            padding: 15px;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.35s ease;
        }

        button:hover {
            pointer: cursor;
            background: #4169e1;
        }
    </style>

    <link rel="stylesheet" href="css/style.css">

    <title>Payment</title>
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


    <div class="wrapper">
        <h2>Book Payment Form</h2>
        <form>
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">

                </div>
                <div class="input-box">
                    <input type="text" placeholder="username" required class="name">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="email" required class="name">
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Date of birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYY" class="dob">
                </div>
                <div class="input-box">
                    <h4>Gender</h4>
                    <input type="radio" name="gender" checked id="b1" class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" name="gender" class="radio" id="b2">
                    <label for="b2">Female</label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1">
                        <span>
                            <i class="fa fa-cc-visa ">Credit card</i>
                        </span>
                    </label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2">
                        <span>
                            <i class="fa fa-cc-paypal ">paypal </i>
                        </span>
                    </label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" class="name" placeholder="card number" required>

                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" required placeholder="Card CVC">

                </div>
                <div class="input-box">
                    <select>
                        <option>01 Dec</option>
                        <option>02 Dec</option>
                        <option>03 Dec</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <button type="submit">Pay Now</button>
                </div>
            </div>

        </form>


    </div>


    <?php
    include_once('footer.php');
    ?>
</body>

</html>