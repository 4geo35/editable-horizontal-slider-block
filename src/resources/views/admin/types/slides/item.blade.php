<div class="!w-[305px] sm:!w-[610px] px-indent-half">
    @if ($item->recordable->image)
        @php($image = $item->recordable->image)
        <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
           class="block rounded-base overflow-hidden h-[154px] sm:h-[308px]">
            <picture>
                <source media="(min-width: 640px)"
                        srcset="{{ route('thumb-img', ['template' => "horizontal-slider-item", 'filename' => $image->file_name]) }}">
                <img
                    class="h-full object-cover object-center"
                    src="{{ route('thumb-img', ['template' => 'mobile-horizontal-slider-item', 'filename' => $image->file_name]) }}"
                    alt="">
            </picture>
        </a>
    @endif
    @if ($item->title)
        <div class="mt-indent-sm">{{ $item->title }}</div>
    @endif
</div>
