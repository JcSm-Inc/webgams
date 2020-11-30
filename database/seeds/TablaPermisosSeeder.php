<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;

class TablaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);
        Permission::create([
            'name'          => 'Navegar usuario',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver detalles de cada usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',
        ]);

        //ROLES
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roless del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver detalles de cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de roles',
            'slug'          => 'roles.create',
            'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',
        ]);

        //productos
        Permission::create([
            'name'          => 'Navegar Productos',
            'slug'          => 'productos.index',
            'description'   => 'Lista y navega todos los Productos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Productos',
            'slug'          => 'productos.show',
            'description'   => 'Ver detalles de cada Productos del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Productos',
            'slug'          => 'productos.create',
            'description'   => 'Crear  dato de un Producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Productos',
            'slug'          => 'productos.edit',
            'description'   => 'Editar cualquier dato de un Producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Productos',
            'slug'          => 'productos.destroy',
            'description'   => 'Eliminar cualquier Producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Reportes Productos',
            'slug'          => 'productos.reportes',
            'description'   => 'Reportes de Productos del sistema',
        ]);

        //Comunicados
        Permission::create([
            'name'          => 'Navegar Comunicados',
            'slug'          => 'comunicados.index',
            'description'   => 'Lista y navega todos los Comunicados del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Comunicados',
            'slug'          => 'comunicados.show',
            'description'   => 'Ver detalles de cada Comunicados del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Comunicado',
            'slug'          => 'comunicados.create',
            'description'   => 'Crear  dato de un Comunicado del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Comunicado',
            'slug'          => 'comunicados.edit',
            'description'   => 'Editar cualquier dato de un Comunicado del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Comunicado',
            'slug'          => 'comunicados.destroy',
            'description'   => 'Eliminar cualquier Comunicado del sistema',
        ]);


        //Entrega
        Permission::create([
            'name'          => 'Navegar Entregas',
            'slug'          => 'entregas.index',
            'description'   => 'Lista y navega todos los Entregas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Entrega',
            'slug'          => 'entregas.show',
            'description'   => 'Ver detalles de cada Entrega del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Entrega',
            'slug'          => 'entregas.create',
            'description'   => 'Crear  dato de un Entrega del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Entrega',
            'slug'          => 'entregas.edit',
            'description'   => 'Editar cualquier dato de un Entrega del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Entrega',
            'slug'          => 'entregas.destroy',
            'description'   => 'Eliminar cualquier Entrega del sistema',
        ]);

        //Personal de Planta
        Permission::create([
            'name'          => 'Navegar Persona de planta',
            'slug'          => 'personaldeplanta.index',
            'description'   => 'Lista y navega todos los Persona de planta del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Persona de planta',
            'slug'          => 'personaldeplanta.show',
            'description'   => 'Ver detalles de cada Persona de planta del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Persona de planta',
            'slug'          => 'personaldeplanta.create',
            'description'   => 'Crear  dato de un Persona de planta del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Persona de planta',
            'slug'          => 'personaldeplanta.edit',
            'description'   => 'Editar cualquier dato de un Persona de planta del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Persona de planta',
            'slug'          => 'personaldeplanta.destroy',
            'description'   => 'Eliminar cualquier Persona de planta del sistema',
        ]);

        //Reserva
        Permission::create([
            'name'          => 'Navegar Reservas',
            'slug'          => 'reservas.index',
            'description'   => 'Lista y navega todos los Reservas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Reserva',
            'slug'          => 'reservas.show',
            'description'   => 'Ver detalles de cada Reserva del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Reserva',
            'slug'          => 'reservas.create',
            'description'   => 'Crear  dato de un Reserva del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Reserva',
            'slug'          => 'reservas.edit',
            'description'   => 'Editar cualquier dato de un Reserva del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Reserva',
            'slug'          => 'reservas.destroy',
            'description'   => 'Eliminar cualquier Reserva del sistema',
        ]);
        // DB::table('role_user')->create(['role_id' => '1', 'user_id' => '11']);
        DB::insert('insert into role_user (role_id, user_id) values (?, ?)', ['1', '11']);
    }
}
