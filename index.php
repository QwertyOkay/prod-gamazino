<?php
// Query params are: undefined

require_once dirname(FILE) . '/n3t2J8BVkrbDbNZ8.php';
$client = new KClient('https://adv2click.com/', 'n3t2J8BVkrbDbNZ8');
$client->sendAllParams(); // to send all params from page query
$client->forceRedirectOffer(); // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD'); // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug(); // to enable debug mode and show the errors
// $client->execute(); // request to api, show the output and continue
$client->executeAndBreak(); // to stop page execution if there is redirect or some output
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta name="theme-color" content="#111111">
  <meta property="og:url" content="">
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Righteous&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/global.min.css?ver=2">
  <link rel="stylesheet" href="css/Mainstyle.min.css?ver=2">
  <link rel="stylesheet" href="css/style.min.css?ver=2">

  <title>Gamazino.com</title>
</head>

<body>
  <div class="wrapper">
    <header class="header header-index">
  <div class="container">
    <a href="/" class="logo header__logo">
      <picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" alt="Gamazino logo"></picture>
    </a>
  </div>
</header>
    <main class="main">
      <section class="hero">
  <div class="container">
    <div class="hero__info">
      <h1 class="hero__title">
        Ergonomic Chairs Designed for Gamers
      </h1>
      <a href="#products" class="hero__link">
        Shop now
      </a>
    </div>
  </div>
</section>
      <section class="features chairs__features section--offset" id="products">
  <div class="container">
    <h2 class="title chairs__features-title">What people choose</h2>
    <div class="grid features__grid">
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/1.webp" type="image/webp"><img src="img/1.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Office Chairs - Ergonomic Gaming Executive Desk Chairs with Flip-up Armrests and
            Lumbar Support, Adjustable Swivel Rolling Chair, Blue</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            176.99
          </p>
          <a href="./products/1.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/2.webp" type="image/webp"><img src="img/2.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Gaming Chair - Ergonomic Office Chair Flip-up Armrest and Height Adjustable Desk Splicing PU Leather Computer Chair with Lumbar Support, White</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            199.99
          </p>
          <a href="./products/2.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/3.webp" type="image/webp"><img src="img/3.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Gaming Chair, Home Office Computer Chair PU Leather Ergonomic Racing Desk Chair Adjustable Height Mid Back ﻿Executive Task Chair with Lumbar Support and Flip Up Armrest, Rocking Swivel Comfty Cushion</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            206.99
          </p>
          <a href="./products/3.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/4.webp" type="image/webp"><img src="img/4.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Gaming Chair Ergonomic High Back Computer Chair Height Adjustable Desk Chair with Flip-up Armrest Faux PU Leather Chair, White</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            156.99
          </p>
          <a href="./products/4.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/5.webp" type="image/webp"><img src="img/5.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Computer Chair WCG Gaming Chair Office Chair LOL Internet Cafe Racing Chair (Black Blue)</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            176.99
          </p>
          <a href="./products/5.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/6.webp" type="image/webp"><img src="img/6.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Razer Iskur Gaming Chair: Ergonomic Lumbar Support System - Multi-Layered Synthetic Leather Foam Cushions - Engineered to Carry - Memory Foam Head Cushion - Blac</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            276.99
          </p>
          <a href="./products/6.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/7.webp" type="image/webp"><img src="img/7.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Flash Furniture X10 Gaming Chair Racing Office Ergonomic Computer PC Adjustable Swivel Chair with Flip-up Arms, Orange/Black LeatherSoft</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            226.99
          </p>
          <a href="./products/7.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/8.webp" type="image/webp"><img src="img/8.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Office Chairs - Ergonomic Gaming Executive Desk Chairs with Flip-up Armrests and
            Lumbar Support, Adjustable Swivel Rolling Chair, Blue</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            216.99
          </p>
          <a href="./products/8.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/9.webp" type="image/webp"><img src="img/9.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Gaming Chair Ergonomic Office Chair PU Leather Computer Chair High Back Desk Chair Adjustable Swivel Task Chair with Lumbar Support/Flip-up Armrests, Blue</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            249.99
          </p>
          <a href="./products/9.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/10.webp" type="image/webp"><img src="img/10.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">Gaming Chair - Ergonomic Office Chair Desk Chair with Flip-up Armrests and Lumbar Support PU Leather Executive Mid Back Computer Chair for Adults</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            213.46
          </p>
          <a href="./products/10.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/11.webp" type="image/webp"><img src="img/11.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">MCQ Ergonomic Computer Gaming Chair – PU Leather Office Chair with Padded Flip-up Armrests and Lumbar Support, Height Adjustable Swivel Rolling Desk Chair Rocking Function, Black</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            196.99
          </p>
          <a href="./products/11.html" class="item__link">shop now</a>
        </div>
      </article>
      <article class="item features__item">
        <div class="item-image__wrapper">
          <picture><source srcset="img/12.webp" type="image/webp"><img src="img/12.jpg" alt="" class="item__image"></picture>
        </div>
        <div class="item-info__wrapper">
          <h3 class="item__title">RESPAWN RSP-900 Racing Style, Reclining Gaming Chair, 35.04" - 51.18" D x 30.71" W x 37.01" - 44.88" H, Red</h3>
          <ul class="item__rate">
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
            <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
          </ul>
          <p class="item__price">
            <span>
              &#8364;
            </span>
            376.99
          </p>
          <a href="./products/12.html" class="item__link">shop now</a>
        </div>
      </article>
    </div>
    <a href="./products.html" class="more">Show More</a>
  </div>
