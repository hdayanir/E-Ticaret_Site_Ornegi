<?php include("connect/baglan.php") ?>
<!DOCTYPE html>
<html>

<?php include("include/head.php") ?>

<body class="product-page">
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 

  <?php include("include/baslik.php") ?>

  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Anasayfa Sayfasına Git" href="index.php">Anasayfa</a><span>&raquo;</span></li>
            <li class=""> <a title="Ürünler Sayfasına Git" href="urunler.php">Ürünler</a><span>&raquo;</span></li>
           <?php  $urun_id = $_GET['urun_id'];
                            $sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_id = $urun_id");
                            while($dr = mysqli_fetch_array($sorgu)){ ?>
            <li><strong><?php  $urun_adi = $dr['urun_adi']; echo $dr['urun_adi'];  ?></strong></li>
                            <?php } ?> 
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  
  <div class="main-container col1-layout">
  <?php
  $urun_id = $_GET['urun_id'];
  $sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_id = $urun_id");
  while($dr = mysqli_fetch_array($sorgu)){
	  $urun_adi = $dr['urun_adi'];
					$urun_fiyati = $dr['urun_fiyati'];
  ?>
    <div class="container">
    
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
                <div class="large-image">
                  <a href="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                   <img class="zoom-img" src="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>" alt="products"> 
                  </a>
                </div>
              <div class="flexslider flexslider-thumb">
                <ul class="previews-list slides">
                  <li>
                    <a href='urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>' ">
                      <img src="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>" alt = "Thumbnail 2"/>
                    </a>
                  </li>
                </ul>
              </div>
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1><?php echo $dr['urun_adi']; ?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $dr['urun_fiyati']; ?></span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $dr['urun_fiyati']; ?> </span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="rating-links"><a href="#">Puanı</a> </p>
                <p class="availability in-stock pull-right">Stok Adeti: <span>5</span></p>
              </div>
              <div class="short-description">
                <h2>Genel Bakış</h2>
                <?php echo $dr['urun_ozellikleri']; ?>
                </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
               
              </div>
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Adet:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-basket"></i> Sepete Ekle</span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart-o"></i><span>Favorilere Ekle</span></a></li>
                  <li><a href="#"><i class="fa fa-link"></i><span>Karşılaştır</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i><span>Tavsiye Et</span></a></li>
                </ul>
              </div>
              <div class="pro-tags">
                <div class="pro-tags-title">Tags:</div>
               <a href="#">ecommerce</a>,<a href="#">bootstrap</a>,<a href="#">shopping</a>,<a href="#">fashion</a>,<a href="#">responsive</a> </div>
              <div class="share-box">
                <div class="title">Share in social media</div>
                <div class="socials-box"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-instagram"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-overview-tab">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="product-tab-inner">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"><a href="#description" data-toggle="tab"> Açıklama </a></li>
                    <li><a href="#product_tags" data-toggle="tab">Öner</a></li>
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="std">
                        <p>Proin lectus ipsum, gravida et mattis vulputate, 
                          tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in 
                          faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend 
                          laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla
                          luctus malesuada tincidunt. Nunc facilisis sagittis ullamcorper. Proin 
                          lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et 
                          lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et 
                          ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus 
                          adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada 
                          tincidunt. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, 
                          gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. 
                          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                          cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl 
                          ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                        <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="product_tags">
                      <div class="box-collateral box-tags">
                        <div class="tags">
                          <form id="addTagForm" action="#" method="get">
                            <div class="form-add-tags">
                              <div class="input-box">
                                <label for="productTagName">Arkadaşına Öner:</label>
                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                <button type="button" title="Add Tags" class="button add-tags"><i class="fa fa-email"></i> &nbsp;<span>Gönder</span> </button>
                              </div>
                              <!--input-box--> 
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div> 
  
  <!-- Main Container End --> 
  
  <!-- Related Product Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="page-header">
            <h2>Related Products</h2>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-11.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-15.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-17.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-11.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-8.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-13.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-15.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-8.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                          <figure> <img class="first-img" src="images/products/product-16.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Product Slider End --> 
  
  <!-- Upsell Product Slider -->
  <section class="upsell-product-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-header">
            <h2>UpSell Products</h2>
          </div>
          <div class="slider-items-products">
            <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-12.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-9.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                            </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-10.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-16.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-11.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                            </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Upsell Product Slider End --> 
  <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>World-Wide Shipping</h3>
                <p>On order over $99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Member Discount</h3>
                <p>25% on order over $199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php include("include/footer.php") ?>
  
  </div>

<!-- End Footer --> 

 <?php include("js/script.js") ?>
</body>

<!-- Mirrored from htmlfamous.justthemevalley.com/single_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 23:07:41 GMT -->
</html>