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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="ajax.js"></script>
  </head>
  <body>
    <div class="MainContainer">
      <h1 class="MainContainer_h1">
        
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
              <td><?=$directs['FIO']?></td>
              <td> <a href="tel:<?=$directs['telephone']?>"><?=$directs['telephone']?></a></td>
              <td><?=$directs['who']?></td>
              <td> 
                <a href="#" onclick="update(<?=$directs['id']?>)"> Редактировать </a>
                <button class="btn_del_direct" onclick="del_direct(<?=$directs['id']?>);">Удалить</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <button id="button_add" type="button" data-product-id="144" title="В корзину" class="btn w-button">Добавить</button>
    </div>


    <!-- add modal form-->
      <div class="modal-wrapper">
        <div class="modal">
          <div class="head">X</div>
          <div class="content">
              <div class="good-job">
                <p>Добавьте данные в справочник</p>
                <form class="form_modal_window" method="post" id="form_add_direct" action="">
                  <input type="text" name="fio" placeholder="ФИО" required>
                  <input type="phone" name="telephone" placeholder="Ваш телефон" required>
                  <input type="text" name="who" placeholder="Кем приходится" required>
                  <button id="btn_add_direction"> Отправить </button>
                </form>
              </div>
          </div>
        </div>
      </div>
  </body>

  <script type="text/javascript">
    /*добавление */
    $( document ).ready(function() {
      $('#button_add').on('click', function() {
          $('.modal-wrapper').toggleClass('open');
          return false;
      });
      $('.head').on('click', function (){
          $('.modal-wrapper').removeClass('open');
      })   
    });
    /*обновление */

function update(id) {

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
