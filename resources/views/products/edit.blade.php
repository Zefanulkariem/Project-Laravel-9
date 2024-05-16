@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Brand</div>
                <div class="card-body">
                    <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data"> {{--postnya badag! & perhatikan $product id--}}
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Id</label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                    <option value="{{$data->id}}" {{$data->id == $product->id_brand ? 'selected' : '' }}>{{$data->name_brand}}</option> {{--dropdown--}}
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img src="{{asset('/image/product/' . $product->cover) }}" width="100">
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <button type="submit" class="btn btn-success">Edit</button>
                        <a href="{{url('product')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
