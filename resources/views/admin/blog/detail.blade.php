@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Blog Information</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Blog ID</th>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <th>Blog Title</th>
                            <td>{{$blog->title}}</td>
                        </tr>
                        <tr>
                            <th>Author</th>
                            <td>{{$blog->author}}</td>
                        </tr>
                        <tr>
                            <th>Blog Description</th>
                            <td>{{$blog->description}}</td>
                        </tr>
                        <tr>
                            <th>Blog Image</th>
                            <td><img src="{{asset($blog->image)}}" alt="" height="200" width="220"/></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection





