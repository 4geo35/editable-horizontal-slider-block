@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockHorizontalSlider-{{ $block->id }}")
                if (sliderElement) { initBlockHorizontalSliderSliders{{ $block->id }}(sliderElement); }
            })
        })()

        function initBlockHorizontalSliderSliders{{ $block->id }}(sliderElement) {
            @if ($block->render_title)
                let navigationElement = document.getElementById("swiperBlockHorizontalSliderNavigation-{{ $block->id }}")
                let prevBtnElement = navigationElement.querySelector(".prev-btn")
                let nextBtnElement = navigationElement.querySelector(".next-btn")
            @endif

            let swiper = new Swiper(sliderElement, {
                loop: {{ $block->items->count() > 4 ? 'true' : 'false' }},
                simulateTouch: true,
                spaceBetween: 0,
                slidesPerView: "auto",

                @if ($block->render_title)
                    navigation: {
                        nextEl: nextBtnElement,
                        prevEl: prevBtnElement,
                    }
                @endif
            })
        }
    </script>
@endpush
