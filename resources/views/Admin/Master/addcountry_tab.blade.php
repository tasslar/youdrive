            <div class="alert alert-success alert-dismissible" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Alert!</h4>
                  Success alert . Successfully Inserted.
                </div>
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Länderangaben hinzufügen</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  	 {!! Form::open(array('class'=>'form-horizontal','id'=>'country_form')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ländername</label>
                        <input type="hidden" name="id" value="{{$inputVal['id']}}">
                        <div class="col-sm-6">
                          <input type="text" name="country_name" class="form-control" id="inputEmail3" placeholder="Enter Ländername" value="{{$inputVal['country_name']}}">
                           <span class="form-error country_name" style="color: red"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Länderstatus</label>

                        <div class="col-sm-6">
                          <select class="form-control" name="active">
                            <option value="Active" {{$inputVal['active'] ? 'Active' == 'selected=""':''}}>aktiv</option>
                            <option value="Inactive" {{$inputVal['active'] ? 'Inactive' == 'selected=""':''}}>deaktiv</option>
                          </select>
                           <span class="form-error active" style="color: red"></span>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="col-sm-offset-2">
                        <button type="reset" class="btn btn-default">stornieren</button>
                        <input type="button" id="country_add" value="sparen" name="add_country" class="btn btn-info">
                      </div>
                    </div>
                    <!-- /.box-footer -->
                  {!! Form::close() !!}

                </div>
              </div>