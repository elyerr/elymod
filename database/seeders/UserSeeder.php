<?php

namespace Database\Seeders;

use App\Models\User\User;
use App\Models\User\Scope;
use Illuminate\Database\Seeder;
use App\Models\Subscription\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();


        Group::updateOrCreate(['slug' => 'administrator'], ['slug' => 'administrator']);
        Group::updateOrCreate(['slug' => 'member'], ['slug' => 'member']);
        Group::updateOrCreate(['slug' => 'commerce'], ['slug' => 'commerce']);
        Group::updateOrCreate(['slug' => 'developer'], ['slug' => 'developer']);
        Group::updateOrCreate(['slug' => 'enterprise'], ['slug' => 'enterprise']);
        Group::updateOrCreate(['slug' => 'reseller'], ['slug' => 'reseller']);

        $scope = Scope::updateOrCreate(['gsr_id' => 'administrator:admin:full'], ['gsr_id' => 'administrator:admin:full']);

        $user = User::first();
        $user->scopes()->sync([$scope->id]);
    }
}
