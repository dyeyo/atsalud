<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        //Roles
        Permission::create([
            'module'        => 'roles',
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'module'        => 'roles',
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'module'        => 'roles',
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear nuevos roles en el sistema',
        ]);

        Permission::create([
            'module'        => 'roles',
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'module'        => 'roles',
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',
        ]);

        //Users
        Permission::create([
            'module'        => 'usuarios',
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'module'        => 'usuarios',
            'name'          => 'Creación de usuarios',
            'slug'          => 'users.create',
            'description'   => 'Crear usuarios en el sistema',
        ]);
        Permission::create([
            'module'        => 'usuarios',
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'module'        => 'usuarios',
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'module'        => 'usuarios',
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',
        ]);

        //Entidades
        Permission::create([
            'module'        => 'entidades',
            'name'          => 'Navegar EPS, ARP, AFC, CCF',
            'slug'          => 'entities.index',
            'description'   => 'Lista y navega las EPS, ARP, AFC, CCF',
        ]);
        Permission::create([
            'module'        => 'entidades',
            'name'          => 'Creación de EPS, ARP, AFC, CCF',
            'slug'          => 'entities.create',
            'description'   => 'Crear las EPS, ARP, AFC, CCF en el sistema',
        ]);
        Permission::create([
            'module'        => 'entidades',
            'name'          => 'Ver detalle de las EPS, ARP, AFC, CCF',
            'slug'          => 'entities.show',
            'description'   => 'Ve en detalle cada  EPS, ARP, AFC, CCF del sistema',
        ]);
        Permission::create([
            'module'        => 'entidades',
            'name'          => 'Edición de las EPS, ARP, AFC, CCF',
            'slug'          => 'entities.edit',
            'description'   => 'Editar cualquier dato de una EPS, ARP, AFC, CCF del sistema',
        ]);

        Permission::create([
            'module'        => 'entidades',
            'name'          => 'Eliminar  EPS, ARP, AFC, CCF',
            'slug'          => 'entities.destroy',
            'description'   => 'Eliminar cualquier EPS, ARP, AFC, CCF del sistema',
        ]);
        //ips
        Permission::create([
            'module'        => 'ips',
            'name'          => 'Navegar ips',
            'slug'          => 'ips.index',
            'description'   => 'Lista y navega todas las ips del sistema',
        ]);
        Permission::create([
            'module'        => 'ips',
            'name'          => 'Creación de ips',
            'slug'          => 'ips.create',
            'description'   => 'Crear ips en el sistema',
        ]);
        Permission::create([
            'module'        => 'ips',
            'name'          => 'Ver detalle de ips',
            'slug'          => 'ips.show',
            'description'   => 'Ver en detalle cada ips del sistema',
        ]);
        Permission::create([
            'module'        => 'ips',
            'name'          => 'Edición de ips',
            'slug'          => 'ips.edit',
            'description'   => 'Editar cualquier dato de una ips del sistema',
        ]);
        Permission::create([
            'module'        => 'ips',
            'name'          => 'Eliminar ips',
            'slug'          => 'ips.destroy',
            'description'   => 'Eliminar cualquier ips del sistema',
        ]);

        //Equipos de salud
        Permission::create([
            'module'        => 'Equipos de salud',
            'name'          => 'Navegar equipos de salud',
            'slug'          => 'teams.index',
            'description'   => 'Lista y navega todas los equipos de salud en el sistema',
        ]);
        Permission::create([
            'module'        => 'Equipos de salud',
            'name'          => 'Creación de equipos de salud',
            'slug'          => 'teams.create',
            'description'   => 'Crear equipos de salud en el sistema',
        ]);
        Permission::create([
            'module'        => 'Equipos de salud',
            'name'          => 'Ver detalle de equipos de salud',
            'slug'          => 'teams.show',
            'description'   => 'Ver en detalle cada equipos de salud en el sistema',
        ]);
        Permission::create([
            'module'        => 'Equipos de salud',
            'name'          => 'Edición de equipos de salud',
            'slug'          => 'teams.edit',
            'description'   => 'Editar cualquier dato de un equipos de salud en el sistema',
        ]);
        Permission::create([
            'module'        => 'Equipos de salud',
            'name'          => 'Eliminar equipo de salud',
            'slug'          => 'teams.destroy',
            'description'   => 'Eliminar cualquier equipo de salud en el sistema',
        ]);

        //Envio de emails
        Permission::create([
            'module'        => 'Correos de envío',
            'name'          => 'Navegar Correos de envío',
            'slug'          => 'emails.index',
            'description'   => 'Lista y navega todas los Correos de envío en el sistema',
        ]);
        Permission::create([
            'module'        => 'Correos de envío',
            'name'          => 'Creación de Correos de envío',
            'slug'          => 'emails.create',
            'description'   => 'Crear correos de envío en el sistema',
        ]);
        Permission::create([
            'module'        => 'Correos de envío',
            'name'          => 'Ver detalle de Correos de envío',
            'slug'          => 'emails.show',
            'description'   => 'Ver en detalle cada correo de envío en el sistema',
        ]);
        Permission::create([
            'module'        => 'Correos de envío',
            'name'          => 'Edición de correos de envío',
            'slug'          => 'emails.edit',
            'description'   => 'Editar cualquier dato de un correo de envío en el sistema',
        ]);
        Permission::create([
            'module'        => 'Correos de envío',
            'name'          => 'Eliminar correos de envio',
            'slug'          => 'emails.destroy',
            'description'   => 'Eliminar cualquier correo de envio en el sistema',
        ]);

        //Costos de servicios
        Permission::create([
            'module'        => 'Costos de servicios',
            'name'          => 'Navegar y listar costos de servicios',
            'slug'          => 'cost.services.index',
            'description'   => 'Lista y navega todos los costos de servicios en el sistema',
        ]);
        Permission::create([
            'module'        => 'Costos de servicios',
            'name'          => 'Creación de costos de servicios',
            'slug'          => 'cost.services.create',
            'description'   => 'Crear costos de servicios en el sistema',
        ]);
        Permission::create([
            'module'        => 'Costos de servicios',
            'name'          => 'Ver detalle de costos de servicios',
            'slug'          => 'cost.services.show',
            'description'   => 'Ver en detalle cada costo de servicio en el sistema',
        ]);
        Permission::create([
            'module'        => 'Costos de servicios',
            'name'          => 'Edición de costos de servicios',
            'slug'          => 'cost.services.edit',
            'description'   => 'Editar cualquier dato de un costo de servicio en el sistema',
        ]);

        //Afiliaciones
        Permission::create([
            'module'        => 'aficilaciones',
            'name'          => 'Navegar y listar afiliaciones',
            'slug'          => 'affiliations.index',
            'description'   => 'Lista y navega todos los afiliaciones en el sistema',
        ]);
        Permission::create([
            'module'        => 'afiliaciones',
            'name'          => 'Creación de afiliaciones',
            'slug'          => 'affiliations.create',
            'description'   => 'Crear afiliaciones en el sistema',
        ]);
        Permission::create([
            'module'        => 'afiliaciones',
            'name'          => 'Ver detalle de afiliaciones',
            'slug'          => 'affiliations.show',
            'description'   => 'Ver en detalle cada aficilación en el sistema',
        ]);
        Permission::create([
            'module'        => 'afiliaciones',
            'name'          => 'Edición de afiliaciones',
            'slug'          => 'affiliations.edit',
            'description'   => 'Editar cualquier dato de una aficilación en el sistema',
        ]);
        Permission::create([
            'module'        => 'afiliaciones',
            'name'          => 'Eliminar aficilaciones',
            'slug'          => 'affiliations.destroy',
            'description'   => 'Eliminar cualquier aficilación en el sistema',
        ]);

        //Captación
        Permission::create([
            'module'        => 'captación de pacientes con riegos',
            'name'          => 'Navegar y listar captación de pacientes con riegos',
            'slug'          => 'risks.capture.index',
            'description'   => 'Lista y navega todos los captación de pacientes con riegos en el sistema',
        ]);
        Permission::create([
            'module'        => 'captación de pacientes con riegos',
            'name'          => 'Creación de captación de pacientes con riegos',
            'slug'          => 'risks.capture.create',
            'description'   => 'Crear captación de pacientes con riegos en el sistema',
        ]);
        Permission::create([
            'module'        => 'captación de pacientes con riegos',
            'name'          => 'Ver detalle de captación de pacientes con riegos',
            'slug'          => 'risks.capture.show',
            'description'   => 'Ver en detalle cada captación de paciente con riesgo en el sistema',
        ]);
        Permission::create([
            'module'        => 'captación de pacientes con riegos',
            'name'          => 'Edición de captación de pacientes con riegos',
            'slug'          => 'risks.capture.edit',
            'description'   => 'Editar cualquier dato de una captación de paciente con riesgo en el sistema',
        ]);
        Permission::create([
            'module'        => 'captación de pacientes con riegos',
            'name'          => 'Eliminar captación de pacientes con riegos',
            'slug'          => 'risks.capture.destroy',
            'description'   => 'Eliminar cualquier captación de paciente con riesgo en el sistema',
        ]);

        //Referencia de pacientes
        Permission::create([
            'module'        => 'referencia de pacientes',
            'name'          => 'Navegar y listar referencia de pacientes',
            'slug'          => 'patients.reference.index',
            'description'   => 'Lista y navega todos las referencias de pacientes en el sistema',
        ]);
        Permission::create([
            'module'        => 'referencia de pacientes',
            'name'          => 'Creación de referencias de pacientes',
            'slug'          => 'patients.reference.create',
            'description'   => 'Crear referencias de pacientes en el sistema',
        ]);
        Permission::create([
            'module'        => 'referencia de pacientes',
            'name'          => 'Ver detalle de referencias de pacientes',
            'slug'          => 'patients.reference.show',
            'description'   => 'Ver en detalle cada referencia de paciente en el sistema',
        ]);
        Permission::create([
            'module'        => 'referencia de pacientes',
            'name'          => 'Edición de referencia de pacientes',
            'slug'          => 'patients.reference.edit',
            'description'   => 'Editar cualquier dato de una referencia de paciente en el sistema',
        ]);
        Permission::create([
            'module'        => 'referencia de pacientes',
            'name'          => 'Eliminar referencias de pacientes',
            'slug'          => 'patients.reference.destroy',
            'description'   => 'Eliminar cualquier referencia de paciente en el sistema',
        ]);

        //Historias clincias
        Permission::create([
            'module'        => 'historia clinica',
            'name'          => 'Navegar y listar historias clinica',
            'slug'          => 'clinic.histories.index',
            'description'   => 'Lista y navega todos las historias clinicas en el sistema',
        ]);
        Permission::create([
            'module'        => 'historia clinica',
            'name'          => 'Creación de historias clinicas',
            'slug'          => 'clinic.histories.create',
            'description'   => 'Crear historias clinicas en el sistema',
        ]);
        Permission::create([
            'module'        => 'historia clinica',
            'name'          => 'Ver detalle de historias clinicas',
            'slug'          => 'clinic.histories.show',
            'description'   => 'Ver en detalle cada historia clinica en el sistema',
        ]);
        Permission::create([
            'module'        => 'historia clinica',
            'name'          => 'Edición de historia clinica',
            'slug'          => 'clinic.histories.edit',
            'description'   => 'Editar cualquier dato de una historia clinica en el sistema',
        ]);
        Permission::create([
            'module'        => 'historia clinica',
            'name'          => 'Eliminar historias clinicas',
            'slug'          => 'clinic.histories.destroy',
            'description'   => 'Eliminar cualquier historia clinica en el sistema',
        ]);
    }
}
