<?php
    include 'header.php';

?>
    <!-- Product page -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-4" id="resize-left">
                <img src="https://ubistatic19-a.akamaihd.net/resource/en-us/game/far-cry/far-cry-5/fc_main-og-share-image_ncsa.jpg" width="500"
                    height="300">
            </div>
            <div class="col">
                <h1 style="float: left">Far Cry 5</h1>
                <br>
                <br>
                <br>
                <button class="button-tag">Adventure</button>
                <button class="button-tag">Action</button>
                <button class="button-tag">FPS</button>
                <button class="button-tag">Open world</button>
                <br>
                <br>
                <ion-icon size="large" name="logo-windows"></ion-icon>
                <ion-icon size="large" name="logo-xbox"></ion-icon>
                <ion-icon size="large" name="logo-playstation"></ion-icon>
                <br>
                <br>
                <h3>18,99$</h3>
                <form action="#" method="POST" style="display: inline-block;">
                    <button type="submit" class="button" name="add-cart-fc">Add to cart</button>
                    <?php if (isset($_SESSION['item-just-added']) && $_SESSION['item-just-added'] === true) : ?>
                        <p style="color: var(--success)">Item has been added to the cart.</p>
                    <?php
                        unset($_SESSION['item-just-added']);
                        endif;
                    ?>
                </form>
                <button class="button">Rent it</button>
                <button class="button" style="float:right; margin-right: 30px">Add to whislist</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
                <ion-icon size="large" name="arrow-round-back"></ion-icon>
                <img src="https://wallpapersite.com/images/wallpapers/far-cry-5-4500x2574-artwork-hd-7642.jpg" width="200" height="100">
                <img src="https://game77.ru/upload/iblock/732/farcry_5_game77.ru_1.jpg" width="200" height="100">
                <img src="https://i.ytimg.com/vi/T_0zmDsonN4/maxresdefault.jpg" width="200" height="100">
                <img src="https://www.pcgamesn.com/sites/default/files/far%20cry%205%20co-op%20head.jpg" width="200" height="100">
                <ion-icon size="large" name="arrow-round-forward"></ion-icon>
            </div>
        </div>
        <div class="row">
            <div class="col" style=" margin-left:5%;">
                <br>
                <h2>Description</h2>
                <h6>
                    <p>Far Cry comes to America in the latest installment of the award-winning franchise.
                        <br>
                        <p>Welcome to Hope County, Montana, land of the free and the brave but also home to a fanatical doomsday
                            cult known as Eden’s Gate. Stand up to cult leader Joseph Seed, and his siblings, the Heralds,
                            to spark the fires of resistance and liberate the besieged community.
                            <br>
                            <p>FIGHT AGAINST A DEADLY CULT
                                <br> Free Hope County in solo or two-player co-op. Recruit Guns and Fangs for hire to help defeat
                                the cult.
                                <br>
                                <p>A WORLD THAT HITS BACK
                                    <br> Wreak havoc on the cult and its members but beware of the wrath of Joseph Seed and his
                                    followers.
                                    <br>
                                    <p>CARVE YOUR OWN PATH
                                        <br> Build your character and choose your adventure in the largest customizable Far Cry
                                        game ever!
                                        <br>
                                        <p>DYNAMIC TOYS
                                            <br> Take control of iconic muscle cars, ATV's, planes and a lot more to engage the
                                            cult forces in epic fights.
                                            <br>
                                            <p>RE-DEFINED STEALTH MECHANICS
                                                <br> Enhance your gameplay with eye tracking. Tag enemies by looking at them
                                                to increase your stealth skills and help your teammates spot threats. Compatible
                                                with all Tobii Eye Tracking gaming devices.</p>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="col" style=" margin-left:5%;">
                <br>
                <h2>System Requirements</h2>
            </div>
        </div>
        <div class="row">
            <div class="col" style=" margin-left:5%;">
                <br> MINIMUM:
                <br> Requires a 64-bit processor and operating system
                <br> OS: Windows 7 SP1, Windows 8.1, Windows 10 (64-bit versions only)
                <br> Processor: Intel Core i5-2400 @ 3.1 GHz or AMD FX-6300 @ 3.5 GHz or equivalent
                <br> Memory: 8 GB RAM
                <br> Graphics: NVIDIA GeForce GTX 670 or AMD R9 270 (2GB VRAM with Shader Model 5.0 or better)
                <br> DirectX: Version 9.0c
                <br> Network: Broadband Internet connection
                <br> Storage: 40 GB available space
                <br>
            </div>
            <div class="col" style=" margin-left:5%;">
                <br> RECOMMENDED:
                <br> Requires a 64-bit processor and operating system
                <br> OS: Windows 7 SP1, Windows 8.1, Windows 10 (64-bit versions only)
                <br> Processor: Intel Core i7-4770 @ 3.4 GHz or AMD Ryzen 5 1600 @ 3.2 GHz or equivalent
                <br> Memory: 8 GB RAM
                <br> Graphics: NVIDIA GeForce GTX 970 or AMD R9 290X (4GB VRAM with Shader Model 5.0 or better)
                <br> DirectX: Version 9.0c
                <br> Network: Broadband Internet connection
                <br> Storage: 40 GB available space
                <br>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>