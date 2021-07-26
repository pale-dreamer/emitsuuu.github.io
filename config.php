<?php
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\


// OTHER
// Song of your choice. If you don't want it, don't add it.
$youtubeMusicLink = "https://www.youtube.com/watch?v=8nSw6DLO7lY";

// Invite Link To Your Discord + If you don't want, go to index.php and delete line 21 to line 23.
$discord = "YourDiscordLink";
$discordimg = "assets/img/Discordic.png";

// META TAG SECTION
// Name of your site.
$Title ="Sellix Template";

// Site's logo.
$favicon ="https://cdn.sellix.io/static/logo/single.png";

//Your URL
$Url = "Google.com";

// Limit of 150 words. Summarize your page's contents. Such as a description of your site.
$Description = "Sellix Template made by Qrow#3914";

// NAVBAR Section
// If you want none just don't put anything here
// These are top right and link off page. They open a new browser window. The first one is the name such as "Home" and the second one is where it will link to.
$navbar = [
    [
        "item" => "Shop Link",
        "href" => "google.com",
    ],
    [
        "item" => "Discord",
        "href" => "https://discordapp.com",
    ]
];


// Site Content
// This is the "Title" of your site. Such as a little introduction.
$STitle = "Selix Template";

// This is the Sub Title. Its a little slogan type thing under your title.
$SDesc = "The best quality accounts at the best price!";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Discord",
        "link" => "google.com",
    ],
    [
        "Txt" => "Discord",
        "link" => "google.com",
    ],
    [
        "Txt" => "Discord",
        "link" => "google.com",
    ],
];

// Feature Section

$FTitle = "Features";
$FDesc = "What you get from purchasing from us!";

// This is the features section, you can remove and add as many as you want. If you don't want any just remove everything inside.
$Features = [
    [
        "Icon" => "fas fa-users",
        "Title" => "24/7 Support",
        "Desc" => "We have a reliable Support Team that want to make sure that our clients have the best experience!",
    ],
    [
        "Icon" => "far fa-star",
        "Title" => "Very Popular",
        "Desc" => "We have a strong history of extremely satisfied clients who have come back costantly.",
    ],
    [
        "Icon" => "fas fa-dollar-sign",
        "Title" => "Cheap",
        "Desc" => "We believe in high quality at very affordable prices, making a product for all!",
    ],
    [
        "Icon" => "far fa-handshake",
        "Title" => "Reliable",
        "Desc" => "To make sure our clients are satisfied, we strive to be as reliable as possible!",
    ],
    [
        "Icon" => "fas fa-boxes",
        "Title" => "Works Everywhere",
        "Desc" => "Our products are in stock at all times meanin you can have whatever you want, whenever.",
    ],
    [
        "Icon" => "far fa-clock",
        "Title" => "Quick Delivery",
        "Desc" => "All purchases are delivered automatically at really fast speeds making sure you get the product.",
    ],
];

// Products
// Product Section Title
$PTitle = "Products";

// Product Section Description
$PDesc = "Get some juicy products and services off us!";

// The Actual Products.
// First is the Product Name. Second is the Product Description. Third is the Product ID can be found int he URL. Fourth is your product Image.
$Products = [
    [
        "Name" => "Product Title",
        "Desc" => "Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.",
        "ID" => "5eaa43398c0f2",
        "Image" => "assets/img/tenor.gif",
    ],
    [
        "Name" => "Product Title",
        "Desc" => "Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.",
        "ID" => "5eaa43398c0f2",
        "Image" => "assets/img/tenor.gif",
    ],
];

// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\

// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}