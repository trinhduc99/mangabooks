@extends('layouts.admin')
@section('title')
    <title>List category</title>
@endsection
@section('contents')
    <div class="content-wrapper">
        @include('partials.content-header',['name'=>'Category Book','key'=>'View'])
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
                                        {{$category->id}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Category Book
                                    </th>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Register At
                                    </th>
                                    <td>
                                        {{$category->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Updated At
                                    </th>
                                    <td>
                                        {{$category->updated_at->format('d/m/Y')}}
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


