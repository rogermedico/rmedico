<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectLocale;
use Illuminate\Database\Seeder;

class ProjectLocalesSeeder extends Seeder
{

    private $projectLocales = [
        '1' => [
            'en' => [
                'name' => 'corporate intranet',
                'body' => '<p>Project consisting of an intranet for the company Capicua Serveis Educatius to manage their employee information.
                The app has three roles: admin, moderator and employee. The admins and moderators can see and manage other user\'s info.
                Every user has a personal profile that can fill out and the employees can even send documents to the company.</p>
                <p>The project was made using Angular to implement the frontend and Laravel for the backend. It also has a dark mode and an
                email notification system for the new documents and other notifications.</p>
                <div>To access the demo you can use the following usernames and passwords:
                <ul><li>moderator@gmail.com - password</li><li>worker@gmail.com - password</li></ul></div>',
            ],
            'es' => [
                'name' => 'intranet corporativa',
                'body' => '<p>Proyecto que consiste en una intranet para la empresa Capicua Serveis Educatius para tratar la información y los documentos de sus empleados.
                La aplicación tiene tres roles (administrador, moderador y empleado), los usuarios de tipo administrador y moderador  pueden ver y tratar la información de los otros usuarios.
                Cada usuario tiene un perfil personal que solo él puede rellenar y cada usuario es capaz de enviar documentos a la empresa.</p>
                <p>El proyecto se ha realizado usando Angular para implementar el frontend y Laravel para el backend. Algunas de las características implementadas son:
                 modo oscuro y un sistema de notificaciones por correo electrónico a los usuarios.</p>
                <div>Para acceder a la demo hay configurados los siguientes nombres de usuario y contraseñas:
                <ul><li>moderator@gmail.com - password</li><li>worker@gmail.com - password</li></ul></div>',
            ],
            'ca' => [
                'name' => 'intranet corporativa',
                'body' => '<p>Projecte que consisteix en el desenvolupament d\'una intranet corporativa per a l\'empresa Capicua Serveis Educatius.
                La finalitat de la mateixa és poder tractar la informació dels seus empleats i els documents associats a ells.
                L\'aplicació disposa de tres rols d\'usuari (administrador, moderador i empleat), els usuaris de tipus administrador i moderador
                poden veure i tractar les dades de tots els altres usuaris. Cada usuari té un perfil personal que només ell pot omplir
                i cada usuari pot enviar documents a l\'empresa.</p>
                <p>El projecte s\'ha desenvolupat a través del framework Angular per al frontend i Laravel per al backend. Algunes de
                les característiques implementades són: mode fosc i un sistema de notificacions per correu electrònic.</p>
                <div>Per accedir a la demo hi ha configurats els següents noms d\'usuari i contrasenyes:
                <ul><li>moderator@gmail.com - password</li><li>worker@gmail.com - password</li></ul></div>',
            ],
        ],
        '2' => [
            'en' => [
                'name' => 'personal webpage',
                'body' => '<p>Fully responsive personal webpage development for Dr. Magda Pascual-Borràs. The project was
                        made using Codeigniter 3 and Bootstrap.</p>',
            ],
            'es' => [
                'name' => 'página web personal',
                'body' => '<p>Desarrollo de una página web personal completamente responsiva para la Dra. Magda Pascual-Borràs. El proyecto
                        se ha desarrollado mediante Codeigniter 3 y Bootstrap.</p>',
            ],
            'ca' => [
                'name' => 'pàgina web personal',
                'body' => '<p>Desenvolupament d\'una pàgina web personal completament responsiva per a la Dra. Magda Pascual-Borràs.
                        El projecte s\'ha desenvolupat a través de Codeigniter 3 i Bootstrap.</p>',
            ],
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Project::all() as $project){
            foreach ($this->projectLocales[$project->id] as $language => $localeInfo) {
                ProjectLocale::create(
                    array_merge(
                        ['project_id' => $project->id],
                        ['language' => $language],
                        $localeInfo,
                    )
                );
            }
        }
    }
}
