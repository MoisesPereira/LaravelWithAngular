<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 24/08/15
 * Time: 22:33
 */

namespace App\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{

    protected $rules = [
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];

}