<ul style="font-size:125%">
	<?php
	if($this->auth->check('years', TRUE)){ echo '<li>'.anchor('academic/years', 'Academic years').'</li>'; }
	if($this->auth->check('weeks', TRUE)){ echo '<li>'.anchor('academic/weeks', 'Timetable weeks').'</li>'; }
	if($this->auth->check('periods', TRUE)){ echo '<li>'.anchor('academic/periods', 'Periods').'</li>'; }
	if($this->auth->check('holidays', TRUE)){ echo '<li>'.anchor('academic/holidays', 'Holidays').'</li>'; }
	?>
</ul>