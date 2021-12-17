<?php 
  include "connect_db.php";

  $sql = "SELECT * FROM task_8 WHERE id=:id";

  $statement = $pdo->prepare($sql);
  $statement->execute($_GET);
  $user = $statement->fetch(PDO::FETCH_ASSOC);

;?>


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
                            Edit
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h1>Edit user</h5>
                            <form action="./task_8_update.php" method="post">
                              
                              <ul class="list-unstyled">
                                <input type="hidden" name="id" value="<?php echo $user["id"] ;?>">

                                <li class="mb-2">
                                  <label for="First Name">First Name:</label>
                                  <input type="text" name="firstname" id="First Name" value="<?php echo $user["First_name"] ;?>">
                                </li>
                                <li class="mb-2">
                                  <label for="Last Name">Last Name:</label>
                                  <input type="text" name="lastname" id="Last Name" value="<?php echo $user["Last_name"] ;?>">
                                </li>
                                <li class="mb-2">
                                  <label for="Username">Username:</label>
                                  <input type="text" name="Username" id="Username" value="<?php echo $user["User_name"] ;?>">
                                </li>
                                <li>
                                  <button type="submit" class="btn btn-success">Confirm</button>
                                </li>
                              </ul>
                            </form>
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