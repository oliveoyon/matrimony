@extends('layouts.front')

@section('content')
    <section id="hero" class="hero section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="hero-wrapper">
      <div class="row g-4">

        <div class="col-lg-7">
          <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
            <div class="content-header">
              <span class="hero-label">
                <i class="bi bi-house-heart"></i>
                Find Your Match
              </span>
              <h1>Discover Your Perfect Life Partner</h1>
              <p>Connect with verified profiles and find someone who truly complements your lifestyle and values.</p>
            </div>

            <div class="search-container" data-aos="fade-up" data-aos-delay="300">
              <div class="search-header">
                <h3>Start Your Search</h3>
                <p>Explore thousands of verified profiles</p>
              </div>

              <form action="" class="property-search-form">
                <div class="search-grid">
                  <div class="search-field">
                    <label for="search-location" class="field-label">Location</label>
                    <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                    <i class="bi bi-geo-alt field-icon"></i>
                  </div>

                  <div class="search-field">
                    <label for="search-type" class="field-label">Gender</label>
                    <select id="search-type" name="gender" required="">
                      <option value="">Any</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                    <i class="bi bi-gender-ambiguous field-icon"></i>
                  </div>

                  <div class="search-field">
                    <label for="search-budget" class="field-label">Age Range</label>
                    <select id="search-budget" name="age_range" required="">
                      <option value="">Any</option>
                      <option value="18-25">18-25</option>
                      <option value="26-35">26-35</option>
                      <option value="36-45">36-45</option>
                      <option value="46-60">46-60</option>
                    </select>
                    <i class="bi bi-calendar-range field-icon"></i>
                  </div>

                  <div class="search-field">
                    <label for="search-rooms" class="field-label">Marital Status</label>
                    <select id="search-rooms" name="marital_status">
                      <option value="">Any</option>
                      <option value="single">Single</option>
                      <option value="divorced">Divorced</option>
                      <option value="widowed">Widowed</option>
                    </select>
                    <i class="bi bi-person-lines-fill field-icon"></i>
                  </div>
                </div>

                <button type="submit" class="search-btn">
                  <i class="bi bi-search"></i>
                  <span>Find Profiles</span>
                </button>
              </form>
            </div>

            <div class="achievement-grid" data-aos="fade-up" data-aos-delay="400">
              <div class="achievement-item">
                <div class="achievement-number">
                  <span data-purecounter-start="0" data-purecounter-end="1250" data-purecounter-duration="1" class="purecounter"></span>+
                </div>
                <span class="achievement-text">Active Profiles</span>
              </div>
              <div class="achievement-item">
                <div class="achievement-number">
                  <span data-purecounter-start="0" data-purecounter-end="89" data-purecounter-duration="1" class="purecounter"></span>+
                </div>
                <span class="achievement-text">Verified Members</span>
              </div>
              <div class="achievement-item">
                <div class="achievement-number">
                  <span data-purecounter-start="0" data-purecounter-end="96" data-purecounter-duration="1" class="purecounter"></span>%
                </div>
                <span class="achievement-text">Success Rate</span>
              </div>
            </div>
          </div>
        </div><!-- End Hero Content -->

        <div class="col-lg-5">
          <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
            <div class="visual-container">
              <div class="featured-property">
                <img src="{{ asset('assets/images/2.jpg') }}" alt="Featured Profile" class="img-fluid">
                <div class="property-info">
                  <div class="property-price">28 yrs</div>
                  <div class="property-details">
                    <span><i class="bi bi-geo-alt"></i> Dhaka</span>
                    <span><i class="bi bi-heart"></i> Female</span>
                  </div>
                </div>
              </div>

              <div class="overlay-images">
                <div class="overlay-img overlay-1">
                  <img src="{{ asset('assets/images/4.jpg') }}" alt="Profile View" class="img-fluid">
                </div>
                <div class="overlay-img overlay-2">
                  <img src="{{ asset('assets/images/5.jpg') }}" alt="Profile View" class="img-fluid">
                </div>
              </div>

              <div class="agent-card">
                <div class="agent-profile">
                  <img src="{{ asset('assets/img/real-estate/agent-7.webp') }}" alt="Profile Advisor" class="agent-photo">
                  <div class="agent-info">
                    <h4>Sarah Ahmed</h4>
                    <p>Profile Advisor</p>
                    <div class="agent-rating">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <span class="rating-text">5.0 (94 reviews)</span>
                    </div>
                  </div>
                </div>
                <button class="contact-agent-btn">
                  <i class="bi bi-chat-dots"></i>
                </button>
              </div>
            </div>
          </div>
        </div><!-- End Hero Visual -->

      </div>
    </div>

  </div>

