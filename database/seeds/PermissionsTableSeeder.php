<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_admin',
            'browse_database',
            'browse_media',
            'browse_settings',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('menus');

        Permission::generateFor('roles');

        Permission::generateFor('users');

        Permission::generateFor('additional_infos');

        Permission::generateFor('jobs');

        Permission::generateFor('task_lists');

        Permission::generateFor('languages');

        Permission::generateFor('places');

        Permission::generateFor('reports');

        Permission::generateFor('critisms');

        Permission::generateFor('emergency_calls');

        Permission::generateFor('review_orders');

        Permission::generateFor('wallet_transactions');

        Permission::generateFor('wallets');

        Permission::generateFor('work_times');
    }
}
