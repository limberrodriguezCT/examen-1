<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FactoryArticle extends Model
{
    protected $fillable = [
        'factory_id',
        'article_id',
        'current_stock',
        'delivery_time',
        
    ];
    public function factory()
    {
        return $this->belongsTo(Factory:: class);
    }

    public function article()
    {
    return $this->belongsTo( Article::class);
    }
}