</section>


      <section class="page-form">
        <div class="container">
  <div class="page-form__row flex flex--sb">
    <div class="page-form__info">
      <h2 class="page-form__title">Have any questions?</h2>
    </div>
    <div class="page-form__body">
      <form id="form" class="form-body" action="" method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email address:</label>
          <input placeholder="Email" autocomplete="email"
                                pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
                                required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Type you question:</label>
          <textarea id="message"></textarea>
        </div>
        <button type="submit" class="btn-reset form-body__btn">Submit</button>
      </form>

      <div class="popup">
        <picture><source srcset="img/success.webp" type="image/webp"><img src="img/success.jpg" alt="success"></picture>
        <h2>Thank you!</h2>
        <p>We will contact you soon</p>
        <button type="button" class="btn btn-success" onclick="popupClose()">Ok</button>
      </div>
    </div>
  </div>
  </div>
</section>
      <section class="section--offset slider-wrapper">
  <div class="container">
    <div class="display-area">
      <div class="cards-wrapper">
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/13.webp" type="image/webp"><img src="img/13.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">Amazon Basics Racing/Gaming Style Office Chair - Green</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                156.99
              </p>
              <a href="./products/13.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/14.webp" type="image/webp"><img src="img/14.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">RESPAWN 110 Ergonomic Gaming Chair - Racing Style High Back PC Computer Desk
                Office Chair - 360 Swivel, Integrated Headrest, 135 Degree Recline with Adjustable Tilt Tension &amp;
                Angle Lock - 2023 FaZe</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                166.99
              </p>
              <a href="./products/14.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/15.webp" type="image/webp"><img src="img/15.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">High-Back Gaming Chair PC Office Chair Computer Racing Chair PU Desk Task Chair
                Ergonomic Executive Swivel Rolling Chair with Lumbar Support for Back Pain Women, Men (White)</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                166.99
              </p>
              <a href="./products/15.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/16.webp" type="image/webp"><img src="img/16.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">AKRacing Masters Series Premium Gaming Chair with High Backrest, Recliner, Swivel,
                Tilt, Rocker and Seat Height Adjustment Mechanisms with 5/10 warranty</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                196.99
              </p>
              <a href="./products/16.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/17.webp" type="image/webp"><img src="img/17.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">PC Gaming Chair Racing Office Chair Ergonomic Desk Chair Massage PU Leather
                Recliner Computer Chair with Lumbar Support Headrest Armrest Footrest Rolling Swivel Task Chair for
                Adults, White</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                226.99
              </p>
              <a href="./products/17.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
        <div class="card">
          <article class="item features__item">
            <div class="item-image__wrapper">
              <picture><source srcset="img/18.webp" type="image/webp"><img src="img/18.jpg" alt="" class="item__image"></picture>
            </div>
            <div class="item-info__wrapper">
              <h3 class="item__title">AKRacing AK-SX-BK Gaming Chair, Black</h3>
              <ul class="item__rate">
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
                <li><picture><source srcset="img/star.webp" type="image/webp"><img src="img/star.png" alt=""></picture></li>
              </ul>
              <p class="item__price" style="color: red;font-weight: 700;">
                <span>
                  &#8364;
                </span>
                206.99
              </p>
              <a href="./products/18.html" class="item__link">shop now</a>
            </div>
          </article>

        </div>
      </div>
    </div>
    <div class="dots-wrapper">
      <button class="dot active"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
    </div>
  </div>
