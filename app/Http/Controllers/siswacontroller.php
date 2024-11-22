<?php

namespace app\http\controllers;

use App\models\siswa;
use App\models\user;
use Illuminate\http\response;
use Illuminate\view\view;
use Illuminate\http\redirectresponse;
use Illuminate\support\Facades\storage;
use Illuminate\support\Facades\DB;
use app\http\controllers\controloller;
use Illuminate\http\Request;
use Illuminate\support\Facades\Hash;

class Siswacontroller extends controllers
{
    public function index(): view
    {
        //get Data db
        $siswa = DB::table('siswas')
        ->join('users', 'siswa.id_user','=', 'users.id')
        ->Select(
            'siswa.*',
            'users.name',
            'users.email'
        )
        ->paginate(10);
        return view('admin.siswa.index', compact('siswa'));
    }
}