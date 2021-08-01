@extends('dashboard.index')

@section('title')
    {{ trans('filemanager.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('file_manager') }}
@endsection

@section('content')
    <!-- content -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    {{ Breadcrumbs::render('file_manager') }}
                </div>
                <div class="card-header d-flex justify-content-start">
                    <form action="" method="GET" style="width: 200px">
                        <div class="row">
                            <select name="type" class="custom-select">
                                @foreach ($types as $value => $label)
                                    <option value="{{ $value }}" {{ $typeSelected == $value ? 'selected' : null }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary" type="submit">
                                {{ trans('filemanager.button.apply.value') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <iframe src="{{ route('unisharp.lfm.show') }}?type={{ $typeSelected }}"
                        style="width: 100%; height: 600px; overflow: hidden; border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
