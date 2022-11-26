@extends('Adminlte.master')

@section('title-page', 'Brands')

@section('style')
<style>
    .action .btn {
        width: 3.8rem;
    }
</style>
@endsection

@section('small-info')
<small>List of brands</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('brands.index') }}">Brands</a></li>
    <li class="active">Index</li>
</ol>
@endsection

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">List</h3>
        <a class="btn btn-primary pull-right" href="{{ route('brands.create') }}">New Brand</a>
      </div>
      <div class="box-body p-5">
        @include('product::brand.partials.search', ['isSearch' => $isSearch])
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>id</th>
                    <th width="20%">name</th>
                    <th>created by</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>status</th>
                    <th style="width:260px">action</th>
                </tr>
                @foreach ($brands as $key => $brand)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>Minh Cat</td>
                    <td>{{ $brand->created_at->format(Helper::formatDate()) }}</td>
                    <td>{{ $brand->updated_at->format(Helper::formatDate()) }}</td>
                    <td>
                        @if ($brand->is_lock)
                            <span class="badge bg-orange">lock</span>
                        @else
                            <span class="badge bg-blue">active</span>
                        @endif

                        @if ($brand->is_show)
                            <span class="badge bg-green">show</span>
                        @else
                            <span class="badge bg-red">hide</span>
                        @endif
                    </td>
                    <td class="action">
                        <button
                            class="btn btn-success btn-show"
                            type="button"
                            {{ $brand->deleted_at ? 'disabled' : '' }}
                            data-toggle="modal"
                            data-target="#modal-show"
                            data-value="{{ $brand->is_show ? '0' : '1' }}"
                            data-url="{{ route('brands.update', $brand->id) }}">
                            @if ($brand->is_show)
                                <i class="fa fa-eye-slash"></i>
                            @else
                                <i class="fa fa-eye"></i>
                            @endif
                        </button>
                        <button
                            class="btn btn-warning btn-lock"
                            type="button"
                            {{ $brand->deleted_at ? 'disabled' : '' }}
                            data-toggle="modal"
                            data-target="#modal-lock"
                            data-value="{{ $brand->is_lock ? '0' : '1' }}"
                            data-url="{{ route('brands.update', $brand->id) }}">
                            @if ($brand->is_lock)
                                <i class="fa fa-unlock"></i>
                            @else
                                <i class="fa fa-lock"></i>
                            @endif
                        </button>
                        <a
                            href="{{ route('brands.show', $brand->id) }}"
                            class="btn btn-info"
                            {{ $brand->deleted_at ? 'disabled' : '' }}
                            title="xem chi tiết nhãn hiệu"
                            type="button">
                            <i class="fa fa-file-text"></i>
                        </a>
                        <a
                            href="{{ route('brands.edit', $brand->id) }}"
                            class="btn btn-primary"
                            {{ $brand->deleted_at ? 'disabled' : '' }}
                            title="thay đổi nhãn hiệu"
                            type="button">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if ($brand->deleted_at == null)
                        <button
                            class="btn btn-danger btn-delete"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-delete"
                            data-url="{{ route('brands.destroy', $brand->id) }}">
                            <i class="fa fa-trash"></i>
                        </button>
                        @else
                        <!-- todo: title lang -->
                        <button
                            class="btn btn-danger btn-restore"
                            type="button"
                            title="phục hồi nhãn hiệu"
                            data-toggle="modal"
                            data-target="#modal-restore"
                            data-url="{{ route('brands.restore', $brand->id) }}">
                            <i class="fa fa-undo"></i>
                        </button>
                        @endif
                        <button
                            class="btn bg-maroon btn-ban"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-ban"
                            data-url="{{ route('brands.ban', $brand->id) }}">
                            <i class="fa fa-ban"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('Adminlte.layout.paginate', ['paginator' => $brands])

        @include('product::brand.partials.modal')
      </div>
    </div>
  </section>
</div>
@endsection

@section('script')
<script src="{{ Module::asset('product:js/brand/index.js') }}"></script>
@endsection