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
        <div class="box">
            <div class="box-header text-center">
                <h3 class ="box-title "><b>Edit Users</b> </h3>
                <div class="pull-right">
                    <a href="<?=base_url('user')?>"class="btn btn-warning btn-flat" >
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="" Method="post">
                            <div class="form-group <?=form_error('fullname')? 'has-error': null?>">
                                <label for="">Nama</label>
                                <input type="hidden" name="user_id" value="<?=$row->user_id?>"id="">
                                <input type="text" name="fullname" value ="<?=$this->input->post('fullname') ????? $this->input->post('fullname') : $row->name?>" class="form-control">
                                <?=form_error('fullname')?>
                            </div>
                            <div class="form-group <?=form_error('username')? 'has-error': null?>">
                                <label for="">User Name</label>
                                <input type="text" name="username" value ="<?=$this->input->post('username')?? $row->username?>" class="form-control">
                                <?=form_error('username')?>
                            </div>
                            <div class="form-group <?=form_error('password')? 'has-error': null?>">
                                <label for="">Password</label> <small>Biarkan Kosong jika tidak diganti</small>
                                <input type="password" name="password" value ="<?=$this->input->post('password')?>" class="form-control">
                                <?=form_error('password')?>
                            </div>
                            <div class="form-group <?=form_error('password1')? 'has-error': null?>">
                                <label for="">Password Confirmation</label>
                                <input type="password" name="password1" value ="<?=$this->input->post('password1')?>" class="form-control">
                                <?=form_error('password1')?>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" value ="" class="form-control"><?=$this->input->post('address')?? $row->address?></textarea>
                            </div>
                            <div class="form-group <?=form_error('level')? 'has-error': null?>">
                                <label for="">Level</label>
                                <select name="level" class="form-control" id="">
                                <?php $level = $this->input->post('level')? $this->input->post('level') : $row->level?>
                                <option value="1">Administrator</option>
                                <option value="2"<?=$level == 2 ? 'selected' : null?>>Operator</option>
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


                </div>
                


            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->