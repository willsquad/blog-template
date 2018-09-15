<?php include('include/header.php');?>

            <!-- Carousel -->
            <div class="col-12 carousel_container max_width">
                <div class="carousel_div">
                    <!-- MAIN SLIDES -->
                    <div class="slider">
                        <div data-index="1">
                            <img src="files/images/coast.jpg" alt="">
                        </div>
                        <div data-index="2">
                                <img src="files/images/scotland.jpg" alt="">
                        </div>
                        <div data-index="3">
                                <img src="files/images/featured2.jpeg" alt="">
                        </div>
                    </div>
                    
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <div class="slide_div" slide="slide_1">
                            <h6 class="article_category">Category One</h6>
                            <h3 class="article_large_heading">Lorem ipsum dolor sit amet consectetur, adipisicing elit dignissimos.</h3>
                        </div>
                        <div class="slide_div" slide="slide_2">
                            <h6 class="article_category">Category Two</h6>
                            <h3 class="article_large_heading">Ipsum dolor sit amet consectetur, adipisicing elit dignissimos.</h3>
                        </div>
                        <div class="slide_div" slide="slide_3">
                            <h6 class="article_category">Category Three</h6>
                            <h3 class="article_large_heading">Dolor sit amet consectetur, adipisicing elit dignissimos.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel -->

            <!-- Body Content -->
            <div class="col-12 body_content max_width">
                <div class="row">                    
                    <!-- LHS -->
                    <div class="col-12 col-sm-7 col-lg-8 body_content__lhs">
                        <div class="body_content__lhs__container">

                            <!-- Article Large -->
                            <div class="article article_large">
                                <!-- <img src="files/images/article_large.jpeg" alt=""> -->

                                <div class="video_container">
                                    <iframe src="https://www.youtube.com/embed/NO8PmqEI0cc?showinfo=0&modestbranding=0" frameborder="0"  allowfullscreen></iframe>
                                </div>
                                
                                <div class="article_details">
                                    <h6 class="article_category"><a href="#">Category</a></h6>
                                    <h3 class="article_large_heading"><a href="article.php">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, dignissimos.</a></h3>
                                    <p class="article_large_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <div class="article_details__bottom">
                                        <div class="article_details__bottom__lhs">
                                            <a href="article.php">Read More</a>
                                        </div>
                                        <div class="article_details__bottom__rhs">
                                            <i class="far fa-heart"></i> 25
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Article Large -->

                            <!-- Article Small Container -->
                            <div class="row article_small_container">
                                <div class="col-12 col-lg-6">
                                    <!-- Article Small -->
                                    <div class="article article_small">
                                        <img src="files/images/coast.jpg" alt="">
                            
                                        <div class="article_details">
                                            <h6 class="article_category"><a href="#">Category</a></h6>
                                            <h3 class="article_large_heading"><a href="article.php">Ipsm sit amet consectetur adipisicing elit</a></h3>
                                            <p class="article_large_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore.</p>
        
                                            <div class="article_details__bottom">
                                                <div class="article_details__bottom__lhs">
                                                    <a href="article.php">Read More</a>
                                                </div>
                                                <div class="article_details__bottom__rhs">
                                                    <i class="far fa-heart"></i> 110
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Article Small -->
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Article Small -->
                                    <div class="article article_small">
                                        <img src="files/images/scotland.jpg" alt="">
                                       
                                        <div class="article_details">
                                            <h6 class="article_category"><a href="#">Category</a></h6>
                                            <h3 class="article_large_heading"><a href="article.php">Dolor sit amet consectetur adipisicing elit</a></h3>
                                            <p class="article_large_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore.</p>
        
                                            <div class="article_details__bottom">
                                                <div class="article_details__bottom__lhs">
                                                    <a href="article.php">Read More</a>
                                                </div>
                                                <div class="article_details__bottom__rhs">
                                                    <i class="far fa-heart"></i> 85
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Article Small -->
                                </div>
                            </div>
                            <!-- Article Small Container -->
                        </div>
                    </div>
                    <!-- LHS -->

                    <!-- RHS -->
                    <?php include('include/sidebar.php'); ?>
                    <!-- RHS -->
                    
                </div>
                <!-- Row -->
            </div>
            <!-- Body Content -->

<?php include('include/footer.php');?>