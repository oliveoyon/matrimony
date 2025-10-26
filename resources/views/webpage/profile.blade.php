@extends('layouts.front')

@push('styles')
    <style>
        #profile-details .nav-link.active {
            color: #077f46 !important;
            border-bottom: 3px solid #077f46 !important;
            background-color: #e6f4ee !important;
        }

        #profile-details .accordion-button:not(.collapsed) {
            box-shadow: none;
        }

        #profile-details .accordion-button::after {
            filter: brightness(0) invert(1);
            /* makes the arrow white */
        }
    </style>
@endpush

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Member Profile</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Home</a></li>
                    <li class="current">Member Profile</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->



    <!-- Member Profile Section -->
    <section id="member-profile" class="agent-profile section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Hero Profile Header -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="150">
                    <div class="agent-photo-wrapper">
                        <img src="{{ asset('assets/img/real-estate/agent-3.webp') }}" alt="Member Photo"
                            class="img-fluid agent-photo">
                        <div class="agent-badge">
                            <i class="bi bi-heart-fill"></i>
                            <span>Verified Member</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
                    <div class="agent-info">
                        <h1 class="agent-name">Nusrat Jahan</h1>
                        <p class="agent-title">Age: 27 | Height: 5'4" | Dhaka, Bangladesh</p>
                        <p class="agent-tagline">“Looking for a kind, educated and family-oriented life partner.”</p>

                        <div class="contact-info-hero">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+880 1711 234567</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>nusrat.jahan@example.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Currently Living in Dhanmondi, Dhaka</span>
                            </div>
                        </div>

                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary">Send Interest</a>
                            <a href="#details" class="btn btn-outline">View More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member Stats -->
            <div class="stats-section" data-aos="fade-up" data-aos-delay="100">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <div class="stat-number">5+</div>
                            <div class="stat-label">Interests Received</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-calendar-heart-fill"></i>
                            </div>
                            <div class="stat-number">2</div>
                            <div class="stat-label">Years Registered</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-chat-heart-fill"></i>
                            </div>
                            <div class="stat-number">12+</div>
                            <div class="stat-label">Messages Sent</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="stat-number">Verified</div>
                            <div class="stat-label">Profile Status</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member Bio & Details -->
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-4 mb-4">
                    <div class="sidebar-info">
                        <div class="contact-card">
                            <h4>Contact Information</h4>

                            <div class="contact-details">
                                <div class="contact-detail">
                                    <i class="bi bi-telephone"></i>
                                    <div>
                                        <strong>Phone</strong>
                                        <p>+880 1711 234567</p>
                                    </div>
                                </div>
                                <div class="contact-detail">
                                    <i class="bi bi-envelope"></i>
                                    <div>
                                        <strong>Email</strong>
                                        <p>nusrat.jahan@example.com</p>
                                    </div>
                                </div>
                                <div class="contact-detail">
                                    <i class="bi bi-geo-alt"></i>
                                    <div>
                                        <strong>Address</strong>
                                        <p>House 10, Road 7<br>Dhanmondi, Dhaka</p>
                                    </div>
                                </div>
                            </div>

                            <div class="social-links">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>

                        <div class="specialties-card">
                            <h4>Personal Details</h4>
                            <div class="specialty-tags">
                                <span class="specialty-tag">Sunni Muslim</span>
                                <span class="specialty-tag">Postgraduate</span>
                                <span class="specialty-tag">Working Professional</span>
                                <span class="specialty-tag">Non-Smoker</span>
                                <span class="specialty-tag">Family-Oriented</span>
                            </div>
                        </div>

                        <div class="certifications-card">
                            <h4>Interests</h4>
                            <div class="cert-item">
                                <i class="bi bi-music-note-beamed"></i>
                                <span>Music & Art</span>
                            </div>
                            <div class="cert-item">
                                <i class="bi bi-book-fill"></i>
                                <span>Reading</span>
                            </div>
                            <div class="cert-item">
                                <i class="bi bi-tree-fill"></i>
                                <span>Traveling</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="bio-content">
                        <h3>About Me</h3>
                        <p>Assalamu Alaikum! I am Nusrat, a 27-year-old professional from Dhaka. I come from a small,
                            well-educated family with traditional values. I love spending time with my family, reading, and
                            traveling to new places.</p>

                        <p>I’m looking for a caring, honest, and understanding partner who values family and faith. I
                            believe marriage is built on mutual respect, trust, and compassion.</p>

                        <!-- Profile Section with Tabs and Accordions -->
                        <div id="profile-details" class="container my-5">

                            <ul class="nav nav-tabs border-0" id="profileTab" role="tablist"
                                style="border-bottom: 3px solid #077f46;">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active fw-semibold text-dark" id="details-tab"
                                        data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab"
                                        style="border: none;">
                                        Detailed Profile
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-semibold text-dark" id="preference-tab"
                                        data-bs-toggle="tab" data-bs-target="#preference" type="button" role="tab"
                                        style="border: none;">
                                        Partner Preference
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-semibold text-dark" id="gallery-tab" data-bs-toggle="tab"
                                        data-bs-target="#gallery" type="button" role="tab" style="border: none;">
                                        Photo Gallery
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content p-4 bg-light border rounded-bottom shadow-sm" id="profileTabContent">

                                <!-- Detailed Profile Tab -->
                                <div class="tab-pane fade show active" id="details" role="tabpanel">
                                    <div class="accordion" id="detailsAccordion">

                                        <!-- Basic Information -->
                                        <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                                            <h2 class="accordion-header" id="headingBasic">
                                                <button class="accordion-button fw-semibold text-white" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseBasic"
                                                    aria-expanded="true" aria-controls="collapseBasic"
                                                    style="background-color:#077f46;">
                                                    Basic Information
                                                </button>
                                            </h2>
                                            <div id="collapseBasic" class="accordion-collapse collapse show"
                                                aria-labelledby="headingBasic" data-bs-parent="#detailsAccordion">
                                                <div class="accordion-body bg-white">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong>Age:</strong> 32 Years</p>
                                                            <p><strong>Blood Group:</strong> B+</p>
                                                            <p><strong>Height:</strong> 5.05 Inch</p>
                                                            <p><strong>Religion:</strong> Muslim - Sunni - Hanafi</p>
                                                            <p><strong>Languages:</strong> Bangla, English</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong>Eye Color:</strong> Brown</p>
                                                            <p><strong>Hair Color:</strong> Black</p>
                                                            <p><strong>Complexion:</strong> Brown Skin</p>
                                                            <p><strong>Disability:</strong> Normal</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Family Information -->
                                        <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                                            <h2 class="accordion-header" id="headingFamily">
                                                <button class="accordion-button collapsed fw-semibold text-white"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFamily" aria-expanded="false"
                                                    aria-controls="collapseFamily" style="background-color:#077f46;">
                                                    Family Information
                                                </button>
                                            </h2>
                                            <div id="collapseFamily" class="accordion-collapse collapse"
                                                aria-labelledby="headingFamily" data-bs-parent="#detailsAccordion">
                                                <div class="accordion-body bg-white">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong>Father's Name:</strong> Kutub Uddin</p>
                                                            <p><strong>Father's Profession:</strong> Executive</p>
                                                            <p><strong>Mother's Name:</strong> Hasina Banu</p>
                                                            <p><strong>Mother's Profession:</strong> Homemaker</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong>Total Brothers:</strong> One</p>
                                                            <p><strong>Total Sisters:</strong> One</p>
                                                            <p><strong>Present Address:</strong> Dhaka, Bangladesh</p>
                                                            <p><strong>Home District:</strong> Dhaka, Bangladesh</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Education Information -->
                                        <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                                            <h2 class="accordion-header" id="headingEducation">
                                                <button class="accordion-button collapsed fw-semibold text-white"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEducation" aria-expanded="false"
                                                    aria-controls="collapseEducation" style="background-color:#077f46;">
                                                    Education Information
                                                </button>
                                            </h2>
                                            <div id="collapseEducation" class="accordion-collapse collapse"
                                                aria-labelledby="headingEducation" data-bs-parent="#detailsAccordion">
                                                <div class="accordion-body bg-white">
                                                    <p><strong>University:</strong> World University</p>
                                                    <p><strong>Degree:</strong> MBA, Finance</p>
                                                    <p><strong>Status:</strong> Running</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Career Information -->
                                        <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                                            <h2 class="accordion-header" id="headingCareer">
                                                <button class="accordion-button collapsed fw-semibold text-white"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseCareer" aria-expanded="false"
                                                    aria-controls="collapseCareer" style="background-color:#077f46;">
                                                    Career Information
                                                </button>
                                            </h2>
                                            <div id="collapseCareer" class="accordion-collapse collapse"
                                                aria-labelledby="headingCareer" data-bs-parent="#detailsAccordion">
                                                <div class="accordion-body bg-white">
                                                    <p><strong>Profession:</strong> HR Professional</p>
                                                    <p><strong>Job Type:</strong> Full Time</p>
                                                    <p><strong>Status:</strong> Running</p>
                                                    <p><strong>Organization:</strong> ABC Group Ltd.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Partner Preference Tab -->
                                <div class="tab-pane fade" id="preference" role="tabpanel">
                                    <div class="accordion" id="preferenceAccordion">
                                        <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                                            <h2 class="accordion-header" id="headingPref1">
                                                <button class="accordion-button fw-semibold text-white" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsePref1"
                                                    aria-expanded="true" aria-controls="collapsePref1"
                                                    style="background-color:#077f46;">
                                                    General Preferences
                                                </button>
                                            </h2>
                                            <div id="collapsePref1" class="accordion-collapse collapse show"
                                                aria-labelledby="headingPref1" data-bs-parent="#preferenceAccordion">
                                                <div class="accordion-body bg-white">
                                                    <p><strong>Preferred Age Range:</strong> 25–32 Years</p>
                                                    <p><strong>Education Level:</strong> Minimum Bachelor</p>
                                                    <p><strong>Religion:</strong> Muslim (Sunni)</p>
                                                    <p><strong>Location:</strong> Dhaka or nearby</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Photo Gallery Tab -->
                                <div class="tab-pane fade" id="gallery" role="tabpanel">
                                    <h5 class="mb-3 text-success fw-semibold">Photo Gallery</h5>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <img src="https://via.placeholder.com/300x300"
                                                class="img-fluid rounded shadow-sm" alt="Photo 1">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://via.placeholder.com/300x300"
                                                class="img-fluid rounded shadow-sm" alt="Photo 2">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://via.placeholder.com/300x300"
                                                class="img-fluid rounded shadow-sm" alt="Photo 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <h4>Partner Preferences</h4>
                        <p>Seeking a groom aged between 28–33, educated, professionally established, preferably from
                            Bangladesh, who shares similar cultural and religious values.</p>

                        <div class="achievements">
                            <h4>Recent Updates</h4>
                            <ul>
                                <li>Profile verified in August 2025</li>
                                <li>Completed master’s degree in Management</li>
                                <li>Joined Matrimony platform in 2023</li>
                                <li>Received multiple interests from verified members</li>
                            </ul>
                        </div> --}}
                    </div>


                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-section" id="contact" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="contact-form-wrapper">
                            <h3 class="text-center mb-4">Send a Message</h3>
                            <p class="text-center mb-4">Interested in connecting? Send a respectful message to express your
                                interest.</p>

                            <form action="#" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control" id="phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="purpose" class="form-label">Message Type</label>
                                        <select name="purpose" class="form-control" id="purpose" required="">
                                            <option value="">Select Option</option>
                                            <option value="interest">Send Interest</option>
                                            <option value="message">Private Message</option>
                                            <option value="inquiry">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="5"
                                        placeholder="Write your message here..."></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Member Profile Section -->
@endsection
