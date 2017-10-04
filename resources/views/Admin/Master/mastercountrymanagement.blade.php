@extends('Admin.Shared.Layouts.Master')
  @section('title')
    @parent
    Country
@stop
@section('head')
<style type="text/css">
    .box{
      border-top: none;
    }
  </style>
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Land Management
        <small>Insgesamt verfügbar - 35</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Meister</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-map-marker"></i> Lage
          </a>
          <ul class="dropdown-menu">
            <li role="presentation"><a role="menuitem" href="areamanagement.html"><i class="fa fa-toggle-right"></i> Area Management</a></li>
            <li role="presentation"><a role="menuitem" href="postalcodemanagement.html"><i class="fa fa-toggle-right"></i> Postal Code Management</a></li>
          </ul>
        </li>
        <li class="active">land</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-eye"></i> &nbsp; Alle Länder ansehen
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-plus"></i> &nbsp; neues Land hinzufügen</a></li>
              <li class="dropdown pull-right">
                <a class="dropdown-toggle text-muted" data-toggle="dropdown" href="#">
                  <i class="fa fa-gear"></i>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-refresh"></i> Refresh</a></li>
                </ul>
              </li>
              <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">LÄNDER DETAILS</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Land-ID</th>
                        <th>Ländername</th>
                        <th>Status</th>
                        <th>Aktion</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td> 
                          <a href="#" class="text-muted btn btn-default"><i class="fa fa-edit"></i></a>
                          <a href="#" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Länderangaben hinzufügen</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  	 {!! Form::open(array('url' => route('countrymanage'), 'method' => 'post','class'=>'form-horizontal')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ländername</label>

                        <div class="col-sm-6">
                          <input type="text" name="country_name" class="form-control" id="inputEmail3" placeholder="Enter Ländername">
                        </div>
                         {!!$errors->first('country_name','<span class="form-error" style="color: red">:message</span>')!!}
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Länderstatus</label>

                        <div class="col-sm-6">
                          <select class="form-control" name="active">
                            <option value="Active">aktiv</option>
                            <option value="Inactive">deaktiv</option>
                          </select>
                        </div>
                         {!!$errors->first('active','<span class="form-error" style="color: red">:message</span>')!!}
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="col-sm-offset-2">
                        <button type="reset" class="btn btn-default">stornieren</button>
                        <button type="submit" name="add_country" class="btn btn-info">sparen</button>
                      </div>
                    </div>
                    <!-- /.box-footer -->
                  {!! Form::close() !!}

                </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
@stop
@section('footers')
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
@stop
@section('script')
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js')  }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
<!-- DataTables -->
<script src="{{ asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')  }}"></script>
<script src="{{ asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')  }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')  }}"></script>
<!-- FastClick -->
<script src="{{ asset('template/bower_components/fastclick/lib/fastclick.js')  }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js')  }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@stop