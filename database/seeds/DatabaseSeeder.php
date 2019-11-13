<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
  	
  	App\Company::truncate();
    App\Company::create(["name" => "Empresa de pruebas","rut"=>11367176,"digit"=>"9","commune_id"=>13504,"retc_code"=> 1,"user_id"=> 1,"region_id"=> 13]);


// ************************

  	App\User::truncate();
  	App\User::create(['name'=> 'Rene Maldonado', 'email'=>'rene.maldonado@gmail.com', 'password'=>'prueba']);

    App\Establishment::truncate();
    App\Establishment::create(["name"=>"Generador de Residuos no Peligrosos","commune_id"=> 13504,"company_id"=> 1,"ciiu_id"=> "C1110","region_id"=>13,"retc_code"=> 1, 'type'=>'GeneradorIndustrial']);

    App\UserEstablishment::truncate();
    App\UserEstablishment::create(["user_id"=>1, "establishment_id" => 1, "retc_id" => 119010]);

// ************************

  	App\User::create(['name'=> 'Osvaldo Miranda', 'email'=>'osvaldo.omiranda@gmail.com', 'password'=>'prueba']);

    App\Establishment::create(["name"=>"Generador Municipal","commune_id"=> 13504,"company_id"=> 1,"ciiu_id"=> "C1110","region_id"=>13,"retc_code"=> 1, 'type'=>'GeneradorMunicipal']);

    App\UserEstablishment::create(["user_id"=>2, "establishment_id" => 2, "retc_id" => 119010]);

// ************************

  	App\User::create(['name'=> 'Maritza Barrera', 'email'=>'maritza@gmail.com', 'password'=>'prueba']);

    App\Establishment::create(["name"=>"Centro de Acopio","commune_id"=> 13504,"company_id"=> 1,"ciiu_id"=> "C1110","region_id"=>13,"retc_code"=> 1, 'type'=>'CentroAcopio']);

    App\UserEstablishment::create(["user_id"=>3, "establishment_id" => 3, "retc_id" => 119010]);


// ************************

  	App\User::create(['name'=> 'Fredy Ramirez', 'email'=>'frodo@gmail.com', 'password'=>'prueba']);

    App\Establishment::create(["name"=>"Destinatario Final","commune_id"=> 13504,"company_id"=> 1,"ciiu_id"=> "C1110","region_id"=>13,"retc_code"=> 1, 'type'=>'DestinatarioFinal']);

    App\UserEstablishment::create(["user_id"=>4, "establishment_id"=>4, "retc_id" => 119010]);



