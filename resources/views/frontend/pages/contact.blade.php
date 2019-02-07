@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('body_class', 'page-contact')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <iframe src="/images/cadiz-deped-location.png"
                    height="550" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <form action="{{ route('contact') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">@lang('validation.attributes.name')</label>
                    {{ Form::bsText('name', null, ['required', 'placeholder' => __('validation.attributes.name')]) }}
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="postal_code">@lang('validation.attributes.postal_code')</label>
                            {{ Form::bsText('postal_code', null, ['placeholder' => __('validation.attributes.postal_code')]) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="city">@lang('validation.attributes.city')</label>
                            {{ Form::bsText('city', null, ['placeholder' => __('validation.attributes.city')]) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">@lang('validation.attributes.email')</label>
                            {{ Form::bsEmail('email', null, ['required', 'placeholder' => __('validation.attributes.email')]) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">@lang('validation.attributes.phone')</label>
                            {{ Form::bsTel('phone', null, ['placeholder' => __('validation.attributes.phone')]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">@lang('validation.attributes.message')</label>
                    {{ Form::bsTextarea('message', null, ['required', 'placeholder' => __('validation.attributes.message'), 'rows' => 5]) }}
                </div>

                <div class="form-group">
                    {!! Form::captcha() !!}
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="@lang('buttons.send')">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {!! Captcha::script() !!}
@endpush
