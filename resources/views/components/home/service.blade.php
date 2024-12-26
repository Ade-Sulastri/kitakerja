<section class="flex flex-col gap-10">
    <div class="my-5">
        <h2 class="font-bold text-white text-center text-2xl md:text-4xl">Layanan</h2>
        <p class="text-white text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>
    </div>
    <div class="blog-slider mt-10 py-3">
        <div class="blog-slider__wrp swiper-wrapper">
            @foreach ($services as $service)
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="{{ asset('storage/upload/' . $service->gambar) }}" alt="Service Image">
                    </div>
                    <div class="blog-slider__content">
                        {{-- <span class="blog-slider__code">26 December 2019</span> --}}
                        <div class="blog-slider__title">{{ $service->name }}</div>
                        <div class="blog-slider__text">{{ $service->description }} </div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="blog-slider__pagination mb-2"></div>
    </div>

</section>
