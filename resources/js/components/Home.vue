<template>
  <div>
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
      <b-carousel-slide>
        <template #img>
          <a href="https://conectamayor.cl/contacto-usuario/" target="_blank">
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/slider/hero_1.png'"
              alt="image slot"
            >
          </a>
        </template>

        
      </b-carousel-slide>
    </b-carousel>
    <div class="section pt-5 pb-5 blue_ligth_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <img :src="'./frontend/assets/images/social_impact/main.jpg'" class="img-fluid" />
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <h5 class="big_blue_letters">
              Impacto Social
            </h5>
            <h5 class="small_blue_letters">
              Conoce cómo impactan nuestros proyectos mejorando la calidad de vida de personas mayores.
            </h5>
            <h5 class="pt-2">
              <center><b-button v-on:click="changeArrowImpactoSocial" v-b-toggle.collapse-1 variant="primary" class="btn btn-secondary btn-circle btn-sm"><i v-if="impacto_social_open == 0" class="fa-solid fa-angle-right"></i><i v-if="impacto_social_open == 1" class="fa-solid fa-angle-down"></i></b-button></b-button></center>
            </h5>
          </div>
          <div class="col-md-1">

          </div>
        </div>
      </div>
    </div>
    <b-collapse id="collapse-1" accordion="my-accordion2">
      <div class="section about-feature-bg section-padding">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col-md-4">
              <h1 class="numbers">
                78.864
              </h1>
              <h1 class="small_blue_letters">
                Personas mayores de todo Chile conectadas gratuitamente
              </h1>
            </div>
            <div class="col-md-4">
              <h1 class="numbers">
                336
              </h1>
              <h1 class="small_blue_letters">
                Municipalidades trabajando con nosotros
              </h1>
            </div>
            <div class="col-md-4">
              <h1 class="numbers">
                17.000
              </h1>
              <h1 class="small_blue_letters">
                Personas usan frecuentemente nuestro servicio de acompañamiento, disponible para conversar todos los días de la semana
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 gray_ligth_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-4 text-justify">
              <p class="small_gray_letters">
                En Conecta Mayor promovemos la integración social de las personas mayores a través de iniciativas, que permiten conectarlas, visibilizarlas y brindarles compañía, además de favorecer su inclusión digital.
              </p>
              <p class="small_gray_letters">
                A través de nuestro trabajo, buscamos impactar y generar cambios positivos en su calidad de vida. <br><br>En esta sección te invitamos a conocer todas nuestras iniciativas y revisar los resultados.
              </p>
              <center><button @click="Iniciatives()" type="button" class="btn btn-secondary btn-circle btn-sm first_integration_button">Conoce nuestras iniciativas</button></center>
              <br>
              <center><a href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Hallazgos a un año del programa CM (1) (2).pdf" target="_blank" class="btn btn-secondary btn-circle btn-sm second_integration_button">Descarga el informe de nuestra primera<br> evaluación de impacto (2021)</a></center>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
              <img :src="'./frontend/assets/images/social_impact/slider1.png'" class="img-fluid" />
            </div>
            
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 blue_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-4 pt-5">
              <img :src="'./frontend/assets/images/social_impact/slider2.jpeg'" class="img-fluid" />
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
              <h5 class="big_white_letters">
                Impacto Celulares CM
              </h5>
              <br><br>
              <p class="small_white_letters text-justify">
                Los celulares Conecta Mayor son dispositivos inclusivos, diseñados especialmente para ser usados por personas mayores. Disponen de una interfaz que facilita el uso del celular para el beneficiario, conectándolo con sus redes de apoyo y locales. También cuentan con botones predeterminados para diferentes necesidades de conexión, información y entretenimiento.
              </p>
            </div>
            <div class="col-md-1">

            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              <img :src="'./frontend/assets/images/social_impact/launcher.png'" class="img-fluid" />
            </div>
            <div class="col-md-2">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <center>
                <video width="70%" controls>
                  <source src="https://conectamayor.cl/video_launcher.MP4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </center>
            </div>
          </div>
        </div>
      </div>
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
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/social_impact/impact_grapics.png'"
              alt="image slot"
            >
          </template>

          
        </b-carousel-slide>
      </b-carousel>

      <div class="section pt-5 pb-5 gray_ligth_section section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
              <img
                class="img-fluid"
                :src="'./frontend/assets/images/social_impact/graficomotivos.png'"
                alt="image slot"
              >
            </div>
            <div class="col-md-1">

            </div>
            
            <div class="col-md-4 text-justify">
              <h5 class="big_blue_letters">
                Impacto Central de Acompañamiento
              </h5>
              <p class="small_blue_letters">
                La Central de acompañamiento es una línea telefónica con la que los beneficiarios de Conecta Mayor pueden comunicarse para ser escuchados y acompañados durante las 24 horas. Este servicio busca contrarrestrar la soledad y/o aislamiento que muchos de ellos enfrentan.
              </p>
              <p class="small_blue_letters">
                Las personas mayores pueden llamar haciendo un solo click y todas las veces que quieran hacerlo. Al contactarnos, son acogidos por ejecutivos especialmente capacitados para acompañarlos, entregarles información y gestionar servicios de emergencia local, entre otros. Además desde Conecta Mayor llamamos a las personas para darles compañia, hacer seguimiento y recordarles que pueden contar con nosotros. 
              </p>
            </div>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
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
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'././frontend/assets/images/social_impact/datos_impacto.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>
      </b-carousel>
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
            <a href="https://www.lideresmayores.cl/" target="_blank">
              <img
                class="d-block img-fluid w-100"
                width="1024"
                height="480"
                :src="'./frontend/assets/images/social_impact/grupo_100_v2.png'"
                alt="image slot"
              >
            </a>
          </template>
        </b-carousel-slide>
        <b-carousel-slide>
          <template #img>
            <a href="https://conectamayor.cl/blog/" target="_blank">
              <img
                class="d-block img-fluid w-100"
                width="1024"
                height="480"
                :src="'./frontend/assets/images/social_impact/grupo_103_v2.png'"
                alt="image slot"
              >
            </a>
          </template>
        </b-carousel-slide>
        <b-carousel-slide>
          
            <template #img>
              <a href="https://www.vocesmayores.cl/" target="_blank">
                <img
                  class="d-block img-fluid w-100"
                  width="1024"
                  height="480"
                  :src="'./frontend/assets/images/social_impact/grupo_104_v2.png'"
                  alt="image slot"
                >
              </a>
            </template>
          
        </b-carousel-slide>
      </b-carousel>
    </div>
    </b-collapse>
    <div class="section pt-5 pb-5 gray_ligth_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <img :src="'./frontend/assets/images/gochile/main.png'" class="img-fluid" />
          </div>
          <div class="col-md-1">

          </div>
          
          <div class="col-md-4">
            <h5 class="big_blue_letters">
              Programa "Vamos Chilenos"
            </h5>
            <h5 class="small_blue_letters">
              Revisa lo resultados del programa “Vamos Chilenos” acá.
            </h5>
            <h5 class="pt-2">
              <center><b-button v-on:click="changeArrowVamosChilenos" v-b-toggle.collapse-2 variant="primary" class="btn btn-secondary btn-circle btn-sm"><i v-if="vamos_chilenos_open == 0" class="fa-solid fa-angle-right"></i><i v-if="vamos_chilenos_open == 1" class="fa-solid fa-angle-down"></i></b-button></center>
            </h5>
          </div>
          <div class="col-md-1">

          </div>
        </div>
      </div>
    </div>
    <b-collapse id="collapse-2" accordion="my-accordion2">
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
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/gochile/gochile.png'"
              alt="image slot"
            >
          </template>
        </b-carousel-slide>
      </b-carousel>
      <div class="section pb-5 pt-5 blue_section">
        <div class="container-fluid">
          <div class="row" style="margin-top 20px;">
            <div class="col-md-12">
              <center>
                <iframe title="PBi Publico" width="1140" height="542" src="https://app.powerbi.com/view?r=eyJrIjoiNjJjMzJlZDEtMGRkMy00NzZhLTlhOGEtZjhjMDNkOTA5OTU0IiwidCI6ImIyZTBhZGU5LTU4OGEtNDllZS1iMWUxLWViNmJhYzE4ZWYzNyJ9&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 gray_ligth_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
              <img :src="'./frontend/assets/images/gochile/products.jpg'" class="img-fluid" style="border-radius: 25px;" />
            </div>
            <div class="col-md-1">

            </div>
            
            <div class="col-md-4">
              <h5 class="big_blue_letters">
                Kit de insumos y alimentos
              </h5>
              <h5 class="small_blue_letters">
                Adicional a los equipos celulares, las 80.000 personas mayores beneficiadas recibieron dos cajas de alimentos y artículos de aseo para el hogar e higiene personal, lo que buscó dar un apoyo adicional para paliar parte de los problemas presentados en la época más cruda de la pandemia.
              </h5>
              <h5 class="pt-2">
                <center><a href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Informe de Kits Insumos y Alimentos.pdf" target="_blank"  class="btn btn-secondary btn-circle btn-sm second_integration_button">Descarga el informe <br> de entregas</a></center>
              </h5>
            </div>
            <div class="col-md-1">

            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-4 text-center">
              <h5 class="go-chile-resources-title">
                Gestión de Recursos “Vamos Chilenos”
              </h5>
              <img :src="'./frontend/assets/images/gochile/ejecución presupuestaria-03.jpg'"  class="img-fluid" style="border-radius: 25px;" />
            </div>
            <div class="col-md-1">

            </div>
            
            <div class="col-md-4">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <h5>
                <center><a href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Informe Transparencia - Vamos Chilenos 2020-2021.pdf" target="_blank"  class="btn btn-secondary btn-circle btn-sm second_integration_button">Informe de transparencia <br> "Vamos Chilenos"</a></center>
              </h5>
            </div>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 gray_ligth_section" style="display: none;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h1 class="go-chile-multiple-carrousel-title text-center">
                Fotos "Vamos Chilenos"
              </h1>
              <b-carousel>
                <b-carousel-slide>
                  <template v-slot:img>
                    <b-card-group>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                    </b-card-group>
                  </template>
                </b-carousel-slide>
                <b-carousel-slide>
                  <template v-slot:img>
                    <b-card-group>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                    </b-card-group>
                  </template>
                </b-carousel-slide>
                <b-carousel-slide>
                  <template v-slot:img>
                    <b-card-group>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                      <b-card img-src="http://via.placeholder.com/400x300" overlay></b-card>
                    </b-card-group>
                  </template>
                </b-carousel-slide>
              </b-carousel>
            </div>
          </div>
        </div>
      </div>
    </b-collapse>
    <div class="section pt-5 pb-5 blue_ligth_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <img :src="'./frontend/assets/images/financial/main.jpeg'" class="img-fluid" />
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <h5 class="big_blue_letters">
              Estados Financieros y Memorias
            </h5>
            <h5 class="small_blue_letters">
              Revisa las memorias anuales e informes FECU históricos de Conecta Mayor.
            </h5>
            <h5 class="pt-2">
              <center><b-button v-on:click="changeArrowEstadoFinanciero"  v-b-toggle.collapse-3 variant="primary" class="btn btn-secondary btn-circle btn-sm"><i v-if="estado_financiero_open == 0" class="fa-solid fa-angle-right"></i><i v-if="estado_financiero_open == 1" class="fa-solid fa-angle-down"></i></b-button></center>
            </h5>
          </div>
          <div class="col-md-1">

          </div>
        </div>
      </div>
    </div>
    <b-collapse id="collapse-3" accordion="my-accordion2">
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
          <b-carousel-slide>
            <template #img>
              <img
                class="d-block img-fluid w-100"
                width="1024"
                height="480"
                :src="'./frontend/assets/images/financial/slider.png'"
                alt="image slot"
              >
            </template>

            
          </b-carousel-slide>
        </b-carousel>
      </div>
      <div class="section pt-5 pb-5 pink_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-12">
                <h5 class="big_white_letters">
                  Memoria
                </h5>
                <br><br>
                <p class="small_white_letters text-justify">
                  &nbsp; &nbsp; &nbsp;En nuestras memorias anuales, podrás encontrar las metas, proyectos y resultados de nuestras actividades y operaciones durante cada año. También podrás encontrar información detallada sobre nuestros estados financieros auditados. Te invitamos a conocer más acerca de nuestros proyectos y cómo estamos impactando en la calidad de vida de las personas mayores.
                </p>
              </div>
            </div>
            
            <div class="col-md-6">
                <b-list-group>
                  <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Memoria CM 2020-2021.pdf" target="_blank" class="memory_pair_list">
                    <div class="d-flex w-100 justify-content-end">
                      <h2 class="memory_font">Memoria 2020 </h2>&nbsp;
                      <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm memory-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                    </div>
                  </b-list-group-item>
                  <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Memoria CM 2020-2021.pdf" target="_blank" class="memory_no_pair_list">
                    <div class="d-flex w-100 justify-content-end">
                      <h2 class="memory_font">Memoria 2021</h2>&nbsp;
                      <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm memory-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                    </div>
                  </b-list-group-item>
                </b-list-group>
            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 blue_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-12">
                <h5 class="big_white_letters">
                  Informe FECU
                </h5>
                <br><br>
                <p class="small_white_letters text-justify">
                  &nbsp; &nbsp; &nbsp;La FECU social es una forma estandarizada de presentar una memoria anual o balance, que reúne las actividades realizadas por Conecta Mayor cada año, además de incorporar una rendición detallada tanto de los aspectos financieros como de gestión.
                </p>
              </div>
            </div>
            
            <div class="col-md-6">
                <b-list-group>
                  <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/FECU SOCIAL FCM - 2020 [FINAL].pdf" target="_blank" class="fecu_pair_list">
                    <div class="d-flex w-100 justify-content-end">
                      <h2 class="memory_font">FECU 2020 </h2>&nbsp;
                      <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm memory-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                    </div>
                  </b-list-group-item>
                  <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/FECU SOCIAL FCM - 2021-final.pdf" target="_blank" class="fecu_no_pair_list">
                    <div class="d-flex w-100 justify-content-end">
                      <h2 class="memory_font">FECU 2021</h2>&nbsp;
                      <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm memory-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                    </div>
                  </b-list-group-item>
                </b-list-group>
            </div>
          </div>
        </div>
      </div>
      <div class="section pt-5 pb-5 blue_sea_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <h5 class="big_white_letters">
                Estados Financieros
              </h5>
              <br><br>
              <p class="small_white_letters text-justify">
                &nbsp; &nbsp; &nbsp;Revisa los informes de los estados financieros auditados de la Fundación de forma resumida.
              </p>
            </div>
            
            <div class="col-md-6">
              <b-list-group>
                <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Auditoría 2020 - Final (emisión).pdf" target="_blank" class="financial_pair_list">
                  <div class="d-flex w-100 justify-content-end">
                    <h2 class="financial_font">Estados Financieros 2020</h2>&nbsp;
                    <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm financial-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                  </div>
                </b-list-group-item>
                <b-list-group-item href="http://transparencia.conectamayor.cl/public/frontend/assets/documents/Auditoría 2021 - Final (emisión).pdf" target="_blank" class="financial_no_pair_list">
                  <div class="d-flex w-100 justify-content-end">
                    <h2 class="financial_font">Estados Financieros 2021</h2>&nbsp;
                    <b-button variant="primary" class="btn btn-secondary btn-circle btn-sm financial-list-button"><i class="fa-solid fa-angle-right"></i></b-button>
                  </div>
                </b-list-group-item>
              </b-list-group>
            </div>
          </div>
        </div>
      </div>
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
          <b-carousel-slide>
            <template #img>
              <img
                class="d-block img-fluid w-100"
                width="1024"
                height="480"
                :src="'./frontend/assets/images/financial/ejecucion_presupuestaria.jpg'"
                alt="image slot"
              >
            </template>

            
          </b-carousel-slide>
        </b-carousel>
      </div>
    </b-collapse>
    <div class="section pt-5 pb-5 gray_ligth_section" style="display: none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <img :src="'./frontend/assets/images/faq/main.jpg'" class="img-fluid" />
          </div>
          <div class="col-md-1">

          </div>
          
          <div class="col-md-4">
            <h5 class="big_blue_letters" >
              Preguntas Frecuentes
            </h5>
            <h5 class="small_blue_letters">
              ¡No te quedes con dudas! Acá resolvemos las más comunes.
            </h5>
            <h5 class="pt-2">
              <center><b-button v-on:click="changeArrowPreguntasFrecuentes" v-b-toggle.collapse-4 variant="primary" class="btn btn-secondary btn-circle btn-sm"><i v-if="preguntas_frecuentes_open == 0" class="fa-solid fa-angle-right"></i><i v-if="preguntas_frecuentes_open == 1" class="fa-solid fa-angle-down"></i></b-button></center>
            </h5>
          </div>
          <div class="col-md-1">

          </div>
        </div>
      </div>
    </div>
    <b-collapse id="collapse-4" accordion="my-accordion2">
      <div class="section pt-5 pb-5 gray_ligth_section">
        <div class="container-fluid">
          <div class="faq_accordion" role="tablist">
            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-1 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cómo se seleccionó a los beneficiarios?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>
                    Los municipios definieron quienes son los beneficiarios que participan de esta iniciativa, los cuales deben cumplir con una serie de requisitos.
                  </b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-2 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cuáles son los requisitos?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>
                    - Ser residente de la comuna.<br><br>
                    - Ser parte del 40% de la población más vulnerable a nivel nacional, según el Registro Social de Hogares (RSH).<br><br>
                    - Tener 70 o más años, al 31 de abril de 2021.<br><br>
                    - Vivir solo, acompañado de otra persona mayor o de una persona a su cuidado. Específicamente, deben ser:<br><br>
                      * Personas que habitan solas una vivienda.<br><br>
                      * Personas cuyo Registro Social de Hogares (RSH) indica que viven en un hogar unipersonal (por ejemplo, en una vivienda puede haber más de un hogar unipersonal, o personas que habitaban un hogar unipersonal antes de la pandemia).<br><br>
                      * Personas que viven en compañía de una persona con dependencia o discapacidad al cuidado de ellos. Esta situación deberá quedar registrada mediante la elaboración de un breve informe social que indique la situación de la persona mayor y cuyo formato facilitará la Fundación, y que el Municipio deberá enviar a la Fundación vía correo electrónico.
                  </b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-3 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cómo y cuándo distribuimos los beneficios?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>Los municipios son nuestros aliados y ellos, además de identificar a los beneficiarios, inscriben a repartidores, quienes son capacitados para entregar el dispositivo a las personas mayores y explicarles sobre su uso. También distribuyen los Kits de insumos y alimentos. Por la compleja logística de entrega en todo Chile, desde la Fundación esperamos que los municipios puedan completar la entrega de los 80 mil equipos durante este año 2021.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-4 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cuáles son los costos del dispositivo para el beneficiario?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-4" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>El dispositivo CM Virtual es gratuito para las personas mayores.  En Conecta Mayor jamás le cobraremos a las personas mayores beneficiarias. El beneficio considera dos años del servicio de acompañamiento de la Central de Ayuda y Comunicación Conecta Mayor y, gracias a la donación de Entel, incluye un plan mensual gratuito de 300 minutos, 50 SMS e internet para WhatsApp ilimitado por los 24 meses.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-5 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿El beneficiario es dueño del dispositivo?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>No, el beneficiario recibe el beneficio en calidad de comodato, accediendo al dispositivo y una vez que no lo requiera deberá retornarlo a la Municipalidad local para ser asignado a otra persona mayor que cumpla con los requisito</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-6 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Qué ocurre si el CM Virtual se pierde o alguien se lo quita a la persona mayor?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-6" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>
                    El dispositivo cuenta con un software de seguridad que permite que sólo pueda ser usado por la persona mayor asignada por el municipio. Si alguien intenta darle un uso diferente, el dispositivo se inutiliza automáticamente.
