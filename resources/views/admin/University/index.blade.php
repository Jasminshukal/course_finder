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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-black">University List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse ($university as $item)
                                        <tr>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->address }}
                                            </td>
                                            <td>
                                                <a href='#' class='btn btn-success' id='NAME'>
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                            </tbody>
                        </table>
                        <div class="center-block text-center">
                            {{ $university->appends(request()->query())->render("pagination::bootstrap-4") }}
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
