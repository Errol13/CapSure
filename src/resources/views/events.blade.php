@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="shadow-lg mg-eve text-center mt-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/pe.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-dark text-white" style="--bs-bg-opacity: .5;">
        <h5>Photograpy Exhibition</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/30.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-dark text-white" style="--bs-bg-opacity: .5;">
        <h5>30% OFF!</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/camera.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-dark text-white" style="--bs-bg-opacity: .5;">
        <h5>Camera Giveaway</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <a href="#" class="btn btn-primary">Join Now</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
           
        </div>  

            
            


        </div>
</div>



@endsection