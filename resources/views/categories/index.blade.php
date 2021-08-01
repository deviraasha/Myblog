@extends('layouts.dashboard')

@section('title')
    {{ trans('categories.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('categories') }}
@endsection

@section('content')
    <!-- section:content -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header card-header-primary">
                        {{ Breadcrumbs::render('categories') }}
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-6">
                            {{-- form search --}}
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input name="keyword" type="search" class="form-control"
                                        value="{{ request()->get('keyword') }}"
                                        placeholder="{{ trans('categories.form_control.input.search.placeholder') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-round btn-just-icon" type="submit">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- category create --}}
                        @can('category_create')
                            <div class="col-md-6">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary float-right" role="button">
                                    {{ trans('categories.button.create.value') }}
                                    <i class="fas fa-plus-square"></i>
                                </a>
                            </div>
                        @endcan

                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <!-- list category -->
                        @if (count($categories))
                            @include('categories.category-list', [
                            'categories' =>$categories,
                            'count' => 0
                            ])
                        @else
                            <p>
                                <strong>
                                    @if (request()->get('keyword'))
                                        {{ trans('categories.label.no_data.search', ['keyword' => request()->get('keyword')]) }}

                                    @else
                                        {{ trans('categories.label.no_data.fetch', ['keyword']) }}
                                    @endif
                                </strong>
                            </p>
                        @endif
                    </ul>
                </div>
                @if ($categories->hasPages())
                    <div class="row pt-5">
                        <div class="col pagination pagination-primary justify-content-center">
                            {{ $categories->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection

@push('javascript-internal')
    <script>
        $(document).ready(function() {
            //event delete
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: $(this).attr('alert-title'),
                    text: $(this).attr('alert-text'),
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: $(this).attr('alert-btn-cancel'),
                    reverseButtons: true,
                    confirmButtonText: $(this).attr('alert-btn-yes'),
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.submit();
                    }
                });



            });
        });
    </script>

@endpush
