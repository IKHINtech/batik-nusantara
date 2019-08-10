<?php if ($this->session->has_userdata('success')) {?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i>
                <?=$this->session->flashdata('success');?>
              </div>
<?php }elseif ($this->session->has_userdata('tidakketemu')) {?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-close"></i><?=$this->session->flashdata('tidakketemu');?>
              </div>
<?php }elseif ($this->session->has_userdata('updatesukses')) {?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><?=$this->session->flashdata('updatesukses');?>
              </div>
<?php }elseif ($this->session->has_userdata('delete')) {?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><?=$this->session->flashdata('delete');?>
              </div>
<?php }
?>



