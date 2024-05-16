@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Brand</div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST"> {{--//postnya badag!--}}
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name_product">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Id</label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                    <option value="{{$data->id}}">{{$data->name_brand}}</option> {{--dropdown--}}
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('product')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
