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
                    <a href="<?=base_url('brand/add')?>"class="btn btn-primary btn-flat" >
                        <i class="fa fa-plus"></i>Create
                    </a> 
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama brand</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no =1;
                        foreach ($row->result() as $key=>$data) {?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->brand_produk?></td>
                            <td class= "text-center" width="200px" style="margin-top:20px">
                            <a href="<?=base_url('brand/edit/'.$data->id_brand)?>"class="btn btn-success btn-xs" >
                                    <i class="fa fa-pencil"></i> Ubah
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