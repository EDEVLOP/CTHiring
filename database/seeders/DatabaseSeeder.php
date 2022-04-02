<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $this->call(CitiesTableSeeder::class);
        $this->call(UserDesignationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(OtpstoresTableSeeder::class);
        $this->call(MsgsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(IndustriesTableSeeder::class);
        $this->call(FunctionalAreasTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(ClientLocationTableSeeder::class);
        $this->call(ClientDesignationsTableSeeder::class);
        $this->call(ClientContactsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
    }
}
