<form name="form1" method="post" action="ex1.php">
    <h1>Preencha os dados:</h1>
    <label for="nome"> Digite seu nome: </label>
    <br>
    <input type="text" name="nome" id="nome" required size="50" maxlenght="40">
    <br> <br>
    <label for="dataNascimento"> Digite sua data de nascimento: </label>
    <br>
    <input type="date" name="dataNascimento" id="dataNascimento" required size="20">
    <br> <br>
    <label for="genero"> Genero: </label>
    <br>
    <input type="radio" name="genero" value="M">
    Masculino
    <input type="radio" name="genero" value="F">
    Feminino
    <input type="radio" name="genero" value="N">
    Não informar
    <br><br>
    <label for="estadoCivil"> Estado Civil: </label>
    <br>
    <select name="estadoCivil" id="estadoCivil">
        <option value="E">Enrolado</option>
        <option value="S">Solteiro</option>
        <option value="C">Casado</option>
        <option value="V">Viuvo</option>
    </select>
    <br><br>
    <label for="mensagem"> Mensagem: </label>
    <br>
    <textarea name="mensagem" id="mensagem" required cols="50" rows="5"></textarea>
    <br><br>

    <input type="email" name="email" value="example@gmail.com">

    <br><br>
    <button type="submit"> Enviar dados </button>

</form>