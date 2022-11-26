@extends('Adminlte.master')

@section('title-page', 'Products')

@section('style')
<!-- product common style -->
<link rel="stylesheet" href="{{ Module::asset('product:css/product/common.css') }}">
@endsection

@section('small-info')
<small>Create new product</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('products.index') }}">Product</a></li>
    <li class="active">Create</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-9">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">{{ $form == 'create' ? 'Create' : 'Edit' }}</h3>
      </div>
      @include('product::product.partial.form', [
        'type' => 'create',
        'action' => route('products.store'),
        'method' => 'POST',
        'product' => null,
        'brands' => $brands,
        'primaryButton' => [
          'show' => true,
          'type' => 'button',
          'class' => 'btn-info',
          'label' => 'Create',
          'icon' => 'fa-save'
        ],
        'secondaryButton' => [
          'show' => true,
          'type' => 'link',
          'link' => route('products.index'),
          'class' => 'btn-default',
          'label' => 'Back',
          'icon' => 'fa-arrow-left'
        ],
      ])
    </div>
  </section>
  <section class="col-lg-3">
    @include('product::product.partial.image')
    @include('product::product.partial.category')
    @include('product::product.partial.tag')
  </section>

</div>
@endsection

@section('script')
<!-- CK Editor -->
<script src="{{ asset('Adminlte/vendor/ckeditor/ckeditor.js') }}"></script>
<!-- Page script -->
<script src="{{ Module::asset('product:js/product/create.js') }}"></script>
@endsection