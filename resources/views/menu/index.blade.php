@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Menükarte') 
<!-- Browser title ändern -->

@section('content')

<h1 class="text-center">Unser Menü</h1>
<h2>Kategorie </h2>
         <ul class="d-flex flex-wrap">
        @foreach($menus AS $menu)
        @if($menu->sorte === 'Brown-Sugar')
        <li class="list-group-item m-4">
            <a href="/menu/{{$menu->sorte}}" class="page-link">
            <figure><img src="{{url('/')}}/images/drink-2.jpg" alt="" width=300></figure>
            <figcaption class="text-center">Brown-Sugar</figcaption></a>
        </li>
        @endif
        @if($menu->sorte === 'Milky-Tee')   
            <li class="list-group-item m-4 border-top">
            <a href="/menu/{{$menu->sorte}}" class="page-link">
            <figure><img src="{{url('/')}}/images/drink-1.jpg" alt="" width=300></figure>
            <figcaption class="text-center">Milky-Tee</figcaption>
            </a></li>
            @endif
        @if($menu->sorte === 'Yoghurt')    
            <li class="list-group-item m-4 border-top">
            <a href="/menu/{{$menu->sorte}}" class="page-link">
            <figure><img src="{{url('/')}}/images/drink-4.jpg" alt="" width=300></figure>
            <figcaption class="text-center">Yoghurt</figcaption>
            </a></li>
            @endif
        @if($menu->sorte === 'Fruity-Tee')   
            <li class="list-group-item m-4 border-top">
            <a href="/menu/{{$menu->sorte}}" class="page-link">
            <figure><img src="{{url('/')}}/images/drink-3.jpg" alt="" width=300></figure>
            <figcaption class="text-center">Fruity-Tee</figcaption>
            </a></li>
            @endif
            @endforeach
         </ul>
           

@endsection