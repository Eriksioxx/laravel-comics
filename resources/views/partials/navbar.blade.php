{{-- richiamo da config l'array dalla navbar --}}
@php
$navbar = config('navbar-items');
@endphp

{{-- assegno al logo la Home --}}

<a class="logo-header" href="{{ route('home') }}">
    <img src="{{ '/img/dc-logo.png' }}" alt="Dc-logo">
</a>

<nav>
    <ul>
        @foreach ($navbar as $key => $item)
            <li> <a href="{{ route($key) }}">{{ $items }}</a></li>
        @endforeach
    </ul>
</nav>
