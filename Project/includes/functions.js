$(
    function(){
     
        $('#clockIn').click(function(){
									var time = new Date($.now());
                  $('#timeIn').val(time);  
        });
        
        $('#clockOut').click(function(){
									var time = new Date($.now());
                  $('#timeOut').val(time);  
        });
        $('#breakOut').click(function(){
									var time = new Date($.now());
                  $('#breakTimeOut').val(time);  
        });
        $('#breakIn').click(function(){
									var time = new Date($.now());
                  $('#breakTimeIn').val(time);  
        });
        
    }
    
    $('#checkbox-value').text($('#checkbox1').val());

$("#checkbox1").on('change', function() {
  if ($(this).is(':checked')) {
    $(this).attr('value', 'true');
  } else {
    $(this).attr('value', 'false');
  }
  
  $('#checkbox-value').text($('#checkbox1').val());
});


);
