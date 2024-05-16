@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Data Product</div>

                <div class="card-body">
                    <a href="{{route('product.create')}}" class="btn btn-primary">Add Data</a>
                    @if(session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Brand_Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ( $product as $data ) {{--look at this--}}
                                <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $data->name_product}}</td>
                                <td>{{ $data->price}}</td>
                                <td>{{ $data->description}}</td>
                                <td>{{ $data->brand->name_brand}}</td> {{--menghubungkan data lain--}}
                                <form action="{{route('product.destroy', $data->id)}}" method="POST"> {{--postnya badag! & perhatikan $brand id--}}
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{route('product.edit', $data->id)}}" class="btn btn-warning">Edit</a> 
                                        <a href="{{route('product.show', $data->id)}}" class="btn btn-success">Show</a>
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Apakah yakin ingin menghapus data ini?')">
                                        Delete</button>
                                    </td>
                                </form>
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
