@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('category.new') }}">Add Category</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('category.list') }}">List Categories</a>
        </div>
    </div>
</div>
<div>
    @include('admin/layouts/flashMessage')
    <form class="needs-validation" method="POST" action="{{route('category.update')}}" novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Category Name</span>
                </div>
                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" aria-label="Category Name" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Category Description</span>
                </div>
                <textarea name="description" class="form-control" aria-label="With textarea">{{$category->description}}</textarea>
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
    @endsection