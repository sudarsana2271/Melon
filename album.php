<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Search</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        
        body{
            background-color: #d0b5e991;
        }

        .card {
            margin-bottom: 20px;
        }
        .card img {
            width: 100%;
            height: 20rem;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .boxicon{
            content: "";
            position: absolute;
            right: 20px;
            float:inline-start;
        }
        .card-deck .card {
            min-width: 200px;
            max-width: 300px;
        }
        .audio-player {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Music Search</a>
        <div class="collapse navbar-collapse">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" id="searchBox" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="searchButton">Search</button>
            </form>
            <div class="boxicon"><a href="index.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAAvlJREFUaEPtmduLTVEcxz9fSojyptwi5AUjyi1SKJcknpRMFA/4A5CJUpPLP2AeUC6jvJFkeKBIiryMvPAycgt5UCQpfvaa9qk1xz5n77X3OkdTs9/W2b/LZ/9+a+/vWuuIYXhpGDIzAu13zczmS3rRik5Gr7SZLQD6gKnAO2BTbPio0GY2A3gKTPYq/AlYLOlDrKpHgzazScAzYHYG3EtguaSvMcCjQJvZWOABsLQJlOvAGkk/q4JXhjaz0cAtYGMBmDtJN7ZI+l3AtqFJDOgrwK4AiF5JnQH2/5hWgjazbqCrBEB3Uu1jJfwGXUpDm9le4HzZxMnncJ+kC2X8S0Gb2VbgOjCqTNLU5w+wXdLN0BjB0Ga2CrgHjAlNlmH/C1gn6VFIrCBoJ83AY2BiSJIc22/AyhDVLAzdQO1isQepZiHoHLWLBV5YNXOhC6pdLPBCqtkUOlDtYoHnqmYedKjaxQJvqpoNoSuoXSzwhqqZCR1B7WKBZ6rmP9CR1C4WdKZqDoFOP21vgQmxskaI8x2Y7m8g6qGXpLuPCLmihuiQ9LwWMWt69AMLA1K+BmYG2A8AswLs+yUt8u0bvYjLgHGe4RFggze+D1xNtle3JX00s/fAlAIgryTNM7NpabydwFrP7y5w2hv/kOQEZ8iVq4jO2swuArs9zy5JJ2tjM9sBXCsAvV6SWyEOXmZ2Ajju+V2StCcvTllot6ueK+mLB3Ao6c6ZJgk7JfV69q7abr0xvl3QLk9f0rrNPqSZubHrQIf3u9ulH5b0pM72YbIuX133kC2tdC3XKUlH89pZf9/MeoD9GX5tgXZ5g8DN7JzbHzZ40LZBD06VdKPa8OjLzOYAl4EVTTrTVugah1tWus+hg/+cnum5F87N9fr5m8X+X6BDp3e9/Qh0vbhUrWgj/5FKD8tKnwUOtGpOeHF7JB3My1N07bEtPbvLi1f1vjvbu5EXpBB0uiJz/6e4dXBhn7zk3n1LVpEDkt4U8WkFQJG8lWxGoCuVL8D5LwooFT2ov7YTAAAAAElFTkSuQmCC"/></a></div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container">
        <div class="row" id="songs">
            <!-- Sample music cards -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://rollingstoneindia.com/wp-content/uploads/2024/04/Arijit-Singh-live.jpeg" alt="Sample Music 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Arijit Singh</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tum Hi Ho</h6>
                        <audio class="audio-player" controls>
                            <source src="res/arijit-singh-singing-tum-hi-ho-song-live-arijitsingh-tumhiho-shorts-short-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://a10.gaanacdn.com/gn_img/albums/ZaP37RKDy7/aP37wkkB3D/size_m.webp" alt="Sample Music 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Arko</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tomake Male</h6>
                        <audio class="audio-player" controls>
                            <source src="res/tomake-chuye-dilam-male-version-ytshorts-arjitsingh-tomakechuyedilam-bastushaap-amaramuzik-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://assets.telegraphindia.com/telegraph/2021/Dec/1639554891_3-1.jpg" alt="Sample Music 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Shreya Ghoshal</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sawaar Loon</h6>
                        <audio class="audio-player" controls>
                            <source src="res/a-must-have-experience-if-you-visit-jaipur-jaipur-rajasthan-explorepage-explore-128-ytshorts.savetube.me.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Your script -->
    <script>
        const searchButton = document.getElementById('searchButton');
        const searchBox = document.getElementById('searchBox');

        const searchMusic = () => {
            let term = searchBox.value;

            if (!term || term.trim() === '') {
                alert('Please enter a search term.');
                return;
            }

            const url = `https://v1.nocodeapi.com/aryan00123/spotify/IXSjgEZwtWTVELGf/search?q=${encodeURIComponent(term)}&type=album,track`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const songsContainer = document.getElementById('songs');
                    songsContainer.innerHTML = ''; // Clear previous results
                    
                    const tracks = data.tracks.items;
                    
                    // Display tracks with audio preview
                    tracks.forEach(track => {
                        const col = document.createElement('div');
                        col.className = 'col-md-4';

                        const card = document.createElement('div');
                        card.className = 'card';

                        const img = document.createElement('img');
                        img.src = track.album.images[0].url;
                        img.alt = track.name;
                        img.className = 'card-img-top';

                        const cardBody = document.createElement('div');
                        cardBody.className = 'card-body';

                        const artistName = document.createElement('h5');
                        artistName.className = 'card-title';
                        artistName.innerText = track.artists[0].name;

                        const trackName = document.createElement('h6');
                        trackName.className = 'card-subtitle mb-2 text-muted';
                        trackName.innerText = track.name;

                        const audio = document.createElement('audio');
                        audio.className = 'audio-player';
                        audio.controls = true;

                        const audioSource = document.createElement('source');
                        audioSource.src = track.preview_url;
                        audioSource.type = 'audio/mpeg';

                        audio.appendChild(audioSource);

                        cardBody.appendChild(artistName);
                        cardBody.appendChild(trackName);
                        cardBody.appendChild(audio);

                        card.appendChild(img);
                        card.appendChild(cardBody);

                        col.appendChild(card);
                        songsContainer.appendChild(col);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        };

        searchButton.addEventListener('click', searchMusic);
        searchBox.addEventListener('keydown', event => {
            if (event.key === 'Enter') {
                searchMusic();
            }
        });
    </script>
</body>
</html>