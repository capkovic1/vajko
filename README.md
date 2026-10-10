# Stranka pre Tricking Workshopy

Marek Čapkovič

5ZYI36

## Stručný opis projektu
Pripravovaná webová aplikácia je určená pre komunitu nadšencov trickingu. Hlavným problémom, ktorý rieši, je neprehľadné nahlasovanie sa na tréningy/workshopy, absencia správneho manažmentu kapacít a chýbajúca možnosť zakúpenia špecializovaného trickingového oblečenia.

Hlavným účelom aplikácie je poskytnúť prehľadný systém na registráciu a správu účasti na trickingových workshopoch spolu s integrovaným e-shopom na predaj oblečenia. Aplikácia uľahčí zákazníkom rezerváciu miest a nákup produktov a správcom/trénerom zjednoduší manažment účastníkov, produktov a objednávok.

## Role v projekte
### Návštevník 

Oprávnenia: Prezeranie verejnej ponuky workshopov, prehliadanie e-shopu s oblečením.

Zodpovednosť: Pre vytvorenie rezervácie alebo nákup musí vypĺňať všetky údaje manuálne, nemá prístup vidieť svoje predošlé objednavky.

### Registrovaný používateľ 

Oprávnenia: Prihlásenie/odhlásenie, úprava profilu, rezervácia účasti na workshopoch, pridávanie produktov do košíka, vytvorenie objednávky v e-shope a histórie objednávok.

Zodpovednosť: Správnosť zadaných osobných a doručovacích údajov.

### Správca (Administrátor / Organizátor)

Oprávnenia: Plná správa workshopov a produktov, správa stavov objednávok, nahrávanie obrázkov k produktom a workshopom, prehľad zoznamu prihlásených účastníkov na jednotlivé workshopy.

Zodpovednosť: Aktualizácia ponuky workshopov a tovaru na sklade.

## Prípady použitia podľa rolí

* **Návštevník :**
    * **Prehliadanie obsahu:** Návštevník si môže voľne prezerať celú stránku, ponuku nadchádzajúcich workshopov s ich termínmi aj dostupný sortiment oblečenia v e-shope.
    * **Nákup bez registrácie:** Môže vytvoriť a odoslať objednávku v e-shope, pričom musí v pokladni manuálne zadať všetky svoje osobné a doručovacie údaje.
    * **Registrácia:** V prípade záujmu si môže vytvoriť používateľský účet.

* **Registrovaný používateľ :**
    * **Všetky možnosti návštevníka:** Môže vykonávať všetky činnosti ako návštevník.
    * **Rýchly nákup a rezervácia:** Vďaka uloženým údajom v používateľskom profile nemusí pri tvorbe objednávky v e-shope ani pri prihlasovaní na workshop opakovane manuálne vyplňovať svoje osobné či doručovacie údaje – systém ich automaticky predvyplní.
    * **Správa profilu :** Môže si upravovať svoje osobné údaje.

* **Správca :**
    * **Správa workshopov:** Správca má možnosť vytvárať nové workshopy, odoberať neaktuálne a upravovať ich detaily (názov, popis, dátum, miesto, kapacitu či cenu).
    * **Správa e-shopu:** Môže pridávať nové produkty, upravovať popisy a ceny oblečenia alebo vymazávať produkty z ponuky.
    * **Prehľad prihlásených účastníkov:** Má prístup k zoznamom prihlásených ľudí na jednotlivé workshopy vrátane kontroly obsadenosti kapacít.
    * **Správa objednávok:** Má kompletný prehľad o všetkých prijatých objednávkach z e-shopu.

## Plánované entity
1. **User**
    * **Účel:** Ukladanie údajov o registrovaných používateľoch, ich profiloch, doručovacích adresách a rolách.
    * **Atribúty:** `id`, `email`, `password_hash`, `first_name`, `last_name`, `phone`, `address`, `city`, `zip_code`, `role` (admin/user), `profile_image_path`, `created_at`.

