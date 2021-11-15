<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'name',
        'body',
        'link',
    ];

    protected $hidden = [
        'pivot',
        'created_at',
        'updated_at'
    ];

    public function locale(string $locale)
    {
        return $this->locales()->where('project_id',$this->id)->where('language', $locale)->firstOr(
            function(){
                return $this->locales->where('project_id',$this->id)->where('language', config('app.fallback_locale'))->first();
            }
        );
    }

    public function locales(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectLocale::class);
    }

    public function technologies(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Technology::class)->orderByPivot('order','asc');
    }


}
