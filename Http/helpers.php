<?php

function list_testimonials(){

    return \Modules\Testimonial\Entities\Testimonial::where('status','=',1)->get();
}


function testimonial_image($testimonial){

    return url(count($testimonial->files) > 0 ? $testimonial->files[0]->path : Theme::url('images/user-icon.png'));

}

function testimonial_image_alt($testimonial){

    return url(count($testimonial->files) > 0 ? $testimonial->files[0]->alt_attribute : '');

}