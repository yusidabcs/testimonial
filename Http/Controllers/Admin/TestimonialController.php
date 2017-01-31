<?php namespace Modules\Testimonial\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Media\Repositories\FileRepository;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Testimonial\Repositories\TestimonialRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TestimonialController extends AdminBaseController
{
    /**
     * @var TestimonialRepository
     */
    private $testimonial;
    private $file;

    public function __construct(TestimonialRepository $testimonial, FileRepository $file)
    {
        parent::__construct();

        $this->testimonial = $testimonial;
        $this->file = $file;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $testimonials = $this->testimonial->all();

        return view('testimonial::admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonial::admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->testimonial->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('testimonial::testimonials.title.testimonials')]));

        return redirect()->route('admin.testimonial.testimonial.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Testimonial $testimonial
     * @return Response
     */
    public function edit(Testimonial $testimonial)
    {
        $photo_profile = $this->file->findFileByZoneForEntity('photo_profile', $testimonial);
        return view('testimonial::admin.testimonials.edit', compact('testimonial','photo_profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Testimonial $testimonial
     * @param  Request $request
     * @return Response
     */
    public function update(Testimonial $testimonial, Request $request)
    {
        $this->testimonial->update($testimonial, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('testimonial::testimonials.title.testimonials')]));

        return redirect()->route('admin.testimonial.testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Testimonial $testimonial
     * @return Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->testimonial->destroy($testimonial);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('testimonial::testimonials.title.testimonials')]));

        return redirect()->route('admin.testimonial.testimonial.index');
    }
}