</section><!-- /Hero Section -->

<section id="home-about" class="home-about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="image-gallery">
          <div class="primary-image">
            <img src="{{ asset('assets/images/1.jpg') }}" alt="Happy Couple" class="img-fluid">
            <div class="experience-badge">
              <div class="badge-content">
                <div class="number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+</div>
                <div class="text">Years<br>Connecting Hearts</div>
              </div>
            </div>
          </div>
          <div class="secondary-image">
            <img src="{{ asset('assets/images/2.jpg') }}" alt="Successful Matches" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
        <div class="content">
          <div class="section-header">
            <span class="section-label">About MatrimonyBD</span>
            <h2>Helping Singles Find Their Perfect Match Since 2008</h2>
          </div>

          <p>We specialize in connecting individuals with compatible partners. With years of experience, we ensure that every profile is verified and every connection has the potential for a meaningful relationship.</p>

          <div class="achievements-list">
            <div class="achievement-item">
              <div class="achievement-icon">
                <i class="bi bi-heart"></i>
              </div>
              <div class="achievement-content">
                <h4><span data-purecounter-start="0" data-purecounter-end="3200" data-purecounter-duration="2" class="purecounter"></span>+ Matches Made</h4>
                <p>Successful connections and happy couples</p>
              </div>
            </div>
            <div class="achievement-item">
              <div class="achievement-icon">
                <i class="bi bi-people"></i>
              </div>
              <div class="achievement-content">
                <h4><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>% Satisfaction Rate</h4>
                <p>Our members trust us for meaningful relationships</p>
              </div>
            </div>
          </div>

          <div class="action-section">
            <a href="#" class="btn-cta">
              <span>Discover Our Story</span>
              <i class="bi bi-arrow-right"></i>
            </a>
            <div class="contact-info">
              <div class="contact-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="contact-details">
                <span>Call us today</span>
                <strong>+880 1234-567-890</strong>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Home About Section -->

