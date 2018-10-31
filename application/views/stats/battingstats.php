
<h1 align="center">IPL 2018 Batting Stats</h1>
<h3>Stats</h3>
<form action="" method="post">
<ul>
	<input type="radio" name="stattype" value="Runs"> Most Runs<br>
	<input type="radio" name="stattype" value="4s"> Most Fours<br>
	<input type="radio" name="stattype" value="6s"> Most Sixes<br>
	<input type="radio" name="stattype" value="50s"> Most Fifties<br>
	<input type="radio" name="stattype" value="100s"> Most Centuries<br>
	<input type="radio" name="stattype" value="ave"> Best Batting Average<br>
	<input type="radio" name="stattype" value="SR"> Best Strike Rate<br>
	<input type="radio" name="stattype" value="HS"> Highest Score<br>
	<input type="submit" name="submit" value="Get Selected Values"><br>
</ul>
</div>
<div>
<h3>Teams</h3>
<ul>
	<input type="radio" name="teams" value="All"> All<br>
	<input type="radio" name="teams" value="Mumbai Indians"> Mumbai Indians<br>
	<input type="radio" name="teams" value="Chennai Super Kings"> Chennai Super Kings<br>
	<input type="radio" name="teams" value="Kings IX Punjab"> Kings IX Punjab<br>
	<input type="radio" name="teams" value="Rajastan Royals"> Rajastan Royals<br>
	<input type="radio" name="teams" value="Delhi Daredevils"> Delhi Daredevils<br>
	<input type="radio" name="teams" value="Sunrisers Hyderabad"> Sunrisers Hyderabad<br>
	<input type="radio" name="teams" value="Royal Challengers Banglore"> Royal Challengers Banglore<br>
	<input type="radio" name="teams" value="Kolkata Knight Riders"> Kolkata Knight Riders<br>
</ul>
</div>
</form>

<?php
if (isset($_POST['submit']))
{
if(isset($_POST['stattype']))
{
echo "You have selected :".$_POST['stattype'];  //  Displaying Selected Value
}
}
?>


