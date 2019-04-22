<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ThemeAsset;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\View;

$assets = ThemeAsset::register($this);

$this->registerJs('
  $("#contact-form").validate({
    submitHandler: function(form) {
      $(form).ajaxSubmit({
        dataType: "json",
        success: function(response, statusText, xhr, $form) {
          if( response.success == true ) {
              $(".contact-form .request").slideUp();
              $(".contact-form .response").slideDown();
          }
        }
      });
    }
  });
', View::POS_READY);

?>

<div class="Home" id="home">
  <div class="container-fluid">
    <div class="row banner-main banner">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-2">
            <?= Html::img($assets->baseUrl.'/img/logo.png', ['class' => 'img-responsive', 'alt' => 'CheckHotel Logo']); ?>
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

    <?php if( !empty($banners) ): ?>
      <div class="row">
        <div class="col-sm-12 px-0">
          <div class="slider-pro" id="home-one">
            <div class="sp-slides">
              <?php foreach($banners as $banner): ?>
                <div class="sp-slide">
                  <?= Html::img(['/file', 'id' => $banner->file_id], [
                              'class' => 'sp-image',
                              'data-small' => Url::to(['/file', 'id' => $banner->file2_id]),
                              'data-default' => Url::to(['/file', 'id' => $banner->file_id]),
                              'data-retina' => Url::to(['/file', 'id' => $banner->file_id]),
                              'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;'
                      ]); ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row services" id="services">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="content">
          <?= Html::img($assets->baseUrl.'/img/reservaciones.png', ['class' => 'img-responsive mr-4', 'alt' => 'CheckHotel Reservaciones']); ?>
          <div class="item">
            <h2>RESERVACIONES DE HOTELES</h2>
            <p>
              Agentes de Viajes, les ofrecemos una extensa variedad en Hotelería Nacional e Internacional,
              ¡contando con reservas de último minuto! De igual manera, para tu comodidad y la de tus clientes,
              ¡ya puedes realizar pagos con Tarjeta de crédito!
            </p>
          </div>
        </div>
        <div class="content">
          <div class="item text-right">
            <h2>TOURS Y TRASLADOS</h2>
            <p>
              Contamos con varios Tours a nivel Nacional, Parques temáticos y Traslados en diferentes ciudades.
              Esto con el beneficio de ofrecer un servicio más completo para tus clientes en sus distintos viajes.
            </p>
          </div>
          <?= Html::img($assets->baseUrl.'/img/nacional-internacional.png', ['class' => 'img-responsive ml-4', 'alt' => 'CheckHotel Nacional e Internacional']); ?>
        </div>
        <div class="content">
          <?= Html::img($assets->baseUrl.'/img/transporte.png', ['class' => 'img-responsive mr-4', 'alt' => 'CheckHotel Transporte']); ?>
          <div class="item">
            <h2>BAJAFERRIES</h2>
            <p>
              Somos el Operador Mayorista autorizado por Bajaferries para la venta de su boletaje en pasajes,
              cabinas y transportación de autos (no comerciales). Sobre las tarifas públicas te comisionamos,
              así que !no es necesario aumentar su precio!
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php if( !empty($specials) ): ?>
    <div class="row offer" id="specials">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title-default">PROMOCIONES</h2>
        <div id="home-two">
          <div class="slider-pro desktop hidden-xs">
            <div class="sp-slides">
              <?php foreach($specials as $special): ?>
                <div class="sp-slide">
                  <?= Html::img(['/file', 'id' => $special->file_id], [
                              'class' => 'sp-image',
                              'data-default' => Url::to(['/file', 'id' => $special->file_id]),
                              'data-retina' => Url::to(['/file', 'id' => $special->file_id]),
                              'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;'
                      ]); ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="slider-pro mobile visible-xs">
            <div class="sp-slides">
              <?php foreach($specials as $special): ?>
                <div class="sp-slide">
                  <?= Html::img(['/file', 'id' => $special->file2_id], [
                              'class' => 'sp-image',
                              'data-default' => Url::to(['/file', 'id' => $special->file2_id]),
                              'data-retina' => Url::to(['/file', 'id' => $special->file2_id]),
                              'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;'
                      ]); ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="row providers" id="providers">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-default">NUESTROS PROVEEDORES</h2>
        <div class="row owl-carousel owl-theme">
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-1.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-2.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-3.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-4.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-5.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-6.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-7.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-8.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-9.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-10.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-11.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-12.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-13.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-14.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-15.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-16.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-17.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-18.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-19.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-20.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-21.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-22.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-23.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-24.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-25.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-26.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-27.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-28.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-29.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-30.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-31.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-32.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-33.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-34.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-35.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-36.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-37.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-38.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-39.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-40.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-41.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-42.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-43.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-44.png', ['alt' => 'Check Hotel']); ?>
          </div>
          <div class="col-sm-12 item">
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-45.png', ['alt' => 'Check Hotel']); ?>
            <?= Html::img($assets->baseUrl.'/img/proveedores/logos-hotel-46.png', ['alt' => 'Check Hotel']); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row about" id="about">
      <div class="col-md-12 col-lg-7 item">
        <h1 class="title-default">	¿QUIÉNES SOMOS?</h1>
        <p>
          Iniciamos labores en el 2013 desde esta hermosa Perla del Pacífico: Mazatlán, Sinaloa.
          Nuestro inicio se impulsa por retos propios y por ese gusto en la atención hacia ustedes,
          nuestros Agentes de Viajes. Brindamos nuestra labor con servicio y amistad a todos ustedes
          para mantener una relación fuerte y de confianza. Nuestras frases, "Somos Fans #1 de los
          viajeros" y "A hospedar", nos acompañan en este trayecto seguido con sus clientes.
        </p>
      </div>
      <div class="col-md-12 col-lg-5 px-0">
        <?= Html::img($assets->baseUrl.'/img/nosotros.png', ['class' => 'w-100', 'alt' => 'CheckHotel Nosotros']); ?>
      </div>
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
                <!--
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
                </form>-->

                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'enableClientScript' => false, 'action' => ['site/contact']]); ?>

                  <?= $form->field($contact, 'name', ['inputOptions' => ['required' => 'required']])->textInput(['placeholder' => $contact->getAttributeLabel('name')])->label(false); ?>

                  <?= $form->field($contact, 'email', [
                                                    'inputOptions' => [
                                                                      'required' => 'required',
                                                                      'placeholder' => $contact->getAttributeLabel('email')
                                                                  ]
                                                ])->label(false); ?>


                  <?= $form->field($contact, 'body', ['inputOptions' => ['required' => 'required']])->textarea(['rows' => 10, 'placeholder' => $contact->getAttributeLabel('body')])->label(false); ?>
                  <div class="g-recaptcha my-5" data-sitekey="6LdM-JwUAAAAANTaH6c2PoraGCIWMGyxxiGiI0zB"></div>
                  <div class="form-group">
                      <?= Html::submitButton('ENVIAR', ['class' => 'btn btn-link', 'id' => 'contact-button']) ?>
                  </div>

                <?php ActiveForm::end(); ?>

                <div class="social-share"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google-plus-g"></i></a></div>
              </div>
              <div class="response col-xs-12" style="display:none;">
                <h2>GRACIAS POR <span>CONTACTARNOS</span></h2>
                <p>Te responderemos lo antes posible</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <h3>RESERVACIONES:</h3>
            <a href="mailto:reservascheckhotel@hotmail.com">reservascheckhotel@hotmail.com</a><br>
            <a href="mailto:reservas1checkhotel@hotmail.com">reservas1checkhotel@hotmail.com</a>
            <h3>GRUPOS:</h3><a href="mailto:gruposcheckhotel@hotmail.com">gruposcheckhotel@hotmail.com <br></a><a href="mailto:grupos1checkhotel@hotmail.com">grupos1checkhotel@hotmail.com</a>
            <h3>OPERACIONES:</h3><a href="mailto:operacheckhotel@hotmail.com">operacheckhotel@hotmail.com</a>
            <h3>ADMINISTRACIÓN:</h3><a href="mailto:admoncheckhotel@hotmail.com">admoncheckhotel@hotmail.com</a>
            <h3>GERENCIA GENERAL:</h3><a href="mailto:gerenciacheckhotel@hotmail.com">gerenciacheckhotel@hotmail.com</a>
            <?= Html::img($assets->baseUrl.'/img/logo-footer.png', ['class' => 'img-responsive mt-5', 'alt' => 'CheckHotel Logo', 'style' => 'width:150px']); ?>
            <div class="arrow">
              <?= Html::img($assets->baseUrl.'/img/arrow-footer.png', ['class' => 'img-responsive', 'alt' => 'CheckHotel Logo', 'style' => 'height:500px']); ?>

            </div>
          </div>
        </div>
  </div>
</div>
