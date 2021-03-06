<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        $user->loadRelationshipCounts();
        
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            'tasks' => $tasks,
        ]);
    }
}
