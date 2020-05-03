<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded =[];
    public function profileImage()
    {
        $imgPath = ($this->image) ? $this->image :'uploads/profile/MMf3BZwBo7xEsyv9oK6PYWpnELWV1oO0JwuyDjDn.png';
        return '/storage/'.$imgPath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
