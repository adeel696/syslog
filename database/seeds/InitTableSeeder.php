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
		City::Create(['name' => "Aribinda", 'country_id' => '1']);
		City::Create(['name' => "Bagré", 'country_id' => '1']);
		City::Create(['name' => "Bama", 'country_id' => '1']);
		City::Create(['name' => "Banfora", 'country_id' => '1']);
		City::Create(['name' => "Batié", 'country_id' => '1']);
		City::Create(['name' => "Bitou", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Sarfalao )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Zone residentielle B )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Koko )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Bolomakoté )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Petit Paris )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Zone Industrielle )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Saint Etienne )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Sikasso Sira )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Dioulassoba )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Bindougousso )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Ouezzin Ville )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Tounouma )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Yéguéré )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Sonsoribougou )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Cour Daouda et Abdoulaye )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Dogona )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Accart-ville )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Kolma )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Kuinima )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Samogan )", 'country_id' => '1']);
		City::Create(['name' => "Bobo Dioulasso ( Lafiabougou )", 'country_id' => '1']);
		City::Create(['name' => "Bogandé", 'country_id' => '1']);
		City::Create(['name' => "Boromo", 'country_id' => '1']);
		City::Create(['name' => "Boulsa", 'country_id' => '1']);
		City::Create(['name' => "Boussé", 'country_id' => '1']);
		City::Create(['name' => "Dano", 'country_id' => '1']);
		City::Create(['name' => "Dédougou", 'country_id' => '1']);
		City::Create(['name' => "Diapaga", 'country_id' => '1']);
		City::Create(['name' => "Diébougou", 'country_id' => '1']);
		City::Create(['name' => "Dissin", 'country_id' => '1']);
		City::Create(['name' => "Djibo", 'country_id' => '1']);
		City::Create(['name' => "Dori", 'country_id' => '1']);
		City::Create(['name' => "Fada N'gourma", 'country_id' => '1']);
		City::Create(['name' => "Gaoua", 'country_id' => '1']);
		City::Create(['name' => "Garango", 'country_id' => '1']);
		City::Create(['name' => "Gayéri", 'country_id' => '1']);
		City::Create(['name' => "Gorom-Gorom", 'country_id' => '1']);
		City::Create(['name' => "Gourcy", 'country_id' => '1']);
		City::Create(['name' => "Houndé", 'country_id' => '1']);
		City::Create(['name' => "Kantchari", 'country_id' => '1']);
		City::Create(['name' => "Kaya", 'country_id' => '1']);
		City::Create(['name' => "Kindi", 'country_id' => '1']);
		City::Create(['name' => "Kokologo", 'country_id' => '1']);
		City::Create(['name' => "Kombissiri", 'country_id' => '1']);
		City::Create(['name' => "Kongoussi", 'country_id' => '1']);
		City::Create(['name' => "Kordié", 'country_id' => '1']);
		City::Create(['name' => "Koudougou", 'country_id' => '1']);
		City::Create(['name' => "Kouka, Bam", 'country_id' => '1']);
		City::Create(['name' => "Kouka, Banwa", 'country_id' => '1']);
		City::Create(['name' => "Koupéla", 'country_id' => '1']);
		City::Create(['name' => "Léo", 'country_id' => '1']);
		City::Create(['name' => "Loropeni", 'country_id' => '1']);
		City::Create(['name' => "Manga", 'country_id' => '1']);
		City::Create(['name' => "Méguet", 'country_id' => '1']);
		City::Create(['name' => "Mogtedo", 'country_id' => '1']);
		City::Create(['name' => "Niangoloko", 'country_id' => '1']);
		City::Create(['name' => "Nouna", 'country_id' => '1']);
		City::Create(['name' => "Orodara", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Nagrin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Patte d’oie )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Ouaga 2000 )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( trame d’accueil de Ouaga 2000 )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kouritenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Cissin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kouritenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Karpala )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Bilbalogo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Saint Léon )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zangouettin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Tiedpalogo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Koulouba )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kamsonghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Samandin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Paspanga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Larlé )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kologh Naba )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Dapoya 2 )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Gounghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Pissy )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Ouidi )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Nemnin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Hamdalaye )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Nonsin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Rimkièta )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Tampouy )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kilwin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Tanghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Somgandé )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zone industrielle )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zogona )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Wemtenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Dagnoën )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kalgondin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Silmiyiri )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kossodo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Wayalghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Yemtenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Balkuy )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Nioko 1 )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Dassasgho )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Nioko 2  )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Bendogo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zongo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Toukin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Ronsin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Yaoghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Boassa )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zaghtouli )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Zongo Nabitenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Bassinko )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Silmiougou )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Ouapassi )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Lanoayiri )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Dayongo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( koumdayonré )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Ouidtenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Gandin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Mankougoudou )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Niogsin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Baoghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Camp militaire )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Naababpougo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kienbaoghin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Sambin barrage )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Sandogo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Kankasin  )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Sogpèlcé )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Bissighin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Dar-es-Salam )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Gantin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Bangpooré )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Larlé Wéogo )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Marcoussis )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Wob Riguéré )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Godin )", 'country_id' => '1']);
		City::Create(['name' => "Ouagadougou ( Taabtenga )", 'country_id' => '1']);
		City::Create(['name' => "Ouahigouya", 'country_id' => '1']);
		City::Create(['name' => "Ouargaye", 'country_id' => '1']);
		City::Create(['name' => "Pama", 'country_id' => '1']);
		City::Create(['name' => "Pissila", 'country_id' => '1']);
		City::Create(['name' => "Pô", 'country_id' => '1']);
		City::Create(['name' => "Pouytenga", 'country_id' => '1']);
		City::Create(['name' => "Réo", 'country_id' => '1']);
		City::Create(['name' => "Saponé", 'country_id' => '1']);
		City::Create(['name' => "Sapouy", 'country_id' => '1']);
		City::Create(['name' => "Sebba", 'country_id' => '1']);
		City::Create(['name' => "Séguénéga", 'country_id' => '1']);
		City::Create(['name' => "Sindou", 'country_id' => '1']);
		City::Create(['name' => "Solenzo", 'country_id' => '1']);
		City::Create(['name' => "Tangin Dassouri", 'country_id' => '1']);
		City::Create(['name' => "Tenkodogo", 'country_id' => '1']);
		City::Create(['name' => "Tikaré", 'country_id' => '1']);
		City::Create(['name' => "Titao", 'country_id' => '1']);
		City::Create(['name' => "Toma", 'country_id' => '1']);
		City::Create(['name' => "Tougan", 'country_id' => '1']);
		City::Create(['name' => "Villy", 'country_id' => '1']);
		City::Create(['name' => "Yako", 'country_id' => '1']);
		City::Create(['name' => "Ziniaré", 'country_id' => '1']);
		City::Create(['name' => "Zorgo", 'country_id' => '1']);

		
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
		
		
		
		Vehicle::Create(['name' => 'Camions citerne', 'capacity' => 'Camions citerne', 'specification' => 'Camions citerne']);
		Vehicle::Create(['name' => 'Camion de marchandises diverses', 'capacity' => 'Camion de marchandises diverses', 'specification' => 'Camion de marchandises diverses']);
		Vehicle::Create(['name' => 'Camion plateau', 'capacity' => 'Camion plateau', 'specification' => 'Camion plateau']);
		Vehicle::Create(['name' => 'Camion frigorifique', 'capacity' => 'Camion frigorifique', 'specification' => 'Camion frigorifique']);
		Vehicle::Create(['name' => 'Camion Benne', 'capacity' => 'Camion Benne', 'specification' => 'Camion Benne']);
		Vehicle::Create(['name' => 'Demenagement', 'capacity' => 'Demenagement', 'specification' => 'Demenagement']);
		Vehicle::Create(['name' => 'Bus et Mini Bus', 'capacity' => 'Bus et Mini Bus', 'specification' => 'Bus et Mini Bus']);
		Vehicle::Create(['name' => 'Autres', 'capacity' => 'Autres', 'specification' => 'Autres']);
     }
}
