@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kontakt mit uns') 
<!-- Browser title ändern -->

@section('content')

        
   
    <h2 class="">Unsere Kontaktdaten</h2>
<div class="d-flex flex-row">
    <div class="border flex-grow-1 p-2">
    <p>Musterstraße 1 <br> 01224 Musterstadt</p>
    </div>
    <div class="border flex-grow-1 p-2">
    <p>Telefone: <br>+49 (0)12-3456789</p>
    </div>
    <div class="border flex-grow-1 p-2">
    <p>Email:<br> <a href="mailto:musterman@gmail.com"> musterman@gmail.com</a></p>
    </div>
</div>

  
    <h2 class="py-2">Kontaktformular</h2> 
<p >Hier können Sie uns eine Nachricht hinterlassen. Wir werden uns umgehend mit Ihnen in Verbindung setzen, Ihre Anfrage beantworten und Ihre Wünsche erfüllen.</p>
<form action=" " method="post">
    <div><i class="fa-solid fa-user"></i>
    <input type="text" name="name" placeholder="Name*" class="w-75 m-2"></div>

    <div><i class="fa-solid fa-envelope"></i>
    <input type="email" name="email" placeholder="E-mail*"  class="w-75 m-2"></div>

    <div><i class="fa-solid fa-phone"></i>
        <input type="tel" name="phone" pattern="[0-9]{11-15}" placeholder="Telefone"  class="w-75 m-2"></div>

    <div><i class="fa-solid fa-pen-to-square"></i></i>
    <textarea id="message" name="message" rows="8" placeholder="Nachricht*"  class="w-75 m-2"></textarea></div>
    
    <div class="checkbox">
    <input type="checkbox" id="stimmung" name="stimmung">
    <label for="stimmung">Ich stimme der Verarbeitung meiner hier eingegebenen Daten gemäß <a href="index.php?page=datenschutz" style="text-decoration: underline;">Datenschutzerklärung</a> zu.</label>
    </div>

    <button type="submit"  class="btn btn-primary center my-4">Senden</button>
</form>
    </article>



@endsection