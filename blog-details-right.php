<?php include 'header.php';?>
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="shape1 float-bob-x"><img src="assets/images/shapes/main-slider-v4-shape1.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Blog Details</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.php">Home</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Blog Details-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!--Start Blog Details Content-->
                    <div class="col-xl-8">
                        <div class="blog-details__content">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="assets/images/blog/blog-details-img7.jpg" alt="">
                                </div>

                                <div class="blog-one__single-content">
                                    <!-- <div class="date-box">
                                        <h2>17</h2>
                                        <p>FEB</p>
                                    </div> -->
                                    <div class="blog-one__single-content-inner">
                                        <ul class="meta-box">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-people"></span>
                                                </div>

                                                <div class="text-box">
                                                    <p><a href="#">By Admin</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-conversation"></span>
                                                </div>

                                                <div class="text-box">
                                                    <p><a href="#">2 Comment</a></p>
                                                </div>
                                            </li>
                                        </ul>

                                        <h2>How Our Housekeeping Services Stand Out</h2>
                                        <p>Our housekeeping services are designed to go far beyond basic cleaning—we focus
                                             on creating a healthy, organized, and refreshing environment for every client.
                                              What sets us apart is our unwavering commitment to professionalism, reliability,
                                               and quality. Each member of our team is carefully trained to follow best practices,
                                             use advanced tools and techniques, and handle your space with care and respect. Whether it's
                                              a home, office, or commercial space, we provide customized cleaning plans to suit your
                                               schedule and specific needs.</p>

                                        <!-- <p class="text2">We prioritize hygiene and safety, using eco-friendly products that are tough on 
                                            dirt but gentle on surfaces and safe for your family, employees, or guests. Our attention to
                                             detail ensures that every corner is cleaned, and nothing is overlooked—from floors and furniture
                                              to fixtures and high-touch areas. With consistent service, clear communication, and a proactive 
                                              approach to feedback, we aim not just to meet but exceed your expectations. Our goal is simple: 
                                              to provide housekeeping that truly makes your space more comfortable, welcoming, and worry-free.
                                        </p> -->
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text1">
                                <h2>We deliver more than cleaning—providing consistent quality, comfort, and care tailored to your needs.</h2>
                                <p class="text1">
                                    <b><span class="icon-checkmark"></span> Trained and Professional Staff:</b><br>

                                    Our team is skilled, experienced, and well-trained in the best housekeeping 
                                    practices. They pay close attention to detail and handle each space with care
                                    and respect.<br><br>
                                    <b><span class="icon-checkmark"></span> Customized Cleaning Solutions:</b><br>
                                    We understand that every home or facility is unique. Our services are flexible and tailored to
                                    meet your specific requirements, whether it’s a one-time deep clean or regular maintenance.<br><br>

                                    <b><span class="icon-checkmark"></span> Use of Quality Products and Equipment:</b><br>
                                     We use eco-friendly and effective cleaning products along with modern tools and equipment
                                      to ensure thorough and safe cleaning.<br><br>

                                    <b><span class="icon-checkmark"></span> Health and Hygiene Focus:</b> <br>
                                    Especially in today’s world, hygiene matters more than ever. We prioritize sanitization and 
                                    cleaning high-touch areas to help maintain a safe and healthy environment.
                                </p>

                                </div>

                            <div class="blog-details__content-img1">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img1-single">
                                            <img src="assets/images/blog/blog-details-img1.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img1-single">
                                            <img src="assets/images/blog/blog-details-img2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <div class="title-box">
                                    <h2>Leave a Reply</h2>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>

                                <form class="contact-form-validated" action="https://unicktheme.com/2025/cleanin/main-html/assets/inc/sendemail.php" method="post"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="name" placeholder="Name" required="">
                                                <div class="icon"><span class="icon-people"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="email" name="email" placeholder="Email" required="">
                                                <div class="icon"><span class="icon-envelope"></span></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <div class="icon style2"><span class="icon-pen"></span></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="comment-form__checkbox">
                                                <input type="checkbox" name="agree " id="agree" checked>
                                                <label for="agree"><span></span>Save my name, email, and website in this
                                                    browser for the next time I comment.</label>
                                            </div>

                                            <div class="comment-form__btn">
                                                <button type="submit" class="thm-btn">
                                                    Submit Now
                                                    <i class="icon-next"></i>
                                                    <span class="hover-btn hover-bx"></span>
                                                    <span class="hover-btn hover-bx2"></span>
                                                    <span class="hover-btn hover-bx3"></span>
                                                    <span class="hover-btn hover-bx4"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Details Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <!-- <div class="sidebar__single sidebar__search">
                                <div class="title-box">
                                    <h2>Search</h2>
                                </div>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search..">
                                    <button type="submit"><span class="icon-search-interface-symbol"></span></button>
                                </form>
                            </div> -->
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__categories">
                                <div class="title-box">
                                    <h2>Categories</h2>
                                </div>

                                <ul class="sidebar__categories-list">
                                    <li><a class="active" href="#">House Cleaning <span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Office Cleaning <span class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Commercial Cleaning <span class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Residential Cleaning <span class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li><a href="#">Window Cleaning <span class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Carpet Cleaning <span class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Floor Cleaning <span class="icon-right-arrow1"></span></a></li>
                                    <li><a href="#">Car Cleaning <span class="icon-right-arrow1"></span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <!-- <div class="sidebar__single sidebar__recent-post">
                                <div class="title-box">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="sidebar__recent-post-box">
                                    <div class="sidebar__recent-post-single">
                                        <div class="sidebar__recent-post-img">
                                            <img src="assets/images/blog/recent-post-img2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__recent-post-content">
                                            <p><span class="icon-calendar-1"></span> 17 Jun 2025</p>
                                            <h3><a href="#">The Secret offer Cleaning Your Beadroom &
                                                    Office</a></h3>
                                        </div>
                                    </div>
                                    <div class="sidebar__recent-post-single">
                                        <div class="sidebar__recent-post-img">
                                            <img src="assets/images/blog/recent-post-img3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__recent-post-content">
                                            <p><span class="icon-calendar-1"></span> 23 Aug 2025</p>
                                            <h3><a href="#">Checklists on how to keep different rooms
                                                    clean </a></h3>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> -->
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__contact">
                                <div class="sidebar__contact-bg"
                                    style="background-image: url(assets/images/services/sidebar-contact-bg.jpg);"></div>
                                <div class="sidebar__contact-icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="sidebar__contact-text">
                                    <p>Call Us Anytime</p>
                                    <h2><a href="tel:1234567890">+111 875 74885</a></h2>
                                </div>
                                <div class="sidebar__contact-btn">
                                    <a class="thm-btn" href="contact.php">Contact Us
                                        <i class="icon-next"></i>
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </a>
                                </div>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tags">
                                <div class="title-box">
                                    <h2>Tags</h2>
                                </div>
                                <ul class="sidebar__tags-list">
                                    <li><a href="#">Cleaning</a></li>
                                    <li><a href="#">Moping</a></li>
                                    <li><a href="#">Commercial</a></li>
                                    <li><a href="#">Dusting</a></li>
                                    <li><a href="#">Eco-friendly</a></li>
                                    <li><a href="#">DeepClean</a></li>
                                    <li><a href="#">Window Cleaning</a></li>
                                    <li><a href="#">House Cleaning</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--End Blog Details-->

        <!--Start Brand One-->
        <section class="brand-one brand-one--two about">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="brand-one__carousel owl-carousel owl-theme">
                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand One-->

        <!--Start Cta One -->
        <section class="cta-one">
            <div class="shape1"></div>
            <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
            </div>
            <div class="container clearfix">
                <div class="cta-one__inner">
                    <div class="cta-one__content">
                        <div class="text-box">
                            <p>Quality Services provider</p>
                            <h2>Need Our services?</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="contact.phpl">get free quote
                                <i class="icon-next"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One -->
<?php include 'footer.php';?>