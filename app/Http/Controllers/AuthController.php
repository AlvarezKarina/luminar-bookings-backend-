<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon; //Sirve para crear fechas. 
use Illuminate\Http\Request;

//Librerias para cambio de contraseña. 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\PasswordReset;

//Modelo para consultar usuarios. 
use App\Models\User;

class AuthController extends Controller
{
    //
}
