//Transit def id to modal href
$('.option').click(function(){
      var id=$(this).data('id');
      $('#modalDelete').attr('href','./index.php?action=deleteDef&id='+id);
      $('#modalEdit').attr('href','./index.php?action=editDef&id='+id);
  })
