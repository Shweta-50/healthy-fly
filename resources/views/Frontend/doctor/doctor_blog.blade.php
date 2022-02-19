<style>
    .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }

  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

.title-part {
    text-transform: uppercase;
    font-family: verdana;
    font-size: 4em;
    font-weight: 700;
    color: #f5f5f5;
    text-shadow: 1px 1px 1px #919191,

    1px 10px 6px rgba(16,16,16,0.4),
    1px 10px 10px rgba(16,16,16,0.2),
    1px 10px 35px rgba(16,16,16,0.2),
    1px 10px 60px rgba(16,16,16,0.4);

}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}
.rgba-gradient {
  background: -moz-linear-gradient(45deg,  rgb(9 229 171),rgb(46 128 199) 100%);
  background: -webkit-linear-gradient(45deg, rgb(9 229 171) , rgb(46 128 199) 100%);
  background: -webkit-gradient(linear, 45deg, from( rgb(9 229 171)), to(rgb(46 128 199)));
  background: -o-linear-gradient(45deg, rgb(9 229 171), rgb(46 128 199) 100%);
  background: linear-gradient(to 45deg, rgb(9 229 171), rgb(46 128 199) 100%);
}
.blog-h{
  font-size: 90px;
}




#icon{
  position:absolute;
  bottom:15px;

  right:40px;
  margin:0;
  padding:0;
  display:flex;
}

#icon li {
  list-style: none;
}

#icon li a {
  position: relative;
  width:40px;
  height:40px;
  display:block;
  text-align:center;
  margin:0 5px;
  border-radius: 50%;
  padding: 6px;
  box-sizing: border-box;
  text-decoration:none;
  box-shadow: 0 10px 15px rgba(0,0,0,0.3);
  background: linear-gradient(0deg, #ddd, #fff);
  transition: .5s;
}

#icon li a:hover {
  box-shadow: 0 2px 5px rgba(0,0,0,0.3);
  text-decoration:none;
}

#icon li a .fab {
  widht: 100%;
  height:100%;
  display:block;
  background: linear-gradient(0deg, #fff, #ddd);
  border-radius: 50%;
  /* margin-top:10px; */
  line-height: calc(40px - 12px);
  font-size:18px;
  color: #262626;
  transition: .5s;
}

#icon li:nth-child(1)  .fab {
  color: #3b5998;
}

#icon li:nth-child(2)  .fab {
  color: #00aced;
}

#icon li:nth-child(3) .fab {
  color: #dd4b39;
}

#icon li:nth-child(4)  .fab {
  color: #007bb6;
}

#icon li:nth-child(5)  .fab {
  color: #e4405f;
}
.dark-mode {
    filter: invert(1) hue-rotate(2deg);
    top:-3px;
  }

  .dark-mode-img {
    filter: invert(1) hue-rotate(2deg)!important;

  }

  .not-invert{
    filter: invert(0) hue-rotate(2deg)!important;
  }
</style>


@extends('Frontend.layouts.main')
@section('main-container')

<section>


        <!-- Main navigation -->
        <header>


          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('assets/img/home.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
              <!-- Content -->
              <div class="container" style="height: 80vh; ">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6 white-text text-center text-md-left mt-xl-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive blog-h font-weight-bold text-white title-part mt-sm-5   animate__animated animate__bounceInLeft" style="margin-top:10rem!important;">Blogs </h1 >
                    <hr class="hr-light">
                    <h3 class="mb-4 text-white  animate__animated animate__backInRight">“Calm mind brings inner strength and self-confidence, so that’s very important for good health. Nothing more important than our good health that’s our principal capital asset.”</h3>

                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mt-xl-5 wow blog-img fadeInRight ml-5" data-wow-delay="0.3s" style="margin-top:7rem!important;">
                    <img src="{{asset('assets/img/feat6.png')}}" alt="" class="img-fluid home-img" >
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->



</section>



<div class="container">
    <h1 class="text-center mt-5"> Our Latest Blogs..!!</h1>
    <div class="container">
        <div class="row pt-5 m-auto">
            @foreach ( $blogs as $blog )

          <div class="col-md-6 col-lg-4 pb-3">

            <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
            <div class="card card-custom bg-white border-white border-0 " data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" style="height: 450px">
              <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
              <div class="card-custom-avatar">
                <img class="img-fluid" src="{{asset('uploads/Images')}}/{{ $blog->profile_photo }}" alt="Avatar" id="img-blog" />
              </div>
              <div class="card-body" style="overflow-y: auto">
                <h5 class="card-title">{{$blog->doc_name}}</h5>
                <h4 class="card-title">{{$blog->blog_title}}</h4>
                <p class="card-text">{{$blog->blog}}</p>

              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">
                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
                <a href="{{'/doctor/doctor_view_profile'}}/{{$blog->doc_id}}" class="btn btn-primary">View Profile</a>

                <ul id="icon">
                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>

              </div>
            </div>

          </div>
          @endforeach

        </div>
      </div>

</div>





@endsection
<script>
    function toggleDarkMode() {
     var element = document.body;
     var img = document.querySelectorAll('img');
     var imgHero = document.querySelector('#img-hero');
     var contactImg = document.querySelector('#contact-img');
     var imgblog = document.querySelector('.img-fluid');
     var logoheader = document.querySelector('#logoheader');
     var headerNav = document.querySelector('.header-nav');
     element.classList.toggle("dark-mode");
     img.forEach(element => {
         element.classList.toggle("dark-mode-img");
         imgHero.classList.toggle("not-invert");
         contactImg.classList.toggle("not-invert");
         logoheader.classList.toggle("not-invert");
         imgblog.classList.toggle("dark-mode-img");
    });
     // headerNav.style.marginTop ="-85px";
     }
 </script>
@include('Frontend.layouts.scripts')
