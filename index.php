<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f0f0f0;
}

.container {
    width: 80%;
    margin: 0 auto;
    max-width: 1200px;
    padding: 20px;
}

header {
    background-color:darkblue;
    color: #fff;
    padding: 15px 0;
    position: relative;
    width: 100%;
    z-index: 1000;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 1.8rem;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center; /* Align items vertically */
}

nav ul li {
    margin-left: 20px;
    position: relative;
}

nav ul li a,
nav ul li .btn {
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    background: none; /* Remove background for buttons to keep them in line with links */
    border: none; /* Remove border for buttons */
    padding: 0; /* Remove padding for buttons */
}

nav ul li a:hover,
nav ul li .btn:hover {
    text-decoration: underline;
}

.btn {
    width: 80px;
    height: 40px;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn.login-btn {
    background-color: teal ; /* Custom color for login button */
}

.btn.signup-btn {
    background-color: #28a745; /* Custom color for signup button */
}

.btn:hover {
    background-color: #555; /* General hover color */
}

.btn.login-btn:hover {
    background-color: #0056b3; /* Hover color for login button */
}

.btn.signup-btn:hover {
    background-color: #218838; /* Hover color for signup button */
}


.hero {
    height: 100vh;
    background-image: url("https://cdn.eyeem.com/thumb/2165a9b471f6db96687e31c998e4a47f8b52615f-1596007283101/1100/1280?watermark=false");
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
}

.hero-content {
    max-width: 100%
}

.hero h2 {
    width: 100%;
    font-size: 3.5rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.5rem;
    margin-bottom: 40px;
}

.featured, .artists, .about, .contact {
    padding: 100px 0;
}

.featured, .artists {
    background-color: #dd56f70f;
}

.featured h2, .artists h2, .about h2, .contact h2 {
    font-family: fantasy;
    font-size: xxx-large;
    text-align: center;
    margin-bottom: 70px;
}

.music-list, .artist-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
}

.music-item, .artist-item {
    width: calc(40% - 20px);
    margin: 25px;
    padding: 30px;
    background-color: #af7a7a40;
    box-shadow: 7px 8px 7px 2px rgb(53 38 155 / 32%);
    transition: all 0.3s ease;

}

.music-item:hover, .artist-item:hover {
    transform: translateY(-5px);
}

.music-item img, .artist-item img {
    width: 100%;
    max-width: 100%;
    height: auto;
    display: block;
    margin-bottom: 10px;
}

.music-item h3, .artist-item h3 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.music-item p, .artist-item p {
    font-size: 1.2rem;
    color: #212529de;
    margin-bottom: 0;
}

.featured > .container >.music-list{
    display: grid;
    grid-template-columns: 27rem 27rem 27rem;
    grid-template-rows: 15 80px;
    column-gap: 1rem;
    row-gap: 15px;
}

.featured > .container >.music-list > .music-item{
    display: flex;
    flex-direction: row;
    width:100%;
    gap: 18px;
}

.featured > .container >.music-list > .music-item > img{
width: 30%;
max-width: 100%;
height: auto;
}

.featured > .container >.music-list > .music-item > h5{
margin-top: 20px;
}

.featured > .container >.music-list > .music-item > span{
    content: "";
    position: absolute;
    margin-top: 60px;
    margin-left: 147px;
}

.about {
    background-color: #f0f0f0;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url("https://cdn.eyeem.com/thumb/29addb048f02d2b2e79dc2dbdae458a4316dd516-1645259538517/1100/1280?watermark=false");
}

.about p {
    font-size: 1.7rem;
    line-height: 2.2;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-style: italic;
}

.contact {
    background-color:#b7f8591f;
    text-align: center;
    margin: 0;
    background-repeat: no-repeat;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    /* background-image: url("https://images3.alphacoders.com/104/1044851.jpg"); */
    /* background-image: url("https://cdn.eyeem.com/thumb/fab5e7401eac04bc094d2c0af33fb30305604497-1542641749451/1100/1280?watermark=false"); */
}

