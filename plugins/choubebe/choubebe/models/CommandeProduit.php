<?php namespace Choubebe\Choubebe\Models;

use Model;

/**
 * Model
 */
class CommandeProduit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'choubebe_choubebe_commande_produit';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
