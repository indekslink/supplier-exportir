<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="Jual LCD Interactive Whiteboard, LCD Video Wall, Stand Alone, Kiosk, LCD Wallmount, LED Videotron Indoor & Outdoor, Webcam" />
    <meta name="keywords" content="HPF Digital Poster Signage | Spesifikasi LCD Interactive Whiteboard, LCD Video Wall, Stand Alone, Kiosk, LCD Wallmount, LED Videotron Indoor & Outdoor, Webcam" />
    <meta name="author" content="PT.SINAROZORA LESTARI" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Video Gallery | Supplier-Exportir</title>
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

    <style>
        a.loading {
            cursor: progress;
            background:
                linear-gradient(0.25turn, transparent, #fff, transparent),
                linear-gradient(#eee, #eee);

            background-repeat: no-repeat;
            /* background-size: 315px 250px, 315px 180px, 100px 100px, 225px 30px; */
            background-position: -315px 0, 0 0, 0px 190px, 50px 195px;
            animation: loading 1s linear infinite;
        }

        @keyframes loading {
            to {
                background-position: 315px 0, 0 0, 0 190px, 50px 195px;
            }
        }
    </style>
</head>

<body>

    <div class="my-nav  ">
        <div class="container">
            <button class="whatsapp">Whatsapp Us</button>

            <div class="hamburger-menu">
                <span></span><span></span><span></span>
            </div>
            <ul class="my-menu">
                <?php $active = ['video'];
                include './partials/menu.php' ?>
            </ul>
        </div>
    </div>



    <div id="slider" class="hero-konten">
        <img class="img" src="https://hpf.co.id/img/blog/videotron-out/header.png" style="width: 100%; height: auto" />
        <p class="slide1">Video Gallery</p>
        <p class="slide2" style="width: 35%">
            Description of this page, example : Lorem ipsum dolor, sit amet
            consectetur adipisicing elit. Beatae inventore esse dolore asperiores
            quas, tempora corrupti quasi velit praesentium officia architecto ullam
            iure ab dolorum.
        </p>
        <img class="slide" src="img/kelapa/yt-img.png" style="
          width: 27%;
          top: 10%;
          margin-left: 15%;
          border-radius: 5% 5% 5% 5%;
        " />
    </div>

    <div class="margin-y">
        <div id="feature">
            <h1 class="anim" data-animation="fadeInDown" data-timeout="400" style="text-align: center">
                Latest Uploads
            </h1>
            <div class="flex-gallery">
                <a style="width: calc(10vw + 60vmin);height:calc(10vw + 30vmin);" href="https://www.youtube.com/embed/-fDZbkdKvSw?controls=0" class="progressive loading replace">
                    <iframe class="preview" style="width: 100%;height:100%" src="https://www.youtube.com/embed/-fDZbkdKvSw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </a>
                <a style="width: calc(10vw + 60vmin);height:calc(10vw + 30vmin);" href="https://www.youtube.com/embed/8y0s_qh_wmI?controls=0" class="progressive loading replace">
                    <iframe class="preview" style="width: 100%;height:100%" src="https://www.youtube.com/embed/8y0s_qh_wmI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </a>
                <a style="width: calc(10vw + 60vmin);height:calc(10vw + 30vmin);" href="https://www.youtube.com/embed/IlMUgEiiuVI?controls=0" class="progressive loading replace">
                    <iframe class="preview" style="width: 100%;height:100%" src="https://www.youtube.com/embed/IlMUgEiiuVI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </a>
                <a style="width: calc(10vw + 60vmin);height:calc(10vw + 30vmin);" href="https://www.youtube.com/embed/77a3uG5jOLs?controls=0" class="progressive loading replace">
                    <iframe class="preview" style="width: 100%;height:100%" src="https://www.youtube.com/embed/77a3uG5jOLs?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </a>

            </div>
        </div>
    </div>

    <div id="wrapper" style="font-family: Arial, Helvetica, sans-serif">


        <?php include './partials/footer.php' ?>
    </div>
    <script src="./js/myscript.js"></script>
</body>

</html>