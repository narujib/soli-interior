<section class="top-category-widget-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="pb-10">Temukan Inspirasi Untuk Desain Anda</h1>
                <p>
                    Kami siap berdiskusi untuk membantu mewujudkan visi dan kebutuhan desain ruang Anda.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($portofolios as $portofolio)
            <div class="col-lg-6 mb-0">
                <div class="single-cat-widget mb-0">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="/portofolios/{{$portofolio->slug}}">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto" src="{{ asset('img/blog/cat-widget1.jpg') }}" alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">{{ $portofolio->project_name }}</h4>
                                <span></span>
                                <p>{{ $portofolio->client_name }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item {{ $portofolios->onFirstPage() ? 'disabled' : '' }}">
                    <a href="{{ $portofolios->previousPageUrl() }}" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-left"></span>
                        </span>
                    </a>
                </li>
                @foreach ($portofolios->getUrlRange(1, $portofolios->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $portofolios->currentPage() ? 'active' : '' }}">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endforeach
                <li class="page-item {{ $portofolios->hasMorePages() ? '' : 'disabled' }}">
                    <a href="{{ $portofolios->nextPageUrl() }}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-right"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    <div>
</section>