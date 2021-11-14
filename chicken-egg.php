<!DOCTYPE html>
<html>

<head>
  <meta name="description" content="Jual LCD Interactive Whiteboard, LCD Video Wall, Stand Alone, Kiosk, LCD Wallmount, LED Videotron Indoor & Outdoor, Webcam" />
  <meta name="keywords" content="HPF Digital Poster Signage | Spesifikasi LCD Interactive Whiteboard, LCD Video Wall, Stand Alone, Kiosk, LCD Wallmount, LED Videotron Indoor & Outdoor, Webcam" />
  <meta name="author" content="PT.SINAROZORA LESTARI" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Chicken Egg | Supplier-Exportir</title>
  <link rel="shortcut icon" href="img/kelapa/8.jpeg" />
  <link rel="stylesheet" href="css/main.css" type="text/css" />
  <link rel="stylesheet" href="css/submain.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
  <script src="js/ScrollTriggerAnim.js"></script>
  <script>
    $(function() {
      $("img").bind("contextmenu", function(e) {
        return false;
      });
    }); //]]>
  </script>
</head>

<body>
  <header2 style="position: sticky">
    <div id="headcell2">
      <div style="opacity: 1" class="logo">
        <button class="whatsapp">Whatsapp US</button>
      </div>
    </div>
    <div id="headcell2" class="cf">
      <ul style="clear: both">
        <?php $active = ['op', 'egg'];
        include './partials/menu.php' ?>
      </ul>
    </div>
  </header2>

  <div id="slider" class="hero-konten">
    <img src="img/blog/poster/header.png" class="img" style="width: 100%; height: auto" />
    <p class="slide1">Chicken Egg</p>
    <p class="slide2" style="width: 35%">
      Description of this page, example : Lorem ipsum dolor, sit amet
      consectetur adipisicing elit. Beatae inventore esse dolore asperiores
      quas, tempora corrupti quasi velit praesentium officia architecto ullam
      iure ab dolorum.
    </p>
    <img class="slide" src="img/kelapa/egg(2).jpeg" style="
          top: 10%;
          margin-left: 15%;
          width: 27%;
          border-radius: 5% 5% 5% 5%;
        " />
  </div>

  <div class="margin-y">
    <div id="feature">
      <h1 class="anim" data-animation="fadeInDown" data-timeout="400" style="text-align: center">
        Latest Uploads
      </h1>
      <div class="flex-gallery">
        <a href="img/kelapa/egg(2).jpeg" class="progressive replace"><img src="img/kelapa/egg(2).jpeg" alt="" class="preview" /></a><a href="img/kelapa/egg(3).jpeg" class="progressive replace"><img src="img/kelapa/egg(3).jpeg" alt="" class="preview" /></a><a href="img/kelapa/egg(4).jpeg" class="progressive replace"><img src="img/kelapa/egg(4).jpeg" alt="" class="preview" /></a>
      </div>
    </div>
  </div>

  <div id="wrapper" style="font-family: Arial, Helvetica, sans-serif">
    <div id="konten" style="width: 70%">
      <div class="clear"></div>
      <div class="margin-y">
        <h1 class="anim" data-animation="fadeInDown" data-timeout="400" style="text-align: center; color: red">
          Documentation
        </h1>
        <div id="documentation" style="width: 90%; margin: 3% auto 1% auto; text-align: center">
          <?php
          $hideItem = 'egg';
          include './partials/documentation.php' ?>
        </div>
      </div>
    </div>

    <?php include './partials/footer.php' ?>

  </div>
  <script src="./js/myscript.js"></script>
</body>

</html>