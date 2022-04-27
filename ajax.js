$( document ).ready(function() {
    $("#btn_add_direction").click(
        function(e){
            e.preventDefault();
            del_direct(d, id);
            return false; 
        }
    );
});
/* Добавляем в  базу и список новые данные */
function add_direction(form_add_direct, url) {
    jQuery.ajax({
        url: url,
        type: "POST",
        dataType: "HTML", 
        data: jQuery(form_add_direct).serialize(),  
        cache: false,        
        success: function(response) { 
            console.log(response)
            result = $.parseJSON(response);
            $('#table_body').append('<tr><td>'+result.fio+'</td>  <td>'+result.telephone+'</td> <td>'+result.who+'</td> <td>Редактировать</td> </tr>');
        },
        error: function(response) { 
            alert('ошибка добавления данных')
        }
    });
}

