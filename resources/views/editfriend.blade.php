@extends('layouts.app')

@section('content')

<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size:3.5rem;"><em>{{$name}}</em></h2>

          <img src="{{asset('assets/img/testimonials/kimono.png')}}" style="border-radius:50%; width:300px; height:300px;"  class="testimonial-img position-relative" alt="">
          </img>
        </div>

      <section id="faq" class="faq section-bg" style="margin-top:0px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tell us more</h2>
          <p>You can always tell us more about {{ $name }} whenever you find time.... we'll wait</p>
        </div>

        <form method="post" action="/editfriend">
        @csrf
        <input id="name" name="name" value={{$name}} hidden>
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-1">Create a Birthday Message for {{$name}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
               
                <textarea class="form-control text-area" id="message" name="message" style="height: 400px;  resize: none; border-radius: 0.5%;" placeholder="Birthday Message"></textarea>

                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-w" class="collapsed">if you plan on sending {{$name}} a birthday message you, please provide their EMAIL and we'll deliver the message<i class="bi bi-egg-fried"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-w" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="{{$name}}'s email" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Since we're planning their birthday, what kid of cake do {{$name}} like?<i class="bi bi-egg-fried"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" id="cake" name="cake" type="text" placeholder="cake kind and flavour" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What places does {{$name}} like, somewhere you can take them?<i class="bi bi-image-fill"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" id="places" name="places" type="text" placeholder="places" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">what kind of music is {{$name}} into.....?<i class="bi bi-music-note-beamed"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text"  id="music" name="music" placeholder="musics" aria-label=".form-control-lg example">
               </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Movies {{$name}} like....?<i class="bi bi-film"></i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" id="movies" name="movies" placeholder="movies" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-g" class="collapsed">Gift you'd like to send to {{$name}}</i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-g" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" id="gifts" name="gifts" placeholder="gift" aria-label=".form-control-lg example">
                </p>
              </div>
            </li>
 
            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-g1" class="collapsed">Does {{$name}} have any pets? what's the name? </i> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-g1" class="collapse" data-bs-parent=".faq-list">
                <p>
                <input class="form-control form-control-lg" type="text" id="pets" name="pets" placeholder="pet name" aria-label=".form-control-lg example">

                </p>
              </div>
            </li>
            


            <li data-aos="fade-up" data-aos-delay="800">
            <button class="btn btn-primary" type="submit">save changes</button>
            </li>
       
</form>
          </ul>
        </div>
   
      </div>
    </section><!-- End  -->

</section>
@endsection        