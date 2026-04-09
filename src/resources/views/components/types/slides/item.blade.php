@props(["item"])
@if ($item->recordable->image)
    @php
        $block = $item->block;
        $image = $item->recordable->image;
    @endphp

    <div class="swiper-slide !w-[305px] sm:!w-[610px] px-indent-half">
        <a data-fslightbox="lightbox-horizontal-slider-block-{{ $block->id }}"
           class="block rounded-base overflow-hidden h-[154px] sm:h-[308px]"
           href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}">
            <picture>
                <source media="(min-width: 640px)"
                        srcset="{{ route('thumb-img', ['template' => "horizontal-slider-item", 'filename' => $image->file_name]) }}">
                <img
                    class="h-full object-cover object-center"
                    src="{{ route('thumb-img', ['template' => 'mobile-horizontal-slider-item', 'filename' => $image->file_name]) }}"
                    alt="">
            </picture>
        </a>
        @if ($item->title)
            <div class="mt-indent-sm">{{ $item->title }}</div>
        @endif
    </div>
@endif
