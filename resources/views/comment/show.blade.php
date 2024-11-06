@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kommentare Detailansicht') 
<!-- Browser title ändern -->

@section('content')

<div class="container p-2 h5">
  <h2 class="text-center text-black mb-4">Kommentar Detailansicht</h2>
<div class="card-header bg-grey">
<b class="btn bg-success">Titel</b> {{$comment->titel}}

   <span class="float-end">
    geschrieben am: <i>"{{$comment->created_at ? $comment->created_at->format('d.m.Y H:i') : 'unbekannt' }}"</i></span>
    
    @if($comment->updated_at > $comment->created_at)
    geändert am: <i>{{$comment->updated_at->format('d.m.Y H:i')}}</i>
    @endif
</div>

<div class="card-header border">
  <p class=""><b class="btn bg-warning">Bewertung</b> {{$comment->punkte}}/5</p>
  <p class=""><b class="btn bg-info">Kommentar</b> {!!nl2br($comment->comment)!!}</p>
</div>

<a href="{{url('comment')}}" class="btn btn-primary mt-5 float-end">
  <i class="fa-solid fa-circle-left fs-4"></i>  
  Zurück
  </a>

</div>

@endsection