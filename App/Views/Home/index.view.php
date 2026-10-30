<section class="hero">
    <div class="container hero-content">
        <h1>Posuň svoje hranice</h1>
        <p>Nauč sa tie najlepšie trickingové pohyby od profesionálov. Pridaj sa k nám na workshopy po celom Slovensku.</p>
        <a href="#eshp" class="btn btn-large">Začať trénovať</a>
    </div>
</section>

<!-- Sekcia: E-shop / Produkty -->
<section id="eshp" class="section">
    <div class="container">
        <div class="section-header">
            <h2>Workshopy</h2>
            <p>Vyber si z našich aktuálnych ponúk a rezervuj si miesto.</p>
        </div>

        <h1>Aktuálne workshopy</h1>

        <div class="grid">
            <?php if (!empty($workshopy)): ?>
                <?php foreach ($workshopy as $workshop): ?>
                    <article class="card">
                        <div class="card-image">Fotografia</div>
                        <div class="card-content">
                            <h3 class="card-title"><?= htmlspecialchars($workshop['nazov']) ?></h3>
                            <div class="card-footer">
                                <span class="price"><?= htmlspecialchars($workshop['cena']) ?></span>
                            </div>
                            <a href="#" class="btn btn-outline">Prihlásiť sa</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>