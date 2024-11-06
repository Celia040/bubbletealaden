@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Über uns') 
<!-- Browser title ändern -->

@section('content')

<article>
        <h1 class="text-center">Über Uns</h1>    
        <h2>Unser Geschichte</h2> 
        <div>
        <p>Willkommen in unserem Bubble Tea Shop! Wir haben es uns zur Aufgabe gemacht, Ihnen den allerbesten Bubble Tea zu bieten, wobei wir Wert auf hochwertige Zutaten, individuelle Gestaltung und außergewöhnlichen Kundenservice legen.</p>
        <p>Der Bubble Tea Shop wurde 2024 von Yinli gegründet und hat seit seinen Anfängen in einer kleinen Innenstadtlage einen langen Weg zurückgelegt. Als Yinli anfing, trieb ihre Leidenschaft für köstlichen und kreativen Bubble Tea sie dazu, ihr eigenes Unternehmen zu gründen.</p>
        <p>Wir hoffen, dass Ihnen unsere Produkte genauso viel Freude bereiten wie uns, sie Ihnen anzubieten. Wenn Sie Fragen oder Anmerkungen haben, zögern Sie bitte nicht, uns zu kontaktieren.</p></p>
        </div>
        </article>
 
        <article>    
            <h2>Unser Team</h2> 
            
            <div>
             <img class="center pad-b" src="{{url('/')}}/images/team-spirit-2447163_640.jpg" alt="" width="640" height="518">   
            <p>Unser Erfolg verdanken wir nicht nur unseren großartigen Produkten, sondern auch unserem fantastischen Team. Jeder unserer Mitarbeiter bringt seine eigene Begeisterung und Expertise in die Arbeit ein, um sicherzustellen, dass jedes Getränk perfekt ist und jeder Besuch bei uns zu einem besonderen Erlebnis wird. Von unseren kreativen Baristas, die ständig neue Geschmackskombinationen entwickeln, bis hin zu unserem freundlichen Servicepersonal – wir sind stolz auf das, was wir tun.</p>
            </div>
        </article>

@endsection