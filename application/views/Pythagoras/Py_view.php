<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h1>Hypotenious</h1>
            <?php if (!empty($pythagoras)) {?>
            <?php if (!empty($pythagoras['a']) || !empty($pythagoras['b'])) {
    $a = $pythagoras['a'];
    $b = $pythagoras['b'];
    $hypotenious = ($a * $a) + ($b * $b);
    $hypotenious = sqrt($hypotenious);
    echo "<label>Base</label>";
    echo "<br>";
    echo "<input value=" . $a . ">";
    echo "<br>";
    echo "<label>Perpendicular</label>";
    echo "<br>";
    echo "<input value=" . $b . ">";
    echo "<br>";
    echo "<label>Hypotenious</label>";
    echo "<br>";
    echo "<input value=" . $hypotenious . ">";

    ?>
            <?php }?>
            <?php }?>
        </div>


        <div class="col-md-4">
            <h1>Base</h1>
            <?php if (!empty($pythagoras)) {?>
            <?php if (!empty($pythagoras['z']) || !empty($pythagoras['y'])) {
    $z = $pythagoras['z'];
    $y = $pythagoras['y'];
    $base = ($z * $z) - ($y * $y);
    $base = sqrt($base);
    echo "<label>Hypotenious</label>";
    echo "<br>";
    echo "<input value=" . $z . ">";
    echo "<br>";
    echo "<label>Perpendicular</label>";
    echo "<br>";
    echo "<input value=" . $y . ">";
    echo "<br>";
    echo "<label>Base</label>";
    echo "<br>";
    echo "<input value=" . $base . ">";

    ?>
            <?php }?>
            <?php }?>
        </div>


        <div class="col-md-4">
            <h1>Perpendicular</h1>
            <?php if (!empty($pythagoras)) {?>
            <?php if (!empty($pythagoras['l']) || !empty($pythagoras['m'])) {
    $l = $pythagoras['l'];
    $m = $pythagoras['m'];
    $perpendicular = ($l * $l) - ($m * $m);
    $perpendicular = sqrt($perpendicular);
    echo "<label>Hypotenious</label>";
    echo "<br>";
    echo "<input value=" . $l . ">";
    echo "<br>";
    echo "<label>Base</label>";
    echo "<br>";
    echo "<input value=" . $m . ">";
    echo "<br>";
    echo "<label>Perpendicular</label>";
    echo "<br>";
    echo "<input value=" . $perpendicular . ">";

    ?>
            <?php }?>
            <?php }?>
        </div>

    </div>
</div>