<!DOCTYPE html>
<html>
<head>
<style>
div.ex1 {
  width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}

div.ex2 {
  max-width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}
</style>
</head>
<body>

<h2>Welcome to My Website</h2>

<div class="ex1">
	<strong>Thirukural:<?=$thirukural_data['no']?></strong>
	<p><?=$thirukural_data['text']?></p>
</div>
<br>



</body>
</html>
