@extends('Adminlte.master')

@section('title-page', 'Products')

@section('style')
<style>
    .action .btn {
        width: 3.8rem;
    }
</style>
@endsection

@section('small-info')
<small>List of products</small>
@endsection

@section('breakcumb')
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Product</a></li>
    <li class="active">Products</li>
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
        <div class="box box-info collapsed-box">
            <form action="{{ route('products.index') }}" method="GET">
            <div class="box-header with-border">
                <h4 class="box-title text-4">Search</h4>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name" value="{{ request('name') }}">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="brandInput">Brand</label>
                            <select name="brand_id" id="brandInput" class="form-control select2-nosearch" style="width: 100%;">
                                <!-- Todo: foreach check old input -->
                                <option value="" selected="selected">All</option>
                                <option value="0">Apple</option>
                                <option value="1">Samsung</option>
                                <option value="2">Xiaomi</option>
                                <option value="3">Oppo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="categoryInput">Category</label>
                            <select name="category_id" id="categoryInput" class="form-control select2-nosearch" style="width: 100%;">
                                <option value="" selected="selected">All</option>
                                <option value="0">Big</option>
                                <option value="1">Small</option>
                                <option value="2">New</option>
                                <option value="3">Red</option>
                                <option value="4">Blue</option>
                                <option value="5">Black</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="showInput">Show</label>
                            <select name="is_show" id="showInput" class="form-control select2-nosearch" style="width: 100%;">
                                <option value="" selected="selected">All</option>
                                <option value="1">Show</option>
                                <option value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="lockInput">Lock</label>
                            <select name="is_lock" id="lockInput" class="form-control select2-nosearch" style="width: 100%;">
                                <option value="" selected="selected">All</option>
                                <option value="0">Active</option>
                                <option value="1">Lock</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="createdByInput">Created by</label>
                            <select name="created_by" id="createdByInput" class="form-control select2-nosearch" style="width: 100%;">
                                <option value="" selected="selected">All</option>
                                <option value="0">Minh Cat</option>
                                <option value="1">Long Geo</option>
                                <option value="2">K'Gom</option>
                                <option value="3">Pham Doan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="startDateInput">Start Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <!-- Todo: old input to start date -->
                                <input type="text" class="form-control" id="startDateInput" name="created_at[]">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="EndDateInput">End Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <!-- Todo: old input to end date -->
                                <input type="text" class="form-control" id="endDateInput" name="created_at[]">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                        <button class="btn btn-default reset" type="button"><i class="fa fa-undo"></i> Reset</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
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
                    <th style="width:183px">action</th>
                </tr>
                @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Apple</td>
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
                            href="{{ route('products.edit', $product->id) }}"
                            class="btn btn-primary"
                            type="button">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button
                            class="btn btn-danger btn-delete"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-delete"
                            data-url="{{ route('products.destroy', $product->id) }}">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('Adminlte.layout.paginate', ['paginator' => $products])

        <!-- Modal -->
        <!-- Modal Delete -->
        <div class="modal modal-default fade" id="modal-delete">
            <div class="modal-dialog">
                <form action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Product</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to delete this product</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Modal Delete -->

        <!-- Modal Show/Hide -->
        <div class="modal modal-default fade" id="modal-show">
            <div class="modal-dialog">
                <form action="" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="is_show" id="show">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Show Product</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to continue</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Modal Show/Hide -->

        <!-- Modal Lock/Unlock -->
        <div class="modal modal-default fade" id="modal-lock">
            <div class="modal-dialog">
                <form action="" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="is_lock" id="lock">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Lock Product</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to continue</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Modal Lock/Unlock -->
        <!-- /Modal -->
      </div>
    </div>
  </section>
</div>
@endsection

@section('script')
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

        //Modal
        $('.btn-delete').click(function() {
            let url = $(this).data('url')
            $('#modal-delete form').attr('action', url)
        })
        $('.btn-show').click(function() {
            // set url
            let url = $(this).data('url')
            $('#modal-show form').attr('action', url)

            // set data is_show
            let value = $(this).data('value')
            $('#modal-show input#show').val(value)
            if (value == '0') {
                $('#modal-show h4.modal-title').text('Hide Product')
            } else {
                $('#modal-show h4.modal-title').text('Show Product')
            }
        })
        $('.btn-lock').click(function() {
            // set url
            let url = $(this).data('url')
            $('#modal-lock form').attr('action', url)

            // set data is_lock
            let value = $(this).data('value')
            $('#modal-lock input#lock').val(value)
            if (value == '0') {
                $('#modal-lock h4.modal-title').text('Unlock Product')
            } else {
                $('#modal-lock h4.modal-title').text('Lock Product')
            }
        })

        //Reset form search
        $('.reset').on('click', function() {
            $('#nameInput').val('')
            $('#startDateInput').datepicker('setDate', null);
            $('#endDateInput').datepicker('setDate', null);
            $('#brandInput').val('').trigger('change')
            $('#categoryInput').val('').trigger('change')
            $('#showInput').val('').trigger('change')
            $('#lockInput').val('').trigger('change')
            $('#createdByInput').val('').trigger('change')
        })
    })
</script>
@endsection