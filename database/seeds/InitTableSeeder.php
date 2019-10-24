<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;
use App\Models\Admin;
use App\Models\ConstructionMachine;
use App\Models\Vehicle;

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
		City::Create(['name' => 'Bagré', 'country_id' => '1']);
		City::Create(['name' => 'Banfora', 'country_id' => '1']);
		City::Create(['name' => 'Batié', 'country_id' => '1']);
		City::Create(['name' => 'Bobo Dioulasso', 'country_id' => '1']);
		City::Create(['name' => 'Bogandé', 'country_id' => '1']);
		City::Create(['name' => 'Boromo', 'country_id' => '1']);
		City::Create(['name' => 'Boulsa', 'country_id' => '1']);
		City::Create(['name' => 'Boussé', 'country_id' => '1']);
		City::Create(['name' => 'Dano', 'country_id' => '1']);
		City::Create(['name' => 'Dédougou', 'country_id' => '1']);
		City::Create(['name' => 'Diapaga', 'country_id' => '1']);
		City::Create(['name' => 'Diébougou', 'country_id' => '1']);
		City::Create(['name' => 'Djibo', 'country_id' => '1']);
		City::Create(['name' => 'Dori', 'country_id' => '1']);
		City::Create(['name' => "Fada N'gourma", 'country_id' => '1']);
		City::Create(['name' => 'Gaoua', 'country_id' => '1']);
		City::Create(['name' => 'Garango', 'country_id' => '1']);
		City::Create(['name' => 'Gayéri', 'country_id' => '1']);
		City::Create(['name' => 'Gorom-Gorom', 'country_id' => '1']);
		City::Create(['name' => 'Gourcy', 'country_id' => '1']);
		City::Create(['name' => 'Houndé', 'country_id' => '1']);
		City::Create(['name' => 'Kantchari', 'country_id' => '1']);
		City::Create(['name' => 'Kaya', 'country_id' => '1']);
		City::Create(['name' => 'Kindi', 'country_id' => '1']);
		City::Create(['name' => 'Kokologo', 'country_id' => '1']);
		City::Create(['name' => 'Kombissiri', 'country_id' => '1']);
		City::Create(['name' => 'Kongoussi', 'country_id' => '1']);
		City::Create(['name' => 'Kordié', 'country_id' => '1']);
		City::Create(['name' => 'Koudougou', 'country_id' => '1']);
		City::Create(['name' => 'Kouka, Bam', 'country_id' => '1']);
		City::Create(['name' => 'Kouka, Banwa', 'country_id' => '1']);
		City::Create(['name' => 'Koupéla', 'country_id' => '1']);
		City::Create(['name' => 'Léo', 'country_id' => '1']);
		City::Create(['name' => 'Loropeni', 'country_id' => '1']);
		City::Create(['name' => 'Manga', 'country_id' => '1']);
		City::Create(['name' => 'Méguet', 'country_id' => '1']);
		City::Create(['name' => 'Mogtedo', 'country_id' => '1']);
		City::Create(['name' => 'Niangoloko', 'country_id' => '1']);
		City::Create(['name' => 'Nouna', 'country_id' => '1']);
		City::Create(['name' => 'Orodara', 'country_id' => '1']);
		City::Create(['name' => 'Ouagadougou', 'country_id' => '1']);
		City::Create(['name' => 'Ouahigouya', 'country_id' => '1']);
		City::Create(['name' => 'Ouargaye', 'country_id' => '1']);
		City::Create(['name' => 'Pama', 'country_id' => '1']);
		City::Create(['name' => 'Pissila', 'country_id' => '1']);
		City::Create(['name' => 'Pô', 'country_id' => '1']);
		City::Create(['name' => 'Pouytenga', 'country_id' => '1']);
		City::Create(['name' => 'Réo', 'country_id' => '1']);
		City::Create(['name' => 'Saponé', 'country_id' => '1']);
		City::Create(['name' => 'Sapouy', 'country_id' => '1']);
		City::Create(['name' => 'Sebba', 'country_id' => '1']);
		City::Create(['name' => 'Séguénéga', 'country_id' => '1']);
		City::Create(['name' => 'Sindou', 'country_id' => '1']);
		City::Create(['name' => 'Solenzo', 'country_id' => '1']);
		City::Create(['name' => 'Tangin Dassouri', 'country_id' => '1']);
		City::Create(['name' => 'Tenkodogo', 'country_id' => '1']);
		City::Create(['name' => 'Tikaré', 'country_id' => '1']);
		City::Create(['name' => 'Titao', 'country_id' => '1']);
		City::Create(['name' => 'Toma', 'country_id' => '1']);
		City::Create(['name' => 'Tougan', 'country_id' => '1']);
		City::Create(['name' => 'Villy', 'country_id' => '1']);
		City::Create(['name' => 'Yako', 'country_id' => '1']);
		City::Create(['name' => 'Ziniaré', 'country_id' => '1']);
		City::Create(['name' => 'Zorgo', 'country_id' => '1']);
		
		Admin::Create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$wQydHr.kXqc1PGQ84tAPquRKyrW..KpDjfGPBJpPL7VFCFqyaeJDi']);
    
	
		ConstructionMachine::Create(['name' => 'Bétonneuse', 'capacity' => 'Bétonneuse', 'specification' => 'Bétonneuse']);
		ConstructionMachine::Create(['name' => 'Niveleuses', 'capacity' => 'Niveleuses', 'specification' => 'Niveleuses']);
		ConstructionMachine::Create(['name' => 'Pelleteuses', 'capacity' => 'Pelleteuses', 'specification' => 'Pelleteuses']);
		ConstructionMachine::Create(['name' => 'Forage', 'capacity' => 'Forage', 'specification' => 'Forage']);
		ConstructionMachine::Create(['name' => 'BULL', 'capacity' => 'BULL', 'specification' => 'BULL']);
		ConstructionMachine::Create(['name' => 'Chargeurs', 'capacity' => 'Chargeurs', 'specification' => 'Chargeurs']);
		ConstructionMachine::Create(['name' => 'Grues', 'capacity' => 'Grues', 'specification' => 'Grues']);
		ConstructionMachine::Create(['name' => 'Porte char', 'capacity' => 'Porte char', 'specification' => 'Porte char']);
		ConstructionMachine::Create(['name' => 'Nacelles élévateur', 'capacity' => 'Nacelles élévateur', 'specification' => 'Nacelles élévateur']);
		ConstructionMachine::Create(['name' => 'Compacteurs', 'capacity' => 'Compacteurs', 'specification' => 'Compacteurs']);
		ConstructionMachine::Create(['name' => 'Autres', 'capacity' => 'Autres', 'specification' => 'Autres']);
		
		
		
		Vehicle::Create(['name' => 'Camions citterne', 'capacity' => 'Camions citterne', 'specification' => 'Camions citterne']);
		Vehicle::Create(['name' => 'Camion de marchandises divers', 'capacity' => 'Camion de marchandises divers', 'specification' => 'Camion de marchandises divers']);
		Vehicle::Create(['name' => 'Camion plateau', 'capacity' => 'Camion plateau', 'specification' => 'Camion plateau']);
		Vehicle::Create(['name' => 'Camion frigorifique', 'capacity' => 'Camion frigorifique', 'specification' => 'Camion frigorifique']);
		Vehicle::Create(['name' => 'Camion Benne', 'capacity' => 'Camion Benne', 'specification' => 'Camion Benne']);
		Vehicle::Create(['name' => 'Demenagement', 'capacity' => 'Demenagement', 'specification' => 'Demenagement']);
		Vehicle::Create(['name' => 'Bus et Mini Bus', 'capacity' => 'Bus et Mini Bus', 'specification' => 'Bus et Mini Bus']);
		Vehicle::Create(['name' => 'Autres', 'capacity' => 'Autres', 'specification' => 'Autres']);
     }
}
