@extends('layouts.app')
 @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit blog post</h1></div>
                 <div class="panel-body">
                   <form method="post" action="{{action('PostsController@update', $post->id)}}">
                      <!-- {{ method_field('PATCH')}} -->
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" name="title" class="form-control" value="{{ $post->title }}"/>
                      </div>
                      <div class="form-group">
                          <label for="body">Body</label>
                          <textarea name="body" rows="8"  class="form-control">{{ $post->body }}</textarea>
                      </div>
                      <input type="submit" class="btn btn-block btn-primary">
                   </form> 
                   </div>
            </div>
        </div>
    </div>
</div>
@endsection