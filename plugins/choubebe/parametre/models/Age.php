<?php namespace Choubebe\Parametre\Models;

use Model;

/**
 * Model
 */
class Age extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'choubebe_parametre_age';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}