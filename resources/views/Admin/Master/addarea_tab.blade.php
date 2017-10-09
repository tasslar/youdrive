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
                        <label for="inputEmail1" class="col-sm-2 control-label">Ländername</label>

                        <div class="col-sm-6">
                          <select class="form-control select2" style="width: 100%;" name="country_id">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Bereichs name</label>

                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bereichsname" name="area_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Bereichs status</label>

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