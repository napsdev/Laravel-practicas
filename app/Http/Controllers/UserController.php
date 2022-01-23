<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
                //No se suele usar codigo SQL, se utiliza el modelo
                //creado al migrar las bases de datos.
        $users= User::latest()->get();
        //Retornar vista con usuarios
        return view('users.index', ['users' => $users]);
    }
                        //Solicitud (clase)
    public function store(Request $request){
        //Metodo de creacion (insert).
        User::created([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
                //Retornar a la vista anterior
        return back();
    }                       //Recibe el usuario
    public function destroy(User $user){
        $user->delete();
        return back();
    }
}
