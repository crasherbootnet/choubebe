<?php namespace Choubebe\Choubebe\Models;

use Model;

/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'choubebe_choubebe_article';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        "marque" => ["Choubebe\Parametre\Models\Marque", "key" => "marque_id", "otherKey" => "id"],
        "age" => ["Choubebe\Parametre\Models\Age", "key" => "age_id", "otherKey" => "id"],
    ];

    public $attachOne = [
        'cover' => \System\Models\File::class
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];
}
