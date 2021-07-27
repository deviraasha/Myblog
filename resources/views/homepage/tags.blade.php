@extends('layouts.inner-page')

@section('title')
    {{ trans('homepage.title.tags') }}
@endsection


@section('content')
    <!-- Title -->
    <h2 class="mt-4 mb-3">
        {{ trans('homepage.title.tags') }}
    </h2>

    <!-- Breadcrumb:start -->
    {{ Breadcrumbs::render('homepage_tags') }}
    <!-- Breadcrumb:end -->

    <!-- List tag -->
    <div class="row content">
        <div class="pt-4 pt-lg-0 ml-3">
            @forelse ($tags as $tag)
                <!-- true -->
                <a href="{{ route('homepage.posts.tag', ['slug' => $tag->slug]) }}"
                    class="btn btn-outline-primary ml-auto">{{ $tag->title }}</a>
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
            <div class="col pagination pagination-primary">
                {{ $tags->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    @endif

    <!-- pagination:end -->
@endsection
