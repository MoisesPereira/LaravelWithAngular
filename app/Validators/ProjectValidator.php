<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 08/09/15
 * Time: 22:44
 */

namespace app\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{

    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'progress' => 'required',
        'status'
    ];

}