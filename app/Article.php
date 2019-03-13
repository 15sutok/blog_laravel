<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;



class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'published_at'
    ];

    protected $dates = ['published_at'];

    /**
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
