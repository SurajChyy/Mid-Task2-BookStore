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

    <title>SignIn</title>
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

    <form method="post" action="home.php">
        <div class="container">
            <h1>User Sign In</h1>
            <div class="registration">
                <div class="mb-3 row">
                    <label for="inputUserName" class="col-md-3 col-form-label">User Name:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="inputUserName" name="user_name" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-md-3 col-form-label">Email:</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="inputEmail" name="email" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-md-3 col-form-label">Password:</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" id="inputPassword" name="password" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Log in</button>
            </div>
            <div class="container signup">
                <p>Create an Account. <a href="signup.php">SignUp</a></p>
            </div>
    </form>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>