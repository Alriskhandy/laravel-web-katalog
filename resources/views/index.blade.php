@extends('layouts.main')

@section('mainpage')
@include('layouts.hero')

  <section class="mainpage">
    <h2 class="text-center mt-1 mb-3" id="/">Produk Unggulan</h2>
    <div class="container">
      <div class="container swiper">
        <div class="slide-container">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="assets/img/basket/nk-kyrie7.jpeg" alt="" />
              </div>
              <div class="profile-details">
                <img src="assets/img/nike.png" alt="" style="border: 1px solid black;"/>
                <div class="name-job">
                  <h3 class="name">Nike Kyrie XPreent Blur Pics</h3>
                  <h4 class="job">Katalog : Basket</h4>
                  <h4 class="job">Harga : Rp.525.000</h4>
                </div>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="assets/img/futsal/ads-predator.jpg" alt="" />
              </div>
              <div class="profile-details">
                <img src="assets/img/adidas.png" alt="" style="border: 1px solid black;"/>
                <div class="name-job">
                  <h3 class="name">Adidas Predator</h3>
                  <h4 class="job">Katalog : Futsal</h4>
                  <h4 class="job">Harga : Rp.599.000</h4>
                </div>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="assets/img/basket/ads-harden.jpg" alt="" />
              </div>
              <div class="profile-details">
                <img src="assets/img/adidas.png" alt="" style="border: 1px solid black;"/>
                <div class="name-job">
                  <h3 class="name">Adidas Harden Stepback 3</h3>
                  <h4 class="job">Katalog : Basket</h4>
                  <h4 class="job">Harga : Rp.1.400.000</h4>
                </div>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="assets/img/futsal/pm-ultra-future.jpg" alt="" />
              </div>
              <div class="profile-details">
                <img src="assets/img/puma.png" alt="" style="border: 1px solid black;"   />
                <div class="name-job">
                  <h3 class="name">Puma Ultra Future Z</h3>
                  <h4 class="job">Katalog : Futsal</h4>
                  <h4 class="job">Harga : Rp.200.000</h4>
                </div>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="assets/img/lari/rb-dynamica-4.jpg" alt="" />
              </div>
              <div class="profile-details">
                <img src="assets/img/reebok.png" alt="" style="border: 1px solid black;"/>
                <div class="name-job">
                  <h3 class="name">Reebok Zig Dynamica 4</h3>
                  <h4 class="job">Katalog : Lari</h4>
                  <h4 class="job">Harga : Rp.769.500</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
      {{-- <div class="container">
          <div class="container swiper">
              <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                  <div class="card swiper-slide">
                    <div class="image-box">
                      <img src="assets/images/showImg/fullDev.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                      <img src="assets/img/nike.png" alt="" />
                      <div class="name-job">
                        <h3 class="name">Nike Kyrie XPreent Blur Pics</h3>
                        <h4 class="job">Harga : Rp.525.000</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-box">
                      <img src="assets/images/showImg/photographer.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                      <img src="assets/img/adidas.png" alt="" />
                      <div class="name-job">
                        <h3 class="name">Adidas Predator</h3>
                        <h4 class="job">Harga : Rp.599.000</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-box">
                      <img src="assets/images/showImg/dataAna.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                      <img src="assets/img/adidas.png" alt="" />
                      <div class="name-job">
                        <h3 class="name">Adidas Harden Stepback 3 GW4215</h3>
                        <h4 class="job">Harga : Rp.1.400.000</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-box">
                      <img src="assets/images/showImg/appDev.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                      <img src="assets/img/adidas.png" alt="" />
                      <div class="name-job">
                        <h3 class="name">Adidas Ultraboost 21 White Volt</h3>
                        <h4 class="job">Harga : Rp.530.000</h4>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-box">
                      <img src="assets/images/showImg/blogger.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                      <img src="assets/img/puma.png" alt="" />
                      <div class="name-job">
                        <h3 class="name">Puma Ultra Future Z</h3>
                        <h4 class="job">Harga : Rp.200.000</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next swiper-navBtn"></div>
              <div class="swiper-button-prev swiper-navBtn"></div>
              <div class="swiper-pagination"></div>
          </div>
      </div> --}}
  </section>

@include('katalog')
@include('brand')
@endsection