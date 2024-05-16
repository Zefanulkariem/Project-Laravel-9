@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Brand</div>

                <div class="card-body">
                    <a href="{{route('brand.create')}}" class="btn btn-primary">Add Data</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ( $brand as $data ) {{--look at this--}}
                                <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $data->name_brand}}</td>
                                <form action="{{route('brand.destroy', $data->id)}}" method="POST"> {{--postnya badag! & perhatikan $brand id--}}
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{route('brand.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('brand.show', $data->id)}}" class="btn btn-success">Show</a>
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
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
