<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

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

        //Archivo Adjunto
        Permission::create([
            'name'          => 'Navegar Archivos Adjuntos',
            'slug'          => 'archivosadjuntos.index',
            'description'   => 'Lista y navega todos los Archivos Adjuntos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Archivo Adjunto',
            'slug'          => 'archivosadjuntos.show',
            'description'   => 'Ver detalle de cada Archivo Adjunto del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Archivos Adjuntos',
            'slug'          => 'archivosadjuntos.create',
            'description'   => 'Crear cualquier dato de un Archivo Adjunto del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Archivos Adjuntos',
            'slug'          => 'archivosadjuntos.edit',
            'description'   => 'Editar cualquier dato de un Archivo Adjunto del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Archivos Adjuntos',
            'slug'          => 'archivosadjuntos.destroy',
            'description'   => 'Eliminar cualquier Archivos Adjuntos del sistema',
        ]);

        //Archivo Adjunto Comunicado
        Permission::create([
            'name'          => 'Navegar Archivo Adjunto Comunicado',
            'slug'          => 'archivosadjuntoscomunicados.index',
            'description'   => 'Lista y navega todos los Archivos Adjuntos Comunicados del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Archivo Adjunto Comunicado',
            'slug'          => 'archivosadjuntoscomunicados.show',
            'description'   => 'Ver detalles de cada Archivo Adjunto Comunicado del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Archivo Adjunto Comunicado',
            'slug'          => 'archivosadjuntoscomunicados.create',
            'description'   => 'Crear  dato de un Archivo Adjunto Comunicado del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Archivo Adjunto Comunicado',
            'slug'          => 'archivosadjuntoscomunicados.edit',
            'description'   => 'Editar cualquier dato de un Archivo Adjunto Comunicado del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Archivo Adjunto Comunicado',
            'slug'          => 'archivosadjuntoscomunicados.destroy',
            'description'   => 'Eliminar cualquier Archivo Adjunto Comunicado del sistema',
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

        //Detalles de entrega
        Permission::create([
            'name'          => 'Navegar Detalles de entregas',
            'slug'          => 'detallesentregas.index',
            'description'   => 'Lista y navega todos los Detalles de entregas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Detalles de entregas',
            'slug'          => 'detallesentregas.show',
            'description'   => 'Ver detalles de cada Detalles de entregas del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Detalle de entrega',
            'slug'          => 'detallesentregas.create',
            'description'   => 'Crear  dato de un Detalle de Entrega del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Detalle de entrega',
            'slug'          => 'detallesentregas.edit',
            'description'   => 'Editar cualquier dato de un Detalle de Entrega del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Detalle de entrega',
            'slug'          => 'detallesentregas.destroy',
            'description'   => 'Eliminar cualquier Detalle de Entrega del sistema',
        ]);

        //Detalle de hoja de ruta
        Permission::create([
            'name'          => 'Navegar Detalles de Hoja de Ruta',
            'slug'          => 'detalleshojaderuta.index',
            'description'   => 'Lista y navega todos los Detalles de Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Detalles de Hoja de Ruta',
            'slug'          => 'detalleshojaderuta.show',
            'description'   => 'Ver detalles de cada Detalles de Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Detalle de Hoja de Ruta',
            'slug'          => 'detalleshojaderuta.create',
            'description'   => 'Crear  dato de un Detalle de Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Detalle de Hoja de Ruta',
            'slug'          => 'detalleshojaderuta.edit',
            'description'   => 'Editar cualquier dato de un Detalle de Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Detalle de Hoja de Ruta',
            'slug'          => 'detalleshojaderuta.destroy',
            'description'   => 'Eliminar cualquier Detalle de Hoja de Ruta del sistema',
        ]);

        //Detalle de Reserva
        Permission::create([
            'name'          => 'Navegar Detalles de Reserva',
            'slug'          => 'detallesreservas.index',
            'description'   => 'Lista y navega todos los Detalles de Reserva del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Detalle de Reserva',
            'slug'          => 'detallesreservas.show',
            'description'   => 'Ver detalles de cada Detalle de Reserva del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Detalle de Reserva',
            'slug'          => 'detallesreservas.create',
            'description'   => 'Crear  dato de un Detalle del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Detalle de Reserva',
            'slug'          => 'detallesreservas.edit',
            'description'   => 'Editar cualquier dato de un Detalle del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Detalle de Reserva',
            'slug'          => 'detallesreservas.destroy',
            'description'   => 'Eliminar cualquier Detalle del sistema',
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

        //Hoja de Ruta
        Permission::create([
            'name'          => 'Navegar Hoja de Rutas',
            'slug'          => 'hojaderutas.index',
            'description'   => 'Lista y navega todos los Hoja de Rutas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Hoja de Ruta',
            'slug'          => 'hojaderutas.show',
            'description'   => 'Ver detalles de cada Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Hoja de Ruta',
            'slug'          => 'hojaderutas.create',
            'description'   => 'Crear  dato de un Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Hoja de Ruta',
            'slug'          => 'hojaderutas.edit',
            'description'   => 'Editar cualquier dato de un Hoja de Ruta del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Hoja de Ruta',
            'slug'          => 'hojaderutas.destroy',
            'description'   => 'Eliminar cualquier Hoja de Ruta del sistema',
        ]);

        //Nota
        Permission::create([
            'name'          => 'Navegar Notas',
            'slug'          => 'notas.index',
            'description'   => 'Lista y navega todos los Notas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Nota',
            'slug'          => 'notas.show',
            'description'   => 'Ver detalles de cada Nota del sistema',
        ]);
        Permission::create([
            'name'          => 'creacion  de Nota',
            'slug'          => 'notas.create',
            'description'   => 'Crear  dato de un Nota del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion  de Nota',
            'slug'          => 'notas.edit',
            'description'   => 'Editar cualquier dato de un Nota del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Nota',
            'slug'          => 'notas.destroy',
            'description'   => 'Eliminar cualquier Nota del sistema',
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
    }
}
