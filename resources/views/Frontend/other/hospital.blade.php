<style>
 * {
  box-sizing: border-box;
  /*   border: 1px solid black; */
}

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



















.section-title h2{
    color: white;
  text-shadow: 2px 2px 4px #000000;
}

.box {
  display: flex;
  min-height:50vh;
  max-height: 50vh;
  margin: 0;
  padding: 0;
  overflow: hidden;
  list-style-type: none;
}

.box1 {
  flex: 1;
  display: flex;
  align-items: stretch;
  padding: 20px;
  background-image: linear-gradient(to right, #09e5ab, #2f80c7);
  cursor: pointer;
  transition: all 0.5s ease;
}
.box1:hover {
  background: #2f80c7;
}
.box1.active {
  flex: 5;
  background: #fff;
  cursor: default;
}
.box1.active h2 {
  color: white;
}
.box1.active .section-content {
  flex: 4;
  opacity: 1;
  transform: scaleX(1);
  color: #2f80c7;
}
.box1 .section-title {
  flex: 1;
  display: flex;
  align-items: center;
  width: 100%;
  margin: 0;
  padding: 0;
  text-align: center;
  color: white;
}
.box1 .section-title h2 {
  margin: 0;
  transform: rotate(-90deg);
  white-space: nowrap;
}
.box1 .section-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0;
  padding: 0;
  opacity: 0;
  transition: all 0.25s 0.1s ease-out;
}

</style>


@extends('../Frontend.layouts.main')
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
                <h1 class="h1-responsive blog-h font-weight-bold text-white title-part mt-sm-5   animate__animated animate__bounceInLeft" style="margin-top:10rem!important;">Our first priority is your health</h1 >
                <hr class="hr-light">
                <h3 class="mb-4 text-white  animate__animated animate__backInRight">“ Do not suffer from chronic diseases for yourself or in your family and get the total cure to remove the root cause of the disease.”</h3>

              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-6 col-xl-5 mt-xl-5 wow blog-img fadeInRight ml-5" data-wow-delay="0.3s" style="margin-top:7rem!important;">
                <img src="{{asset('assets/img/hospt.png')}}" alt="" class="" style="width: 150%;height:90vh">
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





<!-- Main navigation -->
<section class="h-100">


    <!-- Full Page Intro -->

      <!-- Mask & flexbox options-->
      <div class="mask align-items-center ">
        <!-- Content -->
        {{-- <div class="container-fluid"> --}}
          <!--Grid row-->
          <div class="row ml-5">

            <!--Grid column-->
            <div class="col-md-11 col-lg-11 col-sm-11 white-text text-center text-md-left mt-xl-5 wow fadeInLeft " data-wow-delay="0.3s">
                <h2 class="text-center other-heading" style="margin-top: 50px!important;">Top 3 Best Hospitals</h2>
                <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                  style="width:200px; background-color:red; height: 4px; margin: 4px auto;"><br>
              <ul class="box  ">
                <li class="box1">
                  <div class="section-title" style="background-color: #2f80c7;">
                    <h2>Cancer</h2>
                  </div>
                  <div class="section-content" style="overflow-y:auto">
                    <img width="100%" height="100%" class="img-fluid" src="{{asset('assets/img/R.jpg')}}">
<br>
                    <h4>Rajiv Gandhi Cancer Hospital, Delhi</h4>
                    <ul>
                        <li>It offers subsidized cancer screening based services that allow for the early detection of cancer.</li>
                        <li>Detailed information and transparency on the costs.</li>
                        <li>Phone: 011 4582 2222</li>
                        <li>Address: Sir Chotu Ram Marg, Sector – 5, Rohini Institutional Area, Rohini, New Delhi, Delhi 110085</li>
                    </ul>
                    <div class="col-6">
                        <a href="https://www.rgcirc.org/" class="btn view-btn mt-2">Visit site</a>
                    </div>
                  </div>
                </li>

                <li class="box1 ">
                    <div class="section-title" style="background-color: #2f80c7;">
                      <h2>Kidney</h2>
                    </div>
                    <div class="section-content" style="overflow-y:auto">
                      <img width="100%" height="100%" class="img-fluid" src="{{asset('assets/img/guru.jpg')}}">
  <br>
                    <h4>Delhi Sikh Gurdwara Management Committee</h4>
                       <p class="text-center">India’s biggest Kidney Dialysis 100-bedded hospital
                         DSGMC members said patients will only have to get necessary documents. A team of specialists will monitor the patients at the facility.The hospital block has huge halls with dialysis machines attached to each bed. It also has semi-private room facilities.

                        </p>
                        <ul>
                            <li>free dialysis </li>
                            <li>No Bill Counter</li>
                            <li>four pharmacies across the national capital Delhi to provide medicines at subsidised rates.  </li>
                          </ul>
                      <div class="col-6">
                          <a href="https://www.dsgmc.in/Event/EventPhotosVideos/1062" class="btn view-btn mt-2">Visit site</a>
                      </div>
                    </div>
                  </li>

                <li class="box1 active ">
                    <div class="section-title" style="background-color: #2f80c7;">
                      <h2>Cardiology</h2>
                    </div>
                    <div class="section-content" style="overflow-y:auto">
                      <img width="100%" height="100%" class="img-fluid" src="{{asset('assets/img/ss.jpg')}}">
  <br>

                      <h4>Sri Sathya Sai Super Speciality Hospital</h4>
                      <p class="text-center">Sri Sathya Sai Institute of Higher Medical Sciences aims to provide free medical care to the sick and ailing with the dedication, commitment, love and the best of skills, so that they will be cured in body, mind and spirit.All Satya Sai Superspeciality hospitals located across the country, provide absolutely free treatment. Specially cardiology, orthopedics, neurology, eurology.</p>
                      <ul>
                        <li>No Bill Counter</li>
                        <li>Cardiology and Cardio-thoracic and Vascular� Surgery</li>
                        <li>Neurology and Neuro-surgery</li>
                      </ul>
                      <div class="col-6">
                        <a href="https://sssihms.org/" class="btn view-btn mt-2">Visit site</a>
                    </div>

                    </div>
                  </li>
              </ul>


            <!--Grid column-->


            <!--Grid column-->
            {{-- <div class="col-md-6 col-xl-5 mt-xl-5 wow blog-img fadeInRight ml-5" data-wow-delay="0.3s" style="margin-top:7rem!important;">

            </div> --}}
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->

    <!-- Full Page Intro -->
  </section>
  <!-- Main navigation -->
  <!--Main Layout-->



