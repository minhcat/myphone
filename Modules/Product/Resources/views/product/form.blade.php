@extends('Adminlte.master')

@section('title-page', 'Products')

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">Create</h3>
      </div>
      <div class="box-body p-5">
        <div class="box box-info mb-0">
          <div class="box-header with-border">
            <h4 class="box-title">Info</h4>
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
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button class="btn btn-info"><i class="fa fa-save"></i> Create</button>
        <button class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button>
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