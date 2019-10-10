<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;

class InitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::Create(['name' => 'Burkina FASO']);
		City::Create(['name' => 'Aribinda', 'country_id' => '1']);
        City::Create(['name' => 'Bagr�', 'country_id' => '1']);
		City::Create(['name' => 'Banfora', 'country_id' => '1']);
		City::Create(['name' => 'Bati�', 'country_id' => '1']);
		City::Create(['name' => 'Bobo Dioulasso', 'country_id' => '1']);
		City::Create(['name' => 'Bobo Dioulasso', 'country_id' => '1']);
		City::Create(['name' => 'Boromo', 'country_id' => '1']);
		City::Create(['name' => 'Boulsa', 'country_id' => '1']);
		City::Create(['name' => 'Bouss�', 'country_id' => '1']);
		City::Create(['name' => 'Dano', 'country_id' => '1']);
		City::Create(['name' => 'D�dougou', 'country_id' => '1']);
		City::Create(['name' => 'Diapaga', 'country_id' => '1']);
		City::Create(['name' => 'Di�bougou', 'country_id' => '1']);
		City::Create(['name' => 'Djibo', 'country_id' => '1']);
		City::Create(['name' => 'Dori', 'country_id' => '1']);
		City::Create(['name' => "Fada N'gourma", 'country_id' => '1']);
		City::Create(['name' => 'Gaoua', 'country_id' => '1']);
		City::Create(['name' => 'Garango', 'country_id' => '1']);
		City::Create(['name' => 'Gay�ri', 'country_id' => '1']);
		City::Create(['name' => 'Gorom-Gorom', 'country_id' => '1']);
		City::Create(['name' => 'Gourcy', 'country_id' => '1']);
		City::Create(['name' => 'Hound�', 'country_id' => '1']);
		City::Create(['name' => 'Kantchari', 'country_id' => '1']);
		City::Create(['name' => 'Kaya', 'country_id' => '1']);
		City::Create(['name' => 'Kindi', 'country_id' => '1']);
		City::Create(['name' => 'Kokologo', 'country_id' => '1']);
		City::Create(['name' => 'Kombissiri', 'country_id' => '1']);
		City::Create(['name' => 'Kongoussi', 'country_id' => '1']);
		City::Create(['name' => 'Kordi�', 'country_id' => '1']);
		City::Create(['name' => 'Kouka, Bam', 'country_id' => '1']);
        City::Create(['name' => 'Kouka, Banwa', 'country_id' => '1']);
        City::Create(['name' => 'Koup�la', 'country_id' => '1']);
        City::Create(['name' => 'L�o', 'country_id' => '1']);
        City::Create(['name' => 'Manga', 'country_id' => '1']);
        City::Create(['name' => 'M�guet', 'country_id' => '1']);
        City::Create(['name' => 'Mogtedo', 'country_id' => '1']);
        City::Create(['name' => 'Niangoloko', 'country_id' => '1']);
        City::Create(['name' => 'Nouna', 'country_id' => '1']);
        City::Create(['name' => 'Orodara', 'country_id' => '1']);
        City::Create(['name' => 'Ouagadougou (Capital)', 'country_id' => '1']);
        City::Create(['name' => 'Ouahigouya', 'country_id' => '1']);
        City::Create(['name' => 'Ouargaye', 'country_id' => '1']);
        City::Create(['name' => 'Pama', 'country_id' => '1']);
        City::Create(['name' => 'Pissila', 'country_id' => '1']);
        City::Create(['name' => 'P�', 'country_id' => '1']);
        City::Create(['name' => 'Pouytenga', 'country_id' => '1']);
        City::Create(['name' => 'R�o', 'country_id' => '1']);
        City::Create(['name' => 'Sapon�', 'country_id' => '1']);
        City::Create(['name' => 'Sapouy', 'country_id' => '1']);
        City::Create(['name' => 'Sebba', 'country_id' => '1']);
        City::Create(['name' => 'S�gu�n�ga', 'country_id' => '1']);
        City::Create(['name' => 'Sindou', 'country_id' => '1']);
        City::Create(['name' => 'Solenzo', 'country_id' => '1']);
        City::Create(['name' => 'Tangin Dassouri', 'country_id' => '1']);
        City::Create(['name' => 'Tenkodogo', 'country_id' => '1']);
        City::Create(['name' => 'Tikar�', 'country_id' => '1']);
        City::Create(['name' => 'Titao', 'country_id' => '1']);
        City::Create(['name' => 'Toma', 'country_id' => '1']);
        City::Create(['name' => 'Tougan', 'country_id' => '1']);
        City::Create(['name' => 'Villy', 'country_id' => '1']);
        City::Create(['name' => 'Yako', 'country_id' => '1']);
        City::Create(['name' => 'Ziniar�', 'country_id' => '1']);
        City::Create(['name' => 'Zorgo', 'country_id' => '1']);
    
     }
}
