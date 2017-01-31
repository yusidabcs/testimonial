<?php namespace Modules\Testimonial\Repositories\Eloquent;

use Modules\Testimonial\Events\TestimonialWasCreated;
use Modules\Testimonial\Events\TestimonialWasDeleted;
use Modules\Testimonial\Events\TestimonialWasUpdated;
use Modules\Testimonial\Repositories\TestimonialRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentTestimonialRepository extends EloquentBaseRepository implements TestimonialRepository
{
    public function create($data)
    {
        $testimonial= $this->model->create($data);
        event(new TestimonialWasCreated($testimonial, $data));
        return $testimonial;
    }

    public function update($model, $data)
    {
        $model->update($data);

        event(new TestimonialWasUpdated($model->id, $data));

        return $model;
    }

    public function destroy($model)
    {
        event(new TestimonialWasDeleted($model->id, get_class($model)));

        return $model->delete();
    }
}
