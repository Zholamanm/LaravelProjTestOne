@extends('layout')

@section('title') Страница про нас @endsection

@section('main_content')
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">About us</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">Why Choose Us?</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Premium Comfort</h3>
                    <p>Experience the epitome of luxury with top-notch amenities and interiors designed for ultimate relaxation.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Tech-Savvy Rooms</h3>
                    <p>Modern rooms equipped with the latest technology ensuring seamless connectivity and entertainment.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Exclusive Events</h3>
                    <p>Join us for exclusive events and workshops held throughout the year, fostering community and fun.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Feels Like Home</h3>
                    <p>A warm ambiance and attentive staff that ensures your stay feels just like home.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Central Locations</h3>
                    <p>Our properties are located in prime spots ensuring you're at the heart of action and convenience.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Customized Stay</h3>
                    <p>Choose how you stay. From room settings to breakfast choices, customize your experience with us.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Eco-Friendly</h3>
                    <p>We're committed to sustainability. Experience hospitality that cares for you and the environment.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">24/7 Support</h3>
                    <p>Have a question or need assistance? Our support team is available around the clock.</p>
                </div>
            </div>
        </div>
    </div>


    <br>

    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Features with title</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Discover Our Passion for Hospitality</h2>
                <p class="text-body-secondary">Embarking on a journey that spans decades, our hotel service has been the epitome of excellence in the hospitality industry. Our commitment is to deliver world-class experiences, unforgettable memories, and unparalleled comfort to each and every guest.</p>
                <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Exceptional Service</h4>
                        <p class="text-body-secondary">Our well-trained staff is dedicated to exceeding your expectations with impeccable service.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#gear-fill"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Easy Booking</h4>
                        <p class="text-body-secondary">With our user-friendly platform, secure your stay in just a few simple steps.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#speedometer"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Sustainable Practices</h4>
                        <p class="text-body-secondary">We believe in a green future and implement eco-friendly measures across our properties.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#table"></use>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Diverse Properties</h4>
                        <p class="text-body-secondary">From luxury resorts to boutique hotels, our diverse portfolio ensures a perfect stay for every traveler.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
