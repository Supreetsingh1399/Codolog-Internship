<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        /* search bar */
        .search-bar-heading {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
            /* text-align: center; */
        }

        .search-bar-sub-heading {
            color: #333;
            font-size: 1rem;
            margin-bottom: 20px;
            /* text-align: center; */
        }

        #search-bar-container {
            margin: auto;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
            width: 50%;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            box-shadow: 0px 0px 10px 0px #aaa3a3;
            color: rgb(0, 0, 0);
            z-index: 1;
            position: relative;
            /* This line is added to make z-index effective */
            animation: slide-left 3s forwards;
        }

        #search-bar {
            width: 50%;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            background-color: #dbdada;
            color: rgb(0, 0, 0);
            cursor: pointer;
            margin: auto;
        }

        #search-bar:focus {
            outline: 2px solid #271f1f;
        }

        #search-button {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        #search-button:hover {
            background-color: #aaa3a3;
            color: #333;
        }

        /* video player container */
        #videoPlayerContainer {
            /* width: 50%; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: #333; */
            color: white;
            font-size: 1.1rem;
            display: none;
        }

        #nextVideo {
            background-color: #333;
            color: white;
            box-shadow: 2px 2px 2px rgb(241, 88, 88);
            font-size: 1.5rem;
            padding: 6px;
            border-radius: 10px;
            cursor: pointer;

            /* display: none; */
        }

        .video-frame {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .search-result {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        h2,
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <form id="search-bar-container" method="GET">
        <h1 class="search-bar-heading">Welcome to video-sharing</h1>
        <p class="search-bar-sub-heading">Watch and share videos with your friends and family.</p>

        <input type="text" name="searchQuery" id="search-bar" placeholder="Search for videos">
        <button id="search-button" type="submit">Search</button>
    </form>
    </div>
    <!-- <div id="videoPlayerContainer"> <button id="nextVideo" onclick="show()">Next</button></div> -->
    <?php
    require_once '../database-server/youtube_search.php';
    // search_results.php
    if (isset($_GET['searchQuery'])) {
        $searchQuery = $_GET['searchQuery'];
        $searchResults = searchYouTube($searchQuery);

        echo "<h2>Search Results for '" . htmlspecialchars($searchQuery) . "':</h2>";
        foreach ($searchResults as $searchResult) {
            echo "<div class='search-result'>";
            echo "<h3>" . htmlspecialchars($searchResult['title']) . "</h3>";
            echo "<div class='video-frame'><iframe width='560' height='315' src='https://www.youtube.com/embed/" . htmlspecialchars($searchResult['videoId']) . "' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
            echo "<p  class='video-frame'><a href='https://www.youtube.com/watch?v=" . htmlspecialchars($searchResult['videoId']) . "' target='_blank'>View Video</a></p>";
            echo "</div>";
        }
    }
    ?>
</body>

</html>