<section id="featured-properties" class="featured-properties section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Featured Members</h2>
    <p>Meet some of our highly compatible verified singles</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-lg-8">

        <div class="featured-property-main" data-aos="zoom-in" data-aos-delay="200">
          <div class="property-hero">
            <img src="{{ asset('assets/images/3.jpg') }}" alt="Featured Member" class="img-fluid">
            <div class="property-overlay">
              <div class="property-badge-main premium">Premium</div>
              <div class="property-stats">
                <div class="stat-item">
                  <i class="bi bi-gender-male-female"></i>
                  <span>Age 28</span>
                </div>
                <div class="stat-item">
                  <i class="bi bi-briefcase-fill"></i>
                  <span>Software Engineer</span>
                </div>
                <div class="stat-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Dhaka, Bangladesh</span>
                </div>
              </div>
            </div>
          </div>
          <div class="property-hero-content">
            <div class="property-header">
              <div class="property-info">
                <h2><a href="#">Anika Rahman</a></h2>
                <div class="property-address">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>Dhaka, Bangladesh</span>
                </div>
              </div>
              <div class="property-price-main">Premium Member</div>
            </div>
            <p class="property-description">Anika is a well-educated, family-oriented professional seeking a life partner who shares similar values and interests.</p>
            <div class="property-actions-main">
              <a href="#" class="btn-primary-custom">Connect</a>
              <a href="#" class="btn-outline-custom">View Profile</a>
              <div class="property-listing-info">
                <span class="listing-status for-sale">Single</span>
                <span class="listing-date">Joined Today</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-4">

        <div class="properties-sidebar">

          <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="300">
            <div class="sidebar-property-image">
              <img src="{{ asset('assets/images/4.jpg') }}" alt="Member" class="img-fluid">
              <div class="sidebar-property-badge hot">Hot Match</div>
            </div>
            <div class="sidebar-property-content">
              <h4><a href="#">Rafiq Hasan</a></h4>
              <div class="sidebar-location">
                <i class="bi bi-pin-map"></i>
                <span>Chittagong, Bangladesh</span>
              </div>
              <div class="sidebar-specs">
                <span><i class="bi bi-gender-male"></i> 30 yrs</span>
                <span><i class="bi bi-briefcase-fill"></i> Entrepreneur</span>
                <span><i class="bi bi-book"></i> MBA</span>
              </div>
              <div class="sidebar-price-row">
                <div class="sidebar-price">Premium</div>
                <a href="#" class="sidebar-btn">View</a>
              </div>
            </div>
          </div>

          <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="400">
            <div class="sidebar-property-image">
              <img src="{{ asset('assets/images/5.jpg') }}" alt="Member" class="img-fluid">
              <div class="sidebar-property-badge new">New</div>
            </div>
            <div class="sidebar-property-content">
              <h4><a href="#">Samira Akter</a></h4>
              <div class="sidebar-location">
                <i class="bi bi-pin-map"></i>
                <span>Khulna, Bangladesh</span>
              </div>
              <div class="sidebar-specs">
                <span><i class="bi bi-gender-female"></i> 26 yrs</span>
                <span><i class="bi bi-briefcase-fill"></i> Teacher</span>
                <span><i class="bi bi-book"></i> B.Ed</span>
              </div>
              <div class="sidebar-price-row">
                <div class="sidebar-price">Standard</div>
                <a href="#" class="sidebar-btn">View</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div class="row gy-4 mt-4">

      <div class="col-xl-6" data-aos="fade-up" data-aos-delay="600">
        <div class="property-card-horizontal">
          <div class="property-image-horizontal">
            <img src="{{ asset('assets/images/1.jpg') }}" alt="Member" class="img-fluid">
            <div class="property-badge-horizontal exclusive">Exclusive</div>
          </div>
          <div class="property-content-horizontal">
            <h3><a href="#">Tanvir Ahmed</a></h3>
            <div class="property-location-horizontal">
              <i class="bi bi-geo-alt"></i>
              <span>Barishal, Bangladesh</span>
            </div>
            <div class="property-features">
              <span class="feature"><i class="bi bi-gender-male"></i> 32 yrs</span>
              <span class="feature"><i class="bi bi-briefcase-fill"></i> Doctor</span>
              <span class="feature"><i class="bi bi-book"></i> MBBS</span>
            </div>
            <p>Highly educated and family-oriented, looking for a meaningful life partnership.</p>
            <div class="property-footer-horizontal">
              <div class="property-price-horizontal">Premium</div>
              <a href="#" class="btn-view-horizontal">View Profile</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6" data-aos="fade-up" data-aos-delay="700">
        <div class="property-card-horizontal">
          <div class="property-image-horizontal">
            <img src="{{ asset('assets/images/2.jpg') }}" alt="Member" class="img-fluid">
            <div class="property-badge-horizontal new">New</div>
          </div>
          <div class="property-content-horizontal">
            <h3><a href="#">Fatema Noor</a></h3>
            <div class="property-location-horizontal">
              <i class="bi bi-geo-alt"></i>
              <span>Rajshahi, Bangladesh</span>
            </div>
            <div class="property-features">
              <span class="feature"><i class="bi bi-gender-female"></i> 27 yrs</span>
              <span class="feature"><i class="bi bi-briefcase-fill"></i> Architect</span>
              <span class="feature"><i class="bi bi-book"></i> B.Arch</span>
            </div>
            <p>Passionate about arts and culture, seeking a caring and compatible partner.</p>
            <div class="property-footer-horizontal">
              <div class="property-price-horizontal">Standard</div>
              <a href="#" class="btn-view-horizontal">View Profile</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Featured Properties Section -->

