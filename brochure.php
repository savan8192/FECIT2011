<?php
header('Content-disposition: attachment; filename=brochure.pdf');
header('Content-type: application/pdf');
readfile('brochure.pdf');
?> 