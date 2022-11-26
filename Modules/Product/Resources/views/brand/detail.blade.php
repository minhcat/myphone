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
<small>Detail brand</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('brands.index') }}">Brands</a></li>
    <li class="active">Detail</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">Detail</h3>
      </div>
      <!-- todo: make button edit -->
      @include('product::brand.partials.form', [
        'type' => 'create',
        'action' => route('brands.index'),
        'method' => 'GET',
        'product' => $brand,
        'disabled' => true,
        'primaryButton' => [
          'show' => true,
          'type' => 'link',
          'link' => route('brands.index'),
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
</div>
@endsection