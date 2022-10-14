<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/d451d1e88b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- header -->
    <div class="container-fluid header" style="background: rgba(0, 0, 0, 0.1)">
        <div class="container py-3">
            <div class="row">
                <div class="col lang_menu">
                    <?php foreach ($langArr as $item): ?>
                        <a class="mx-1" href="#"><img src="images/language_icons/<?=$item['language_flag'] ?>" alt=""></a>
                    <?php endforeach ?>
                </div>
                <div class="col text-end">
                    <ul class="list-inline social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <ul class="login d-flex align-items-center justify-content-end">
                        <li class="lf-item position-relative">
                            <input class="m-inpt lf-inpt" type="text" placeholder="Username">
                            <i class="fa fa-user lf-label_icon"></i>
                        </li>
                        <li class="lf-item"><button class="m-btn"><i class="fa fa-sign-in-alt"></i></button></li>
                        <li class="lf-item"><button class="m-btn"><i class="fa fa-user-plus"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-transparent">
                  <div class="container-fluid p-0">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Projects</a>
                        <a class="nav-link" href="#">About Us</a>
                        <a class="nav-link" href="#">Blog</a>
                        <a class="nav-link" href="#">Shop</a>
                        <a class="nav-link" href="#">Jobs</a>
                        <a class="nav-link" href="#">Press</a>
                        <a class="nav-link imedix-link" href="#">iMediX</a>
                      </div>
                    </div>
                  </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end of header -->
    
    <!-- on scroll navbar / hidden by default -->
    <div class="container-fluid scrolled-header" id="hidden_menu">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-transparent">
                  <div class="container-fluid p-0">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Projects</a>
                        <a class="nav-link" href="#">About Us</a>
                        <a class="nav-link" href="#">Blog</a>
                        <a class="nav-link" href="#">Shop</a>
                        <a class="nav-link" href="#">Jobs</a>
                        <a class="nav-link" href="#">Press</a>
                        <a class="nav-link imedix-link" href="#">iMediX</a>
                      </div>
                    </div>
                  </div>
                </nav>
            </div>
        </div>
    </div>


    <!-- header_slider -->
    <div class="container-fluid header_slider">
        <div class="row p-0">
            <div class="col w-100 p-0">
                <img class="w-100 image-fluid" src="images/header_slider/vienna.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- end of header slider -->

    <!-- our latest projects -->
    <div class="container-fluid our_latest_projects">
        <div class="row">
            <div class="col h1 text-center py-3">Our Latest Projects</div>
        </div>
        <div class="row projects_slider">
            <div class="col">
                projects slider carousel
            </div>
        </div>
    </div>

    <!-- role of -->
    <div class="container role_of my-5">
        <div class="row">
            <div class="col h1 mb-4">Role of money4you.financial</div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card border-0 pb-4">
                    <div><i class="fa fa-house"></i></div>
                    <div class="title my-4">Creating homes</div>
                    <div class="text">Get involved in projects with a social purpose. One of our main goal is to realise projects with a social responsibility background.</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 pb-4">
                    <div><i class="fa-regular fa-money-bill-1"></i></div>
                    <div class="title my-4">Generate profit</div>
                    <div class="text">Our projects give you the opportunity to earn high rate of interests. The rest is up to you!</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 pb-4">
                    <div><i class="fa-solid fa-arrow-trend-up"></i></div>
                    <div class="title my-4">Boosting the economy</div>
                    <div class="text">The projects we offer have a positive effect not just on the social environment but on the entire economy as well.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- did you know -->
    <div class="container-fluid did_you_know my-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex flex-column justify-content-center align-items-start">
                    <div class="h2 text-white">Did you know?</div>
                    <div class="text my-3">One of the hottest areas currently in the world of crowdfunding is real estate. A swiss study found that the growth in crowdinvesting there was driven principally by real estate crowdinvesting. This segment, which emerged in Switzerland only in 2015, had by 2016 already reached 32.4 million swiss francs in funds raised. </div>
                    <div><button class="rounded">KNOW MORE HERE</button></div>      
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="rounded" src="images/did_u_know/diagram.png" alt="">
                </div>
            </div>
        </div>
        <video playsinline autoplay muted loop poster="cake.jpg">
            <source src="images/did_u_know/video.mp4" type="video/webm">
                Your browser does not support the video tag.
        </video>
    </div>

    <!-- testimonials -->
    <div class="container testimonials">
        <div class="row">
            <div class="col-6">
                <div class="h2">Customer Testimonials</div>  
                <div><i class="fs-3 fa fa-quote-left"></i></div>  
                <div class="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators mx-0 d-flex justify-content-start">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <?php foreach ($testimonialsArr as $key=>$item): ?>
                            <?php $active=($key==0)?"active":"" ?>
                            <div class="carousel-item <?=$active?>">
                                <div><?=$item['testimonial_text']?></div>
                                <div class="signature my-3"><img class="h-100 image-fluid" src="images/testimonials/signatures/<?=$item['user_signature']?>" alt=""></div>
                                <div class="user_photo"><img class="h-100 image-fluid rounded-circle" src="images/testimonials/<?=$item['user_photo']?>" alt=""></div>
                                <div><?=$item['user_fullname']?></div>
                            </div>
                        <?php endforeach ?>
                      </div>
                    </div>
                </div>      
            </div>
            <div class="col-6">
                <div class="h2">Why People Choose Us</div>
                <div>photo</div>       
            </div>
        </div>
    </div>

    <!-- video intro -->

    <div class="container-fluid intro py-5">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 d-flex align-items-center">
                    <video class="w-100 rounded" autoplay muted controls loop>
                      <source src="images/intro/m4uf_720.mp4" type="video/mp4">
                      <source src="images/intro/m4uf_720.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-6">
                    <img class="w-100 image-fluid" src="images/intro/textarrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- statistics -->
    <div class="container py-5">
        <div class="row">
            
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                langues
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="images/footer/1.png" alt="">
                </div>
                <div class="col">
                    <img src="images/footer/2.png" alt="">
                </div>
                <div class="col">
                    <img src="images/footer/3.png" alt="">
                </div>
                <div class="col">
                    <img src="images/footer/4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer py-4">
        <div class="container">
            <div class="row">
                <div class="col">Copyright © 2022 Money4you.financial Group. All Rights Reserved.</div>
                <div class="col text-end">
                        <ul class="list-inline social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/jquery.js"></script>
    <script src="assets/home.js"></script> 
                          
</body>
</html>