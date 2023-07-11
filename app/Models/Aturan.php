<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $table = 'aturan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_aturan',
        'keputusan',
        'penyakit',
        'kriteria_gejala'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($aturan) {
            $latestAturan = static::orderBy('id', 'desc')->first();
            if ($latestAturan) {
                $lastCode = substr($latestAturan->kode_aturan, 1);
                $kodeAturan = 'A' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $kodeAturan = 'A001';
            }
            $aturan->kode_aturan = $kodeAturan;
        });

        static::deleting(function ($aturan) {
            $deletedCode = $aturan->kode_aturan;
            $nextAturan = static::where('kode_aturan', '>', $deletedCode)->first();
            if ($nextAturan) {
                $kodeKeputusan = 'A' . str_pad(substr($nextAturan->kode_aturan, 1), 3, '0', STR_PAD_LEFT);
                $nextAturan->kode_aturan = $deletedCode;
                $nextAturan->save();
            }
        });
    }
}
