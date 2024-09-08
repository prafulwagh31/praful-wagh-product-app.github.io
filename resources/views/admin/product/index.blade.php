@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                        @foreach($products as $index => $product)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><img src="{{ asset($product->image) }}" height="100px" width="150px"></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->amount }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product->id) }}">
                                                        <button type="button" class="btn btn-primary">Edit</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @php
                                        $i++;
                                    @endphp
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
