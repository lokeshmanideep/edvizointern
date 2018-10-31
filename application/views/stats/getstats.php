<html>
        <head>
              <br>  <title>IPL 2018 Stats</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/litera/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/stats_style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        </head>
        <body>
<h1 align="center">IPL 2018 STATS</h1><br>
<div class="asidetable">
<div class="asidediv">
<h4 style="margin-left: 13%">Filters</h4>
<form action=''id="radioselection" method="post">
<label><b>Batting</b></label>

<aside class="asideclass">
	<ul class="unlist">
		<li>
			<input type="radio" name="stattype" value="Runs"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Runs'? ' checked' : '';?>> Most Runs
		</li>
		<li>
			<input type="radio" name="stattype" value="Fours"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Fours'? ' checked' : '';?>> Most Fours
		</li>
		<li>
			<input type="radio" name="stattype" value="Sixes"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Sixes'? ' checked' : '';?>> Most Sixes
		</li>
		<li>
			<input type="radio" name="stattype" value="Fifties"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Fifties'? ' checked' : '';?>> Most Fifties
		</li>
		<li>
			<input type="radio" name="stattype" value="Hundreds"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Hunderds'? ' checked' : '';?>> Most Centuries
		</li>
		<li>
			<input type="radio" name="stattype" value="Ave"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Ave'? ' checked' : '';?>> Highest Average
		</li>
		<li>
			<input type="radio" name="stattype" value="SR"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='SR'? ' checked' : '';?>> Best Strike Rate
		</li>
		<li>
			<input type="radio" name="stattype" value="HS"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='HS'? ' checked' : '';?>> Highest Score
		</li>
	</ul>
</aside>

<label><b>Bowling</b></label>
<aside class="asideclass">
	<ul class="unlist">
		<li>
			<input type="radio" name="stattype" value="Wkts"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Wkts'? ' checked' : '';?>> Most Wickets
		</li>
		<li>
			<input type="radio" name="stattype" value="Average"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Average'? ' checked' : '';?>> Best Average
		</li>
		<li>
			<input type="radio" name="stattype" value="Econ"<?php echo isset($_POST['stattype']) && $_POST['stattype']=='Econ'? ' checked' : '';?>> Best Economy
		</li>
	</ul>
</aside>

<label><b>Select Team(s)</b></label>
<aside class="asideclass">
  <ul class="unlist">
	<li><input type="checkbox" name="team[]" value="Allteams"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array('Allteams', $_POST['team'])) echo 'checked="checked"'; ?>> All</li>
	<li><input type="checkbox" name="team[]" value="Mumbai Indians"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array('Mumbai Indians', $_POST['team'])) echo 'checked="checked"'; ?>> Mumbai Indians</li>
	<li><input type="checkbox" name="team[]" value="Chennai Super Kings"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array('Chennai Super Kings', $_POST['team'])) echo 'checked="checked"'; ?>> Chennai Super Kings</li>
	<li><input type="checkbox" name="team[]" value="Kings XI Punjab"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array('Kings XI Punjab', $_POST['team'])) echo 'checked="checked"'; ?> > Kings XI Punjab</li>
	<li><input type="checkbox" name="team[]" value="Rajasthan Royals"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array("Rajasthan Royals", $_POST['team'])) echo 'checked="checked"'; ?>> Rajasthan Royals</li>
	<li><input type="checkbox" name="team[]" value="Delhi Daredevils"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array("Delhi Daredevils", $_POST['team'])) echo 'checked="checked"'; ?>> Delhi Daredevils</li>
	<li><input type="checkbox" name="team[]" value="Sunrisers Hyderabad"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array("Sunrisers Hyderabad", $_POST['team'])) echo 'checked="checked"'; ?>> Sunrisers Hyderabad</li>
	<li><input type="checkbox" name="team[]" value="Royal Challengers Bangalore"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array("Royal Challengers Bangalore", $_POST['team'])) echo 'checked="checked"'; ?>> Royal Challengers Bangalore</li>
	<li><input type="checkbox" name="team[]" value="Kolkata Knight Riders"<?php if(isset($_POST['team']) && is_array($_POST['team']) && in_array("Kolkata Knight Riders", $_POST['team'])) echo 'checked="checked"'; ?>> Kolkata Knight Riders</li>
</ul>
</aside>
<input type="submit" style="margin-left: 35%;margin-top:5%;cursor: pointer ">
</form>
</div>

