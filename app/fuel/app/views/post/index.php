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

.post-boyaki input{
  font-size: 16px;
  width: 100%;
  height: 32px;
  margin-bottom: 8px;
  padding: 8px;
  border: 1px lightgray solid;
  border-radius: 3px;
  box-sizing: border-box;
}
.post-boyaki textarea {
  resize: none;
  font-size: 16px;
  width: 100%;
  height: 180px;
  margin-bottom: 8px;
  padding: 8px;
  border: 1px lightgray solid;
  border-radius: 3px;
  box-sizing: border-box;
}
.post-boyaki button {
  background-color: #f0f0f0;
  font-size: 16px;
  width: 100%;
  height: 32px;
  padding: 8px;
  border: 0;
  border-radius: 3px;
  box-sizing: border-box;
}
.post-boyaki button:hover {
  background-color: #999999;
}
.post-boyaki button:active {
  background-color: #696969;
}
</style>
<title>Home - Boyakitter</title>
</head>
<body>
<header>
<div class="header_bar">
<h1>Boyakitter</h1>
</div>
</header>
<div class="Wrapper">

<!-- Title -->
<div class="boyaki">
<h2>Boyaki</h2>
</div>
<!-- /Title -->

<!-- Input -->
<form action="completed" method="post">
<div class="panel post-boyaki">
<input type="text" name="boyaki_title" placeholder="Title"/>
<textarea name="boyaki_text" placeholder="Your Boyaki"></textarea>
<button type="submit">BOYAKU</button>
</div>
</form>
<!-- /Input -->

</div>
</body>
</html>
