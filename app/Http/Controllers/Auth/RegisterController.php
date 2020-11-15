<?php

namespace App\Http\Controllers\Auth;

use App\Rules\AlfebetoEspPunto;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Else_;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'nick' => ['required', 'unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CI'        => 'unique:users|min:6|numeric',
            'NOMBRES'   => ['required'],
            'APELLIDOS' => ['required'],
            'FECHANACIMIENTO' => 'required|date',
            'FOTO'      => 'nullable|mimes:jpeg,bmp,png',
            'GENERO'    => 'boolean|required',
        ]);
    }

    protected function create(Request $data)
    {
        /*  $data->validate([
            'nick' => ['required', 'unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CI'        => 'unique:users|min:6|numeric',
            'NOMBRES'   => ['required'],
            'APELLIDOS' => ['required'],
            'FECHANACIMIENTO' => 'required|date',
            'FOTO'      => 'nullable|mimes:jpeg,bmp,png',
            'GENERO'    => 'boolean|required',
        ]);*/

        if ($data['customRadio'] == 'si') {
            $genero = true;
        } else {
            $genero = false;
        }
        $ci = $data['CI'];
        $originalDate = $data['FECHANACIMIENTO'];
        $fecha = date("Y-m-d", strtotime($originalDate));
        $foto = null;
        if (isset($data['FOTO']) == true) {
            /*
            $foto= $data['FOTO'];
            $ext = pathinfo($foto, PATHINFO_EXTENSION);
            $ubicacion='./extras/img/users/'.$ci.'.'.$ext;
            copy($foto,$ubicacion);
            unlink($foto);
            $foto=$ubicacion;  */
            $foto = $data->file('FOTO')->store('img/usuarios');
            $foto = 'storage/' . $foto;
        }
        // else  $foto='none';
        /**/

        return User::create([
            'nick' => $data['nick'],
            'email' => strtolower($data['email']),
            'password' => Hash::make($data['password']),
            'CI'        => $ci,
            'NOMBRES'   => strtoupper($data['NOMBRES']),
            'APELLIDOS' => strtoupper($data['APELLIDOS']),
            'FECHANACIMIENTO' => $fecha,
            'FOTO'      => $foto,
            'GENERO'    =>  $genero,
            'TIPO'      => 'USUARIO EXTERNO' //$data['TIPO']
        ]);
    }
}
