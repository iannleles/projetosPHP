<?php
include "conexao.php";
$sql = mysqli_query($conecta, "Select * from tblusuario order by nome_tblusuario");
//print_r($sql);
//while ($result = mysqli_fetch_array($sql)) {
//    print_r($result) . "<hr>";
//}
?>
<div id="conteudo" >
    <h3>Listagem de usuários</h3>
    <div class="borda"  ></div>
    <p>Selecione um usuário para atualizar seus dados ou para excluí-lo!</p>
    <table style="width: 60%;" align="center" >
        <tr>
            <th>Nome</th>
            <th>Eamil</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        while ($result = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $result['nome_tblusuario']; ?></td>
                <td><?php echo $result['email_tblusuario'] . "&nbsp"; ?></td>
                <td><a href="fupdate.php?id=<?php echo $result['id_tblusuario']; ?>">
                        <span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="excluir.php?id=<?php echo $result['id_tblusuario']; ?>">
                        <span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
        <?php } ?>
    </table>
</div>
