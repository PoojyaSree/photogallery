@extends('layouts.app')
@section('content')

<h2>{{$album->name}}</h2>

<a class="button secondary" href="/" >GO BACK</a>
<a class="button" href="/photos/create/{{$album->id}}">Upload photo to album</a>
<hr>

@if(count($album->photos) > 0)
  <?php 
  $colcount=count($album->photos);
  $i=1;
  ?>
  <div id="photos">
    <div class="row text-center">
    @foreach($album->photos as $photo)
     @if($i == $colcount)
       <div class='medium-4 columns end'>
         <a href="/photos/{{$photo->id}}">
            <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
         </a>
         <br>
         <h4>{{$photo->title}}</h4>

      @else
      <div class='medium-4 columns '>
      <a href="/photos/{{$photo->id}}">
            <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
         </a>
         <br>
         <h4>{{$photo->title}}</h4> 

       @endif
       @if($i %3==0)
       </div></div><div class="row text-center">
       @else 
        </div>
       @endif
       <?php $i++;?>
       @endforeach
       </div>
      </div>
      @else
      <p> NO PHOTOS TO DISPLAY</p>
      @endif
@endsection