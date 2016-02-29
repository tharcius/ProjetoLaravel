<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 20:51
 */

namespace ProjetoX\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator{
    protected $rules=[
        'name'=>'required|max:60',
        'description'=>'required|max:512',
        'progress'=>'required|max:256',
        'status'=>'required|max:60',
        'due_date'=>'required|date',
        'owner_id'=>'required|numeric',
        'client_id'=>'required|numeric',
    ];
}