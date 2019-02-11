@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">

      @foreach ($posts as $post)
        <div class="card mb-3">
          <div class="card-header">
            {{ $post->title }}
            <div class="pull-right">
              <form action="{{ route('post.destroy', $post) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-sm btn-danger">Hapus</button>
              </form>
            </div>
          </div>

          <div class="card-body">
            <p>{{ $post->content }}</p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection