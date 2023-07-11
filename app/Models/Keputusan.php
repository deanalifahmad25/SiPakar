<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;

    protected $table = 'keputusan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_keputusan',
        'nama_keputusan',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($keputusan) {
            $latestKeputusan = static::orderBy('id', 'desc')->first();
            if ($latestKeputusan) {
                $lastCode = substr($latestKeputusan->kode_keputusan, 1);
                $kodeKeputusan = 'K' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $kodeKeputusan = 'K001';
            }
            $keputusan->kode_keputusan = $kodeKeputusan;
        });

        static::deleting(function ($keputusan) {
            $deletedCode = $keputusan->kode_keputusan;
            $nextKeputusan = static::where('kode_keputusan', '>', $deletedCode)->first();
            if ($nextKeputusan) {
                $kodeKeputusan = 'K' . str_pad(substr($nextKeputusan->kode_keputusan, 1), 3, '0', STR_PAD_LEFT);
                $nextKeputusan->kode_keputusan = $deletedCode;
                $nextKeputusan->save();
            }
        });
    }
}
