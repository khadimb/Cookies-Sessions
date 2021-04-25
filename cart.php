<?php
    require 'inc/head.php';
    require 'inc/data/products.php';
?>

<section class="cookies container-fluid">
    <div class="row">

        <h2>Votre Panier</h2>
        <p>Résumé de vos achats</p>
        <table class="table">
            <thead>
            <tr>
                <th>Article</th>
                <th>Nombre</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    if (empty($_COOKIE["cart"])) : ?>
                <tr>
                    <td>Vous n'avez pas d'article!</td>
                </tr>

                <?php else : 
                    $i = 0;
                    foreach ($catalog as $id => $cookie) { ?>
                        <tr>
                            <?php if(!empty($_COOKIE['cart'][$product[$i]])) { ?>
                                <td><?= $cookie['name']; ?></td>
                                <td><?= $_COOKIE['cart'][$product[$i]]; ?></tr>
                            <?php } ?>
                        </tr>
                    <?php $i++; 
                        }
                    ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

<a class="btn btn-danger" href="disconnected.php">Déconnexion</a>

<?php require 'inc/foot.php'; ?>