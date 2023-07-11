<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_gejala',
        'nama_gejala',
        'deskripsi_gejala',
        'pertanyaan'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($gejala) {
            $latestGejala = static::orderBy('id', 'desc')->first();
            if ($latestGejala) {
                $lastCode = substr($latestGejala->kode_gejala, 1);
                $kodeGejala = 'G' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $kodeGejala = 'G001';
            }
            $gejala->kode_gejala = $kodeGejala;
        });

        static::deleting(function ($gejala) {
            $deletedCode = $gejala->kode_gejala;
            $nextGejala = static::where('kode_gejala', '>', $deletedCode)->first();
            if ($nextGejala) {
                $kodeGejala = 'G' . str_pad(substr($nextGejala->kode_gejala, 1), 3, '0', STR_PAD_LEFT);
                $nextGejala->kode_gejala = $deletedCode;
                $nextGejala->save();
            }
        });
    }
}
