
  <!-- Main Banner Start-->
  <div id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="main-slider" class="owl-carousel">
            <div class="item"><img src="<?= base_url('assets/user/'); ?>images/1.jpg" alt="main-banner1"></div>
            <div class="item"><img src="<?= base_url('assets/user/'); ?>images/2.jpg" alt="main-banner2"></div>
            <div class="item"><img src="<?= base_url('assets/user/'); ?>images/3.jpg" alt="main-banner3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Banner End --> 
  
  
  
  <!-- 3 CMS Block Start -->
  <div id="cms">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class= "cms-block1 col-sm-4 col-sm-12">
            <div class="stf">GRATIS ONGKIR DAN PENGIRIMAN</div>
            <p>berlaku untuk pembelian diatas Rp. 100.000,-</p>
          </div>
          <div class= "cms-block2 col-sm-4 col-sm-12">
            <div class="stf">GARANSI UANG KEMBALI</div>
            <p>berlaku untuk produk yang salah pengiriman</p>
          </div>
          <div class= "cms-block3 col-sm-4 col-sm-12">
            <div class="stf">25% DISKON UNTUK BAJU ANAK-ANAK</div>
            <p>baju anak-anak merek tertentu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 3 CMS Block End --> 
  
  <!-- Featured Products block Start  -->
  <div id="Featured">
    <div class="container">
      <div class="row">
        <div class="col-md-12 featured">
          <div class="Featured-Products-title">
            <h2 class="tf">Produk Terlaris!<span> Segera Beli </span></h2>
          </div>
          <div class= "customNavigation"> <a class="btn featured_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn featured_next next"><i class="fa fa-angle-right"></i></a> </div>
          <div class="box">
            <div id="featured-products" class="owl-carousel">
            <?php foreach ($produk->result() as $key=>$data) {?>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="product-detail-view.html"><img class="img-responsive" title="<?=$data->nama_produk?>" alt="T-shirt" src="<?=base_url('upload/produk/'.$data->image)?>"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="product-detail-view.html"><?=$data->nama_produk?> </a></h3>
                    </div>
                    <div class="price"> <span class="price-old">Rp. <?=$data->harga_produk?>,-</span> <span class="price-new">Rp. <?=$data->harga_produk?>,-</span> </div>
                    <div class="product-hov">
                      <ul>
                        <li class="wish"><a href="#" ></a></li>
                        <li class="addtocart"><a href="#" >Add to Cart</a> </li>
                        <li class="compare"><a href="#" ></a></li>
                      </ul>
                      <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Products block End  --> 
  
  
  <!-- Latest News block Start  -->
  <div id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-9 news">
          <div class="Latest-News-title">
            <h2 class="tf">Latest Blog!<span> From newest items </span></h2>
          </div>
          <div class= "customNavigation"> <a class="btn Latest_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn Latest_next next"><i class="fa fa-angle-right"></i></a> </div>
          <div id="Latest-News" class="owl-carousel ">
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="<?= base_url('assets/user/'); ?>images/blog4.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="<?= base_url('assets/user/'); ?>images/blog1.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="<?= base_url('assets/user/'); ?>images/blog3.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="<?= base_url('assets/user/'); ?>images/blog4.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="<?= base_url('assets/user/'); ?>images/blog5.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 special">
          <div class="Special-title">
            <h2 class="tf">Best<samp> Offers</samp></h2>
          </div>
          <div class= "customNavigation"> <a class="special_prev"><i class="fa fa-angle-left"></i></a>
            <div id="owlStatus">
              <div class="currentItem">
                <div class="result"></div>
              </div>
              
              <div class="owlItems">
                <div class="result"></div>
              </div>
            </div>
            <a class="special_next"><i class="fa fa-angle-right"></i></a> </div>
          <div class="Special-product">
            <div id="special" class="owl-carousel">
              <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/special-banner.jpg" alt="#"></a> </div>
              <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/special-banner2.jpg" alt="#"></a></div>
              <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/special-banner3.jpg" alt="#"></a></div>
              <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/special-banner4.jpg" alt="#"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Latest News block End  --> 
  
  <!-- Brand logo block Start  -->
  <!-- <div id="brand">
    <div class="container">
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel">
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand1.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand2.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand3.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand4.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand5.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand6.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand7.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand8.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="<?= base_url('assets/user/'); ?>images/brand9.png" alt="#"></a></div>
          </div>
          <div class= "customNavigation"> <a class="btn brand_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn brand_next next"><i class="fa fa-angle-right"></i></a> </div>
        </div>
      </div>
    </div> -->
  </div>
  <!-- Brand logo block End  --> 
  
