<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */
/* Template Name: personal */
get_header();
?>


<div class="container-fluid bgsSection1 ">
    <!-- Control the column width, and how they should appear on different devices -->
    <section class="container mt-1">
      <div class="row">
        <div class="col-sm-6 mt-5 justify-content-center d-flex">
          <div class="row">
            <div class="col-12 noMargin">
              <h1 class="animate__animated animate__bounce animate__delay-1s animate__fadeInLeftBig">La forma más fácil y segura de manejar tu dinero.</h1>
            </div>
            <div class="col-6 noMargin d-none d-sm-block">
              <hr class="hr animate__animated animate__bounce animate__delay-1s animate__fadeInLeftBig" />
            </div>
            <div class="col-10 noMargin">
              <label class="animate__animated animate__bounce animate__delay-1s animate__fadeInLeftBig">Solicita tu tarjeta desde la app y disfruta de todas las ventajas que tiene para ti, sin comisiones y sin anualidades.</label>
            </div>
            <div class="col-sm-12 d-flex justify-content-center contCvv">
              <ul>
                <li>
                  <img class="iconTar animate__animated animate__bounce animate__delay-2s animate__bounceInUp" src="/wp-content/themes/peibo-child/assets/img/btnPlayStore.png" alt="Peibo" />
                </li>
                <li>                  
                  <img class="iconTar animate__animated animate__bounce animate__delay-2s animate__bounceInUp" src="/wp-content/themes/peibo-child/assets/img/btnAppStore.png" alt="Peibo" />
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 justify-content-center ">
          <img class="celular animate__animated animate__bounce animate__delay-1s animate__fadeInRightBig" src="/wp-content/themes/peibo-child/assets/img/home/01_iPhone_12_Mockup.png" alt="Peibo" />
        </div>
      </div>
    </section>
</div>

<!-- <section class="container-fluid d-flex justify-content-center preSection animate__animated animate__bounce animate__delay-3s animate__bounceInUp">
  </section>
  <div class="container-fluid">
    <div class="row justify-content-center d-flex">
      <div class="col-sm-10 section2">
        
      </div>
    </div>
  </div> -->

<section class="slideCtPer animate__animated animate__bounce animate__delay-3s animate__bounceInUp">
  <div class="slideCtPer__bgTrans">
    <div class="sliderCards--per">
      <div>
        <div class="boxPerSlide columnSection2">
          <div class="row">
            <div class="col-sm-3">
              <img class="iconSection animate__animated animate__bounce animate__delay-4s animate__p" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icons/icon-dinero.png" alt="Peibo">
            </div>
            <div class="col-sm-9">
              <ul>
                <li>
                  <h3>Paga, transfiere y recibe dinero desde tu celular en tiempo real.</h3>
                </li>
                <li>
                  <label>A cualquier hora del día, todos los días del año; fines de semana y días festivos.</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- end.itemSlider -->
      <div>
        <div class="boxPerSlide columnSection2">
          <div class="row">
            <div class="col-sm-3">
              <img class="iconSection" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icons/icon-mov.png" alt="Peibo">
            </div>
            <div class="col-sm-9">
              <ul>
                <li>
                  <h3>Monitorea tus moviminetos desde la app móvil.</h3>
                </li>
                <li>
                  <label>Paga tus servicios desde tu celular o retira efectivo desde cualquier cajero.</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- end.itemSlider -->
    </div>
  </div><!-- end.slideCtPer__bgTrans -->
</section><!-- end.slideCtPer -->


<section class="secMask mask">
  <img class="mask" src="/wp-content/themes/peibo-child/assets/img/curva3.png" alt="Peibo" />

  <div class="cvvCt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-4">
          <figure class="cvvCt__img wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
            <img class="iconTar" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/digital.png" alt="Peibo" />
          </figure><!-- end.cvvCt__img -->
        </div><!-- end.col-* -->
        <div class="col-12 col-md-8">
          <div class="cvvCt__box">
            <div class="cvvCt__item">
              <div class="cvvAni">
                <small>CVV</small>
                <h2 class="cvvGene">140</h2>
              </div>
            </div><!-- end.cvvCt__item -->
            <div class="cvvCt__item">
              <h3>Haz compras en línea de manera segura.</h3>
              <p>Hazlo con tu tarjeta digítal y CVV dinámico.</p>
            </div><!-- end.cvvCt__item -->
          </div><!-- end.cvvCt__box -->
        </div><!-- end.col-* -->
      </div><!-- end.row -->
    </div><!-- end.container -->
  </div><!-- end.cvvCt- -->
    
  <div class="container-fluid d-flex justify-content-center sectionTar flex" style="display:none!important;">
    <div class="row container">
      <div class="col-sm-4 d-flex justify-content-center tres" >
        <img class="iconTar" src="/wp-content/themes/peibo-child/assets/img/digital.png" alt="Peibo" />
      </div>
      <div class="col-sm-3 d-flex justify-content-center contCvv uno" >
        <!-- <small class=" d-none d-sm-none d-md-block">CVV</small> -->
        <!-- <h1 class="cvvGene">140</h1> -->
        <div class="col-sm-12 d-block d-sm-block d-md-none d-flex">
          <br/><br/>
          <small>CVV</small>
        </div>
        
      </div>
      <div class="col-sm-5 d-flex justify-content-center contCvv dos" >
        <div class="row">
          <ul>
            <li>
              <h3>Haz compras en línea de manera segura.</h3>
            </li>
            <li>                  
              <label>Hazlo con tu tarjeta digítal y CVV dinámico.</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

 <!-- <div class="downloadApp">
    <div class="container sectionStores">
      <div class="row justify-content-center">
        <div class="col-sm-12 d-flex contCvv" > 
          <h3><strong>Descarga la app</strong> y abre tu cuenta hoy mismo.</h3>
        </div>
        <div class="col-sm-12 d-flex contCvv">
          <ul>
            <li>
              <img class="iconTar" src="/wp-content/themes/peibo-child/assets/img/btnPlayStore.png" alt="Peibo" />
            </li>
            <li>                  
              <img class="iconTar" src="/wp-content/themes/peibo-child/assets/img/btnAppStore.png" alt="Peibo" />
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>-->
</section>

