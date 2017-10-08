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
    <div id="loadspinner" class="spinner_manage" style="display: none;">
        <img id="img-spinner" src="{{URL::asset('images/ajax-loader.gif')}}" alt="Loading" />
    </div>
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
              <li class="edit_blade1 active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-eye"></i> &nbsp; Alle Länder ansehen
              <li class="edit_blade"><a href="#tab_2" class="manage_country" data-toggle="tab"  data_url="{{route('addcountry',['country_id'=> $country['id']])}}"><i class="fa fa-plus"></i> &nbsp; neues Land hinzufügen</a></li>
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
                        <th>Ländername</th>
                        <th>Status</th>
                        <th>Aktion</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($fetch_master as $value)
                      <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->country_name}}</td>
                        <td>{{$value->active}}</td>
                        <td> 
                          <a href="#tab_2" data_url="{{route('addcountry',['country_id'=> $value->id])}}" data-toggle="tab" class="text-muted btn btn-default manage_country"><i class="fa fa-edit"></i></a>
                          <a href="#" data_url="{{route('addcountry',['country_id'=> $value->id])}}" class="text-muted btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      @endforeach
                      <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Ländername</th>
                          <th>Status</th>
                          <th>Aktion</th>
                        </tr>
                        </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
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
<script type="text/javascript">
    $(document).on('click','.manage_country',function(){
      $("#loadspinner").css("display", "block");
      var country_path = $(this).attr('data_url');
      $.ajax({
        type:'get',
        url:country_path,
        success:function(response)
        {
          $('.edit_blade').addClass('active');
          $('.edit_blade1').removeClass('active');
          $("#loadspinner").css("display", "none");
          $('#tab_2').html(response);
        }
      });
    });
    $(document).on('click','#country_add',function(){
      $("#loadspinner").css("display", "block");
        var token = "{{ csrf_token() }}";
        var form_data = $('#country_form').serialize();
        var country_url = $('.manage_country').attr('data_url');
        console.log(country_url);
        $.ajax({
          type: 'post',
          headers: {'X-CSRF-TOKEN': token},
          url:country_url,
          data: form_data,
          success: function (response)
            {
              $("#loadspinner").css("display", "none");
              if(response.status === 400){
                    $.each(response.errors, function (key, val) {
                        $("."+key).text(val);
                        $('.'+key).delay(1000).fadeOut(4000);
                    });
                }
              if(response.status === 200){
                $('#country_form').trigger('reset');
                $('.alert-success').css("display","block");
                $('.alert-success').delay(1000).fadeOut(6000);
              }

            }    
        });
    });
    $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
</script>
@stop