<footer>
    <!-- shop link -->
    <section class="infolink">
        <div class="container">
            {{-- <div class="info" :key="index" v-for="(link, index) in infolink">
                <img :src="link.image" :alt="link.name" />
                <p>{{ link . name }}</p>
            </div> --}}
            <div class="info">

            </div>
        </div>
    </section>
    <!-- footer nav -->
    <section class="footernav">
        <div class="container">
            <div class="col">
                <ul>
                    <h3>DC COMICS</h3>
                    {{-- <li :key="index" v-for="(link, index) in dcComics">
                        <a href="#">{{ link }}</a>
                    </li> --}}
                </ul>
                <ul>
                    <h3>SHOP</h3>
                    {{-- <li :key="index" v-for="(link, index) in shop">
                        <a href="#">{{ link }}</a>
                    </li> --}}
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>DC</h3>
                    {{-- <li :key="index" v-for="(link, index) in dc">
                        <a href="#">{{ link }}</a>
                    </li> --}}
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3>SITES</h3>
                    {{-- <li :key="index" v-for="(link, index) in sites">
                        <a href="#">{{ link }}</a>
                    </li> --}}
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
