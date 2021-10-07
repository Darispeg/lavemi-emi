<?php

namespace Database\Seeders;

use App\Models\GroupParameter;
use Illuminate\Database\Seeder;

class GroupParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupParameter::create([
            'name' => 'Vision',
            'description' => 'Ser un Laboratorio de referencia nacional e internacional,
                            reconocidos por la calidad del personal con capacidad y
                            competencia en los servicios que brindamos, con ensayos
                            acreditados acordes a la Norma NB ISO/IEC 17025:2018.'
        ]);

        GroupParameter::create([
            'name' => 'Mision',
            'description' => 'El Laboratorio de Verificación de la Escuela Militar de Ingeniería es un
                            laboratorio Acreditado que brinda servicios de ensayos especializados,
                            enmarcados en los lineamientos de integridad, imparcialidad e independencia de los ensayos
                            y resultados, garantizando la máxima satisfacción, cobertura de las necesidades
                            y expectativas de nuestros clientes basados en nuestra capacidad y competencia técnica,
                            alta confiabilidad en los servicios que brindamos, para contribuir al desarrollo del Estado.'
        ]);

        GroupParameter::create([
            'name' => 'Autoridades',
            'description' => 'TABLA - AUTORIDADES'
        ]);
    }
}
