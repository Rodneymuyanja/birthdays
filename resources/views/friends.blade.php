
@extends('layouts.app')

@section('content')

<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Friends<li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"><i class=" bi-person-plus-fill" style="font-size: 1.5rem; color:green;"></i></a></li></h2>
        </div>

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
                    <span class="position-relative top-0 start-0 translate-middle p-2 bi bi-patch-check-fill" style="font-size: 1rem">
                  
                  </span>
                       </img>
                </a>
                <h3>{{$r['name']}}</h3>
                

                <h4>{{$r['pets']}}</h4>
                <a class="nav-link scrollto" href="#" ><li><a class="nav-link scrollto" href="{{URL::to('editfriend/'.$r['name'])}}" ><i class="bi bi-person-x-fill" style="font-size: 1.5rem; color: red; margin-left:3px;"></i></a></li></a>
                
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
      
        <button class="btn btn-primary" type="submit" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Tell us more</button>
      </form>  
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     


      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">save changes</button>

      </div>
      </form>
    </div>
  </div>
</div>

    <!--modal-->
    
</div>
    <script>
      var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
      </script>
@endsection    
