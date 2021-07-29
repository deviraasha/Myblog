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
                <div class="row">
                    <div class="col">
                        <form class="mx-3">
                            @foreach ($data as $value)
                                @foreach ($value->category->variable as $key => $varValue)
                                    <div class="form-group">
                                        <b for="{{ $key + 1 }}">{{ $varValue->name_variable }}</b>
                                        <select class="form-control selectpicker" data-style="btn btn-link"
                                            name="{{ $key + 1 }}" id="{{ $key + 1 }}" required>
                                            <option value="">choose number</option>
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

                                        </select>
                                    </div>
                                @endforeach
                            @endforeach
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
