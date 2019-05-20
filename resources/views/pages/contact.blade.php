@extends('layouts.master')
@section('content')
<div class="site-section" data-aos="fade">
        <div class="container-fluid">
          
          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="row mb-5">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center"> Contactanos</h2>
                </div>
              </div>
    
              <div class="row">
                <div class="col-lg-8 mb-5">
                  <form action="#">
                   
    
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="fname"><i class="fa fa-user"></i> Nombre</label>
                        <input type="text" id="fname" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label class="text-black" for="lname"><i class="fa fa-user"></i> Apellidos</label>
                        <input type="text" id="lname" class="form-control">
                      </div>
                    </div>
    
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="email"><i class="fa fa-envelope"></i> Email</label> 
                        <input type="email" id="email" class="form-control">
                      </div>
                    </div>
    
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="subject"><i class="fa fa-bookmark"></i> Asunto</label> 
                        <input type="subject" id="subject" class="form-control">
                      </div>
                    </div>
    
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message"><i class="fa fa-comment"></i> Mensaje</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe tus comentarios o preguntas aquí...''"></textarea>
                      </div>
                    </div>
    
                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-2 px-4 text-white">
                      </div>
                    </div>
    
        
                  </form>
                </div>
                <div class="col-lg-3 ml-auto">
                  <div class="mb-3 bg-white">
                    <p class="mb-0 font-weight-bold">Dirección</p>
                    <p class="mb-4">Tuxtla Gutiérrez, Chiapas</p>
    
                    <p class="mb-0 font-weight-bold">Telefono</p>
                    <p class="mb-4"><a href="#">+52 961-268-69-36</a></p>
    
                    <p class="mb-0 font-weight-bold">Email</p>
                    <p class="mb-0"><a href="#">correo@gmail.com</a></p>
    
                  </div>
                  
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>
        
@endsection