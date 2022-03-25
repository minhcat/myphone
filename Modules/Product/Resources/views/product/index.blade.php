@extends('Adminlte.master')

@section('title-page', 'Products')

@section('content')
<div class="row">
  <section class="col-lg-12">
    <div class="box box-primary">
      <div class="box-header with-border px-3 py-5">
        <h3 class="box-title text-5">List</h3>
        <button class="btn btn-primary pull-right">New Product</button>
      </div>
      <div class="box-body p-5">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h4 class="box-title text-4">Search</h4>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="box-body">
                content
            </div>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>description</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Iphone 13 promax</td>
                    <td>iphone-13-promax</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Iphone 13 promax</td>
                    <td>iphone-13-promax</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Iphone 13 promax</td>
                    <td>iphone-13-promax</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Iphone 13 promax</td>
                    <td>iphone-13-promax</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>0</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection