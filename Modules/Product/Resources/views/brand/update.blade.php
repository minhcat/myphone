@extends('Adminlte.master')

@section('title-page', 'Brands')

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

@section('small-info')
<small>Edit brand</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('brands.index') }}">Brands</a></li>
    <li class="active">Edit</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">{{ $form == 'create' ? 'Create' : 'Edit' }}</h3>
      </div>
      @include('product::brand.partials.form', [
        'type' => 'update',
        'action' => route('brands.update', $brand->id),
        'method' => 'POST',
        'product' => $brand,
        'primaryButton' => [
          'show' => true,
          'type' => 'button',
          'class' => 'btn-info',
          'label' => 'Update',
          'icon' => 'fa-save'
        ],
        'secondaryButton' => [
          'show' => true,
          'type' => 'link',
          'link' => route('brands.index'),
          'class' => 'btn-default',
          'label' => 'Back',
          'icon' => 'fa-arrow-left'
        ],
      ])
    </div>
    
    @include('product::brand.partials.log', ['brandLogs' => $brandLogs])
  </section>
</div>
@endsection

@section('script')
<!-- CK Editor -->
<!-- <script src="../../bower_components/ckeditor/ckeditor.js"></script> -->
<script src="{{ asset('Adminlte/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ Module::asset('product:js/product/update.js') }}"></script>
@endsection