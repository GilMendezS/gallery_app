@extends('layouts.master')
@section('content')
<div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-wrap">
                    <div class="image-info">
                        <h2 class="mb-3">80X50 $300.00</h2>
                        <a href="{{route('gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                    </div>
                    <img src="{{asset('images/gallery/300/29.jpg')}}" alt="Cuadro">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">90X60 $400.00</h2>
                    <a href="{{route('gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="{{asset('images/gallery/400/47.jpg')}}" alt="Cuadro">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">1.1X60 $750</h2>
                    <a href="{{route('gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="{{asset('images/gallery/750/1.jpg')}}" alt="Cuadro">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">1.50X80 $800.00</h2>
                    <a href="{{route('gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="{{asset('images/gallery/800/11.jpg')}}" alt="Image">
                </div>
            </div>
            
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>
@endsection