</section>



{{-- NGOS --}}


<div class="container">


    <h2 class="text-center " style="margin-top: -80px!important;"> NGO's Who help the Needy..!!</h2>
                <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                  style="width:200px; background-color:red; height: 4px; margin: 4px auto;"><br>
    <div class="container">
        <div class="row pt-5 m-auto">


          <div class="col-md-6 col-lg-4 pb-3">

            <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
            <div class="card card-custom bg-white border-white border-0 " data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" style="height: 450px">
              <div class="card-custom-img">
                <img class="img-fluid" src="{{asset('assets/img/smile.jpg')}}" alt="Avatar" style="height: 200px!important;width:400px!important;">
              </div>

              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title"> Smile Foundation</h4>
                <p class="card-text">Smile Foundation was started in 2002, with the aim to bring positive changes to the lives of underprivileged children, their families, and their communities. It works at the grassroot level, aiming to solve the root cause of the problems that the rural people face.
                    Smile foundation works on health projects on almost every state in India. To take healthcare to the poorest of the poor and to the remotest places, it initiated a unique delivery model with a practical mechanism called ‘Smile on Wheels’. It seeks to assist problems of mobility accessibility and availability of primary healthcare.
                    More than 10 lakh people have benefitted from the from the free healthcare services from the ‘Smile on Wheels’ programme so far.

                </p>

              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">
                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
                <a href="https://www.smilefoundationindia.org/" class="btn btn-primary">Visit Site</a>

                <ul id="icon">
                    <li><a href="https://www.facebook.com/smilefoundationindia.org"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/smilefoundation"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/smilefoundationindia/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>

              </div>
            </div>

          </div>

          {{-- 2 --}}

          <div class="col-md-6 col-lg-4 pb-3">

            <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
            <div class="card card-custom bg-white border-white border-0 " data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" style="height: 450px">
              <div class="card-custom-img">
                <img class="img-fluid" src="{{asset('assets/img/donate.jpg')}}" alt="Avatar" style="height: 200px!important;width:400px!important;">
              </div>

              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title"> CancerAssist</h4>
                <p class="card-text">They support treatment of some poor patients, who have cancers in early stage or those with high chance of cure. Cancer types like early breast cancer, early colon cancer, Hodgkin's lymphoma, blood cancers in children show high cure rates.
                    Financial assistance, of Rs 3 Lakhs per patient provided to patients belonging to underprivileged backgrounds, who are below 16 years of age. The entire cost of treatment of selected patients is supported, including diagnostic tests, investigations, chemotherapy, radiation therapy, surgery and cost of medication..

                </p>

              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">
                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
                <a href="http://www.cancerassist.in/" class="btn btn-primary">Visit Site</a>

                <ul id="icon">
                    <li><a href="https://www.facebook.com/smilefoundationindia.org"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/smilefoundation"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/smilefoundationindia/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>

              </div>
            </div>

          </div>

          {{-- 3 --}}

          <div class="col-md-6 col-lg-4 pb-3">

            <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
            <div class="card card-custom bg-white border-white border-0 " data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" style="height: 450px">
              <div class="card-custom-img">
                <img class="img-fluid" src="{{asset('assets/img/th.jpg')}}" alt="Avatar" style="height: 200px!important;width:400px!important;">
              </div>

              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title"> DonateLife Foundation<br><small class="mb-5">an initative for organ donate</small></h4>

                <p class="card-text">Organ donation is the need of the day and a hope for the brighter future of those who are not as blessed as most of us. There are those who need an organ to survive and then there are those who have transcended into a different world and whose organs could infuse life in many who are still in this world. Our non-profit organisation, Donate Life, serves as the bridge between the two.


                </p>

              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">
                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
                <a href="https://www.donatelife.org.in/" class="btn btn-primary">Visit Site</a>

                <ul id="icon">
                    <li><a href="https://www.facebook.com/donatelifetrust/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/donatelifetrust/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC66llzaVILfu-zdKWuM_0tA"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>

              </div>
            </div>

          </div>


        </div>
      </div>

</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  var section = $('.box1');

function toggleAccordion() {
  section.removeClass('active');
  $(this).addClass('active');
}

section.on('click', toggleAccordion);
</script>

@endsection
