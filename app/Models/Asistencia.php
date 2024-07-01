<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Asistencia extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = 'asistencia';

    protected $fillable = [
        'estudiante_id',
        'grupo_id',
        'fecha',
        'hora_entrada',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->fecha = $model->fecha ?? now()->toDateString();
            $model->hora_entrada = $model->hora_entrada ?? now()->format('H:i');
        });
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
