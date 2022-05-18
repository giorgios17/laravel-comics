@foreach ($fumetti as $fumetto)
    <div class="card">
        <img src="{{ $fumetto['thumb'] }}" :alt="{{ $fumetto['series'] }}" />
        <p>{{ $fumetto['series'] }}</p>
    </div>
@endforeach
