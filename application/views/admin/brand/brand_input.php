  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Input Brand Baru
        <!-- <small>Tambah atau Hapus Produk</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Input Brand</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="box-header text-center">
        <!-- <h3 class ="box-title "><b><?=ucfirst($page)?> Produk</b> </h3> -->
        <div class="pull-right">
            <a href="<?=base_url('brand')?>"class="btn btn-warning btn-flat" >
                <i class="fa fa-undo"></i>Back
            </a>
        </div>
    </div>
    <div class="box-body"> 
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <form action="<?=base_url('brand/proses')?>" Method="post">
            <input type="hidden" name="id" value="<?=$row->id_brand?>">
            <div class="form-group">
                <label for="">Brand Produk</label>
                <input type="text" name="brand_produk" value ="<?=$row->brand_produk?>" placeholder="Isi brand Produk" class="form-control" required>
                </div>
                <div class="form-group">
                <button type="submit" name="<?=$page?>" class="btn btn-primary">Simpan</button>
                <button class="btn btn-primary" href="">Batal</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->