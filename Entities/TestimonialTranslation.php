<?php namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;

class TestimonialTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'testimonial__testimonial_translations';
}
