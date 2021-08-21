@extends('fuzzy.layouts.layout')

@section('body')
    <div class="main main-raised">
        <div class="container">
            <div class="p-3 justify-content-center">
                <b style="font-size: 1.125rem; ">Hasil Test Kecerdasan {{ $data['0']['biodata']['name'] }}
                </b>
            </div>
        </div>
    </div>
    <div class="main main-raised my-2">
        <div class="container">
            <div class="section">
                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                    <!--
                                                                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                                            -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Hasil Test
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab">
                            <i class="material-icons">schedule</i>
                            Schedule
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Tasks
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="dashboard-1">
                        @foreach ($data as $key => $value)
                            <div class="row">
                                <div class="card">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4>{{ $value->category->name_category }}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <h3><b class="text-center">
                                                {{ ucwords($value->result) }}</b></h3>
                                    </div>
                                    <div class="card-footer justify-content-end">
                                        <a class="btn btn-primary" href="" data-toggle="modal"
                                            data-target="#{{ $value->category_input_id }}">
                                            Lihat Rule
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <br><br>
                    </div>
                    <div class="tab-pane" id="schedule-1">
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Large modal</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally
                                    cultivate one-to-one customer service with robust ideas.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tasks-1">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally
                        cultivate one-to-one customer service with robust ideas.
                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer
                        service.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="/result-destroy">
                            <button class="btn btn-primary btn-round" type="submit">AKhiri</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach ($data as $key => $value)
        <div class="modal fade bd-example-modal-lg" id="{{ $value->category_input_id }}" tabindex="-1" role="">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            @php
                                $x = explode(',', $value->rule);
                            @endphp
                            <h4 class="card-title">Hasil Dari : {{ count($x) }} Rule</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            @php
                                $length = Str::length($value->rule);
                                $k = str_replace('[', '', $value->rule);
                                $ka = str_replace(']', '', $k);
                                $array = explode(',', $ka);
                                $dAr = App\Models\Rule::whereIn('id', $array)->get();
                            @endphp
                            @foreach ($dAr as $item)
                                <div>
                                    <b>{{ '[R ' . $item->id . '] if ' . $item->v1 . ' and ' . $item->v2 . ' and ' . $item->v3 . ' and ' . $item->v4 . ' ' . $item->v5 . ' then ' . $item->then }}
                                    </b>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-primary btn-link btn-wd btn-lg" data-dismiss="modal"
                                aria-label="Close">
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
