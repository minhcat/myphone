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
      <form action="{{ $form == 'create' ? route('products.store') : route('products.update', $product->id) }}" method="POST">
      @csrf
      @if ($form == 'update')
        @method('PUT')
      @endif
      <div class="box-body p-5">
        <!-- Box Create/Edit -->
        <div class="form-group">
          <label for="nameInput">Name</label>
          @if ($form == 'update' && isset($product))
          <input type="text" class="form-control" id="nameInput" name="name" value="{{ $product->name }}">
          @else
          <input type="text" class="form-control" id="nameInput" name="name">
          @endif
        </div>
        <div class="form-group">
          <label for="brandInput">Brand</label>
          @if ($form == 'update' && isset($product))
          <input type="text" class="form-control" id="brandInput" name="brand_id" value="{{ $product->brand_id }}">
          @else
          <input type="text" class="form-control" id="brandInput" name="brand_id">
          @endif
        </div>
        <div class="form-group">
          <label for="priceInput">Price</label>
          <input type="text" class="form-control" id="priceInput">
        </div>
        <div class="form-group">
          <label for="descriptionInput">Description</label>
          @if ($form == 'update' && isset($product))
          <textarea class="form-control" id="descriptionInput" rows="5" cols="80" name="description" value="{{ $product->description }}"></textarea>
          @else
          <textarea class="form-control" id="descriptionInput" rows="5" cols="80" name="description"></textarea>
          @endif
        </div>
      </div>
      <div class="box-footer">
        <button class="btn btn-info"><i class="fa fa-save"></i> {{ $form == 'create' ? 'Create' : 'Edit' }}</button>
        <button class="btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Back</button>
      </div>
      </form>
    </div>
    
    <!-- Box Logs -->
    @if ($form == 'update')
    <div class="box box-info mb-0 collapsed-box">
      <div class="box-header with-border">
        <h4 class="box-title">Logs</h4>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-xs-3">
            <div class="form-group">
              <label for="nameInput">Account</label>
              <input type="text" class="form-control" id="nameInput">
            </div>
          </div>
          <div class="col-xs-3">
            <div class="form-group">
              <label for="startDateInput">Date</label>
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
              <label for="statusInput">Status</label>
              <select name="statusInput" id="statusInput" class="form-control select2-nosearch" style="width: 100%;">
                <option value="0" selected="selected">all</option>
                <option value="0">pending</option>
                <option value="1">success</option>
                <option value="2">deny</option>
                <option value="3">fail</option>
              </select>
            </div>
          </div>
          <div class="col-xs-3">
            <div class="form-group">
              <label for="statusInput">Type</label>
              <select name="statusInput" id="statusInput" class="form-control select2-nosearch" style="width: 100%;">
                <option value="0" selected="selected">all</option>
                <option value="1">create</option>
                <option value="2">edit</option>
                <option value="4">delete</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12">
            <button class="btn btn-info"><i class="fa fa-search"></i> Search</button>
            <button class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
          </div>
        </div>
        <table class="table table-bordered mt-5">
          <tbody>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>account</th>
              <th>date</th>
              <th>log</th>
              <th>status</th>
              <th>type</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Iphone 13 promax</td>
              <td>Minh Cat</td>
              <td>26/05/2022</td>
              <td>update : { name : { from : Iphone 13, to: Iphone 13 promax}}</td>
              <td>success</td>
              <td>update</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Iphone 13 promax</td>
              <td>Minh Cat</td>
              <td>26/05/2022</td>
              <td>update : { name : { from : Iphone 13, to: Iphone 13 promax}}</td>
              <td>success</td>
              <td>update</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Iphone 13 promax</td>
              <td>Minh Cat</td>
              <td>26/05/2022</td>
              <td>update : { name : { from : Iphone 13, to: Iphone 13 promax}}</td>
              <td>success</td>
              <td>update</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Iphone 13 promax</td>
              <td>Minh Cat</td>
              <td>26/05/2022</td>
              <td>update : { name : { from : Iphone 13, to: Iphone 13 promax}}</td>
              <td>success</td>
              <td>update</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Iphone 13 promax</td>
              <td>Minh Cat</td>
              <td>26/05/2022</td>
              <td>create : { name : iphone 13, brand: 1, description: Lorem ipsum dolor sit amet. }</td>
              <td>success</td>
              <td>create</td>
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
    @endif
    <!-- /Box Logs -->
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
        minimumResultsForSearch: -1
      })

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