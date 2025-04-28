    <!-- resources/views/child.blade.php -->

    @extends('layouts.app')


    @section('content')
    <!-- Main -->
    <section id="main">
                        <div class="container">

                           <!-- Content -->
                            @foreach ($postagens as $value)
                            <article class="box post">
                                <header>
                                    <h2>{{ $value->titulo }}</h2>
                                </header>
                                <p>{!! $value->descricao !!}</p>
                            </article>
                            @endforeach


                                        </div>

                                        {{ $postagens->links() }}
                                    </section>

                    @endsection