<section id="featured-services" class="featured-services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Key Services</h2>
    <p>Helping you find your perfect life partner with ease and trust</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-search"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Profile Search</a></h3>
            <p>Find compatible matches based on interests, education, and family background.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Advanced Filtering</li>
              <li><i class="bi bi-check-circle-fill"></i> Verified Profiles</li>
              <li><i class="bi bi-check-circle-fill"></i> Personalized Recommendations</li>
            </ul>
            <a href="#" class="service-link">
              <span>Explore Now</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('assets/img/real-estate/property-interior-1.webp') }}" class="img-fluid" alt="Profile Search" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-chat-dots"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Match Consultation</a></h3>
            <p>Professional guidance to understand compatibility and plan meetings effectively.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Compatibility Analysis</li>
              <li><i class="bi bi-check-circle-fill"></i> Personalized Advice</li>
              <li><i class="bi bi-check-circle-fill"></i> Meeting Coordination</li>
            </ul>
            <a href="#" class="service-link">
              <span>Get Consultation</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('assets/img/real-estate/property-exterior-2.webp') }}" class="img-fluid" alt="Match Consultation" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

    <div class="row g-4 mt-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-person-check"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Verified Membership</a></h3>
            <p>Ensuring all profiles are authentic and trustworthy for a safe matchmaking experience.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Profile Verification</li>
              <li><i class="bi bi-check-circle-fill"></i> Identity Checks</li>
              <li><i class="bi bi-check-circle-fill"></i> Secure Interaction</li>
            </ul>
            <a href="#" class="service-link">
              <span>Join Verified</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('assets/images/3.jpg') }}" class="img-fluid" alt="Verified Membership" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-heart-pulse"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Relationship Guidance</a></h3>
            <p>Expert advice to nurture strong relationships and build lasting connections.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Personalized Coaching</li>
              <li><i class="bi bi-check-circle-fill"></i> Conflict Resolution Tips</li>
              <li><i class="bi bi-check-circle-fill"></i> Communication Skills</li>
            </ul>
            <a href="#" class="service-link">
              <span>Learn More</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('assets/images/4.jpg') }}" class="img-fluid" alt="Relationship Guidance" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

    <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
      <a href="#" class="btn-view-all">
        <span>View All Services</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>

  </div>

</section><!-- /Featured Services Section -->

<section id="featured-members" class="featured-agents section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Profile Members</h2>
    <p>Meet our members and explore potential matches</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="featured-agent">
          <div class="agent-wrapper">
            <div class="agent-photo">
              <img src="{{ asset('assets/images/2.jpg') }}" alt="Member Profile" class="img-fluid">
              <div class="overlay-info">
                <div class="contact-actions">
                  <a href="tel:#" class="contact-btn phone" title="Call Now">
                    <i class="bi bi-telephone-fill"></i>
                  </a>
                  <a href="mailto:#" class="contact-btn email" title="Send Email">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>
              </div>
              <span class="achievement-badge verified">Verified</span>
            </div>
            <div class="agent-details">
              <h4>Rashed Khan</h4>
              <span class="position">Software Engineer</span>
              <div class="location-info">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Dhaka, Bangladesh</span>
              </div>
              <div class="expertise-tags">
                <span class="tag">Technology</span>
                <span class="tag">Travel</span>
              </div>
              <a href="#" class="view-profile">View Profile</a>
            </div>
          </div>
        </div>
      </div><!-- End Profile Member -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="featured-agent">
          <div class="agent-wrapper">
            <div class="agent-photo">
              <img src="{{ asset('assets/images/2.jpg') }}" alt="Member Profile" class="img-fluid">
              <div class="overlay-info">
                <div class="contact-actions">
                  <a href="tel:#" class="contact-btn phone" title="Call Now">
                    <i class="bi bi-telephone-fill"></i>
                  </a>
                  <a href="mailto:#" class="contact-btn email" title="Send Email">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>
              </div>
              <span class="achievement-badge popular">Popular</span>
            </div>
            <div class="agent-details">
              <h4>Fatema Akter</h4>
              <span class="position">Graphic Designer</span>
              <div class="location-info">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Chittagong, Bangladesh</span>
              </div>
              <div class="expertise-tags">
                <span class="tag">Arts</span>
                <span class="tag">Photography</span>
              </div>
              <a href="#" class="view-profile">View Profile</a>
            </div>
          </div>
        </div>
      </div><!-- End Profile Member -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="featured-agent">
          <div class="agent-wrapper">
            <div class="agent-photo">
              <img src="{{ asset('assets/images/3.jpg') }}" alt="Member Profile" class="img-fluid">
              <div class="overlay-info">
                <div class="contact-actions">
                  <a href="tel:#" class="contact-btn phone" title="Call Now">
                    <i class="bi bi-telephone-fill"></i>
                  </a>
                  <a href="mailto:#" class="contact-btn email" title="Send Email">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>
              </div>
              <span class="achievement-badge new">New Member</span>
            </div>
            <div class="agent-details">
              <h4>Shakil Ahmed</h4>
              <span class="position">Entrepreneur</span>
              <div class="location-info">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Khulna, Bangladesh</span>
              </div>
              <div class="expertise-tags">
                <span class="tag">Business</span>
                <span class="tag">Startups</span>
              </div>
              <a href="#" class="view-profile">View Profile</a>
            </div>
          </div>
        </div>
      </div><!-- End Profile Member -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="featured-agent">
          <div class="agent-wrapper">
            <div class="agent-photo">
              <img src="{{ asset('assets/images/1.jpg') }}" alt="Member Profile" class="img-fluid">
              <div class="overlay-info">
                <div class="contact-actions">
                  <a href="tel:#" class="contact-btn phone" title="Call Now">
                    <i class="bi bi-telephone-fill"></i>
                  </a>
                  <a href="mailto:#" class="contact-btn email" title="Send Email">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>
              </div>
              <span class="achievement-badge active">Active Member</span>
            </div>
            <div class="agent-details">
              <h4>Sabina Rahman</h4>
              <span class="position">Teacher</span>
              <div class="location-info">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Sylhet, Bangladesh</span>
              </div>
              <div class="expertise-tags">
                <span class="tag">Education</span>
                <span class="tag">Community Work</span>
              </div>
              <a href="#" class="view-profile">View Profile</a>
            </div>
          </div>
        </div>
      </div><!-- End Profile Member -->

    </div>

    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
      <a href="#" class="discover-all-agents">
        <span>Discover All Members</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>

  </div>

