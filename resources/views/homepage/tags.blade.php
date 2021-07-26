@extends('layouts.inner-page')

@section('title')
    {{ trans('homepage.title.tags') }}
@endsection

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            {{ Breadcrumbs::render('homepage_tags') }}
        </ol>
        <h2>{{ trans('homepage.title.tags') }}</h2>
    </div>
</section><!-- End Breadcrumbs -->

@section('content')
    <!-- List tag -->
    <div class="row content">
        <div class="col-lg-6 pt-4 pt-lg-0">
            @forelse ($tags as $tag)
                <!-- true -->
                <a href="" class="btn-learn-more py-3 px-5">{{ $tag->title }}</a>
            @empty
                <!-- false -->
                <h3 class="text-center">
                    {{ trans('homepage.no_data.tags') }}
                </h3>
            @endforelse



        </div>
    </div>
    <!-- List tag -->

    <!-- pagination:start -->
    @if ($tags->hasPages())
        <div class="row">
            <div class="col">
                {{ $tags->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    @endif

    <!-- pagination:end -->
@endsection
