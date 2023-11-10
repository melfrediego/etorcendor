<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

class UserController extends Controller
{
    private $totalPage = 10;

    public function index()
    {
        $usuarios = User::where('perfil', 'A')->paginate($this->totalPage);
        return view('admin.user.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
         ]);

         $data = [
             'name' => $request->name,
             'email' => $request->email,
             'perfil' => 'A',
             'password' => bcrypt($request->password)
         ];

        //  if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        //     $nome = "user".uniqid(date('HisYmd')).rand();
        //     $extensao = $request->file('foto')->getClientOriginalExtension();
        //     $nome_imagem = "{$nome}.{$extensao}";
        //     $upload = $request->file('foto')->storeAs('users', $nome_imagem);
        //     $data['foto'] = $nome_imagem;
        // }

         $user = User::create($data);
         return redirect('/usuarios')->with('success', 'Dados inseridos com sucesso!');
    }

    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.user.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.user.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->email == $request->email) {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
             ]);

             $data = [
                 'name' => $request->name,
                 //'email' => $request->email,
                 'type' => User::ADMIN_TYPE,
                 'password' => bcrypt($request->password)
             ];

        }else{

            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
             ]);

             $data = [
                 'name' => $request->name,
                 'email' => $request->email,
                 'type' => User::ADMIN_TYPE,
                 'password' => bcrypt($request->password)
             ];

        }


        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $nome = "user".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('foto')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $upload = $request->file('foto')->storeAs('users', $nome_imagem);
            $data['foto'] = $nome_imagem;
        }

        $user = User::whereId($id)->update($data);
        return redirect('/usuarios')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id, User $user){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/usuarios')->with('success', 'Registro excluido com sucesso!');

    }

    public function search(Request $request, User $user){
        $dataForm = $request->all();
        $users = $user->search($dataForm, 20);
        if (!$users) {
            return redirect('/usuarios')->with('error', 'Não encontramos nenhum Usuário com os termos informados!');
        }
        return view('app.user.index', compact('users', 'dataForm'));
    }
}
