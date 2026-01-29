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
            <h2 class="mb-3" style="color: white; margin-bottom: 10px;">Products</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Products
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- PRODUCTS SECTION STARTS -->
    <section class="container premium-products-section">
        <div class="ts_con ac">
            <h1 class="ttu dib rel premium-title">Our Products</h1>

            <div class="row mt30">

                <!-- Product 1 - BIG CARD -->
                <div class="col-sm-12 col-md-6">
                    <div class="product-card premium-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="product-image premium-image">
                            <img src="images/vermicompost.jpg" alt="Vermicompost Organic Fertilizer">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="vermicompost.php" class="quick-view-btn">
                                        <i class="fa fa-eye"></i> Quick View & Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details premium-details">
                            <div class="product-category">Premium Organic Fertilizer</div>
                            <h3>Vermicompost Supreme</h3>
                            <p class="product-description">100% natural, nutrient-rich vermicompost that enhances soil
                                structure,
                                increases water retention, and boosts crop yield. Perfect for organic farming and
                                sustainable
                                agriculture.</p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Rich in NPK</span>
                                <span><i class="fa fa-check"></i> 100% Organic</span>
                                <span><i class="fa fa-check"></i> Eco-Friendly</span>
                                <span><i class="fa fa-check"></i> Improves Soil Health</span>
                            </div>
                            <div class="product-actions">
                                <a href="vermicompost.php" class="btn btn-premium trans_eff">View Full Details</a>
                                <button class="btn btn-quote" onclick="openModal()">Get Bulk Quote</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - BIG CARD -->
                <div class="col-sm-12 col-md-6">
                    <div class="product-card premium-card">
                        <div class="product-badge new-badge">New Arrival</div>
                        <div class="product-image premium-image">
                            <img src="images/organic-manure.jpg" alt="Organic Manure">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="organic-manure.php" class="quick-view-btn">
                                        <i class="fa fa-eye"></i> Quick View & Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details premium-details">
                            <div class="product-category">Organic Manure</div>
                            <h3>Organic Manure Pro Plus</h3>
                            <p class="product-description">High-quality organic manure derived from natural sources.
                                Enhances soil
                                fertility, promotes microbial activity, and provides essential nutrients for optimal
                                plant growth.</p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Natural Composition</span>
                                <span><i class="fa fa-check"></i> Fast Absorption</span>
                                <span><i class="fa fa-check"></i> Improves Yield</span>
                                <span><i class="fa fa-check"></i> Safe for All Crops</span>
                            </div>
                            <div class="product-actions">
                                <a href="organic-manure.php" class="btn btn-premium trans_eff">View Full Details</a>
                                <button class="btn btn-quote" onclick="openModal()">Get Bulk Quote</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- Product 3 - BIG CARD -->
                <div class="col-sm-12 col-md-6">
                    <div class="product-card premium-card">
                        <div class="product-badge trending-badge">Most Popular</div>
                        <div class="product-image premium-image">
                            <img src="images/soil-conditioner.jpg" alt="Agricultural Soil Conditioner">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="soil-conditioner.php" class="quick-view-btn">
                                        <i class="fa fa-eye"></i> Quick View & Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details premium-details">
                            <div class="product-category">Soil Conditioner</div>
                            <h3>Advanced Soil Conditioner</h3>
                            <p class="product-description">Specialized soil conditioner that improves soil texture,
                                enhances water
                                retention capacity, balances pH levels, and increases nutrient availability for
                                healthier crop growth.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Improves Texture</span>
                                <span><i class="fa fa-check"></i> Water Retention</span>
                                <span><i class="fa fa-check"></i> pH Balanced</span>
                                <span><i class="fa fa-check"></i> Long Lasting</span>
                            </div>
                            <div class="product-actions">
                                <a href="soil-conditioner.php" class="btn btn-premium trans_eff">View Full Details</a>
                                <button class="btn btn-quote" onclick="openModal()">Get Bulk Quote</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 - BIG CARD -->
                <div class="col-sm-12 col-md-6">
                    <div class="product-card premium-card">
                        <div class="product-badge bulk-badge">Special Bulk Offer</div>
                        <div class="product-image premium-image">
                            <img src="images/bulk-fertilizer.jpg" alt="Bulk Fertilizer Supply">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="bulk-fertilizer.php" class="quick-view-btn">
                                        <i class="fa fa-eye"></i> Quick View & Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details premium-details">
                            <div class="product-category">Bulk Supply Solution</div>
                            <h3>Bulk Organic Fertilizer</h3>
                            <p class="product-description">Cost-effective bulk supply of premium organic fertilizers for
                                large-scale
                                farming, nurseries, and agricultural businesses. Custom packaging and delivery options
                                available.</p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Bulk Discounts</span>
                                <span><i class="fa fa-check"></i> Free Delivery*</span>
                                <span><i class="fa fa-check"></i> Custom Packaging</span>
                                <span><i class="fa fa-check"></i> Timely Supply</span>
                            </div>
                            <div class="product-actions">
                                <a href="bulk-fertilizer.php" class="btn btn-premium trans_eff">View Full Details</a>
                                <button class="btn btn-quote" onclick="openModal()">Get Bulk Quote</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- View All Products Button -->
                <div class="col-md-12 text-center mt-40">
                    <a href="products.php" class="btn btn-view-all">
                        <i class="fa fa-th-large"></i> View Complete Product Range
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCTS SECTION ENDS -->

   <!-- footer -->
  <?php include('footer.php') ?>