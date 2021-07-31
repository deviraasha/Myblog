@extends('layouts.dashboard')

@section('title')
    {{ trans('dashboard.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard_home') }}
@endsection

{{-- @section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>
                {{ trans('dashboard.greeting.welcome', ['name' => Auth::user()->name]) }}
            </h2>
        </div>
    </div>
@endsection --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input name="search" type="search" class="form-control" placeholder="search name">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($data as $val)
                            <div class="col-md-12">
                                <div class="card my-1">
                                    <div class="card-body">
                                        <div class="row align-content-center">
                                            <div class="col">
                                                <i class="fas fa-id-badge fa-4x"></i>
                                            </div>
                                            <div class="col-10 pt-3">
                                                <span style="color:black; font-weight: bold">Name
                                                    :</span>
                                                <span>{{ ' ' . $val->name . ' | ' }}</span>
                                                <span style="color:black; font-weight: bold"> Age :</span>
                                                <span>{{ $val->age . ' | ' }}</span>
                                                <span style="color:black; font-weight: bold"> Email :</span>
                                                <span>{{ $val->email . ' | ' }}</span>
                                            </div>
                                            <div class="col text-right pt-3">
                                                <a href="" data-toggle="modal" data-target="#idbio{{ $val->id }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($data as $key => $value)
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="idbio{{ $value->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $value->name . ' Details ' }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach ($value->result as $ks => $item)
                            <div>
                                <span> {{ $ks + 1 . '. ' . $item->category->name_category . ' : ' }} </span>
                                <b>{{ $item->result }}</b>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
