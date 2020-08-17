@extends('layouts.admin')
@section('title')
    <title>List category</title>
@endsection
@section('contents')
    <div class="content-wrapper">
        @include('partials.content-header',['name'=>'Category Book','key'=>'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('category-delete','category-edit')
                            <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">
                                Add New <i class="fa fa-user-plus fa-fw"></i>
                            </a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover datatable datatable-Speaker">
                            <thead>
                            <tr>
                                <th width="10%">
                                    Number
                                </th>
                                <th width="35%">Category book</th>
                                <th width="15%">Registered at</th>
                                <th width="15%">Updated at</th>
                                @can('category-delete','category-edit')
                                    <th  width="25%">Action</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at->format('d/m/Y')}}</td>
                                    <td>{{$category->updated_at->format('d/m/Y')}}</td>
                                    @can('category-edit','category-delete')
                                        <td style="width: auto">
                                            @can('category-edit')
                                                <a href="{{route('categories.edit',['id' => $category->id])}}"
                                                   class="btn btn-info">Edit</a>
                                            @endcan
                                            @can('category-show')
                                                <a href="{{route('categories.show',['id' => $category->id])}}"
                                                   class="btn btn-primary">View</a>
                                            @endcan
                                            @can('category-delete')
                                                    <a style="color: white"
                                                       data-url=" {{route('categories.delete',['id'=>$category->id])}}"
                                                       class="btn btn-danger action_delete">Delete</a>
                                            @endcan
                                        </td>
                                    @endcan
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
    <script src="{{asset('js/category/index.js')}}"></script>
@endsection
