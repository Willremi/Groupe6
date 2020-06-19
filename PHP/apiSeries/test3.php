<?php
ob_start();

echo "Bonjour ";

$out1 = ob_get_contents();

echo "le monde !";

$out2 = ob_get_contents();

ob_end_clean();

echo $out1;