<?php
require_once "config.php";
require_once "model/GetDirect.php";
?>

<html lang="ru">
  <head>
      <title><?php echo $config['title']; ?> </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/MainPage.css">


      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="ajax.js"></script>
  </head>
  <body>
    <div class="MainContainer">
      <h1 class="MainContainer_h1">
        Тестовое задание "Разработать телефонный справочник"
      </h1>
      
      <table class="MainContainer_table table table-striped" id="table_body">
        <thead class="">
          <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Телефон</th>
            <th scope="col">Кем приходится</th>
            <th scope="col">Кнопки действий</th>
          </tr>
        </thead>
        <tbody class="table-striped" >
          <?php foreach ($directorynumbers as $directs) { ?>
            <tr data-item="<?=$directs['id']?>" id="del_id_<?=$directs['id']?>">
              <td>
                <p id="FIO_<?=$directs['id']?>"><?=$directs['FIO']?></p>
                <input style="display:none" id="FIO_r_<?=$directs['id']?>" type="text" value="<?=$directs['FIO']?>">
              </td>
         
              <td>
                <a id="tel_<?=$directs['id']?>" href="tel:<?=$directs['telephone']?>"><?=$directs['telephone']?></a>
                <input style="display:none"  id="tel_r_<?=$directs['id']?>" type="text" value="<?=$directs['telephone']?>">
              </td>
              <td>
                <p id="who_<?=$directs['id']?>"><?=$directs['who']?></p>
                <input style="display:none"  id="who_r_<?=$directs['id']?>" type="text" value="<?=$directs['who']?>">
              </td>
                
              <td class="buttons_red"> 
                <a class="btn_red_direct" href="#" onclick="update(<?=$directs['id']?>)" id="update_<?=$directs['id']?>"> Редактировать </a>
                <button class="btn_del_direct" onclick="del_direct(<?=$directs['id']?>);">Удалить</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <button id="button_add" type="button" data-product-id="144" title="В корзину" class="btn w-button">Добавить</button>
    </div>
    <div class="modal-wrapper">
      <div class="modal">
        <div class="head_X">X</div>
        <div class="content">
            <div class="modal_for_add">
              <p>Добавьте данные в справочник</p>
              <form class="form_modal_window" method="post" id="form_add_direct" action="">
                <input id="fio" type="text" name="fio" placeholder="ФИО" required>
                <input id="telephone" type="phone" name="telephone" placeholder="Ваш телефон" required>
                <input id="who" type="text" name="who" placeholder="Кем приходится" required>
                <button id="btn_add_direction" class="btn btn-primary" type="submit"> Отправить </button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </body>


  <script type="text/javascript">
/*добавление открываем модалку4 */
  $( document ).ready(function() {
    $('#button_add').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        return false;
    });
    $('.head_X').on('click', function (){
        $('.modal-wrapper').removeClass('open');
    })   
  });
  $("#telephone").mask("+7 (999) 999-99-99");


/*обновление */
  var clicks = 0;
  function update(id) {

    clicks++;
    console.log(clicks);
    $('#update_'+id).text("Сохранить");
    $('#FIO_'+id).css('display', 'none');
    $('#tel_'+id).css('display', 'none');
    $("#who_"+id).css('display', 'none');
    $('#FIO_r_'+id).css('display', 'block');
    $('#tel_r_'+id).css('display', 'block');
    $("#who_r_"+id).css('display', 'block');

    if (clicks === 2) {
      $('#FIO_'+id).text($('#FIO_r_'+id).val());
      $('#tel_'+id).text($('#tel_r_'+id).val());
      $("#who_"+id).text($('#who_r_'+id).val());


      $('#update_'+id).text("Редактировать");
      $('#FIO_'+id).css('display', 'block');
      $('#tel_'+id).css('display', 'block');
      $("#who_"+id).css('display', 'block');
      $('#FIO_r_'+id).css('display', 'none');
      $('#tel_r_'+id).css('display', 'none');
      $("#who_r_"+id).css('display', 'none');
      jQuery.ajax({
        type:"post",
        url: "model/updatedirect.php",
        data: { id: id,  fio: $('#FIO_r_'+id).val(), telephone: $('#tel_r_'+id).val(), who: $('#who_r_'+id).val() },
        success: function(response){
            
        },
        error: function(response) { 
            alert('ошибка редактирования данных')
        }
    });
      clicks = 0;
    }
  }
/*удаление */
function del_direct(id) {       
    jQuery.ajax({
        type:"post",
        url: "model/deletedirect.php",
        data: { del: id },
        success: function(response){
            $('#del_id_'+id).css('display', 'none'); 
        },
        error: function(response) { 
            alert('ошибка удаления данных')
        }
    });
} 
  </script>
</html>
