<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <?php
$a = $algebra['a'];
$b = $algebra['b'];

$res = ($a * $a) + ($b * $b) + 2 * ($a * $b);
echo "<label>value of a</label>";
echo "<br>";
echo "<input value=" . $a . ">";
echo "<br>";
echo "<label>value of b</label>";
echo "<br>";
echo "<input value=" . $b . ">";
echo "<br>";
echo "<label>Result</label>";
echo "<br>";
echo "<input value=" . $res . ">";

?>


        </div>
    </div>
</div>