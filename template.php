<?php
header('Content-disposition: attachment; filename=template.doc');
header('Content-type: application/pdf');
readfile('template.doc');
?> 