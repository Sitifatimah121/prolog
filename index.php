<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeShop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Main content  -->
    <div class="container">
        <!-- Navbar here -->
        <div class="py-2"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand mb-0 h1" href="#">WeShop.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hiring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Robust</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="my-2 my-lg-0">
                    <button type="submit" class="btn btn-light">Log In</button>
                    <button type="submit" class="btn btn-dark">Sign Up</button>
                </ul>
            </div>
        </nav>

        <!-- Jumbotron content -->
        <div class="py-4"></div>
        <div class="jumbotron bg-pinky rounded">
            <div class="row">
                <div class="col-md">
                    <h1 class="display-4">Hello, World!</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed earum, quas delectus, quibusdam illo vel voluptatem nesciunt quo maxime quidem error ducimus consequuntur</p>
                    <hr class="my-4">
                    <a href="http://">How they work&nbsp;&nbsp;<span>&#10230;</span></a>
                </div>
                <div class="col-md">
                    <div class="content-box">
                        <img class="image-ilustrator" src="asset/image_content/pale-order-completed.png" alt="Ilustration by. Icons8">
                    </div>
                </div>
            </div>
            <div class="py-4"></div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h4>Categories</h4>
            </div>
            <div class="col-md-9">
                <!-- <div class="container">
                    <div class="float-right">
                        Sort by
                    </div>
                </div> -->

                <div class="card-columns">
                    <div class="card">
                        <img src="asset/image_content/art1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title that wraps to a new line</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="clearfix">
                            <div class="float-left">
                                &#9734; 4.6
                            </div>
                            <div class="float-right">
                                <p class="card-text"><small class="text-muted">By. Missipi</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card p-3">
                        <blockquote class="blockquote mb-0 card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                    <div class="card">
                        <img src="asset/image_content/art4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <div class="clearfix">
                            <div class="float-left">
                                &#9734; 4.6
                            </div>
                            <div class="float-right">
                                <p class="card-text"><small class="text-muted">By. Alex32</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card bg-primary text-white text-center p-3">
                        <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer class="blockquote-footer text-white">
                            <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="asset/image_content/art2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    &#9734; 4.6
                                </div>
                                <div class="float-right">
                                    <p class="card-text"><small class="text-muted">By. Muvin</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="asset/image_content/art3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <div class="clearfix">
                            <div class="float-left">
                                &#9734; 4.6
                            </div>
                            <div class="float-right">
                                <p class="card-text"><small class="text-muted">By. Grizi</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                        <div class="clearfix">
                            <div class="float-left">
                                &#9734; 4.6
                            </div>
                            <div class="float-right">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END main content -->


    <!-- Javascript end of body -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<!-- https://icons8.com -->