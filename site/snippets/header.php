<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="<?php echo url("assets/images/favicon.ico") ?>" type="image/x-icon" />
  
  <script type="text/javascript" src="//use.typekit.net/duw2pgr.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
  
  <script type="text/javascript">
    $('document').ready(function(){
        $('img').each(function(){
          $(this).removeAttr('title');
        });
    });

	  //google analytics
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29006320-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
  </script>

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>