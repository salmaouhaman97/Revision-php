<?php
// Exercice 1
$etudiant = [
    "nom" => "Ouahmane",
    "prenom" => "Salma",
    "matricule" => "19972004"
];

// Exercice 2
$etudiant["note"] = 15; // Ajout d'une clé "note"
$etudiant["note"] = 18; // Modification de la valeur

// Exercice 3
$produits = [
    ["nom" => "Produit A", "prix" => 50],
    ["nom" => "Produit B", "prix" => 30],
    ["nom" => "Produit C", "prix" => 20],
];

// Exercice 4
$etudiants = [
    ["nom" => "Hiba", "note" => 15],
    ["nom" => "Meriem", "note" => 12],
    ["nom" => "Adam", "note" => 18],
];
$somme = 0;
foreach ($etudiants as $etudiant) {
    $somme += $etudiant['note'];
}
$moyenne = $somme / count($etudiants);

// Exercice 5
$pays = [
    "Maroc" => "Paris",
    "Espagne" => "Madrid",
    "Almagne" => "Rome"
];

// Exercice 6
$donnees = [];
if (isset($_FILES['fichier_csv']) && $_FILES['fichier_csv']['error'] === UPLOAD_ERR_OK) {
    $fichier = $_FILES['fichier_csv']['tmp_name'];
    if (($handle = fopen($fichier, 'r')) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $donnees[] = $data;
        }
        fclose($handle);
    }
}

// Exercice 7
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produit_selectionne = $_POST['produit'];
    // Calcul du total du panier
    $prix_total = 0;
    foreach ($produit_selectionne as $produit) {
        $prix_total += $produit['prix'];
    }
}

// Exercice 8
$produits_disponibles = [
    ["nom" => "Produit A", "prix" => 50],
    ["nom" => "Produit B", "prix" => 30],
    ["nom" => "Produit C", "prix" => 20]
];

// Exercice 9
if (isset($_POST['calcul'])) {
    $operation = $_POST['operation'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    switch ($operation) {
        case 'addition':
            $resultat = $num1 + $num2;
            break;
        case 'soustraction':
            $resultat = $num1 - $num2;
            break;
        case 'multiplication':
            $resultat = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $resultat = $num1 / $num2;
            } else {
                $resultat = 'Erreur : Division par zéro';
            }
            break;
        default:
            $resultat = 'Opération non valide';
            break;
    }
}
?>
