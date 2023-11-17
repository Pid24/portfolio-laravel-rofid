<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            @foreach ($myPortfolio as $item)
                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">



                                <div class="swiper-slide">
                                    <img src="{{ asset('img/' . $item->image) }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('img/' . $item->imageSecond) }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('img/' . $item->imageThird) }}" alt="">
                                </div>

                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $item->titre }}</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $item->description }}</li>
                                <li><strong>Client</strong>: Me</li>
                                <li><strong>Project date</strong>: {{ $item->date }}</li>
                                <li><strong>Project URL</strong>: <a target="_blank" href="{{ $item->url }}">Me</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{ $item->sujet }}</h2>
                            <p>
                                {{ $item->monTexte }}
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
