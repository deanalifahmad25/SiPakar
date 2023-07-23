<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDiagnosa extends Model
{
    use HasFactory;

    protected $table = 'user_diagnosa';

    protected $fillable = [
        'kode_diagnosa',
        'kode_penyakit',
        'created_by',
        'created_at'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'kode_penyakit', 'kode_penyakit');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public static function booted(){

        static::creating(function($model)
        {
            $model->created_by = auth()->id();
        });
    }

    protected static function boot() {
        parent::boot();

        static::creating(function ($diagnosa) {
            $latestDiagnosa = static::orderBy('id', 'desc')->first();
            if ($latestDiagnosa) {
                $lastCode = substr($latestDiagnosa->kode_diagnosa, 1);
                $kodeDiagnosa = 'D' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $kodeDiagnosa = 'D001';
            }
            $diagnosa->kode_diagnosa = $kodeDiagnosa;
        });

        static::deleting(function ($diagnosa) {
            $deletedCode = $diagnosa->kode_diagnosa;
            $nextDiagnosa = static::where('kode_diagnosa', '>', $deletedCode)->first();
            if ($nextDiagnosa) {
                $kodeDiagnosa = 'D' . str_pad(substr($nextDiagnosa->kode_diagnosa, 1), 3, '0', STR_PAD_LEFT);
                $nextDiagnosa->kode_diagnosa = $deletedCode;
                $nextDiagnosa->save();
            }
        });
    }
}
