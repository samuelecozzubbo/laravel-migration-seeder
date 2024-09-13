<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TravelPack;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TravelPackSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 100; $i++) {
            $new_travel_pack = new TravelPack();
            $new_travel_pack->name = $faker->word();
            $new_travel_pack->slug = $this->generateSlug($new_travel_pack->name . ' ' . $new_travel_pack->destination);
            $new_travel_pack->destination = $faker->word();
            $new_travel_pack->description = $faker->paragraph();
            $new_travel_pack->departure_date = $faker->dateTimeBetween('-0 week', '+2 week');
            $new_travel_pack->arrive_date = $faker->dateTimeBetween('+2 week', '+5 week');
            $new_travel_pack->price = $faker->numberBetween(100, 4999);
            //dump($new_travel_pack);
            $new_travel_pack->save();
        }
    }

    private function generateSlug($string)
    {

        /*
            1. ricevo la stringa da "sluggare"
            2. genero lo slug
            3. faccio una query al db per verificare se lo slug è ancora presente
            4. SE non è presente lo slug generato è valido e lo restitisco
            5. SE è presente ne genero uno mantenedo il valore iniziale con concatenato un numero incrementale
            6. una volta generato lo restiuisco

        */
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        // se trovo uno slug esistente $exists non sarà null
        $exists = TravelPack::where('slug', $slug)->first();

        // inizializzo un contatore
        $c = 1;

        // ciglo fino a quano exists non diventa null
        // queso ciclo partirà solo se lo slug è presnte
        while ($exists) {
            $slug = $original_slug . '-' . $c;
            $exists = TravelPack::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}
