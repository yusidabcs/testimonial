<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/testimonial'], function (Router $router) {
    $router->bind('testimonial', function ($id) {
        return app('Modules\Testimonial\Repositories\TestimonialRepository')->find($id);
    });
    $router->get('testimonials', [
        'as' => 'admin.testimonial.testimonial.index',
        'uses' => 'TestimonialController@index',
        'middleware' => 'can:testimonial.testimonials.index'
    ]);
    $router->get('testimonials/create', [
        'as' => 'admin.testimonial.testimonial.create',
        'uses' => 'TestimonialController@create',
        'middleware' => 'can:testimonial.testimonials.create'
    ]);
    $router->post('testimonials', [
        'as' => 'admin.testimonial.testimonial.store',
        'uses' => 'TestimonialController@store',
        'middleware' => 'can:testimonial.testimonials.store'
    ]);
    $router->get('testimonials/{testimonial}/edit', [
        'as' => 'admin.testimonial.testimonial.edit',
        'uses' => 'TestimonialController@edit',
        'middleware' => 'can:testimonial.testimonials.edit'
    ]);
    $router->put('testimonials/{testimonial}', [
        'as' => 'admin.testimonial.testimonial.update',
        'uses' => 'TestimonialController@update',
        'middleware' => 'can:testimonial.testimonials.update'
    ]);
    $router->delete('testimonials/{testimonial}', [
        'as' => 'admin.testimonial.testimonial.destroy',
        'uses' => 'TestimonialController@destroy',
        'middleware' => 'can:testimonial.testimonials.destroy'
    ]);
// append

});
