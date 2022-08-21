@extends('Adminlte.master')

@section('title-page', 'Products')

@section('style')
<style>
  .tag {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    background-color: #f2f2f2;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
  }
  .tag .btn {
    padding: 0 0.25rem;
    border: none;
  }
  .tag .btn:hover, .tab .btn:focus {
    background-color: unset;
  }
</style>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-9">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">{{ $form == 'create' ? 'Create' : 'Edit' }}</h3>
      </div>
      @include('product::product.form', ['type' => 'create', 'product' => null])
    </div>
  </section>
  <section class="col-lg-3">
    <!-- Box Categories -->
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">Categories</h3>
      </div>
      <div class="box-body p-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <div class="checkbox">
                <label for="category1">
                  <input type="checkbox" id="category1">
                  Category 1
                </label>
              </div>
              <div class="checkbox">
                <label for="category3">
                  <input type="checkbox" id="category3">
                  Category 3
                </label>
              </div>
              <div class="checkbox">
                <label for="category5">
                  <input type="checkbox" id="category5">
                  Category 5
                </label>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <div class="checkbox">
                <label for="category2">
                  <input type="checkbox" id="category2">
                  Category 2
                </label>
              </div>
              <div class="checkbox">
                <label for="category4">
                  <input type="checkbox" id="category4">
                  Category 4
                </label>
              </div>
              <div class="checkbox">
                <label for="category6">
                  <input type="checkbox" id="category6">
                  Category 6
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Box Categories -->
    <!-- Box Tags -->
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">Tag</h3>
      </div>
      <div class="box-body p-5">
        <div class="form-group">
          <label for="tag-new">Add Tag</label>
          <input type="text" class="form-control" id="tag-new" name="name" value="">
        </div>
        <span class="tag">tag1 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag2 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag3 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag4 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag5 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag6 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag7 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
        <span class="tag">tag8 <button class="btn btn-default"><i class="fa fa-times"></i></button></span>
      </div>
    </div>
    <!-- /Box Tags -->
  </section>

</div>
@endsection

@section('script')
<!-- CK Editor -->
<!-- <script src="../../bower_components/ckeditor/ckeditor.js"></script> -->
<script src="{{ asset('Adminlte/vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      //Select2
      $('.select2-nosearch').select2({
        // minimumResultsForSearch: -1
        minimumResultsForSearch: 1
      })
      $('.select2').select2()

      //Date picker
      $('#startDateInput').datepicker({
        autoclose: true
      })
      $('#endDateInput').datepicker({
        autoclose: true
      })

      //CKEditor
      CKEDITOR.replace('descriptionInput')
    })
</script>
@endsection