@extends('layouts.frontend')

@section('title', __('labels.frontend.titles.about'))

@section('body_class', 'page-about')

@section('highlight')
    <div class="jumbotron">
        <div class="container">
            <p>Cadiz DepEd image with description.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <font-awesome-icon icon="home"></font-awesome-icon> @lang('labels.frontend.titles.about')
        </div>

        <div class="card-body">
            <p>
                Some brief history about the client.
            </p>
        </div>
    </div>

    <b-card header="Some History" class="mb-3" v-cloak>
        <p>Some background history about this school.</p>
    </b-card>

    <div class="card mb-3">
        <div class="card-header">
            This panel show other related images about the client.
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ image_template_url('images/wallpapers-uhd/03908_halfdomejoy_3840x2160.jpg', ['w' => 400, 'h' => 300, 'fit' => 'crop']) }}" alt="halfdomejoy" width="480" height="360" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{ image_template_url('images/wallpapers-uhd/03909_insidebrycecanyon_3840x2160.jpg', ['w' => 400, 'h' => 300, 'fit' => 'crop']) }}" alt="insidebrycecanyon" width="480" height="360" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{ image_template_url('images/wallpapers-uhd/03987_forestsofendor_3840x2160.jpg', ['w' => 400, 'h' => 300, 'fit' => 'crop']) }}" alt="forestsofendor" width="480" height="360" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
