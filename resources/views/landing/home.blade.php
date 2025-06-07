@extends('Layout.landing')

@section('title', 'Academic Literature - Home')

@section('hero')
    <div class="hero-section home-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-content">
                    <h1>Academic literature</h1>
                    <p class="lead">70 years of enduring impact</p>
                    <a href="#" class="btn btn-learn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Who We Are Section -->
    <section class="who-we-are">
        <div class="container cls-hero">
            <h2 class="section-title">Who We Are</h2>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non perferendis distinctio beatae aliquid
                        inventore nisi cum omnis explicabo rerum, ex quo amet quam blanditiis quaerat vitae! Iure
                        perferendis ea ab.</p>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolores soluta. Expedita temporibus
                        quaerat nemo odit amet aliquid ipsum velit, deleniti asperiores laudantium itaque ipsa ab et, veniam
                        natus mollitia!</p>
                    <a href="#" class="btn">Explore our work <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our programs Section -->
    <section class="our-programs ">
        <div class="container">
            <div class="row">
                <!-- Left side: Title and description -->
                <div class="col-lg-4">
                    <div class="programs-content" style="top: 100px;">
                        <h2 class="section-title">Our programs</h2>
                        <p class="section-subtitle">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit mollitia necessitatibus pariatur
                            aliquam deserunt obcaecati debitis et nisi quos omnis nihil aspernatur unde, eligendi dolore
                            consectetur? Fugit corrupti autem magnam!
                        </p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-program">View All Programs</a>
                        </div>
                    </div>
                </div>

                <!-- Right side: Grid Cards -->
                <div class="col-lg-8">
                    <div class="programs-grid">
                        <!-- Governance -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="Governance">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">Governance</h5>
                                </a>
                            </div>
                        </div>

                        <!-- Economic Growth -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="Economic Growth">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">Economic Growth</h5>
                                </a>
                            </div>
                        </div>

                        <!-- Environmental Resilience -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="Environmental Resilience">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">Environmental Resilience</h5>
                                </a>
                            </div>
                        </div>

                        <!-- Education and Leadership -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="Education and Leadership">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">Education and Leadership</h5>
                                </a>
                            </div>
                        </div>

                        <!-- Women's Empowerment -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="Women's Empowerment">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">Women's Empowerment</h5>
                                </a>
                            </div>
                        </div>

                        <!-- International Cooperation -->
                        <div class="card programs-card">
                            <img src="https://parsonshouseaustin.com/wp-content/uploads/sites/5/2023/02/Senior-couple-smiling-and-reading-a-book-by-sitting-on-the-couch..jpg"
                                class="card-img-top" alt="International Cooperation">
                            <div class="card-body-ex">
                                <a href="#">
                                    <h5 class="card-title">International Cooperation</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="our-approach">
        <div class="container approach">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="approach-text">Our long-term presence, trusted relationships, vast networks and knowledge, and
                        focus on locally led and owned solutions are what set us apart.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="how-we-work py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://deepublishstore.com/wp-content/uploads/2020/04/gerakan-literasi-sekolah.jpg"
                        alt="How We Work" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">How we work</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque officia quibusdam deleniti voluptas,
                        quisquam inventore doloribus neque fugiat at dolorum delectus enim. Possimus, amet. Vero accusamus
                        at autem dolor eius!</p>
                    <a href="#" class="btn btn-work">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Where We Work Section -->
    <section class="where-we-work py-5 bg-dark text-white">
        <div class="container">
            <h2 class="section-title">Where We Work</h2>

            <div class="row mt-4">
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Afghanistan</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Bangladesh</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Cambodia</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>India</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Indonesia</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Japan</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Korea</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Laos</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Malaysia</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Mongolia</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Myanmar</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Nepal</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Pacific Islands</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Pakistan</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Philippines</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Singapore</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Sri Lanka</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Thailand</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Timor-Leste</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Vietnam</h6>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>San Francisco</h6>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-3">
                    <h6>Washington, D.C.</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2022/05/17/istock-1301601683jpg-20220517105244.jpg"
                        alt="Support The Asia Foundation" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Support The Asia Foundation</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda consectetur saepe in vel atque
                        corporis dolore quas natus esse soluta, ad, facere eaque aut sint, dignissimos quis quae debitis
                        animi.</p>
                    <a href="#" class="btn btn-donate2">Donate</a>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        window.addEventListener("scroll", function() {
            const btn = document.querySelector('.back-to-top');
            if (window.scrollY > 200) {
                btn.style.opacity = '1';
                btn.style.pointerEvents = 'auto';
            } else {
                btn.style.opacity = '0';
                btn.style.pointerEvents = 'none';
            }
        });

        document.querySelector('.back-to-top').addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    </script>

@endsection
