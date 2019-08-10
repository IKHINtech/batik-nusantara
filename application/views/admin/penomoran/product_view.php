  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Daftar Produk Terdaftar
        <small>Add or Delete Pemonoran</small>
      </h1>
      <?php $this->view('messages');?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Input Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class ="box-title">Input Input Produk</h3>
                <div class="pull-right">
                    <a href="<?=base_url('product/add')?>"class="btn btn-primary btn-flat" >
                        <i class="fa fa-plus"></i>Create
                    </a> 
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th> 
                            <th>Kategori Produk</th>
                            <th>Harga Produk</th>
                            <!-- <th>Merek Produk</th> -->
                            <!-- <th>Stock Produk</th> -->
                            <!-- <th>Deskripsi</th> -->
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no =1;
                        foreach ($row->result() as $key=>$data) {?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->nama_produk?></td>
                            <td><?=$data->kategori_produk?></td> 
                            <td><?=$data->harga_produk?></td>
                            <!-- <td><?=$data->merek_produk?></td>  -->
                            <!-- <td><?=$data->stock_produk?></td>  -->
                            <!-- <td><?=$data->deskripsi?></td> -->
                            <td>
                            <?php if ($data->image != null) {?>
                                <img src="<?=base_url('upload/produk/'.$data->image)?>" style="width:100px">
                            <?php }?>
                            </td>
                            <td class= "text-center" width="200px" style="margin-top:20px">
                            <a href="<?=base_url('product/detail/'.$data->id_produk)?>"class="btn btn-warning btn-xs" >
                                    <i class="fa fa-info"></i> Detail
                                </a>
                            <a href="<?=base_url('product/edit/'.$data->id_produk)?>"class="btn btn-success btn-xs" >
                                    <i class="fa fa-pencil"></i> Ubah
                                </a>
                                <a href="<?=base_url('product/del/'.$data->id_produk)?>"onclick="return confirm('Apakah Anda Yakin ?') "class="btn btn-danger btn-xs" >
                                    <i class="fa fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php 
                        }?>
                    </tbody>
                </table>



            </div>
        </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->