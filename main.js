
        $(document).ready(function () {
            //получаем массив с идентификаторами DCID_OBJID_DEVID_JOINID
            var obj = jQuery.parseJSON('<?php echo $json; ?>');

            for (var p in obj) {
                //далее в цикле вытаскиваем данные Ajax запросом и подставляем 
                //их в таблицу идентификатором служит DCID_OBJID_DEVID_JOINID
                var id = obj[p];
                $.ajax({
                    type: "POST",
                    url: "app/ajax/mini_graf.php",
                    data: "id=" + obj[p],
                    success: function (msg) {
                        $("#" + obj[p]).html(msg).peity("bar", {
                            width: 150,
                            height: 30
                        });
                        $(".line").peity("line");
                        console.log(msg);
                    }
                });
                //console.log(obj[p]);
            }

        });
