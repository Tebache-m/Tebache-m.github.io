<?php
function lister() {
    echo "<ul>";
    for ( $i = 0 ; $i <= 20 ; $i++ ) {
        echo "<li>hello numéro $i</li>";
    }
    echo "</ul>";
}
?>

<?php
function lister_hexa() {
    echo "<ul>";
    for ( $i = 0 ; $i <= 15 ; $i++ ) {
        $val=dechex($i);
        echo "<li>$val</li>";
    }
    echo "</ul>";
}

function tableau_conversion() {
    echo "<table>
    <caption><em>Illustration 1 : conversions bases 2, 8, 10, 16.</em></caption>
    <thead>
        <tr>
            <th>binaire</th>
            <th>octal</th>
            <th>décimal</th>
            <th>hexadécimal</th>
        </tr>
    </thead>
    <tbody>";
    for ( $i = 0 ; $i <= 15 ; $i++ ) {
        $binaire=decbin($i);
        $hexa=dechex($i);
        $octal=decoct($i);
        echo "<li>$val</li>";
        echo "<tr>
      <td>$binaire</td>
      <td>$octal</td>
      <td>$i</td>
      <td>$hexa</td>
    </tr>";
    }
    echo "</tbody>
    <tfoot>
        <caption><em>Illustration 1 : conversions bases 2, 8, 10, 16.</em></caption>
    </tfoot>
</table>  ";
}
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de date</title>
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>L'heure est : </p>
        <?php
            echo date("h:i:s");
        ?>

        <h1>Exercice 2</h1>
        <p>Liste : </p>
        <?php
            lister();
        ?>
        <h1>Exercice 3</h1>

        <?php
            $val1="0x41";
            $val1dec=hexdec($val1);
            $val2="0x2B";
            $val2dec=hexdec($val2);
            $chr1=chr($val1dec);
            $chr2=chr($val2dec);
            $ord1=ord($chr1);
            $ord2=ord($chr2);
            $val1hex=dechex($val1dec);
            $val2hex=dechex($val2dec);

            echo "$val1 en hexa donne $val1dec en décimale";
            echo "<br>";
            echo "$val1dec en décimale donne $val1hex en hexa";
            echo "<br>";
            echo "$val1dec en decimale donne $chr1 en ASCII";
            echo "<br>";
            echo "$chr1 en ASCII donne $ord1 en decimale";
            echo "<br>";
            echo "<br>";
            echo "$val2 en hexa donne $val2dec en décimale";
            echo "<br>";
            echo "$val2dec en décimale donne $val2hex en hexa";
            echo "<br>";
            echo "$val2dec en decimale donne $chr2 en ASCII";
            echo "<br>";
            echo "$chr2 en ASCII donne $ord2 en decimale";
        ?>

        <h1>Exercice 4</h1>
        <?php
            lister_hexa()
        ?>
    </body>
</html>