<?php
    include 'header.php';

?>
    <!-- Landing page -->
    <div class="container">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- copy row for more slides -->
              <div class="row">
                <div class="col">
                    <ion-icon name="arrow-back"></ion-icon>
                    <ion-icon name="arrow-forward"></ion-icon>
                    <h4> Featured & Recomended</h4>
                </div>
                <div class="col">
                    <ion-icon name="radio-button-on"></ion-icon>
                    <ion-icon name="radio-button-off"></ion-icon>
                    <ion-icon name="radio-button-off"></ion-icon>
                    <ion-icon name="radio-button-off"></ion-icon>
                    <ion-icon name="radio-button-off"></ion-icon>
                </div>
                <div class="row" style="background-color: #1c0a22">
                    <div class="col-4" id="resize-left">
                        <img src="https://ubistatic19-a.akamaihd.net/resource/en-us/game/far-cry/far-cry-5/fc_main-og-share-image_ncsa.jpg" width="500"
                            height="300">
                    </div>
                    <div class="col" id="resize-left">
                        <h3 style="float: left">Far Cry 5</h3>
                        <div class="col">
                            <h3 style="float: right">18,99$</h3>
                        </div>
                        <br>
                        <div class="col-8" style="float: right">
                            <img src="https://wallpapersite.com/images/wallpapers/far-cry-5-4500x2574-artwork-hd-7642.jpg" width="200" height="100">
                            <img src="https://game77.ru/upload/iblock/732/farcry_5_game77.ru_1.jpg" width="200" height="100">
                            <img src="https://i.ytimg.com/vi/T_0zmDsonN4/maxresdefault.jpg" width="200" height="100">
                            <img src="https://www.pcgamesn.com/sites/default/files/far%20cry%205%20co-op%20head.jpg" width="200" height="100">
                            <br>
                            <br>
                            <a class="btn button-tag" id="border" href="./product-page.php?game_id=0">Details</a>
                            <ion-icon name="logo-windows"></ion-icon>
                            <ion-icon name="logo-xbox"></ion-icon>
                            <ion-icon name="logo-playstation"></ion-icon>
                        </div>
                    </div>
                </div>
             </div>
             <!-- end of first slide -->
            </div>
            <div class="carousel-item">
              <img src="https://game77.ru/upload/iblock/732/farcry_5_game77.ru_1.jpg" width="200" height="100">
            </div>
            <div class="carousel-item">
              <img src="https://game77.ru/upload/iblock/732/farcry_5_game77.ru_1.jpg" width="200" height="100">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

    <!-- Landin Page Bottom -->

    <div class="container">
        <div class="row">
            <div class="col">
                <ion-icon name="arrow-back"></ion-icon>
                <ion-icon name="arrow-forward"></ion-icon>
                <h4> Special offers</h4>
                <a class="button-tag" href="./product-page.php?game_id=1" id="border" style="float: right">Learn more</a>
            </div>
        </div>
        <br>
        <div class="row special-offers">
            <div class="col">
                <img id="resize-left" src="https://i.pinimg.com/originals/b8/12/35/b81235a5a00e8de00ed0089ac52437e6.jpg" width="350" height="200">
                <div class="text-block">
                    Doom
                    <div class="stick-right">
                        33%
                        <a class="button-landing" href="./product-page.php?game_id=1">15,55$</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <img id="resize-left" src="http://www.codemasters.com/wp-content/uploads/2018/02/hero_onrush_2018-2.jpg" width="350" height="200">
                <div class="text-block">
                    Onrush
                    <div class="stick-right">
                        15%
                        <button class="button-landing">16,99$</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <img id="resize-left" src="https://2.bp.blogspot.com/-YOkMAxEAtZU/WNJ8LUo5zvI/AAAAAAAAArg/RJS2qmJMqakG_U2bCuHPgq0FxrXdJy60gCLcB/s1600/worlds-of-magic-planar-conquest-listing-thumb-01-ps4-us-30aug16.png"
                    width="350" height="200">
                <div class="text-block">
                    Worlds of magic
                    <br>planar conquest
                    <div class="stick-right">
                        10%
                        <button class="button-landing">26,99$</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>