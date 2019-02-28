<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use App\Models\Traits\TranslatableJson;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class School extends Model
{
    use HasTranslations;
    use TranslatableJson;

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

    protected $appends = ['can_edit', 'can_delete'];

    public function getCanEditAttribute()
    {
        return Gate::check('edit schools');
    }

    public function getCanDeleteAttribute()
    {
        return Gate::check('delete schools');
    }
}
