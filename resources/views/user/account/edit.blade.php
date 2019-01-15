{{ Form::model($loggedInUser, ['route' => 'user.account.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) }}

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label">@lang('validation.attributes.name')</label>

    <div class="col-md-8">
        {{ Form::bsText('name', null, ['required', 'placeholder' => __('validation.attributes.name')]) }}
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label">@lang('validation.attributes.email')</label>

    <div class="col-md-8">
        {{ Form::bsEmail('email', null, ['required', 'placeholder' => __('validation.attributes.email')]) }}
    </div>
</div>

 <!-- <div class="form-group row">
        <label for="avatar" class="col-md-4 col-form-label">@lang('validation.attributes.avatar')</label>

        <div class="col-md-8">
             <input type="file" class="form-control" name="avatar" id="avatar">
        </div>
</div> -->

<div class="form-group row">
    <div class="col-md-8 ml-auto">
        <button class="btn btn-primary">@lang('buttons.update')</button>
    </div>
</div>

{{ Form::close() }}
