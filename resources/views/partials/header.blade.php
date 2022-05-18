<header>
    {{-- NAVLINKS --}}
    <?php
    $navlinks = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];

    ?>

    <img id="logo" src="/images/dc-logo.png" alt="logo header" />
    <ul>
        <li>
            @foreach ($navlinks as $link)
                <a href="#">{{ $link }}</a>
            @endforeach
        </li>
    </ul>
</header>
