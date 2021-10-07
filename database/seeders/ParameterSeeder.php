<?php

namespace Database\Seeders;

use App\Models\GroupParameter;
use App\Models\Image;
use App\Models\Parameter;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group =GroupParameter::where('description', 'TABLA - AUTORIDADES')->first();

        Parameter::create([
            'group_id' => $group->id,
            'description' => 'Cnl. DAEN Javier Antonio Jimenez Terán<br>
                                Magnifico Rector<br>
                                Escuela Militar de Ingeniería<br>
                                2021'
        ]);

        Parameter::create([
            'group_id' => $group->id,
            'description' => 'Cnl. DAEN Carlos René Cadima Enríquez<br>
                                Vicerrector de Posgrado<br>
                                Escuela Militar de Ingeniería<br>
                                2021'
        ]);

        $parameters = Parameter::where('group_id', $group->id)->get();

        foreach ($parameters as $parameter) {
            Image::factory(1)->create([
                'imageable_id' => $parameter->id,
                'imageable_type' => Parameter::class
            ]);
        }

    }
}
