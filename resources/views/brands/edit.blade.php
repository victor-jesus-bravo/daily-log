@extends('adminlte::page')

@section('title', 'Edit brand')


@section('content_header')
    <h1>
        Edit <span class="text-bold">{{ $brand->name }}</span> Brand
    </h1>
@stop

@section('content')
    <form action="{{ route('brands.update', ['brand' => $brand]) }}" method="POST" class="col-md-6">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $brand->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
@stop

