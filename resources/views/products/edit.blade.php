@component('layouts.app')
    {{--<div class="container-fluid">
        <div class="row">
            <div class="container col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @lang(['name' => $product->name])
                            Edit :name product
                        @endlang

                        --}}{{--{{ __('Edit :name product', ['name' => $product->name]) }}--}}{{--
                    </div>
                    <div class="panel-body">
                        {!! Form::model($product , [
                            'route' => ['products.update', $product], 'method' => 'PUT',
                            'role' => 'form', 'class' => 'form'
                        ]) !!}
                        {!! Field::text('name') !!}
                        {!! Field::select('category_id', $categories) !!}

                        {!! Form::submit('Send', ['class' => 'btn btn-success']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <example></example>
@endcomponent
