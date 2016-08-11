<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/alertify/css/alertify.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/alertify/css/themes/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jstree/dist/themes/default/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/custom.css">
    <style>
        textarea {
            resize: vertical; /* user can resize vertically, but width is fixed */
        }
        .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
        .tt-hint {
            width: 396px;
            height: 30px;
            padding: 8px 12px;
            font-size: 24px;
            line-height: 30px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        .tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
            color: #999;
        }

        .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
            width: 422px;
            margin-top: 12px;
            padding: 8px 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
            padding: 3px 20px;
            font-size: 18px;
            line-height: 24px;
        }

        .tt-suggestion.tt-is-under-cursor { /* UPDATE: newer versions use .tt-suggestion.tt-cursor */
            color: #fff;
            background-color: #0097cf;

        }

        .tt-suggestion p {
            margin: 0;
        }
    </style>
    <script type="text/javascript">
    
    </script>
    <script src="<?php echo base_url();?>assets/plugins/alertify/alertify.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/typeahead/typeahead.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jstree/dist/js-tree.js"></script>
  </head>
  <body class="sidebar-mini skin-red-light">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo base_url();?>tree/hirarchy" class="logo">
          <span class="logo-lg">Lets Lost Administrator</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $_SESSION['admin']['admin_name'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- <li class="user-header">
                    <p>
                        <?php echo $this->session->userdata('instansi')?>
                    </p>
                  </li> -->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a data-toggle="modal" data-target="#gantipwd" class="btn btn-default btn-flat">Ganti Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url();?>adminpage/trip"><i class="fa fa-circle-o"></i>Trip</a></li>
            <li><a href="<?php echo base_url();?>adminpage/member"><i class="fa fa-circle-o"></i>User</a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
    <section class="content-header">
      <h1></h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
<div class="modal fade" id="gantipwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Ganti Password</h4>
          </div>
          <form action="<?php echo base_url()?>tree/changepassword" method="post" class="form-horizontal" role="form">
              <div class="modal-body">
                  <input type="hidden" name="email" value="<?php echo $this->session->email?>">
                  <div class="form-group">
                      <label  class="col-sm-2 control-label" for="inputEmail3">Old Password</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputEmail3" name="old" placeholder="old password"/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="inputPassword3">New Password</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" name="new" placeholder="new password"/>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>