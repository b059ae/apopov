<?php

namespace App\Models;

use App\Traits\OrderNumberTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Portfolio extends Model
{
    use SoftDeletes, HasTags, OrderNumberTrait;

    protected $table = 'portfolio';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'short_description', 'description', 'image', 'order_number'
    ];

    public function getImageWebp(): string
    {
        return str_ireplace(['.jpg', '.jpeg'], '.webp', $this->image);
    }
}
