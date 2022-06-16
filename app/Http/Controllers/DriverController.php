<?php

namespace App\Http\Controllers;

use App\Models\Driver;

class DriverController extends Controller {

    public function index() {
        $drivers = Driver::all();
        foreach ($drivers as $driver) {
            dump($driver->firstname);
        }
        dd('end');
        //return view('driver', compact('drivers'));
    }


    public function create() {
        $driverArr = [[
            'lastname' => 'Silincev',
            'firstname' => 'Andrey',
            'patronymic' => 'Sergeevich',
            'year_of_birth' => '1995-12-24',
            'date_of_employment' => '2015-07-15',
            'driving_experience' => '2011-02-02',
            'photo' => '',
        ],];

        foreach ($driverArr as $item) {
            Driver::create($item);
            dd($item);
        }
        dd('created');
    }


    public function update() {
        $driver = Driver::find(3);

        $driver->update([
            'lastname' => 'Olegov',
            'firstname' => 'Oleg',
            'patronymic' => 'Isaykin',
            'year_of_birth' => '1998-02-07',
            'date_of_employment' => '2007-01-06',
            'driving_experience' => '2011-01-20',
            'photo' => '/photo/ava.Isaykin.png',
        ]);
            dd('updated');
    }


    public function delete() {
        $driver = Driver::find(4);
        $driver->delete();
        dd('deleted');
    }

    public function restore(){
        $driver = Driver::withTrashed()->find(4);
        $driver->restore();
        dd('restored');
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate(){
        $anotherDriver = [
            'lastname' => 'Olegov',
            'firstname' => 'Oleg',
            'patronymic' => 'Isaykin',
            'year_of_birth' => '1998-02-07',
            'date_of_employment' => '2007-01-06',
            'driving_experience' => '2011-01-20',
            'photo' => '/photo/ava.Isaykin.png',
        ];
        $driver = Driver::firstOrCreate([
            'id' => '6'     /*хорошо будет использовать номер телефона*/
            ], [
            'lastname' => 'Mihail',
            'firstname' => 'Oleg',
            'patronymic' => 'Isaykin',
            'year_of_birth' => '1998-02-07',
            'date_of_employment' => '2007-01-06',
            'driving_experience' => '2011-01-20',
            'photo' => '/photo/ava.Isaykin.png',
        ]);
        dump($driver->firstname);
        dd('end');
    }
    public function updateOrCreate(){
        $anotherDriver = [
            'lastname' => 'Polejaykin',
            'firstname' => 'Sergey',
            'patronymic' => 'Mihaylovich',
            'year_of_birth' => '1988-02-07',
            'date_of_employment' => '2017-01-06',
            'driving_experience' => '2018-01-20',
            'photo' => '/photo/ava.Isaykin.png',
        ];

        $driver = Driver::updateOrCreate([
            'id' => 7       /*хорошо будет использовать номер телефона*/
        ],[
            'lastname' => 'Polejaykin',
            'firstname' => 'Sergey',
            'patronymic' => 'Mihaylovich',
            'year_of_birth' => '1988-02-07',
            'date_of_employment' => '2017-01-06',
            'driving_experience' => '2018-01-20',
            'photo' => '/photo/ava.Isaykin.png',
        ]);
        dump($driver->lastname);
        dd('update completed');
    }
}
