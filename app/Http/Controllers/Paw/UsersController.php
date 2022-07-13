<?php

namespace App\Http\Controllers\Paw;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function table() {
        $data = User::paginate(12);
        return view('users.table', [
            'users' => $data
        ]);
    }
}
