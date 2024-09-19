<?php
	$pagename = "Appoinment";
	require "../static/head_start.php";
	require "../static/head_end.php";
	require "../static/header.php";
?>
      <main class="page_content">
        <section class="page_banner decoration_wrapper">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1 class="page_title mb-0">Сontact Details</h1>
              </div>
              <div class="col-lg-6">
                <ul class="breadcrumb_nav unordered_list justify-content-lg-end justify-content-center">
                  <li><a href="index.html">Home</a></li>
                  <li>Contact V3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="decoration_item shape_leaf_1">
            <img src="assets/images/shapes/shape_leaf_left.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
          <div class="decoration_item shape_leaf_2">
            <img src="assets/images/shapes/shape_leaf_right.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
        </section>
        <!-- Page Banner - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg pb-0">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="section_heading">
                  <h2 class="section_heading_text">Contact Info</h2>
                  <p class="section_heading_description mb-0 ">
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden 
                  </p>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="contact_info_box">
                      <div class="item_icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <div class="item_contact">
                        <h3 class="item_title">Phone</h3>
                        <ul class="info_list unordered_list_block">
                          <li>
                            <span class="info_text">+880-1680-6361-89</span>
                          </li>
                          <li>
                            <span class="info_text">+1-234-56-78-123</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="contact_info_box">
                      <div class="item_icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <div class="item_contact">
                        <h3 class="item_title">Email</h3>
                        <ul class="info_list unordered_list_block">
                          <li>
                            <span class="info_text">info@talkingminds.com</span>
                          </li>
                          <li>
                            <span class="info_text">contact@talkingminds.com</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="contact_info_box">
                      <div class="item_icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <div class="item_contact">
                        <h3 class="item_title">Address</h3>
                        <ul class="info_list unordered_list_block">
                          <li>
                            <span class="info_text">49, Caradon Hill, </span>
                          </li>
                          <li>
                            <span class="info_text">ULBSTER</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="contact_info_box">
                      <div class="item_icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <div class="item_contact">
                        <h3 class="item_title">Working Hours</h3>
                        <ul class="info_list unordered_list_block">
                          <li>
                            <span class="info_text">Mon to Fri 8 am - 6 pm</span>
                          </li>
                          <li>
                            <span class="info_text">Sat to Sun 9 am - 2 pm</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="gmap_canvas">
                  <iframe src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Consultation Section - Start
        ================================================== -->
        <section class="consultation_section section_space_lg">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="image_widget">
                  <img src="assets/images/about/about_image_17-min.jpg" alt="About Image - Talking Minds – Psychotherapist Site Template">
                  <div class="image_shape bg_secondary_light"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section_heading">
                  <h2 class="section_heading_text mb-0">
                    Take Care of Your Mental Health 
                  </h2>
                </div>
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
                <div class="btn_wrap pb-0">
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
        </section>
        <!-- Consultation Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->
<?php
 require "../static/footer.php";
 require "../static/scripts.php";
?> 
