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
        style="background: url('./images/soil-conditioner.jpg') center/cover no-repeat; padding: 60px 0px ;">

        <!-- Dark overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.9);"></div>

        <div class="container position-relative py-5">
            <h2 class="mb-3" style="color: white; margin-bottom: 10px;">Soil Conditioner</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Soil Conditioner
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Products detalis  -->
    <div class="container py-5">
        <div class="row align-items-center" style="padding: 20px;">
            <!-- Left side image -->
            <div class="col-md-6 product-image">
                <img src="./images/soil-conditioner.jpg" height="auto" width="100%" alt="Soil Conditioner" />
            </div>

            <!-- Right side description -->
            <div class="col-md-6 product-details">
                <h2>Soil Conditioner</h2>
                <p>Our Soil Conditioner is specially formulated to improve soil structure, increase water retention, and
                    promote healthy root development. It revitalizes tired or compacted soils, making them more fertile
                    and easier to work with for better crop yields.</p>
                <ul>
                    <li>✔ Enhances soil texture and porosity</li>
                    <li>✔ Improves moisture retention and drainage</li>
                    <li>✔ Stimulates beneficial microbial activity</li>
                    <li>✔ Suitable for all types of agricultural and garden soils</li>
                </ul>
                <button type="button" class="btn btn-success btn-lg" onclick="openModal()">Enquiry Now</button>
            </div>
        </div>
    </div>

     <!-- footer -->
  <?php include('footer.php') ?>