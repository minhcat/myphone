@extends('Adminlte.master')

@section('title-page', 'Products')

@section('style')
<!-- product common style -->
<link rel="stylesheet" href="{{ Module::asset('product:css/product/common.css') }}">
@endsection

@section('small-info')
<small>Detail product</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('products.index') }}">Product</a></li>
    <li class="active">Detail</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-9">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">Detail</h3>
      </div>
      <!-- todo: make method generate data form -->
      @include('product::product.partials.form', [
        'type' => 'create',
        'action' => route('products.index'),
        'method' => 'GET',
        'product' => $product,
        'brands' => $brands,
        'disabled' => true,
        'primaryButton' => [
          'show' => true,
          'type' => 'link',
          'link' => route('products.index'),
          'class' => 'btn-default',
          'label' => 'Back',
          'icon' => 'fa-arrow-left'
        ],
        'secondaryButton' => [
          'show' => false,
          'label' => ''
        ],
      ])
    </div>
  </section>
  <section class="col-lg-3">
    @include('product::product.partials.image')
    @include('product::product.partials.category')
    @include('product::product.partials.tag')
  </section>

</div>
@endsection

@section('script')
<!-- CK Editor -->
<script src="{{ asset('Adminlte/vendor/ckeditor/ckeditor.js') }}"></script>
<!-- Page script -->
<script src="{{ Module::asset('product:js/product/detail.js') }}"></script>
@endsection