@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product Discount</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('product.new') }}">Add Product</a>
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
    <form class="needs-validation" method="POST" action="{{route('productdiscount.update')}}" novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$prodDiscount->id}}">
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Product Name</label>
                </div>
                <select name="product_id" class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    @foreach($products as $product)

                    @if ($product->id == $prodDiscount->product_id)
                    <option selected="selected" value="{{$product->id}}">{{$product->product_name}}</option>
                    @else
                    <option value="{{$product->id}}">{{$product->product_name}}</option>
                    @endif

                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Discount</span>
                    <span class="input-group-text">00.00</span>
                </div>
                <input type="text" name="discount" value="{{$prodDiscount->discount}}" class="form-control" aria-label="Discount Rate">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 date">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Discount Start Date</span>
                </div>
                <input type="text" name="discount_startdate" value="{{$prodDiscount->discount_startdate}}" data-provide="datepicker" data-date-format="dd-mm-yyyy" class="form-control" aria-label="Discount Start Date" aria-describedby="basic-addon1">
                <div class="input-group-addon">
                    <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 date">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Discount End Date</span>
                </div>
                <input type="text" name="discount_enddate" value="{{$prodDiscount->discount_enddate}}" data-provide="datepicker" data-date-format="dd-mm-yyyy" class="form-control" aria-label="Discount End Date" aria-describedby="basic-addon1">
                <div class="input-group-addon">
                    <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Coupon</span>
                </div>
                <input type="text" name="coupon" value="{{$prodDiscount->coupon}}" class="form-control" aria-label="Coupon">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 date">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Coupon Start Date</span>
                </div>
                <input type="text" name="coupon_startdate" value="{{$prodDiscount->coupon_startdate}}" data-provide="datepicker" data-date-format="dd-mm-yyyy" class="form-control" aria-label="Coupon Start Date" aria-describedby="basic-addon1">
                <div class="input-group-addon">
                    <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 date">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Coupon End Date</span>
                </div>
                <input type="text" name="coupon_enddate" value="{{$prodDiscount->coupon_enddate}}" data-provide="datepicker" data-date-format="dd-mm-yyyy" class="form-control" aria-label="Coupon End Date" aria-describedby="basic-addon1">
                <div class="input-group-addon">
                    <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </div>
    </form>

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
    <script type="text/javascript">
        // jQuery.fn.datepicker.defaults.format = "mm/dd/yyyy";
        jQuery('.datepicker').datepicker({
            format: 'mm-dd-yyyy',
            startdate: '-3d',
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: true,
            orientation: "auto"
        });
    </script>
    @endsection