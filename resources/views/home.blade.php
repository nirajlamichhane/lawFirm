@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Welcome to Marks and Marks Solicitors</h1>
            <h2>We are team of talented group of Lawyers who are trustwhorthy with your work</h2>
            <a href="#rcb" class="btn-get-started ">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Why Us</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6  align-self-baseline position-relative">
                        <img src="assets/img/image.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Work efficient lawyers</h3>
                        <p class="fst-italic">
                            Your donot have to worry about anything after you join us
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Effective work</li>
                            <li><i class="bx bx-check-double"></i> No problem to worry about</li>
                            <li><i class="bx bx-check-double"></i> 100% work to be done</li>
                            <li><i class="bx bx-check-double"></i>Customers friendly</li>
                        </ul>
                        <p>
                            Lawyer is a general term referring to anyone who is qualified to give legal advice as a
                            licensed legal practitioner. This includes solicitors and barristers. Solicitors provide
                            legal support, advice and services to clients, who can be individuals, private companies,
                            public sector organisations or other groups.
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Secs
                                                                                                                                                                                                                                                                                                                        tion -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">

                <div class="section-title pt-5">
                    <h2>Our Services</h2>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="">IMMIGRATION</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                                <h4 class="title"><a href="">INJURY CLAIMS</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i>
                                </div>
                                <h4 class="title"><a href="">FAMILY MATTERS</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                                <h4 class="title"><a href="">CIVIL LITIGATION</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                                <h4 class="title"><a href="">CRIMINAL LITIGATION</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                                <h4 class="title"><a href="">WILLS & PROBATE</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        {{-- Our Team --}}

        <div id="ourteam" class="ourteam">
            <div class="container">
                <div class="section-title ">
                    <h2>Our Team</h2>
                </div>
                <div class="member-container">
                    <div class="member">
                        <div class="member-top">
                            <div class="member-image">
                                <img src="{{ asset('assets/img/team/lawyers.jpg') }}" alt="image">
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter "></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="member-info">
                            <h4>Name</h4>
                            <span>Position</span>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laborum non iure suscipit
                                magnam impedit illo minima eligendi. Ad illum, at officiis explicabo numquam asperiores
                                minus possimus! Fugiat, tenetur nihil.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-top">
                            <div class="member-image">
                                <img src="{{ asset('assets/img/team/lawyers.jpg') }}" alt="image">
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter "></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="member-info">
                            <h4>Name</h4>
                            <span>Position</span>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique maiores rerum dolore
                                voluptate molestias natus eum, porro aliquid distinctio autem quod? Quis perspiciatis rem,
                                nihil cupiditate iusto quia et iure.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-top">
                            <div class="member-image">
                                <img src="{{ asset('assets/img/team/lawyers.jpg') }}" alt="image">
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter "></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="member-info">
                            <h4>Name</h4>
                            <span>Position</span>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eum hic ipsa repudiandae
                                reiciendis, nisi fugiat corrupti adipisci eligendi maxime, placeat earum, accusantium
                                consectetur perspiciatis quod cupiditate dolorum aliquam qui. </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>

        {{-- End of our Team --}}

        {{-- Start Videos --}}
        <!-- Carousel wrapper -->
        <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <!-- Indicators -->


            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                @foreach ($videos as $ind => $video)
                    <div class="carousel-item {{ $ind == 0 ? 'active' : '' }}">
                        <video height="500px" width="800px" class="img-fluid" autoplay loop muted>
                            <source src="{{ $video->video }}" />
                        </video>
                    </div>
                @endforeach
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample"
                    data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample"
                    data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->

            {{-- End of Videos --}}



            {{-- start of reviews --}}
            <div id="reviews" class="reviews">
                <div class="container">
                    <div class="section-title mt-4">
                        <h2>Clients Review</h2>
                    </div>
                    <div class="testimonial-box-container">
                        @foreach ($reviews as $review)
                            <div class="testimonial-box">
                                <div class="box-top">
                                    <div class="profile">
                                        <div class="profile-name">
                                            <strong>{{ $review->user->name }}</strong>
                                        </div>
                                    </div>
                                    <div class="review ">
                                        @for ($i = 1; $i <= $review->star; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="box-bottom">
                                    <p>{{ $review->description }} </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        {{-- end of reviews --}}

        {{-- Start Request a Call back --}}
        <div id="rcb" class="rcb">
            <div class="container">
                <div class="section-title mt-4">
                    <h2>Request A CallBack</h2>
                    <span>Do you require a solicitor? Please don't hesitate to get in touch with us. Use our quick
                        contact
                        form below and a member of our experienced and professional team of solicitors will contact you
                        as
                        soon as possible to discuss your requirements and your options.</span>
                </div>
                <form class="row g-3" action="{{ route('callback') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName4" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone4" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone4" name="phone">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                            name="address">
                    </div>

                    <div class="col-md-12">
                        <label for="inputNature" class="form-label">Nature of Your Enquiry</label>
                        <select class="form-select" name="enquiry">
                            <option selected>Please Select</option>
                            @foreach ($services as $service)
                                <option class="text-uppercase">{{ $service->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="input" class="form-label">A Short Description of Your Enquiry </label>
                        <textarea class="form-control" name="description" id="inputDescription" placeholder="What is your Enquiry about?"
                            cols="5" rows="5"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary m-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>


        {{-- End Request a call back --}}

        {{-- Testimonial --}}

        <div class="container">
            @auth
                <div class="section-title mt-4">
                    <h2>Testinomials</h2>
                </div>
                <form action="{{ route('testimonials') }}" class="row my-2" method="POST">
                    @csrf

                    {{-- star --}}
                    <div class="col-md-12">
                        <label for="inputStar" class="form-label">
                            <strong>Star</strong>
                        </label>
                        {{-- <input type="text" class="form-control" --}}
                        <div class="review" id="rating-container"
                            data-value="{{ $testimonial ? $testimonial->star : 1 }}">
                            <i class="bi bi-star rating-star" aria-hidden="true" id="star-1"></i>
                            <i class="bi bi-star rating-star" aria-hidden="true" id="star-2"></i>
                            <i class="bi bi-star rating-star" aria-hidden="true" id="star-3"></i>
                            <i class="bi bi-star rating-star" aria-hidden="true" id="star-4"></i>
                            <i class="bi bi-star rating-star" aria-hidden="true" id="star-5"></i>

                        </div>

                    </div>

                    <input type="hidden" id="star-form" name="star" value="0">

                    {{-- title --}}
                    <div class="col-md-12">
                        <label for="inputPhone4" class="form-label">
                            <strong>Title</strong>
                        </label>
                        <input value="{{ $testimonial ? $testimonial->title : '' }}" type="text" class="form-control"
                            name="title">
                    </div>
                    <div class="col-md-12">
                        <label for="input" class="form-label">
                            <strong>Description</strong>
                        </label>
                        <textarea class="form-control" name="description" placeholder="What is your Enquiry about?" cols="5"
                            rows="5">{{ $testimonial ? $testimonial->description : '' }}</textarea>
                    </div>
                    <div class="col-12 d-flex  mx-auto justify-content-end mt-1">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            @endauth
        </div>

        {{-- End of  Testimonial --}}


    </main>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.rating-star').click(function() {
                const id = $(this)[0].id
                const index = parseInt(id.split("-")[1])

                for (let i = 1; i <= 5; i++) {
                    $(`#star-${i}`).addClass("bi-star")
                    $(`#star-${i}`).removeClass("bi-star-fill")
                }
                giveRating(index)
            });

            const initialRating = $("#rating-container").data("value")
            giveRating(initialRating)
        });


        function giveRating(count) {
            for (let i = 1; i <= count; i++) {
                $(`#star-${i}`).removeClass("bi-star")
                $(`#star-${i}`).addClass("bi-star-fill")
            }
            $("#star-form").val(count);
        }
    </script>
@endsection
