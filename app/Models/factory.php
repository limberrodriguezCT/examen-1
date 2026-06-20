<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factory extends Model
{
    protected $fillable = [
        'company_name',
        'identification_number',
        'telephone',
        'email',
        'address',
        'supplier_status',
    ];
    public function factoryarticles ()
    {
        return $this->hasMany(related: FactoryArticle:: class);
}
}
