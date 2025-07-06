<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'body_type_id',
        'brand_id',
        'engine_type_id',
        'drive_type_id',
        'price',
        'status',
        'year',
        'image_url',
        'description',
        'views'
    ];
    
    protected $casts = [
        'price' => 'integer',
        'year' => 'integer',
        'views' => 'integer',
    ];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    
    public function bodyType()
    {
        return $this->belongsTo(BodyType::class);
    }
    
    public function engineType()
    {
        return $this->belongsTo(EngineType::class);
    }
    
    public function driveType()
    {
        return $this->belongsTo(DriveType::class);
    }
    
    // Аксессор для удобного отображения статуса
    public function getStatusTextAttribute()
    {
        return [
            'new' => 'Новинка',
            'in_stock' => 'В наличии',
            'on_order' => 'Под заказ'
        ][$this->status] ?? $this->status;
    }
    
    // Scope для фильтрации по параметрам
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['brand'] ?? false, fn($query, $brand) =>
            $query->whereHas('brand', fn($query) => 
                $query->where('id', $brand)
            )
        );
        
        $query->when($filters['bodyType'] ?? false, fn($query, $bodyType) =>
            $query->whereHas('bodyType', fn($query) => 
                $query->where('id', $bodyType)
            )
        );
        
        $query->when($filters['engineType'] ?? false, fn($query, $engineType) =>
            $query->whereHas('engineType', fn($query) => 
                $query->where('id', $engineType)
            )
        );
        
        $query->when($filters['driveType'] ?? false, fn($query, $driveType) =>
            $query->whereHas('driveType', fn($query) => 
                $query->where('id', $driveType)
            )
        );
        
        $query->when($filters['minPrice'] ?? false, fn($query, $minPrice) =>
            $query->where('price', '>=', $minPrice)
        );
        
        $query->when($filters['maxPrice'] ?? false, fn($query, $maxPrice) =>
            $query->where('price', '<=', $maxPrice)
        );
        
        $query->when($filters['status'] ?? false, fn($query, $status) =>
            $query->where('status', $status)
        );
    }
}
