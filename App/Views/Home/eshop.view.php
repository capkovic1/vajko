<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="section">
    <div class="container">
        <!-- Nadpis stránky -->
        <div class="section-header">
            <h1>E-shop</h1>
            <p>Vyber si svoj produkt.</p>
        </div>

        <div class="grid">

            <?php if (!empty($produkty)): ?>
                <?php foreach ($produkty as $produkt): ?>
                    <a href="#produkt-1" class="card">
                        <!-- Zmenené z textu na reálny obrázok -->
                        <div class="card-image" style="padding: 0; overflow: hidden;">
                            <img src="<?= $link->asset($produkt['image']) ?>" alt="<?= htmlspecialchars($produkt['name']) ?>">
                        </div>

                        <div class="card-content">
                            <h3 class="card-title"><?= htmlspecialchars($produkt['name']) ?></h3>
                            <div class="card-footer">
                                <span class="price"><?= htmlspecialchars($produkt['price']) ?></span>
                                <span class="rating"><?= htmlspecialchars($produkt['rating']) ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</main>