<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Akhwat extends Model
{
    public function tribe()
    {
        return $this->belongsTo('App\Suku', 'suku_id');
    }

    public function hair()
    {
        return $this->belongsTo('App\Rambut', 'rambut_id');
    }

    public function job()
    {
        return $this->belongsTo('App\Pekerjaan', 'pekerjaan_id');
    }

    public function face()
    {
        return $this->belongsTo('App\Wajah', 'wajah_id');
    }

    public function height()
    {
        return $this->belongsTo('App\Tinggi', 'tinggi_id');
    }

    public function body()
    {
        return $this->belongsTo('App\Tubuh', 'tubuh_id');
    }

    public function comunity()
    {
        return $this->belongsTo('App\Organisasi', 'organisasi_id');
    }

    public function education()
    {
        return $this->belongsTo('App\Pendidikan', 'pendidikan_id');
    }

    public function skin()
    {
        return $this->belongsTo('App\Kulit', 'kulit_id');
    }

    public function blood()
    {
        return $this->belongsTo('App\Darah', 'darah_id');
    }

    public function nikah()
    {
        return $this->belongsTo('App\Nikah');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Keterampilan', 'akhwats_skills');
    }
}
