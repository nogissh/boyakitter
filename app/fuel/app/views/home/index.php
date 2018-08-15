<html>
<head>
<style>
body {
  color: black;
  background-color: rgb(250, 250, 250);
  margin: 0;
  padding: 0;
}

.Wrapper {
  width: 100%;
  max-width: 640px;
  margin: 0 auto;
  margin-top: 8px;
  padding: 8px;
  padding-bottom: 64px;
  box-sizing: border-box;
}
.panel {
  background-color: white;
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  box-shadow: 0px 3px 3px 3px rgb(240, 240, 240);
  box-sizing: border-box;
}

.header_bar {
  overflow: hidden;
  background-color: white;
  width: 100%;
  margin: 0;
  top: 0;
  left: 0;
  border-bottom: 1px lightgray solid;
  box-sizing: border-box;
}
.header_bar h1 {
  font-size: 24px;
}

.header_bar ul {}
.header_bar ul li {
  display: inline-block;
  text-align:center;
  margin-right: 16px;
}

.boyaki {
  margin-bottom: 32px;
}
.boyaki h1 {
  font-size: 18px;
}
.boyaki p {
  font-size: 16px;
}
</style>
<title>Home - Boyakitter</title>
</head>
<body>
<header>
<div class="header_bar">
<div style="float: left;">
<a href="/app/public/"><h1>Boyakitter</h1></a>
</div>
<div style="float: right;">
<ul>
<li><a href="/app/public/index.php/post/">BOYAKU</a></li>
<li>MY BOYAKI</li>
</ul>
</div>
</div>
</header>
<div class="Wrapper">

<!-- Title of Boyaki -->
<div class="boyaki">
<h1>Boyakies</h1>
</div>
<!-- /Title of Boyaki -->

<!-- All of Boyaki -->
<div>
<?php
// Show Boyaki  
foreach($boyaki as $value) {
  echo "<div class=\"panel boyaki\">\n";
  echo "<h1>".$value['title']."</h1>\n";
  echo "<p>".$value['text']."</p>\n";
  echo "</div>\n";
}
?>
</div>
<!-- /All of Boyaki -->

</div>
</body>
</html>
