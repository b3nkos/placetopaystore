@extends('layouts.app')

@section('content')
    <div class="columns is-mobile is-centered">
        <div class="column is-half-desktop">
            <form action="/sale_order/create" method="POST">
                <div class="field">
                    <label class="label">{{__('sale_order.name_form_filed')}}</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="e.g Alex Smith">
                    </div>
                </div>

                <div class="field">
                    <label class="label">{{ __('sale_order.email_form_filed') }}</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
                    </div>
                </div>

                <div class="field">
                    <label class="label">{{ __('sale_order.mobile_form_filed') }}</label>
                    <div class="control">
                        <input class="input" type="tel" placeholder="e.g. 319876524">
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary is-medium is-fullwidth">{{ __('sale_order.save_button_label') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
