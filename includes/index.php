<?php

include("portfolio/includes/header.html");
include("portfolio/includes/navbar.html");

}else if($_GET['page'] == "About"){

include("portfolio/About.html");

}else if($_GET['page'] == "Blog"){

include("portfolio/Blog.html");

}else if($_GET['page'] == "Shop"){

include("portfolio/Shop.html");

}else if($_GET['page'] == "Contact"){

include("portfolio/Contact.html");

if($_GET['page'] == "Sketchbook"){

include("portfolio/Sketchbook.html");

}else if($_GET['page'] == "Painting&Color"){

include("portfolio/Painting&Color.html");

}else if($_GET['page'] == "CommericalArt"){

include("portfolio/CommericalArt.html");

}else if($_GET['page'] == "Music"){

include("portfolio/Music.html");

}else if($_GET['page'] == "Games"){

include("portfolio/Games.html");

}else if($_GET['page'] == "Video"){

include("portfolio/Video.html");

include("portfolio/includes/home.html");
include("portfolio/includes/footer.html");

?>
