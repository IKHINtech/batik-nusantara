  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Input Inventory System
        <small>Add or Delete Inventory System</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Input Operational</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class ="box-title">Input Inventory System</h3>
                <div class="pull-right">
                    <a href="<?=base_url('inventory/add')?>"class="btn btn-primary btn-flat" >
                        <i class="fa fa-plus"></i>Create
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>System Name</th>
                            <th>Version / Serial Number</th>
                            <th>Location</th>
                            <th>System Owner</th>
                            <th>System Classification</th>
                            <th>GxP</th>
                            <th>Electronic Record</th>
                            <th>Elcetronic Signaure</th>
                            <th>Validation Status</th>
                            <th>Last Valid Date</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1;
                        foreach ($row->result() as $key=>$data) {?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->system_name?></td>
                            <td><?=$data->version_serial?></td>
                            <td><?=$data->location?></td>
                            <td><?=$data->sys_owner?></td>
                            <td><?=$data->sys_classification?></td>
                            <td><?=$data->gxp?></td>
                            <td><?=$data->electronic_record?></td>
                            <td><?=$data->electronic_signature?></td>
                            <td><?=$data->validation_status?></td>
                            <td><?=$data->valid_date?></td>
                            <td><?=$data->priority?></td>
                            <td class= "text-center" width="120px">
                            <a href="<?=base_url('inventory/edit/'.$data->inventory_id)?>"class="btn btn-success btn-xs" >
                                    <i class="fa fa-pencil"></i>Update
                                </a>
                                <a href="<?=base_url('inventory/del/'.$data->inventory_id)?>"onclick="return confirm('Apakah Anda Yakin ?') "class="btn btn-danger btn-xs" >
                                    <i class="fa fa-trash"></i>Delete
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