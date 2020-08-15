<?php

if (isset($_GET["dt-data"])) {
    $data = $_GET["dt-data"];

    $email = "sergio.silva1309@gmail.com";

    include "connect.php";
   
    mysql_select_db($databasename);
    // Verifica se a variável está vazia
    if (empty($data)) {
        $sql = "SELECT * FROM bookingform";
    } else {
        $data .= "%";
        $sql = mysqli_query($conn, "SELECT * FROM bookingform WHERE email = '{$email}'") or die(mysql_error());
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
    ?>
        
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                        <th>Date</th> 
                        <th>Name</th> 
                        <th>E-mail</th> 
                        <th>Maker</th>
                        <th>Vehicle</th> 
                        <th>Type of booking</th> 
                        <th>Status</th> 
                        <th>Staff</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        <?php
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            ?>
            
            <tr>
            <td><?php echo $row['date_book']; ?></td>
            <td><?php echo $row['customername']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['maker']; ?></td>
            <td><?php echo $row['vehicletype']; ?></td>
            <td><?php echo $row['typeofbooking']; ?></td>
            <td><?php echo $row['book_status']; ?></td>
            <td>
                <select  class="form-controler" name= staff>
                <option value="Select">Select</option>
                <option value="Ger">Ger</option>
                <option value="John">John</option>
                <option value="Ken">Ken</option>
                <option value="Amilcar">Amilcar</option>
                </select>
                </td>
            
        </tr>
            
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>