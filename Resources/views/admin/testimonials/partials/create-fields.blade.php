<div class="box-body">
    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.name')) !!}

        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('type') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.photo')) !!}

        @include('media::admin.fields.new-file-link-single', [
            'zone' => 'photo_profile'
        ])

        {!! $errors->first('photo', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.content')) !!}

        <textarea class="form-control" name="content" >{{ old("content") }}</textarea>
        {!! $errors->first('icon', '<span class="help-block">:message</span>') !!}
    </div>

    <div class='form-group{{ $errors->has('icon') ? ' has-error' : '' }}'>
        {!! Form::label('type', trans('testimonial::testimonials.form.status')) !!}
        <br>
        <label class="radio-inline">
            <input type="radio" name="status" id="inlineRadio1" value="1" required> Visible
        </label>
        <label class="radio-inline">
            <input type="radio" name="status" id="inlineRadio2" value="0" required> Hidden
        </label>

        {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
    </div>
</div>
