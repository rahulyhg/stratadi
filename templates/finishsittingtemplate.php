<?php

global $language;

?>

<table class="canvascontainer borderlesscells">
	<tr>
		<td class="canvascontainer">
			<div class="standardbox information">
				<h1><?php echo xprintf($language['youhavebeendeputized'],array($this->deputy)); ?></h1>
				<p><a href="dofinishsitting.php"><?php echo $language['wouldyouliketofinishsitting']; ?></a></p>
				<p><a href="doreset.php"><?php echo $language['logout']; ?></a></p>
			</div>
		</td>
	</tr>
</table>
