<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Блог</title>
<!-- <link href="{{asset('styles/style.css')}}" rel="stylesheet" type="text/css" > -->
</style>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h3><a href="#">Блог</a></h3>
  </div>
  <div id="sidebar">
    <h2>Navigation</h2>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
    </ul>
  </div>
  <div id="content">
    <div class="item">
      <h1><a href="#">New website design</a></h1>
      <div class="meta">By Admin on 10th September 2006</div>
      <p>Ginger-esque was designed by Donny Burnside of Ginger-Ninja.net and is released under the <a rel="nofollow" target="_blank" href="http://creativecommons.org/licenses/by-nc/2.5/">Creative Commons 2.5 license</a>. If you use the design all I ask is that you keep the credit link in the footer. Also, it would be nice if you email me at inbox[at]ginger-ninja.net to let me know how you're using the design. An editable Fireworks .PNG file is included for the header image. Enjoy.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="item">
      <h1><a href="#">Lorem Ipsum</a></h1>
      <div class="meta">By Admin on 1st September 2006</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
<div id="footer">
  <p>&copy; 2021 Maldybaev Taalai <a href="https://github.com/maldybaev/php50k">Github</a> </p>
</div>
<style type="text/css">
/* Page Formatting */

* {
  margin:0;
  padding:0;
  }

body {
  background-color:#fcfcfc;
  background-image:url({{asset('images/background.png')}});
  background-repeat:repeat-x;
  font:12px "Trebuchet MS", Arial, Verdana;
  color:#555555;
  text-align:left;
}
a {
  color:#6A95AD;
  text-decoration:none;
  }
a:hover {
  color:#E9BF1B;
  text-decoration:none;
  }
img, img a {
  border:0;
  }
p {
  line-height:1.7em;
  margin-bottom:20px;
}

/* Page Structure */

#wrapper {
  width:760px;
  margin:0 auto;
  padding:10px;
  background-color:#fff;
  border-left:1px solid #efefef;
  border-right:1px solid #efefef;
  border-bottom:1px solid #efefef;
  }
#header {
  height:200px;
  background-image:url({{asset('images/header.png')}});
  background-repeat:no-repeat;
  margin-bottom:10px;
  }
#sidebar {
  float:left;
  text-align:left;
  width:150px;
  padding:10px;
  background-image:url({{asset('images/bg-sidebar.gif')}});
  border:1px solid #efefef;
  color:#666666;
  }
#content {
  margin-left:190px;
  min-height:450px;
  }
#footer {
  clear:both;
  padding:10px 0;
  font-size:11px;
  text-align:center;
  line-height:16px;
  color:#999999;
  font-weight:bold;
  }

/*  Headings */

h1 {
  font-weight:normal;
  letter-spacing:-1px;
  font-size:1.8em;
  padding-bottom:0;
  }
h1 a {
  text-decoration:none;
  }
h1 a:hover {
  text-decoration:none;
  }
h2 {
  font-weight:bold;
  font-size:1.0em;
  }
h3 {
  font-weight:normal;
  font-family:Geneva, Arial, Helvetica, sans-serif;
  font-size:3.0em;
  line-height:200px;
  margin-left:10px;
  }
h3 a {
  color:#ffffff;
  }
h3 a:hover {
  color:#ffffff;
  text-decoration:none;
  }

/* Sidebar */

#sidebar ul {
  list-style-type:none;
  margin:0 0 20px 0;
  }
#sidebar li {
  list-style-type:disc;
  margin-left:14px;
  }
#sidebar a {
  font-weight:normal;
  }
#sidebar a:hover {
  text-decoration:underline;
  }

/* Classes */

.item {
  margin-bottom:10px;
  }
.meta {
  margin-bottom:10px;
  color:#999999;
  }

/* Extra's */

blockquote  {
  border-left:5px solid #333333;
  color:#333333;
}
#subscribe {
  padding-right:5px;
}
#sub {
  font-weight:bold;
  font-family:Geneva, Arial, Helvetica, sans-serif;
  font-size:1.3em;
  }
#sub a:hover {
  text-decoration:none;
  }
</style>
</body>
</html>
