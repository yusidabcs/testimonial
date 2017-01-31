<div class="box-body">
    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.name')) !!}

        <input type="text" name="name" value="{{ $testimonial->name }}" class="form-control">
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('type') ? ' has-error' : '' }}'>
        @include('media::admin.fields.file-link', [
            'entityClass' => 'Modules\\\\Testimonial\\\\Entities\\\\Testimonial',
            'entityId' => $testimonial->id,
            'zone' => 'photo_profile'
        ])

        {!! $errors->first('photo_profile', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.content')) !!}

        <textarea class="form-control" name="content" >{{ $testimonial->content }}</textarea>
        {!! $errors->first('icon', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.status')) !!}
        <br>
        <label class="radio-inline">
            <input type="radio" name="status" id="inlineRadio1" value="1" {{ $testimonial->status == 1 ? 'checked' : ''  }}> Visible
        </label>
        <label class="radio-inline">
            <input type="radio" name="status" id="inlineRadio2" value="0" {{ $testimonial->status == 0 ? 'checked' : ''  }}> Hidden
        </label>

        {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
    </div>
</div>
