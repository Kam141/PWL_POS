<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        //menambahkan data user dengan eloquent model
        // $data = [
        //     'username' => 'customer-1',
        //     'name' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];

// JS_$_Praktikum 1 no 2
        // $data = [
        //     'username' => 'manager-2',
        //     'name' => 'Manager 2',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data);

// JS_$_Praktikum 1 no 2
        $data = [
            'username' => 'manager-tiga',
            'name' => 'Manager 3',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ];
        UserModel::create($data);

        // $data = [
        //     'name' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
