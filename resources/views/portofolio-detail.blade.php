@extends('layouts.app2')

@section('content')
<section class="project-details-area section-gap mt-30" style="margin-bottom: -20px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 project-details-left">
                <img class="img-fluid" src="img/blog/cat-widget1.jpg" alt="" style="width: 100%">
            </div>
            <div class="col-lg-6 project-details-right">
                <h3 class="pb-20">Lavendar ambient interior</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
                <div class="details-info d-flex flex-row">
                    <ul class="names">
                        <li>Rating    </li>
                        <li>Client    </li>
                        <li>Website   </li>
                        <li>Completed </li>
                    </ul>
                    <ul class="desc">
                        <li>
                            <div class="star">
                                : <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>								
                            </div>	
                        </li>
                        <li>: Envato</li>
                        <li>: Themeforest.net</li>
                        <li>: 17 Aug 1028</li>
                    </ul>							
                </div>	
                <div class="social-links mt-30">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>														
            </div>
        </div>
    </div>	
</section>

<section class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h3 class="pb-10">Temukan Inspirasi Untuk Desain Anda</h3>
            </div>
        </div>
        <div class="galleryfull">
            <a onclick="openLightbox(0)"><img src="img/blog/cat-widget1.jpg" alt="Gambar 1"></a>
            <a onclick="openLightbox(1)"><img src="img/blog/cat-widget2.jpg" alt="Gambar 2"></a>
            <a onclick="openLightbox(2)"><img src="img/blog/cat-widget3.jpg" alt="Gambar 3"></a>
            <a onclick="openLightbox(3)"><img src="img/blog/cat-widget4.jpg" alt="Gambar 4"></a>
        </div>
    </div>

 <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="close" onclick="closeLightbox()">✖</span>
        <span class="prev" onclick="changeImage(-1)">❮</span>
        <img id="lightbox-img">
        <span class="next" onclick="changeImage(1)">❯</span>
    </div>

    <script>
        let currentIndex = 0;
        const images = [
            "img/blog/cat-widget1.jpg",
            "img/blog/cat-widget2.jpg",
            "img/blog/cat-widget3.jpg",
            "img/blog/cat-widget4.jpg"
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

        // Tutup lightbox jika klik di luar gambar
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) closeLightbox();
        });
    </script>
</section>
@endsection