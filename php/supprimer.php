<?php
include('./connect_db.php');
$i = $_GET['i'] - 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req = $base->prepare('DELETE FROM abonnees WHERE Num = :id');
    $req->execute(array(
        'id' => $id

    ));
    header("Location: liste.php?supp=1");
}

?>
