
<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">

  <title>Alco Win</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


  <meta itemprop="image" content="media/share/image.jpg">
  <meta name="twitter:image" content="media/share/image.jpg">
  <meta property="og:image" content="media/share/image.jpg">

  <meta name="og:title" content="Alco Win">
  <meta name="og:description" content="Alco Win">
  <meta name="og:site_name" content="Alco Win">
  <meta name="og:type" content="product">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Alco Win">


  <meta name="format-detection" content="telephone=no">


  <meta name="twitter:card" content="Alco Win">


  <link sizes="16x16" rel="shortcut icon" type="image/png" href="images/favicon.ico">
  <link sizes="32x32" rel="icon" type="image/png" href="images/favicon.ico">
  <link sizes="192x192" rel="icon" type="image/png" href="images/favicon.ico">
  <link sizes="180x180" rel="apple-touch-icon" href="images/favicon.ico">


  <meta name="Author" content="Alco Win">

  <link rel="stylesheet" href="css/style1.css">

  <script type="text/javascript" src="js/script3.js"></script>
  <script type="text/javascript" src="js/script2.js"></script>



<?php $cms->header(); ?>
</head>


<body class="page">
  <section class="section section_face">
    <div class="container">
      <div class="face">
        <div class="face__box">
          <div class="section__title face__title lt0">Alco Win</div>
          <div class="face__subtitle lt1">Comanda azi</div>
          <div class="face__list">
            <div class="face__item lt2">Oferta speciala</div>
            <div class="face__item lt3">50% reducere</div>
            <div class="face__item lt4">Preț rezonabil</div>
          </div>
          <div class="face__product"></div>
        </div>
        <div class="face__box" method="post">
          <div class="form aos-init aos-animate" data-aos="fade-left">
            <div class="form__title lt5">Comandați Alco Win chiar acum</div>
            <div class="form__price">
              <div class="form__price-old price_old lt6">
                298 RON
              </div>
              <div class="form__price-new price_main lt7">
                149 RON
              </div>
            </div>
            <form class="form__body order_form" method="post" action="success.php"><?=$cms->params();?>>
              <label class="form__label">
                <select class="form__field form__select country_select" name="country" id="country"></select>

              </label>
              <label class="form__label"><input class="form__field" type="text" name="name" required><span class="lt104">Nume</span></label>
              <label class="form__label"><input class="form__field" type="text" name="phone" required><span class="lt105">Număr de telefon</span></label>
              <button class="form__btn lt112" type="submit">Comandați acum</button>
            </form>
            <div class="form__time">
              <div class="form__time-title lt11">Până la sfârșitul promoției au mai rămas:</div>
              <div class="form__time-box">
                <div class="form__time-count">
                  <span>00</span><span class="lt12">ore</span>
                </div><span class="lt13">:</span>
                <div class="form__time-count">
                  <span>21</span><span class="lt14">minute</span>
                </div><span class="lt15">:</span>
                <div class="form__time-count">
                  <span>51</span><span class="lt16">secunde</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="section section_job">
    <div class="container">
      <div class="job">
        <div class="section__title job__title lt86">Cum lucrăm noi?</div>
        <div class="job__body">
          <div class="job__item">
            <div class="job__media"><img alt src="images/img1.webp" loading="lazy"></div>
            <div class="job__info">
              <div class="job__subtitle">
                1.
              </div>
              <div class="job__description lt87">Lăsați o cerere pe site-ul nostru, completând formularul comenzii</div>
            </div>
          </div>
          <div class="job__item">
            <div class="job__media"><img alt src="images/img2.webp" loading="lazy"></div>
            <div class="job__info">
              <div class="job__subtitle">
                2.
              </div>
              <div class="job__description lt88">Specialistul nostru vă va suna și va plasa comanda</div>
            </div>
          </div>
          <div class="job__item">
            <div class="job__media"><img alt src="images/img3.webp" loading="lazy"></div>
            <div class="job__info">
              <div class="job__subtitle">
                3.
              </div>
              <div class="job__description lt89">Veți primi comanda prin metoda convenabilă pentru dumneavoastră</div>
            </div>
          </div>
          <div class="job__item">
            <div class="job__media"><img alt src="images/img8.webp" loading="lazy"></div>
            <div class="job__info">
              <div class="job__subtitle">
                4.
              </div>
              <div class="job__description lt90">Plătiți comanda în avans sau la primirea comenzii</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="section section_face">
    <div class="container">
      <div class="face">
        <div class="face__box">
          <div class="section__title face__title lt0">Super preț astăzi pentru Alco Win</div>
          <div class="face__subtitle lt1">comanda acum:</div>
          <div class="face__list">
            <div class="face__item lt2">Livrare rapidă</div>
            <div class="face__item lt3">Plata la primire</div>
            <div class="face__item lt4">Acceptăm comenzi 24/7</div>
          </div>
          <div class="face__product"></div>
        </div>
        <div class="face__box" method="post">
          <div class="form aos-init" data-aos="fade-left">
            <div class="form__title lt100">Comandați Alco Win chiar acum</div>
            <div class="form__price">
              <div class="form__price-old price_old lt101">
                298 RON
              </div>
              <div class="form__price-new price_main lt102">
                149 RON
              </div>
            </div>
            <form class="form__body order_form" method="post" action="success.php"><?=$cms->params();?>>
              <label class="form__label">
                <select class="form__field form__select country_select" name="country" id="country"></select>

              </label>
              <label class="form__label"><input class="form__field" type="text" name="name" required><span class="lt104">Nume</span></label>
              <label class="form__label"><input class="form__field" type="text" name="phone" required><span class="lt105">Număr de telefon</span></label>
              <button class="form__btn lt112" type="submit">Comandați acum</button>
            </form>
            <div class="form__time">
              <div class="form__time-title lt106">Până la sfârșitul promoției au mai rămas:</div>
              <div class="form__time-box">
                <div class="form__time-count">
                  <span>00</span><span class="lt107">ore</span>
                </div><span class="lt108">:</span>
                <div class="form__time-count">
                  <span>21</span><span class="lt109">minute</span>
                </div><span class="lt110">:</span>
                <div class="form__time-count">
                  <span>51</span><span class="lt111">secunde</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="section section_footer">
    <div class="container">
      <span class="lt113">Global Partners LTD</span>
    </div>
  </footer>

  <script src="js/script1.js"></script>
  <script src="js/script4.js"></script>
  <script src="js/script5.js"></script>


<?php $cms->footer(); ?>
</body>


</html>