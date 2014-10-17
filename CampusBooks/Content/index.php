<DOCTYPE html>
<html>

<head>
<title>CampusBooks</title>
<link rel="stylesheet" type="text/css" href="Style2.css"/>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		var $ediv=$("<div id='editpostBlock'><table id='inf' cellspacing='5px'><col width='30%'><col width='10%'><tr><td><font color=white>Email:<input type='text'></font></td></tr><tr><td><font color=white>Posting ID:<input type='text'></fo</tr></table><a href='Post.html'><input id='editSub' type='button' value='Submit'></a><a><input id='cancel' type='button' value='Cancel'></a>");
		$('.editPost').click(function(){
			$($ediv).appendTo('body');
			$('#cancel').click(function(){
				$($ediv).remove();
			});
	
		});
		var $cdiv=$("<div id='categDiv'><select id='categSelect'><option>Art/History</option><option>Engineering</option><option>Math</option><option>Science</option><option>Other</option></select><input type='radio'>Buy <input type='radio'>Trade <a href='Search.html'><input id='catSub'type='button' value='Submit'></a><div id='closeButton'>X</div>");
		$('.categBlock').click(function(){
			$($cdiv).appendTo('body');
				$('#closeButton').click(function(){
				$($cdiv).remove();
				});

		});	
	
		
		
	
	


})

</script>
</head>

<body>

<div id="header">
	<p style="margin-left:75%;margin-top:9%;float:bottom;color:white; position: absolute;font-family: Palatino;font-size: 20px">Online Campus Bulletin Board</p>
			<img id="pic" src="perro.jpg"/>
			<img id="pic2" src="nombre.jpg">
	
</div>

<div id="menu">
<ul>
<li><a href="index.html">Home</a></li>
<li class="categBlock"><a>Categories</a></li>
<li><a href="Post.html">Add post</a></li>
<li class="editPost"><a>Edit post</a></li>
</ul>
</div>

<div class="search1">
	<p style="text-align: center;font-size: 25px;font-family: Palatino">Search for Used Books on Campus, Fast And Easy </p>
		<form>
			<input id="search" type="text" placeholder="Type here">
			<a href="Search.html"><input id="submit" type="button" value="Search"></a>
		</form>
</div>


</body>



</html>