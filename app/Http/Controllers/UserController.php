<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json($user);
        }
        return response()->json(['message' => 'Usuário não encontrado'], 404);
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        // ... outros campos
        $user->save();

        return response()->json(['message' => 'Usuário criado com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            // ... outros campos
            $user->save();

            return response()->json(['message' => 'Usuário atualizado com sucesso']);
        }
        return response()->json(['message' => 'Usuário não encontrado'], 404);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'Usuário removido com sucesso']);
        }
        return response()->json(['message' => 'Usuário não encontrado'], 404);
    }
}
