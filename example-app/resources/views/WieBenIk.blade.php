@extends("layout.layout")

@section("content")
    <header>        
        <h1>Wie Ben Ik</h1>
            <nav> 
                <ul> 
                    <li><a href="/">Home</a></li> 
                    <li><a class="active" href="WieBenIk">Wie Ben Ik</a></li>           
                </ul>
            </nav>
    </header>
    <div class="side">
        <div class="info">
            <h1>
                Dit ben ik:
            </h1>
                <img src="{{asset('images/nobba.png')}}" alt="itz a me nabilo">
            <article>
                <h2>➼ Naam: Nabil Ahammar</h2>
                <h2>➼ Nationaliteit: Nederlands</h2>
                <h2>➼ Geboorte datum/plaats: 15 oktober 2003</h2>
                <h2>➼ Woonplaats: Friesland, Wolvega</h2>
                <h2>➼ Adres: Sprietstraat 4, 8471 GR</h2>
            </article>
        </div>
    </div>
    <div class="m1">
        <div class="art1">
            <h1>
            Opleidingen
            </h1>
            <article class="opleiding">
            <p>➼ Theoretische leerweg op het Linde College 2015-2020.</p>
            <p>➼ Software Development 2020-heden.</p>
            </article>
        </div>
    </div>
    <div class="m2">
        <div class="art1">
            <h1>
            Stages
            </h1>
            <article class="stages">
            <p>➼ Vakkenvuller Karwei, Wolvega 2017-2017.</p>
            <p>➼ Doomijn KinderOpvang, Wolvega 2018-2018.</p>
            </article>
        </div>
    </div>
    <div class="m3">
        <div class="art1">
            <h1>
            Talen kennis
            </h1>
            <article class="TALEN">
            <p>➼ Nederlands, Moedertaal.</p>
            <p>➼ Duits, Spreken & Verstaan.</p>
            <p>➼ Engels, Spreken & Verstaan.</p>
            <p>➼ Berbers (noordelijk Marokko), Verstaan.</p>
            </article>
        </div>
    </div>
@endsection