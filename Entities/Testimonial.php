<?php namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Testimonial extends Model
{
    use MediaRelation;

    protected $table = 'testimonial__testimonials';
    public $translatedAttributes = [];
    protected $fillable = [
        'name',
        'content',
        'status'

    ];
}