</section><!-- /Profile Members Section -->

<section id="testimonials" class="testimonials section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Member Testimonials</h2>
    <p>Hear what our members have to say about their experience</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="testimonial-grid">

      <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="100">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-image">
              <img src="{{ asset('assets/images/1.jpg') }}" class="img-fluid" alt="Testimonial 1">
            </div>
            <div class="testimonial-meta">
              <h3>Ayesha Karim</h3>
              <h4>Student</h4>
              <div class="company-logo">
                <i class="bi bi-building"></i>
              </div>
            </div>
          </div>
          <div class="testimonial-body">
            <i class="bi bi-chat-quote-fill quote-icon"></i>
            <p>This platform made it easy for me to connect with like-minded members and find meaningful connections.</p>
          </div>
        </div>
      </div>

      <div class="testimonial-item featured" data-aos="zoom-in" data-aos-delay="200">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-image">
              <img src="{{ asset('assets/images/2.jpg') }}" class="img-fluid" alt="Testimonial 2">
            </div>
            <div class="testimonial-meta">
              <h3>Rashed Hossain</h3>
              <h4>Software Engineer</h4>
              <div class="company-logo">
                <i class="bi bi-buildings"></i>
              </div>
            </div>
          </div>
          <div class="testimonial-body">
            <i class="bi bi-chat-quote-fill quote-icon"></i>
            <p>I appreciated the verified profiles and user-friendly interface. It made searching for a partner much simpler.</p>
          </div>
        </div>
      </div>

      <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-image">
              <img src="{{ asset('assets/images/5.jpg') }}" class="img-fluid" alt="Testimonial 3">
            </div>
            <div class="testimonial-meta">
              <h3>Fatema Akter</h3>
              <h4>Teacher</h4>
              <div class="company-logo">
                <i class="bi bi-building-check"></i>
              </div>
            </div>
          </div>
          <div class="testimonial-body">
            <i class="bi bi-chat-quote-fill quote-icon"></i>
            <p>The platform’s suggestions and communication features helped me find someone compatible quickly and safely.</p>
          </div>
        </div>
      </div>

      <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-image">
              <img src="{{ asset('assets/images/4.jpg') }}" class="img-fluid" alt="Testimonial 4">
            </div>
            <div class="testimonial-meta">
              <h3>Shakil Ahmed</h3>
              <h4>Entrepreneur</h4>
              <div class="company-logo">
                <i class="bi bi-building-gear"></i>
              </div>
            </div>
          </div>
          <div class="testimonial-body">
            <i class="bi bi-chat-quote-fill quote-icon"></i>
            <p>Thanks to this platform, I could explore profiles from all over Bangladesh and find a match aligned with my values.</p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Member Testimonials Section -->

