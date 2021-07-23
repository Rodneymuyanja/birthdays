
@extends('layouts.app')

@section('content')

<section id="testimonials" class="testimonials">


      <div class="container" data-aos="fade-up">

        <div class="section-title">

          
        </div>
        <h1 style="font-size: 3.5rem;"><div class="count-box" > <span data-purecounter-start="0" data-purecounter-end="{{$c}}" data-purecounter-duration="800" data-purecounter-delay="150" class="purecounter"></span>  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"><i class=" bi-person-plus-fill" style="font-size: 1.5rem; color:green;"></i></a>
        <p style="color:cornflowerblue;"><em>Friends</em></p></div></h1>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          

          @foreach($er as $re)
           @foreach($re as $r)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$r['comments']}}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <a href="#">
                    <img src="assets/img/testimonials/kimono.png" class="testimonial-img position-relative" alt="">
                    
                       </img>
                </a>
                <a class="nav-link scrollto" href="{{URL::to('editfriend/'.$r['name'])}}" ><h3> {{$r['name']}}</h3></a>
                  <?php $name = $r['name'];  echo($name);?>

                <h4>{{$r['pets']}}</h4>
                <a class="nav-link scrollto" href="#" onclick="change()" name="name1" id="name1" value="{{$r['name']}}" data-bs-toggle="modal" data-bs-target="#message"><li><i class="bi bi-envelope-fill" style="font-size: 1.5rem; color: black; margin-left:3px;"></i></a></li></a>
                
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          @endforeach  
          </div>
          <div class="swiper-pagination"></div>
        </div>


      </div>
    </section><!-- End Testimonials Section -->
   
    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Add New friend</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="/addfriend">
      @csrf
      <div class="modal-body">
          <label><h4>Friend's Name</h4></label>
      <input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="name" aria-label=".form-control-lg example" label="Friend Name"></input>
      <label><h4>Birthday</h4></label>
      <input class="form-control form-control-lg" id="birthday" name="birthday" type="date" placeholder="birthday" aria-label=".form-control-lg example">
      <label><h4>Comments</h4></label>
      <textarea class="form-control form-control-lg" id="comments" name="comments" placeholder="comments"></textarea>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Add</button>
      </form>  
      </div>
    </div>
  </div>
</div>

    <!--modal-->


     <!--message Modal -->
<div class="modal fade" id="message" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="exampleModalToggleLabel2">Create a birthday Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
        <form action="/addMessage" method= "post">
          @csrf
          <p id ="p">heyy</p>
         
        
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Create</button>
          </div>  
        </form>
      </div>
      
    </div>
  </div>
</div>


    
</div>
 
@endsection    
