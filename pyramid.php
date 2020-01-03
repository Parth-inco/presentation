<form action="" method="post">
<center>
<b>Enter Number :</b><input type="text" name="no"><br><br>
<input type="submit" value="Submit" name="send">
</center>
</form>


<?php

{
if(isset($_POST["send"]))
{
	$no=$_POST["no"];
	echo "<h4>Number for pyramid: ".$no."<h4>";
	for($i=0;$i<$no;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo "*";
			echo "  ";
		}
		echo "  ";
		echo "<br>";
	}
}
}
?>
