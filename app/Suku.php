<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suku extends Model
{
    protected $fillable = ['suku'];

    public function akhwats()
    {
        return $this->belongsToMany('App\Models\Admin\Akhwat', 'akhwat_suku', 'suku_id', 'akhwat_id');
    }
}
