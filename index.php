<?php

include('includes/header.php');
include('includes/fonctions.php');
?>

<main>
    <?php
    // $tableau = array();
    $tableau = [];
    $tableau = [true, 45, 'Terre', [45, 46, 48]];

    debug($tableau);

    $tableau[] = 'Janvier';
    array_push($tableau, 'Voiture', 'Tortue');

    debug($tableau[2]);

    $notes = [15, 5, 16, 7];

    $nbElementNotes = count($notes);
    $sommesNotes = $notes[0] + $notes[1];
    $moyenneNotes = $sommesNotes / $nbElementNotes;
    echo $moyenneNotes;
    echo "<hr>";

    $tab2 = array_merge($tableau, $notes);
    // Permet de fusionner deux tableaux

    function moyenne($data)
    {
        $counter = 0;
        for ($k = 0; $k < count($data); $k++) {
            $counter += $data[$k];
        }
        $counter /= count($data);
        echo $counter;
    }

    moyenne($notes);

    $ages = [
        'Michel' => 34,
        'Mich' => 34,
        'Mic' => 34,
    ];

    $chaine = implode('-', $ages);
    echo $chaine;
    // affiche le tableau à la ligne entre tirets

    $ages2 = explode('-', $chaine);
    debug($ages2);
    // affiche sous forme tab avec index

    $ages['Mic'] = 33;
    $ages['Mic'] = 20;
    $ages['Mic'] = 13;
    debug($ages);

    foreach ($ages as $key => $value) {
        echo $key . ' a ' . $value . ' ans.<br>';
    }

    $html = '<ul>';
    foreach ($ages as $clef => $valeur) {
        $html .= '<li>' . $clef . ' a ' . $valeur . ' ans</li>';
    }
    $html .= '</ul>';
    echo $html;

    $planetes = ['Mars', 'Terre', 'Pluton', 'Venus', 'Jupiter'];
    debug($planetes);

    asort($planetes);
    // Par ordre croissant
    debug($planetes);

    asort($ages);
    debug($ages);

    $tab = [
        'voiture' => 'ford',
        'nombre' => [1, 2, 3],
        'plantete' => ['mars', 'terre'],
    ];
    debug($tab['nombre'][0]);

    $tab = [];
    $tab[] = ['A', 'B', 'C'];
    $tab[] = ['S', 'U', 'V'];
    $tab[] = ['O', 'U', 'E', 'I'];

    debug($tab);

    debug($tab[2][2]);
    debug($tab[1][0]);
    debug($tab[0][2]);
    debug($tab[0][2]);
    debug($tab[2][3]);

    echo $tab[2][2] . $tab[1][0] . $tab[0][2] . $tab[0][2] . $tab[2][3];

    $produits = [
        ['nom' => 'chaussettes', 'prix' => 10],
        ['nom' => 'vélo', 'prix' => 500],
        ['nom' => 'carotte', 'prix' => 2],
        ['nom' => 'boulon', 'prix' => 9],

    ];

    debug($produits);
    ?>

    <ul>
        <?php
        foreach ($produits as $produit) {
        ?>
            <li>
                <?php echo $produit['nom'] . ' : ' . $produit['prix'] . ' €';
                ?>
                <!-- Ou -->
                <?= $produit['nom'] ?> : <?= $produit['prix'] ?> €
            </li>
        <?php } ?>
    </ul>
    <hr>

    <?php

    $nbs = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

    echo "<ul>";

    foreach ($nbs as $nb) {
        if ($nb % 2 == 0) {
            echo "<li>$nb : Pair";
        } else {
            echo "<li>$nb : Impair";
        }
    }

    echo "</ul>";
    ?>
    <hr>
    <?php
    $users = [
        "firstname" => "Mike",
        "lastname" => "Olg",
        "pseudo" => "",
        "age" => 34,
        "food" => "",
        "sport" => "",
    ];

    foreach ($users as $key => $value) {
        if ($value == "") {
            echo "$key : information <br>";
        } else {
            echo "$key : value <br>";
        }
    };

    ?>

</main>

<?php
include('includes/footer.php');
