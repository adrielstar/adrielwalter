<?php

for ($i=100; $i <= 300 ; $i++) 
{ 
	if ($i % 4 == 0 ) 
	{
		?>
			<p style="color: red;"><strong>
		<?php
			echo "**" . $i . "**";
		?>
			</strong></p>
		<?php
	}
	else 
		?>
			<p >
		<?php
			echo $i;
		?>
			</p>
		<?php	
}

?>