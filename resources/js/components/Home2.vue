<template>
  <div>
    <div class="section">
      <b-carousel
        id="carousel-1"
        v-model="slide"
        :interval="4000"
        background="#ababab"
        img-width="1024"
        img-height="480"
        style="text-shadow: 1px 1px 2px #333;"
        @sliding-start="onSlideStart"
        @sliding-end="onSlideEnd"
      >

        <!-- Slides with img slot -->
        <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/slider/slider-1.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>
      </b-carousel>
    </div>

    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #90b5f5 0% 0% no-repeat padding-box;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img :src="'./frontend/assets/images/social_impact/main.jpg'" height="450" />
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <p style="text-align: justify;">
              <h5 class="social_impact_letters">
                Impacto Social
              </h5>
              <h5 style="width: 80% !important;" class="small_section_letters">
                ¡Conoce cómo impactan nuestros proyectos a mejorar la calidad de vida de las personas mayores!
              </h5>
              <h5 style="width: 80% !important;">
                <center><b-button v-b-toggle.collapse-1 variant="primary" class="btn btn-secondary btn-circle btn-sm"><i class="fa-solid fa-angle-right"></i></b-button></center>
              </h5>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section Start -->
    <b-collapse id="collapse-1">
      <div class="section about-feature-bg section-padding">
          <div class="container">
              <div class="row mb-n5">

                  <!-- Feature Start -->
                  <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="400">
                      <div class="feature flex-column text-center">
                          <div class="icon w-100 mb-4 numbers">
                              80.000
                          </div>
                          <div class="content ps-0 w-100 numbers_title_space">
                              <h5 class="numbers_title">
                                  <center>Beneficiarios de Conecta Mayor</center>
                              </h5>
                          </div>
                      </div>
                  </div>
                  <!-- Feature End -->
                  <!-- Feature Start -->
                  <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature flex-column text-center">
                          <div class="icon w-100 mb-4 numbers">
                              336
                          </div>
                          <div class="content ps-0 w-100 numbers_title_space">
                              <h5 class="numbers_title">Municipalidades trabajando con Conecta Mayor</h5>
                          </div>
                      </div>
                  </div>
                  <!-- Feature End -->

                  <!-- Feature Start -->
                  <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="600">
                      <div class="feature flex-column text-center">
                          <div class="icon w-100 mb-4 numbers">
                              20.000
                          </div>
                          <div class="content ps-0 w-100 numbers_title_space">
                              <h5 class="numbers_title">Lorem ipsum Lorem ipsum Lorem ipsum</h5>
                          </div>
                      </div>
                  </div>
                  <!-- Feature End -->
              </div>
          </div>
      </div>
    </b-collapse>
    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #2F397F 0% 0% no-repeat padding-box">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="https://via.placeholder.com/500x350"/>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-6">
            <p style="text-align: justify;">
              <h5 class="big_white_letters">
                Impacto Celulares CM
              </h5>
              <h5 class="small_white_letters" style="text-align: justify !important;">
                Los celulares Conecta Mayor son dispositivos diseñados especialmente para ser usado por personas mayores. Disponen de un software que facilita la interfaz para el beneficiario conectándolo con sus redes de apoyo y locales y, también cuentan con botones predeterminados para diferentes necesidades de conexión, información y entretenimiento. <br><br> ¡Conoce más sobre el impacto generado por el CM Virtual en esta sección!
              </h5>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #FBFBFB 0% 0% no-repeat padding-box">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="https://via.placeholder.com/500x350"/>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-6">
            <p style="text-align: justify;">
              <h5 class="big_blue_letters">
                Impacto Central de Acompañamiento
              </h5>
              <h5 class="small_blue_letters" style="text-align: justify !important;">
                Los celulares Conecta Mayor son dispositivos diseñados especialmente para ser usado por personas mayores. Disponen de un software que facilita la interfaz para el beneficiario conectándolo con sus redes de apoyo y locales y, también cuentan con botones predeterminados para diferentes necesidades de conexión, información y entretenimiento. <br><br> ¡Conoce más sobre el impacto generado por el CM Virtual en esta sección!
              </h5>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->
    <div class="section integration_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10 integration_description">
                            <p>En Conecta Mayor buscamos promover la integración social de las personas mayores a través de iniciativas, estudios y programas que permitan conectarlos, visibilizarlos y brindarles compañía, además de favorecer su inclusión digital.</p> <p>A través de estas iniciativas y proyectos, buscamos impactar y generar cambios positivos en la calidad de vida de los mayores. En esta sección encontrarás los resultados obtenidos hasta el momento ¡Te invitamos a conocer todas nuestras iniciativas!</p>
                            <center><button type="button" class="btn btn-secondary btn-circle btn-sm first_integration_button">Conoce nuestras iniciativas</button></center>
                            <br>
                            <center><button type="button" class="btn btn-secondary btn-circle btn-sm second_integration_button">Descarga el informe <br> la evaluación de impacto</button></center>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://via.placeholder.com/600x400"/>
                </div>
            </div>
        </div>
    </div>
    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #FBFBFB 0% 0% no-repeat padding-box;">
      <div class="container">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-5 col-xs-12 col-sm-12">
            <p style="text-align: justify;">
              <h5 class="social_impact_letters">
                Programa "Vamos Chilenos"
              </h5>
              <h5 style="width: 80% !important;" class="small_section_letters">
                Revisa los resultados del programa "Vamos Chilenos" acá.
              </h5>
              <h5 style="width: 80% !important;">
                <center><button type="button" class="btn btn-secondary btn-circle btn-sm"><i class="fa-solid fa-angle-right"></i></button></center>
              </h5>
            </p>
          </div>
          <div class="col-md-6">
            <img :src="'./frontend/assets/images/gochile/main.png'" height="400" />
          </div>
          
        </div>
      </div>
    </div>
    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #90b5f5 0% 0% no-repeat padding-box;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img :src="'./frontend/assets/images/financial/main.jpeg'" height="450" />
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <p style="text-align: justify;">
              <h5 class="social_impact_letters">
                Estados Financieros y Memorias
              </h5>
              <h5 style="width: 80% !important;" class="small_section_letters">
                Lee las memorias e informes FECU desde que comenzó Conecta Mayor.
              </h5>
              <h5 style="width: 80% !important;">
                <center><button type="button" class="btn btn-secondary btn-circle btn-sm"><i class="fa-solid fa-angle-right"></i></button></center>
              </h5>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section" style="padding-top: 80px !important; padding-bottom: 80px !important; background: #FBFBFB 0% 0% no-repeat padding-box;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img :src="'./frontend/assets/images/faq/main.jpg'" height="450" />
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <p style="text-align: justify;">
              <h5 class="social_impact_letters">
                Preguntas Frecuentes
              </h5>
              <h5 style="width: 80% !important;" class="small_section_letters">
                ¡No te quedes con dudas! Acá resolvemos las más comunes.
              </h5>
              <h5 style="width: 80% !important;">
                <center><button type="button" class="btn btn-secondary btn-circle btn-sm"><i class="fa-solid fa-angle-right"></i></button></center>
              </h5>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <b-carousel
        id="carousel-1"
        v-model="slide"
        :interval="4000"
        controls
        indicators
        background="#ababab"
        img-width="1024"
        img-height="480"
        style="text-shadow: 1px 1px 2px #333;"
        @sliding-start="onSlideStart"
        @sliding-end="onSlideEnd"
      >

        <!-- Slides with img slot -->
        <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider1.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider2.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider3.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider4.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider5.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider6.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider7.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer_sliders/slider8.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>

      </b-carousel>
    </div>
    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-6 mb-10" data-aos="fade-up" data-aos-delay="200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididun</p>
                            <!-- Contact Address Start -->
                            <ul class="widget-address">
                                <li><span>Address: </span> 123 Main Street, Anytown, CA 12345 - USA.</li>
                                <li><span>Call to: </span> <a href="#"> (012) 800 456 789-987</a></li>
                                <li><span>Mail to: </span> <a href="#"> yourmail@example.com</a></li>
                            </ul>
                            <!-- Contact Address End -->

                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mt-4">
                                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Delivery Information</a></li>
                                <li><a href="about.html">Privacy Policy</a></li>
                                <li><a href="about.html">Terms & Conditions</a></li>
                                <li><a href="about.html">Customer Service</a></li>
                                <li><a href="about.html">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">My Account</h2>
                            <ul class="widget-list">
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="contact.html">Newsletter</a></li>
                                <li><a href="contact.html">Help Center</a></li>
                                <li><a href="contact.html">Conditin</a></li>
                                <li><a href="contact.html">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">My Account</h2>
                            <ul class="widget-list">
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="contact.html">Newsletter</a></li>
                                <li><a href="contact.html">Help Center</a></li>
                                <li><a href="contact.html">Conditin</a></li>
                                <li><a href="contact.html">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">Copyright © 2022 Fundación Conecta Mayor. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->
  </div>
</template>
<script>
export default {
   el: '#app',
   data () {
      return {
        slide: 0,
        sliding: null,
        
      }
    },
    methods: {
      slideStart () {
      console.log('slideStarted')
    },
    onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      },
    slideStop () {
      console.log('slideStopped')
    },
      // Listener event
      slide (data) {
        console.log(data)
      },
      onTap (data) {
        console.log(data)
      },
      onInit (data) {
        console.log(data)
      }
    }
}
</script>