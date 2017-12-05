<?php
namespace Empari\Geo\Database\Seeders;

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->delete();

        \Empari\Geo\Models\State::insert(array(
            //array('id' => -2, 'name' => 'Suframa', 'initials' => 'SU', 'country_id' => 1058),
            //array('id' => 99, 'name' => 'Exterior / Outros', 'initials' => 'EX', 'country_id' => 1058),
            array('id' => 41, 'name' => 'Paraná', 'initials' => 'PR', 'country_id' => 1058),
            array('id' => 35, 'name' => 'São Paulo', 'initials' => 'SP', 'country_id' => 1058),
            array('id' => 42, 'name' => 'Santa Catarina', 'initials' => 'SC', 'country_id' => 1058),
            array('id' => 43, 'name' => 'Rio Grande do Sul', 'initials' => 'RS', 'country_id' => 1058),
            array('id' => 31, 'name' => 'Minas Gerais', 'initials' => 'MG', 'country_id' => 1058),
            array('id' => 51, 'name' => 'Mato Grosso', 'initials' => 'MT', 'country_id' => 1058),
            array('id' => 33, 'name' => 'Rio de Janeiro', 'initials' => 'RJ', 'country_id' => 1058),
            array('id' => 50, 'name' => 'Mato Grosso do Sul', 'initials' => 'MS', 'country_id' => 1058),
            array('id' => 53, 'name' => 'Distrito Federal', 'initials' => 'DF', 'country_id' => 1058),
            array('id' => 52, 'name' => 'Goiás', 'initials' => 'GO', 'country_id' => 1058),
            array('id' => 29, 'name' => 'Bahia', 'initials' => 'BA', 'country_id' => 1058),
            array('id' => 25, 'name' => 'Paraíba', 'initials' => 'PB', 'country_id' => 1058),
            array('id' => 23, 'name' => 'Ceará', 'initials' => 'CE', 'country_id' => 1058),
            array('id' => 32, 'name' => 'Espírito Santo', 'initials' => 'ES', 'country_id' => 1058),
            array('id' => 26, 'name' => 'Pernambuco', 'initials' => 'PE', 'country_id' => 1058),
            array('id' => 24, 'name' => 'Rio Grande do Norte', 'initials' => 'RN', 'country_id' => 1058),
            array('id' => 13, 'name' => 'Amazonas', 'initials' => 'AM', 'country_id' => 1058),
            array('id' => 12, 'name' => 'Acre', 'initials' => 'AC', 'country_id' => 1058),
            array('id' => 27, 'name' => 'Alagoas', 'initials' => 'AL', 'country_id' => 1058),
            array('id' => 16, 'name' => 'Amapá', 'initials' => 'AP', 'country_id' => 1058),
            array('id' => 21, 'name' => 'Maranhão', 'initials' => 'MA', 'country_id' => 1058),
            array('id' => 15, 'name' => 'Pará', 'initials' => 'PA', 'country_id' => 1058),
            array('id' => 11, 'name' => 'Rondônia', 'initials' => 'RO', 'country_id' => 1058),
            array('id' => 14, 'name' => 'Roraima', 'initials' => 'RR', 'country_id' => 1058),
            array('id' => 28, 'name' => 'Sergipe', 'initials' => 'SE', 'country_id' => 1058),
            array('id' => 17, 'name' => 'Tocantins', 'initials' => 'TO', 'country_id' => 1058),
            array('id' => 22, 'name' => 'Piauí', 'initials' => 'PI', 'country_id' => 1058),
        ));
    }
}