.contact form {
    max-width: 600px;
    margin: -5px auto;
    padding: 60px;
    background-color:#7fdc651f;
    box-shadow: 3px 3px 20px 0px rgb(33 37 41 / 27%);
}

.contact form label {
    display: block;
    font-size: x-large;
    margin-bottom: 20px;
    font-style: italic;
}

.contact form input[type="text"],
.contact form input[type="email"],
.contact form textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    font-size: 1rem;
}

.contact form textarea {
    resize: vertical;
}

.contact form button {
    background-color: #76a32ab8;
    color: #fff;
    border: none;
    font-style: italic;
    padding: 16px 30px;
    font-size: 1.4rem;
    cursor: pointer;
}

.contact form button:hover {
    background-color: teal;
}

footer {
    background-color: darkblue;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: absolute;
    /* bottom: 0; */
    width: 100%;
    z-index: 1000;
}

    </style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
<header>
    <div class="container">
        <h1>Melon</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#featured">Featured</a></li>
                <li><a href="#artists">Artists</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="album.php">Album</a></li>
                <!-- Add Login and Signup buttons here -->
                <li><button class="btn login-btn" onclick="location.href='login.php'">Login</button></li>
                <li><button class="btn signup-btn" onclick="location.href='signup.php'">Sign up</button></li>
            </ul>
        </nav>
    </div>
