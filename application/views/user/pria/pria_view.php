
        <div class="col-md-9 col-sm-8"> 
          <!-- right block Start  -->
          <div id="right">
            <div class="category-banner"> <a href="<?= base_url('assets/user/'); ?>#"><img src="<?= base_url('assets/user/'); ?>images/product/Category-banner.jpg" alt="#"></a> </div>
            <div class="row">
              <div class="col-md-6">
                <div class="view">
                  <div class="grid active "><a href="<?= base_url('assets/user/'); ?>grid-view.html">
                    <div class="grid-icon "></div>
                    </a> </div>
                  <div class="list"><a href="<?= base_url('assets/user/'); ?>list-view.html">
                    <div class="list-icon "></div>
                    </a> </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="shoring pull-right">
                  <div class="short-by">
                    <p>Sort By</p>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select>
                      <span class="fa fa-angle-down"></span> </div>
                  </div>
                  <div class="show-item">
                    <p>Show</p>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select>
                      <span class="fa fa-angle-down"></span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-grid-view">
              <ul>
                <?php foreach ($produk->result() as $key=>$row) {?>
                <li>
                  <div class="item col-md-4 col-sm-6 col-xs-6">
                    <div class="product-block ">
                      <input type="hidden" name="" id="" value="<?=$row->id_produk?>">
                      <div class="image"> <a href=""><img class="img-responsive" title="<?=$row->nama_produk?>" alt="T-shirt" src="<?= base_url('upload/produk/'.$row->image) ?>"></a> </div>
                      <div class="product-details">
                        <div class="product-name">
                          <h4><a href="<?= base_url('assets/user/'); ?>product-detail-view.html"><?=$row->nama_produk?></a></h4>
                        </div>
                        <div class="price"> <span class="price-old">$123.20</span> <span class="price-new"><?=$row->harga_produk?></span> </div>
                        <div class="product-hov">
                          <ul>
                            <li class="wish"><a href="<?= base_url('assets/pria/'); ?>"></a></li>
                            <li class="addtocart"><a href="<?=base_url('cart/add/'.$row->id_produk)?>">Add to Cart</a> </li>
                            <li class="compare"><a href="<?= base_url('assets/pria/'); ?>"></a></li>
                          </ul>
                          <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="pagination-bar">
              <ul>
                <li><a href="<?= base_url('assets/user/'); ?>#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="<?= base_url('assets/user/'); ?>#">1</a></li>
                <li><a href="<?= base_url('assets/user/'); ?>#">2</a></li>
                <li><a href="<?= base_url('assets/user/'); ?>#">3</a></li>
                <li><a href="<?= base_url('assets/user/'); ?>#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- right block end  --> 
        </div>
      </div>
    </div>
  </div>
  
