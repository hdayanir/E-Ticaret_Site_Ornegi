<?php include("connect/baglan.php") ?>
<!DOCTYPE html>
<html>
<?php include("include/head.php") ?>
<body class="cms-index-index cms-home-page">

<!-- end mobile menu -->
<div id="page"> 

  <!-- Header -->
  <?php include("include/baslik.php") ?>
  
  <!-- Slideshow  -->
  <?php include("include/slider.php") ?>
  
  <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>Ücretsiz Kargo</h3>
                <p>100₺ Üzeri Alış Verişlerde</p>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  
  <!-- All products-->
  
  <div class="container">
    <div class="home-tab">
      <div class="tab-title text-left">
        <h2>Öne Çıkanlar</h2>
        <ul class="nav home-nav-tabs home-product-tabs">
          <li class="active"><a href="#computer" data-toggle="tab" aria-expanded="false">Bilgisayar</a></li>
          <li><a href="#smartphone" data-toggle="tab" aria-expanded="false">Telefon</a></li>
          <li><a href="#watches" data-toggle="tab" aria-expanded="false">Foto & Kamera</a></li>
          <li><a href="#photo" data-toggle="tab" aria-expanded="false">Aksesuarlar</a></li>
        </ul>
      </div>
      <div id="productTabContent" class="tab-content">
        <div class="tab-pane active in" id="computer">
          <div class="featured-pro">
            <div class="slider-items-products">
              <div id="computer-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                <?php 
                  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 5");
                  while($db=mysqli_fetch_array($sorguu)){
                ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" alt="HTML template"></figure>
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
                          <div class="item-title"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>"><?=$db['urun_adi'];?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$db['urun_fiyati'];?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span>Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="smartphone">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                <?php 
                  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 5");
                  while($db=mysqli_fetch_array($sorguu)){
                ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" alt="HTML template"></figure>
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
                          <div class="item-title"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>"><?=$db['urun_adi'];?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$db['urun_fiyati'];?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span>Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="watches">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="watches-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                <?php 
                  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 5");
                  while($db=mysqli_fetch_array($sorguu)){
                ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" alt="HTML template"></figure>
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
                          <div class="item-title"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>"><?=$db['urun_adi'];?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$db['urun_fiyati'];?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span>Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="photo">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="photo-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                <?php 
                  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 5");
                  while($db=mysqli_fetch_array($sorguu)){
                ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" alt="HTML template"></figure>
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
                          <div class="item-title"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>"><?=$db['urun_adi'];?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$db['urun_fiyati'];?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span>Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
  <div class="inner-box">
    <div class="container">
      <div class="row"> 
        <!-- Banner -->
        <div class="col-md-3 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="images/sub1.jpg" alt="HTML template"></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> Büyük İndirim </div>
                  <div class="desc-text">Her Üründe Sepette %15 İndirim</div>
         
                  <p><a href="#" class="shop-now">Alışverişe Başla</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Best Sale -->
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Günün Ürünleri</h2>
              </div>
            </div>
           
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
             
                <div class="slider-items">
                <?php 
                  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 5");
                  while($db=mysqli_fetch_array($sorguu)){
                ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">Yeni</div>
                        <div class="pr-img-area"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" height="150" width="150" alt="HTML template"></figure>
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
                          <div class="item-title"> <a title="Product title here" href="urun-detay.php?urun_id=<?=$db['urun_id'];?>"><?=$db['urun_adi'];?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$db['urun_fiyati'];?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span>Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
  <!-- Blog -->
  
  
  <!-- our clients Slider -->
  
  <?php include("include/footer.php") ?>
  

 

  
  <!-- End Footer --> 
</div>

<?php include("js/script.js") ?>

</body>

<!-- Mirrored from htmlfamous.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 22:51:18 GMT -->
</html>
