<?php
include __DIR__ . '/inc/settings.php';
$title = "PHD - Hats";
include __DIR__ . '/inc/header.php';

$hoed = '/hoeden/front.jpg';

// inlexen welke hoeden er zijn
$directory = '/hoeden   ';
$filterExtensie = 'jpg';

// Bestanden ophalen
$bestanden = glob($directory . "/*." . $filterExtensie);
echo $directory . "/*." . $filterExtensie . "<br>";
var_dump($bestanden);
exit();


?>
<main class='mainFrontPagina'>

    <div class='frontFoto' style="background-image: url('<?= $hoed ?>');">
        <div class="frontContainer">
            <h1>Hoeden</h1>
        </div>
    </div>
</main>
<?php
include __DIR__ . '/inc/footer.php';
