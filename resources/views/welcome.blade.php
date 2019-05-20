@extends('layouts.master')
@section('content')
<div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-one.jpg" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-two.jpg" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-three.jpg" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-four.jpg" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-five.jpg" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-six.png" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                <div class="image-info">
                    <h2 class="mb-3">Categoria</h2>
                    <a href="{{asset('/gallery')}}" class="btn btn-outline-white py-2 px-4">Ver más cuadros</a>
                </div>
                <img src="images/pic-seven.jpg" alt="Image">
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