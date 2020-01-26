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
        $this->call(UsuariosSeeder::class);

        Schema::disableForeignKeyConstraints();

        $this->call(FornecedoresSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(EnderecosSeeder::class);
        
        Schema::enableForeignKeyConstraints();
    }
}
