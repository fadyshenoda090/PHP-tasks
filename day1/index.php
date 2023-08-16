<!-- <?php
print "welcom to PHP <br>";
echo "welcom to PHP";
?>  -->

<!-- <?php 
$x=5;
$y='welcom';
$z=True;
echo "$x<br>$y<br>$z<br>";
echo gettype($x);
echo "<br>";
echo gettype($y);
echo "<br>";
echo gettype($z);
?> -->

<!-- <?php
for($i=0;$i<16;$i++):
echo "$i <br>";
endfor;
?> -->

<!-- <?php
$i=0;
while($i<16):
    echo"$i <br>";
    $i++;
endwhile;
?> -->

<!-- <?php
define("CONSTANT", "ITI"); 
echo CONSTANT,"<br>";
const CONSTANT1="ITI";
echo CONSTANT1;
?> -->

<!-- <?php
$a = 10;
if (isset($a)):
echo "Variable 'a' is set.<br>";
else:
echo "Variable 'a' is not set. <br>";
endif;

$b = "KAK";
if (isset($b)):
echo "Variable 'b' is set. <br>";
else:
echo "Variable 'b' is not set. <br>";
endif;

$c = NULL;
if (isset($c)):
echo "Variable 'c' is set. <br>";
else:
echo "Variable 'c' is not set. <br>";
endif;
?> -->

<!-- <?php
$a = 0;
if (empty($a)):
echo "Variable 'a' is empty.<br>";
else:
echo "Variable 'a' is not empty.<br>";
endif;

$b=1;
if (empty($b)):
echo "Variable 'b' is empty.<br>";
else:
echo "Variable 'b' is not empty.<br>";
endif;
?> -->

<!-- <?php
$m=30;
$n=15;
$result=$m+$n;
if($result>50):
    echo $result." accepted <br>";
else:
    echo $result." not accepted <br>";
endif;
?> -->

<table border >
    <?php
    $A=1000;
    $B=1200;
    $C=1400;
    ?>
    <tr>
        <td style="color:blue">salary of mr A </td>
        <td><?php echo $A?></td>
    </tr>
    <tr>
        <td style="color:blue">salary of mr B </td>
        <td><?php echo $B?></td>
    </tr>
    <tr>
        <td style="color:blue">salary of mr C </td>
        <td><?php echo $C?></td>
    </tr>
</table>
