<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Bloogger']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver el Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un rol'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.nosotros.index', 'description' => 'Ver listado de nosotros'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.nosotros.edit', 'description' => 'Editar nosotros'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.autoridades.index', 'description' => 'Ver listado de autoridades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.autoridades.create', 'description' => 'Crear autoridades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.autoridades.edit', 'description' => 'Editar autoridades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.autoridades.destroy', 'description' => 'Eliminar autoridades'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Elimar post'])->syncRoles([$role1, $role2]);
    }
}
