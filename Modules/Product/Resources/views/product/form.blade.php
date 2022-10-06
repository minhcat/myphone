<form action="{{ $type == 'create' ? route('products.store') : route('products.update', optional($product)->id) }}" method="POST">
@csrf
@if ($type == 'update')
  @method('PUT')
@endif
<div class="box-body p-5">
  <!-- Box Create/Edit -->
  <div class="form-group">
    <label for="nameInput">Name</label>
    <input type="text" class="form-control" id="nameInput" name="name" value="{{ optional($product)->name }}">
  </div>
  <div class="form-group">
    <label for="brandInput">Brand</label>
    <select class="form-control select2" name="brand_id" id="brandSelect" style="width: 100%;">
      <option value="1">Apple</option>
      <option value="2">Samsung</option>
      <option value="3">Xiaomi</option>
      <option value="4">Realme</option>
    </select>
  </div>
  <div class="form-group">
    <label for="priceInput">Price</label>
    <input type="text" class="form-control" id="priceInput" name="price" value="{{ optional($product)->price }}">
  </div>
  <div class="form-group">
    <label for="descriptionInput">Description</label>
    <textarea class="form-control" id="descriptionInput" rows="5" cols="80" name="description">
    {!! optional($product)->description !!}
    </textarea>
  </div>
</div>
<div class="box-footer">
  <button class="btn btn-info"><i class="fa fa-save"></i> {{ $type == 'create' ? 'Create' : 'Edit' }}</button>
  <a href="{{ route('products.index') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
</div>
</form>
