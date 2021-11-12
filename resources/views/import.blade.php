@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import Data
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="Select File">Select File </label>
                <input type="file" name="file" class="form-control" required>
                <br>
                <button class="btn btn-success"> Import Courses Data </button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Courses Data</a>
            </form>
        </div>
    </div>
</div>
@endsection
