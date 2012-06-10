<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cyan Something</title>
  <meta name="author" content="Matthew Born">
  <meta name="description" content="Brevity is the soul of wit. Less is more.">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width">
  <link rel="stylesheet" href="something.css">
  <script src="//use.typekit.com/xic7sdm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div id="page">
    <header role="banner">
      <h1>Cyan</h1>
    </header>
    <article role="main">
      <?php include 'markdown.php'; echo Markdown(file_get_contents('something.md')); ?>
    </article>
    <footer role="contentinfo">
      <p>Made in Chicago by Matthew Born. <span>✶ ✶ ✶ ✶</span></p>
    </footer>
  </div><!-- #page -->
</body>
</html>