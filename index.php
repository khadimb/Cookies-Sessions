<?php
    require 'inc/head.php';
    require "connected.php";
    require 'inc/data/products.php';

    if (!empty($_GET['add_to_cart'])){

        switch ($_GET["add_to_cart"])
        {
            case "46":
                if (empty($_COOKIE['cart']['pecanNuts'])){
                    setCookie("cart[pecanNuts]", 1);
                    header ("Location: index.php");
                    break;
                }
                $_COOKIE['cart']["pecanNuts"]++;
                setCookie("cart[pecanNuts]",$_COOKIE["cart"]["pecanNuts"]);
                break;

            case "36":
                if (empty($_COOKIE['cart']['chocolateChips'])){
                    setCookie("cart[chocolateChips]", 1);
                    header ("Location: index.php");
                    break;
                }
                $_COOKIE['cart']["chocolateChips"]++;
                setCookie("cart[chocolateChips]",$_COOKIE["cart"]["chocolateChips"]);
                break;

            case "58":
                if (empty($_COOKIE['cart']['chocolateCookie'])){
                    setCookie("cart[chocolateCookie]", 1);
                    header ("Location: index.php");
                    break;
                }
                $_COOKIE['cart']["fullChocolateCookie"]++;
                setCookie("cart[fullChocolateCookie]",$_COOKIE["cart"]["fullChocolateCookie"]);
                break;

            case "32":
                if (empty($_COOKIE['cart']['mmCookie'])){
                    setCookie("cart[mmCookie]", 1);
                    header ("Location: index.php");
                    break;
                }
                $_COOKIE['cart']["mmCookie"]++;
                setCookie("cart[mmCookie]",$_COOKIE["cart"]["mmCookie"]);
                break;
        }
    }
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            $i = 0;
            foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <h4>
                                <?php if (isset($_COOKIE['cart'][$product[$i]])) {
                                    echo $_COOKIE['cart'][$product[$i]];
                                } 
                                $i++;?>
                            </h4>
                            <p><?= $cookie['description']; ?></p>
                            <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                        </figcaption>
                    </figure>
                </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
