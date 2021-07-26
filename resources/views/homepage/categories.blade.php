@extends('layouts.inner-page')

@section('title')
    {{ trans('homepage.title.categories') }}
@endsection

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="">{{ Breadcrumbs::render('homepage_categories') }}</a></li>

        </ol>
        <h2>{{ trans('homepage.title.categories') }}</h2>
    </div>
</section><!-- End Breadcrumbs -->

@section('content')
    <!-- List category -->
    <div class="row pt-3">
        @forelse ($categories as $category)
            <!-- true -->
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <!-- thumbnail:start -->
                    @if (file_exists(public_path($category->thumbnail)))
                        <!-- true -->
                        <img class="card-img-top" src="{{ asset($category->thumbnail) }}" alt="{{ $category->title }}">
                    @else
                        <!-- else -->
                        <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="{{ $category->title }}">
                    @endif
                    <!-- thumbnail:end -->
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('homepage.post-category', ['slug' => $category->slug]) }}">
                                {{ $category->title }}
                            </a>
                        </h4>
                        <p class="card-text">
                            {{ $category->description }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <!-- false -->
            <h3 class="text-center">
                {{ trans('homepage.no_data.categories') }}
            </h3>
        @endforelse



    </div>
    <!-- List category -->

    <!-- pagination:start -->
    @if ($categories->hasPages())
        <div class="row">
            <div class="col">
                {{ $categories->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    @endif

    <!-- pagination:end -->
@endsection
