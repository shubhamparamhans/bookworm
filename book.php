<html>
<head>
<?php 
if(isset($_GET['q'])){
	$bookLink=$_GET['q'];
	$bookUID=substr($bookLink,-12);
	
}
else{
	$bookUID='';
	$bookLink='';}
?>
<title>::BOOKWORM::&nbsp;&nbsp;&nbsp;</title>

<link rel="stylesheet" href="CSS/main.css" type="text/css">
<link rel="stylesheet" href="CSS/bookDetail.css" type="text/css">
<style>
#result{
position:relative;	
top:20px;left:100px;
border:solid 2px black;	
}
#foot{

top:1700px;}
</style>

<script src="JS/jquery.js"></script>
<script src="JS/1.js"></script>

<script>

<?php echo "var tio='".$bookLink."';"; ?>
$(document).ready(function(){
			
				
//$.getJSON('ex.js',function(data){
	//		handleResponse(data);

//});
});
function handleResponse(result){
	//BOOK IMAGE
		
}
function checkImageLink(data){
if(!data)
	return '';
else 
	return data;
}
function checkBookTitle(data){
if(!data)
	return '';
else
	return data;
}

function checkSub(data){
if(!data) return '';
return data;
}
function checkSelfLink(data){
if(!data) return '#';
return data;
}
</script>

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
<input type="text" id="searchBook" placeholder="SEARCH BOOK" />
<input type="button" id="searchButton" value="SEARCH"/>
</div>
<div id="container">
<div id="left">
</div>

 <div id="mid" style="width:950px;height:900px;position:absolute;top:35px;">
<img src='' id="bookImg">
<div id="bookName"></div>
<div id="bookSubt"></div>
<div id="bookAuthors"></div>
<div id="bookPublisher"></div>
<div id="bookISBN"></div>
<div id="bookLP"></div>
<div id="bookSub"></div>
<div id="bookPr"></div>
 <div id="bookDes"></div>
 
</div>

<div id="right">
</div>
</div>
<div id="foot">
</div>
<script>
$.getJSON(tio,function(data){
document.getElementById('bookImg').src=data.volumeInfo.imageLinks.small;
document.getElementById('bookName').innerHTML=data.volumeInfo.title;
var authors=checkAuthor(data.volumeInfo.authors);
var subTit=checkSub(data.volumeInfo.subtitle);
document.getElementById('bookSubt').innerHTML=subTit;
document.getElementById('bookAuthors').innerHTML="BY: "+authors;
document.getElementById('bookPublisher').innerHTML="PUBLISHERS: "+data.volumeInfo.publisher;
isbn=checkISBN(data.volumeInfo.industryIdentifiers);
document.getElementById('bookISBN').innerHTML=isbn;
booklp=checkLP(data.volumeInfo.pageCount,data.volumeInfo.averageRating);
document.getElementById('bookLP').innerHTML=booklp;
var categories=getCategories(data.volumeInfo.categories);
document.getElementById('bookSub').innerHTML=categories;
bookdes=checkDes(data.volumeInfo.description);
document.getElementById('bookDes').innerHTML=bookdes;
document.getElementById('bookPr').innerHTML="<a href='"+data.accessInfo.webReaderLink+"' target='_blank' style='text-decoration:none;color:#d72020'>TAKE A PREVIEW</a>";


});
function checkDes(a){
var b='<h2>DESCRIPTION</h2>';
if(!a) return b;
else return b+a;
}
function checkLP(a,b){
return  "Page count "+a+", Average Rating "+b;
}
function checkISBN(data){
var j='ISBN: ';
if(!data) return '';
else{
	if($.isArray(data)){
		for(var i=0;i<data.length;i++)
		{	 if(i==(data.length-1)){j+=data[i].identifier}
			else{j+=data[i].identifier;	j+=', ';}
			}
			return j;
	}
	return data;

}

}
function getCategories(data){
if(!data) return '';
var z='';
if($.isArray(data)){
		for(var i=0;i<data.length;i++){
				if(i==(data.length-1)){z+=data[i];}
				else{ z+=data[i];z+=','; }
			
		}
return z;
		}
		return data;
}
function checkAuthor(data){
if(!data)
	return '';
if($.isArray(data)){
var n=' ';
	for(var i=0;i<data.length;i++){
			if(i==(data.length-1)){n+=data[i];}
			else{n+=data[i];n+=', ';}
	}
	return n;
}
return data;
}
var jk=$('#mid').innerHeight();
			var tyu=jk+550;
			tyu+='px';
			//$('#foot').css({"top":tyu});
</script>
</body>
</html>