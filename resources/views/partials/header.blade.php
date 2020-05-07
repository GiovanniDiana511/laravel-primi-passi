<div class="container-header">
    <img src="{{asset('img/logo.png')}}" alt="logo">
    <nav>
        <ul>
            <li class="{{(url()->current() == route('index')) ? "active" : ""}}"> <a href="{{route('index')}}">Home</a> </li>
            <li class="{{(url()->current() == route('prodotti')) ? "active" : ""}}"> <a href="{{route('prodotti')}}">Prodotti</a> </li>
            <li class="{{(url()->current() == route('contatti')) ? "active" : ""}}"> <a href="{{route('contatti')}}">Contatti</a> </li>
        </ul>
    </nav>
</div>
