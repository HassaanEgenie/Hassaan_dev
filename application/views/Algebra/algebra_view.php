<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <?php
$a = $algebra['a'];
$b = $algebra['b'];

$res = ($a * $a) + ($b * $b) + 2 * ($a * $b);
echo "(";
echo $a;
echo "+";
echo $b;
echo ")";
echo "<sup>2</sup>";
echo "=";

echo $res;

?>


        </div>
    </div>
</div>