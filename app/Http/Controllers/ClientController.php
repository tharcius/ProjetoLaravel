<?php

namespace ProjetoX\Http\Controllers;

use ProjetoX\Client;
use Illuminate\Http\Request;

use ProjetoX\Http\Requests;
use ProjetoX\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index(){
        return Client::all();
    }

    public function store(Request $request){
        return Client::create($request->all());
    }

    public function show($id){
        return Client::find($id);
    }

    public function destroy($id){
        return Client::find($id)->delete();
    }

    public function update(Request $request, $id){
        // Ainda não implmentado
    }
}
