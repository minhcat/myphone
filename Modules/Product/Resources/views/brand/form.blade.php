<!-- <form action="{{ $type == 'create' ? route('products.store') : route('products.update', optional($product)->id) }}" method="POST"> -->
<form action="{{ $action }}" method="{{ $method }}">
@if ($method !== 'GET')
  @csrf
@endif

@if ($type == 'update')
  @method('PUT')
@endif

@php
  $disabled = $disabled ?? false;
@endphp
<div class="box-body p-5">
  <!-- Box Create/Edit -->
  <div class="form-group">
    <label for="nameInput">Name</label>
    <input type="text" class="form-control" id="nameInput" name="name" value="{{ optional($brand)->name }}" {{ $disabled ? 'disabled' : '' }}>
  </div>
  <div class="form-group">
    <label for="descriptionInput">Description</label>
    <textarea class="form-control" id="{{ $disabled ? 'descriptionInputDisabled' : 'descriptionInput' }}" rows="5" cols="80" name="description" {{ $disabled ? 'disabled' : '' }}>
    {!! optional($brand)->description !!}
    </textarea>
  </div>
</div>
<div class="box-footer">
  <!-- <button class="btn btn-info"><i class="fa fa-save"></i> {{ $type == 'create' ? 'Create' : 'Edit' }}</button> -->
  @if ($primaryButton['show'])
    @if ($primaryButton['type'] == 'button')
    <button class="btn {{ $primaryButton['class'] }}"><i class="fa {{ $primaryButton['icon'] }}"></i> {{ $primaryButton['label'] }}</button>
    @else
    <a href="{{ $primaryButton['link'] }}" class="btn {{ $primaryButton['class'] }}"><i class="fa {{ $primaryButton['icon'] }}"></i> {{ $primaryButton['label'] }}</a>
    @endif
  @endif
  @if ($secondaryButton['show'])
    @if ($secondaryButton['type'] == 'button')
    <button type="button" class="btn {{ $secondaryButton['class'] }}"><i class="fa {{ $secondaryButton['icon'] }}"></i> {{ $secondaryButton['label'] }}</a>
    @else
    <a href="{{ route('products.index') }}" class="btn {{ $secondaryButton['class'] }}"><i class="fa {{ $secondaryButton['icon'] }}"></i> {{ $secondaryButton['label'] }}</a>
    @endif
  @endif
</div>
</form>
