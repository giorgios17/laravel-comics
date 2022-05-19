@foreach ($fumetti as $fumetto)
    <div class="card">
        <a href="/productdetails">
            <img src="{{ $fumetto['thumb'] }}" :alt="{{ $fumetto['series'] }}" />
            <p>{{ $fumetto['series'] }}</p>
        </a>
    </div>
@endforeach
