<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <?php
$start = $table['start'];
$end = $table['end'];
$num = $table['num'];
echo "<h1>We are generation a table of" . $num . "</h1>";

for ($i = $start; $i <= $end; $i++) {
    $res = $num * $i;
    echo $num;
    echo "*";
    echo $i;
    echo "=";
    echo $res;
    echo "<br>";

}
?>


        </div>
    </div>
</div>