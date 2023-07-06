@extends('layouts.app')
<title>Home | GameHub</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!DOCTYPE html>
<html lang="en">

<body>

    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Game Hub</h2>
            <span class="home-subtitle">Source of your great content</span>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Catch up with the trending Games</h2>
            <p class="title-text">
                Stay up to date with the latest trending games and experience the excitement firsthand. From fast-paced
                battle royales like "Fortnite" to suspenseful social deduction games like "Among Us," there is a game
                for every gaming enthusiast.
                <br>Explore the captivating worlds of popular titles and immerse yourself in thrilling gameplay.
                Discover the latest trends in the gaming industry and join the community of avid gamers who are always
                on the lookout for the next big thing. Get ready to catch up with the trending games and embark on
                unforgettable gaming adventures.
            </p>
            <a href="#" class="btn2">Read more</a>
        </div>
        <div class="imgBx">
            <img src="../assets/images/white.png" alt="" class="fitBg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="openworld">Open World</span>
        <span class="filter-item" data-filter="racing">Racing</span>
        <span class="filter-item" data-filter="battleroyal">Battle Royal</span>
    </div>

    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box openworld">
            <img src="../assets/images/gtav1.png" alt="" class="post-img" style=" ;" >
            <h2 class="category">Open World</h2>
            <a href="#" class="post-title">Grand Theft Auto V</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North
                and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following
                2008's Grand Theft Auto IV, and the fifteenth instalment overall.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
                <!-- Post 2 -->
        <div class="post-box racing">
            <img src="../assets/images/forza.png" alt="" class="post-img">
            <h2 class="category">Racing</h2>
            <a href="#" class="post-title">Forza Horizon 5</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Forza Horizon 5 is a 2021 racing video game developed by Playground Games and published by Xbox Game Studios. It is the fifth Forza Horizon title and twelfth main instalment in the Forza series. The game is set in a fictionalised representation of Mexico.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="post-box racing">
            <img src="../assets/images/nfsheat.png" alt="" class="post-img">
            <h2 class="category">Racing</h2>
            <a href="#" class="post-title">Need for Speed Heat</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Need for Speed Heat is a 2019 racing video game developed by Ghost Games and published by Electronic Arts for PlayStation 4, Windows, and Xbox One. It is the twenty-fourth installment in the Need for Speed series and commemorates the series' 25th anniversary.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 4 -->
        <div class="post-box battleroyal">
            <img src="../assets/images/apex.png" alt="" class="post-img">
            <h2 class="category">Battle Royal</h2>
            <a href="#" class="post-title">Apex Legends</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. It was released for PlayStation 4, Windows, and Xbox One in February 2019, for Nintendo Switch in March 2021, and for PlayStation 5 and Xbox Series X/S in March 2022.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 5 -->
        <div class="post-box openworld">
            <img src="../assets/images/minecraft.png" alt="" class="post-img">
            <h2 class="category">Open World</h2>
            <a href="#" class="post-title">Minecraft</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Minecraft is a 2011 sandbox game developed by Mojang Studios. The game was created by Markus "Notch" Persson in the Java programming language.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 6 -->
        <div class="post-box battleroyal">
            <img src="../assets/images/fortnite.png" alt="" class="post-img">
            <h2 class="category">Battle Royal</h2>
            <a href="#" class="post-title">Fortnite</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Fortnite is an online video game developed by Epic Games and released in 2017. It is available in three distinct game mode versions that otherwise share the same general gameplay and game engine: Fortnite ...</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 7 -->
        <div class="post-box openworld">
            <img src="../assets/images/rdm2.png" alt="" class="post-img">
            <h2 class="category">Open World</h2>
            <a href="#" class="post-title">Red Dead Redemption 2</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and a prequel to the 2010 game Red Dead Redemption.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 1 -->
        <div class="post-box battleroyal">
            <img src="../assets/images/pubg.png" alt="" class="post-img">
            <h2 class="category">Battle Royal</h2>
            <a href="#" class="post-title">PUBG: Battlegrounds</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">PUBG: Battlegrounds is a battle royale game developed by PUBG Studios and published by Krafton. The game, which was inspired by the Japanese film Battle Royale, is based on previous mods created by Brendan "PlayerUnknown" Greene for other games, and expanded into a standalone game under Greene's creative direction.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
        <!-- Post 9 -->
        <div class="post-box racing">
            <img src="../assets/images/dirt5.png" alt="" class="post-img">
            <h2 class="category">Racing</h2>
            <a href="#" class="post-title">Dirt 5</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Dirt 5 is a simcade racing video game developed and published by Codemasters. The game was released for PlayStation 4, Windows, and Xbox One on 6 November 2020, for Xbox Series X/S on 10 November, and for PlayStation 5 on 12 November and 19 November, for Stadia on 24 March 2021, and for Luna on 15 July 2021.</p>
            <div class="profile">
                <img src="../assets/images/user.png" alt="" class="profile-img">
                <span class="profile-name">User101</span>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>We love games! Our website is all about gaming. We share battleroyal, reviews, and more. Join us and let's have fun together. Happy gaming!</p>
                <ul class="sci">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="team5.php">Contact team</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>123 Kathmandu <br> Somewhere in <br> Nepal</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:dipsu1873@gmail.com">gamehub@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="{{ asstet ('assets/js/main.js')}}"></script>
</body>
</html>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
