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
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

        body {
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.5;
            color: #323232;
            font-size: 15px;
            font-weight: 400;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
        }

        .team-member,
        .team-member .team-img {
            position: relative;
        }

        .team-member {
            top: 20px;
            overflow: hidden;
        }

        .team-member,
        .team-member .team-img {
            position: relative;
        }

        .team-hover {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: 0;
            border: 20px solid rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.90);
            opacity: 0;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .team-member:hover .team-hover .desk {
            top: 35%;
        }

        .team-member:hover .team-hover,
        .team-member:hover .team-hover .desk,
        .team-member:hover .team-hover .s-link {
            opacity: 1;
        }

        .team-hover .desk {
            position: absolute;
            top: 0%;
            width: 100%;
            opacity: 0;
            -webkit-transform: translateY(-55%);
            -ms-transform: translateY(-55%);
            transform: translateY(-55%);
            -webkit-transition: all 0.3s 0.2s;
            transition: all 0.3s 0.2s;
            padding: 0 20px;
        }

        .desk,
        .desk h4,
        .team-hover .s-link a {
            text-align: center;
            color: #222;
        }

        .team-member:hover .team-hover .s-link {
            bottom: 10%;
        }

        .team-member:hover .team-hover,
        .team-member:hover .team-hover .desk,
        .team-member:hover .team-hover .s-link {
            opacity: 1;
        }

        .team-hover .s-link {
            position: absolute;
            bottom: 0;
            width: 100%;
            opacity: 0;
            text-align: center;
            -webkit-transform: translateY(45%);
            -ms-transform: translateY(45%);
            transform: translateY(45%);
            -webkit-transition: all 0.3s 0.2s;
            transition: all 0.3s 0.2s;
            font-size: 35px;
        }

        .desk,
        .desk h4,
        .team-hover .s-link a {
            text-align: center;
            color: #222;
        }

        .team-member .s-link a {
            margin: 0 10px;
            color: #333;
            font-size: 16px;
        }

        .team-title {
            position: static;
            padding: 20px 0;
            display: inline-block;
            letter-spacing: 2px;
            width: 100%;
        }

        .team-title h5 {
            margin-bottom: 0px;
            display: block;
            text-transform: uppercase;
        }

        .team-title span {
            font-size: 12px;
            text-transform: uppercase;
            color: #a5a5a5;
            letter-spacing: 1px;
        }
    </style>

    <title>User Profile</title>
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
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people1.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hi There !</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Martin Smith</h5>
                    <span>founder &amp; ceo</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people2.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hello World</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Franklin Harbet</h5>
                    <span>HR Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people3.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>I love to design</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Linda Anderson</h5>
                    <span>Marketing Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people4.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hi There !</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Martin Smith</h5>
                    <span>founder &amp; ceo</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people5.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hello World</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Franklin Harbet</h5>
                    <span>HR Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="img/people6.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>I love to design</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Linda Anderson</h5>
                    <span>Marketing Manager</span>
                </div>
            </div>

        </div>

    </div>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>