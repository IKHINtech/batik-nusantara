  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Input Produk Baru
        <small>Tambah atau Hapus Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Input Produk</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="box-header text-center">
        <!-- <h3 class ="box-title "><b><?=ucfirst($page)?> Produk</b> </h3> -->
        <div class="pull-right">
            <a href="<?=base_url('product')?>"class="btn btn-warning btn-flat" >
                <i class="fa fa-undo"></i>Back
            </a>
        </div>
    </div>
    <div class="box-body"> 
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php echo form_open_multipart('product/proses') ?>
                    <div class="form-group">
                    <label for="">Nama Produk</label>
                <input type="hidden" name="id" value="<?=$row->id_produk?>">
                <input type="text" name="nama_produk" value ="<?=$row->nama_produk?>" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="">Kategori Produk</label>
                <?= form_dropdown('kategori', $kategori, $selectedkategori,['class'=>'form-control']);?>
                    </div>

                    <div class="form-group">
                    <label for="">Harga Produk</label>
                <input type="number" name="harga" value="<?=$row->harga_produk?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="">brand Produk</label>
                    
                <?= form_dropdown('brand', $brand, $selectedbrand,['class'=>'form-control']);?></div>
                    

                    <!-- <div class="form-group">
                        <label for="">Departement</label>
                        <input type="text" name="dept" value ="<?=$row->dept?>" class="form-control" required>
                    </div> -->

                    <div class="form-group">
                    <label for="">Stock Produk</label>
                <input type="number" name="stock"value="<?=$row->stock_produk?>"class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="">Deskripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" ><?=$row->deskripsi?></textarea>
                <div>
                <div class="form-group">
                <label for="image">Image</label>
                <?php if ($page == 'edit') {
                    if ($row-> image != null){ ?>
                        </div style="margin-bottom:5px">
                            <img src="<?=base_url('upload/produk/'.$row->image)?>" style="width:50%">  
                        </div>                  
                    <?php
                    }                    
                }?>
                
                <input type="file" name="image" value="" id="" class="form-control">
                <small>(Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?> )</small>
                </div>
                     
                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->