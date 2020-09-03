@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Discounts</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('product.new') }}">Add Product</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('product.list') }}">List Products</a>
        </div>
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('productdiscount.new') }}">Add Discount</a>
        </div>
        <!-- <div class="dropdown">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product Discount
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Add Discount</a>
                <a class="dropdown-item" href="#">List Discount</a>                
            </div>
        </div>-->
    </div>
</div>
<div>
    <h3 class="bd-title" id="content">Product List</h3>
    @include('admin/layouts/flashMessage')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                @foreach(db_fieldnames($prodDiscount, false) as $key => $field)
                @if ($field === 'Product Id')
                @else
                <th>{{$field}}</th>
                @endif
                @endforeach
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach(db_records($prodDiscount, false) as $ky=>$vl)
            <tr>
                @foreach($vl as $c=>$r)
                @if ($c === 'product_id')
                @else
                <td>{{$r}}</td>
                @endif
                @endforeach
                <td class="text-center">
                    <a href="{{ url('/admin/productdiscounte') . '/' . $vl['id']}}" class="btn btn-primary btn-sm">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{ url('/admin/productdiscountd') . '/' . $vl['id']}}" class="btn btn-primary btn-sm">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection