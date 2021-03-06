@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">New Product</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('product.list') }}">List Products</a>
        </div>
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('productdiscount.new') }}">Add Discount</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('productdiscount.list') }}">List Discounts</a>
        </div>
    </div>
</div>
<div>
    @include('admin/layouts/flashMessage')
    <form class="needs-validation" method="POST" action="{{route('product.add')}}" novalidate>
        @csrf
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Product Name</span>
                </div>
                <input type="text" name="product_name" class="form-control" aria-label="Product Name" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Price</span>
                    <span class="input-group-text">$ 0.00</span>
                </div>
                <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Quantity</span>
                    <span class="input-group-text">00</span>
                </div>
                <input type="text" name="quantity" class="form-control" aria-label="Product Name" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                </div>
                <select name="status" class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Enable</option>                    
                    <option value="0">Disable</option>
                </select>
            </div>
        </div>        
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Product Description</span>
                </div>
                <textarea name="product_details" class="form-control product_details" aria-label="With textarea"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        const mix = require('laravel-mix');
    </script>
    <script src="{{ url('public/node_modules/tinymce') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.product_details',
            width: 900,
            height: 300
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    @endsection