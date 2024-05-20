<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!-- navbar -->

    <div class="container-fluid p-0">

        <!-- first child -->

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="./images/library logo.png" alt="" class="logo">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Subscription Status</a>
                        </li>

                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>

                </div>

            </div>

        </nav>

        <!-- second child -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child -->

        <div class="bg-light">
            <h3 class="text-center">My Library</h3>
            <p class="text-center">
                Knowledge is the heart of evolution
            </p>
        </div>

        <!-- fourth child -->

        <div class="row">
            <div class="col-md-10">
                <!-- products -->

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Asus Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book1</h5>
                                <p class="card-text">About Book1</p>
                                <a href="#" class="btn btn-success">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-2 bg-secondary p-0">
                <!-- sidenav -->


                <!-- brands to be displayed -->

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-success">
                        <a href="" class="nav-link text-light">
                            <h4>Publisher</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            Publisher1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            Publisher2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            Publisher3
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            Publisher4
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            Publisher5
                        </a>
                    </li>

                </ul>

                <!-- categories to be displayed -->

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-success">
                        <a href="" class="nav-link text-light">
                            <h4>Categories</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            category1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            category2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            category3
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            category4
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">
                            caegory5
                        </a>
                    </li>

                </ul>

            </div>
        </div>

        <!-- last child 

        <div class="bg-info p-3 text-center">
            <p>All rights reserved etc etc etc</p>
        </div>

        -->



    </div>






    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>