<section class="secMaskTwo mask2">
  <img class="mask2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" src="/wp-content/themes/peibo-child/assets/img/curva4.png" alt="Peibo" />    
  <div class="container-fluid d-flex justify-content-center ">
    <div class="row container">
      <div class="col-sm-12 d-flex justify-content-center" >
        <h2 class="titleQuienes">¿Quiénes <strong>somos?</strong></h2>
      </div> 
      <div class="col-sm-11 d-flex justify-content-center text-center mb-4 offset-sm-1 boxDesc">
        <p>
          Somos una empresa 100% mexicana que busca una inclusión financiera a través de herramientas fáciles de utilizar, protegiendo la información de nuestros clientes/usuarios.
        </p>
      </div>
      <!-- <div class="col-sm-9 d-flex justify-content-start offset-sm-4 mt-3" >
        <h4>Somos una Empresa 100% mexicana.</h4>
      </div> 
      <div class="col-sm-8 d-flex justify-content-start offset-sm-4 mt-4 boxDesc mb-5">
        <p>
          Apoyamos la inclusión financiera y sabemos cómo afecta de manera positvia a la calidad de vida de las personas.
        </p>
      </div>                 -->
    </div>
  </div>
          
  <div class="container-fluid d-flex justify-content-center sectionQueremos ">      
    <div class="row container">
      <div class="col-sm-8 d-flex justify-content-start offset-sm-2" > 
          <h3>Queremos diseñar y ofrecer productos que fomenten tu salud financiera y bienestar.</h3>
      </div>
      <div class="col-sm-8 d-flex justify-content-start offset-sm-2" > 
          <p>También nos enorgulloce decir que somos una Fintech y estamos regulados por la CNBV. Es muy importante para nosotros cumplir con la regulación gubernamental aplicable y así poder ofrecer servicios de calidad que brinden confianza a nuestros clientes.</p>
      </div>
    </div>
  </div>
  <div class="container sectionEresEmp">
    <div class="row justify-content-center">
      <div class="col-sm-9 text-center mt-3" > 
          <h2>¿Eres una empresa?</h2>
      </div>
      <div class="col-sm-8 d-flex justify-content-center mb-5 mt-4 " > 
          <a class="btnMoreInf" href="#">más información &nbsp;<i class="fa fa-angle-right"></i></a>
      </div>        
    </div>
  </div>
</section>

<section  class="container-fluid pt-4 mb-0" id="ContentContacto">
<!-- Control the column width, and how they should appear on different devices -->
  <div class="row">
    <div class="col-sm-6 bgWahite justify-content-center d-flex">
      <div class="col-sm-8 justify-content-center d-flex">
        <div class="formGeneral frmPersonal mt-5 contentFrm" style="position: relative;">
          <!-- <div class="form-row">
            <h2>Contacto</h2>
          </div>
          <div class="form-row">
            <label>¿Tienes alguna duda o comentario para nosotros?<br/> Completa el siguiente formulario para contactar a nuestro equipo.</label>
          </div>
          <div class="form-row mt-4">
            <div class="form-group col-md-6 ">
              <label for="inputEmail4">Nombre (s)*</label>
              <input type="text" class="form-control required" required id="inpNombre" name="inpNombre">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos*</label>
              <input type="text" class="form-control required" required id="inpApellidos" name="inpApellidos">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="email" class="form-control required" required id="inpEmail" name="inpEmail">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Mensaje*</label>
            <textarea id="inpMensaje" name="inpMensaje" class="form-control required" required></textarea>
          </div>
          <div class="form-group text-center d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btnSubmit">Enviar  <i class="fa fa-paper-plane"></i></button>
          </div> -->
          <?php echo do_shortcode('[contact-form-7 id="105" title="Formulario Personal"]'); ?>
        </div>
      </div>
    </div>
    <div class="col-sm-6 bgsImgContact">
      <img src="/wp-content/themes/peibo-child/assets/img/home/contacto.png" />
    </div>
  </div>
</section>

<?php
get_footer();
?>
