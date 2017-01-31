<?php

namespace Modules\Testimonial\Events;

use Modules\Media\Contracts\StoringMedia;

class TestimonialWasCreated implements StoringMedia
{
    /**
     * @var array
     */
    public $data;
    /**
     * @var int
     */
    public $testimonial;

    public function __construct($testimonial, array $data)
    {
        $this->data = $data;
        $this->testimonial = $testimonial;
    }

    public function getEntity()
    {
        return $this->testimonial;
    }
    /**
     * Return the ALL data sent
     * @return array
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}
