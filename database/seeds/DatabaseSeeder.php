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
        $this->call(UserSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(RegionalSeeder::class);
        $this->call(DadosMunicipiosSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(PartidosSeeder::class);
        $this->call(CargosSeeder::class);
        $this->call(AutoridadesSeeder::class);
    }
}
