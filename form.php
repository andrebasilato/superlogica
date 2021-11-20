<div>
    <label for="name">Nome completo:</label>
    <input type="text" id="name" name="name" autocomplete="off" required>
</div>
<div>
    <label for="userName">Nome de login:</label>
    <input type="text" id="userName" name="userName" autocomplete="off" required>
</div>
<div>
    <label for="zipCode">CEP:</label>
    <input type="text" id="zipCode" maxlength="8" name="zipCode" autocomplete="off" required>
</div>
<div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" autocomplete="off" required>
</div>
<div>
    <label for="password" title="8 caracteres mínimo, contendo pelo menos 1 letra
                    e 1 número">Senha:</label>
    <input type="password" onblur="validaDados()" id="password" name="password" autocomplete="off" required>
</div>