<h3>Contato</h3>
<div class="container">
  <div class="contact">
    <form method="POST" onsubmit="return false">
      <labeL>
        Nome:<br/>
        <input type="text" name="nome" /><br/><br/>
      </label>
      <label>
        E-mail:<br/>
        <input type="email" name="email" /><br/><br/>
      </labeL>
      <label>
        Mensagem:<br/>
        <textarea name="mensagem"></textarea><br/><br/>
      </labeL>
      <input type="submit" value="Enviar" onclick="enviarEmail()" />
    </form>
  </div>
</div>