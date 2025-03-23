<section class="top-category-widget-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-20 header-text text-center">
                <h3>Lihat Projek Lainnya</h3>
            </div>
        </div>
        <div class="row">
            @foreach($randomProjects as $project)
            <div class="col-lg-3 mb-0">
                <div class="single-cat-widget mb-0">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="{{ $project->slug }}">
                        <div class="thumb">
                            <img class="content-image img-fluid d-block mx-auto" src="{{ asset('img/blog/cat-widget1.jpg') }}" alt="">
                        </div>
                        <div class="content-details">
                            <h6 class="content-title mx-auto text-uppercase text-white">{{ $project->project_name }}</h6>
                            <span></span>
                            <p>{{ $project->client_name }}</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/portofolios" class="sec-btn head-btn text-uppercase mt-10">Lihat Semua</a>
            </div>
        </div>
    </div>	
</section>