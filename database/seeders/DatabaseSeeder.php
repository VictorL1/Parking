<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        parking::insert(array(
            array(
                'idParking' => 1,
                'numeroPlace'=> '1A',
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
            ),
            array(
                'idParking' => 5 ,
                'numeroPlace'=> '5A',
            ),
            array(
                'idParking' => 6 ,
                'numeroPlace'=> '6A',
            ),
            array(
                'idParking' => 7 ,
                'numeroPlace'=> '7A',
            ),
            array(
                'idParking' => 8 ,
                'numeroPlace'=> '8A',
            ),
            array(
                'idParking' => 9 ,
                'numeroPlace'=> '9A',
            ),
            array(
                'idParking' => 10 ,
                'numeroPlace'=> '10A',
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' =>'admin','nom' =>'admin', 'Prenom' => 'admin','mail'=>'admin@admin.com', 'motDePasseUtilisateur' => Hash::make('admin123'), 'estInscrit' => true, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'VictorL','nom' =>'Laporte', 'Prenom' => 'Victor','mail'=>'victor.ltalamon@gmail.com', 'motDePasseUtilisateur' => Hash::make('vicoudou'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'MarcL','nom' =>'Giapazin', 'Prenom' => 'Marc','mail'=>'marc.giapazin@gmail.com', 'motDePasseUtilisateur' => Hash::make('marcus'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'ZakariaA','nom' =>'Amraoui', 'Prenom' => 'Zakaria','mail'=>'zakaria.amraoui@gmail.com', 'motDePasseUtilisateur' => Hash::make('zaki'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            
        ));
        reservation::insert(array(
            array(
                'idReservation' => 2, 'positionFileAttente' => 1 , 'numeroPlace' => 1, 'utilisateur' => rand(2, 4),'etatReservation' => rand(0,1), 'dateDebut' => '2020/08/10', 'dateFin' => '2020/04/17',
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null , 'numeroPlace' => null, 'utilisateur' => rand(2, 4),'etatReservation' => rand(0,1), 'dateDebut' => '2020/01/29', 'dateFin' => '2020/01/20',
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => 2 , 'numeroPlace' => 2, 'utilisateur' => rand(2, 4),'etatReservation' => rand(0,1), 'dateDebut' => '2020/01/29', 'dateFin' => '2020/01/20',
            ),
        ));
    }
}
