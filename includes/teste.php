<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dash, responsive bootstrap dashboard navbar">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, dashboard, bootstrap, front-end, frontend, web development, normal, navbar">
    <meta name="author" content="CodBits">

    <title>Dash &middot; Responsive Bootstrap Dashboard Hidden Overlay Navbar</title>

    <!-- Bootstrap core and other CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/dash.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elemdnts and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/favicon.ico">
  </head>

  <body>
    <!-- Dash Navbar Top 
    Available versions: dnl-visible, dnl-hidden -->
    <nav class="navbar navbar-static-top dash-navbar-top dnl-hidden">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dnt-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-ellipsis-v"></span>
          </button>
          <button class="dnl-btn-toggle">
            <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
          </button>
          <a class="navbar-brand" href="#">DASH <span>beta</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="dnt-collapse">
          <!-- This dropdown is for avatar -->
          <ul class="nav navbar-nav navbar-right navbar-avatar">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="img/avatar.jpg" class="dnt-avatar" alt="Reardestani avatar"></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Standard <span>go pro</span></a></li>
                <li><a href="#">Upload</a></li>
                <li class="active"><a href="#">Active link</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right dnt-navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn"><span class="fa fa-search"></span></button>
          </form>  
          <!-- This dropdown is for normal links -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Link 1 <span>LOL</span></a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
              </ul>
            </li>
          </ul>        
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav> <!-- /.navbar -->

    <!-- Dash Navbar Left 
    Available versions: dnl-visible, dnl-hidden -->
    <div class="dash-navbar-left dnl-hidden">
      <p class="dnl-nav-title">Home</p>
      <ul class="dnl-nav">
        <li>
          <a class="collapsed" data-toggle="collapse" href="#collapseStatistics" aria-expanded="false" aria-controls="collapseStatistics">
            <span class="glyphicon glyphicon-stats dnl-link-icon"></span>
            <span class="dnl-link-text">Statistics</span>
            <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
          </a>
          <!-- Dropdown level one -->
          <ul class="dnl-sub-one collapse" id="collapseStatistics">
            <li>
              <a href="#">
                <span class="fa fa-clock-o dnl-link-icon"></span>
                <span class="dnl-link-text">Daily</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa fa-history dnl-link-icon"></span>
                <span class="dnl-link-text">Annual</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-folder-open dnl-link-icon"></span>
            <span class="dnl-link-text">Pages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-comment dnl-link-icon"></span>
            <span class="dnl-link-text">Comments</span>
            <span class="badge">4</span>
          </a>
        </li>
        <li>
          <a class="collapsed" data-toggle="collapse" href="#collapseLevelOne" aria-expanded="false" aria-controls="collapseLevelOne">
            <span class="fa fa-sort-amount-desc dnl-link-icon"></span>
            <span class="dnl-link-text">Dropdown level 1</span>
            <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
          </a>
          <!-- Dropdown level one -->
          <ul class="dnl-sub-one collapse" id="collapseLevelOne">
            <li>
              <a href="#">
                <span class="fa fa-slack dnl-link-icon"></span>
                <span class="dnl-link-text">Level 1</span>
              </a>
            </li>
            <li>
              <a class="collapsed" data-toggle="collapse" href="#collapseLevelTwo" aria-expanded="false" aria-controls="collapseLevelTwo">
                <span class="fa fa-level-down dnl-link-icon"></span>
                <span class="dnl-link-text">Dropdown level 2</span>
                <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
              </a>
              <!-- Dropdown level two -->
              <ul class="dnl-sub-two collapse" id="collapseLevelTwo">
                <li>
                  <a href="#">
                    <span class="fa fa-wifi dnl-link-icon"></span>
                    <span class="dnl-link-text">Level 2</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-wifi dnl-link-icon"></span>
                    <span class="dnl-link-text">Level 2</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-wifi dnl-link-icon"></span>
                    <span class="dnl-link-text">Level 2</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <span class="fa fa-slack dnl-link-icon"></span>
                <span class="dnl-link-text">Level 1</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="dnl-nav-title">Filter</p>
      <ul class="dnl-nav">
        <li>
          <a href="#">
            <span class="fa fa-image dnl-link-icon"></span>
            <span class="dnl-link-text">Image</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="fa fa-video-camera dnl-link-icon"></span>
            <span class="dnl-link-text">Video</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-folder-open dnl-link-icon"></span>
            <span class="dnl-link-text">Audio</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="fa fa-file-text dnl-link-icon"></span>
            <span class="dnl-link-text">File</span>
            <span class="badge">4</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <span class="fa fa-link dnl-link-icon"></span>
            <span class="dnl-link-text">Active link</span>
          </a>
        </li>
      </ul>
      <p class="dnl-nav-title">Category</p>
      <ul class="dnl-nav">
        <li>
          <a class="collapsed" data-toggle="collapse" href="#collapseCategoryAll" aria-expanded="false" aria-controls="collapseCategoryAll">
            <span class="glyphicon glyphicon-tags dnl-link-icon"></span>
            <span class="dnl-link-text">All</span>
            <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
          </a>
          <!-- Dropdown level one -->
          <ul class="dnl-sub-one collapse" id="collapseCategoryAll">
            <li>
              <a href="#">
                <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                <span class="dnl-link-text">UI</span>
                <span class="badge">4</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                <span class="dnl-link-text">Design</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                <span class="dnl-link-text">App</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                <span class="dnl-link-text">Homepage</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <span class="fa fa-dot-circle-o dnl-link-icon"></span>
            <span class="dnl-link-text">Popular</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="fa fa-dot-circle-o dnl-link-icon"></span>
            <span class="dnl-link-text">Handpicked</span>
          </a>
        </li>
      </ul>
    </div> <!-- /.dash-navbar-left -->

    <!-- Enter your page content below here
    Available navbar effects: dnl-push, dnl-overlay
    Available navbar versions: dnl-visible, dnl-hidden 
    Available content effects: content-opacity -->
    <div class="content-wrap dnl-hidden content-opacity" data-effect="dnl-overlay">
      <div class="container-fluid">
        <h2 class="page-header">Read me carefully</h2>
        <p class="lead">This is one of the two versions of "Dash navbar" called <em>hidden</em>. There is a key difference between these versions. <a href="../index.html">Back to all demos</a></p>

        <p>This one is hidden on all devices and you can only open the left navbar by click on the toggle button or swipe.</p>
        <br>

        <h4><span class="label label-info">Tip</span> How these versions works:</h4>
        <p>These two versions have the same HTML structure with some diffrent classes. For example for this page <code>hidden-push.html</code> there is a class <code>dnl-hidden</code> on 
        <br><code>&lt;nav class="navbar navbar-static-top dash-navbar-top <strong>dnl-hidden</strong>"&gt;</code>, 
        <br><code>&lt;div class="dash-navbar-left <strong>dnl-hidden</strong>"&gt;</code> and 
        <br><code>&lt;div class="content-wrap <strong>dnl-hidden</strong>" data-effect="dnl-push"&gt;</code>.
        <br> If you like the other version (visible), simply replace <code>dnl-hidden</code> with <code>dnl-visible</code> for all three tags.</p>
        <hr>

        <h3 class="page-header">Available skins</h3>
        <p>There are two skins at the moment.</p>
        <button type="button" class="btn btn-primary btn-dark">Dark</button>
        <button type="button" class="btn btn-primary btn-light">Light</button>
        <br><br>
        <h4><span class="label label-info">Tip</span> How to choose skins:</h4>
        <p>The default skin is dark, so if you like the dark skin, you do not need to change anything. If not change <br><code>&lt;link href="css/<strong>dash</strong>.css" rel="stylesheet"&gt;</code> to <code>&lt;link href="css/<strong>dash-light</strong>.css" rel="stylesheet"&gt;</code> <br>in this page <code>head</code> section.</p>
        <br>

        <h4><span class="label label-info">Tip</span> How to create my very own skin:</h4>
        <p>If you like to create a new skin, you should use LESS. Simply open the <code>variables-light.less</code> or <code>variables-dark.less</code> in LESS folder, there are tons of varibales to change, and change the variables, then compile it to CSS (e.g. dash-green.css) and add it to page as mentioned above.</p>
        <hr>

        <h3 class="page-header">Available left navbar effects</h3>
        <p>There are two effects when the left navbar toggles. Click the below buttons to see the different effects.</p>
        <a href="hidden-push.html" class="btn btn-primary">Push</a>
        <a href="hidden-overlay.html" class="btn btn-primary active">Overlay</a>
        <br><br>
        <h4><span class="label label-info">Tip</span> How to set up one of these effects:</h4>
        <p>First choose the effect that you like and then open <code>hidden-overlay.html</code> in your text editer and find <code>&lt;div class="content-wrap" data-effect="<strong>dnl-push</strong>"&gt;</code>. <br>Do you see <code>dnl-push</code>? The default effect is <code>push (dnl-push)</code>. Now you can change <code>dnl-push</code> to one of these <code>dnl-overlay</code></p>
        <hr>

        <h3 class="page-header">Available content effects</h3>
        <p>There is only one effect for content when the left navbar toggles. It is called "Opacity".</p>
        <h4><span class="label label-info">Tip</span> How to set up opacity effect:</h4>
        <p>Simply find <code>&lt;div class="content-wrap"&gt;</code> and add <code>content-opacity</code> class to it. It works for both push and overlay effects.</p>
        <hr>
      </div>
    </div> <!-- /.content-wrap -->
    
    <!-- Le javaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/dash.js"></script>
    <script src="js/demo.js"></script>

    <!-- Histats.com  START (hidden counter)-->
    <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
    <a href="http://www.histats.com" target="_blank" title="site stats" ><script  type="text/javascript" >
    try {Histats.start(1,2586830,4,0,0,0,"");
    Histats.track_hits();} catch(err){};
    </script></a>
    <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2586830&101" alt="site stats" border="0"></a></noscript>
    <!-- Histats.com  END  -->

  </body>
</html>