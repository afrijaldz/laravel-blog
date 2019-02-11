@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          @foreach ($posts as $post)
            <div class="card">
              <div class="card-header">{{ $post->title }}</div>

              <div class="card-body">
                <p>{{ $post->content }}</p>
              </div>
            </div>
          @endforeach

        </div>
    </div>
  </div>
@endsection