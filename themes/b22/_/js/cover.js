/*!
 * Change background image on hover
 */


<script src="<?php bloginfo('template_directory') ?>/_/js/cover.js"></script>


$("#first").hover(function () {

    $("body").css("background-image", 'url("http://static.bbc.co.uk/solarsystem/img/ic/640/collections/space_exploration/space_exploration_large.jpg")');

});

$("#second").hover(function () {

    $("body").css("background-image", 'url("http://i.telegraph.co.uk/multimedia/archive/02179/Milky-Way_2179177b.jpg")');

});

$("#third").hover(function () {

    $("body").css("background-image", 'url("http://www.thatsreallypossible.com/wp-content/uploads/2012/12/Space-Colonialisation.jpg")');

});