<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Paciente;
use App\Models\Registro;
use App\Models\CitasPendiente;
use App\Models\ProximasCita;
use Database\Seeders\RolSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);

        // Crear usuarios
        // Role::factory()->count(10)->create();
        User::factory()->count(10)->create();

        // // Crear pacientes
        Paciente::factory()->count(50)->create();

        // // Crear registros
        Registro::factory()->count(100)->create();

        // // Crear citas pendientes
        CitasPendiente::factory()->count(20)->create();

        // // Crear próximas citas
        ProximasCita::factory()->count(30)->create();
    }
}
