@extends('layouts.master')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('/css/lightboxgallery-min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">
    
@endsection
@section('content')
<div class="container-fluid">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link showItems" data-item="item300" href="#">$300.00</a>
    </li>
    <li class="nav-item">
      <a class="nav-link showItems" data-item="item400" href="#">$400.00</a>
    </li>
    <li class="nav-item">
      <a class="nav-link showItems" data-item="item700" href="#">$700.00</a>
    </li>
    <li class="nav-item">
      <a class="nav-link showItems" data-item="item750" href="#">$750.00</a>
    </li>
    <li class="nav-item">
      <a class="nav-link showItems" data-item="item800" href="#">$800.00</a>
    </li>
    
  </ul>
  <div class="lightboxgallery-gallery clearfix" id="div-item300" >
    <!--80X50 $300.00 -->
    @for ($i = 26; $i < 45; $i++)
      <a class="lightboxgallery-gallery-item item300" target="_blank" href="{{asset("images/gallery/300/$i.jpg")}}"  data-title="$300.00" data-alt="80X50" data-desc="80X50">
        <div>
          <img style="max-height:230px;" src="{{asset("images/gallery/300/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">80X50 $300.00</span>
          </div>
        </div>
      </a>
    @endfor
  </div>
  <!--1.1X60 $750.00 -->
  <div class="lightboxgallery-gallery clearfix" id="div-item750" style="display:none">
    @for ($i = 1; $i < 11; $i++)
      <a class="lightboxgallery-gallery-item item750" target="_blank" href="{{asset("images/gallery/750/$i.jpg")}}"  data-title="$750.00" data-alt="1.1X60" data-desc="1.1X60">
        <div>
          <img style="" src="{{asset("images/gallery/750/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">1.1X60 $750.00</span>
          </div>
        </div>
      </a>
    @endfor
  </div>
  <!--1.50X80 $800.00 -->
  <div class="lightboxgallery-gallery clearfix" id="div-item800" style="display:none">
    @for ($i = 11; $i < 18; $i++)
      <a class="lightboxgallery-gallery-item item800" target="_blank" href="{{asset("images/gallery/800/$i.jpg")}}" data-title="$800.00" data-alt="1.50X80" data-desc="1.50X80">
        <div>
          <img style="max-height:200px;" src="{{asset("images/gallery/800/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">1.50X80 $800.00</span>
          </div>
        </div>
      </a>
    @endfor
  </div>
  <div class="lightboxgallery-gallery clearfix" id="div-item700" style="display:none">
    <!--1X70 $700.00 -->
    @for ($i = 18; $i < 26; $i++)
      <a class="lightboxgallery-gallery-item item700" target="_blank" href="{{asset("images/gallery/700/$i.jpg")}}" data-title="$700.00" data-alt="1X70" data-desc="1X70">
        <div>
          <img style="max-height:200px;" src="{{asset("images/gallery/700/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">1X70 $700.00</span>
          </div>
        </div>
      </a>
    @endfor
  </div>
  <div class="lightboxgallery-gallery clearfix" id="div-item400" style="display:none">
    <!--90X60 $400.00 -->
    @for ($i = 45; $i < 57; $i++)
      <a class="lightboxgallery-gallery-item item400" target="_blank" href="{{asset("images/gallery/400/$i.jpg")}}" data-title="$400.00" data-alt="90X60" data-desc="90X60">
        <div>
          <img style="" src="{{asset("images/gallery/400/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">90X60 $400.00</span>
          </div>
        </div>
      </a>
    @endfor
  </div>
    </div>
@endsection
@section('extra-js')
    <script src="{{asset('/js/lightboxgallery-min.js')}}"></script>
    <script type="text/javascript">
    jQuery(function($) {
      $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
        event.preventDefault();
        $(this).lightboxgallery({
          showCounter: true,
          showTitle: true,
          showDescription: true
        });
      });
    });
    $(".showItems").on('click', function(){
      $(".nav-item").removeClass('active');
      var itemsToShow = $(this).data('item');
      $(this).parent().addClass('active')
      if(itemsToShow){
        console.log(itemsToShow)
        $(".lightboxgallery-gallery").hide();
        $(`#div-${itemsToShow}`).show('slow');

      }
    });
    </script>
@endsection
<!doctype html>