<?php if($type=='Batting'):?>
<div class="tablediv">
				<table>
					<?php if(count($records)):?>
					<thead>
					<tr class="table100-head">
						<th class="c1">Player</th>
						<th class="c2">Matches</th>
						<th class="c3">Innings</th>
						<th class="c4">Runs</th>
						<th class="c5">Average</th>
						<th class="c6">HS</th>
						<th class="c7">Fifties</th>
						<th class="c8">Hundreds</th>
						<th class="c9">SR</th>
						<th class="c10">Sixes</th>
						<th class="c11">Fours</th>
						<th class="c12">Team</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($records as $rec):?>
					<tr>
						<td class="c1"><?php echo $rec->Player;?></td>
						<td class="c2"><?php echo $rec->Mat;?></td>
						<?php if(is_null($rec->Inns)):?>
						<?php	$rec->Inns = '-';?>
						<?php endif;?>

						<td class="c3"><?php echo $rec->Inns;?></td>
						<?php if(is_null($rec->Runs)):?>
						<?php	$rec->Runs = '-';?>
						<?php endif;?>

						<td class="c4"><?php echo $rec->Runs;?></td>
						<?php if(is_null($rec->Ave)):?>
						<?php	$rec->Ave="-";?>
						<?php endif;?>
						<td class="c5"><?php echo $rec->Ave;?></td>
						<?php if(is_null($rec->HS)):?>
						<?php		$rec->HS="-";?>
						<?php endif;?>
						<td class="c6"><?php echo $rec->HS;?></td>
						<?php if(is_null($rec->Fifties)):?>
						<?php		$rec->Fifties="-";?>
						<?php endif;?>
						<td class="c7"><?php echo $rec->Fifties;?></td>
						<?php if(is_null($rec->Hundreds)):?>
						<?php		$rec->Hundreds="-";?>
						<?php endif;?>
						<td class="c8"><?php echo $rec->Hundreds;?></td>
						<?php if(is_null($rec->SR)):?>
						<?php		$rec->SR="-";?>
						<?php endif;?>
						<td class="c9"><?php echo $rec->SR;?></td>
						<?php if(is_null($rec->Sixes)):?>
						<?php	$rec->Sixes="-";?>
						<?php endif;?>
						<td class="c10"><?php echo $rec->Sixes;?></td>
						<?php if(is_null($rec->Fours)):?>
						<?php	$rec->Fours="-";?>
						<?php endif;?>
						<td class="c11"><?php echo $rec->Fours;?></td>
						<td class="c12"><?php echo $rec->Team;?></td>
					</tr>
					<?php endforeach;?>
					<?php else:?>
					<tr ><td>No records</td></tr>
				<?php endif;?>
				</tbody>
				</table>

			</div>
<?php endif;?>
<?php if($type=='Bowling'):?>
<div class="tablediv">
				<table>
					<?php if(count($records)):?>
					<thead>
					<tr class="table100-head2">
						<th class="co1">Player</th>
						<th class="co2">Matches</th>
						<th class="co3">Innings</th>
						<th class="co4">Overs</th>
						<th class="co5">Maidens</th>
						<th class="co6">Runs</th>
						<th class="co7">Wickets</th>
						<th class="co8">Average</th>
						<th class="co9">Economy</th>
						<th class="co10">Team</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($records as $rec):?>
					<tr>

						<td class="co1"><?php echo $rec->Player;?></td>
						<td class="co2"><?php echo $rec->Mat;?></td>
						<?php if(is_null($rec->Inns)):?>
						<?php	$rec->Inns = '-';?>
						<?php endif;?>

						<td class="co3"><?php echo $rec->Inns;?></td>
						<?php if(is_null($rec->Overs)):?>
						<?php	$rec->Overs = '-';?>
						<?php endif;?>

						<td class="co4"><?php echo $rec->Overs;?></td>
						<?php if(is_null($rec->Mdns)):?>
						<?php	$rec->Mdns="-";?>
						<?php endif;?>
						<td class="co5"><?php echo $rec->Mdns;?></td>
						<?php if(is_null($rec->Runs)):?>
						<?php		$rec->Runs="-";?>
						<?php endif;?>
						<td class="co6"><?php echo $rec->Runs;?></td>
						<?php if(is_null($rec->Wkts)):?>
						<?php		$rec->Wkts="-";?>
						<?php endif;?>
						<td class="co7"><?php echo $rec->Wkts;?></td>
						<?php if(is_null($rec->Average)):?>
						<?php		$rec->Average="-";?>
						<?php endif;?>
						<td class="co8"><?php echo $rec->Average;?></td>
						<?php if(is_null($rec->Econ)):?>
						<?php		$rec->Econ="-";?>
						<?php endif;?>
						<td class="co9"><?php echo $rec->Econ;?></td>
						<td class="co10"><?php echo $rec->Team;?></td>
					</tr>
					<?php endforeach;?>
					<?php else:?>
					<tr ><td>No records</td></tr>
				<?php endif;?>
				</tbody>
				</table>

			</div>

<?php endif;?>
		</div>

<script>

       /* $(document).ready(function () {
          //RADIO BUTTON    
          $('input:radio').click(function() {           
          var value=$("input[name='stattype']:checked").val();
      		$.ajax({
          type:"POST",
         url : "<?php echo base_url()?>stats/getstat",
         data : {'stype' : value},
          success:function(data){
          	alert("Hello");
          },
          error:function(XMLHttpRequest){
            alert("error");
          }
      });
    });
});*/
</script>

      </body>

</html>