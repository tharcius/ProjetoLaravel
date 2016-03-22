<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 20:51
 */

namespace ProjetoX\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectTaskValidator extends LaravelValidator{
    protected $rules=[
        'name'=>'required|max:60',
        'start_date'=>'required|date',
        'status'=>'required|max:60',
        'due_date'=>'required|date',
        'project_id'=>'required|numeric',
    ];
}