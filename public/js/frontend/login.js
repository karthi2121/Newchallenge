function submit_registration()
{
    $.ajax({
        url : registerRoute,
        type : "POST",
        data: $('#registration').serialize(),
        dataType: 'json',
        async: false,
        success: function(result) 
        {
            if(result.status =='error')
            {
               $('.registration_form').html(result.view); 
            }
            else
            {
                window.location=gameRoute;
            }
            
        }
    });
}