@extends('Layout.landing')

@section('title', 'Academic Literature - Home')

@section('hero')
<div class="hero-section home-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-content">
                <h1>Academic literature</h1>
                <p class="lead">70 years of enduring impact</p>
                <a href="#" class="btn btn-light">Learn More</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Who We Are Section -->
<section class="who-we-are py-5">
    <div class="container">
        <h2 class="section-title">Who We Are</h2>
        <div class="row mt-4">
            <div class="col-lg-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non perferendis distinctio beatae aliquid inventore nisi cum omnis explicabo rerum, ex quo amet quam blanditiis quaerat vitae! Iure perferendis ea ab.</p>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolores soluta. Expedita temporibus quaerat nemo odit amet aliquid ipsum velit, deleniti asperiores laudantium itaque ipsa ab et, veniam natus mollitia!</p>
                <a href="#" class="btn btn-link">Explore our work <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise Section -->
<section class="our-expertise py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Left side: Title and description -->
            <div class="col-lg-4">
                <div class="expertise-content sticky-top" style="top: 100px;">
                    <h2 class="section-title">Our Expertise</h2>
                    <p class="section-subtitle">The Asia Foundation is an experienced leader in addressing critical issues across Asia.</p>
                    <div class="mt-4">
                        <a href="#" class=  "btn btn-primary">View All Programs</a>
                    </div>
                </div>
            </div>
            
            <!-- Right side: Photos/cards -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- Governance -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="Governance">
                            <div class="card-body">
                                <h5 class="card-title">Governance</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Economic Growth -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="Economic Growth">
                            <div class="card-body">
                                <h5 class="card-title">Economic Growth</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Environmental Resilience -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="Environmental Resilience">
                            <div class="card-body">
                                <h5 class="card-title">Environmental Resilience</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Education and Leadership -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="Education and Leadership">
                            <div class="card-body">
                                <h5 class="card-title">Education and Leadership</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Women's Empowerment -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="Women's Empowerment">
                            <div class="card-body">
                                <h5 class="card-title">Women's Empowerment</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- International Cooperation -->
                    <div class="col-md-6">
                        <div class="card expertise-card">
                            <img src="https://th.bing.com/th/id/OIP.0cqdtj-OwjO5EtUxl_f9xAHaE7?w=296&h=197&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="International Cooperation">
                            <div class="card-body">
                                <h5 class="card-title">International Cooperation</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="our-approach py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p class="approach-text">Our long-term presence, trusted relationships, vast networks and knowledge, and focus on locally led and owned solutions are what set us apart.</p>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="how-we-work py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://deepublishstore.com/wp-content/uploads/2020/04/gerakan-literasi-sekolah.jpg" alt="How We Work" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">How we work</h2>
                <p>The Asia Foundation partners with effective development agencies, foundations, corporations, and individuals to design and implement sustainable programs that build local knowledge, strengthen governance, expand economic opportunity, and increase environmental resilience.</p>
                <a href="#" class="btn btn-primary mt-3">Read More</a>
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
                <img src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2022/05/17/istock-1301601683jpg-20220517105244.jpg" alt="Support The Asia Foundation" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Support The Asia Foundation</h2>
                <p>Your support today drives positive change to remedy the pressing needs and support real agency.</p>
                <a href="#" class="btn btn-primary mt-3">Donate</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    body{
        font-family: 'catamaren', sans-serif;
    }
</style>
@endsection