</header>


    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Welcome to Music World</h2>
                <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Your ultimate destination for music enthusiasts.</p>
            </div>
        </div>
    </section>

    <section id="artists" class="artists">
        <div class="container">
            <h2>Artist Name</h2>
            <div class="artist-list">
                <div class="artist-item">
                    <img src="https://rollingstoneindia.com/wp-content/uploads/2024/04/Arijit-Singh-live.jpeg" alt="Artist 1">
                    <h3>Arijit Singh</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Tum Hi Ho</h6>
                        <audio class="audio-player" controls>
                            <source src="res/arijit-singh-singing-tum-hi-ho-song-live-arijitsingh-tumhiho-shorts-short-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Pop </p>
                </div>
                <div class="artist-item">
                    <img src="https://images.hindustantimes.com/img/2021/09/20/1600x900/diljit_dosanjh_1632123634899_1632123635037.jpg" alt="Artist 1">
                    <h3>Diljit Dosanjh</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Hass Hass</h6>
                        <audio class="audio-player" controls>
                            <source src="res/hass-hass-dance-cover-trending-punjabi-song-diljit-dosanjh-sia-bhangradc-itspreeti8507-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Pop, Rock</p>
                </div>
                <div class="artist-item">
                    <img src="https://people.com/thmb/j8xdNtAJKfU165gUixhHa4Ncw4Y=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x0:1001x2)/charlie-puth-1-2000-bc08b8b77cff429ca88e8b24f312f012.jpg" alt="Artist 2">
                    <h3>Charlie Puth</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Attention</h6>
                        <audio class="audio-player" controls>
                            <source src="res/charlie-puth-attention-english-songs-4k-video-status-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Pop, Jazz</p> 
                </div>
                <div class="artist-item">
                    <img src="https://4kwallpapers.com/images/wallpapers/lisa-blackpink-thai-singer-asian-girl-k-pop-singer-2560x1440-3232.jpg" alt="Artist 1">
                    <h3>Lisa Manobal</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Rockstar</h6>
                        <audio class="audio-player" controls>
                            <source src="res/mirrored-lisa-rockstar-mv-version-lisa-blackpink-rockstar-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Kpop, Rock</p>
                </div>
                <div class="artist-item">
                    <img src="https://www.sheknows.com/wp-content/uploads/2023/07/GettyImages-1527016310.jpg?w=3000" alt="Artist 1">
                    <h3>Taylor Swift</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Enchanted</h6>
                        <audio class="audio-player" controls>
                            <source src="res/taylor-swift-enchanted-the-eras-tour-taylorswift-enchanted-theerastour-shortvideo-viral-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Pop, Rock</p>
                </div>
                <div class="artist-item">
                    <img src="https://mytoastlife.com/wp-content/uploads/2022/10/selena-gomez-singing-stage.jpg" alt="Artist 1">
                    <h3>Selena Gomez</h3>
                    <h6 class="card-subtitle mb-2 text-muted">People You Know</h6>
                        <audio class="audio-player" controls>
                            <source src="res/selena-gomez-people-you-know-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    <p>Genre: Pop, Rock</p>
                </div>
                <!-- Add more artist items as needed -->
            </div>
        </div>
    </section>

    <section id="featured" class="featured">
        <div class="container">
            <h2>Trending Song</h2>
            <div class="music-list">
                <div class="music-item">
                    <img src="https://is1-ssl.mzstatic.com/image/thumb/Music112/v4/29/c9/9c/29c99cc2-e94d-7faf-32d9-f14383095218/840123911476.png/1200x1200bb.jpg" alt="Music 1"><br>
                    <audio class="gaz" src="res/egiye-de-shudhu-tomari-jonyo-movie-song-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>Egiya De</h5>
                    <span><p>Arijit Singh</p></span>
                </div>
                <div class="music-item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2730c471c36970b9406233842a5" alt="Music 2"><br>
                    <audio class="gaz" src="res/sza-kill-bill-lyrics-i-might-kill-my-ex-not-the-best-idea-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>Kill Bill</h5>
                    <span><p>SZA</p></span>
                </div>
                <div class="music-item">
                    <img src="https://i.scdn.co/image/ab6761610000e5eb8e7d00d3aae87cf8fc6946e2" alt="Music 2"><br>
                    <audio class="gaz" src="res/bts-winter-bear-v-lyrics-whatsapp-status-winterbear-btsv-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>Winter Bare</h5>
                    <span><p>V (BTS)</p></span>
                </div>
                <div class="music-item">
                    <img src="https://i.scdn.co/image/ab67616d00001e029508fb7ca2eedc0d98b9139f" alt="Music 2"><br>
                    <audio class="gaz" src="res/twice-mina-7-rings-cover-watched-it-so-many-times-that-i-need-to-do-a-dance-video-shorts-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>7 Rings</h5>
                    <span><p>Ariana Grande</p></span>
                </div>
                <div class="music-item">
                    <img src="https://i.scdn.co/image/ab6761610000e5ebd95cf4457fac4cc62311f84f" alt="Music 2"><br>
                    <audio class="gaz" src="res/jennie-you-me-dance-performance-video-highlight-clip-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>You & Me</h5>
                    <span><p>Kim Jennie</p></span>
                </div>
                <div class="music-item">
                    <img src="https://i.scdn.co/image/ab67616d00001e021a8c4618eda885a406958dd0" alt="Music 2"><br>
                    <audio class="gaz" src="res/one-love-shubh-lyrics-shorts-punjabisong-lyrics-128-ytshorts.savetube.me.mp3"></audio>
                    <i class='bx bx-play-circle playButton' style="cursor: pointer;"></i>
                    <h3>One Love</h5>
                    <span><p>Shubh</p></span>
                </div>
                <!-- Add more music items as needed -->
            </div>
        </div>
        <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.playButton').forEach(function(button) {
            button.addEventListener('click', function() {
                var audio = this.previousElementSibling; // Assuming the audio element is immediately before the play button
                if (audio.paused) {
                    audio.play();
                } else {
                    audio.pause();
                }
            });
        });
    });
    </script>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2 style="color: white;">About Us</h2>
            <p style="color: white;">Welcome to Music World, your ultimate destination for all things music. Discover new tracks, explore diverse genres, and stay updated with the latest in the music industry. From exclusive artist interviews to curated playlists and concert reviews, Music World brings you closer to the heartbeat of music culture. Join our vibrant community of music lovers and let's journey together through the melodies that shape our world.</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Music World. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