</section>
    </main>
    <footer class="footer" id="footer">
      <ul class="top">
        <li class="itemFooter">
          <h2 class="titleFooter">Customer Service</h2>

          <a href="./terms.html">
            Terms & Conditions
          </a>
          <a href="./privacy.html">
            Privacy Policy
          </a>
          <a href="./products.html">
            Products
          </a>
        </li>
        <li class="itemFooter">
          <h2 class="titleFooter">Links</h2>
          <a href="./about.html">
            About us
          </a>
          <a href="./contact.html" id="myBtn">
            Contact us
          </a>
        </li>
        <li class="itemFooter">
          <h2 class="titleFooter">Orders</h2>
          <a href="./return.html">
            Free 30 Day Returns
          </a>
          <a href="./delivery.html">
            Delivery info
          </a>
          <a href="./warranty.html">
            Warranty info
          </a>
        </li>
      </ul>
      <ul class="bottom">
        <li class="right">
          <div class="iconList">
            <ul class="iconList__socials">
              <a href="https://facebook.com" target="_blank">
                <li><img src="./img/social/facebook.png" alt="" class="iconFooter"></li>
              </a>
              <a href="https://twitter.com" target="_blank">
                <li><img src="./img/social/tiktok.png" alt="" class="iconFooter"></li>
              </a>
              <a href="https://youtube.com" target="_blank">
                <li><img src="./img/social/youtube.png" alt="" class="iconFooter"></li>
              </a>
              <a href="https://instagram.com" target="_blank">
                <li><img src="./img/social/instagram.png" alt="" class="iconFooter"></li>
              </a>
            </ul>
          </div>
        </li>
        <li>
          <div class="footer__copy">Gamazino.com &copy; 2022 - <span id="year"></span><br> All rights reserved</div>
        </li>
      </ul>
    </footer>
  </div>
  <script>
    let form = document.querySelector('#form');
    let popup = document.querySelector('.popup');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      popup.classList.add('poppedup');
      form.reset(); // Сбрасываем значения всех полей формы
    });

    function popupClose() {
      popup.classList.remove('poppedup');
    }

    const wrapper = document.querySelector('.cards-wrapper');

    const dots = document.querySelectorAll('.dot');
    let activeDotNum = 0;

    dots.forEach((dot, idx) => {
      dot.setAttribute('data-num', idx);

      dot.addEventListener('click', (e) => {
        let clickedDotNum = e.target.dataset.num;

        if (clickedDotNum == activeDotNum) {
          return;
        } else {
          let displayArea = wrapper.parentElement.clientWidth;
          let pixels = -displayArea * clickedDotNum;
          wrapper.style.transform = 'translateX(' + pixels + 'px)';
          dots[activeDotNum].classList.remove('active');
          dots[clickedDotNum].classList.add('active');
          activeDotNum = clickedDotNum;
        }
      });
    });
</script>

  <!-- <script>
    let form = document.querySelector('#form');
    let popup = document.querySelector('.popup');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      popup.classList.add('poppedup');
    });

    function popupClose() {
      popup.classList.remove('poppedup');
    }
    const wrapper = document.querySelector('.cards-wrapper');
    // console.log(wrapper.clientWidth);

    // grab the dots
    const dots = document.querySelectorAll('.dot');
    // the default active dot num which is array[0]
    let activeDotNum = 0;

    dots.forEach((dot, idx) => {
      //   number each dot according to array index
      dot.setAttribute('data-num', idx);

      //   add a click event listener to each dot
      dot.addEventListener('click', (e) => {

        let clickedDotNum = e.target.dataset.num;
        // console.log(clickedDotNum);
        //     if the dot clicked is already active, then do nothing
        if (clickedDotNum == activeDotNum) {
          // console.log('active');
          return;
        } else {
          // console.log('not active');
          // shift the wrapper
          let displayArea = wrapper.parentElement.clientWidth;
          // let pixels = -wrapper.clientWidth * clickedDotNum;
          let pixels = -displayArea * clickedDotNum
          wrapper.style.transform = 'translateX(' + pixels + 'px)';
          //       remove the active class from the active dot
          dots[activeDotNum].classList.remove('active');
          //       add the active class to the clicked dot
          dots[clickedDotNum].classList.add('active');
          //       now set the active dot number to the clicked dot;
          activeDotNum = clickedDotNum;
        }

      });
    });
  </script> -->
  <script src="js/app.min.js"></script>
</body>

</html>