{{ Form::open(['route' => ['user.password.change'], 'class' => 'form-horizontal', 'method' => 'PATCH']) }}

<div class="form-group row lg:text-lg md:text-base sm:text-sm text-sm">
    <label for="old_password" class="col-md-4 col-form-label">@lang('validation.attributes.old_password')</label>

    <div class="col-md-8">
        {{ Form::bsPassword('old_password', ['required', 'placeholder' => __('validation.attributes.old_password')]) }}
    </div>
</div>

<div class="form-group row lg:text-lg md:text-base sm:text-sm text-sm">
    <label for="password" class="col-md-4 col-form-label">@lang('validation.attributes.new_password')</label>

    <div class="col-md-8">
        {{ Form::bsPassword('password', ['required', 'placeholder' => __('validation.attributes.new_password')]) }}
    </div>
</div>

<div class="form-group row lg:text-lg md:text-base sm:text-sm text-sm">
    <label for="password_confirmation" class="col-md-4 col-form-label">@lang('validation.attributes.password_confirmation')</label>

    <div class="col-md-8">
        {{ Form::bsPassword('password_confirmation', ['required', 'placeholder' => __('validation.attributes.password_confirmation')]) }}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-8 ml-auto">
        <button class="btn btn-primary lg:text-lg md:text-base sm:text-sm text-sm">@lang('buttons.update')</button>
    </div>
</div>

{{ Form::close() }}
