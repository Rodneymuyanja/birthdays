
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
                <a class="nav-link scrollto" href="#" ><li><a class="nav-link scrollto" href="#hero"><i class="bi bi-person-x-fill" style="font-size: 1.5rem; color: red; margin-left:3px;"></i></a></li></a>
                
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
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">A little trivia about your friend</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tell us more</h2>
          <p>You can always tell us more about your friend whenever you find time.... we'll wait</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Does your friend have any pets? what's the name? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" placeholder="pet name" aria-label=".form-control-lg example">

                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Since we're planning their birthday, what kid of cake do they like?<i class="bi bi-egg-fried"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" placeholder="cake kind and flavour" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What places do they like, somewhere you can take them?<i class="bi bi-image-fill"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" placeholder="places" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">what kind of music are they into.....?<i class="bi bi-music-note-beamed"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" placeholder="musics" aria-label=".form-control-lg example">
               </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Movies they like....?<i class="bi bi-film"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" placeholder="movies" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
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
