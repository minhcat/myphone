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
        @include('product::brand.search')
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
                        <span class="badge bg-blue">active</span>
                        <span class="badge bg-green">show</span>
                    </td>
                    <td class="action">
                        <button
                            class="btn btn-success btn-show"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-show"
                            data-value=""
                            data-url="">
                                <i class="fa fa-eye"></i>
                        </button>
                        <button
                            class="btn btn-warning btn-lock"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-lock"
                            data-value=""
                            data-url="">
                                <i class="fa fa-lock"></i>
                        </button>
                        <a
                            href=""
                            class="btn btn-info"
                            type="button">
                            <i class="fa fa-file-text"></i>
                        </a>
                        <a
                            href="{{ route('brands.edit', $brand->id) }}"
                            class="btn btn-primary"
                            type="button">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button
                            class="btn btn-danger btn-delete"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-delete"
                            data-url="">
                            <i class="fa fa-trash"></i>
                        </button>
                        <button
                            class="btn bg-maroon btn-ban"
                            type="button"
                            data-toggle="modal"
                            data-target="#modal-ban"
                            data-url="">
                            <i class="fa fa-ban"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('Adminlte.layout.paginate', ['paginator' => $brands])

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
                            <h4 class="modal-title">Delete Brand</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to delete this brand</p>
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

        <!-- Modal Ban -->
        <div class="modal modal-default fade" id="modal-ban">
            <div class="modal-dialog">
                <form action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Remove Brand</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to remove this brand</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Modal Ban -->

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
                            <h4 class="modal-title">Show Brand</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to continue?</p>
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
                            <h4 class="modal-title">Lock Brand</h4>
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
            autoclose: true,
            format: 'dd/mm/yyyy'
        })
        $('#endDateInput').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        })

        //Modal
        $('.btn-delete').click(function() {
            let url = $(this).data('url')
            $('#modal-delete form').attr('action', url)
        })
        $('.btn-ban').click(function() {
            let url = $(this).data('url')
            $('#modal-ban form').attr('action', url)
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