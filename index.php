<?php
$number = "8590787011";
$email = "manojjohn0210@gmail.com";
$address = "AM Rd, Opp Sana Residency, Nalam Mile, Erumathala P. O, Aluva, Kerala 683112";
$map = "https://goo.gl/maps/peDmWr6Ff9xXgKGh9";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olickal Battery Shop - Your Battery Solution</title>

    <meta name="title" content="Olickal Battery Shop - Your Battery Solution">
    <meta name="og:title" content="Olickal Battery Shop - Your Battery Solution">
    <meta name="image" content="./assets/img/1.svg">
    <meta name="description"
        content="Olickal Battery Shop is a battery shop located in Erumathala, Aluva. We provide all types of batteries for cars, bikes, inverters and other purposes. We also provide battery charging and battery water.">
    <meta name="keywords"
        content="Olickal Battery Shop, Battery Shop, Battery, Car Battery, Bike Battery, Inverter Battery, Battery Charging, Battery Water, Battery Service, Battery Sales, Car Battery Sales, Bike Battery Sales, Inverter Battery Sales, Battery Charging Service, Battery Water Service, Battery Service, Battery Sales, Car Battery Service, Bike Battery Service, Inverter Battery Service, Car Battery Sales, Bike Battery Sales, Inverter Battery Sales, Car Battery Water, Bike Battery Water, Inverter Battery Water, Car Battery Charging, Bike Battery Charging, Inverter Battery Charging, Car Battery Service, Bike Battery Service, Inverter Battery Service, Car Battery Sales, Bike Battery Sales, Inverter Battery Sales, Car Battery Water, Bike Battery Water, Inverter Battery Water, Car Battery Charging, Bike Battery Charging, Inverter Battery Charging">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Jino John">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .float {
            width: 60px;
            height: 60px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .float_up {
            width: 60px;
            height: 60px;
            background-color: black;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 43px;
            box-shadow: 2px 2px 3px #999;
            z-index: 99;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body>


    <div id="nav_top" class="bg-dark text-white py-3 px-4 d-none d-lg-block d-xl-block fs-7">
        <div class=" row d-lg-flex justify-content-between">
            <div class="col-3 px-lg-5"> <i class="bi bi-telephone-fill px-2"></i> <a
                    class="text-white text-decoration-none " href="tel:+91<?php echo $number ?>">(+91) <?php echo $number ?> </a>
            </div> <br class="d-sm-none">
            <div class="col-3 px-lg-5">
                <i class="bi bi-envelope-fill px-2"></i> <a class="text-white text-decoration-none"
                    href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
            </div> <br class="d-sm-none">
            <div class="col-6 px-lg-5">
                <i class="bi bi-geo-alt-fill px-2"></i> <a class="text-white text-decoration-none"
                    href="<?php echo $map ?>" target="_blank"><?php echo $address ?></a>
            </div>
        </div>
    </div>
    <div class="bg-danger bg-gradient">
        <marquee behavior="scroll" direction="left" class="fw-bold fs-5 text-white pt-2" scrollamount="10">
            Car , Bike , Inverter and all types of Battery Sales and Service including Battery Charging and Battery
            Water.
        </marquee>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./assets/img/1.svg" height="40px" alt="Olickal Battery Shop">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-xl-3 col-lg-1  d-none d-lg-block d-xl-block">

                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item px-3">
                        <a class="nav-link text-dark fw-bold" href="#home">Home</a>
                    </li> -->
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark fw-bold" href="#category">Categories</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark fw-bold" href="#services">Services</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark fw-bold" href="#about">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark fw-bold" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="tel:+91<?php echo $number ?>" class="btn btn-dark rounded-start-pill me-0 p-2 ps-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        Call Now
                    </a>
                    <!-- <a href="https://wa.me/91<?php echo $number ?>" class="btn btn-outline-dark rounded-0 me-0 p-2">
                        <i class="bi bi-whatsapp"></i>
                        Whatsapp Now
                    </a> -->
                    <a href="<?php echo $map ?>" target="_blank" class="btn btn-outline-dark rounded-end-pill me-4 p-2">
                        Get Directions
                        <i class="bi bi-geo-alt-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/carousel3.png" class="img-fluid d-block w-100 h-md-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/carousel1.png" class="img-fluid d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/carousel2.png" class="img-fluid d-block w-100" alt="...">
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
    </div>


    <div class="bg-white">
        <!-- Scroll Down -->
        <div class="text-center d-none d-lg-block d-xl-block">
            <a href="#category" class="text-decoration-none text-dark">
                <i class="bi bi-chevron-down fs-1"></i>
            </a>
        </div>

        <!-- category -->
        <section id="category">
            <div class="container-fluid">
                <h2 class="text-center fw-bold pt-5">Categories</h2>
                <div class="row row-cols-2 row-cols-md-4 row-cols-xl-4 g-4 px-5 py-4">
                    <div class="col">
                        <div class="h-100" data-aos="fade-left">
                            <img src="./assets/img/battery1" class="card-img-top" alt="...">

                            <div class="card-footer text-center">
                                <small class="text-dark fs-4 fw-medium">Car Batteries</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="fade-left" data-aos-duration="2500">
                            <img src="./assets/img/battery2" class="card-img-top" alt="...">

                            <div class="card-footer text-center">
                                <small class="text-dark fs-4 fw-medium">Bike Batteries</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="fade-right" data-aos-duration="2500">
                            <img src="./assets/img/battery3" class="card-img-top" alt="...">

                            <div class="card-footer text-center">
                                <small class="text-dark fs-4 fw-medium">Inverter Batteries</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="fade-right" data-aos-duration="2500">
                            <img src="./assets/img/battery4" class="card-img-top" alt="...">

                            <div class="card-footer text-center">
                                <small class="text-dark fs-4 fw-medium">Battery Water</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Battery Brands -->
    <div class="container-fluid">
        <h2 class="text-center fw-bold pt-5">Battery Brands</h2>
        <div class="m-3 px-3">
            <div class="row d-flex">
                <div class="col-4">
                    <img src="./assets/img/exide.png" class="img-fluid pt-3" alt="" />
                </div>
                <div class="col-4">
                    <img src="./assets/img/amaron.png" class="img-fluid rounded-4 p-2" alt="" />
                </div>
                <div class="col-4">
                    <img src="./assets/img/sf.jpg" class="img-fluid p-3" alt="" />
                </div>
                <!-- <div class="col-3">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" class="img-fluid" 
                        alt="" />
                </div> -->
            </div>
        </div>
    </div>

    <div class="mt-5">
        <!-- Services -->
        <section id="services" class="bg-dark bg-gradien4 text-white py-5">
            <div class="container-fluid">
                <h2 class="text-center fs-1 fw-medium">Services</h2>
                <div class="row row-cols-2 row-cols-md-4 row-cols-xl-4 g-4 px-5 py-4">
                    <div class="col">
                        <div class="h-100" data-aos="flip-left" data-aos-duration="2000">
                            <div class="p-xl-5 p-2">
                                <img src="./assets/img/service1.png" class="card-img-top rounded-4" alt="...">
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-white fs-5 fw-medium">Battery Charging</small>
                                <p class="text-white fs-7 fw-light">We provide battery charging service for all types of
                                    batteries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="flip-left" data-aos-duration="2000">
                            <div class="p-xl-5 p-2">
                                <img src="./assets/img/battery4.png" class="card-img-top rounded-4" alt="...">
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-white fs-4 fw-medium">Battery Water</small>
                                <p class="text-white fs-6 fw-light">We provide battery water for all types of batteries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="flip-left" data-aos-duration="2000">
                            <div class="p-xl-5 p-2">
                                <img src="./assets/img/service3.png" class="card-img-top rounded-4" alt="...">
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-white fs-4 fw-medium">Battery Sales</small>
                                <p class="text-white fs-6 fw-light">We provide battery sales for all types of batteries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100" data-aos="flip-left" data-aos-duration="2000">
                            <div class="p-xl-5 p-2">
                                <img src="./assets/img/service4.png" class="card-img-top rounded-4" alt="...">
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-white fs-4 fw-medium">Battery Service</small>
                                <p class="text-white fs-6 fw-light">We provide battery service for all types of
                                    batteries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!-- About Us -->
    <div class="bg-light bg-gradient container-fluid">
        <section id="about">
            <div class="row d-flex">
                <div class="col-lg-6 col-sm-12 m-0 p-0">
                    <img src="./assets/img/carousel2.png" class="img-fluid d-block h-100" alt="...">
                </div>
                <div class="col-lg-6 col-sm-12 p-0 text-dark">
                    <h2 class="text-right fw-bold ps-3 ps-xl-5 pe-0 pt-4 pb-2">About Us</h2>
                    <p class="text-right ps-xl-5 ps-3 fs-5">Olickal Battery Shop is a battery shop located in
                        Erumathala, Aluva.
                        We provide all types of batteries for cars, bikes, inverters and other purposes. We also provide
                        battery charging and battery water.</p>
                    <p class="text-right ps-xl-5 ps-3 fs-5">We also do <strong>Home Delivery</strong> of batteries and
                        breakdown
                        service within 10km radius.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact -->
    <section id="contact" class="bg-white">
        <div class="container-fluid">
            <h2 class="text-center fw-bold p-5">Contact</h2>
            <div class="row m-2 border border-5 rounded-5 border-dark">
                <div class="col-md-6 bg-dark text-white p-5 pb-0 rounded-4 align-items-center">
                    <h3 class="font-weight-bold pt-3">Contact Information</h3>
                    <br>
                    <p class="text-left px-2 pb-2 fs-6"><strong class="">Phone:</strong> <a
                            class="text-white fw-normal text-decoration-none" href="tel:+91<?php echo $number ?>">
                            (+91) <?php echo $number ?></a></p>
                    <p class="text-left px-2 py-2 fs-6"><strong class="">Email:</strong> <a
                            class="text-white fw-normal text-decoration-none" href="mailto:<?php echo $email ?>">
                            <?php echo $email ?></a> </p>
                    <p class="text-left px-2  py-2 fs-6"><strong class="">Address:</strong><a
                            class="text-white fw-normal text-decoration-none" href="<?php echo $map ?>"> <?php echo $address ?></a> </p>
                </div>
                <div class="col-md-6 p-xl-5 p-2">
                    <h3 class="fw-bold text-center">Contact Form</h3>
                    <form autocomplete="off" class="p-2">
                        <div class="form-group my-2 my-xl-3">
                            <input type="text" name="Name" id="name" class="form-control rounded-5 p-3 border-dark"
                                placeholder="Your Name *" value="" required />
                        </div>
                        <div class="form-group my-2 my-xl-3">
                            <input type="email" name="Email" id="email" class="form-control rounded-5 p-3 border-dark"
                                placeholder="Your Email *" value="" required />
                        </div>
                        <div class="form-group my-2 my-xl-3">
                            <input type="number" name="Phone" id="phone" class="form-control rounded-5 p-3 border-dark"
                                placeholder="Your Contact Number *" value="" required />
                        </div>
                        <div class="form-group my-2 my-xl-3">
                            <select class="form-control rounded-5 p-3 border-dark" id="service">
                                <option>Car Battery</option>
                                <option>Bike Battery</option>
                                <option>Inverter Battery</option>
                                <option>Battery Charging</option>
                                <option>Battery Water</option>
                                <option>Battery Service</option>
                            </select>
                        </div>
                        <div class="form-group my-2 my-xl-3 d-grid col-6 mx-auto">
                            <input type="button" name="submit" class="btn btn-md rounded-5 btn-dark p-3"
                                onclick="gotowhatsapp()" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
            <h2 class="text-center fw-bold pt-5">Location</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15712.445765906798!2d76.3958986!3d10.0899541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0809e8d862c8d5%3A0xfe1e34ae9cb371db!2sINVERTER%20BATTERY%2C%20Car%20Battery%2CEXIDE%2CAMARON%20%2CSF%20%2C%20INVERTER%20Olickal%20Battery%20Shop!5e0!3m2!1sen!2sin!4v1694645123305!5m2!1sen!2sin"
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-5 p-4"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12 mb-4">
                    <div class="text-center text-sm font-weight-bold">
                        All Rights Reserved ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Designed by
                        <a href="https://jinojohn.me" class="fw-bold text-dark text-decoration-none"
                            target="_blank">Jino John</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- WhatsApp Button -->
    <a href="https://wa.me/91<?php echo $number ?>" class="float rounded-circle position-fixed bottom-0 end-0 m-4 fs-2"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Up Button -->
    <button class="bttnn float_up rounded-circle position-fixed bottom-0 start-0 m-4 d-lg-none d-xl-none">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>

    <!-- <button class="rounded-circle position-fixed bottom-0 end-0 m-4 fs-2" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" onclick="">
        <i class="fa fa-whatsapp my-float"></i>
    </button> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function gotowhatsapp() {

            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var service = document.getElementById("service").value;

            if (name == "" || phone == "" || email == "" || service == "") {
                alert("Please fill all the fields");
                return;
            }
            else if (phone.length != 10) {
                alert("Please enter a valid phone number");
                return;
            }
            else if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
                alert("Please enter a valid email address");
                return;
            }
            else {
                var url = "https://wa.me/91<?php echo $number ?>text="
                    + "Name: " + name + "%0a"
                    + "Phone: " + phone + "%0a"
                    + "Email: " + email + "%0a"
                    + "Service: " + service;

                window.open(url, '_blank').focus();
            }
        }

        const button = document.querySelector('.bttnn');

        const displayButton = () => {
            window.addEventListener('scroll', () => {
                // console.log(window.scrollY);

                if (window.scrollY > 100) {
                    button.style.display = "block";
                } else {
                    button.style.display = "none";
                }
            });
        };

        const scrollToTop = () => {
            button.addEventListener("click", () => {
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
                // console.log(event);
            });
        };

        displayButton();
        scrollToTop();
    </script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>