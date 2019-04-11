<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);

?>

<div class="Home" id="home">
  <div class="container-fluid">
    <div class="row banner-main banner">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-2"><img class="img-responsive" src="assets/img/logo.png" alt="CheckHotel Logo">
            <form id="login-form" action="https://www.reservenlinea.com/auth/login" method="post">
              <input id="language" type="hidden" name="language" value="es">
              <div class="form-group">
                <label>USUARIO</label>
                <input class="form-control" id="usuario" type="text" name="usuario" onkeypress="hideAlert()" required>
              </div>
              <div class="form-group">
                <label>CONTRASEÑA</label>
                <input class="form-control" id="password" type="password" name="password" onkeypress="hideAlert()" required>
              </div>
              <div id="invalid-user"><span id="failed-login">Usuario o Contrase&ntilde;a Invalido</span></div>
              <button class="btn btn-default" id="submit-button" type="submit">ENTRAR</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 px-0">
        <div class="slider-pro" id="home-one">
          <div class="sp-slides">
            <div class="sp-slide"><img class="sp-image" data-small="assets/img/slider-one-mobil.png" data-default="assets/img/slider-one.png" data-retina="assets/img/slider-one.png" src="assets/img/slider-one.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
            <div class="sp-slide"><img class="sp-image" data-small="assets/img/slider-one-mobil.png" data-default="assets/img/slider-one.png" data-retina="assets/img/slider-one.png" src="assets/img/slider-one.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
            <div class="sp-slide"><img class="sp-image" data-small="assets/img/slider-one-mobil.png" data-default="assets/img/slider-one.png" data-retina="assets/img/slider-one.png" src="assets/img/slider-one.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row services" id="services">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="content"><img class="img-responsive mr-4" src="assets/img/reservaciones.png" alt="CheckHotel Reservaciones">
          <div class="item">
            <h2>RESERVACIONES</h2>
            <p>Te ofrecemos los precios más económicos en las mejores cadenas hoteleras en <br>
              México y en el mundo.
            </p>
          </div>
        </div>
        <div class="content">
          <div class="item text-right">
            <h2>NACIONAL E INTERNACIONAL</h2>
            <p>Las mejores tarifas de TOUR, hospedajes nacionales e internacionales</p>
          </div><img class="img-responsive ml-4" src="assets/img/nacional-internacional.png" alt="CheckHotel Nacional e Internacional">
        </div>
        <div class="content"><img class="img-responsive mr-4" src="assets/img/transporte.png" alt="CheckHotel Transporte">
          <div class="item">
            <h2>TRANSPORTE</h2>
            <p>Adquiere los servicios para transporte y renta de vehículos y autobuses, disfruta <br>
              de unas vacaciones placenteras con nuestra más moderna flota
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row offer" id="specials">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title-default">PROMOCIONES</h2>
        <div id="home-two">
          <div class="slider-pro desktop hidden-xs">
            <div class="sp-slides">
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/slider-two.jpg" data-retina="assets/img/slider-two.jpg" src="assets/img/slider-two.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/slider-two.jpg" data-retina="assets/img/slider-two.jpg" src="assets/img/slider-two.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/slider-two.jpg" data-retina="assets/img/slider-two.jpg" src="assets/img/slider-two.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
            </div>
          </div>
          <div class="slider-pro mobile visible-xs">
            <div class="sp-slides">
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/promos-movil.png" data-retina="assets/img/promos-movil.png" src="assets/img/promos-movil.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/promos-movil.png" data-retina="assets/img/promos-movil.png" src="assets/img/promos-movil.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
              <div class="sp-slide"><img class="sp-image" data-default="assets/img/promos-movil.png" data-retina="assets/img/promos-movil.png" src="assets/img/promos-movil.png" style="width: 100%; height: auto; margin-left: 0px; margin-top: -70px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row providers" id="providers">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-default">NUESTROS PROVEEDORES</h2>
        <div class="row owl-carousel owl-theme">
          <div class="col-sm-12 item"><img src="assets/img/hotel1.png" alt="Check Hotel"></div>
          <div class="col-sm-12 item"><img src="assets/img/hotel2.png" alt="Check Hotel"></div>
          <div class="col-sm-12 item"><img src="assets/img/hotel3.png" alt="Check Hotel"></div>
          <div class="col-sm-12 item"><img src="assets/img/hotel4.png" alt="Check Hotel"></div>
          <div class="col-sm-12 item"><img src="assets/img/hotel5.png" alt="Check Hotel"></div>
          <div class="col-sm-12 item"><img src="assets/img/hotel6.png" alt="Check Hotel"></div>
        </div>
      </div>
    </div>
    <div class="row about" id="about">
      <div class="col-md-12 col-lg-7 item">
        <h1 class="title-default">	¿QUIENES SOMOS?</h1>
        <p>
          Somos una Operadora Mayorista Nacional y nuestros
          principales socios comerciales son los Hoteles y
          Agencias de viajes. Manejamos precios con descuentos y
          comsiones especiales dependiendo del cliente. Puedes
          cotizar tu hospedaje con los mejores precios, solo dirígete
          con nosotros!
        </p>
      </div>
      <div class="col-md-12 col-lg-5 px-0"><img class="w-100" src="assets/img/nosotros.png" alt=""></div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-6 col-sm-offset-2">
        <div class="contact">
          <h3>DIRECCIÓN</h3>
          <div class="social"><a href="">Diego María Rivera #62 Col. Villa Verde Mazatlán, Sinaloa</a><span>Tel (669)</span><a href="tel:669 1196510">1196510 /</a><a href="tel:669 1196511">1196511 /</a><a href="tel:669 1196515">1196515 /</a><a href="tel:669 1194003">1194003 /</a></div>
        </div>
        <hr>
      </div>
    </div>
    <div class="row contact-form">
          <div class="col-sm-5 col-sm-offset-2">
            <div class="row">
              <div class="request col-xs-12">
                <h2>CONTACTO <span>ESCRÍBENOS</span></h2>
                <form id="contact" action="send.php" method="post">
                  <div class="form-group">
                    <input class="form-control input-default" type="text" placeholder="Nombre" name="name" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control input-default" type="text" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group mb-5">
                    <textarea class="form-control input-default" name="body" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                  </div>
                  <div class="g-recaptcha my-5" data-sitekey="6LdM-JwUAAAAANTaH6c2PoraGCIWMGyxxiGiI0zB"></div>
                  <button class="btn btn-link" type="submit">ENVIAR</button>
                </form>
                <div class="social-share"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google-plus-g"></i></a></div>
              </div>
              <div class="response col-xs-12" style="display:none;">
                <h2>GRACIAS POR <span>CONTACTARNOS</span></h2>
                <p>Te responderemos lo antes posible</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <h3>RESERVACIONES:</h3><a href="mailto:reservascheckhotel@hotmail.com">reservascheckhotel@hotmail.com</a>
            <h3>GRUPOS:</h3><a href="mailto:gruposcheckhotel@hotmail.com">gruposcheckhotel@hotmail.com <br></a><a href="mailto:gruposcheckhotel1@hotmail.com">gruposcheckhotel1@hotmail.com</a>
            <h3>OPERACIONES:</h3><a href="mailto:operacheckhotel@hotmail.com">operacheckhotel@hotmail.com</a>
            <h3>ADMINISTRACIÓN:</h3><a href="mailto:admoncheckhotel@hotmail.com">admoncheckhotel@hotmail.com</a>
            <h3>GERENCIA GENERAL:</h3><a href="mailto:gerenciacheckhotel@hotmail.com">gerenciacheckhotel@hotmail.com</a><img class="img-responsive mt-5" src="assets/img/logo-footer.png" alt="CheckHotel Logo" style="width:150px;">
            <div class="arrow"><img class="img-responsive" src="assets/img/arrow-footer.png" alt="CheckHotel Logo" style="height:500px;"></div>
          </div>
        </div>
  </div>
</div>
