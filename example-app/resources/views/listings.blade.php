<h1>listings</h1>
<h2> {{ $heading }} </h2>

@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{ $listing['id'] }}">
            {{ $listing['title'] }}
        </a>
    </h2>
    <p>
        {{ $listing['description'] }}
    </p>
@endforeach
