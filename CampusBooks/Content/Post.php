<?php
	

?>

 <html>
 	<head>
 		<title>Post</title>
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
			<p style="margin-left:75%;margin-top:9%;float:buttom;color:white; position: absolute;font-family: Palatino;font-size: 20px">Online Campus Bulletin Board</p>
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
		
		
		<div id="information">
			<form action="" method="POST">
				<table id="inf" cellspacing="5px">
					<col width="30%">
					<col width="10%">
					<tr>
						<td><font color=white>Book Title:</font></td>
						<td><font color=white>Posting ID: #</font></td>
					</tr>
					<tr>
						<td><input id="input_bars" type="text" name="Book_Title"></td>
						<td><font color=white>Your email:</font></td>
					</tr>
					<tr>
						<td><font color=white>Edition:</font></td>
						<td><input id="input_bars" type="text" name="Email"></td>
					</tr>
					<tr>
						<td><input id="input_bars" type="text" name="Edition"></td>
						<td><font color=white>Your phone number:</font></td>
					</tr>
					<tr>
						<td><font color=white>Author:</font></td>
						<td><input id="input_bars" type="text" name="Phone"></td>	
					</tr>
					<tr>
						<td><input id="input_bars" type="text" name="Author"></td>	
						<td><font color=white>Status:</font></td>
					</tr>
					<tr>
						<td><font color=white>ISBN:</font></td>	
						<td>
							<font color=white>Selling  </font><input type="radio" name="S">  <font color=white>Sold  </font><input type="radio" name="Sold3"> 
						</td>
					</tr>
					<tr>
						<td><input id="input_bars" type="text" name="ISBN"></td>
						<td><font color=white>Price Sold For:</font></td>	
					</tr>
					<tr>
						<td><font color=white>Condition:  </font></td>
						<td><input id="input_bars" type="text" name="PriceS"></td>		
					</tr>
					<tr>
						<td>
							<font color=white>Like New  </font><input type="radio" name="C1">  <font color=white>Good  </font><input type="radio" name="C2">  <font color=white>Rough  </font><input type="radio" name="C3">
						</td>
					</tr>
					<tr>
						<td><font color=white>Post to: </font></td>
					</tr>
					<tr>
						<td>
							<font color=white>Sell  </font><input type="radio" name="sell">   <font color=white>Trade  </font><input type="radio" name="trade">
						</td>
					</tr>
					<tr>
						<td>
							<font color=white>Category  </font>
							<select>
								<option>Art/History</option>
								<option>Engineering</option>
								<option>Mathematics</option>
								<option>Science</option>
								<option>Other</option>
								
							</select>
						</td>
					</tr>
					<tr>
						<td><font color=white>Minimum Price:</font></td>
					</tr>
					<tr>
						<td><input type="number" name="price"></td>
					</tr>
					<tr>
						<td>
							<font color=white>Trade Conditions:</font>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="conditions">
						</td>
					</tr>
					<tr>
						<td>
							<font color=white>Enter a Picture of your book: </font>
							
						</td>
					</tr>
					<tr>
						<td>
							<input type="image" name="img">
							<input  type="submit" value="Browse">
						</td>
					</tr>
				</table>

				<input id="addBookB" type="submit" value="Submit">	
			</form>
		</div>
 	</body>	
 </html>
