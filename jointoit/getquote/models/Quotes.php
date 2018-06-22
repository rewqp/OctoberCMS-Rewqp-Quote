<?php namespace Jointoit\GetQuote\Models;

use Model;

/**
 * Model
 */
class Quotes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email_form',
        'mobile_phone',
        'home_phone',
        'zip_code',
        'options',
        'needs'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jointoit_getquote_';
}
