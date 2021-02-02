  <?php 	$baglan1 = $_SESSION["baglan"]; ?>
  
  <div class="main-slider" id="home">
    <div class="container">
      <div class="row"> 
      
        <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"></div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
          <div id="jtv-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                 <ul>
                 <?php 
			          $sorgu=mysqli_query($baglan1,"Select * from slider ORDER BY id DESC LIMIT 4")or die(mysql_error());
			           while ($oku=mysqli_fetch_array($sorgu)){?>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''>
                  <img src="images/<?=$oku['foto_adres'];?>" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="<?=$oku['foto_baslik'];?>"/>
                  </li>
                  <?php } ?>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        
        </div>
      </div> 
    </div>
  </div> 