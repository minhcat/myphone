@extends('Adminlte.master')

@section('title-page', 'Products')

@section('style')
<!-- bootstrap toggle style -->
<link rel="stylesheet" href="{{ asset('css/bootstrap4-toggle.min.css') }}">

<!-- product common style -->
<link rel="stylesheet" href="{{ Module::asset('product:css/product/common.css') }}">
@endsection

@section('small-info')
<small>List of products ({{ $products->total() }})</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('products.index') }}">Product</a></li>
    <li class="active">Index</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">List</h3>
        <a class="btn btn-primary pull-right" href="{{ route('products.create') }}">New Product</a>
      </div>
      <div class="box-body p-5">
        @include('product::product.partials.search', ['isSearch' => $isSearch])
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>category</th>
                    <!-- <th>description</th> -->
                    <th>created by</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>status</th>
                    <th style="width:271px">action</th>
                </tr>
                @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ optional($product->brand)->name }}</td>
                    <td>Smartphone, modern</td>
                    <!-- <td>{{ $product->description }}</td> -->
                    <td>Minh Cat</td>
                    <td>{{ $product->created_at->format(Helper::formatDate()) }}</td>
                    <td>{{ $product->updated_at->format(Helper::formatDate()) }}</td>
                    <td>
                        @if ($product->is_lock)
                            <span class="badge bg-orange">lock</span>
                        @else
                            <span class="badge bg-blue">active</span>
                        @endif

                        @if ($product->is_show)
                            <span class="badge bg-green">show</span>
                        @else
                            <span class="badge bg-red">hide</span>
                        @endif
                    </td>
                    <td class="action">
                        <button
                            class="btn btn-success btn-show"
                            type="button"
                            {{ $product->deleted_at ? 'disabled' : '' }}
                            title="ẩn/hiển thị sản phẩm"
                            data-toggle="modal"
                            data-target="#modal-show"
                            data-value="{{ $product->is_show ? '0' : '1' }}"
                            data-url="{{ route('products.update', $product->id) }}">
                            @if ($product->is_show)
                                <i class="fa fa-eye-slash"></i>
                            @else
                                <i class="fa fa-eye"></i>
                            @endif
                        </button>
                        <button
                            class="btn btn-warning btn-lock"
                            type="button"
                            {{ $product->deleted_at ? 'disabled' : '' }}
                            title="khóa/mở khóa sản phẩm"
                            data-toggle="modal"
                            data-target="#modal-lock"
                            data-value="{{ $product->is_lock ? '0' : '1' }}"
                            data-url="{{ route('products.update', $product->id) }}">
                            @if ($product->is_lock)
                                <i class="fa fa-unlock"></i>
                            @else
                                <i class="fa fa-lock"></i>
                            @endif
                        </button>
                        <a
                            href="{{ route('products.show', $product->id) }}"
                            class="btn btn-info"
                            {{ $product->deleted_at ? 'disabled' : '' }}
                            title="xem chi tiết sản phẩm"
                            type="button">
                            <i class="fa fa-file-text"></i>
                        </a>
                        <a
                            href="{{ route('products.edit', $product->id) }}"
                            class="btn btn-primary"
                            {{ $product->deleted_at ? 'disabled' : '' }}
                            title="thay đổi sản phẩm"
                            type="button">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if ($product->deleted_at == null)
                        <button
                            class="btn btn-danger btn-delete"
                            type="button"
                            title="xóa sản phẩm"
                            data-toggle="modal"
                            data-target="#modal-delete"
                            data-url="{{ route('products.destroy', $product->id) }}">
                            <i class="fa fa-trash"></i>
                        </button>
                        @else
                        <button
                            class="btn btn-danger btn-restore"
                            type="button"
                            title="phục hồi sản phẩm"
                            data-toggle="modal"
                            data-target="#modal-restore"
                            data-url="{{ route('products.restore', $product->id) }}">
                            <i class="fa fa-undo"></i>
                        </button>
                        @endif
                        <button
                            class="btn bg-maroon btn-ban"
                            type="button"
                            title="xóa vĩnh viễn sản phẩm"
                            data-toggle="modal"
                            data-target="#modal-ban"
                            data-url="{{ route('products.ban', $product->id) }}">
                            <i class="fa fa-ban"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('Adminlte.layout.paginate', ['paginator' => $products])

        @include('product::product.partials.modal')
      </div>
    </div>
  </section>
</div>
@endsection

@section('script')
<!-- Vendor script -->
<script src="{{ asset('js/bootstrap4-toggle.min.js') }}"></script>
<!-- Partials script -->
<script src="{{ Module::asset('product:js/product/partials/search.js') }}"></script>
<script src="{{ Module::asset('product:js/product/partials/modal.js') }}"></script>
@endsection