Si sabes de un robo o pérdida del dispositivo, no dudes en avisarnos a través de algunos de nuestros canales, para que bloqueemos el dispositivo y protejamos la información personal de quien era su usuario.
                  </b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-7 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Qué sucede cuando fallece un beneficiario?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-7" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>Cuando fallece un usuario del programa, el dispositivo celular es regresado a la municipalidad correspondiente y el equipo municipal lo asigna a otra persona mayor que sea vecino o vecina de la misma comuna y cumpla con todos los requisitos.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-8 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Qué pasa si un usuario quiere devolver el dispositivo?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-8" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>Si desea devolver el dispositivo, debe contactarse con su municipalidad para coordinar su devolución y solicitar que el aparato sea reasignado a otro beneficiario.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-9 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    Con el celular entregado por Conecta Mayor, ¿se pueden hacer llamadas internacionales?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-9" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>A través de WhatsApp se pueden realizar llamadas y videollamadas a todo el mundo. En cambio, las llamadas telefónicas al extranjero usan un servicio que se llama roaming internacional, que tiene un alto costo para quien la realiza y por esta razón los dispositivos Conecta Mayor tienen bloqueado dicho servicio.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-10 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cómo saber a quién le asignaron el beneficio?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-10" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>La identidad de los beneficiarios no puede darse a conocer debido a la ley de protección de datos personales (Ley N° 19.628).</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-11 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cómo saber cuántos dispositivos fueron entregados en mi comuna (o en otra de mi interés)?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-11" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>En esta misma página web, a través de la pestaña TRANSPARENCIA en la parte superior, se puede revisar el número de beneficiados y el avance de las entregas de cada una de las comunas inscritas, a lo largo de todo el país.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-12 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Por qué hay comunas que no están inscritas para la entrega de beneficios?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-12" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>La Fundación invitó a todas las municipalidades del país a participar de este proyecto. Para más información sobre una comuna no inscrita, por favor, solicitamos comunicarse a través del formulario de CONTACTO en el menú principal.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>


            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-13 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Es remunerado el Directorio de Conecta Mayor?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-13" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>No, los miembros del Directorio realizan una labor ad honorem, es decir, no reciben ningún pago. Lo mismo ocurre con el Consejo Asesor, consistente en expertos que apoyan gratuitamente el desarrollo de la Fundación.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>

            <b-card no-body class="mb-1 accordion-design">
              <b-card-header header-tag="header" class="p-1 text-left card-header-accordion" role="tab">
                <b-button class="text-left" block v-b-toggle.accordion-14 variant="secondary" style="background-color: #ccc !important; border: none !important; padding-top: 10px !important; padding-bottom: 10px !important;">
                  <h1 class="accordion-words"><strong><font class="plus-symbol-accordion">+</font></strong>    ¿Cuál es la relación del programa con SENAMA?</h1>
                </b-button>
              </b-card-header>
              <b-collapse id="accordion-14" accordion="my-accordion" role="tabpanel">
                <b-card-body style="background-color: #f1f1f180 !important;">
                  <b-card-text>En el inicio de la campaña “Vamos Chilenos”, el Servicio Nacional del Adulto Mayor -SENAMA- fue un aliado para el diseño del programa. Además, se han beneficiado con el dispositivo usuarios de Centros Diurnos y Condominios de Vivienda Tuteladas de SENAMA que cumplen los requisitos de esta iniciativa.</b-card-text>
                </b-card-body>
              </b-collapse>
            </b-card>
          </div>
        </div>
      </div>
    </b-collapse>
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
      <b-carousel
        id="carousel-1"
        v-model="slide"
        :interval="4000"
        background="#fff"
        img-width="1024"
        img-height="480"
        style="text-shadow: 1px 1px 2px #333;"
        @sliding-start="onSlideStart"
        @sliding-end="onSlideEnd"
      >
        <b-carousel-slide>
          <template #img>
            <img
              class="d-block img-fluid w-100"
              width="1024"
              height="480"
              :src="'./frontend/assets/images/footer/top-footer.png'"
              alt="image slot"
            >
          </template>

          
        </b-carousel-slide>
      </b-carousel>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null,
        vamos_chilenos_open: 0,
        impacto_social_open: 0,
        estado_financiero_open: 0,
        preguntas_frecuentes_open: 0,
        value1: true,
        value2: false
      }
    },
    methods: {
      togglePowerBiGoChile() {
        this.value1 = false;
        this.value2 = true;
      },
      changeArrowImpactoSocial() {
        if(this.impacto_social_open == 1) {
          this.impacto_social_open = 0;
        } else {
          this.impacto_social_open = 1;
          this.vamos_chilenos_open = 0;
          this.estado_financiero_open = 0;
          this.preguntas_frecuentes_open = 0;
        }
      },
      changeArrowVamosChilenos() {
        if(this.vamos_chilenos_open == 1) {
          this.vamos_chilenos_open = 0;
        } else {
          this.vamos_chilenos_open = 1;
          this.impacto_social_open = 0;
          this.estado_financiero_open = 0;
          this.preguntas_frecuentes_open = 0;

          window.scrollTo(0, 1100);
        }
      },
      changeArrowEstadoFinanciero() {
        if(this.estado_financiero_open == 1) {
          this.estado_financiero_open = 0;
        } else {
          this.estado_financiero_open = 1;
          this.vamos_chilenos_open = 0;
          this.impacto_social_open = 0;
          this.preguntas_frecuentes_open = 0;

          window.scrollTo(0, 1500);
        }
      },
      changeArrowPreguntasFrecuentes() {
        if(this.preguntas_frecuentes_open == 1) {
          this.preguntas_frecuentes_open = 0;
        } else {
          this.preguntas_frecuentes_open = 1;
          this.vamos_chilenos_open = 0;
          this.impacto_social_open = 0;
          this.estado_financiero_open = 0;

          window.scrollTo(0, 1900);
        }
      },
      Iniciatives() {
        window.open(
          'https://conectamayor.cl/nuestras-iniciativas/',
          '_blank'
        );
      },
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>
  <style scoped>
  .go-chile-resources-title {
    color: #2F397F !important;
    font-family: 'Noto Sans', sans-serif;
    font-size: 40px;
    font-weight: bold;
  }
  .go-chile-multiple-carrousel-title {
    color: #2F397F !important;
    font-size: 45px;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
  }
  .go-chile-card-title {
    color: #2F397F !important;
    font-size: 30px;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
  }
  .go-chile-carousel-caption {
    position: absolute;
    left: 4em;
    top: 2em;
    font-family: 'Ubuntu', sans-serif;
    font-size: 25px;
    color: #fff !important;
    font-weight: 500;
    opacity: 1;
    width: 44% !important;
  }

  @media (min-width: 576px) {
    .carousel-extra-content-p {
      position: absolute;
      left: 15em;
      top: 17em;
      font-family: 'Ubuntu', sans-serif;
      font-size: 15px;
      color: #fff !important;
      font-weight: 500;
      opacity: 1;
      width: 28% !important;
    }
    .carousel-extra-content {
      position: absolute;
      left: 4em;
      top: 3em;
      font-family: 'Ubuntu', sans-serif;
      font-size: 56px;
      color: #fff !important;
      font-weight: bold;
    }
    .big_blue_letters {
      font-size: 45px !important;
      font-family: 'Ubuntu', sans-serif;
      color: #2F397F;
      font-weight: bold;
      padding-top: 25px;
    }
    .big_white_letters {
      font-size: 45px !important;
      font-family: 'Ubuntu', sans-serif;
      color: #fff;
      font-weight: bold;
      padding-top: 25px;
    }

    .plus-symbol-accordion {
      font-size: 50px !important;
    }
    .accordion-words {
      font-size: 30px !important; 
      font-family: 'Ubuntu', sans-serif; 
      opacity: 1; 
      color: #414141; 
      font-weight: bold;
    }
    .accordion-design {
      border: none !important; 
      padding-bottom: 10px; 
      background-color: #f1f1f180 !important;
    }
    .answer-accordion {
      background-color: #f1f1f180;
    }
    .card-header-accordion {
      background-color: #ccc !important; 
      height: 95px !important;
    }
    .memory_no_pair_list {
      background: #f08891 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }
    .memory_pair_list {
      background: #F05C68 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }
    .fecu_no_pair_list {
      background: #7378a3 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }
    .fecu_pair_list {
      background: #2F397F 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }
    .financial_no_pair_list {
      background: #89d6fa 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }
    .financial_pair_list {
      background: #2192C6 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 30px;
    }

    .financial_font {
      font-size: 30px;
    }

    .memory_font {
      font-size: 30px;
    }

    .btn-circle.btn-sm.first_integration_button {
      width: 420px;
      height: 65px;
      padding: 20px;
      border-radius: 15px;
      font-size: 18px;
      text-align: center;
      background-color: #2768DC !important;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 800;
      box-shadow: 10px 5px 5px black;
    }
    .btn-circle.btn-sm.second_integration_button {
      width: 420px;
      height: 80px;
      padding-top: 10px;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
      border-radius: 15px;
      font-size: 18px;
      text-align: center;
      background-color: #2768DC !important;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 800;
      box-shadow: 10px 5px 5px black;
    }
  }

  @media (max-width: 575px) {
    .carousel-extra-content-p {
      display: none;
    }
    .carousel-extra-content {
      position: absolute;
      left: 3em;
      top: 3em;
      font-family: 'Ubuntu', sans-serif;
      font-size: 20px;
      color: #fff !important;
      font-weight: bold;
    }

    .big_blue_letters {
      font-size: 30px !important;
      font-family: 'Ubuntu', sans-serif;
      color: #2F397F;
      font-weight: bold;
      padding-top: 25px;
    }
    .big_white_letters {
      font-size: 30px !important;
      font-family: 'Ubuntu', sans-serif;
      color: #fff;
      font-weight: bold;
      padding-top: 25px;
    }

    .plus-symbol-accordion {
      font-size: 18px !important;
    }
    .accordion-words {
      font-size: 15px !important; 
      font-family: 'Ubuntu', sans-serif; 
      opacity: 1; 
      color: #414141; 
      font-weight: bold;
    }
    .accordion-design {
      border: none !important;
      background-color: #f1f1f180 !important;
    }
    .answer-accordion {
      background-color: #f1f1f180;
    }
    .card-header-accordion {
      background-color: #ccc !important; 
    }

    .memory_no_pair_list {
      background: #f08891 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 12px;
    }
    .memory_pair_list {
      background: #F05C68 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 12px;
    }
    .financial_no_pair_list {
      background: #89d6fa 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 12px;
    }
    .financial_pair_list {
      background: #2192C6 0% 0% no-repeat padding-box;
      opacity: 1;
      height: 70px;
      color: #fff;
      font-family: 'Ubuntu', sans-serif;
      letter-spacing: 1.2px;
      font-size: 12px;
    }

    .financial_font {
      font-size: 20px;
    }

    .memory_font {
      font-size: 20px;
    }
    .btn-circle.btn-sm.first_integration_button {
      width: 300px;
      height: 65px;
      padding: 20px;
      border-radius: 15px;
      font-size: 14px;
      text-align: center;
      background-color: #2768DC !important;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 800;
    }
    .btn-circle.btn-sm.second_integration_button {
      width: 300px;
      height: 80px;
      padding-top: 10px;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
      border-radius: 15px;
      font-size: 14px;
      text-align: center;
      background-color: #2768DC !important;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 800;
    }
  }
  
  .pt-6 {
    padding-top: 40px !important;
  }
  .pb-6 {
    padding-top: 40px !important;
  }
  .small_blue_letters {
      font-family: 'Noto Sans', sans-serif;
      color: #2F397F;
      font-weight: 100;
      font-size: 18px;
  }
  .small_white_letters {
      font-family: 'Noto Sans', sans-serif;
      color: #fff;
      font-weight: 100;
      font-size: 18px;
  }
  .gray_ligth_section {
    background: #f1f1f180;
  }
  .blue_sea_section {
    background: #2192C6;
  }
  .pink_section {
    background: #F05C68;
  }
  .blue_ligth_section {
    background: #2769dc80;
  }
  .blue_section {
    background: #2F397F;
  }
  .btn-circle.btn-sm {
    width: 65px;
    height: 65px;
    padding: 2px 0px;
    border-radius: 50px;
    font-size: 40px;
    text-align: center;
    background-color: #2F397F !important;
  }
  .btn-circle.btn-sm.memory-list-button {
    width: 40px;
    height: 40px;
    padding: 2px 0px;
    border-radius: 50px;
    font-size: 20px;
    text-align: center;
    background-color: #fff !important;
    color: #F05C68;
  }
  
  .btn-circle.btn-sm.financial-list-button {
    width: 40px;
    height: 40px;
    padding: 2px 0px;
    border-radius: 50px;
    font-size: 20px;
    text-align: center;
    background-color: #fff !important;
    color: #2192C6;
  }
  .numbers {
    font-size: 70px !important;
    font-family: 'Ubuntu', sans-serif;
    color: #2F397F;
    font-weight: bold;
  }

  .section-padding {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .blue_number_letters {
    font-family: 'Noto Sans', sans-serif;
    color: #2F397F;
    font-weight: 500;
    font-size: 20px;
  }
  .small_gray_letters {
      font-family: 'Noto Sans', sans-serif;
      color: #737373;
      font-weight: 100;
      font-size: 20px;
      opacity: 1;
  }

  .faq_accordion .card-header {
    background-color: #f1f1f180 !important;
    background: transparent;
  }
</style>