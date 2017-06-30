<?php
namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectNotesValidator extends LaravelValidator
{
    protected $rules = [
        'title' => 'required',
        'note' => 'required'
    ]; 
}