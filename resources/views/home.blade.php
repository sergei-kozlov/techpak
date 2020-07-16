@extends('layout.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #2d3246">
    <a href="#" class="navbar-brand">
        <img src="icons/index.png" width="32" height="32" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ul-text-size">


            <li class="nav-item active mx-3">
                <a href="#" class="nav-link">Home</a>
            </li>

            <li class="nav-item mx-3">
                <a href="#" class="nav-link">About us</a>
            </li>

            {{--Dropdown--}}
            <li class="nav-item dropdown mx-3 drop-0">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Product list
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Product 1</a>
                    <a class="dropdown-item" href="#">Product 2</a>
                    <a class="dropdown-item" href="#">Product 3</a>
                </div>
            </li>
            {{-- End fo Dropdown--}}


            <li class="nav-item mx-3">
                <a href="#" class="nav-link">Contact</a>
            </li>

            <li class="nav-item mx-4 my-2 ">
                <a href="tel:+79001234567" class="my-1 color-contact">тел. +7 (900) 123-45-67</a>
            </li>

            <li class="nav-item mx-4 my-2">
                <a href="tel:+79001234567" class="my-1 color-contact">тел. +7 (900) 123-45-67</a>

            </li>

            <li class="nav-item mx-4 my-2">
                <a href="mailto:vlad@htmlbook.ru" class="color-contact">vlad@htmlbook.ru</a>

            </li>

        </ul>
    </div>
</nav>
{{--End of Nav bar--}}

{{--Start of Slider--}}
<div class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0">
            </li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1">
            </li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2">
            </li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Slider/1_cr.jpg" alt="" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="Slider/2_cr.jpg" alt="" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="Slider/3_cr.jpg" alt="" class="d-block w-100">
            </div>


        </div>
        <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

{{--End of Slider--}}

<div class="container marketing my-5">

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span
                    class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"/>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"/>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"/>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">
</div>

{{--Footer--}}

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4 my-5">
                    <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion,
                        business consulting, and marketing.</p>
                    {{--Rights--}}
                    <p class="rights"><span>©  </span><span
                            class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 my-4">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dt>Address:</dt>
                    <dd>798 South Park Avenue, Jaipur, Raj</dd>
                </dl>
                <dl class="contact-list">
                    <dt>email:</dt>
                    <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3 my-4">
                <h5>Links</h5>
                <ul class="nav-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{--End of Footer--}}

@endsection

