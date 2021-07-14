<HTML>
<HEAD>
   <TITLE> Основное задание </TITLE>
</HEAD>
<BODY>
<?php
$input= $_GET['input'];
echo "Вы ввели ".$input;
$counterRight=0;$counterLeft=0;
for($i=0;$i<strlen($input);$i++)
{	
	if($input[$i]==')')	{$counterLeft++;}
	if($counterLeft==1 && $counterRight==0){break;}
	else if($input[$i]=='('){$counterRight++;}
}
if($counterRight!=$counterLeft){echo "<p>"."Что-то не так";}
else {echo "<p>"."Все отлично";}
?>
</BODY>
</HTML>

