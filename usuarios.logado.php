

<?php 



// pegar o ip e hora do servidor em suas respectivas variaveis.
$ip = $_SERVER["REMOTE_ADDR"]; // pegar o ip.
$hora = date("H:i:s"); 
$id_data = date("d/m/y"); 
$sql = $pdo->prepare("INSERT INTO qt_acessos (ip, hora, id_data) VALUES (:ip, :hora, :id_data)");
$sql->bindValue(":ip", $ip);
$sql->bindValue(":hora", $hora);
$sql->bindValue(":id_data", $id_data);
$sql->execute();

/*$sql = $pdo->prepare("DELETE FROM qt_acessos WHERE hora < :hora");
$sql->bindValue(":hora", date('H:i:s', strtotime("-60 minutes")));
$sql->execute();*/
$sql = $pdo->prepare("DELETE FROM qt_acessos WHERE id_data < :id_data");
$sql->bindValue(":id_data", date('d/m/y', strtotime("-1 days")));
$sql->execute();

$sql = $pdo->prepare("DELETE FROM qt_acessos WHERE ip='168197'");
$sql->bindValue(":ip", $ip);
$sql->execute();

/*$sql = $pdo->prepare("DELETE FROM qt_acessos WHERE ip='66.249.85.20'");
$sql->bindValue(":ip", $ip);
$sql->execute();*/
?>




