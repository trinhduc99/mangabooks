@extends('layouts.admin')
@section('title')
    <title>List category</title>
@endsection
@section('contents')
    <div class="content-wrapper">
        @include('partials.content-header',['name'=>'Product Book','key'=>'View'])
        <div class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="mb-2">
                        <table class="table table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <td>
                                    {{$product->id}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name Book
                                </th>
                                <td>
                                    {{$product->name}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name Author
                                </th>
                                <td>
                                    {{$product->name_author}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Content
                                </th>
                                <td>
                                    {!! $product->content !!}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Image Book
                                </th>
                                <td>
                                    <a href="{{$product->image_path}}" target="_blank">
                                        <img src="{{$product->image_path}}" alt="{{$product->image_name}}"
                                             style="width: 100px; height: 100px">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Category Book
                                </th>
                                <td>
                                    {{$category}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Registered at
                                </th>
                                <td>
                                    {{$product->created_at}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Updated at
                                </th>
                                <td>
                                    {{$product->updated_at}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" href="{{url()->previous()}}" class="btn btn-dark">
                            Back to list
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


