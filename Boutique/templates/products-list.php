<main id="products">
    <?php foreach ($products as $index => $product): ?>
        <article class="product">

            <a class="image_overlay" href="product.php?index=<?= $index ?>">
                <span><h1 class="title"><?= $product['title'] ?></h1></span>
                <img src="./images/<?= $product['thumbnail'] ?>" alt="<?= $product['title'] ?>">
            </a>
            <p><?= $product['short_desc'] ?> </p>

            <p class="prices">
                <?php if($product['price'] != $product['promo_price']) : ?>
                    <span class="old-price"><?= number_format($product['price'], 2) ?>&euro;</span>
                    <span class="new_price"><?= number_format($product['promo_price'], 2) ?>&euro;</span>
                <?php else: ?>
                    <span class="normal-price"><?= number_format($product['price'], 2) ?>&euro;</span>
                <?php endif; ?>
            </p>
            <p class="view-product">
                <a class="more" href="product.php?index=<?= $index ?>">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Voir le produit
                </a>
            </p>
            <p>

                <button type="submit" name="button">Ajouter au panier</button>

            </p>

        </article>

    <?php endforeach; ?>
</main>
