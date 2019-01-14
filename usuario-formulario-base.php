<tr><!-- junta a página de alterar com a de adicionar usuario -->
    <td>Nome</td>
    <td><input class="form-control" type="text" name="nome" value="<?=$usuario['nome']?>" /></td>
</tr>
<tr>
    <td>Email</td>
    <td><input class="form-control" type="text" name="email" value="<?=$usuario['email']?>" /></td>
</tr>
<tr>
    <td>Telefone</td>
    <td><input class="form-control" type="number" name="tel" placeholder="(53) 99999-9999" value="<?=$usuario['tel']?>" /></td>
</tr>

<tr>
    <td>Tipo</td>
    <td>
            <select class="form-control" name="tipo" value="<?=$usuario['tipo']?>">
               <option value="0">Aluno</option>
               <option value="1">Professor</option>
               <option value="2">Administrador</option>
            </select>
       
    </td>
</tr>

<tr>
        <td>Turno:</td>
        <td>
            <select class="form-control" name="turno"  value="<?=$usuario['turno']?>">
            <option value="0">Manhã</option>
            <option value="1">Tarde</option>
            <option value="2">Noite</option>
            </select>
        </td>
</tr>

<tr>
    <td>Senha:</td>
    <td><input class="form-control" type="password" name="senha"  value="<?=$usuario['senha']?>"></td>
</tr>

        
