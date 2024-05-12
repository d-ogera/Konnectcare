<?php
	$pagename = "Home";
	require "static/head_start.php";
	require "static/head_end.php";
	require "static/header.php";
?>

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Hero Section - Start
        ================================================== -->
        <section class="hero_section decoration_wrapper">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="hero_content_wrap">
                  <h1 class="heading_text">
                    Professional home health service provider of choice
                  </h1>
                  <p class="heading_description">
                    We provide individualized, compassionate, high-quality healthcare right to your doorstep. We are committed to providing the best care possible in the comfort of your own home.
                  </p>
                  <ul class="btns_group unordered_list">
                    <li>
                      <a class="btn btn-primary" href="<?php echo $weburl;?>/consultation/">
                        <span class="btn_text" data-text="Continue">
                          Book a Consultation
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-outline-primary" href="<?php echo $weburl;?>/about/">
                        <span class="btn_text" data-text="Goto">
                          About us
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <ul class="hero_section_counter unordered_list">
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="2">0</span>
                          <span>+</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                          Years of service
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="80">0</span>
                          <span>+</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                          Served Clients
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="98">0</span>
                          <span>%</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                          Patient satisfaction
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero_image_wrap">
                  <img src="<?php echo $weburl;?>/assets/images/ambulatory-care.jpg" alt="<?php echo $webtag;?>">
                </div>
              </div>
            </div>
          </div>
          <div class="decoration_item shape_blur_shadow"></div>
          <div class="decoration_item shape_leaf">
            <img src="<?php echo $weburl;?>/assets/images/shapes/shape_leaf_left_top.svg" alt="<?php echo $webtag;?>">
          </div>
        </section>
        <!-- Hero Section - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space_lg bg_primary_light">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Why Choose Us?</h2>
              <p class="section_heading_description mb-0">
                We offer more than just homebased care. We incorporate a digital doctor consultation system.
              </p>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="<?php echo $weburl;?>/assets/images/icons/icon_brain.svg" alt="telehealth">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Online Consultation</h3>
                    <p>
                      Talk to your healthcare professional at the comfort of your home.
                    </p>
                    <a class="btn-link" href="<?php echo $weburl;?>/appointment/">
                      <span class="btn_text">More Info</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="<?php echo $weburl;?>/assets/images/icons/icon_head_double.svg" alt="homebased">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">HomeBased Care</h3>
                    <p>
                      Receive personalized care provided by a qualified professional.
                    </p>
                    <a class="btn-link" href="<?php echo $weburl;?>/appointment/">
                      <span class="btn_text">More Info</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="<?php echo $weburl;?>/assets/images/icons/icon_head.svg" alt="counselling">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">counselling</h3>
                    <p>
                      Talk to a qualified psychologist and counsellor any time and anywhere.
                    </p>
                    <a class="btn-link" href="<?php echo $weburl;?>/appointment/">
                      <span class="btn_text">More Info</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="btn_wrap pb-0 text-center">
              <a class="btn btn-primary" href="<?php echo $weburl;?>/services/">
                <span class="btn_text" data-text="All services">
                  All Services
                </span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
        <!-- Service Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 order-lg-last">
                <div class="image_widget">
                  <img src="<?php echo $weburl;?>/assets/images/services.png" alt="<?php echo $webtag;?>">
                  <div class="image_shape bg_primary_light"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="about_content">
                  <div class="section_heading mb-4">
                    <h2 class="section_heading_text">
                      Which <mark>services</mark> do you get on <?php echo $webname;?> 
                    </h2>
                    <p class="section_heading_description mb-0 ">
                      We offer a wide range of services tailored to meet your unique needs. Our services include:
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Doctor Consultations</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Counselling Therapy</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Home based care</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Health Education</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Physiotherapy services</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Medical devices</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn-primary" href="<?php echo $weburl;?>">
                      <span class="btn_text" data-text="Learn More">
                        Learn More
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- About Section - End
        ================================================== -->

        <!-- Pricing Section - Start
        ================================================== -->
        <section class="pricing_section section_space_lg bg_primary_light decoration_wrapper">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Pricing Plans</h2>
              <p class="section_heading_description mb-0 ">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
              </p>
            </div>

            <div class="pricing_toggle_btn_wrap">
              <button class="pricing_toggle_btn" type="button">
                <span>Monthly</span>
                <span>Annually <mark>Save 20%</mark></span>
              </button>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="pricing_heading">Light Session</h3>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">$150 <sub>Per Month</sub></span>
                    <span class="pricing_annually">$1,440 <sub>You'll Save $360</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">6 Session Therapy</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Duration 30 Minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Group Meetting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Personal Meeting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Support 24 Hours</span>
                    </li>
                  </ul>

                </div>
              </div>
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="badge_popular">Most Popular</h3>
                  <h4 class="pricing_heading">Standart Session</h4>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">$250 <sub>Per Month</sub></span>
                    <span class="pricing_annually">$2,400 <sub>You'll Save $600</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">10 Session Therapy</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Duration 30 Minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Group Meetting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Personal Meeting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Support 24 Hours</span>
                    </li>
                  </ul>

                </div>
              </div>
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="pricing_heading">Individual Session</h3>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">$400 <sub>Per Month</sub></span>
                    <span class="pricing_annually">$3,840 <sub>You'll Save $960</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">1 Year Therapy</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Duration 30 Minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Group Meetting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Personal Meeting</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Support 24 Hours</span>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- Pricing Section - End
        ================================================== -->

 

        <!-- Consultation Section - Start
        ================================================== -->
        <section class="consultation_section">
          <div class="container">
            <div class="consultation_form bg_primary_light decoration_wrapper">
              <div class="section_heading text-center">
                <h2 class="section_heading_text mb-0">
                  <span class="d-md-block">Get your first free</span> online consultation 
                </h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_name">Name</label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_phone">Phone</label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Mobile phone number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="select_therapy">Section</label>
                        <select id="select_therapy" class="form-select" aria-label="Therapy Select Options">
                          <option selected>Select Therapy</option>
                          <option value="Therapy One">Therapy One</option>
                          <option value="Therapy Two">Therapy Two</option>
                          <option value="Therapy Three">Therapy Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_calendar">Phone</label>
                        <input id="input_calendar" class="form-control" type="date" name="date">
                      </div>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0 text-center">
                    <button type="submit" class="btn btn-primary">
                      <span class="btn_text" data-text="Get A Consultation">
                        Get A Consultation
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Consultation Section - End
        ================================================== -->

        <!-- Blog Section - Start
        ================================================== -->
        <section class="blog_section section_space_lg">
          <div class="container">
            <div class="section_heading">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="section_heading_text mb-0">Latest Health Articles</h2>
                </div>
                <div class="col-md-6 d-none d-md-flex justify-content-end">
                  <a class="btn btn-primary" href="blog.html">
                    <span class="btn_text" data-text="Read More Articles">
                      Read More Articles
                    </span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog_item">
                  <div class="blog_image">
                    <a class="blog_image_wrap" href="blog_details.html">
                      <img src="<?php echo $weburl;?>/assets/images/blogs/blog_image_1-min.jpg" alt="Talking Minds - The pros and cons of group psychotherapy">
                    </a>
                  </div>
                  <div class="blog_content">
                    <ul class="post_category unordered_list">
                      <li><a href="#!">Family Problem</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>26 July 2023</li>
                      <li><a href="#!">120 Views</a></li>
                      <li><a href="#!">No Comments</a></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        The pros and cons of group psychotherapy
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Sunt in similique  culpa qui officia deserunt.
                    </p>
                    <a class="btn-link" href="blog_details.html">
                      <span class="btn_text">Read More</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog_item">
                  <div class="blog_image">
                    <a class="blog_image_wrap" href="blog_details.html">
                      <img src="<?php echo $weburl;?>/assets/images/blogs/blog_image_2-min.jpg" alt="Talking Minds - Top seven challenges in counselling children">
                    </a>
                  </div>
                  <div class="blog_content">
                    <ul class="post_category unordered_list">
                      <li><a href="#!">Family Problem</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>26 July 2023</li>
                      <li><a href="#!">120 Views</a></li>
                      <li><a href="#!">No Comments</a></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        Top seven challenges in counselling children
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Sunt in similique  culpa qui officia deserunt.
                    </p>
                    <a class="btn-link" href="blog_details.html">
                      <span class="btn_text">Read More</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog_item">
                  <div class="blog_image">
                    <a class="blog_image_wrap" href="blog_details.html">
                      <img src="<?php echo $weburl;?>/assets/images/blogs/blog_image_3-min.jpg" alt="Talking Minds - Actions, types and tips for finding group therapy">
                    </a>
                  </div>
                  <div class="blog_content">
                    <ul class="post_category unordered_list">
                      <li><a href="#!">Family Problem</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>26 July 2023</li>
                      <li><a href="#!">120 Views</a></li>
                      <li><a href="#!">No Comments</a></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="blog_details.html">
                        Actions, types and tips for finding group therapy
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Sunt in similique  culpa qui officia deserunt.
                    </p>
                    <a class="btn-link" href="blog_details.html">
                      <span class="btn_text">Read More</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="btn_wrap pb-0 text-center d-md-none d-block">
              <a class="btn btn-primary" href="blog.html">
                <span class="btn_text" data-text="Read More Articles">
                  Read More Articles
                </span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->

        <!-- FAQ Section - Start
        ================================================== -->
        <section class="faq_section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="images_group_widget">
                  <ul class="unordered_list">
                    <li>
                      <img src="<?php echo $weburl;?>/assets/images/why.png" alt="<?php echo $webtag;?>">
                      <img src="<?php echo $weburl;?>/assets/images/physio.png" alt="<?php echo $webtag;?>">
                    </li>
                    <li>
                      <img src="<?php echo $weburl;?>/assets/images/services.png" alt="<?php echo $webtag;?>">
                      <img src="<?php echo $weburl;?>/assets/images/ambulatory-care.jpg" alt="<?php echo $webtag;?>">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="ps-lg-5">
                  <div class="section_heading mb-lg-4 mb-2">
                    <h2 class="section_heading_text mb-0">
                      The most popular questions to discuss mental health
                    </h2>
                  </div>
                  <div class="accordion" id="faq_accordion">
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_one">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                          What is mental health?
                        </button>
                      </div>
                      <div id="collapse_one" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_two">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                          What do I do if the support doesn't help?
                        </button>
                      </div>
                      <div id="collapse_two" class="accordion-collapse collapse" aria-labelledby="heading_two" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_three">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                          Can you prevent mental health problems? 
                        </button>
                      </div>
                      <div id="collapse_three" class="accordion-collapse collapse" aria-labelledby="heading_three" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_four">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                          What are the 7 components of mental health?
                        </button>
                      </div>
                      <div id="collapse_four" class="accordion-collapse collapse" aria-labelledby="heading_four" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_five">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_five" aria-expanded="false" aria-controls="collapse_five">
                          Are there cures for mental health problems?
                        </button>
                      </div>
                      <div id="collapse_five" class="accordion-collapse collapse" aria-labelledby="heading_five" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FAQ Section - End
        ================================================== -->

<br>

      </main>
      <!-- Main Body - End
      ================================================== -->

<?php
 require "static/footer.php";
 require "static/scripts.php";
?>     
