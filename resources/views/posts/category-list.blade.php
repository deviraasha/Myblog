<ul class="my-1" style="list-style: none;">
    @foreach ($categories as $category)
        <li class="form-group form-check my-1">

            <label class="form-check-label">
                @if ($categoryChecked && in_array($category->id, $categoryChecked))
                    <input class="form-check-input" value="{{ $category->id }}" type="checkbox" name="category[]"
                        checked>

                @else
                    <input class="form-check-input" value="{{ $category->id }}" type="checkbox" name="category[]">
                @endif
                <span class="form-check-sign">
                    <span class="check"></span>
                </span>
                {{ $category->title }}
            </label>
            @if ($category->descendants)
                @include('posts.category-list', [
                'categories' => $category->descendants,
                'categoryChecked' => $categoryChecked
                ])
            @endif
        </li>
    @endforeach
</ul>
