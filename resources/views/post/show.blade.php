@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <div class="card mb-3">
          <div class="card-header">{{ $post->title }} | <small>{{ $post->category->name }}</small></div>

          <div class="card-body">
            <p>{{ $post->content }}</p>
          </div>
        </div>

        <div class="card">
          <div class="card-header">Tambah komentar</div>

          <div class="card-body">
            <form action="{{ route('post.comment.store', $post) }}" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Berikan komentar"></textarea>
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Komentar</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection