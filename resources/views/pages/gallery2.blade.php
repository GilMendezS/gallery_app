@extends('layouts.master')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('/css/zoom.css')}}">
    
    
@endsection
@section('content')
<div class="container-fluid">
  <ul class="nav nav-pills nav-fill mt-3">
    <li class="nav-item">
      <a class="nav-link showItems active" data-item="item300" href="#">$300.00</a>
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
    <div id="content">
        <div id="view">
            <img src="https://picsum.photos/1200/800/?random" alt="" />
        </div>
        <div id="thumbs">
            <div id="nav-left-thumbs"></div>
            <div id="pics-thumbs">
                <img src="https://picsum.photos/1024/768/?random" alt="Nature1" />
                <img src="https://picsum.photos/1024/767/?random" alt="Nature2" />
                <img src="https://picsum.photos/768/1024/?random" alt="Nature3" />
                <img src="https://picsum.photos/1023/768/?random" alt="Nature4" />
                <img src="https://picsum.photos/1024/769/?random" alt="Nature5" />
                <img src="https://picsum.photos/767/1024/?random" alt="Nature6" />
                <img src="https://picsum.photos/1021/768/?random" alt="Nature7" />
                <img src="https://picsum.photos/766/1024/?random" alt="Nature8" />
                <img src="https://picsum.photos/1023/768/?random" alt="Nature9" />
            </div>
            <div id="nav-right-thumbs"></div>
        </div>
    </div>
    <div id="zoom"></div>

  <div class=" clearfix" id="div-item300" >
    <!--80X50 $300.00 -->
    <div class="card-columns">
    @for ($i = 26; $i < 45; $i++)
      <div class="card">
        <a class="lightboxgallery-gallery-item item300" target="_blank" href="{{asset("images/gallery/300/$i.jpg")}}"  data-title="$300.00" data-alt="80X50" data-desc="80X50">
          <img class="card-img-top" src="{{asset("images/gallery/300/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="card-body">
            
            <span class="lightboxgallery-gallery-item-title">80X50 $300.00</span>
          </div>
        </a>
      </div>
  
      {{-- <a class="lightboxgallery-gallery-item item300" target="_blank" href="{{asset("images/gallery/300/$i.jpg")}}"  data-title="$300.00" data-alt="80X50" data-desc="80X50">
        <div>
          <img  src="{{asset("images/gallery/300/$i.jpg")}}" title="Cuadro" alt="Cuadro">
          <div class="lightboxgallery-gallery-item-content">
            <span class="lightboxgallery-gallery-item-title">80X50 $300.00</span>
          </div>
        </div>
      </a> --}}
    @endfor
    </div>
  </div>
  <!--1.1X60 $750.00 -->
  
</div>
@endsection
@section('extra-js')
    <script src="{{asset('js/prefixfree.min.js')}}"></script>
    <script src="{{asset('/js/zoom-slideshow.js')}}"></script>
    <script type="text/javascript">
    
    $(".showItems").on('click', function(){
      $(".nav-link").removeClass('active');
      var itemsToShow = $(this).data('item');
      $(this).addClass('active')
      if(itemsToShow){
        
        $(".lightboxgallery-gallery").hide();
        $(`#div-${itemsToShow}`).show('slow');

      }
    });
    $('#view').setZoomPicture({
        thumbsContainer: '#pics-thumbs',
        prevContainer: '#nav-left-thumbs',
        nextContainer: '#nav-right-thumbs',
        zoomContainer: '#zoom',
        zoomLevel: 2,
    }); 
    
    </script>
@endsection



