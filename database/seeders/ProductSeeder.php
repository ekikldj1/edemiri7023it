<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Rakija Vijlamovka',
            'description' => 'Naša rakija viljamovka je premium destilat dobijen od pažljivo odabranih plodova najkvalitetnije sorte kruške – viljamovke. Svaka kap ove rakije nosi u sebi bogatu aromu zrele kruške, nežne cvetne note i blagi, zaokružen ukus koji ostavlja dugotrajan i prijatan osećaj na nepcu. Proces proizvodnje započinje pažljivim sortiranjem i fermentacijom plodova, nakon čega sledi dvostruka destilacija u bakarnim kazanima, čime se postiže vrhunska čistoća i autentičan ukus. Rakija viljamovka se savršeno slaže uz suhomesnate delicije, sireve i deserte, a idealna je i za uživanje u posebnim trenucima.',
            'price' => 1200,
            'category_id' => 1,
            'kolicina' => 300,
            'image' => 'images/viljamovka.jpg',
        ]);
        Product::create([
            'name' => 'Rakija Klekovača',
            'description' => 'Prava poslastica za ljubitelje tradicionalnih ukusa, rakija klekovača nastaje kombinacijom pažljivo birane rakije od kruške i aromatičnih bobica kleke. Ovaj spoj donosi jedinstvenu harmoniju voćnih i smolastih tonova, uz osvežavajuće note koje oplemenjuju svaku čašicu. Proces odležavanja u hrastovim buradima daje ovoj rakiji dodatnu punoću i prepoznatljiv karakter. Klekovača je savršen izbor za one koji uživaju u snažnim, autentičnim aromama i vrhunskom kvalitetu domaće rakije.',
            'price' => 1100,
            'category_id' => 1,
            'kolicina' => 200,
            'image' => 'images/klekovaca.jpg',
        ]);
        Product::create([
            'name' => 'Džem od kruške',
            'description' => 'Naš džem od kruške izrađuje se od najzrelijih i najsočnijih plodova, bez dodatnih veštačkih boja i konzervansa. Njegova svilenkasta tekstura i prirodno sladak ukus čine ga idealnim dodatkom za doručak, palačinke, tost, ali i kao sastojak u raznim poslasticama. Kruške se pažljivo kuvaju na laganoj vatri, uz dodatak prirodnog šećera i limunovog soka, kako bi se sačuvale sve hranljive vrednosti i bogata aroma. Uživajte u zdravom i ukusnom namazu, koji će vas podsetiti na domaće ukuse iz detinjstva.',
            'price' => 600,
            'category_id' => 2,
            'kolicina' => 100,
            'image' => 'images/dzem.jpg',
        ]);
        Product::create([
            'name' => 'Džem od kruške sa makom',
            'description' => 'Za ljubitelje neobičnih kombinacija, nudimo džem od kruške sa makom – spoj nežne slatkoće zrelih krušaka i lagane orašaste arome maka. Ovaj jedinstveni delikates donosi poseban gastronomski doživljaj, a njegova kremasta tekstura sa finim zrncima maka daje mu autentičan karakter. Idealan je za mazanje na hleb, uz sireve, kao dodatak kolačima ili čak u kombinaciji sa mesnim jelima. Ovaj džem će osvojiti sve one koji traže nešto novo i drugačije.',
            'price' => 650,
            'category_id' => 2,
            'kolicina' => 50,
            'image' => 'images/mak.jpg',

        ]);
         Product::create([
            'name' => 'Sok od kruške',
            'description' => 'Osvežavajući i potpuno prirodan, naš sok od kruške pravi se isključivo od svežih i zrelih plodova, bez dodatnog šećera i konzervansa. Bogat vitaminima i mineralima, ovaj sok je idealan izbor za sve generacije, od najmlađih do najstarijih. Njegov blag, voćni ukus i blaga gustina čine ga savršenim za svakodnevno uživanje, a možete ga koristiti i kao bazu za koktele ili osvežavajuće napitke. Pijte ga rashlađenog za maksimalno osveženje i uživajte u čistoj esenciji prirode u svakoj kapljici.',
            'price' => 300,
            'category_id' => 3,
            'kolicina' => 150,
            'image' => 'images/sok.jpg',

        ]);
    }
}
