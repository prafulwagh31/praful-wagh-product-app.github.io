@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Product Create</h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Product Name <span style="color: red"> * </span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                                </div>
                                @error('name')
                                    <div class="error-message">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 text-right control-label col-form-label">Product Amount <span style="color: red"> * </span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Product Amount">
                                </div>
                                @error('amount')
                                    <div class="error-message">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 text-right control-label col-form-label">Product Description <span style="color: red"> * </span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                </div>
                                @error('description')
                                    <div class="error-message">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Product Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
