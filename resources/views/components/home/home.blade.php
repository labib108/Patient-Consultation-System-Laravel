<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/home-image/slide1.jpg') }}" alt="Efficient Patient Management"
                    class="d-block w-100" />

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Streamlined Patient Management</h1>
                        <h3>Easily manage patient records, appointments, and medical history all in one secure system.
                        </h3>
                        <p><a class="btn btn-lg btn-primary" href="#">Explore Features</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/home-image/slide2.jpg') }}" alt="Real-Time Updates" class="d-block w-100" />

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Real-Time Updates & Notifications</h1>
                        <h3>Stay informed with instant updates on appointments, test results, and patient progress.</h3>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/home-image/slide3.jpg') }}" alt="Advanced Analytics" class="d-block w-100" />

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Advanced Analytics & Reporting</h1>
                        <h3>Make data-driven decisions with detailed analytics on hospital operations and patient care.
                        </h3>
                        <p><a class="btn btn-lg btn-primary" href="#">Get Started</a></p>
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
    <div class="m-4">
        <span class="p-4"></span>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing mt-3 mb-4">
        <!-- Three columns of text below the carousel -->
        <div class="row text-center">
            <div class="col-lg-4">
                <img src="images/doctor/doctor1.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 1">
                <h2>Dr. Sarah Thompson</h2>
                <p>Specialist in Cardiology with over 15 years of experience.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="images/doctor/doctor2.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 2">
                <h2>Dr. John Carter</h2>
                <p>Expert in Orthopedics, dedicated to providing personalized care.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="images/doctor/doctor3.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 3">
                <h2>Dr. Emily Brown</h2>
                <p>Renowned Neurologist with a focus on patient-centric solutions.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row text-center">
            <div class="col-lg-4">
                <img src="images/doctor/doctor4.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 1">
                <h2>Dr. Sarah Thompson</h2>
                <p>Specialist in Cardiology with over 15 years of experience.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="images/doctor/doctor5.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 2">
                <h2>Dr. John Carter</h2>
                <p>Expert in Orthopedics, dedicated to providing personalized care.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="images/doctor/doctor6.jpg" class="rounded-circle" width="140" height="140"
                    alt="Doctor 3">
                <h2>Dr. Emily Brown</h2>
                <p>Renowned Neurologist with a focus on patient-centric solutions.</p>
                <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    </div>
    <hr class="featurette-divider m-4">

    <div class="container mt-4">

        <!-- START THE FEATURETTES -->

        <div class="row featurette my-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">Health Check Packages <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Discover comprehensive health check packages designed to suit your needs. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Impedit, alias!</p>
                <div class="btn btn-info fs-5">Health Checks</div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/home-image/a.jpg') }}" alt="Health Check Image"
                    class="img-fluid featurette-image rounded">
            </div>
        </div>
        <hr class="featurette-divider my-6">
        <div class="row featurette my-5">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Comprehensive Eye Care.<span class="text-muted">For clearer
                        vision</span></h2>
                <p class="lead">Our eye care services are designed to provide you with the best treatment for your
                    vision. From routine eye exams to advanced treatments, we ensure that your eye health is always in
                    good hands. Whether you need a regular check-up or specialized care, we are here to help you
                    maintain your eyesight for a brighter future.</p>
                <div class="btn btn-info fs-5">Eye Care</div>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('images/home-image/b.jpg') }}" alt="Feature Image 1"
                    class="img-fluid featurette-image rounded">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette my-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">Expert Child Consultation <span class="text-muted">Your child's health
                        is our priority.</span></h2>
                <p class="lead">We understand the importance of proper medical care for your child’s development. Our
                    pediatric consultation services cater to the unique health needs of children, from infancy to
                    adolescence. Our expert pediatricians provide personalized care, ensuring that your child receives
                    the attention they need to grow up healthy and happy.</p>
                <div class="btn btn-info fs-5">Schedule a Visit</div>

            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/home-image/c.jpg') }}" alt="Feature Image 2"
                    class="img-fluid featurette-image rounded">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="newsletter js-rollover" data-radius="50">
            <svg viewBox="0 0 694 549" width="694" height="549">
                <path
                    d="M74.7,439.6c58.9,76.3,152.2,113.1,224.6,109C585.8,532.3,734.2,295,684.7,94.2C658.7-11.3,508.1-8.6,433.6,9.8C384.1,22,329.1,47.8,277.8,60.4c-42.5,10.5-90,7.2-130.4,17.1C60.4,99-21.1,201.9,4.9,307.6C16.7,355.3,45.2,401.4,74.7,439.6z">
                </path>
            </svg>

            <h2 class="newsletter-title">Get the latest<br> info about Tech</h2>
            <p class="newsletter-text">Register to our newsletter and don’t miss anything anymore. We promise we
                will not spam you!</p>

            <form method="GET" action="https://kikk.us6.list-manage.com/subscribe" class="newsletter-form"
                target="_blank">
                <input type="hidden" name="u" value="d08fe605a9149dc54a3c13f44">
                <input type="hidden" name="id" value="96f67efdeb">
                <input type="email" name="EMAIL" id="email" placeholder="Enter your email">
                <button type="submit" class="button">Subscribe</button>
            </form>
        </div>
    </div>
</main>
