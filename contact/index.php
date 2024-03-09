<?php
	$pagename = "Contact Us";
	require "../static/head_start.php";
	require "../static/head_end.php";
	require "../static/header.php";
?>

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Banner - Start
        ================================================== -->
        <section class="page_banner decoration_wrapper">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1 class="page_title mb-0">Clinic Contacts</h1>
              </div>
              <div class="col-lg-6">
                <ul class="breadcrumb_nav unordered_list justify-content-lg-end justify-content-center">
                  <li><a href="<?php echo $weburl;?>">Home</a></li>
                  <li>Contact V1</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="decoration_item shape_leaf_1">
            <img src="<?php echo $weburl;?>/assets/images/shapes/shape_leaf_left.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
          <div class="decoration_item shape_leaf_2">
            <img src="<?php echo $weburl;?>/assets/images/shapes/shape_leaf_right.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
        </section>
        <!-- Page Banner - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
          <div class="container">
            <div class="conatiner_box">
              <div class="section_heading mb-4">
                <div class="row justify-content-lg-between">
                  <div class="col-lg-6">
                    <h2 class="section_heading_text mb-0">
                      Take care of your mental health now
                    </h2>
                  </div>
                  <div class="col-lg-6">
                    <p class="section_heading_description mb-0 ps-lg-4">
                      If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden 
                    </p>
                  </div>
                </div>
              </div>

              <div class="row justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_name">Name</label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Your name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_phone">Phone</label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Phone number">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb-4">
                        <label for="input_message">Message</label>
                        <textarea id="input_message" class="form-control" name="comment" placeholder="Your message"></textarea>
                      </div>
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
                <div class="col-lg-6">
                  <div class="ps-lg-4">
                    <div class="row mb-5">
                      <div class="col-md-6">
                        <ul class="contact_info_list unordered_list_block">
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Phone Number</h3>
                              <p class="item_info mb-0"><?php echo $webphone;?></p>
                            </div>
                          </li>
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-fax"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Fax</h3>
                              <p class="item_info mb-0"><?php echo $webphone;?></p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="contact_info_list unordered_list_block">
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Email</h3>
                              <p class="item_info mb-0"><?php echo $webemail;?></p>
                            </div>
                          </li>
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Location</h3>
                              <p class="item_info mb-0">49, Caradon Hill, ULBSTER</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->


      </main>
      <!-- Main Body - End
      ================================================== -->
<?php
 require "../static/footer.php";
 require "../static/scripts.php";
?> 