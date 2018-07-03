<?php
header('Content-disposition: attachment; filename=rform.pdf');
header('Content-type: application/pdf');
readfile('rform.pdf');
?> 