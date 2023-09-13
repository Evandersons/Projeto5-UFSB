<?php   
$host = "localhost";
$user = "root";
$senha = "";
$database = "formlicenca";

$conn = mysqli_connect($host, $user, $senha, $database) or die("Erro de conexão");

if(isset($_POST['Enviar'])){
    $nome = $_POST['nome'];
    $siape = $_POST['siape'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $campus = $_POST['campus'];
    $exercicio = $_POST['exercicio'];
    $dias_lic = $_POST['dias_lic'];
    $datainicial_a = $_POST['datainicial_a'];
    $datafinal_a = $_POST['datafinal_a'];
    $local_evento = $_POST['local_evento'];
    $promotor_evento = $_POST['promotor_evento'];
    $modalidade = $_POST['modalidade'];
    $horas = $_POST['horas'];
    $datainicial_p1 = $_POST['datainicial_p1'];
    $datainicial_p2 = $_POST['datainicial_p2'];
    $datainicial_p3 = $_POST['datainicial_p3'];
    $datainicial_p4 = $_POST['datainicial_p4'];
    $datainicial_p5 = $_POST['datainicial_p5'];
    $datainicial_p6 = $_POST['datainicial_p6'];
    $datafinal_p1 = $_POST['datafinal_p1'];
    $datafinal_p2 = $_POST['datafinal_p2'];
    $datafinal_p3 = $_POST['datafinal_p3'];
    $datafinal_p4 = $_POST['datafinal_p4'];
    $datafinal_p5 = $_POST['datafinal_p5'];
    $datafinal_p6 = $_POST['datafinal_p6'];
    $desc = $_POST['descri'];
    $just = $_POST['just'];
    $locall = $_POST['locall'];
    $dataa = $_POST['dataa'];

    $query = mysqli_query($conn, "INSERT INTO usuarios (nome, siape, cargo, email, campus, exercicio, dias_lic, datainicial_a, datafinal_a, local_evento, 
    promotor_evento, modalidade, horas, datainicial_p1, datainicial_p2, datainicial_p3, datainicial_p4, datainicial_p5, datainicial_p6, 
    datafinal_p1, datafinal_p2, datafinal_p3, datafinal_p4, datafinal_p5, datafinal_p6, descri, just, locall, dataa) VALUES ('$nome', '$siape', '$cargo', '$email', '$campus', 
    '$exercicio', '$dias_lic', '$datainicial_a', '$datafinal_a', 
    '$local_evento', '$promotor_evento', '$modalidade', '$horas', '$datainicial_p1', '$datainicial_p2', '$datainicial_p3',
     '$datainicial_p4', '$datainicial_p5', '$datainicial_p6', '$datafinal_p1', '$datafinal_p2', '$datafinal_p3',
     '$datafinal_p4', '$datafinal_p5', '$datafinal_p6', '$desc', '$just', '$locall', '$dataa')");

    if($query){
        echo 'Cadastro realizado com sucesso';
    }else{
        echo 'Não foi possível cadastrar';
    }
}
?>