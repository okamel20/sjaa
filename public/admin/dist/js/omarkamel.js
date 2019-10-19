function checkAll()
{
    //item_checkbox
    //checkAll
    $('input[class="item_checkbox"]:checkbox').each(function(){
      if ($('input[class="check-all"]:checkbox:checked').length == 0) {
        $(this).prop('checked', false);
        
      }else{  
        $(this).prop('checked', true);
        
      }
    });
}

function deleteAll()
{
  
}







