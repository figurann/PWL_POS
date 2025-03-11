<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {

        $data = [
            'level_id' => 2,
            'username' => 'manajer_tiga',
            'nama' => 'Manajer Tiga',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);

        // $data = [
        //     'nama' => 'Pelangan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        $users = UserModel::all();
        return view('user', ['data' => $users]);
    }
}
