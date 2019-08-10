<!-- bredcrumb and page title block start  -->
<div id="bread-crumb">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
          <div class="page-title">
            <h4><?= $kategori?></h4>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="<?= base_url('assets/user/'); ?>index.html"><?= $beranda?></a></li>
              <li>\</li>
              <li><a href="<?= base_url('assets/user/'); ?>grid-view.html"><?= $kategori?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
  
  <div id="product-category">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4"> 
          <!-- left block Start  -->
          <div id="left">
            <div class="sidebar-block">
              <div class="sidebar-widget Category-block">
                <div class="sidebar-title">
                  <h4> Kategori</h4>
                </div>
                <ul class="title-toggle">
                <?php
                    $query = $this->db->get('kategori');
                        foreach ($query->result() as $row) {?>
                  <li><a href=""><?= $row->kategori_produk?></a></li>
                        <?php } ?>
                </ul>
              </div>
              <div class="sidebar-widget Shop-by-block">
                <div class="sidebar-title">
                  <h4>Brand Batik</h4>
                </div>
                <ul class="title-toggle">
                  <li class="category">
                    <ul>
                    <?php
                    $query = $this->db->get('brand');
                        foreach ($query->result() as $row) {?>
                      <li><a href=""><?= $row->brand_produk?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
          <!-- left block end  --> 
        </div>
