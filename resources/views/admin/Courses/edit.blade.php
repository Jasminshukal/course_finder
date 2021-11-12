@extends('layouts.app')

@section('page-css')
@endsection

@section('content')
@php
    $destination = Config::get('jess.destination');
    $levels = Config::get('jess.levels');
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-black">Courses Edit</div>
                <div class="card-body">
                    <form action="{{ route('courses.store') }}" method="post">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            @include('admin.Courses._form')
                            <input type="submit" value="Submit" class="btn btn-info">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script src="{{ asset("vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset("js/demo/datatables-demo.js") }}"></script>
@endsection