// ************************

	  App\Region::truncate();  
		App\Region::create(['id' => 1, 'name' => 'Tarapacá', 'subdere' => 1, 'order' => 2, 'status' => 1]);
		App\Region::create(['id' => 2, 'name' => 'Antofagasta', 'subdere' => 2, 'order' => 3, 'status' => 1]);
		App\Region::create(['id' => 3, 'name' => 'Atacama', 'subdere' => 3, 'order' => 4, 'status' => 1]);
		App\Region::create(['id' => 4, 'name' => 'Coquimbo', 'subdere' => 4, 'order' => 5, 'status' => 1]);
		App\Region::create(['id' => 5, 'name' => 'Valparaíso', 'subdere' => 5, 'order' => 6, 'status' => 1]);
		App\Region::create(['id' => 6, 'name' => "Libertador Gral. Bernardo O'Higgins", 'subdere' => 6, 'order' => 8, 'status' => 1]);
		App\Region::create(['id' => 7, 'name' => 'Maule', 'subdere' => 7, 'order' => 9, 'status' => 1]);
		App\Region::create(['id' => 8, 'name' => 'Biobío', 'subdere' => 8, 'order' => 11, 'status' => 1]);
		App\Region::create(['id' => 9, 'name' => 'Araucanía', 'subdere' => 9, 'order' => 12, 'status' => 1]);
		App\Region::create(['id' => 10, 'name' => 'Los Lagos', 'subdere' => 10, 'order' => 14, 'status' => 1]);
		App\Region::create(['id' => 11, 'name' => 'Aysén del Gral. Carlos Ibañez del Campo', 'subdere' => 11, 'order' => 15, 'status' => 1]);
		App\Region::create(['id' => 12, 'name' => 'Magallanes y de la Antártica Chilena', 'subdere' => 12, 'order' => 16, 'status' => 1]);
		App\Region::create(['id' => 13, 'name' => 'Metropolitana de Santiago', 'subdere' => 13, 'order' => 7, 'status' => 1]);
		App\Region::create(['id' => 14, 'name' => 'Los Ríos', 'subdere' => 14, 'order' => 13, 'status' => 1]);
		App\Region::create(['id' => 15, 'name' => 'Arica y Parinacota', 'subdere' => 15, 'order' => 1, 'status' => 1]);
		App\Region::create(['id' => 16, 'name' => 'Ñuble', 'subdere' => 16, 'order' => 10, 'status' => 1]);


		App\Commune::truncate();
		App\Commune::create(['id' => 13503, 'name' => 'Curacaví', 'subdere' => 13503, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13504, 'name' => 'María Pinto', 'subdere' => 13504, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13505, 'name' => 'San Pedro', 'subdere' => 13505, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13601, 'name' => 'Talagante', 'subdere' => 13601, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13602, 'name' => 'El Monte', 'subdere' => 13602, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13603, 'name' => 'Isla de Maipo', 'subdere' => 13603, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13604, 'name' => 'Padre Hurtado', 'subdere' => 13604, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13605, 'name' => 'Peñaflor', 'subdere' => 13605, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 1107, 'name' => 'Alto Hospicio', 'subdere' => 1107, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 9109, 'name' => 'Loncoche', 'subdere' => 9109, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 5705, 'name' => 'Putaendo', 'subdere' => 5705, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5706, 'name' => 'Santa María', 'subdere' => 5706, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 6101, 'name' => 'Rancagua', 'subdere' => 6101, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6102, 'name' => 'Codegua', 'subdere' => 6102, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6103, 'name' => 'Coinco', 'subdere' => 6103, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6104, 'name' => 'Coltauco', 'subdere' => 6104, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6105, 'name' => 'Doñihue', 'subdere' => 6105, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6106, 'name' => 'Graneros', 'subdere' => 6106, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6107, 'name' => 'Las Cabras', 'subdere' => 6107, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6108, 'name' => 'Machalí', 'subdere' => 6108, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6109, 'name' => 'Malloa', 'subdere' => 6109, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6110, 'name' => 'Mostazal', 'subdere' => 6110, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6111, 'name' => 'Olivar', 'subdere' => 6111, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6112, 'name' => 'Peumo', 'subdere' => 6112, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6113, 'name' => 'Pichidegua', 'subdere' => 6113, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6114, 'name' => 'Quinta de Tilcoco', 'subdere' => 6114, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6115, 'name' => 'Rengo', 'subdere' => 6115, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6116, 'name' => 'Requínoa', 'subdere' => 6116, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6117, 'name' => 'San Vicente', 'subdere' => 6117, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6201, 'name' => 'Pichilemu', 'subdere' => 6201, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6202, 'name' => 'La Estrella', 'subdere' => 6202, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6203, 'name' => 'Litueche', 'subdere' => 6203, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6204, 'name' => 'Marchihue', 'subdere' => 6204, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6205, 'name' => 'Navidad', 'subdere' => 6205, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6206, 'name' => 'Paredones', 'subdere' => 6206, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6301, 'name' => 'San Fernando', 'subdere' => 6301, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6302, 'name' => 'Chépica', 'subdere' => 6302, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6303, 'name' => 'Chimbarongo', 'subdere' => 6303, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6304, 'name' => 'Lolol', 'subdere' => 6304, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6305, 'name' => 'Nancagua', 'subdere' => 6305, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6306, 'name' => 'Palmilla', 'subdere' => 6306, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6307, 'name' => 'Peralillo', 'subdere' => 6307, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6308, 'name' => 'Placilla', 'subdere' => 6308, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6309, 'name' => 'Pumanque', 'subdere' => 6309, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 6310, 'name' => 'Santa Cruz', 'subdere' => 6310, 'region_id' => 6, 'status' => 1]);
		App\Commune::create(['id' => 7101, 'name' => 'Talca', 'subdere' => 7101, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7102, 'name' => 'Constitución', 'subdere' => 7102, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7103, 'name' => 'Curepto', 'subdere' => 7103, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7104, 'name' => 'Empedrado', 'subdere' => 7104, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7105, 'name' => 'Maule', 'subdere' => 7105, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7106, 'name' => 'Pelarco', 'subdere' => 7106, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7107, 'name' => 'Pencahue', 'subdere' => 7107, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7108, 'name' => 'Río Claro', 'subdere' => 7108, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7109, 'name' => 'San Clemente', 'subdere' => 7109, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7110, 'name' => 'San Rafael', 'subdere' => 7110, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 10209, 'name' => 'Quemchi', 'subdere' => 10209, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10210, 'name' => 'Quinchao', 'subdere' => 10210, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10301, 'name' => 'Osorno', 'subdere' => 10301, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10302, 'name' => 'Puerto Octay', 'subdere' => 10302, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10303, 'name' => 'Purranque', 'subdere' => 10303, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10304, 'name' => 'Puyehue', 'subdere' => 10304, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10305, 'name' => 'Río Negro', 'subdere' => 10305, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10306, 'name' => 'San Juan de la Costa', 'subdere' => 10306, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10307, 'name' => 'San Pablo', 'subdere' => 10307, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 7308, 'name' => 'Teno', 'subdere' => 7308, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 2203, 'name' => 'San Pedro Atacama', 'subdere' => 2203, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 11201, 'name' => 'Aysén', 'subdere' => 11201, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 8314, 'name' => 'Alto Biobío', 'subdere' => 8314, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 11302, 'name' => 'OHiggins', 'subdere' => 11302, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 5108, 'name' => 'Villa Alemana', 'subdere' => 5804, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5505, 'name' => 'Limache', 'subdere' => 5802, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5507, 'name' => 'Olmué', 'subdere' => 5803, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 10102, 'name' => 'Calbuco', 'subdere' => 10102, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10103, 'name' => 'Cochamó', 'subdere' => 10103, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10104, 'name' => 'Fresia', 'subdere' => 10104, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10105, 'name' => 'Frutillar', 'subdere' => 10105, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10106, 'name' => 'Los Muermos', 'subdere' => 10106, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10107, 'name' => 'Llanquihue', 'subdere' => 10107, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10108, 'name' => 'Maullín', 'subdere' => 10108, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10109, 'name' => 'Puerto Varas', 'subdere' => 10109, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10201, 'name' => 'Castro', 'subdere' => 10201, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10202, 'name' => 'Ancud', 'subdere' => 10202, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10203, 'name' => 'Chonchi', 'subdere' => 10203, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10204, 'name' => 'Curaco de Vélez', 'subdere' => 10204, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10205, 'name' => 'Dalcahue', 'subdere' => 10205, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10206, 'name' => 'Puqueldón', 'subdere' => 10206, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10207, 'name' => 'Queilén', 'subdere' => 10207, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10208, 'name' => 'Quellón', 'subdere' => 10208, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 9121, 'name' => 'Cholchol', 'subdere' => 9121, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 1102, 'name' => 'Camiña', 'subdere' => 1402, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 1104, 'name' => 'Huara', 'subdere' => 1404, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 1105, 'name' => 'Pica', 'subdere' => 1405, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 1106, 'name' => 'Pozo Almonte', 'subdere' => 1401, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 1201, 'name' => 'Arica', 'subdere' => 15101, 'region_id' => 15, 'status' => 1]);
		App\Commune::create(['id' => 1202, 'name' => 'Camarones', 'subdere' => 15102, 'region_id' => 15, 'status' => 1]);
		App\Commune::create(['id' => 1301, 'name' => 'Putre', 'subdere' => 15201, 'region_id' => 15, 'status' => 1]);
		App\Commune::create(['id' => 1302, 'name' => 'General Lagos', 'subdere' => 15202, 'region_id' => 15, 'status' => 1]);
		App\Commune::create(['id' => 2101, 'name' => 'Antofagasta', 'subdere' => 2101, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2102, 'name' => 'Mejillones', 'subdere' => 2102, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2103, 'name' => 'Sierra Gorda', 'subdere' => 2103, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2104, 'name' => 'Taltal', 'subdere' => 2104, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2201, 'name' => 'Calama', 'subdere' => 2201, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2202, 'name' => 'Ollagüe', 'subdere' => 2202, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2301, 'name' => 'Tocopilla', 'subdere' => 2301, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 2302, 'name' => 'María Elena', 'subdere' => 2302, 'region_id' => 2, 'status' => 1]);
		App\Commune::create(['id' => 3101, 'name' => 'Copiapó', 'subdere' => 3101, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3102, 'name' => 'Caldera', 'subdere' => 3102, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3103, 'name' => 'Tierra Amarilla', 'subdere' => 3103, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3201, 'name' => 'Chañaral', 'subdere' => 3201, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 10401, 'name' => 'Chaitén', 'subdere' => 10401, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10402, 'name' => 'Futaleufú', 'subdere' => 10402, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10403, 'name' => 'Hualaihué', 'subdere' => 10403, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10404, 'name' => 'Palena', 'subdere' => 10404, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 10501, 'name' => 'Valdivia', 'subdere' => 14101, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10502, 'name' => 'Corral', 'subdere' => 14102, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10503, 'name' => 'Futrono', 'subdere' => 14202, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10504, 'name' => 'La Unión', 'subdere' => 14201, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10505, 'name' => 'Lago Ranco', 'subdere' => 14203, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10506, 'name' => 'Lanco', 'subdere' => 14103, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10507, 'name' => 'Los Lagos', 'subdere' => 14104, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10508, 'name' => 'Máfil', 'subdere' => 14105, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10509, 'name' => 'Mariquina', 'subdere' => 14106, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10510, 'name' => 'Paillaco', 'subdere' => 14107, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 1101, 'name' => 'Iquique', 'subdere' => 1101, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 10511, 'name' => 'Panguipulli', 'subdere' => 14108, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 10512, 'name' => 'Río Bueno', 'subdere' => 14204, 'region_id' => 14, 'status' => 1]);
		App\Commune::create(['id' => 11101, 'name' => 'Coihaique', 'subdere' => 11101, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 11102, 'name' => 'Lago Verde', 'subdere' => 11102, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 8112, 'name' => 'Hualpén', 'subdere' => 8112, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 11202, 'name' => 'Cisnes', 'subdere' => 11202, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 11203, 'name' => 'Guaitecas', 'subdere' => 11203, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 11301, 'name' => 'Cochrane', 'subdere' => 11301, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 13130, 'name' => 'San Miguel', 'subdere' => 13130, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 11303, 'name' => 'Tortel', 'subdere' => 11303, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 11401, 'name' => 'Chile Chico', 'subdere' => 11401, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 11402, 'name' => 'Río Ibáñez', 'subdere' => 11402, 'region_id' => 11, 'status' => 1]);
		App\Commune::create(['id' => 12101, 'name' => 'Punta Arenas', 'subdere' => 12101, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12102, 'name' => 'Laguna Blanca', 'subdere' => 12102, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12103, 'name' => 'Río Verde', 'subdere' => 12103, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12104, 'name' => 'San Gregorio', 'subdere' => 12104, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12201, 'name' => 'Cabo de Hornos (Ex-Navarino)', 'subdere' => 12201, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12202, 'name' => 'Antártica', 'subdere' => 12202, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12301, 'name' => 'Porvenir', 'subdere' => 12301, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12302, 'name' => 'Primavera', 'subdere' => 12302, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12303, 'name' => 'Timaukel', 'subdere' => 12303, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12401, 'name' => 'Natales', 'subdere' => 12401, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 12402, 'name' => 'Torres del Paine', 'subdere' => 12402, 'region_id' => 12, 'status' => 1]);
		App\Commune::create(['id' => 13101, 'name' => 'Santiago', 'subdere' => 13101, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13102, 'name' => 'Cerrillos', 'subdere' => 13102, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13103, 'name' => 'Cerro Navia', 'subdere' => 13103, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13104, 'name' => 'Conchalí', 'subdere' => 13104, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13105, 'name' => 'El Bosque', 'subdere' => 13105, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13106, 'name' => 'Estación Central', 'subdere' => 13106, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13107, 'name' => 'Huechuraba', 'subdere' => 13107, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13108, 'name' => 'Independencia', 'subdere' => 13108, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13109, 'name' => 'La Cisterna', 'subdere' => 13109, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13110, 'name' => 'La Florida', 'subdere' => 13110, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13111, 'name' => 'La Granja', 'subdere' => 13111, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13112, 'name' => 'La Pintana', 'subdere' => 13112, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13113, 'name' => 'La Reina', 'subdere' => 13113, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13114, 'name' => 'Las Condes', 'subdere' => 13114, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13115, 'name' => 'Lo Barnechea', 'subdere' => 13115, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13116, 'name' => 'Lo Espejo', 'subdere' => 13116, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13117, 'name' => 'Lo Prado', 'subdere' => 13117, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13118, 'name' => 'Macul', 'subdere' => 13118, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13119, 'name' => 'Maipú', 'subdere' => 13119, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13120, 'name' => 'Ñuñoa', 'subdere' => 13120, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13121, 'name' => 'Pedro Aguirre Cerda', 'subdere' => 13121, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13122, 'name' => 'Peñalolén', 'subdere' => 13122, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13123, 'name' => 'Providencia', 'subdere' => 13123, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13124, 'name' => 'Pudahuel', 'subdere' => 13124, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13125, 'name' => 'Quilicura', 'subdere' => 13125, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13126, 'name' => 'Quinta Normal', 'subdere' => 13126, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13127, 'name' => 'Recoleta', 'subdere' => 13127, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13128, 'name' => 'Renca', 'subdere' => 13128, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13129, 'name' => 'San Joaquín', 'subdere' => 13129, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13202, 'name' => 'Pirque', 'subdere' => 13202, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13203, 'name' => 'San José de Maipo', 'subdere' => 13203, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13301, 'name' => 'Colina', 'subdere' => 13301, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13302, 'name' => 'Lampa', 'subdere' => 13302, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13303, 'name' => 'Tiltil', 'subdere' => 13303, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13401, 'name' => 'San Bernardo', 'subdere' => 13401, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13402, 'name' => 'Buin', 'subdere' => 13402, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13403, 'name' => 'Calera de Tango', 'subdere' => 13403, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13404, 'name' => 'Paine', 'subdere' => 13404, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13501, 'name' => 'Melipilla', 'subdere' => 13501, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 13502, 'name' => 'Alhué', 'subdere' => 13502, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 5503, 'name' => 'Hijuelas', 'subdere' => 5503, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5504, 'name' => 'La Cruz', 'subdere' => 5504, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 13132, 'name' => 'Vitacura', 'subdere' => 13132, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 5506, 'name' => 'Nogales', 'subdere' => 5506, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 13201, 'name' => 'Puente Alto', 'subdere' => 13201, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 5601, 'name' => 'San Antonio', 'subdere' => 5601, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5602, 'name' => 'Algarrobo', 'subdere' => 5602, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5603, 'name' => 'Cartagena', 'subdere' => 5603, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5604, 'name' => 'El Quisco', 'subdere' => 5604, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5605, 'name' => 'El Tabo', 'subdere' => 5605, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5606, 'name' => 'Santo Domingo', 'subdere' => 5606, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5701, 'name' => 'San Felipe', 'subdere' => 5701, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5702, 'name' => 'Catemu', 'subdere' => 5702, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5703, 'name' => 'Llaillay', 'subdere' => 5703, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5704, 'name' => 'Panquehue', 'subdere' => 5704, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 7201, 'name' => 'Cauquenes', 'subdere' => 7201, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7202, 'name' => 'Chanco', 'subdere' => 7202, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7203, 'name' => 'Pelluhue', 'subdere' => 7203, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7301, 'name' => 'Curicó', 'subdere' => 7301, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7302, 'name' => 'Hualañé', 'subdere' => 7302, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7303, 'name' => 'Licantén', 'subdere' => 7303, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7304, 'name' => 'Molina', 'subdere' => 7304, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7305, 'name' => 'Rauco', 'subdere' => 7305, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7306, 'name' => 'Romeral', 'subdere' => 7306, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7307, 'name' => 'Sagrada Familia', 'subdere' => 7307, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7309, 'name' => 'Vichuquén', 'subdere' => 7309, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7401, 'name' => 'Linares', 'subdere' => 7401, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7402, 'name' => 'Colbún', 'subdere' => 7402, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7403, 'name' => 'Longaví', 'subdere' => 7403, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7404, 'name' => 'Parral', 'subdere' => 7404, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7405, 'name' => 'Retiro', 'subdere' => 7405, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7406, 'name' => 'San Javier', 'subdere' => 7406, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7407, 'name' => 'Villa Alegre', 'subdere' => 7407, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 7408, 'name' => 'Yerbas Buenas', 'subdere' => 7408, 'region_id' => 7, 'status' => 1]);
		App\Commune::create(['id' => 8101, 'name' => 'Concepción', 'subdere' => 8101, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8102, 'name' => 'Coronel', 'subdere' => 8102, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8103, 'name' => 'Chiguayante', 'subdere' => 8103, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8104, 'name' => 'Florida', 'subdere' => 8104, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8105, 'name' => 'Hualqui', 'subdere' => 8105, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8106, 'name' => 'Lota', 'subdere' => 8106, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8107, 'name' => 'Penco', 'subdere' => 8107, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 3202, 'name' => 'Diego de Almagro', 'subdere' => 3202, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3301, 'name' => 'Vallenar', 'subdere' => 3301, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3302, 'name' => 'Alto del Carmen', 'subdere' => 3302, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 3303, 'name' => 'Freirina', 'subdere' => 3303, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 8108, 'name' => 'San Pedro de la Paz', 'subdere' => 8108, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8109, 'name' => 'Santa Juana', 'subdere' => 8109, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8110, 'name' => 'Talcahuano', 'subdere' => 8110, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8111, 'name' => 'Tomé', 'subdere' => 8111, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8201, 'name' => 'Lebu', 'subdere' => 8201, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8202, 'name' => 'Arauco', 'subdere' => 8202, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8203, 'name' => 'Cañete', 'subdere' => 8203, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8204, 'name' => 'Contulmo', 'subdere' => 8204, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8205, 'name' => 'Curanilahue', 'subdere' => 8205, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8206, 'name' => 'Los Alamos', 'subdere' => 8206, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8207, 'name' => 'Tirúa', 'subdere' => 8207, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8301, 'name' => 'Los Angeles', 'subdere' => 8301, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8302, 'name' => 'Antuco', 'subdere' => 8302, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8303, 'name' => 'Cabrero', 'subdere' => 8303, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8304, 'name' => 'Laja', 'subdere' => 8304, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8305, 'name' => 'Mulchén', 'subdere' => 8305, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8306, 'name' => 'Nacimiento', 'subdere' => 8306, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8307, 'name' => 'Negrete', 'subdere' => 8307, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8308, 'name' => 'Quilaco', 'subdere' => 8308, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8309, 'name' => 'Quilleco', 'subdere' => 8309, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8310, 'name' => 'San Rosendo', 'subdere' => 8310, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8311, 'name' => 'Santa Bárbara', 'subdere' => 8311, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8312, 'name' => 'Tucapel', 'subdere' => 8312, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 8313, 'name' => 'Yumbel', 'subdere' => 8313, 'region_id' => 8, 'status' => 1]);
		App\Commune::create(['id' => 9101, 'name' => 'Temuco', 'subdere' => 9101, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9102, 'name' => 'Carahue', 'subdere' => 9102, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9103, 'name' => 'Cunco', 'subdere' => 9103, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9104, 'name' => 'Curarrehue', 'subdere' => 9104, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9105, 'name' => 'Freire', 'subdere' => 9105, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9106, 'name' => 'Galvarino', 'subdere' => 9106, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9107, 'name' => 'Gorbea', 'subdere' => 9107, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9108, 'name' => 'Lautaro', 'subdere' => 9108, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9110, 'name' => 'Melipeuco', 'subdere' => 9110, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9111, 'name' => 'Nueva Imperial', 'subdere' => 9111, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9112, 'name' => 'Padre Las Casas', 'subdere' => 9112, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9113, 'name' => 'Perquenco', 'subdere' => 9113, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9114, 'name' => 'Pitrufquén', 'subdere' => 9114, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9115, 'name' => 'Pucón', 'subdere' => 9115, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9116, 'name' => 'Saavedra', 'subdere' => 9116, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9117, 'name' => 'Teodoro Schmidt', 'subdere' => 9117, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9118, 'name' => 'Toltén', 'subdere' => 9118, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9119, 'name' => 'Vilcún', 'subdere' => 9119, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9120, 'name' => 'Villarrica', 'subdere' => 9120, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9201, 'name' => 'Angol', 'subdere' => 9201, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9202, 'name' => 'Collipulli', 'subdere' => 9202, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9203, 'name' => 'Curacautín', 'subdere' => 9203, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9204, 'name' => 'Ercilla', 'subdere' => 9204, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9205, 'name' => 'Lonquimay', 'subdere' => 9205, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9206, 'name' => 'Los Sauces', 'subdere' => 9206, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9207, 'name' => 'Lumaco', 'subdere' => 9207, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9208, 'name' => 'Purén', 'subdere' => 9208, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9209, 'name' => 'Renaico', 'subdere' => 9209, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9210, 'name' => 'Traiguén', 'subdere' => 9210, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 9211, 'name' => 'Victoria', 'subdere' => 9211, 'region_id' => 9, 'status' => 1]);
		App\Commune::create(['id' => 3304, 'name' => 'Huasco', 'subdere' => 3304, 'region_id' => 3, 'status' => 1]);
		App\Commune::create(['id' => 4101, 'name' => 'La Serena', 'subdere' => 4101, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4102, 'name' => 'Coquimbo', 'subdere' => 4102, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4103, 'name' => 'Andacollo', 'subdere' => 4103, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4104, 'name' => 'La Higuera', 'subdere' => 4104, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4105, 'name' => 'Paiguano', 'subdere' => 4105, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4106, 'name' => 'Vicuña', 'subdere' => 4106, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4201, 'name' => 'Illapel', 'subdere' => 4201, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4202, 'name' => 'Canela', 'subdere' => 4202, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4203, 'name' => 'Los Vilos', 'subdere' => 4203, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4204, 'name' => 'Salamanca', 'subdere' => 4204, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4301, 'name' => 'Ovalle', 'subdere' => 4301, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4302, 'name' => 'Combarbalá', 'subdere' => 4302, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4303, 'name' => 'Monte Patria', 'subdere' => 4303, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4304, 'name' => 'Punitaqui', 'subdere' => 4304, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 4305, 'name' => 'Río Hurtado', 'subdere' => 4305, 'region_id' => 4, 'status' => 1]);
		App\Commune::create(['id' => 5101, 'name' => 'Valparaíso', 'subdere' => 5101, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5102, 'name' => 'Casablanca', 'subdere' => 5102, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5103, 'name' => 'Concón', 'subdere' => 5103, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5104, 'name' => 'Juan Fernández', 'subdere' => 5104, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5105, 'name' => 'Puchuncaví', 'subdere' => 5105, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5107, 'name' => 'Quintero', 'subdere' => 5107, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 13131, 'name' => 'San Ramón', 'subdere' => 13131, 'region_id' => 13, 'status' => 1]);
		App\Commune::create(['id' => 5109, 'name' => 'Viña del Mar', 'subdere' => 5109, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5201, 'name' => 'Isla de Pascua', 'subdere' => 5201, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5301, 'name' => 'Los Andes', 'subdere' => 5301, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5302, 'name' => 'Calle Larga', 'subdere' => 5302, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5303, 'name' => 'Rinconada', 'subdere' => 5303, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5304, 'name' => 'San Esteban', 'subdere' => 5304, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5401, 'name' => 'La Ligua', 'subdere' => 5401, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5402, 'name' => 'Cabildo', 'subdere' => 5402, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5403, 'name' => 'Papudo', 'subdere' => 5403, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5404, 'name' => 'Petorca', 'subdere' => 5404, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5405, 'name' => 'Zapallar', 'subdere' => 5405, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5501, 'name' => 'Quillota', 'subdere' => 5501, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 5502, 'name' => 'Calera', 'subdere' => 5502, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 10101, 'name' => 'Puerto Montt', 'subdere' => 10101, 'region_id' => 10, 'status' => 1]);
		App\Commune::create(['id' => 1103, 'name' => 'Colchane', 'subdere' => 1403, 'region_id' => 1, 'status' => 1]);
		App\Commune::create(['id' => 5106, 'name' => 'Quilpué', 'subdere' => 5801, 'region_id' => 5, 'status' => 1]);
		App\Commune::create(['id' => 8421, 'name' => 'Yungay', 'subdere' => 16109, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8401, 'name' => 'Chillán', 'subdere' => 16101, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8408, 'name' => 'Ninhue', 'subdere' => 16204, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8412, 'name' => 'Portezuelo', 'subdere' => 16205, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8413, 'name' => 'Quillón', 'subdere' => 16107, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8415, 'name' => 'Ránquil', 'subdere' => 16206, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8417, 'name' => 'San Fabián', 'subdere' => 16304, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8419, 'name' => 'San Nicolás', 'subdere' => 16305, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8414, 'name' => 'Quirihue', 'subdere' => 16201, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8402, 'name' => 'Bulnes', 'subdere' => 16102, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8407, 'name' => 'El Carmen', 'subdere' => 16104, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8410, 'name' => 'Pemuco', 'subdere' => 16105, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8411, 'name' => 'Pinto', 'subdere' => 16106, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8418, 'name' => 'San Ignacio', 'subdere' => 16108, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8409, 'name' => 'Ñiquén', 'subdere' => 16303, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8403, 'name' => 'Cobquecura', 'subdere' => 16202, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8404, 'name' => 'Coelemu', 'subdere' => 16203, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8405, 'name' => 'Coihueco', 'subdere' => 16302, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8416, 'name' => 'San Carlos', 'subdere' => 16301, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8420, 'name' => 'Treguaco', 'subdere' => 16207, 'region_id' => 16, 'status' => 1]);
		App\Commune::create(['id' => 8406, 'name' => 'Chillan Viejo', 'subdere' => 16103, 'region_id' => 16, 'status' => 1]);

		App\LerCapitulo::truncate();
		App\LerCapitulo::create(['id' => 1, 'name' => 'Residuos de la prospección, extracción de minas y canteras y tratamientos físicos y químicos de minerales']);
		App\LerCapitulo::create(['id' => 2, 'name' => 'Residuos de la agricultura, horticultura, acuicultura, silvicultura, caza y pesca; residuos de la preparación y elaboración de alimentos']);
		App\LerCapitulo::create(['id' => 3, 'name' => 'Residuos de la transformación de la madera y de la producción de tableros y muebles, pasta de papel, papel y cartón']);
		App\LerCapitulo::create(['id' => 4, 'name' => 'Residuos de las industrias del cuero, de la piel y textil']);
		App\LerCapitulo::create(['id' => 5, 'name' => 'Residuos del refino de petróleo, purificación del gas natural y tratamiento pirolítico del carbón']);
		App\LerCapitulo::create(['id' => 6, 'name' => 'Residuos de procesos químicos inorgánicos']);
		App\LerCapitulo::create(['id' => 7, 'name' => 'Residuos de procesos químicos orgánicos']);
		App\LerCapitulo::create(['id' => 8, 'name' => 'Residuos de la fabricación, formulación, distribución y utilización (FFDU) de revestimientos (pinturas, barnices y esmaltes vítreos), adhesivos, sellantes y tintas de impresión']);
		App\LerCapitulo::create(['id' => 9, 'name' => 'Residuos de la industria fotográfica']);
		App\LerCapitulo::create(['id' => 10, 'name' => 'Residuos de procesos térmicos']);
		App\LerCapitulo::create(['id' => 11, 'name' => 'Residuos del tratamiento químico de superficie y del recubrimiento de metales y otros materiales; residuos de la hidrometalurgia no férrea']);
		App\LerCapitulo::create(['id' => 12, 'name' => 'Residuos del moldeado y del tratamiento físico y mecánico de superficie de metales y plásticos']);
		App\LerCapitulo::create(['id' => 15, 'name' => 'Residuos de envases; absorbentes, trapos de limpieza, materiales de filtración y ropas de protección no especificados en otra categoría']);
		App\LerCapitulo::create(['id' => 16, 'name' => 'Residuos no especificados en otro capítulo de la lista']);
		App\LerCapitulo::create(['id' => 17, 'name' => 'Residuos de la construcción y demolición ']);
		App\LerCapitulo::create(['id' => 18, 'name' => 'Residuos de servicios médicos o veterinarios o de investigación asociada (salvo los residuos de cocina y de restaurante no procedentes directamente de la prestación de cuidados sanitarios)']);
		App\LerCapitulo::create(['id' => 19, 'name' => 'Residuos de las instalaciones para el tratamiento de residuos, de las plantas externas de tratamiento de aguas residuales y de la preparación de agua para consumo humano y de agua para uso industrial']);
		App\LerCapitulo::create(['id' => 20, 'name' => 'Residuos municipales (residuos domésticos y residuos asimilables procedentes de los comercios, industrias e instituciones), incluidas las fracciones recogidas selectivamente']);


		App\LerSubcapitulo::truncate();
		App\LerSubcapitulo::create(['id' => 1 ,'capitulo_id' => 1 , 'name' => ' Residuos de la extracción de minerales']);
		App\LerSubcapitulo::create(['id' => 1 ,'capitulo_id' => 3 , 'name' => ' Residuos de la transformación física y química de minerales metálicos']);
		App\LerSubcapitulo::create(['id' => 1 ,'capitulo_id' => 4 , 'name' => ' Residuos de la transformación física y química de minerales no metálicos']);
		App\LerSubcapitulo::create(['id' => 1 ,'capitulo_id' => 5 , 'name' => ' Lodos y otros residuos de perforaciones']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 1 , 'name' => ' Residuos de la agricultura, horticultura, acuicultura, silvicultura, caza y pesca']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 2 , 'name' => ' Residuos de la preparación y elaboración de carne, pescado y otros alimentos de origen animal']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 3 , 'name' => ' Residuos de la preparación y elaboración de frutas, hortalizas, cereales, aceites comestibles, cacao, café, té y tabaco; producción de conservas; producción de levadura y extracto de levadura, preparación y fermentación de melazas']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 4 , 'name' => ' Residuos de la elaboración de azúcar']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 5 , 'name' => ' Residuos de la industria de productos lácteos']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 6 , 'name' => ' Residuos de la industria de panadería y pastelería']);
		App\LerSubcapitulo::create(['id' => 2 ,'capitulo_id' => 7 , 'name' => ' Residuos de la producción de bebidas alcohólicas y no alcohólicas (excepto café, té y cacao)']);
		App\LerSubcapitulo::create(['id' => 3 ,'capitulo_id' => 1 , 'name' => ' Residuos de la transformación de la madera y de la producción de tableros y muebles']);
		App\LerSubcapitulo::create(['id' => 3 ,'capitulo_id' => 2 , 'name' => ' Residuos de los tratamientos de conservación de la madera']);
		App\LerSubcapitulo::create(['id' => 3 ,'capitulo_id' => 3 , 'name' => ' Residuos de la producción y transformación de pasta de papel, papel y cartón']);
		App\LerSubcapitulo::create(['id' => 4 ,'capitulo_id' => 1 , 'name' => 'Residuos de las industrias del cuero y de la piel']);
		App\LerSubcapitulo::create(['id' => 4 ,'capitulo_id' => 2 , 'name' => 'Residuos de la industria textil']);
		App\LerSubcapitulo::create(['id' => 5 ,'capitulo_id' => 1 , 'name' => 'Residuos del refino de petróleo']);
		  }
		}
