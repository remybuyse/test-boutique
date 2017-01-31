<main>
    <div id="single_product">
        <h1><?= $product['title'] ?></h1>
        <img src="./images/<?= $product['picture'] ?>" alt="">
        <p>Description : <?= $product['long_desc'] ?></p>

        <p class="prices2">
            <?php if($product['price'] != $product['promo_price']) : ?>
                <span class="old-price2"><?= number_format($product['price'], 2) ?>&euro;</span>
                <span class="new_price2"><?= number_format($product['promo_price'], 2) ?>&euro;</span>
            <?php else: ?>
                <span class="normal-price2"><?= $product['price'] ?>&euro;</span>
            <?php endif; ?>
        </p>
        <button type="button" name="button">Ajouter au panier</button>
    </div>
</main>
