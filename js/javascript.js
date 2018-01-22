$(document).ready(function() {

$('#endereco').hide();

$('.selecao').hide();

$('#date').change(function(){
  $('#endereco').show();

  $('.selecao').show();
});

$('.datepicker').pickadate({
  formatSubmit: 'yyyy-mm-dd',
  hiddenName: true
});
$('#estados').material_select();
$('#estados').change(function(){
  var codigo = $(this).val();
  var fonte = "http://localhost/Projeto final php e mysql/cidades.php";
  var parametro = {codigo: codigo};
  $.get(fonte, parametro, function(data){
    $('#cidades_remover').remove();
    $('.selecao').append(data);
  });
});
});
