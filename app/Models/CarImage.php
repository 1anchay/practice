<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class CarImage extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'path', 'is_main'];

    protected $casts = [
        'is_main' => 'boolean'
    ];

    // Отношения
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    // Аксессоры
    public function getFullPathAttribute(): string
    {
        return asset('storage/' . $this->path);
    }

    // Методы
    public function setAsMain(): void
    {
        // Сбрасываем все главные изображения у этого автомобиля
        $this->car->images()->update(['is_main' => false]);
        
        // Устанавливаем текущее как главное
        $this->update(['is_main' => true]);
    }

    public function deleteWithFile(): bool
    {
        Storage::delete('public/' . $this->path);
        return $this->delete();
    }
}