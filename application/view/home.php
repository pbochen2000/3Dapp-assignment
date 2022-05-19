<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="application/fonts/icomoon/style.css" type="text/css">
    <link rel="stylesheet" href="application/css/bootstrap-4.4.1.css" type="text/css">
    <link rel="stylesheet" href="application/css/bootstrap.min.css" type="text/css">
    <link href="application/styles/gallery.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="application/js/swap_restyle.js"></script>
    <script src="application/scripts/js/custom.js" crossorigin="anonymous"></script> 
    <script src="application/scripts/js/gallery_generator.js"></script>
    <link rel="stylesheet" href="application/css/style.css">
    <script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>    
    <script type="text/javascript">
      $("[title]").tooltip();
    </script> 
    <style type="text/css"> 
    .tooltip {
      display:none;
      background:transparent url(https://dl.dropboxusercontent.com/u/25819920/tooltip/black_arrow.png);
      font-size:12px;
      height:70px;
      width:160px;
      padding:25px;
      color:#fff;
    }
    </style> 
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/js/jquery-3.3.1.min.js"></script>
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/js/popper.min.js"></script>
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/js/bootstrap.min.js"></script>
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/js/main.js"></script>
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/scripts/js/custom.js" crossorigin="anonymous"></script> 
    <script src="https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/scripts/js/gallery_generator.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <link href='simplelightbox-master/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
    <title>CocaCola Companies®</title>

  </head>
  <?php

  ?>
  <!-- NAVIGATION BAR -->
  <body id="theme" style="background-color: #34383a;height:auto;">
      <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
      
        <header class="site-navbar site-navbar-target bg-dark" role="banner" >

          <div class="container">
            <div class="row align-items-center position-relative">

              <div class="col-lg-4">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block text-white">
                    <li class="active">
                    <li><a href="javascript:swap('coke')" class="nav-link text-white">Gallery</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-lg-4 text-center text-white">
                <div class="site-logo">
                  <!-- CONTENT SWAP TO THE LANDING PAGE-->
                  <a href="javascript:swap('home')">CocaCola</a>
                  <div style="font-size:10px;">
                    <p>Vote for the newest addition!</p>
                  </div> 
                </div>
                <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
              </div>
              <div class="col-lg-4">
                <nav class="site-navigation text-left mr-auto " role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <!-- CONTENT SWAP TO THE CONTACT PAGE-->
                    <li><a href="javascript:swap('sprite')" class="nav-link text-white">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

        </header>


      <!-- MAIN INITIAL HOME SCREEN -->
      <div id="home">
          <div class="hero" style="background-image: url('<?php echo $dataImages[0]['pathImage'] ?>');">
            <div class='container align-items-center'>
              <div id='aSide' class='container align-items-center' style="height: 600px;width: 600px;" title="<?php echo $data[0]['modelSubtitle'] ?>">
                <!-- 3D MODEL PACKAGE -->
                <model-viewer id='myViewer_home' src="<?php echo $data[0]['modelPath'] ?>" alt="<?php echo $data[0]['brand'] ?>" loading="eager" style="--poster-color:#ffffff00;" auto-rotate auto-rotate-delay=180000 camera-controls interaction-prompt="none" camera-orbit="90deg 90deg 2.5m" ar ios-src="<?php echo $data[0]['modelPath'] ?>"></model-viewer>
              </div> 
            </div>
          </div>
          <div class='text-center'>
            <!-- JAVASCRIPT MODEL SETTINGS -->
            <p>Model Settings:</p>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-dark" onclick="stopAutoRotate('home')">Stop Animation</button>
              <button type="button" class="btn btn-dark" onclick="autoRotate('home')">Auto Rotate</button>
              <button type="button" class="btn btn-dark" onclick="changeView('left','home')">Left</button>
              <button type="button" class="btn btn-dark" onclick="changeView('front','home')">Front</button>
              <button type="button" class="btn btn-dark" onclick="changeView('back','home')">Back</button>
              <button type="button" class="btn btn-dark" onclick="changeView('right','home')">Right</button>
            </div>
            <div class="btn-group" role="group">
              <a href="javascript:swap('home')"><button type="button" title="<?php echo $data[0]['modelSubtitle'] ?>" class="btn btn-warning"><?php echo $data[0]['brand'] ?></button></a>
              <a href="javascript:swap('captainapple')"><button type="button" title="<?php echo $data[1]['modelSubtitle'] ?>" class="btn btn-success"><?php echo $data[1]['brand'] ?></button></a>
              <a href="javascript:swap('popblitz')"><button type="button" title="<?php echo $data[2 ]['modelSubtitle'] ?>"class="btn btn-danger"><?php echo $data[2]['brand'] ?></button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="javascript:swap('wireframe')"><button type="button" class="btn btn-dark">Wireframe</button></a>
              <button type="button" class="btn btn-dark" onclick="labelViewer('home')">Label Viewer</button>
              <button type="button" class="btn btn-dark" onclick="scrollViewer('home')">Scroll Sensitivity</button>
            </div>
          </div>
          <p style="padding-bottom:5px; padding-top: 5px; text-align:center;"><?php echo $data[0]['modelSubtitle'] ?></p>
      </div>

      <!-- CAPTAIN APPLE BOTTLE-->
      <div id="captainapple" style="display:none;">
          <div class="hero" style="background-image: url('<?php echo $dataImages[0]['pathImage'] ?>');">
            <div class='container align-items-center'>
              <div id='aSide' class='container align-items-center' title="<?php echo $data[1]['modelSubtitle'] ?>">
                <model-viewer id='myViewer_captainapple' style="--poster-color:#ffffff00;" auto-rotate auto-rotate-delay=180000 src="<?php echo $data[1]['modelPath'] ?>" alt="<?php echo $data[1]['brand'] ?>" camera-controls ar interaction-prompt="none" ios-src="<?php echo $data[1]['modelPath'] ?>"></model-viewer>
              </div> 
            </div>
          </div>
          <div class='text-center'>
            <p>Model Settings:</p>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-dark" onclick="stopAutoRotate('captainapple')">Stop Animation</button>
              <button type="button" class="btn btn-dark" onclick="autoRotate('captainapple')">Auto Rotate</button>
              <button type="button" class="btn btn-dark" onclick="changeView('left', 'captainapple')">Left</button>
              <button type="button" class="btn btn-dark" onclick="changeView('front', 'captainapple')">Front</button>
              <button type="button" class="btn btn-dark" onclick="changeView('back', 'captainapple')">Back</button>
              <button type="button" class="btn btn-dark" onclick="changeView('right', 'captainapple')">Right</button>
            </div>
            <div class="btn-group" role="group">
              <a href="javascript:swap('home')"><button type="button" title="<?php echo $data[0]['modelSubtitle'] ?>" class="btn btn-warning"><?php echo $data[0]['brand'] ?></button></a>
              <a href="javascript:swap('captainapple')"><button type="button" title="<?php echo $data[1]['modelSubtitle'] ?>" class="btn btn-success"><?php echo $data[1]['brand'] ?></button></a>
              <a href="javascript:swap('popblitz')"><button type="button" title="<?php echo $data[2]['modelSubtitle'] ?>" class="btn btn-danger"><?php echo $data[2]['brand'] ?></button></a>
            </div>
            <div class="btn-group" role="group">
              <a href="javascript:swap('wireframe')"><button type="button" class="btn btn-dark">Wireframe</button></a>
              <button type="button" class="btn btn-dark" onclick="labelViewer('captainapple')">Label Viewer</button>
              <button type="button" class="btn btn-dark" onclick="scrollViewer('captainapple')">Scroll Sensitivity</button>
            </div>
          </div>
          <p style="padding-bottom:5px; padding-top: 5px; text-align:center;"><?php echo $data[1]['modelSubtitle'] ?></p>
      </div>

      <!-- POP BLITZ BOTTLE-->
      <div id="popblitz" style="display:none;">
          <div class="hero" style="background-image: url('<?php echo $dataImages[0]['pathImage'] ?>');">
            <div class='container align-items-center'>
              <div id='aSide' class='container align-items-center' title="<?php echo $data[2]['modelSubtitle'] ?>">
                <model-viewer id='myViewer_popblitz' style="--poster-color:#ffffff00;" auto-rotate auto-rotate-delay=180000 src="<?php echo $data[2]['modelPath'] ?>" alt="PopBlitz" camera-controls ar interaction-prompt="none" ios-src="<?php echo $data[2]['modelPath'] ?>"></model-viewer>
              </div> 
            </div>
          </div>
          <div class='text-center'>
            <p>Model Settings:</p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-dark" onclick="stopAutoRotate('popblitz')">Stop Animation</button>
              <button type="button" class="btn btn-dark" onclick="autoRotate('popblitz')">Auto Rotate</button>
              <button type="button" class="btn btn-dark" onclick="changeView('left', 'popblitz')">Left</button>
              <button type="button" class="btn btn-dark" onclick="changeView('front', 'popblitz')">Front</button>
              <button type="button" class="btn btn-dark" onclick="changeView('back', 'popblitz')">Back</button>
              <button type="button" class="btn btn-dark" onclick="changeView('right', 'popblitz')">Right</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="javascript:swap('home')"><button type="button" title="<?php echo $data[0]['modelSubtitle'] ?>" class="btn btn-warning"><?php echo $data[0]['brand'] ?></button></a>
              <a href="javascript:swap('captainapple')"><button type="button" title="<?php echo $data[1]['modelSubtitle'] ?>" class="btn btn-success"><?php echo $data[1]['brand'] ?></button></a>
              <a href="javascript:swap('popblitz')"><button type="button" title="<?php echo $data[2]['modelSubtitle'] ?>" class="btn btn-danger"><?php echo $data[2]['brand'] ?></button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="javascript:swap('wireframe')"><button type="button" class="btn btn-dark">Wireframe</button></a>
              <button type="button" class="btn btn-dark" onclick="labelViewer('popblitz')">Label Viewer</button>
              <button type="button" class="btn btn-dark" onclick="scrollViewer('popblitz')">Scroll Sensitivity</button>
            </div>
          </div>
          <p style="padding-bottom:5px; padding-top: 5px; text-align:center;"><?php echo $data[2]['modelSubtitle'] ?></p>
      </div>

      <!-- WIREFRAME TEXTURE-->
      <div id="wireframe" style="display:none;">
          <div class="hero" style="background-image: url('<?php echo $dataImages[0]['pathImage'] ?>');">
            <div class='container align-items-center'>
              <div id='aSide' class='container align-items-center'>
                <model-viewer id='myViewer_wireframe' style="--poster-color:#ffffff00;" src="application/assets/x3d/wireframe_bottle.gltf" alt="Wireframe" camera-controls interaction-prompt="none" ar ios-src="application/assets/x3d/wireframe_bottle.gltf"></model-viewer>
              </div> 
            </div>
          </div>
          <div class='text-center'>
            <p>Model Settings:</p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-dark" onclick="changeView('left', 'wireframe')">Left</button>
              <button type="button" class="btn btn-dark" onclick="changeView('front', 'wireframe')">Front</button>
              <button type="button" class="btn btn-dark" onclick="changeView('back', 'wireframe')">Back</button>
              <button type="button" class="btn btn-dark" onclick="changeView('right', 'wireframe')">Right</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="javascript:swap('home')"><button type="button" title="<?php echo $data[0]['modelSubtitle'] ?>"class="btn btn-warning"><?php echo $data[0]['brand'] ?></button></a>
              <a href="javascript:swap('captainapple')"><button type="button" title="<?php echo $data[1]['modelSubtitle'] ?>" class="btn btn-success"><?php echo $data[1]['brand'] ?></button></a>
              <a href="javascript:swap('popblitz')"><button type="button" title="<?php echo $data[2]['modelSubtitle'] ?>" class="btn btn-danger"><?php echo $data[2]['brand'] ?></button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-dark">Wireframe</button>
            </div>
          </div>
      </div>

      <!-- GALLERY-->
      <div id="coke" style="display:none;">
        <h1 style='text-align:center; padding-top:20px;'>Render Gallery</h1>
        <div class='container' style="padding-top:20px; padding-bottom:20px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!-- GALLERY INDICATORS BASED ON BOOTSTRAP CAROUSEL-->
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <!-- GALLERY SLIDESHOW-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo $dataImages[5]['pathImage'] ?>">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo $dataImages[6]['pathImage'] ?>">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo $dataImages[7]['pathImage'] ?>">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="application/images/gallery/image1.jpeg">
            </div>
          </div>
          <!-- GALLERY CONTROLS-->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- EXTRA WORK SECTION (JSON)-->
        <div class="container p-4 bg-dark text-center text-lg-start">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Extra Work</h5>
              <p id='extra-work' class='text-light'></p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <p id='extra-work2' class='text-light'></p>
            </div>
          </div>
        </div>
          <div id='extra-work' style="font-size: 16px; color:white;"></div>
          <!-- JQUERY getJSON METHOD TO POPULATE TEXT--> 
          <script>
            $.getJSON('https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/jsonData.php', function(data){
                var output= "<p style='font-size: 16px; color:black;'>" + data.descriptions[1].extraWork0 + "<br>" + data.descriptions[1].extraWork1 + "<br>" + data.descriptions[1].extraWork2 + "<br>" + data.descriptions[1].extraWork3 + "</p>"
                var output2 = "<p style='font-size: 16px; color:black;'>" + data.descriptions[1].extraWork4 + "<br>" + data.descriptions[1].extraWork5 +  "<br>" + data.descriptions[1].extraWork6 + "</p>"
                  
              $('#extra-work').html(output);
              $('#extra-work2').html(output2);
              });
          </script>
        </div>
      </div>
      <!-- CANDIDATE NUMBER-->
      <div id="sprite" style="display:none;"><p style="text-align:center;">Candidate Number: 215892</div>

      <!-- BRANDS INFORMATION AND VOTING SECTION (JSON, SQLITE, AJAX, JAVASCRIPT)-->
      <div id='boxes' class='container-fluid'>
        <div id='boxes'class="row text-center">
          <div class="col-sm-4" style="height: auto;padding-top:20px;padding-bottom:20px;background-image: url('<?php echo $dataImages[1]['pathImage'] ?>');">
            <h1 style='font-family: "Bebas"; font-size: 40px;'><?php echo $data[0]['brand'] ?></h1>
            <div id='pop-blitz-text' style="font-size: 16px; color:black;"></div>
            <!-- POP BLITZ TEXT-->
            <script>
              $.getJSON('https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/jsonData.php', function(data){
                var output= "<p style='font-size: 16px; color:black;'>" + data.descriptions[0].popBlitz + "</p>"

              $('#pop-blitz-text').html(output);
              });
            </script> 
            <!-- POP BLITZ VOTE BUTTON-->
            <p style="font-size: 16px; color:black;">Click To Vote:</p>
            <button class="button-80" role="button" onclick="countUp('popblitz')">Vote</button>   
            <div id="result-votes-pop"><?php echo $dataVotes[0]['votes'] ?></div>
          </div>
          <div class="col-sm-4" style="height: auto;padding-top:20px;padding-bottom:20px;background-image: url('<?php echo $dataImages[2]['pathImage'] ?>');">
            <h1 style='font-family: "OldLondon"; font-size: 40px;'><?php echo $data[1]['brand'] ?></h1>
            <div id='captain-apple-text' style="font-size: 16px; color:black;"></div>
            <!-- CAPTAIN APPLE TEXT-->
            <script>
              $.getJSON('https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/jsonData.php', function(data){
                var output= "<p style='font-size: 16px; color:black;'>" + data.descriptions[0].captainApple + "</p>"
              
              $('#captain-apple-text').html(output);
              });
            </script>
            <!-- CAPTAIN APPLE VOTE BUTTON-->
            <p style="font-size: 16px; color:black;">Click To Vote:</p>
            <button class="button-80" role="button" onclick="countUp('captainapple')">Vote</button>
            <div id="result-votes-captain"><?php echo $dataVotes[1]['votes'] ?></div>
          </div>
          <div class="col-sm-4 bg-light" style="height: auto;padding-top:20px;padding-bottom:20px;background-image: url('<?php echo $dataImages[3]['pathImage'] ?>');">
            <h1 style='font-family: "Emogine"; font-size: 40px;'><?php echo $data[2]['brand'] ?></h1>
            <div id='grape-blast-text' style="font-size: 16px; color:black;"></div>
            <!-- GRAPE BLAST TEXT-->
            <script>
              $.getJSON('https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/jsonData.php', function(data){
                var output= "<p style='font-size: 16px; color:black;'>" + data.descriptions[0].grapeBlast + "</p>"
              
              console.log(output)
              $('#grape-blast-text').html(output);
              });
            </script>
            <!-- GRAPE BLAST VOTE BUTTON-->
            <p style="font-size: 16px; color:black;">Click To Vote:</p>
            <button class="button-80" role="button" onclick="countUp('grapeblast')">Vote</button>
            <div id="result-votes-grape"><?php echo $dataVotes[2]['votes'] ?></div>
          </div>
        </div>
      </div>
  </body>

  <!-- FOOTER -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Choose Your Drink</h5>
          <p>
            CocaCola are doing a survey to determine the newest addition to their collection of 
            top quality soft drinks. However, these arent just any drinks, they are high quality 
            top of the range drinks, in an all new metallic bottle. Try if for yourself soon!
          </p>
        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>
          <p>
            Have the next ground-breaking drink idea? Don't hesistate to get in contact with us, 
            we'll make sure to listen. You can hit us up on our social media outlets and someone
            will be in contact with you!
          </p>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <!-- NECESSARY LINKS -->
      <a class="text-light" href="https://github.com/pbochen2000/3Dapp-assignment">GitHub Repository</a>
      <a class="text-light" href="application/assets/StatementOfOriginality.pdf">Statement of Originality</a>
      <a class="text-light" href="application/assets/References.pdf">References</a>
    </div>
  </footer>
</html>