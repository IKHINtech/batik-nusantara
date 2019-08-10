  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Detail Produk
        <small>detail Produk Terdaftar</small>
      </h1>
  </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Produk</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="container">
    <div class="col-sm-4">
        <div class="view-product">
            <img src="<?=base_url('upload/produk/'.$row->image)?>" width="200px" alt="" />
            <!-- <h3>Ter-Laris</!-->
        </div>
    </div>
    <div class="col-sm-8">
        <div class="product-information"><!--/product-information-->
            <h2><?=$row->nama_produk?></h2>
            <p>Web ID: <?=$row->id_produk?></p>
            <p><b>Harga : Rp.<?=$row->harga_produk?>,-</b></p>
            <p><b>Stock:</b> <?=$row->stock_produk?></p>
            <p><b>Kategori:</b> <?=$row->kategori_produk?></p>
            <p><b>Merk:</b> <?=$row->merek_produk?></p>
            <p><b>Deskripsi:</b> <?=$row->deskripsi?> </p>
            </div>
    </div>
</div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <!-- Footer -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->