<footer>
    <?php
    $infolink = [
        [
            'name' => 'DIGITAL COMICS',
        ],
        [
            'name' => 'DC MERCHANDISE',
        ],
        [
            'name' => 'SUBSCRIPTION',
        ],
        [
            'name' => 'COMIC SHOP LOCATOR',
        ],
        [
            'name' => 'DC POWER VISA',
        ],
    ];
    $dcComics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
    $shop = ['Shop DC', 'Shop DC Collectibles'];
    $dc = ['Terms of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    $sites = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    ?>
    <!-- shop link -->
    <section class="infolink">
        <div class="container">
            <div class="info">
                @foreach ($infolink as $link)
                    {{-- <img src="{{ $link['image'] }}" alt="{{ $link['name'] }}" /> --}}
                    <p>{{ $link['name'] }}</p>
                @endforeach
            </div>
        </div>
    </section>
    <!-- footer nav -->
    <section class="footernav">
        <div class="container">
            <div class="col">
                <ul>
                    <h3>DC COMICS</h3>
                    <li>
                        @foreach ($dcComics as $link)
                            <a href="#">{{ $link }}</a>
                        @endforeach
                    </li>
                </ul>
                <ul>
                    <h3>SHOP</h3>
                    <li>
                        @foreach ($shop as $link)
                            <a href="#">{{ $link }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>DC</h3>
                    <li>
                        @foreach ($dc as $link)
                            <a href="#">{{ $link }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>SITES</h3>
                    <li>
                        @foreach ($sites as $link)
                            <a href="#">{{ $link }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- social link & signup -->
    <section class="footersocial">
        <div class="container">
            <a id="signup" href="#">SIGN-UP NOW!</a>
            <div class="social">
                <p>FOLLOW US</p>
                {{-- <div :key="index" v-for="(social, index) in allSocial">
                    <img :src="social" alt="social" />
                </div> --}}
            </div>
        </div>
    </section>

</footer>
