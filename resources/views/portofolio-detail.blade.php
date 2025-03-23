@extends('layouts.app2')

@section('content')
<section class="project-details-area section-gap mt-30" style="margin-bottom: -20px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 project-details-left">
                <img class="img-fluid" src="{{ asset('img/blog/cat-widget1.jpg') }}" alt="" style="width: 100%">
            </div>
            <div class="col-lg-6 project-details-right">
                <h3 class="pb-20">{{ $portofolio->project_name }}</h3>
                <p>
                    {{ $portofolio->description }}
                </p>
                <div class="details-info d-flex flex-row">
                    <ul class="names">
                        <li>Klien     </li>
                        <li>Alamat    </li>
                        <li>Selesai   </li>
                    </ul>
                    <ul class="desc">
                        <li>{{ $portofolio->client_name }}</li>
                        <li>{{ $portofolio->address }}</li>
                        <li>{{ $portofolio->date }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>	
</section>

<section class="section-gap mb-0">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h3 class="pb-10">Detail Projek</h3>
            </div>
        </div>
        <div class="galleryfull">
            <a onclick="openLightbox(0)"><img src="{{ asset('img/blog/cat-widget1.jpg') }}" alt="Gambar 1"></a>
            <a onclick="openLightbox(1)"><img src="{{ asset('img/blog/cat-widget2.jpg') }}" alt="Gambar 2"></a>
            <a onclick="openLightbox(2)"><img src="{{ asset('img/blog/cat-widget3.jpg') }}" alt="Gambar 3"></a>
            <a onclick="openLightbox(3)"><img src="{{ asset('img/blog/cat-widget2.jpg') }}" alt="Gambar 4"></a>
        </div>
    </div>

    <div class="lightbox" id="lightbox">
        <span class="close" onclick="closeLightbox()">✖</span>
        <span class="prev" onclick="changeImage(-1)">❮</span>
        <img id="lightbox-img">
        <span class="next" onclick="changeImage(1)">❯</span>
    </div>

    <script>
        let currentIndex = 0;
        const images = [
            "{{ asset('img/blog/cat-widget1.jpg') }}",
            "{{ asset('img/blog/cat-widget2.jpg') }}",
            "{{ asset('img/blog/cat-widget3.jpg') }}",
            "{{ asset('img/blog/cat-widget2.jpg') }}"
        ];
        function openLightbox(index) {
            currentIndex = index;
            document.getElementById('lightbox-img').src = images[currentIndex];
            document.getElementById('lightbox').style.display = 'flex';
        }
        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }
        function changeImage(step) {
            currentIndex = (currentIndex + step + images.length) % images.length;
            document.getElementById('lightbox-img').src = images[currentIndex];
        }
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) closeLightbox();
        });
    </script>
</section>
@include('components.latest-project')

@endsection