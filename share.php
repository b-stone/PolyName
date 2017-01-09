<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Generate a polynomial from your name" content="">
    <meta name="Branden Stone" content=<?php echo "\"Hello\""; ?>>


    <title>Share your Polynomial</title>

    <!-- CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- FaceBook Meta -->


    <style type="text/css">
      .fraction, .top, .bottom {
          padding: 1px;    
      }

      .fraction {
          display: inline-block;
          text-align: center;   
          vertical-align: middle; 
      }

      .bottom{
          border-top: 1px solid #000;
          display: block;
      }      
    </style>
  </head>

  <body role="document" onload="printHTML()">



  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);      
  }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.html">Personal Polynomial</a>
          <a id="social-link" class="navbar-brand" href="#">Share your Polynomial</a>    
        </div>
      </div>

    </nav>

   <!-- Content 
    <div class="container" role="main" style="padding-top: 30px; padding-bottom: 30px;">
      <div class="page-header">

          <h1 id="typed-name">
            Type your name: <input type="text" id="name-input" autofocus="autofocus" autocomplete="off"></input>
             <button id="reset" type="button" class="btn btn-lg btn-primary">Reset</button> 
             <button id="make-pdf" type="button" class="btn btn-lg btn-primary">Make PDF</button>
          </h1>
          
      </div>

      <div class="row">

        <div id="container" class="col-md-10">
          <div id="canvasElement" style="width:800px; height:400px;"></div>
        </div>

        <div class="col-md-2">
          <div id="name-table"></div>
        </div>

      </div>

      <div class="row">
        <h4 id="poly-name"></h4>
      </div>

    </div> -->

      <div class="container" role="main" style="padding-top: 30px; padding-bottom: 30px;">
      <div class="page-header">
      </div>


      <p> </p>

    <!-- Social Media -->
    <div>
    <!-- FaceBook button code -->

<div class="fb-share-button" data-href="http://b-stone.github.io/PolyName/" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fb-stone.github.io%2FPolyName%2F&amp;src=sdkpreparse">Share</a></div>


</div><!-- /.share-this -->

    <!-- Core JavaScript -->
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="./lib/jspdf.min.js"></script>      
    <script type="text/javascript" src="./lib/mathbox-bundle.min.js"></script>        
    <script type="text/javascript" src="./lib/d3.min.js"></script>
    <script type="text/javascript" src="./lib/fraction.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="./src/makepdf.js"></script>   
    <script type="text/javascript" src="./src/header.js"></script>     



    <!-- Start of StatCounter Code for Default Guide -->
    <script type="text/javascript">
    var sc_project=11001640;
    var sc_invisible=1;
    var sc_security="dfe4f2ef";
    var scJsHost = (("https:" == document.location.protocol) ?
    "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
    scJsHost+
    "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <noscript><div class="statcounter"><a title="shopify
    analytics tool" href="http://statcounter.com/shopify/"
    target="_blank"><img class="statcounter"
    src="//c.statcounter.com/11001640/0/dfe4f2ef/1/"
    alt="shopify analytics tool"></a></div></noscript>
    <!-- End of StatCounter Code for Default Guide -->

</body>
</html>


<!--
    </div>

      <p>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
      </p>
-->


