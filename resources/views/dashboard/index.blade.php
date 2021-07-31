@extends('layouts.dashboard')

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
<<<<<<< HEAD
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
=======
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Used Space</p>
                    <h3 class="card-title">49/50
                        <small>GB</small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="javascript:;">Get More Space...</a>
>>>>>>> 47d542b371801096406d41274bd7847d64e10cf9
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
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
=======
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Fixed Issues</p>
                    <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Followers</p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
>>>>>>> 47d542b371801096406d41274bd7847d64e10cf9
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    @endforeach

=======
    </div>
>>>>>>> 47d542b371801096406d41274bd7847d64e10cf9
@endsection
