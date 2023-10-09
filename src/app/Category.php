<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tour;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    /* slug defination */
    public function setSlug($slug)
    {
        if (!empty($slug)) {
            $this->slug = str_slug($slug);
            return;
        }

        if (isset($this->name)) {
            $this->slug = str_slug($this->name);
        }
    }
    /* slug defination end */
}
