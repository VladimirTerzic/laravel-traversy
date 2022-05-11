<h1>listings</h1>
<h2> {{ $heading }} </h2>

@foreach ($listings as $listing)
    <h2>
        {{ $listing['title'] }}
    </h2>
    <p>
        {{ $listing['description'] }}
    </p>
@endforeach
