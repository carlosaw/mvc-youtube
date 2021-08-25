function enviarEmail() {
  var nome = $('input[name=nome]').val();//Pega dados enviados
  var email = $('input[name=email]').val();
  var mensagem = $('textarea').val();
  alert("NOME: "+nome);// Verifica se pegou os dados

  $.ajax({
    url:'http://localhost/mvc-youtube/contato/enviar_email',
    type:'POST',
    data:{nome:nome, email:email, msg:mensagem},
    success:function() {

    }
  });
}