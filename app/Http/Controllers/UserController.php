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
        // $data = [
        //     'username' => 'manager-tiga',
        //     'name' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data);

        // $data = [
        //     'name' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)-> first();
        // $user = UserModel::findOr(1, ['username', 'name'], function(){
        //     abort(404);
        // });
        // $user = UserModel::find(20, ['username', 'name'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOrfail(1);        
        // $user = UserModel::where('username', 'manager9')->firstOrFail(); 
        // $user = UserModel::where('level_id', 1) -> count();
        // dd($user);
        // return view('user', ['data' => $user]);
        // $totalUsers = UserModel::count();

        // return view('user', ['data' => $totalUsers]);

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'name' => 'Manager',
        //     ],
        // );
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'name' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'name' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        
        // return view('user', ['data' => $user]);

        // $user = UserModel::create([
        //     'username' => 'manager44',
        //     'name' => 'Manager 44',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);

        // $user->username = 'manager55';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty('nama' ,'username');

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean('nama', 'username');

        // $user->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());

        $user = UserModel::create([
            'username' => 'manager11',
            'name' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        
        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'nama']);
        $user->wasChanged('nama');
        $user->wasChanged('nama' ,'username');
        dd($user->wasChanged('nama' ,'username'));
    }
}
