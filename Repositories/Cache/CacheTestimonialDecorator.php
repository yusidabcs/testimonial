<?php namespace Modules\Testimonial\Repositories\Cache;

use Modules\Testimonial\Repositories\TestimonialRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTestimonialDecorator extends BaseCacheDecorator implements TestimonialRepository
{
    public function __construct(TestimonialRepository $testimonial)
    {
        parent::__construct();
        $this->entityName = 'testimonial.testimonials';
        $this->repository = $testimonial;
    }
}
