@foreach ($categoryRoot as $item)
    <ul>

        <li>
            @if ($category->slug == $item->slug)
                {{ $item->title }}
            @else
                <a href="{{ route('homepage.post-category', ['slug' => $item->slug]) }}">
                    {{ $item->title }}
                </a>
            @endif
            @if ($item->descendants)
                @include('homepage.sub-categories', ['categoryRoot' => $item->descendants,
                'category'=> $category])
            @endif

        </li>

    </ul>
@endforeach