<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Choose Us</h2>
    <p>Find your life partner safely and easily with our trusted matchmaking platform</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="content">
          <h3>Why Choose Premier Matrimony?</h3>
          <p>With years of experience in connecting individuals across Bangladesh, we have built our reputation on trust, verified profiles, and success stories. Our dedicated team understands the expectations and preferences of every member.</p>

          <div class="features-list">
            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <div>
                <h5>Verified Member Profiles</h5>
                <p>All members are verified to ensure authenticity and a safe matchmaking experience.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <h5>Privacy & Security</h5>
                <p>Member information is secure, and communication is private, giving you peace of mind.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <h5>24/7 Support</h5>
                <p>Our support team is available anytime to help you with account setup, matching, or queries.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div>
                <h5>Proven Success Rate</h5>
                <p>Hundreds of successful matches and happy couples across Bangladesh.</p>
              </div>
            </div>
          </div>

          <div class="cta-buttons mt-4">
            <a href="#" class="btn btn-primary me-3">Learn More About Us</a>
            <a href="#" class="btn btn-outline-primary">Join Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="stats-section">
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Members Joined</div>
                <p>Active members registered from all over Bangladesh.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-heart-fill"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Successful Matches</div>
                <p>Couples who found their life partner through our platform.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Years of Service</div>
                <p>Dedicated matchmaking services with proven expertise.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-award"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Member Recommendations</div>
                <p>Highly rated by our members for trust and support.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-preview mt-5">
            <div class="testimonial-card">
              <div class="quote-icon mb-2">
                <i class="bi bi-quote"></i>
              </div>
              <p>"I found my life partner through this platform. The profiles were genuine, and the support team guided me throughout the process."</p>
              <div class="testimonial-author d-flex align-items-center mt-3">
                <img src="{{ asset('assets/img/person/person-f-3.webp') }}" alt="Member" class="author-image me-3">
                <div>
                  <h6>Fatima Rahman</h6>
                  <span>Matched Member</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Why Us Section -->

<section class="call-to-action-1 call-to-action section" id="call-to-action">
  <div class="cta-bg" style="background-image: url('{{ asset('assets/images/5.jpg') }}');"></div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">

        <div class="cta-content text-center">
          <h2>Need Help Finding Your Life Partner?</h2>
          <p>Our platform connects verified members across Bangladesh to help you find a compatible match with ease and confidence. Personalized support ensures a safe and meaningful matchmaking experience.</p>

          <div class="cta-buttons">
            <a href="#" class="btn btn-primary">Join Now</a>
            <a href="#" class="btn btn-outline">Schedule a Guidance Call</a>
          </div>

          <div class="cta-features">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-people-fill"></i>
              <span>Verified Members</span>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="250">
              <i class="bi bi-clock-fill"></i>
              <span>24/7 Support</span>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-shield-check-fill"></i>
              <span>Trusted Platform</span>
            </div>
          </div>

        </div><!-- End CTA Content -->

      </div>
    </div>

  </div>
</section><!-- /Call To Action Section -->

