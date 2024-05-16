@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data product</div>
                <div class="card-body">
                    <form method="POST"> {{--postnya badag!--}}
                        <div class="mb-3">
                            <label class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{$product->price}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Id</label>
                            <input type="number" class="form-control" name="id_brand" value="{{$product->id_brand}}" disabled>
                        </div>
                        <a href="{{url('product')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
