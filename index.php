<?php

// $active='HOME';
include("includes/header.php");

?>


    <!-- Image Carousel -->
    
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6500">

        <!-- Carousel Content -->
        
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/carousel/1.jpg" alt="" class="w-100">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-8 bg-custom d-none d-md-block py-3 px-0">
                                <h1>TEXT</h1>
                                <!-- BLUE LINE STARTS CAN DELETE-->
                                <div class="border-top border-primary w-50 mx-auto my-3"></div>
                                <!-- BLUE LINE ENDS CAN DELETE-->
                                <h3 class="pb-3">
                                    complete website design
                                </h3>
                                <!-- COLORS OF BUTTON CAN VAREY-->
                                <a href="#" class="btn btn-danger btn-lg mr-2">
                                    BUTTON 1
                                </a>
                                <a href="#" class="btn btn-primary btn-lg ml-2">
                                    BUTTON 2
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel/2.jpg" alt="" class="w-100">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end text-right">
                            <div class="col-5 bg-custom d-none d-lg-block py-3 px-0 pr-3">
                                <p class="lead pb-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, rerum! Alias, veniam voluptates ratione eligendi inventore explicabo dicta quo modi. Hic voluptas dolore sequi tempora ea quos repellendus deleniti quam.
                                </p>
                                <a href="#" class="btn btn-danger btn-lg">
                                    BUTTON 1
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel/3.jpg" alt="" class="w-100">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start text-left">
                            <div class="col-7 bg-custom d-none d-lg-block py-3 px-0 pl-3">
                                <h3 class="pb-3">
                                    HELLO
                                </h3>
                                <p class="lead">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </p>
                                <!-- COLORS OF BUTTON CAN VAREY-->
                                <a href="#" class="btn btn-primary btn-lg">
                                    BUTTON 2
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
	
		<!-- End Carousel Content -->


        <!-- Previous & Next Buttons -->
        
        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="fas fa-chevron-left fa-2x"></span>
        </a>

        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="fas fa-chevron-right fa-2x"></span>
        </a>

		<!-- End Previous & Next Buttons -->

    </div>
	<!-- End Image Carousel -->


    <!-- Main Page Heading -->
    
    <div class="col-12 text-center mt-5">
        <h1 class="text-dark pt-4">
            Build with ease
        </h1>
        <!-- BLUE LINE STARTS CAN DELETE-->
        <div class="border-top border-primary w-25 mx-auto my-3"></div>
        <!-- BLUE LINE ENDS CAN DELETE-->
        <p class="lead">
            TEXTIE TEXTIE TEXT
        </p>
    </div>


    <!-- Three Column Section -->
    
    <div class="container">
        <div class="row my-5">

            <div class="col-md-4 my-4">
                <img src="img/1.jpg" alt="" class="w-100">
                <h4 class="my-4">AMAZING</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus aliquid non, magni delectus temporibus exercitationem.</p>
                <a href="#" class="btn btn-outline-dark btn-md">YES</a>
            </div>

            <div class="col-md-4 my-4">
                <img src="img/2.jpg" alt="" class="w-100">
                <h4 class="my-4">AMAZING</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus aliquid non, magni delectus temporibus exercitationem.</p>
                <a href="#" class="btn btn-outline-dark btn-md">YES</a>
            </div>

            <div class="col-md-4 my-4">
                <img src="img/3.jpg" alt="" class="w-100">
                <h4 class="my-4">AMAZING</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus aliquid non, magni delectus temporibus exercitationem.</p>
                <a href="#" class="btn btn-outline-dark btn-md">YES</a>
            </div>

        </div>
    </div>

	<!-- End Three Column Section -->


    <!-- Emoji Navbar First -->
    
    <a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button" data-toggle="collapse"></a>


    <!-- Start Fixed Background IMG -->
    
    <div class="fixed-background">

        <div class="row text-light py-5">
            <div class="col-12 text-center">
                <h1>ADVANCE TO NEXT LEVEL</h1>
                <h3 class="py-4">SEE WHATS ON THE OTHER SIDE</h3>

                <button type="button" data-toggle="modal" data-target="#modal1" class="btn btn-danger btn-lg mr-2">
                    BUTTON 1
                </button>
                <button type="button" data-toggle="modal" data-target="#modal1" class="btn btn-primary btn-lg ml-2">
                    BUTTON 2
                </button>

            </div>
        </div>

        <div class="fixed-wrap">
            <div class="fixed">

            </div>
        </div>
    </div>

	<!-- End Fixed Background IMG -->
 
	
    <!-- Emoji Navbar Second -->
    
    <a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button" data-toggle="collapse">
        <i class="fas fa-plug"></i>
    </a>
    <!-- emojis 4 in a row -->

    <div class="collapse" id="emoji">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <img src="img/emoji/panda.gif" alt="" class="w-100">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="img/emoji/poo.gif" alt="" class="w-100">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="img/emoji/unicorn.gif" alt="" class="w-100">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="img/emoji/chicken.gif" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Popup -->
    
    <div class="modal fade" id="modal1">
        <div class="modal-dialog">
            <img src="img/emoji/poo.gif" alt="" class="w-100">
        </div>
    </div>

		
    <!-- Start Two Column Section -->
    
    <div class="container my-5">
        <div class="row py-4">

            <div class="col-lg-4 mb-4 my-lg-auto">
                <h1 class="text-dark font-weight-bold mb-3">
                    WE HAVE BEEN EXPECTING YOU
                </h1>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laudantium alias repudiandae dolores, obcaecati iusto, porro officiis perferendis beatae, dolorum quasi dignissimos? Recusandae aut quidem, deserunt rerum nihil ab est.
                </p>
                <a href="#" target="_blank" class="btn btn-outline-dark btn-lg">
                    AGENCY
                </a>
            </div>

            <div class="col-lg-8">
                <img src="img/code.jpg" alt="" class="w-100">
            </div>

        </div>
    </div>

	<!-- End Two Column Section -->


    <!-- Start Jumbotron -->
    
    <div class="jumbotron py-5 mb-0">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-lg-8 col-xl-9 my-auto">
                    <h4>
                        looking for something
                    </h4>
                </div>

                <div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
                    <a href="#" class="btn btn-primary btn-lg">
                        Contact Us Today
                    </a>
                </div>

            </div>
        </div>
    </div>

	<!-- End Jumbotron -->


<?php

include("includes/footer.php");

?>

<!-- Start Socket -->
    
    <div class="socket text-light text-center py-3">
        <p>&copy; <a href="#" target="_blank">credits</a></p>
    </div>

<!-- End Socket -->



<!-- Script Source Files -->

        <!-- jQuery -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap 4.5 JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Font Awesome -->
        <script src="js/all.min.js"></script>

	<!-- End Script Source Files -->
</body>
</html>