
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title?></title>
<meta content="" name="description">
<meta content="" name="author">
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/user/'); ?>images/favicon.ico">
<link rel="icon" type="image/png" href="<?= base_url('assets/user/'); ?>images/favicon.png">
<link rel="apple-touch-icon" href="<?= base_url('assets/user/'); ?>images/favicon.png">
<link href="<?= base_url('assets/user/'); ?>Bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url('assets/user/'); ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/user/'); ?>css/font-awesome.css" rel="stylesheet" type="text/css">
<link href= "<?= base_url('assets/user/'); ?>css/fonts.css"rel='stylesheet' type='text/css'>
<link href="<?= base_url('assets/user/'); ?>css/owl.carousel.css" rel="stylesheet" type="text/css">
</head>
<body id="index">
<div class="wrapar"> 
  <!-- Header Start-->
  <div class="header">
    <div class="header-top">
      <div class="container">
        <div class="call pull-left">
          <p>Hubungi Kami : <span>+6285 3111 23828</span></p>
        </div>
        <div class="user-info pull-right">
          <div class="user">
            <ul>
              <li><a href="<?= base_url('assets/user/'); ?>#" data-toggle="modal" data-target="#login">Masuk</a> 
                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Masuk</div>
                          <div class="pull-right"><a href="##">Lupa Password?</a>
                            <button aria-hidden="true" data-dismiss="modal" class="close btn btn-xs " type="button"> <i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body mb-23">
                        <form id="loginform" class="form-horizontal" action="<?=base_url('login/proses');?>" method="post">
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                          </div>
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          <div class="form-group"> 
                            <!-- Button -->
                            <div class="col-sm-12 controls"> 
                              <button type="submit" name="login" class="btn btn-primary btn-success">Masuk</button>
                              <button type="submit" name="" class="btn btn-primary btn-success">Batal</button>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <div class="form-group">
                          <div class="col-md-12 control">
                            <div>Tidak punya akun! <a href="<?= base_url('assets/user/'); ?>#">Mendaftar Disini</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="<?= base_url('assets/user/'); ?>#" data-toggle="modal" data-target="#register">Mendaftar</a>
                <div class="modal fade" id="register" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Mendaftar</div>
                          <div class="pull-right">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body">
                      <form action="" Method="post">
                        <div class="control-group "> 
                          <!-- Username -->
                          <label class="control-label"  for="username">Username</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                            <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- E-mail -->
                          <label class="control-label" for="email">E-mail</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                            <p class="help-block">Please provide your E-mail</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password-->
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            <p class="help-block">Password should be at least 4 characters</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password -->
                          <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                          <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                            <p class="help-block">Please confirm password</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Button -->
                          <div class="controls">
                            <button type="submit" class="btn btn-success">Register</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-mid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 header-left">
            <div class="logo"> <a href="<?= base_url('assets/user/'); ?>index.html"><img src="<?= base_url('assets/user/'); ?>images/Toko Batik Nusantara (1).png" width="180px"alt="#" ></a> </div>
          </div>
          <div class="col-md-6 search_block">
            <div class="search">
              <form action="grid-view.html">
                <div class="search_cat">
                  <select class="search-category" name="search-category">
                    <option class="computer" selected>Semua Kategori</option>
                    <?php
                    $query = $this->db->get('kategori');
                        foreach ($query->result() as $row) {?>
                    <option class="computer"><?=$row->kategori_produk?></option>
                        <?php } ?>
                  </select>
                  <span class="fa fa-angle-down"></span> </div>
                <input type="text" placeholder="Cari...">
                <button type="submit" class="btn submit"> <span class="fa fa-search"></span></button>
              </form>
            </div>
          </div>
          <div class="col-md-3 header-right">
            <div class="cart">
              <div class="cart-icon dropdown"></div>
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="<?= base_url('assets/user/'); ?>cart.html">Keranjang Ku ( 2 )<span> $261.20</span></a>
              <ul class="dropdown-menu pull-right cart-dropdown-menu">
                <li>
                  <table class="table table-striped">
                    <tbody>
                    <?php foreach ($wishlist->result() as $key=>$data) {?>
                      <tr>
                        <td class="text-center"><a href="<?= base_url('assets/user/'); ?>product.html"><img class="img-thumbnail" src="<?=base_url('upload/produk/'.$data->image)?>" alt="img"></a></td>
                        <td class="text-left"><a href="<?= base_url('assets/user/'); ?>#"><?= $data->nama_produk?></a></td>
                        <td class="text-right quality"></td>
                        <td class="text-right price-new"><?= $data->harga_produk?></td>
                        <td class="text-center"><button type="button" title="Remove" class="btn btn-xs remove"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div class="minitotal">
                    <table class="table pricetotal">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right price-new">$210.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right price-new">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (20%)</strong></td>
                          <td class="text-right price-new">$42.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right price-new">$254.00</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="controls"> <a class="btn btn-primary pull-left" href="<?= ('cart') ?>" id="view-cart"><i class="fa fa-shopping-cart"></i> View Cart </a> <a class="btn btn-primary pull-right" href="<?= base_url('assets/user/'); ?>checkout.html" id="checkout"><i class="fa fa-share"></i> Checkout</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="new-further">
              <p>Yang Baru dari Batik Nusantara  : </p>
              <ul class="toggle-newinFurther">
                <li><a href="<?= base_url('assets/user/'); ?>#">Batik Wanita</a></li>
                <li><a href="<?= base_url('assets/user/'); ?>#">Batik anak-anak</a></li>
                <!-- <li><a href="<?= base_url('assets/user/'); ?>#">Nightwear</a></li>
                <li><a href="<?= base_url('assets/user/'); ?>#">Panties</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End --> 
  
  <!-- Main menu Start -->
  <div id="main-menu">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button aria-controls= "navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="<?= base_url('assets/user/'); ?>#" class="navbar-brand">menu</a> </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url('home_user'); ?>">BERANDA</a></li>
            <li><a href="<?= base_url('pria'); ?>">PRIA</a></li>
            <li><a href="<?= base_url('wanita'); ?>">WANITA</a><span class="new">baru</span></li>
            <li><a href="<?= base_url('anak'); ?>">ANAK-ANAK</a></li>
            <li><a href="<?= base_url('assets/user/'); ?>blog.html">BLOG</a></li>
            <li><a href="<?= base_url('contact'); ?>">HUBUNGI KAMI</a></li>
            <li><a href="<?= base_url('assets/user/'); ?>about-us.html">TENTENG KAMI</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- Main menu End --> 
  