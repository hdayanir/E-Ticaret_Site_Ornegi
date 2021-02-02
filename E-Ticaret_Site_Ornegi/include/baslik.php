
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm">Web Sitemize Hoş Geldiniz...</div>
              <!-- Language &amp; Currency wrapper -->
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"><span><img src="images/flag-default.jpg" alt="Turkish"><span class="lg-tr">Türkçe</span><i class="fa fa-angle-down"></i></span></div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">0850 222 56 56</span>
              <ul class="links">
                <li class="hidden-xs"><a title="Help Center" href="#"><span>Yardım Merkezi</span></a></li>
                <li><a title="Store Locator" href="#"><span>Mağaza Konum</span></a></li>
                <li>
                  <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Benim Hesabım</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="uye_girisi.php">Hesabım</a></li>
                      <li><a href="#">Favorilerim</a></li>
                      <li><a href="#">Sipariş İzleme</a></li>
                      <li><a href="#">Hakkımda</a></li>
                      <li class="divider"></li>
                      <li><a href="uye_girisi.php" class="kopru1" style="display:<?php if(isset($_COOKIE['guvenlik'])) echo 'none;' ?>">Giriş</a></li>
                      <li><a href="register_page.html">Kayıt Ol</a></li>
                    </ul>
                  </div>
                </li>
                <li><a title="login" href="uye_girisi.php" class="kopru1" style="display:<?php if(isset($_COOKIE['guvenlik'])) echo 'none;' ?>"><span>Giriş Yap</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block"> 
              
              <!-- Header Logo -->
              <div class="logo"><a title="e-commerce" href="index.php"><img src="images/logo.jpg"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search"> 
              
              <!-- Search -->
              
              <div class="top-search">
                <div id="search">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Ara..." name="search">
                      <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              
              <!-- End Search --> 
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
              <div class="link-wishlist"><a href="#"> <i class="icon-heart icons"></i><span> Favoriler</span></a> </div>
              <!-- top cart -->
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#">
                    <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total">3</span></div>
                    <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Sepetim</span> </div>
                    </a></div>
                  <div>
                    <div class="top-cart-content">
                      <div class="block-subtitle hidden">Ürünler</div>
                      <ul id="cart-sidebar" class="mini-products-list">
                        <li class="item odd"><a href="#" title="Product title here" class="product-image"><img src="images/products/product-9.jpg" alt="html Template" width="65"></a>
                          <div class="product-details"><a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                            <p class="product-name"><a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
                            <strong>1</strong> x <span class="price">$20.00</span> </div>
                        </li>
                      </ul>
                      <div class="top-subtotal">Toplam: <span class="price">$520.00</span></div>
                      <div class="actions">
                        <button class="btn-checkout" type="button" onClick="location.href='checkout.html'"><i class="fa fa-check"></i><span>Checkout</span></button>
                        <button class="view-cart" type="button" onClick="location.href='shopping_cart.html'"><i class="fa fa-shopping-cart"></i><span>Sepete Git</span></button>
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
  </header>
  <!-- end header -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
          <span class="mm-label">Tüm Kategoriler</span> </div>
        <div class="col-md-3 col-sm-3 mega-container hidden-xs">
          <div class="navleft-container">
            <div class="mega-menu-title">
              <h3><span>Tüm Kategoriler</span></h3>
            </div>
            

            
            <!-- Shop by category -->
            <div class="mega-menu-category">
              <ul class="nav">
                <li><a href="urunler.php" >&nbsp;Telefon</a></li>
              </ul>
              <ul class="nav">
                <li> <a href="urunler.php" > &nbsp;Bilgisayar</a></li>
              </ul>
              <ul class="nav">
                <li><a href="urunler.php" >&nbsp;Bilgisayar Parçaları</a></li>
              </ul>
              <ul class="nav">
                <li><a href="urunler.php">&nbsp;Foto &amp; Kamera</a></li>
              </ul>
              <ul class="nav">
                <li><a href="urunler.php">&nbsp;TV &amp; Ev Elektroniği</a></li>
              </ul>
              <ul class="nav">
                <li> <a href="urunler.php">&nbsp;Ofis Malzemeleri</a></li>
              </ul>
              <ul class="nav">
                <li><a href="urunler.php">&nbsp;Aksesuarlar</a></li>
              </ul>
              <ul class="nav">
                <li>  <a href="urunler.php">&nbsp;Oyun &amp; Hobi</a></li>
              </ul>
              <ul class="nav">
                <li><a href="urunler.php">&nbsp;Ev Aletleri &amp; Kişisel<br />
                  &nbsp;Bakım</a></li>
              </ul>
              
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 jtv-megamenu">
          <div class="mtmegamenu">
            <ul class="hidden-xs">
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="index.php">
                  <div class="title title_font"><span class="title-text">Anasayfa</span></div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                  <div class="title title_font"><span class="title-text">Kategori</span></div>
                  </a></div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"><a href="#" >&nbsp;Telefon</a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Samsung</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Apple</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Xaomi</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Lg</a></div>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"><a href="#">Bilgisayar </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Asus</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Apple</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Lenovo</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Casper</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Monster</a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"><a href="#">Foto & Kamera</a></div>
                    <ul class="submenu">
                      <li class="menu-item depth-2 category ">
                        <div class="title"><a href="shop_grid.html">Canon</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Nikon</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Fuji Film</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"><a href="shop_grid.html">Samsung</a></div>
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="shop_grid.html">
                  <div class="title title_font"><span class="title-text">Hakkımızda</span> </div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="about_us.html">
                  <div class="title title_font"><span class="title-text">Lookbook</span></div>
                  </a></div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="blog.html">
                  <div class="title title_font"><span class="title-text">Blog</span></div>
                  </a></div>
                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                  <li class="menu-item depth-1">
                    <div class="title"><a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"><a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"><a href="blog_full_width.html"> Blog – Full-Width </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"><a href="blog_single_post.html"> Single post </a></div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item">
                  <div class="title title_font"><span class="title-text">Best Seller</span></div>
                </div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                            <figure> <img class="first-img" src="images/products/product-5.jpg" alt="html theme"> <img class="hover-img" src="images/products/product-6.jpg" alt="html Template"></figure>
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
                  </li>
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                            <figure> <img class="first-img" src="images/products/product-1.jpg" alt="html Template"> <img class="hover-img" src="images/products/product-2.jpg" alt="html Template"></figure>
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
                  </li>
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                            <figure> <img class="first-img" src="images/products/product-3.jpg" alt="html Template"> <img class="hover-img" src="images/products/product-4.jpg" alt="html Template"></figure>
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
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>