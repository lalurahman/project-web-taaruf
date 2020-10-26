<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    protected $fillable = ['keterampilan'];

    public function akhwats()
    {
        return $this->belongsToMany('App\Models\Admin\Akhwat', 'akhwats_skills');
    }
}
