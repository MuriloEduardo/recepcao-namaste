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
        // $this->call(UsersTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ProfessionalParticipationsTableSeeder::class);
        $this->call(CustomerParticipationsTableSeeder::class);
        $this->call(CustomerTypesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(EventClassificationsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(HowDidFindOutsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(ParticipationsTableSeeder::class);
        $this->call(ProfessionalTypesTableSeeder::class);
        $this->call(ProfessionalsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}
