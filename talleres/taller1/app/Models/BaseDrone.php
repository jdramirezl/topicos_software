<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseDrone extends Model
{
    use HasFactory;

    /**
     * Class Attributes
     * id: integer -> The id of the drone
     * name: string -> The name of the drone
     * brand: string -> The brand of the drone
     * baseprice: decimal -> The base price of the drone
     * description: text -> The description of the drone
     */

    protected $fillable = [
        'name',
        'brand',
        'baseprice',
        'description'
    ];

    protected $casts = [
        'baseprice' => 'decimal:2'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getBasePrice($value)
    {
        return number_format($value, 2);
    }

    public function setBasePrice($value)
    {
        $this->attributes['baseprice'] = str_replace(',', '', $value);
    }

    public function getBrand($value)
    {
        return ucfirst($value);
    }

    public function setBrand($value)
    {
        $this->attributes['brand'] = strtolower($value);
    }

    public function getName($value)
    {
        return ucfirst($value);
    }

    public function setName($value)
    {
        $this->s['name'] = strtolower($value);
    }

    public function getDescription($value)
    {
        return ucfirst($value);
    }

    public function setDescription($value)
    {
        $this->attributes['description'] = strtolower($value);
    }
}
