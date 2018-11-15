<?php

    if (isset($_GET["term"])){
        $term = $_GET["term"];
    } else {
        exit("You must enter a search term");
    }

    // if (isset($_GET["type"])){
    //     $type = $_GET["type"];
    // } else {
    //     $type = "sites";
    // }

    $type = isset($_GET["type"]) ? $_GET["type"] : "sites";
    
?>
<!DOCTYPE html>
<html>
	<title>Welcome to Doodle</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<head>
<body>

	<div class="wrapper">

        <div class="header">

            <div class="headerContent">

                <div class="logoContainer">
                    <a href="index.php">
                        <img src="assets/images/doodleLogo.png">
                    </a>
                </div>

                <div class="searchContainer">

                    <form action="search.php" method="GET">

                        <div class="searchBarContainer">

                            <input class="searchBox" type="text" name="term">
                            <button class="searchButton">
                                <img src="assets/images/icons/search.png" alt="">
                            </button>

                        </div>
                        
                    </form>
                
                </div>

            </div>

            <div class="tabsContainer">

                <ul class="tabList">
                    
                    <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>

                    <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                            Images
                        </a>
                    </li>

                </ul>

            </div>

        </div>  

	</div>

</body>
</html>