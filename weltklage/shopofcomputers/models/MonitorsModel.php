<?php namespace Weltklage\Shopofcomputers\Models;

use Model;

/**
 * Model
 */
class MonitorsModel extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'weltklage_shopofcomputers_monitors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
