<?php

namespace App\Models;
use App\Models\sections;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class products extends Model
{
    use HasFactory;
    protected $fillable=[
       'product_name' ,'section_id','description','created_by',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(sections::class);
    }

}
