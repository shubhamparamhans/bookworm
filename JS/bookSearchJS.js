
$(document).ready(function(){
			$('#foot').css({"top":"1700px"});
//$.getJSON('ex.js',function(data){
	//		handleResponse(data);
//});
});
function handleResponse(result){
		var len=result.items.length;
		//$('#result').append("<table>");
		for(var i=0;i<len;i++){
			addElements(result.items[i]);
		}
		//$('#result').append("</table>");
}
function addElements(ds){
//alert(ds.volumeInfo.imageLinks.smallThumbnail);
var imageLink=checkImageLink(ds.volumeInfo.imageLinks.smallThumbnail);
var bookTitle=checkBookTitle(ds.volumeInfo.title);
var bookAuthor=checkAuthor(ds.volumeInfo.authors);
var bookSubtitle=checkSub(ds.volumeInfo.subtitle);
var selfLink=checkSelfLink(ds.selfLink);
	$('#result').append("<div class='booksFromResult'><span class='bookThumb'><img src='"+imageLink+"'/></span><a href='book.php?q="+selfLink+"'><span class='bookTitle'>"+bookTitle+"</span><span class='bookSub'>"+bookSubtitle+"</span><span class='bookAuthor'>"+bookAuthor+"</span></a></div>");
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
function checkAuthor(data){
if(!data)
	return '';
if($.isArray(data)){
var n=' ';
	for(var i=0;i<data.length;i++){
		n+=data[i];
		n+=', ';
	}
	return n;
}
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