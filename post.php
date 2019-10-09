<!DOCTYPE html>
    <head>
        <title>Welcome Victoria's Blog</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {

                $postDetails = array('title' => 'Animal: Fox', 
                                        'date' => '10/05/2019',
                                        'author' => 'Victoria Bowie',
                                        'content' => '<p> Diet: Foxes are omnivores. This means that they eat meat and vegetation.</p>
                                            <p> Offspring: Fox babies are called pups.</p>'
                                        );
                    return $postDetails;
                }
                

                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
            <div class="post-date"><?php echo $postDetails["date"]; ?></div>
            <div class="post-content"><?php echo $postDetails["content"]; ?></div>
            <div class="post-author"><?php echo $postDetails["author"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>