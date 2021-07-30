@extends('fuzzy.layouts.layout')

@section('body')
    <div class="main main-raised">
        <div class="container">
            <div class="p-3">
                <b style="font-size: 1.125rem; ">Hasil Test Kecerdasan {{ $data['0']['biodata']['name'] }}
                </b>
            </div>
        </div>
    </div>
    <div class="main main-raised my-2">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col">
                        <div class="mx-3"><b>Keterangan</b></div>
                        @foreach ($data as $key => $value)
                            <div class="mx-3">
                                <b
                                    for="{{ $key + 1 }}">{{ $key + 1 . '.  ' . $value->category->name_category . ' :  ' }}</b>
                                <b>{{ $value->result }}</b>
                            </div>
                        @endforeach
                    </div>
                    <div class="col">
                        <div class="mx-3"><b>Rule</b></div>
                        @foreach ($data as $key => $value)
                            <div class="mx-3">
                                <b for="{{ $key + 1 }}">{{ $key + 1 . '.  ' . $value->rule }}</b>
                                <a href="" data-toggle="modal" data-target="#{{ $value->category_input_id }}">
                                    Lihat data
                                </a>
                            </div>
                        @endforeach
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
                            <h5 class="modal-title card-title">Rule Fuzzy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">

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
