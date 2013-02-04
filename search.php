<html>
<head>
<?php 
if(isset($_GET['q'])){
	$bookName=$_GET['q'];
}
else
	$bookName='';
?>
<title>::BOOKWORM::&nbsp;&nbsp;&nbsp;<?php echo $bookName; ?></title>

<link rel="stylesheet" href="CSS/main.css" type="text/css">
<link rel="stylesheet" href="CSS/bookSearch.css" type="text/css">
<style>

</style>

<script src="JS/jquery.js"></script>
<script src="JS/1.js"></script>

<script src="JS/bookSearchJS.js"></script>

</head>
<body>
<div id="header">
<div id="logo">
<a href="#">
BOOKWORM
</a>
</div>
<div id="loginSide">
	<table>
	<form method="POST" action="">
		<tr>
			<td><input type="text" placeholder="USERNAME" name="username"> </td><td><input type="submit" value="LOGIN" id="loginBtn" name="login"/></td>
		</tr>
		<tr>
		<td><input type="password" placeholder="PASSWORD" name="password"> </td><td><input type="button" value="REGISTER" id="register" name="register"></td>
		</tr>
	</form>
	</table>
</div>
</div>
<div id="menubar">
<span class="menuClass"><a href="#">HOW THIS WORKS</a></span>
<span class="menuClass"><a href="#">ABOUT US</a></span>
<span class="menuClass"><a href="#">CONTANCT US</a></span>
</div>
<div id="hrzline">
</div>
<div id="searchbar">
<input type="text" id="searchBook" placeholder="SEARCH BOOK" <?php if($bookName){echo "value='".$bookName."'";} ?> />
<input type="button" id="searchButton" value="SEARCH"/>
</div>
<div id="container">
<div id="left">
</div>

<div id="mid" style="width:900px;position:absolute;">
<div id="result">

</div>
</div>

<div id="right">
</div>
</div>
<div id="foot">
</div>
<script src="https://www.googleapis.com/books/v1/volumes?q=<?php echo $bookName;?>&callback=handleResponse"></script>
</body>
</html>