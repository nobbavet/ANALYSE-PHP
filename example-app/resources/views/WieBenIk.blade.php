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
                <h2>Naam: Nabil Ahammar</h2>
                <h2>Geboorte datum: 15 oktober 2003</h2>
                <h2>Woonplaats: Friesland, Wolvega</h2>
                <h2>Adres: Sprietstraat 4, 8471 GR</h2>
            </article>
        </div>
    </div>
    <div class="m1">
        <div class="art1">
            <h1>
            Opleidingen
            </h1>
            <article>
            
            </article>
        </div>
    </div>
@endsection