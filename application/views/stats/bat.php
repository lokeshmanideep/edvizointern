<?php echo form_open("Stats/getstats");?>
<h1 align="center">IPL 2018 Batting Stats</h1>
<h3>Stats</h3>
<select name="s">
<ul>
	<option value="Runs"> Most Runs</option>
	<option value="Fours"> Most Fours</option>
	<option value="Sixes"> Most Sixes</option>
	<option value="Fifties"> Most Fifties</option>
	<option value="Hundreds"> Most Centuries</option>
	<option value="Ave"> Highest Average</option>
	<option value="SR"> Best Strike Rate</option>
	<option value="HS"> Highest Score</option>
</ul>
</select>
</div>
<div>
<select name="t">
<ul>
	<option value="All"> All</option>
	<option value="Mumbai Indians"> Mumbai Indians</option>
	<option value="Chennai Super Kings"> Chennai Super Kings</option>
	<option value="Kings IX Punjab"> Kings IX Punjab</option>
	<option value="Rajastan Royals"> Rajastan Royals</option>
	<option value="Delhi Daredevils"> Delhi Daredevils</option>
	<option value="Sunrisers Hyderabad"> Sunrisers Hyderabad</option>
	<option value="Royal Challengers Banglore"> Royal Challengers Banglore</option>
	<option value="Kolkata Knight Riders"> Kolkata Knight Riders</option>
</ul>
</select>
</div>
<?php echo form_submit(['name'=>'submit','value'=>'records']);?>
<?php echo form_close("Stats/getstats");?>


