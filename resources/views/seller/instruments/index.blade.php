@extends('layouts.master.app')
@section('title')
    Instrument Management
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-4 mb-4">
                    <a href="#" data-toggle="modal" data-target="#new-instrument" class="btn btn-primary mb-4 text-center"
                        style="width: 12rem"><i class="fas fa-plus me-1"></i> New Instrument</a>
                    <div class="table-responsive">
                        {{ $dataTable->table(['class' => 'table table-striped table-sm']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('seller.instruments.modal')
@endsection
@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
