<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 19:07
 */

namespace ProjetoX\Validators;

use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator{
    protected $rules=[
        'name' => 'required|max:60',
        'responsible'=>'required|max:60',
        'email'=>'required|email|max:60',
        'phone'=>'required',
        'address'=>'required|max:255',
    ];
}