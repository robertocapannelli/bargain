@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/w" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name"
                               value="{{ old('name') }}"
                               autocomplete="name"
                               autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="brand" class="col-md-4 col-form-label">{{__('Brand')}}</label>
                        <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror"
                               name="brand"
                               value="{{old('brand')}}"
                               autocomplete="brand"
                               autofocus>

                        @error('brand')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="reference" class="col-md-4 col-form-label">{{__('Reference')}}</label>
                        <input id="reference" type="text" class="form-control @error('reference') is-invalid @enderror"
                               name="reference"
                               value="{{old('reference')}}"
                               autocomplete="reference"
                               autofocus>

                        @error('reference')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="year" class="col-md-4 col-form-label">{{__('Year')}}</label>
                        <input id="year" type="number" class="form-control @error('year') is-invalid @enderror"
                               name="year"
                               value="{{old('year')}}"
                               autocomplete="year"
                               autofocus>

                        @error('year')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    {{--<div class="form-group row">

                        <label for="warranty" class="col-md-4 col-form-label">{{__('Warranty')}}</label>

                        <div class="form-check">
                            <label for="warranty" class="form-check-label">{{__('Yes')}}</label>
                            <input class="form-check-input" type="radio" name="warranty" id="warranty" value="yes">
                        </div>

                        <div class="form-check">
                            <label for="warranty" class="form-check-label">{{__('No')}}</label>
                            <input class="form-check-input" type="radio" name="warranty" id="warranty" value="no">
                        </div>
                    </div>--}}

                    <div class="form-group row">
                        <label for="featured_image" class="col-md-4 col-form-label">{{__('Featured Image')}}</label>
                        <input id="featured_image" type="file"
                               class="form-control-file @error('featured_image') is-invalid @enderror"
                               name="featured_image"
                               value="{{old('featured_image')}}" autocomplete="featured_image" autofocus>

                        @error('featured_image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="row py-4">
                        <button class="btn-primary btn">{{__('Add new watch')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
