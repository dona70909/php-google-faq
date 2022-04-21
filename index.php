<?php

    $header_menu = [
        [
            "title" => "Overview",
            "link" => "http://localhost/php-google-faq/",
        ],

        [
            "title" => "Privacy policy",
            "link" => "http://localhost/php-google-faq/",
        ],

        [
            "title" => "Terms of service",
            "link" => "http://localhost/php-google-faq/",
        ],

        [
            "title" => "Technologies",
            "link" => "http://localhost/php-google-faq/",
        ],

        [
            "title" => "Faq",
            "link" => "http://localhost/php-google-faq/",
        ],
    ];

    $google_faqs = [
        
        [
            "question" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",

            "answer" => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.

            Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.",

        ],

        [
            "question" => "Why is my account associated with a country?",

            "answer" => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:",

            "sub-answers" => [
                [
                    "title" => "The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:",

                    "text" => [
                        "Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland",

                        "Google LLC, based in the United States, for the rest of the world",
                    ],
                ],

                [
                    "title" => "The version of the terms that govern our relationship, which can vary depending on local laws",
                ]
            ]
        ],

        [
            "question" => "How can I remove information about myself from Google’s search results?",

            "answer" => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.",

        ],

        [
            "question" => "Are my search queries sent to websites when I click on Google Search results?",

            "answer" => "In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the Referrer URL. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.",

            
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"> 

    <!-- logo -->
    <link rel="icon"  href="img/tab_logo.png">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title> Google</title>
</head> 
<body>
    <header>
        <section class="container-fluid">
            <div class="row pt-2">
                <div class="col-12">
                    <div class="d-flex align-items-center px-4">
                        <img class="logo-size me-1" src="img/google-hd-logo.png" alt="logo google">
                        <h4 class="text-capitalize text-secondary mb-0">Privacy & terms</h4>
                    </div>
                </div>
                <div class="col-12 ul-container">
                    <ul class="list-unstyled p-0 d-flex">
                        <?php foreach($header_menu as $menu_page) { ?>
                            <li class="mx-4">
                                <a class="text-decoration-none" href="<?php echo $menu_page["link"] ?>">
                                    <?php if($menu_page["title"] === "Faq") {?>
                                        <h6 class="text-uppercase mb-0"><?php echo $menu_page["title"]?></h6>
                                    <?php } else { ?>
                                        <h6 class="text-capitalize mb-0"><?php echo $menu_page["title"]?></h6>
                                    <?php } ?>          
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        
    </header>

    <main>
        <section class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <ul class="list-unstyled p-0 m-0">
                        <?php foreach($google_faqs as $faq) {?>
                            <li class="container-faq">
                                <h3 class="faq-question"> <?php echo $faq["question"] ?> </h3>
                                <p class="faq-answer">  <?php echo $faq["answer"] ?> </p>

                                <?php if( isset($faq["sub-answers"]) > 0) { ?>
                                    <ol class="sub-answers-list">
                                        <?php foreach($faq["sub-answers"] as $answer) {?>
                                            <li class="sub-answers-item mb-5">
                                                <h5 class="sub-answers-title"><?php echo $answer["title"] ?></h5>
                                                <ol class="sub-text-list" type="a">
                                                    <?php if( isset($answer["text"])) { ?>
                                                        <?php foreach($answer["text"] as $text) {?>
                                                            <li class="sub-text-item">
                                                                <?php echo $text ?>
                                                            </li>
                                                        <?php } ?> 
                                                    <?php } ?>   
                                                </ol>
                                            </li>
                                        <?php } ?>
                                    </ol>

                                <?php } ?>    
                            </li>
                        <?php } ?>
                    </ul>
                </div>    
            </div>
        </section>
    </main>
</body>
</html>