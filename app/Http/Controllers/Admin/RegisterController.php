<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        $datos['users'] = DB::select('select * from users');
        return view('auth.index', $datos);
    }


    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);




        //$user = User::create(request(['name', 'email', Hash::make('password')]));
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect()->to('index');
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('index')->with('mensaje', 'Registro Borrado..');
    }
}
