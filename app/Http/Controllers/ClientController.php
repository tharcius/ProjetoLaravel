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
        Client::findOrNew($id)->delete() ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }

    public function update(Request $request, $id){
        Client::findOrNew($id)->update($request->all()) ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }
}
