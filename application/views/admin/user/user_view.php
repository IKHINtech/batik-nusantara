  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        User Management
        <small>Change Password or Username</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->view('messages')?> 
        <div class="box">
            <div class="box-header">
                <h3 class ="box-title">List Users</h3>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal</button>
                <div class="pull-right">
                    <a href="<?=base_url('user/add')?>"class="btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus"></i>Create
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User Name</th> 
                            <th>Name</th>
                            <th>Address</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1;
                        foreach ($row->result() as $key=>$data) {?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->username?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->level ==1 ? "Administrator" : "Operator"?></td>
                            <td class= "text-center" width="160px">
                            <form action="<?=base_url('user/del')?>" method="post">
                                <a href="<?=base_url('user/edit/'.$data->user_id)?>"class="btn btn-primary btn-xs" >
                                    <i class="fa fa-pencil"></i>Update
                                </a>
                                
                                <input type="hidden" name ="user_id" value="<?=$data->user_id?>"> 
                                    <button onclick="return confirm('Apakah Anda Yakin ?')"class="btn btn-danger btn-xs" >
                                    <i class="fa fa-trash"></i>Delete
                                    </button>
                                </form>
                            
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
<!-- Modal -->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah User</h4>
            </div>
            <div class="modal-body">
            <form action="" Method="post">
                        <div class="form-group <?=form_error('fullname')? 'has-error': null?>">
                            <label for="">Nama</label>
                            <input type="text" name="fullname" value ="<?=set_value('fullname')?>" class="form-control">
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group <?=form_error('username')? 'has-error': null?>">
                            <label for="">User Name</label>
                            <input type="text" name="username" value ="<?=set_value('username')?>" class="form-control">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password')? 'has-error': null?>">
                            <label for="">Password</label>
                            <input type="password" name="password" value ="<?=set_value('password')?>" class="form-control">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('password1')? 'has-error': null?>">
                            <label for="">Password Confirmation</label>
                            <input type="password" name="password1" value ="<?=set_value('password1')?>" class="form-control">
                            <?=form_error('password1')?>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea name="address" value ="<?=set_value('address')?>" class="form-control"></textarea>
                        </div>
                        <div class="form-group <?=form_error('level')? 'has-error': null?>">
                            <label for="">Level</label>
                            <select name="level" class="form-control" id="">
                            <option value="">-Pilih-</option>
                            <option value="1" <?=set_value('level')==1 ? "selected" : null?>>Administrator</option>
                            <option value="2" <?=set_value('level')==2 ? "selected" : null?>>Operator</option>
                        </select>
                        <?=form_error('level')?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->