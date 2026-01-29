<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- ✅ FIXED VIEWPORT TAG -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome to KJ EXIM - Organic Fertilizer Supplier</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conditional.css">
    <link rel="stylesheet" href="css/jquery.fancybox8cbb.css?v=2.1.5">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

</head>

<body id="home">

    <!-- header  -->
    <?php include('header.php') ?>

    <!-- bread crumb -->
    <section class=" text-white position-relative text-center"
        style="background: url('./images/vermicompost.jpg') center/cover no-repeat; padding: 60px 0px ;">

        <!-- Dark overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.9);"></div>

        <div class="container position-relative py-5">
            <h2 class="mb-3" style="color: white; margin-bottom: 10px;">Blog</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Blog
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Blog  -->
    <div class="container-fluid">
        <div class="container">

            <section class="ublogi-wrapper">
                <div class="ublogi-header text-center">
                    <h2 class="ublogi-title">Our Latest Blogs</h2>
                    <p class="ublogi-subtitle">
                        Natural products, organic farming & healthy living
                    </p>
                </div>

                <div class="row g-4 mb-3">

                    <!-- Blog 1 -->
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <article class="ublogi-card h-100">
                            <div class="ublogi-img">
                                <img src="./images/organic-manure.jpg" alt="Organic Manure">
                            </div>
                            <div class="ublogi-content mb-3">
                                <h3 class="mb-3">Benefits of Organic Manure</h3>
                                <p>
                                    Organic manure improves soil fertility, boosts crop yield,
                                    and supports sustainable farming practices naturally.
                                </p>
                                <a href="about.php" class="ublogi-btn">Read More</a>
                            </div>
                        </article>
                    </div>

                    <!-- Blog 2 -->
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <article class="ublogi-card h-100">
                            <div class="ublogi-img">
                                <img src="./images/Saffron-Essential-Oil.jpg" alt="Saffron Essential Oil">
                            </div>
                            <div class="ublogi-content">
                                <h3>Saffron Essential Oil Uses</h3>
                                <p>
                                    Saffron essential oil is valued for skincare, relaxation,
                                    and its antioxidant properties.
                                </p>
                                <a href="about.php" class="ublogi-btn">Read More</a>
                            </div>
                        </article>
                    </div>

                    <!-- Blog 3 -->
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <article class="ublogi-card h-100">
                            <div class="ublogi-img">
                                <img src="./images/vermicompost.jpg" alt="Vermicompost">
                            </div>
                            <div class="ublogi-content">
                                <h3>Why Vermicompost is Best</h3>
                                <p>
                                    Vermicompost enhances soil structure and promotes
                                    healthy plant growth organically.
                                </p>
                                <a href="about.php" class="ublogi-btn">Read More</a>
                            </div>
                        </article>
                    </div>

                </div>
            </section>

        </div>
    </div>
    <!-- Blog end -->

    <!-- footer -->
    <?php include('footer.php') ?>