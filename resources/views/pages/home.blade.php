@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <button id="add-plant-btn" class="btn btn-primary">Add Entry</button>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="search" id="search-tb" placeholder="Search">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div id="plants-table-div">
                                {{-- @include('tables.plantsTable') --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.plantsModal')
@endsection
