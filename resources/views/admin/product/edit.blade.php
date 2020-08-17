@extends('layouts.admin')
@section('title')
    <title>Edit product</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admins/product/add.css')}}">
    <link rel="stylesheet" href="{{asset('admins/product/edit.css')}}">
@endsection
@section('contents')
    <div class="content-wrapper">
        <div class="col-md-12">
        </div>
        @include('partials.content-header',['name'=>'Product','key'=>'Edit'])
        <form action="{{route('products.update',['id' => $product->id])}}" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>Name book</label>
                                <input type="text"
                                       name="name"
                                       value="{{$product->name}}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Insert name of product"
                                >
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Name Author</label>
                                <input type="text"
                                       name="name_author"
                                       value="{{$product->name_author}}"
                                       class="form-control @error('name_author') is-invalid @enderror"
                                       placeholder="Insert name author"
                                >
                                @error('name_author')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Avatar Book</label>
                                <input type="file"
                                       id="profile-img"
                                       name="feature_image_path"
                                       class="form-control @error('feature_image_path') is-invalid @enderror"
                                >
                                @error('feature_image_path')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <img src="{{$product->image_path}}"
                                             id="profile-img-tag"
                                             alt="{{$product->image_name}}"
                                             class="product_image_150_100">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="form-control  @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">Choose Category</option>
                                    {!! $htmlOptions  !!}
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Insert Content</label>
                                <textarea name="contents" id="ckeditor1"
                                          class="form-control @error('contents') is-invalid @enderror" rows="5">{!! $product->content !!}</textarea>
                            </div>
                            @error('contents')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor1');
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
    </script>
@endsection


