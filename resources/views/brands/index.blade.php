@extends('adminlte::page')

@section('title', 'Brands')

@section('content_header')
    <h1>
        Brands
    </h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="card table-responsive">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $brands->links() }}
            </div>
        </div>
    </div>
@stop
