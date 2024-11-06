 
 @extends('layouts.master')

 @section('content')


<h1 class="fs-2 text-center">Herzlich Willkommen</h1>
    <p class="fs-2 text-center">"Erfrischung trifft auf Genuss - Youvis Bubble Tea für Ihnen!"</p>
    <p class="fs-4 text-center">Frische Zutaten, vielfältige Auswahl und individueller Geschmack – Wir freuen uns auf Ihren Besuch!</p>


<div class="d-flex flex-row">
<div class="text-center info m-2 p-2">
    <!-- <figcaption>milchtee</figcaption>-->
    <img src="{{url('/')}}/images/drink-1.jpg" id="mainImage" width=300 >
</div>
<ul class="text-center info m-2 p-4">
    <h2 class="my-4">Kategorien</h2>
    <li class="list-group-numbered"><a href="#" class="nav-link" onclick="changeImage('{{url('/')}}/images/drink-1.jpg')">Milky-tee</a></li>
    <li class="list-group-numbered"><a href="#" class="nav-link" onclick="changeImage('{{url('/')}}/images/drink-4.jpg')">Yoghurt</a></li>
    <li class="list-group-numbered"><a href="#" class="nav-link" onclick="changeImage('{{url('/')}}/images/drink-2.jpg')">Brown-Sugar</a></li>
    <li class="list-group-numbered"><a href="#" class="nav-link" onclick="changeImage('{{url('/')}}/images/drink-3.jpg')">Fruity-tee</a></li>
</ul>

<div class="text-center info m-2 p-4">
    <h2 class="my-4">Standort und Kontakt</h2>
    <p><i class="fa-sharp fa-solid fa-clock"></i> Montag bis Samstag  10:00-18:00 Uhr</p>
    <p><i class="fa-solid fa-location-dot"></i> Musterstraße 1, 01224 Musterstadt </p>
    <p><i class="fa-solid fa-phone"></i> +49 (0)12-3456789</p>
    <p><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:Musterman@gmail.com" class="text-decoration-none">Musterman@gmail.com</a></p>
</div>

</div>

<script>
    function changeImage(imageUrl) {
            // Ändere die Quelle des Bildes
            document.getElementById('mainImage').src = imageUrl;
    }
</script>

@endsection