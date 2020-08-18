@extends('layouts.admin')

@section('title')
    <title>List Product</title>
@endsection

@section('contents')
    <div class="content-wrapper">
        @include('partials.content-header',['name'=>'Product','key'=>'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('products.create')}}" class="btn btn-success float-right m-2">
                            Add New <i class="fa fa-user-plus fa-fw"></i>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover datatable datatable-Speaker">
                            <thead>
                            <tr>
                                <th width="5%">
                                    Number
                                </th>
                                <th scope="col" width="10%">Name</th>
                                <th scope="col" width="20%">Name Author</th>
                                <th scope="col" width="20%">Image</th>
                                <th scope="col" width="10%">Category</th>
                                <th scope="col" width="30%">Content</th>
                                <th scope="col" width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $productsItem)
                                <tr>
                                    <th scope="row">{{$productsItem->id}}</th>
                                    <th scope="row">{{$productsItem->name}}</th>
                                    <td>{{$productsItem->name_author}}</td>
                                    <td>
                                        <a href="{{$productsItem->image_path}}" target="_blank">
                                            <img width="150" height="100" src="{{$productsItem->image_path}}"
                                                 alt="{{$productsItem->image_name}}">
                                        </a>
                                    </td>
                                    <td>{{optional($productsItem->category)->name }}</td>
                                    <td>{!!$productsItem->content!!}</td>
                                    <td>
                                        @can('product-edit',$productsItem->id)
                                            <a href="{{route('products.edit',['id' => $productsItem->id])}}"
                                               class="btn btn-info">Edit</a> <br>
                                        @endcan
                                        @can('product-show',$productsItem->id)
                                            <a href="{{route('products.show',['id' => $productsItem->id])}}"
                                               class="btn btn-primary">View</a> <br>
                                        @endcan
                                        @can('product-delete', $productsItem->id)
                                                <a href=""
                                                   data-url=" {{route('products.delete',['id'=>$productsItem->id])}}"
                                                   class="btn btn-danger action_delete">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('js/product/index.js')}}"></script>
@endsection

