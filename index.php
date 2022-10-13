<?php
$t = rand(-20,20);
print "<table style=\"border: 3px solid;\">";
echo $t;
for ($i = 20; $i > -21; $i--) {
    $color;
    $i <= $t ? $color = 'background:red' : $color = 'background:yellow';
    print "<tr><td style=\"border:solid;width:30px;text-align:center;\">$i</td><td style=\"border:solid;width:30px;$color;\"></td></tr>";
}
print "</table>";