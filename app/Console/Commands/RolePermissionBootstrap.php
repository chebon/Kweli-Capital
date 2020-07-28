<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionBootstrap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'myhao:bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and permissions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create property']);
        Permission::create(['name' => 'finance property']);
        Permission::create(['name' => 'mortgage property']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Finance Institution']);
        $role1->givePermissionTo('finance property');

        $role2 = Role::create(['name' => 'Property Manager']);
        $role2->givePermissionTo('create property');

        $role3 = Role::create(['name' => 'Public Users']);
        $role3->givePermissionTo('mortgage property');

        Role::create(['name' => 'super-admin']);
    }
}