<section id="recent-blog-posts" class="recent-blog-posts section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Recent Blog Posts</h2>
    <p>Read inspiring stories and tips from our community of happy couples</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
        <article class="featured-post">
          <div class="featured-img">
            <img src="{{ asset('assets/images/1.jpg') }}" alt="" class="img-fluid" loading="lazy">
            <div class="featured-badge">Featured</div>
          </div>

          <div class="featured-content">
            <div class="post-header">
              <a href="#" class="category">Love Story</a>
              <span class="post-date">Oct 10, 2025</span>
            </div>

            <h2 class="post-title">
              <a href="#">How Rafik and Mila Met Through Our Matrimony Platform</a>
            </h2>

            <p class="post-excerpt">
              Discover the heartwarming journey of Rafik and Mila, from their first conversation to their wedding day, all thanks to our trusted matchmaking services.
            </p>

            <div class="post-footer">
              <div class="author-info">
                <img src="{{ asset('assets/images/2.jpg') }}" alt="" class="author-avatar">
                <div class="author-details">
                  <span class="author-name">Admin</span>
                  <span class="read-time">6 min read</span>
                </div>
              </div>
              <a href="#" class="read-more">Read More</a>
            </div>
          </div>
        </article>

        <article class="featured-post" data-aos="fade-up" data-aos-delay="400">
          <div class="featured-img">
            <img src="{{ asset('assets/images/3.jpg') }}" alt="" class="img-fluid" loading="lazy">
            <div class="featured-badge">Featured</div>
          </div>

          <div class="featured-content">
            <div class="post-header">
              <a href="#" class="category">Tips & Advice</a>
              <span class="post-date">Oct 8, 2025</span>
            </div>

            <h2 class="post-title">
              <a href="#">Top 5 Tips for Writing a Perfect Matrimony Profile</a>
            </h2>

            <p class="post-excerpt">
              Crafting the perfect profile can increase your chances of finding the ideal match. Here are expert tips on how to present yourself authentically and attractively.
            </p>

            <div class="post-footer">
              <div class="author-info">
                <img src="{{ asset('assets/images/4.jpg') }}" alt="" class="author-avatar">
                <div class="author-details">
                  <span class="author-name">Admin</span>
                  <span class="read-time">4 min read</span>
                </div>
              </div>
              <a href="#" class="read-more">Read More</a>
            </div>
          </div>
        </article>
      </div><!-- End featured post -->

      <div class="col-lg-4">

        <article class="recent-post" data-aos="fade-up" data-aos-delay="200">
          <div class="recent-img">
            <img src="{{ asset('assets/images/5.jpg') }}" alt="" class="img-fluid" loading="lazy">
          </div>
          <div class="recent-content">
            <a href="#" class="category">Success Story</a>
            <h3 class="recent-title">
              <a href="#">Rohan & Priya’s Journey to Happily Ever After</a>
            </h3>
            <div class="recent-meta">
              <span class="author">By Admin</span>
              <span class="date">Oct 5, 2025</span>
            </div>
          </div>
        </article><!-- End recent post -->

        <article class="recent-post" data-aos="fade-up" data-aos-delay="250">
          <div class="recent-img">
            <img src="{{ asset('assets/images/1.jpg') }}" alt="" class="img-fluid" loading="lazy">
          </div>
          <div class="recent-content">
            <a href="#" class="category">Advice</a>
            <h3 class="recent-title">
              <a href="#">Dos and Don’ts for Your First Interaction with a Potential Match</a>
            </h3>
            <div class="recent-meta">
              <span class="author">By Admin</span>
              <span class="date">Oct 3, 2025</span>
            </div>
          </div>
        </article><!-- End recent post -->

        <article class="recent-post" data-aos="fade-up" data-aos-delay="300">
          <div class="recent-img">
            <img src="{{ asset('assets/images/2.jpg') }}" alt="" class="img-fluid" loading="lazy">
          </div>
          <div class="recent-content">
            <a href="#" class="category">Tips</a>
            <h3 class="recent-title">
              <a href="#">How to Choose the Right Partner Based on Values and Interests</a>
            </h3>
            <div class="recent-meta">
              <span class="author">By Admin</span>
              <span class="date">Oct 1, 2025</span>
            </div>
          </div>
        </article><!-- End recent post -->

        <article class="recent-post" data-aos="fade-up" data-aos-delay="350">
          <div class="recent-img">
            <img src="{{ asset('assets/images/3.jpg') }}" alt="" class="img-fluid" loading="lazy">
          </div>
          <div class="recent-content">
            <a href="#" class="category">Relationship</a>
            <h3 class="recent-title">
              <a href="#">The Importance of Communication in a New Relationship</a>
            </h3>
            <div class="recent-meta">
              <span class="author">By Admin</span>
              <span class="date">Sep 28, 2025</span>
            </div>
          </div>
        </article><!-- End recent post -->

      </div>

    </div>

  </div>

</section><!-- /Recent Blog Posts Section -->



@endsection
