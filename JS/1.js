$(document).ready(function(){
//---------------INITIALIZING VARIABLE------------------
var pullData=[];
var pullFlag=0;
var newBook=[];
var bookFlag=0;
var check1=true;
var check2=true;
$('#pullReq').mouseover(function(){
check1=false;
});
$('#pullReq').mouseout(function(){
check1=true;
});
//----------------------------------------------------------------------
//--------------------ADDING PULL REQUEST DATA--------------------------
function getPullData(){
	
	var c1=0;
	if(check1){
	var dataPull=[];
	while(c1<3 ){
			dataPull.push(pullData[pullFlag]);
			pullFlag++;
			pullFlag=pullFlag%pullData.length;
			c1++;
	}
	$('.pulledBooks').remove();
	
	$.each(dataPull,function(k,v){
			$('#pullReq').append("<div class='pulledBooks'><a href='#'><span class='pulledBooksUser'>"+v.name+"</span> PULLED <span class='pulledBookName'>"+v.book+"</a></span>");
	});
	//$('.pulledBooks').toggle(10000);
}
}
//------------------------------------------------------------------
//--------------NEW BOOKS ADDED DRIVER------------------------------
function getAddedBooks(){
	
	var c2=0;
	if(check2){
	var dataPull=[];
	while(c2<3 ){
			dataPull.push(newBook[bookFlag]);
			bookFlag++;
			bookFlag=bookFlag%newBook.length;
			c2++;
	}
	$('.userAddBooks').remove();
	
	$.each(dataPull,function(k,v){
			$('#bookAdd').append("<div class='userAddBooks'><a href='#'><span class='userAddBooksUser'>"+v.name+"</span> PULLED <span class='newBookAddedName'>"+v.book+"</a></span>");
	});
	//$('.pulledBooks').toggle(10000);
}
}
//-------------------------------------------------------------------
//-------------------------------------------------------------------
//-------------DUMMY DATA--------------------------------
//-------------DUMMY DATA--------------------------------
var a={	name:"SHUBHAM",	book:"ABClogogogoagoag1241125415"};pullData.push(a);newBook.push(a);
var a={	name:"PIYUSH",	book:"CBA"};pullData.push(a);newBook.push(a);
var a={	name:"SHU3",	book:"3"};pullData.push(a);newBook.push(a);
var a={	name:"SHUBHAM4",	book:"ABC4"};pullData.push(a);newBook.push(a);
var a={	name:"SHUBHAM5",	book:"ABC5"};pullData.push(a);newBook.push(a);
var a={	name:"SHUBHAM6",	book:"ABC6"};pullData.push(a);newBook.push(a);
var a={	name:"PIYUSH7",	book:"CBA7"};pullData.push(a);newBook.push(a);
var a={	name:"SHU8",	book:"38"};pullData.push(a);newBook.push(a);
var a={	name:"SHUBHAM49",	book:"ABC49"};pullData.push(a);newBook.push(a);
var a={	name:"SHUBHAM510",	book:"ABC510"};pullData.push(a);newBook.push(a);
//----------------------------------------------------------------
//----------------------------------------------------------------
getPullData();
getAddedBooks();
setInterval(function(){getPullData();getAddedBooks();},4000);

var conH=$('#mid');
$("input[type='button']").click(function(){
	$(this).css({"background":"white"});
	$(this).css({"color":"#d52020"});
});
$("input[type='submit']").click(function(){
	$(this).css({"background":"white"});
	$(this).css({"color":"#d52020"});
});
$('#searchButton').click(function(){
		var bkn=$('#searchBook').val();
		p=bkn.trim();
		lnk='search.php?q=';
		lnk+=bkn;
		if(p==='')
			alert('PLEASE ENTER A BOOK NAME!');
		else
			location.href=lnk;	
});

//alert(conH.innerHeight());
});