<?php
// beerbuddy header navigation bar
$nav = "
<nav class=\"navbar navbar-default navbar-static-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" id=\"header\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/src/index.php\">BeerBuddy</a>
    </div>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"".($class = ($page == 'index') ? 'active' : '')."\"><a href=\"/src/index.php\">Explore Deals</a></li>
        <li class=\"".($class = ($page == 'post') ? 'active' : '')."\"><a href=\"/src/post.php\">Post Deal</a></li>
        <li class=\"dropdown ".($class = ($page == 'help') ? 'active' : '')."\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Help<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li class=\"".($class = ($page == 'quickstart') ? 'active' : '')."\"><a href=\"/src/help/quickstart.php\">Quickstart</a></li>
            <li class=\"".($class = ($page == 'guidelines') ? 'active' : '')."\"><a href=\"/src/help/guidelines.php\">Posting guidelines</a></li>
            <li class=\"".($class = ($page == 'tips') ? 'active' : '')."\"><a href=\"/src/help/tips.php\">Exploration tips</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li class=\"dropdown-header\">Account Settings</li>
            <li><a href=\"#\">View profile</a></li>
            <li class=\"".($class = ($page == 'recoverPassword') ? 'active' : '')."\"><a href=\"/src/help/recoverPassword.php\">Recover password</a></li>
          </ul>
        </li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"".($class = ($page == 'login') ? 'active' : '')."\"><a href=\"/src/login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>&nbsp;Sign In</a></li>
        <li class=\"".($class = ($page == 'register') ? 'active' : '')."\"><a href=\"/src/register.php\"><span class=\"glyphicon glyphicon-new-window\"></span>&nbsp;Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>";
echo $nav
?>
