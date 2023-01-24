@extends('adminlte::page')

@section('title', 'Create brand')

@section('content_header')
    <h1>
        Create Brand
    </h1>
@stop

@section('content')
    <form action="{{ route('brands.store') }}" method="POST" class="col-md-6">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
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
