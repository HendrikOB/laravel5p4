@component('layouts.app')

    @slot('title')
        Images
    @endslot


        <div class="container">
            <div class="row">
                @component('components/thumbnail')
                    @slot('title', 'Styde')

                    @slot('image', asset('img/styde.jpg'))

                    @slot('description', 'Styde.net')

                    Comunidad de desarrollo web

                    https://styde.net

                @endcomponent

                    @component('components/thumbnail')
                        @slot('title', 'Laravel 5.4')

                        @slot('image', asset('img/laravel.jpg'))

                        @slot('description', 'Styde.net')

                        Curso de novedades de laravel 5.4

                    @endcomponent
            </div>
        </div>


@endcomponent
