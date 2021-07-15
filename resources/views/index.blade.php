@extends('layouts.app')

@section('content')
  <!-- ======= Header ======= -->
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">   
          <div class="card-border-dark mb-3 vl" style="max-width: 200rem;">
           <div class="card-header">
          
    <nav id="navbar" class="navbar">
        <ul>
          <li><strong></strong></li>
          <li><a class="nav-link scrollto active" href="#hero"></a></li>
          <li><a class="nav-link scrollto" href="#about"></a></li>
          <li><a class="nav-link scrollto" href="#services"></a></li>  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!--.navbar -->
      
      <div class="card-body text-dark" style="margin-top:0px">
        <div class="card-group">
        <div class="card w-50" style="border:0px; ">
           <nav id="navbar" class="navbar" style="float:right; margin-left:600px; margin-top:40px;">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">Messages</a></li>
              <li><a class="nav-link scrollto" href="/friends" >Friends</a></li>  
              @guest
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#hero"><i class="bi bi-person-circle" style="font-size: 1.5rem; color: black; margin-left:3px;"></i></a></li>
              @endguest
              <li><a class="nav-link scrollto" href="#hero"><i class="img" style="font-size: 1.5rem; color: black; margin-left:3px;"></i></a></li>
              <img src=" {{Auth::user()->avatar}} " class="img position-relative" style="border-radius:50%; height:40px; width:40px">
                <span class="position-relative top-0 start-0 translate-middle p-2 bg-success border border-light rounded-circle" style="font-size: .65rem">
                  
              </span>
            </img>
              <li><a class="nav-link scrollto" href="#about"><i class="bi bi-search" style="font-size: 1.5rem; color: black; margin-left:-15px;"></i></a></li>
              <li><a class="nav-link scrollto  position-relative  " href="#services"><i class="bi bi-bell" style="font-size: 1.5rem; color: black; margin-left:0px;">
                <span class="position-relative top-0 start-0 translate-middle badge rounded-pill bg-danger" style="font-size: .65rem">
                 99+
               
              </span>
              </i></a></li> 
            </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

          <div class="card-body"  data-aos="fade-down" data-aos-delay="70" style="background-color:#c97d4b; opacity: .6; margin-left:; margin-top:-84px; width:160px; height:170px; margin-bottom:0px;">
            
            </div>
          <div class="card-body" style="background-color:#c97d4b; margin-top:30px; width:60px; height:200px; margin-bottom:100px;">
            <h2><a href="#" data-aos="fade-up" data-aos-delay="80" ><i class="bi bi-twitter" style="font-size: 1.5rem; color: #fff; margin-left:3px;"></i></a></h2>
            <h2><a href="#"><i class="bi bi-instagram" style="font-size: 1.5rem; color: #fff; margin-left:3px;"></i></a></h2>
            <h2><a href="#"><i class="bi bi-facebook" style="font-size: 1.5rem; color: #fff; margin-left:3px;"></i></a></h2>
            <h2><a href="#"><i class="bi bi-linkedin" style="font-size: 1.5rem; color: #fff; margin-left:3px;"></i></a></h2>
          </div>
            <div class="card-body" data-aos="zoom-in" data-aos-delay="200"  data-aos="fade-down" data-aos-delay="70" style="background-color:#c97d4b; margin-left:628px; margin-top:-290px; width:160px; height:100px; margin-bottom:100px;">
            
            </div>

            <div class="card-body" data-aos="fade-up" data-aos-delay="80" style="background-color:#c97d4b; margin-left:520px; margin-top:-90px; width:140px; height:90px; margin-bottom:100px;">
             
            </div>

            <div class="card-body" data-aos="fade-up" data-aos-delay="60" style="background-color:#c97d4b; margin-left:673px; margin-top:-190px; width:190px; height:150px; margin-bottom:120px;">
            </div>

            <div class="card-body" data-aos="fade-up" data-aos-delay="90" style="background-color:#c97d4b; margin-left:800px; margin-top:-430px; width:130px; height:150px; margin-bottom:200px;">
            </div>
            
            <div class="card-body" data-aos="fade-down" data-aos-delay="90" style="; margin-left:670px; margin-top:-410px; width:115px; height:100px; margin-bottom:300px;">
            <h1 title="date" data-aos="zoom-in" data-aos-delay="200">04</h1>
            </div>

            <div class="card-body" style="background-color:#c97d4b; opacity: .6; margin-left:100px; margin-top:-410px; width:200px; height:150px; margin-bottom:200px;">
            </div>

            <div class="card-body"  style="background-color:#fff;  margin-left:160px; margin-top:-300px; width:400px; height:150px; margin-bottom:200px;">
              <h2><p style=";" data-aos="fade-up" data-aos-delay="80">hey this is your birthday and we don't need to prove ourselves to no one because we're who we are, so pick a leaf take the hats off</p></h2>
              <h2><p style=";" data-aos="fade-up" data-aos-delay="30">so happy birthday</p></h2>

              
            </div>
            @guest
            <a class="getstarted scrollto text-centered" data-aos="fade-up" data-aos-delay="90"  href="/redirect" style="width:150px ; outline-color:black; margin-left:175px; margin-top:-150px; margin-bottom:100px;">Get Started....</a>
            @endguest
        </div>
 
        
        </div>

      </div>


          </div>
         
          </div>
        </div>
      
      
      </div>
    </div>
    



    

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up with Google</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



      

 
</div>
      </div>
    
    </div>
  </div>
</div>
    <script>
      var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
      </script>
 @endsection
  
  
