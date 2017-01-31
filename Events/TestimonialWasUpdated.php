<?php namespace Modules\Testimonial\Events;

class TestimonialWasUpdated
{
    /**
     * @var array
     */
    public $data;
    /**
     * @var int
     */
    public $testimonialId;
    public function __construct($testimonialId, array $data)
    {
        $this->data = $data;
        $this->$testimonialId = $testimonialId;
    }
}