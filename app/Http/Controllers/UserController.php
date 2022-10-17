<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    protected $success   = true;
    protected $message   = null;
    protected $data      = 1;
    protected $color     = 'success';
    protected $resultSet = [];

    public function index() : JsonResponse
    {
        try {
            $this->resultSet = User::where('id','>',0)
                                ->with('domicilios')
                                ->get();
        }catch (\Exception $e){
            $this->success   = false;
            $this->message   =  "¡¡Ha ocurrido un pequeño error,
                                    favor de intentarlo más tarde!";
            $this->color     = 'danger';
        }
        return response()->json([
            'success'   => $this->success,
            'message'   => $this->message,
            'data'      => $this->data,
            'color'     => $this->color,
            'resultSet' => $this->resultSet,
        ],Response::HTTP_CREATED);

    }
}
