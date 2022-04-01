@extends('Adminlte.master')

@section('title-page', 'Products')

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">List</h3>
        <button class="btn btn-primary pull-right">New Product</button>
      </div>
      <div class="box-body p-5">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h4 class="box-title text-4">Search</h4>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" id="nameInput">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="brandInput">Brand</label>
                            <input type="text" class="form-control" id="brandInput">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="categoryInput">Category</label>
                            <input type="text" class="form-control" id="categoryInput">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="descriptionInput">Description</label>
                            <input type="text" class="form-control" id="descriptionInput">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="statusInput">Status</label>
                            <select name="statusInput" id="statusInput" class="form-control select2-nosearch" style="width: 100%;">
                                <option value="0" selected="selected">pending</option>
                                <option value="1">show</option>
                                <option value="2">hide</option>
                                <option value="3">lock</option>
                                <option value="4">delete</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="createdByInput">Created by</label>
                            <input type="text" class="form-control" id="createdByInput">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="startDateInput">Start Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="startDateInput">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="EndDateInput">End Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="endDateInput">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                        <button class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>category</th>
                    <th>description</th>
                    <th>created by</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>status</th>
                    <th style="width:183px">action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Iphone 13 promax</td>
                    <td>Apple</td>
                    <td>Smartphone, modern</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Minh Cat</td>
                    <td>01/04/2022</td>
                    <td>01/04/2022</td>
                    <td><span class="badge bg-green">active</span></td>
                    <td>
                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-lock"></i></button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Iphone 13 promax</td>
                    <td>Apple</td>
                    <td>Smartphone, modern</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Minh Cat</td>
                    <td>01/04/2022</td>
                    <td>01/04/2022</td>
                    <td><span class="badge bg-red">disable</span></td>
                    <td>
                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-lock"></i></button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Iphone 13 promax</td>
                    <td>Apple</td>
                    <td>Smartphone, modern</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Minh Cat</td>
                    <td>01/04/2022</td>
                    <td>01/04/2022</td>
                    <td><span class="badge bg-orange">hide</span></td>
                    <td>
                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-lock"></i></button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Iphone 13 promax</td>
                    <td>Apple</td>
                    <td>Smartphone, modern</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Minh Cat</td>
                    <td>01/04/2022</td>
                    <td>01/04/2022</td>
                    <td><span class="badge bg-green">active</span></td>
                    <td>
                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-lock"></i></button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Iphone 13 promax</td>
                    <td>Apple</td>
                    <td>Smartphone, modern</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Minh Cat</td>
                    <td>01/04/2022</td>
                    <td>01/04/2022</td>
                    <td><span class="badge bg-aqua">pending</span></td>
                    <td>
                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-lock"></i></button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <ul class="pagination pagination-sm mb-0 pull-right">
            <li><a href="#"><<</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
@endsection

@section('script')
<script>
    $(function () {
        //Select2
        $('.select2-nosearch').select2({
            minimumResultsForSearch: -1
        })

        //Date picker
        $('#startDateInput').datepicker({
            autoclose: true
        })
        $('#endDateInput').datepicker({
            autoclose: true
        })
    })
</script>
@endsection