@extends('layout')

@section('title') Главная страница @endsection
@section('main_content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="" ></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner rounded-5">
            <div class="carousel-item active">
                <img src="https://oakmontseniorliving.com/fresno/wp-content/uploads/sites/32/2022/02/Fresno_LM_WEB-39-copy-2000x840.webp" alt="" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-start rounded-5" style="background-color: rgba(0,0,0,0.7)">
                        <h1 class="ms-3">Example headline.</h1>
                        <p class="opacity-75 ms-3">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-outline-info rounded-5 ms-3" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
               <img src="https://oakmontseniorliving.com/fresno/wp-content/uploads/sites/32/2022/02/Fresno_LM_WEB-45-2000x840.webp" alt="" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption rounded-5" style="background-color: rgba(0,0,0,0.7)">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-outline-info rounded-5" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://oakmontseniorliving.com/agourahills/wp-content/uploads/sites/44/2022/03/4-patio-2000x840.webp" alt="" class="img-fluid">

                <div class="container">
                    <div class="carousel-caption text-end rounded-5" style="background-color: rgba(0,0,0,0.7)">
                        <h1 class="mx-3">One more for good measure.</h1>
                        <p class="mx-3">Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="mx-3 btn btn-lg btn-outline-info rounded-5" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row mt-4 justify-content-between mx-5">
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Featured Hotel" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Luxury Hotel</title>
                    <image href="https://media-cdn.tripadvisor.com/media/photo-s/1a/ae/93/7c/hotel-luxury-stay.jpg" height="180px" width="190px" y="-20"/></svg>
                <h2 class="fw-normal">Luxury Stays</h2>
                <p>Experience the epitome of opulence with our curated selection of luxury hotels. Dive into magnificence.</p>
                <p><a class="btn btn-secondary" href="#">Discover »</a></p>
            </div>
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Budget Hotel" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Budget Hotel</title>
                    <image href="https://www.kohsamuibudgethotel.com/images/home/promotion-package.jpg" height="180px" width="190px" y="-20"/></svg>
                <h2 class="fw-normal">Budget Hotels</h2>
                <p>Quality accommodations that don't break the bank. Perfect for travelers looking for value and comfort.</p>
                <p><a class="btn btn-secondary" href="#">Explore »</a></p>
            </div>
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Beach Resort" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Beach Resort</title>
                    <image href="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/325685518.jpg?k=2bbbe9b857470291da0a8545a27cf3d1f3e758ae4a4a94f9d3fd1d77211c86cd&o=" height="180px" width="190px" y="-20"/></svg></svg>
                <h2 class="fw-normal">Beach Resorts</h2>
                <p>Step out of your room and onto the beach. Our resorts offer the best ocean views and sand-between-your-toes moments!</p>
                <p><a class="btn btn-secondary" href="#">View More »</a></p>
            </div>
        </div>

        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <div class="row featurette justify-content-center">
            <div class="col-md-5">
                <h2 class="featurette-heading fw-normal lh-1">Personalized Experience. <span class="text-body-secondary">Every guest is special.</span></h2>
                <p class="lead">With our deep understanding of travelers' needs, we offer tailored experiences ensuring every stay is unique and unforgettable.</p>
            </div>
            <div class="col-md-5">
                <img src="https://www.irongatehotel.com/images/galerie/ostatni-foto/hotel-service-top-rated-5stars-iron-gate-czech-republic.jpg" alt="" class="img-fluid">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette justify-content-center">
            <div class="col-md-5 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">World-class Cuisine. <span class="text-body-secondary">Dine with us.</span></h2>
                <p class="lead">Indulge in gastronomic delights. From local flavors to international dishes, our chefs craft culinary masterpieces that tantalize the taste buds.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/2/18/0/FN_Best-Hotels-Foodies-DC-the-line-hotel-dc-spoken-english-whole-duck_s6x4.jpg.rend.hgtvcom.616.411.suffix/1550519735681.jpeg" alt="" class="img-fluid">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette justify-content-center">
            <div class="col-md-5">
                <h2 class="featurette-heading fw-normal lh-1">Revitalize and Rejuvenate. <span class="text-body-secondary">Our Spa Awaits.</span></h2>
                <p class="lead">Step into a world of relaxation. Our spa services, curated by top therapists, offer treatments that refresh both mind and body.</p>
            </div>
            <div class="col-md-5">
                <img src="https://www.granhotelmiramarmalaga.com/wp-content/blogs.dir/1833/files/fotos-landings/spa-malaga-cabecera-movil.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

@endsection
