<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<!-- Úvodná sekcia s modrým gradientovým pozadím (používa .hero z vášho CSS) -->
<section class="hero">
    <div class="container">
        <h1>Informácie o <span>Tricking Workshope</span></h1>
        <p>Všetko, čo potrebuješ vedieť pred tým, ako sa pridáš medzi nás.</p>
    </div>
</section>

<!-- Hlavný obsah -->
<main class="container">

    <!-- Sekcia: O Workshope -->
    <section id="o-workshope" class="section">
        <div class="section-header">
            <h2>Čo je to Tricking Workshop?</h2>
            <p>Spoznaj komunitu, trénerov a atmosféru nášho workshopu.</p>
        </div>
        <div class="card" style="padding: 30px;">
            <p>
                Tricking Workshop je neformálne stretnutie nadšencov akrobacie, martial arts trickingu,
                breakdance-u a gymnastiky. Nezáleží na tom, či si úplný začiatočník a chceš sa naučiť
                svoj prvý <strong>backflip</strong>, alebo pokročilý tricker, ktorý chce dotiahnuť náročné kombá.
                Naši skúsení tréneri ťa prevedú celým procesom bezpečne a s radosťou.
            </p>
        </div>
    </section>

    <!-- Sekcia: Harmonogram (využíva .grid a .card) -->
    <section id="harmonogram" class="section">
        <div class="section-header">
            <h2>Program & Harmonogram</h2>
            <p>Ako bude vyzerať náš spoločný deň</p>
        </div>
        <div class="grid">
            <div class="card">
                <div class="card-content">
                    <div class="price" style="margin-bottom: 10px;">09:00 - 10:00</div>
                    <h3 class="card-title">Registrácia a Rozcvička</h3>
                    <p style="color: var(--text-muted);">Príchod účastníkov, kontrola registrácie a dôkladný dynamický strečing s trénerom.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="price" style="margin-bottom: 10px;">10:00 - 12:30</div>
                    <h3 class="card-title">Blok I: Základy a Technika</h3>
                    <p style="color: var(--text-muted);">Nácvik kopov, skokov, dopadov a prvých prevratových prvkov na molitanových doskočiskách.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="price" style="margin-bottom: 10px;">12:30 - 13:30</div>
                    <h3 class="card-title">Obedná prestávka</h3>
                    <p style="color: var(--text-muted);">Oddych, občerstvenie a voľná debata s ostatnými účastníkmi.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="price" style="margin-bottom: 10px;">13:30 - 16:00</div>
                    <h3 class="card-title">Blok II: Kombinácie & Open Jam</h3>
                    <p style="color: var(--text-muted);">Spájanie prvkov do komb, nácvik pokročilých trikov a voľný tréning pod dohľadom.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekcia: Čo si priniesť -->
    <section id="vybava" class="section">
        <div class="section-header">
            <h2>Čo si priniesť so sebou?</h2>
            <p>Nezabudni si zabaliť tieto dôležité veci</p>
        </div>
        <div class="card" style="padding: 30px;">
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 15px;">
                <li>👟 <strong>Športové oblečenie:</strong> Pohodlné tepláky/šortky a tričko, ktoré neobmedzujú v pohybe.</li>
                <li>👟 <strong>Čistá obuv:</strong> Sálová obuv s flexibilnou podrážkou (cvičí sa na tatami a gymnastickej podlahe).</li>
                <li>💧 <strong>Pitný režim:</strong> Fľaša s vodou (na mieste bude k dispozícii dopĺňanie čistej vody).</li>
                <li>🥪 <strong>Občerstvenie:</strong> Malá desiata alebo energetická tyčinka na doplnenie energie.</li>
            </ul>
        </div>
    </section>

    <!-- Sekcia: Často kladené otázky (FAQ) -->
    <section id="faq" class="section">
        <div class="section-header">
            <h2>Často kladené otázky</h2>
            <p>Odpovede na najčastejšie otázky pred registráciou</p>
        </div>
        <div class="grid">
            <div class="card">
                <div class="card-content">
                    <h3 class="card-title">Musím mať skúsenosti?</h3>
                    <p style="color: var(--text-muted);">Vôbec nie! Workshop je prispôsobený pre všetky úrovne. Tréneri si účastníkov rozdelia do skupín podľa ich schopností.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3 class="card-title">Vekové obmedzenie?</h3>
                    <p style="color: var(--text-muted);">Minimálny odporúčaný vek je 10 rokov. Účastníci mladší ako 18 rokov musia priniesť písomný súhlas zákonného zástupcu.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3 class="card-title">Kde sa workshop koná?</h3>
                    <p style="color: var(--text-muted);">V modernej špecializovanej gymnastickej hale. Presnú adresu pošleme e-mailom po potvrdení registrácie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Výzva k akcii -->
    <section class="section" style="text-align: center; padding-top: 20px;">
        <div class="card" style="padding: 50px 20px; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white;">
            <h2>Si pripravený posunúť svoje limity?</h2>
            <p style="margin-top: 10px; opacity: 0.9;">Pridaj sa k nám a nauč sa nové triky pod dohľadom profesionálov.</p>
            <div>
                <a href="<?= $link->url('home.index') ?>#registracia" class="btn btn-large">Prihlásiť sa na workshop</a>
            </div>
        </div>
    </section>

</main>