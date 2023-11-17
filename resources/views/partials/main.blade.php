<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            @foreach ($profils as $item)
                                                <p><span class="title-s">Name: </span> <span>{{ $item->nom }}</span>
                                                </p>
                                                <p><span class="title-s">Country: </span>
                                                    <span>{{ $item->prenom }}</span>
                                                </p>
                                                <p><span class="title-s">Age: </span> <span>{{ $item->age }}
                                                        ans</span></p>
                                                <p><span class="title-s">Profile: </span>
                                                    <span>{{ $item->titre }}</span>
                                                </p>
                                                <p><span class="title-s">Email: </span> <span>{{ $item->email }}</span>
                                                </p>
                                                <p><span class="title-s">Phone: </span>
                                                    <span>{{ $item->telephone }}</span>
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @foreach ($skills as $item)
                                    <div class="skill-mf">
                                        <p class="title-s">Skills</p>
                                        <span>{{ $item->language }}</span> <span
                                            class="pull-right">{{ $item->pourcentage }}
                                            %</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $item->pourcentage }}%;" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        {{ $item->description }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            List of all my projects carried out as a web developer.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolios as $item)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ 'img/' . $item->image }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="{{ asset('img/' . $item->image) }}" alt="" class="img-fluid ">
                                </div>
                            </a>
                            <div class="work-content">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">{{ $item->titre }}</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span
                                                class="w-date">{{ $item->date }}</span>
                                        </div>
                                        <div>
                                            <a target="{{ $item->url }}"
                                                href="
                        {{ $item->url }}">URL:</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="{{ route('portfolio') }}"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                @include('layout.flash')
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="{{ route('mailbox.store') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="titre" class="form-control"
                                                            id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="adresse"
                                                            id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        @foreach ($contacts as $item)
                                            <h5 class="title-left">
                                                {{ $item->titre }}
                                            </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            {{ $item->description }}
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span>{{ $item->adresse }}</li>
                                            <li><span class="bi bi-phone"></span>{{ $item->telephone }}</li>
                                            <li><span class="bi bi-envelope"></span>{{ $item->email }}</li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    <div class="socials">
                                        <ul>
                                            <li><a target="_blank"
                                                    href="https://www.facebook.com/rofidnasif.annafie.14/"><span
                                                        class="ico-circle"><i class="bi bi-facebook"></i></span></a>
                                            </li>
                                            <li><a target="_blank"
                                                    href="https://www.instagram.com/walikota_bengkulu/"><span
                                                        class="ico-circle"><i class="bi bi-instagram"></i></span></a>
                                            </li>
                                            <li><a target="_blank" href="https://twitter.com/rfdzna"><span
                                                        class="ico-circle"><i class="bi bi-twitter"></i></span></a>
                                            </li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/rofid/"><span
                                                        class="ico-circle"><i class="bi bi-linkedin"></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
