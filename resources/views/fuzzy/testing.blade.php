@extends('fuzzy.layouts.layout')

@section('body')
    <div class="main main-raised">
        <div class="container">
            <div class="p-3">
                <b style="font-size: 1.125rem; ">Test
                    @foreach ($data as $value)
                        {{ $value->category->name_category }}
                    @endforeach
                </b>
            </div>
        </div>
    </div>
    <div class="main main-raised my-2">
        <div class="container">
            <div class="section">
                <form class="mx-3" action="/checking" method="POST">
                    @csrf
                    <input type="text" name="category_input_id" value="{{ $value->category_input_id }}"
                        class="form-control" id="category_input_id" hidden>
                    <div class="row">
                        <div class="col-md col-sm-12 text-center">
                            <img src="/testing.svg" width="100%" alt="">
                        </div>
                        <div class="col-md-7 tup">
                            <div class="row">

                                @foreach ($data as $value)
                                    @foreach ($value->category->variable as $key => $varValue)
                                        <?php $a = 'v' . ($key + 1); ?>
                                        {{-- <div class="form-group"> --}}
                                        <div class="col-md-10 col-sm-12">
                                            <b
                                                for="{{ $key + 1 }}">{{ $key + 1 . '.' . $varValue->name_variable }}</b>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <select class="form-control selectpicker" data-style="btn btn-link"
                                                name="v{{ $key + 1 }}" id="{{ $key + 1 }}" required>
                                                @if ($value->$a)
                                                    <option value="{{ $value->$a }}">{{ $value->$a }}</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                @else
                                                    <option value="">Select</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                @endif
                                            </select>
                                        </div>
                                        {{-- </div> --}}
                                    @endforeach
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-right">
                            {{-- @if ($data->currentPage() > 1)
                                <input type="text" name="page" value="{{ $data->currentPage() - 1 }}" class="form-control"
                                    id="page" hidden>
                                <button class="btn btn-default btn-round" type="submit">Back
                                    {{ $data->currentPage() - 1 }}</button>
                            @endif --}}
                            <input type="text" name="page" value="{{ $data->currentPage() + 1 }}" class="form-control"
                                id="page" hidden>
                            @if ($data->currentPage() < $data->total())
                                <button class="btn btn-primary btn-round" type="submit">Next</button>
                            @endif
                            @if ($data->currentPage() == $data->total())
                                <button class="btn btn-primary btn-round" type="submit">Finish</button>
                            @endif
                </form>

                @if ($data->currentPage() == 1)
                    <a href="/testing-destroys" class="btn btn-danger btn-round float-left">
                        Cancel
                    </a>
                @else
                    <a href="/testing-fuzzy?page={{ $data->currentPage() - 1 }}"
                        class="btn btn-default btn-round float-left">
                        Back
                    </a>
                @endif
            </div>
            <div class="col-12 text-left">
                <span>
                    {{ 'Page ' . $data->currentPage() . ' of ' . $data->total() }}
                </span>

            </div>
        </div>

        {{-- @if ($data->currentPage() == $data->total())
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="/result">
                                <button class="btn btn-primary btn-round">
                                    Finish
                                </button>
                            </a>
                        </div>
                    </div>
                @endif --}}

    </div>
    </div>
    </div>
@endsection
