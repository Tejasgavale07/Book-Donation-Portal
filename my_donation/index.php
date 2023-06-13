<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOE Book Hub
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">SCOE Book Hub</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>

                            <?php if(isset($_SESSION["login-user"])){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="../logout.php">Logout</a>
                                </li>  
                            <?php   } 

                            else{
                            ?>

                            <li class="nav-item">
                                <a class="nav-link" href="../Login.php">Sign in</a>
                            </li>
                            <?php }?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_login.php">Admin Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +917057507928">+91 7057507928</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="https://www.facebook.com/ " target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>Alone we can do little, together we can do so much</h1>
                            <h2>We <span>SCOE Book Hub</span> manage wastage for needy peoples</h2>
                            <p>Giving does not only precede receiving; it is the reason for it.....</p>
                            <div class="buttons">
                                <a href="#donation" class="btn1">Donate now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="img/img-1.png" alt="home-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>We Manage Wastage or Donation like..</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/clothing.png" alt="img">
                        <h3>Clothes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div> -->
                    <div class="don-box">
                        <img src="img/don/book.png" alt="img">
                        <h3>Books </h3>
                        <p> Never lend books, for no one ever returns them; the only books I have in my library are books that other folks have lent to me.</p>
                        <a href="book_don_form.php" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/sneakers.png" alt="img">
                        <h3>Footware</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div> -->
                    <div class="don-box">
                        <img src="img/don/gadgets.png" alt="img">
                        <h3>Gadgets</h3>
                        <p>“I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.”.</p>
                        <a href="gadgets_don_form.php" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/salary.png" alt="img">
                        <h3>Fund</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="donation_form.html" class="btn1">Donate Now</a>
                    </div> -->
                    <!-- <div class="don-box">
                        <img src="img/don/shopping-bag.png" alt="img">
                        <h3>Volunteer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        
                        <a href="food_don_form.php" class="btn1"> Volunteer Us</a>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/gadgets.png" alt="img">
                        <h3>Gadgets</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/book.png" alt="img">
                        <h3>Stationary</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <!-- <div class="don-box">
                        <img src="img/don/shopping-bag.png" alt="img">
                        <h3>Food</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Our Missions</h2>
                <p>We have delivered <span>Books </span> or <span>Other Stationary items</span> to needy Peoples</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"><img src="img/miss/1.jpg" alt="img"></div>
                        <div class="image"><img src="img/Donate-books.jpg" alt="img"></div>
                        <div class="image"><img src="img/book-don.jpg" alt="img"></div>
                        <div class="image"><img src="img/books-box.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/5.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/6.jpg" alt="img"></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <img src="img/gallery/1.jpg" alt="gallery-img">
                </div>
                </di v>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="img/book-graphic.jpg" alt="about">
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>What We Do & Why We Do</h2>
                    </div>
                    <p> The knowledge that you’re helping others is hugely empowering and, in turn, can make you feel happier and more fulfilled. Research has identified a link between making a donation to charity and increased activity in the area of the brain that registers pleasure - proving that as the old adage goes, it really is far better to give than to receive. </p>
                    <p>Our own research into why people give supports this. We asked 700 of our generous donors to tell us what motivates them to give regularly to charity; 42% agreed the enjoyment they receive from giving as a key influence. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="heading">
                <h2>Connect With Us</h2>
                <p>Fill this form, our team will collect your <span>Books</span> or <span>Other Stationary items</span>
                    from your place.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Mobile No.">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select name="donation" id="donation">
                                                    <option value="">Choose Book or Others</option>
                                                    <!-- <option value="food">Food</option> -->
                                                    <!-- <option value="clothes">Clothes</option> -->
                                                    <!-- <option value="footware">Footware</option>
                                                    <option value="books">Books</option>
                                                    <option value="fund">Fund</option> -->
                                                    <option value="gadget">Ele. Gadgets</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="text" id="" cols="90" rows="1"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <a href="#" class="btn1 mt-5">Submit Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>SCOE Book Hub</h4>
                        <p>Address : Plot No. 46, near MSEB Sub Station, Sector-5, Kharghar, Navi Mumbai, Maharashtra 410210 </p>
                        <p>Contact No : <a href="tel: +91 7057507928">+91 7057507928</a></p>
                        <!-- <a href=mailto:tejas.gavale21@gmail.com? subject="">Click here to send us an email!!!</a> -->
                        <p>Email : <a href=mailto:tejas.gavale21@gmail.com? subject=" We Wand to Donate!">tejas.gavale21@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="https://www.facebook.com/" target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="https://mail.google.com/mail/" target="_blank"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>


<?php 

?>