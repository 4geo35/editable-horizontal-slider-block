<div>
    @php
        $block = $item->block;
        $image = $item->recordable->image;
    @endphp
    <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
       class="inline-block rounded-base overflow-hidden">
        Image
    </a>
    <div class="mt-indent-sm">{{ $item->title }}</div>
</div>
