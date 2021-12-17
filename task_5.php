<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание 5
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    
                    <?php 
                        $authors = [
                            [
                                "name" => "Sunny A. (UI/UX Expert)",
                                "role" => "Lead Author",
                                "twitter" => "https://twitter.com/@myplaneticket",
                                "twitter_text" => "@myplaneticket",
                                "bootstrap" => "https://wrapbootstrap.com/user/myorange",
                                "bootstrap_text" => "Contact Sunny",
                                "bootstrap_icon" => '<i class="fal fa-envelope"></i>',
                                "image_source" => "img/demo/authors/sunny.png",
                                "image_alt" => "Sunny A."
                            ],

                            [
                                
                                "name" => "Jos K. (ASP.NET Developer)",
                                "role" => "Partner &amp; Contributor",
                                "twitter" => "https://twitter.com/@atlantez",
                                "twitter_text" => "@atlantez",
                                "bootstrap" => "https://wrapbootstrap.com/user/Walapa",
                                "bootstrap_text" => "Contact Jos",
                                "bootstrap_icon" => '<i class="fal fa-envelope"></i>',
                                "image_source" => "img/demo/authors/josh.png",
                                "image_alt" => "Jos K.",
                            ],

                            [
                                "name" => "Jovanni L. (PHP Developer)",
                                "role" => "Partner &amp; Contributor",
                                "twitter" => "https://twitter.com/@lodev09",
                                "twitter_text" => "@lodev09",
                                "bootstrap" => "https://wrapbootstrap.com/user/lodev09",
                                "bootstrap_text" => "Contact Jovanni",
                                "bootstrap_icon" => '<i class="fal fa-envelope"></i>',
                                "image_source" => "img/demo/authors/jovanni.png",
                                "image_alt" => "Jovanni L.",                            ],

                            [
                                
                                "name" => "Roberto R. (Rails Developer)",
                                "role" => "Partner &amp; Contributor",
                                "twitter" => "https://twitter.com/@sildur",
                                "twitter_text" => "@sildur",
                                "bootstrap" => "https://wrapbootstrap.com/user/sildur",
                                "bootstrap_text" => "Contact Roberto",
                                "bootstrap_icon" => '<i class="fal fa-envelope"></i>',
                                "image_source" => "img/demo/authors/roberto.png",
                                "image_alt" => "Roberto R.",
                            ],
                            
                        ]
                    ;?>

                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                                <?php foreach($authors as $author): ?>
                                    <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo $author["image_source"] ;?>" 
                                        alt="<?php echo $author["image_alt"] ;?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                            <?php echo $author["name"] ;?>
                                                <small class="m-0 fw-300">
                                                    <?php echo $author["role"] ;?>
                                                </small>
                                            </h5>
                                            <a href="https://twitter.com/<?php echo $author["twitter"] ;?>" 
                                                class="text-info fs-sm" 
                                                target="_blank"><?php echo $author["twitter_text"] ;?>
                                            </a> -
                                            <a href="https://wrapbootstrap.com/user/<?php echo $author["bootstrap"] ;?>" 
                                                class="text-info fs-sm" target="_blank" 
                                                title="<?php echo $author["bootstrap_text"] ;?>"><?php echo $author["bootstrap_icon"] ;?></a>
                                        </div>
                                    </div>
                                <?php endforeach ;?>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
