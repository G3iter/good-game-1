<?php
    include 'header.php';
    include 'games_info.php';

    $game = $games[$_GET['game_id']];

    $tags = explode(', ', $game['tags']);
    $images = explode(', ', $game['images']);
    $platforms = explode(', ', $game['platforms']);
?>
    <!-- Product page -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-4" id="resize-left">
                <img src="assets/images/<?php echo $game['cover']; ?>" width="500"
                    height="300">
            </div>
            <div class="col">
                <h1 style="float: left"><?php echo $game['name']; ?></h1>
                <br>
                <br>
                <br>
                <?php foreach ($tags as $key => $tag) : ?>
                    <button class="button-tag"><?php echo $tag; ?></button>
                <?php endforeach; ?>
                
                <br>
                <br>
                    
                <?php foreach ($platforms as $key => $platform) : ?>
                    <ion-icon size="large" name="<?php echo $platform; ?>"></ion-icon>
                <?php endforeach; ?>
                <br>
                <br>
                <h3>18,99$</h3>
                <form action="#" method="POST" style="display: inline-block;">
                    <input type="hidden" name="add-cart-game" value="<?php echo $game['name']; ?>">
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
                    <?php echo $game['description']; ?>
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
                <?php echo $game['min_requirements']; ?>
            </div>
            <div class="col" style=" margin-left:5%;">
                <br> RECOMMENDED:
                <?php echo $game['rec_requirements']; ?>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>