@extends('layouts.app')

@section('page-css')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">

<style>
    .text-black{
        color: black;
    }
</style>
@endsection

@section('content')
@php
    $destination = Config::get('jess.destination');
    $levels = Config::get('jess.levels');
@endphp
<div class="container">
    <a href='{{ route('courses.add') }}' class='btn btn-info mb-2' id='NAME'>Add</a>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-black">Courses List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Fees</th>
                                    <th>Destination</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse ($course as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('Detail',$item->slug) }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $item->name }}
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">{{ $item->currency_sym }} {{ $item->fee }}</span>
                                            </td>
                                            <td>
                                                @isset($destination[$item->destination])
                                                {{ $destination[$item->destination] }}
                                                @endisset
                                            </td>
                                            <td>
                                                {{ $item->laval }}
                                            </td>
                                            <td>
                                                <a href='{{ route('courses.edit',$item->id) }}' class='btn btn-success' id='NAME'>
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href='{{ route('courses.delete',$item->id) }}' class='btn btn-danger' id='NAME'>
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                            </tbody>
                        </table>
                        <div class="center-block text-center">
                            {{ $course->appends(request()->query())->render("pagination::bootstrap-4") }}
                        </div>
                    </div>
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
