@extends('layout.app')
    @section('main')
        <main id="main_content" class="main-height ">
            <h2 class="t_center">Home</h2>
            <div class="posts d-flex j_around">
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{ $post['title'] }}</h3>
                        <p>{{ $post['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </main>
    @endsection