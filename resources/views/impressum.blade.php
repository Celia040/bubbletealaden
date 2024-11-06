@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Über uns') 
<!-- Browser title ändern -->

@section('content')

<h1 class="uppercase">Impressum</h1>    
         
    <article class="relative">
    <h2>Angaben gemäß § 5 TMG</h2>

    <h3>Youvis Bubble Tea</h3>
    Inhaber: Musterman<br>
    Musterstraße 1<br>
    01224 Musterstadt<br>
    Deutschland</p>

    <h3>Kontakt:</h3>
    <p>Telefon: +49 (0)12-3456789<br>
    Email: <a href="mailto:Musterman@gmail.com">musterman@gmail.com</a><br>
    Webseite: http://www.Youvis.com</p>

    <h3>Umsatzsteuer-ID:</h3>
    <p>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz: DE123456789</p>

    <h3>Streitschlichtung:</h3>
    <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr" target="_blank">https://ec.europa.eu/consumers/odr</a>.<br>
    Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>
        
    <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
    <p class="quelle">Quelle: https://www.impressum-generator.de/ </p>
    </article>


@endsection