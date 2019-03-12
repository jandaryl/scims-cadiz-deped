<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use App\Models\Traits\TranslatableJson;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class School extends Model implements HasMedia
{
    use HasTranslations;
    use TranslatableJson;
    use HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_name',
        'school_id',
        'district',
        'principal_name',
        'no_of_students',
        'no_of_teachers',
        'no_of_classrooms',
        'address',
        'contact_no',
    ];

    protected $appends = [
        'can_edit',
        'can_delete',
        'has_featured_image',
        'featured_image_url',
        'has_logo_image',
        'logo_image_url',
    ];

    protected $casts = [
        'has_featured_image' => 'boolean',
    ];

    protected $with = [
        'media',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getCanEditAttribute()
    {
        return Gate::check('edit schools');
    }

    public function getCanDeleteAttribute()
    {
        return Gate::check('delete schools');
    }

    public function getHasFeaturedImageAttribute()
    {
        /* @var Media $media */
        return (bool) $this->getFirstMedia('featured image');
    }

    public function getFeaturedImageUrlAttribute()
    {
        if ($image = $this->getFirstMedia('featured image')) {
            return $image->getUrl();
        }
    }

    public function getHasLogoImageAttribute()
    {
        /* @var Media $media */
        return (bool) $this->getFirstMedia('logo image');
    }

    public function getLogoImageUrlAttribute()
    {
        if ($image = $this->getFirstMedia('logo image')) {
            return $image->getUrl();
        }
    }
}
