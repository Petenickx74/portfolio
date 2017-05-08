<?php
include("portfolio/includes/home.html");
include("portfolio/includes/header.html");
}else if($_GET['page'] == "About"){
include("portfolio/includes/About.html");
}else if($_GET['page'] == "Blog"){
include("portfolio/includes/Blog.html");
}else if($_GET['page'] == "Shop"){
include("portfolio/includes/Shop.html");
}else if($_GET['page'] == "Contact"){
include("portfolio/includes/Contact.html");
if($_GET['page'] == "Sketchbook"){
include("portfolio/includes/Sketchbook.html");
}else if($_GET['page'] == "Painting&Color"){
include("portfolio/includes/Painting&Color.html");
}else if($_GET['page'] == "CommericalArt"){
include("portfolio/includes/CommericalArt.html");
}else if($_GET['page'] == "Music"){
include("portfolio/includes/Music.html");
}else if($_GET['page'] == "Games"){
include("portfolio/includes/Games.html");
}else if($_GET['page'] == "Video"){
include("portfolio/includes/Video.html");
?>
