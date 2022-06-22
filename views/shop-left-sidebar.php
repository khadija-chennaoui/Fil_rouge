<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bijoux kadi & chen </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Add site Favicon -->
    <link rel="icon" href="views/assets/img/logo/jdid.png" sizes="32x32" />
    <link rel="icon" href="views/assets/img/logo/jdid.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="views/assets/img/logo/jdid.png" />
    <meta name="msapplication-TileImage" content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />
    <!-- CSS ========================= -->
    <link rel="stylesheet" href="views/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="views/assets/css/slick.css">
    <link rel="stylesheet" href="views/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="views/assets/css/font.awesome.css">
    <link rel="stylesheet" href="views/assets/css/icofont.min.css">
    <link rel="stylesheet" href="views/assets/css/elegant-icons.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="views/assets/css/style.css">
</head>

<body>
    <!--header area end-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h2>Shop</h2>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index">Home</a></li>
                            <li>></li>
                            <li><a href="shop-left-sidebar">PRODUIT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- shop page section satrt -->
    <div class="shop_page_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop_page_inner d-flex ">
                        <div class="shop_sidebar_widget">
                            <div class="shop_widget_list categories">
                                <div class="shop_widget_title categories_title">
                                    <h3>Acheter maintenant</h3>
                                </div>
                                <div class="widget_categories pb-5 mb-5">
                                    <ul>
                                        <li><a>L'OR </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="shop_widget_thumb">
                                <img src="views/assets/img/others/nov.png" alt="">
                            </div> -->
                        </div>
                        <div class="shop_right_sidaber">
                            <div class="shop_gallery">
                                <div class="row">
                                    <?php $produitcontrol = new ProduitController();
                                    $produit = $produitcontrol->getProduit();
                                    foreach ($produit as $rows) { ?>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb" style="WIDTH: 317px; height: 400px;">
                                                        <a><img src="views/assets/img/product/<?php echo $rows['1'] ?>" alt="" style="WIDTH: 100%; height: 100%;"></a>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4><a><?php echo $rows['2'] ?></a></h4>
                                                        <div class="price_box">
                                                            <span class="current_price"><?php echo $rows['3'] ?> DH</span>
                                                        </div>
                                                        <div class="product_variant_quantity d-flex align-items-center">
                                                            <form action="operation" method="POST">
                                                                <input type="hidden" name="product_id" value="<?= $rows[0] ?>">
                                                                <button class="btn btn-link" type="submit" name="acheter">ACHETEZ</button>
                                                            </form>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page section end -->
</body>

</html>