<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
  color: black;
  background-color: rgb(250, 250, 250);
}

.Wrapper {
  background-color: white;
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
  margin-top: 8px;
  padding: 8px;
  padding-bottom: 64px;
  box-sizing: border-box;
}
.body-title {
  text-align: center;
}
.profile-area {
  width: 60%;
  margin: 0 auto;
}
.profile-table {
  text-align: center;
  width: 100%;
  box-shadow: 0px 3px 3px 3px rgb(240, 240, 240);
}
</style>
<title><?php echo $head_title; ?></title>
</head>
<body>
<div class="Wrapper">

<!-- body title -->
<div class="body-title">
<h1><?php echo $body_title; ?></h1>
</div>
<!-- /body title -->

<hr />

<!-- Profile -->
<div class="profile-area">
<h2>Profile</h2>
<table class="profile-table">
<tr>
<th>NAME</th>
<td><?php echo $myname;?></td>
</tr>
<tr>
<th>PLACE</th>
<td><?php echo $place;?></td>
</tr>
<tr>
<th>AGE</th>
<td><?php echo $age;?></td>
</tr>
</table>
</div>
<!-- /Profile -->

</div>
</body>
</html>
