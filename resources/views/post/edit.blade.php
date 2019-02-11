@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div class="card">
          <div class="card-header">Edit Post</div>

          <div class="card-body">
            <form class="" action="{{ route('post.update', $post) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('patch') }}
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post title" value="{{ $post->title }}">
              </div>
              
              <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                  @foreach ($categories as $category)
                    <option
                      value="{{ $category->id }}"
                      @if ($post->category_id === $category->id)
                          selected
                      @endif
                    >
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>
              </div>
        
              <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="content" rows="5" class="form-control" placeholder="post content">{{ $post->content }}</textarea>
              </div>
        
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection