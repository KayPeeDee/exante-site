@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Products</h1>
                <a href="{{route('create-product-page')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add New Product</a>
            </div>
            <div class="card shadow mb-4">

                <div class="list-group list-group-flush">
                    @if (count($products) > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Weblink</th>
                                <th scope="col">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)

                                    <tr>
                                        <th scope="row">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('product-detail', [$product->id])}}">Update</a>
                                                </div>
                                            </div>
                                        </th>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->sub_title}}</td>
                                        <td>{{$product->weblink}}</td>
                                        <td>
                                            <img src="{{ asset('images/'.$product->image) }}" class="mr-3" height="64px" width="64px">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="list-group-item">
                            <div class="text-warning">There are no product categories records</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