2. **Workshop**
    * **Účel:** Reprezentuje organizovaný tricking workshop alebo tréningový kemp.
    * **Atribúty:** `id`, `title`, `description`, `location`, `event_date`, `capacity`, `price`, `image_path`.

3. **WorkshopBooking**
    * **Účel:** Záznam o rezervácii používateľa na konkrétny workshop.
    * **Atribúty:** `id`, `user_id`, `workshop_id`, `booking_date`, `status` (potvrdená/zrušená).

4. **Product**
    * **Účel:** Reprezentuje tovar ponúkaný v e-shope (napr. tricking tepláky, tričká, tejpovacie pásky).
    * **Atribúty:** `id`, `title`, `description`, `price`, `stock_quantity`, `image_path`.

6. **Order**
    * **Účel:** Hlavička objednávky tovaru v e-shope (pre registrovaných aj neregistrovaných hostí).
    * **Atribúty:** `id`, `user_id` , `customer_name`, `customer_email`, `shipping_address`, `total_price`, `status`, `created_at`.

## Vzťahy medzi entitami

* **User : WorkshopBooking (1:N)** – Jeden prihlásený používateľ môže mať vytvorených viacero rezervácií na workshopy.
* **Workshop : WorkshopBooking (1:N)** – Na jeden workshop môže byť naviazaných viacero rezervácií od rôznych používateľov.
* **User : Order (1:N)** – Jeden registrovaný používateľ môže mať v histórii viacero objednávok v e-shope.

## Hlavné stránky aplikácie
1. **Úvodná stránka / Domov (`/home`)**
    * Obsahuje popis toho, čo je to tricking a navigačného menu, cez ktoré sa používateľ ľahko dostane na všetky ostatné časti webu.
2. **Katalóg workshopov (`/workshopy`)**
    * Stránka na prehliadanie momentálne dostupných workshopov s uvedením termínom, miestom konania.
3. **Rezervácia na workshop (`/workshop/rezervacia`)**
    * Formulárová stránka na prihlásenie sa na vybraný workshop. Registrovanému používateľovi automaticky predvyplní jeho údaje z profilu, vďaka čomu stačí rezerváciu iba potvrdiť.
4. **E-shop s oblečením a produktmi (`/eshop`)**
    * Stránka na prehliadanie oblečenia a pridávania tovaru do košíka.
5. **Klientsky profil (`/profil`)**
    * Vyžaduje prihlásenie. Používateľ si tu môže upravovať svoje osobné a doručovacie údaje.
6. **Administrátorská zóna (`/admin`)** *(Pre správcu)*
    * Prístupná len pre rolu `admin`. Slúži na pridávanie, úpravu a mazanie workshopov a produktov, prehľad prihlásených ľudí na workshopy a správy objednávok.
## Rozdelenie funkcionality

### Základné funkcie :
* **Prehliadanie obsahu:** Možnosť voľného prehliadania dostupných workshopov a produktov v e-shope.
* **Rezervácie a objednávky:** Prihlásenie sa na workshop a vytvorenie objednávky tovaru v e-shope.
* **Klientsky profil:** Vytvorenie používateľského účtu, úprava profilu a uloženie doručovacích údajov.
* **Správa obsahu (Admin):** Pridávanie, úprava a mazanie workshopov a produktov v e-shope, prehľad prihlásených účastníkov.

### Rozširujúce funkcie (Bonusové / Časové možnosti):
* **Filtrovanie oblečenia:** Pokročilé dynamické filtrovanie produktov v e-shope podľa kategórií, veľkostí či ceny.
* **Fotogaléria z predošlých akcií:** Prehľadná fotogaléria a videozáznamy z minulých workshopov.
* **Podrobné štatistiky pre admina:** Prehľadné štatistiky a grafy účasti na workshopoch, predajnosti produktov a celkových tržieb v administrátorskom rozhraní.
* **Generovanie PDF:** Automatické generovanie potvrdenia objednávky / faktúry vo formáte PDF.