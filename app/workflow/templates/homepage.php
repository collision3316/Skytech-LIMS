<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - WORKFLOW</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
</head>
<body>
    <?php include "templates/include/header.html"?>
    <br><br><br><br><br>
    <div class="w3-bar">
    <a href="../dashboard.php" class="w3-button" style="background-color:#df1c08;color:#000000;font-weight:bold;">DASHBOARD</a><a href="admin.php" class="w3-button" style="background-color:#000000;color:#df1c08;font-weight:bold;">ADD</a><h1>Protocols & Procedures</h1>
    </div>
    <ul id="headlines">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

<?php } ?>

      </ul>

      <p class="w3-button" style="background-color:#000000;color:#df1c08;"><a href="./?action=archive">View More</a></p>

<?php include "templates/include/footer.html" ?>
