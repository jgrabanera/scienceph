<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Science PH" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style2.css') }}" />

    <title>Science PH</title>
</head>

<body>
    <header>
        <div class="header-content">
            <div class="logo"><img src="/assets/images/scienceph-logo.png" alt="" /></div>
            <div class="slogan">
                <p class="slogan-content">"Exploring the Boundaries, Unlocking the Future: Science PH"</p>
            </div>
            <div class="logos">
                <a href=""><img style="margin-right: 20px" src="/assets/icons/DOST-LOGO.png" alt=""
                        width="50" /></a>
                <a href=""><img src="/assets/icons/DOST-STII-updated.png" alt="" width="50" /></a>
            </div>
        </div>

        <div class="nav-container">
            <div class="nav-content">
                <nav>
                    <ul class="">
                        <li>
                            <a class="active" href="">HOME</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">CATEGORIES </a>
                            <ul class="dropdown-content">
                                <li><a href="#">Health / Medical Sciences</a></li>
                                <li><a href="#">Information and Communications Technology</a></li>
                                <li><a href="#">Natural Disaster and Mitigation</a></li>
                                <li><a href="#">Industry and Business</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Energy</a></li>
                                <li><a href="#">Nuclear</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Aquaculture</a></li>
                                <li><a href="#">Agriculture</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">ARTICLES</a>
                        </li>
                        <li>
                            <a href="">ABOUT US</a>
                        </li>
                        <li>
                            <a href="">CONTACT</a>
                        </li>
                    </ul>
                </nav>
                <div class="social-media">
                    <img src="/assets/icons/facebook-logo-wht.png" width="24" alt="">
                    <img src="/assets/icons/instagram-logo-wht.png" width="24" alt="">
                    <img src="/assets/icons/youtube-logo-wht.png" width="24" alt="">
                </div>
            </div>
        </div>


    </header>

    <div class="hero-image">
        <div class="hero-text">
            <p class="cta">Hi! How can we help you?</p>

            <div class="container">
                <form class="search">
                    <input type="search" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
                <hr style="height: 10px; background-color: transparent;">
                <form>
                    <label>
                        <input class="radio" type="radio" name="option" value="All"> All
                    </label>
                    <label>
                        <input class="radio" type="radio" name="option" value="News"> News & Article
                    </label>
                    <label>
                        <input class="radio" type="radio" name="option" value="Videos"> Videos
                    </label>
                </form>
            </div>

        </div>
    </div>

    <div class="news">
        <div class="news-section">
            <h1>Latest News</h1>
            <hr />

            <div class="sections">
                <div class="latestSection">
                    <div class="news-image"></div>
                    <h2>Tips for writing great posts that increase your site traffic</h2>
                    <p>
                        Write about something you know. If you don’t know much about a specific topic that will interest
                        your readers, invite an expert to write about it.
                    </p>
                    <br />
                    <a href="" class="readMore">Read More →</a>
                </div>
                <div class="otherSections">
                    <h3>Tips for writing great posts that increase your site traffic</h3>
                    <i>By: Admin</i>
                    <br /><br />
                    <p>Write about something you know. If you dont know much about a specific topic that will interest
                        your readers, invite an expert to write</p>
                    <hr />

                    <h3>Triple combination therapy brings lasting improvement in cystic fibrosis</h3>
                    <i>By: Admin</i>
                    <br /><br />
                    <p>The mucus in the airways is not as sticky, inflammation in the lungs significantly reduced:
                        Triple combination therapy can achieve these</p>
                    <hr />
                </div>
            </div>
        </div>
    </div>

    <div class="articles">
        <div class="article-section">
            <h2>Popular Article</h1>
                <hr style="height: 1px; background-color: #acacac;" />
                <hr style="height: 10px; background-color: transparent;">

                <div class="sections">

                    @foreach($topNewArticles as $topNewArticle)
                        <div class="article-1">
                            <h3>{{ $topNewArticle->title }}</h3>
                            <p class="article-date-posted">Date posted: {{ date('M-d-Y h:i A', strtotime($topNewArticle->created)) }}</p>
                            <p style="color:#acacac; font-style: italic; margin-bottom: 15px;">
                                Word ago...
                            </p>

                            <div class="text-container">
                                <p class="full-text">
                                    {!! $topNewArticle->introtext !!}
                                </p>
                                <a href="#" class="see-more">See More</a>
                            </div>
                           
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

    <div class="partners">
        <div class="partners-logos ">
            <img class="responsive" src="./assets/images/logos/GAD-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/INFO-SERBILIS-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/PMWS-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/PSJ-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/PSTA-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/S&TPOST-228x90.jpg" alt="">
            <img class="responsive" src="./assets/images/logos/SPHERES-228x90.jpg" alt="">
        </div>

    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <img src="./assets/icons/handshake.png" width="20" alt="">
                <h4 class="">Content Partners</h4>
                <hr style="height: 2px; background-color: #acacac; width: 50px; margin: 10px 0; " />
                <ul>
                    <li>DOST ScINet-Phil</li>
                    <li>HERDIN NeON</li>
                    <li>DOST - Biosafety Committee</li>
                    <li>Biosafety Clearing-House Of The Phils</li>
                    <li>Nat'l Co</li>
                </ul>
            </div>
            <div class="footer-col">
                <img src="./assets/icons/hiring.png" width="20" alt="">
                <h4 class="">Online Resources</h4>
                <hr style="height: 2px; background-color: #acacac; width: 50px; margin: 10px 0; " />
                <ul>
                    <li>Science Diliman</li>
                    <li>Philippine Journal Of Science</li>
                    <li>JRSCE</li>
                    <li>ILARRDEC</li>
                    <li>PIPAC</li>
                    <li>PJVAS</li>
                </ul>
            </div>
            <div class="footer-col">
                <img src="./assets/icons/globe.png" width="20" alt="">
                <h4 class="">Other Links</h4>
                <hr style="height: 2px; background-color: #acacac; width: 50px; margin: 10px 0; " />
                <ul>
                    <li>Starbooks</li>
                    <li>Dost Mosquito Ol Trap</li>
                    <li>Small Enterprises Technology Upgrading Program (setup)</li>
                    <li>Climate X.Ph</li>
                    <li>Science for International Development Conference</li>
                </ul>
            </div>
            <div class="footer-nav-container">
                <img src="./assets/icons/link.png" width="20" alt="">
                <h4 class="">Quick Links</h4>
                <hr style="height: 2px; background-color: #acacac; width: 50px; margin: 10px 0; " />
                <ul class=" footer-nav">
                    <li>
                        <a class="active" href="">Home</a>
                    </li>
                    <li class="">
                        <a href="#">Categories </a>
                    </li>
                    <li>
                        <a href="">Articles</a>
                    </li>
                    <li>
                        <a href="">About Us</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>

        </div>

    </footer>
    <div style="background-color: #414345;">
        <div class="footer-copyright">
            <p class="copyright-text"> © copyright 2023 www.science.ph. All rights reserved.</p>
            <div class="social-media">
                <img src="./assets/icons/facebook-logo-wht.png" width="24" alt="">
                <img src="./assets/icons/instagram-logo-wht.png" width="24" alt="">
                <img src="./assets/icons/youtube-logo-wht.png" width="24" alt="">
            </div>
        </div>
    </div>


    <script>

        function formatDateToWords(date) {
            const now = new Date();
            const diffInMilliseconds = now - date;
            const diffInSeconds = Math.floor(diffInMilliseconds / 1000);
            const diffInMinutes = Math.floor(diffInSeconds / 60);
            const diffInHours = Math.floor(diffInMinutes / 60);
            const diffInDays = Math.floor(diffInHours / 24);
            const diffInWeeks = Math.floor(diffInDays / 7);

            if (diffInWeeks > 0) {
                return diffInWeeks === 1 ? '1 week ago' : `${diffInWeeks} weeks ago`;
            } else if (diffInDays > 0) {
                return diffInDays === 1 ? '1 day ago' : `${diffInDays} days ago`;
            } else if (diffInHours > 0) {
                return diffInHours === 1 ? '1 hour ago' : `${diffInHours} hours ago`;
            } else if (diffInMinutes > 0) {
                return diffInMinutes === 1 ? '1 minute ago' : `${diffInMinutes} minutes ago`;
            } else {
                return 'Just now';
            }
        }

           

    </script>

    <script>
        const seeMoreLink = document.querySelector('.see-more');
        const textContainer = document.querySelector('.text-container');
        const fullText = document.querySelector('.full-text');
    
        seeMoreLink.addEventListener('click', function (event) {
            event.preventDefault();
            textContainer.classList.toggle('expanded');
        });
    </script>

</body>

</html>
