<!DOCTYPE html>
<html>
<?php include("include/head.php") ?>

<body class="shop_grid_page">
<div id="page"> 
<?php include("include/baslik.php") ?>
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Anasayfa</a><span>&raquo;</span></li>
            <li class=""> <a title="" href="urunler.php">Ürünler</a><span>&raquo;</span></li>
            <li><strong>Telefon</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-1">
          
          <div class="shop-inner">
            <div class="page-title">
              <h2>Telefon</h2>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">18</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
              <?php
                    $i = 0;
                    $sutun = 5;
                    $sql=mysqli_query($baglan1,"select * from urunler where urun_menu_kategori='ceptel'");
                    while($veri = mysqli_fetch_assoc($sql)){ 
                        $i++;
                          
                    
                      ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="urunicerik/foto/<?php echo $sql['urun_menu_kategori'].'/'.$sql['foto_yol'];?>">
                          <figure> <img class="first-img" src="urunicerik/foto/<?php echo $sql['urun_menu_kategori'].'/'.$sql['foto_yol'];?>" alt="HTML template">
                           <img class="hover-img" src="urunicerik/foto/<?php echo $sql['urun_menu_kategori'].'/'.$sql['foto_yol'];?>" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="" href="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>"><?php echo $dr['urun_adi']; ?> </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $dr['urun_fiyati']; ?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Sepete Ekle</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
                  <?php } ?>
              </ul>
            </div>
            <div class="pagination-area">
              <ul>
                <li><a class="active" href="#">1</a></li>
                
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>


 
  
  <!-- Footer -->
  <?php include("include/footer.php") ?>
  
  <?php include("js/script.js") ?>
</body>

<!-- Mirrored from htmlfamous.justthemevalley.com/shop_grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 23:16:16 GMT -->
</html>
