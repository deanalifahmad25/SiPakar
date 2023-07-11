<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'deskripsi_penyakit',
        'solusi_penyakit'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($penyakit) {
            $latestPenyakit = static::orderBy('id', 'desc')->first();
            if ($latestPenyakit) {
                $lastCode = substr($latestPenyakit->kode_penyakit, 1);
                $kodePenyakit = 'P' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $kodePenyakit = 'P001';
            }
            $penyakit->kode_penyakit = $kodePenyakit;
        });

        static::deleting(function ($penyakit) {
            $deletedCode = $penyakit->kode_penyakit;
            $nextPenyakit = static::where('kode_penyakit', '>', $deletedCode)->first();
            if ($nextPenyakit) {
                $kodePenyakit = 'P' . str_pad(substr($nextPenyakit->kode_penyakit, 1), 3, '0', STR_PAD_LEFT);
                $nextPenyakit->kode_penyakit = $deletedCode;
                $nextPenyakit->save();
            }
        });
    }
}
