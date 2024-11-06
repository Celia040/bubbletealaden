@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kommentare hinzufügen') 
<!-- Browser title ändern -->

@section('content')

<div class="container p-4">
<div class="card-header h2">
Neuer Kommentar anlegen
</div>

<div class="card-body">

<form action="{{url('comment')}}" method="POST">
  @csrf
  <div class="form-group">
  <label for="">Titel</label>
  <input type="text" name="titel" id="titel" value="{{old('titel')}}" class="form-control {{$errors->has('titel') ? 'border-danger' : ''}}">
  <small class="form-text text-danger">{!! $errors->first('titel')!!}</small>
  </div>
  <div class="form-group my-2">
  <label for="punkte">Bewertung-Punkte</label>
  <select id="punkte" name="punkte" value="{{old('punkte')}}" class="form-control {{$errors->has('punkte') ? 'border-danger' : ''}}">
        <option value="">Bitte wählen</option>
        <option value="1.0">1.0</option>
        <option value="1.5">1.5</option>
        <option value="2.0">2.0</option>
        <option value="2.5">2.5</option>
        <option value="3.0">3.0</option>
        <option value="3.5">3.5</option>
        <option value="4.0">4.0</option>
        <option value="4.5">4.5</option>
        <option value="5.0">5.0</option>
    </select>
  <small class="form-text text-danger">{!! $errors->first('punkte')!!}</small>
  </div>
  <div class="form-group">
  <lable for="comment">Bitte Kommentar schreiben</label>
  <textarea name="kommentar" id="comment" class="form-control {{$errors->has('kommentar') ? 'border-danger' : ''}}">{{old('kommentar')}}</textarea>
  <small class="form-text text-danger">{!! $errors->first('kommentar')!!}</small>
  </div>
  
  <button type="submit" class="btn btn-success mt-2">
  <i class="fa-solid fa-circle-plus fs-1"></i>
  Neuer Kommentar anlegen  
  </button>
</form>

</div>

</div>

@endsection