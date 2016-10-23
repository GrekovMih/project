<!DOCTYPE html>
<html class="ua_js_no">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Бургерные Москвы</title>

    <meta name="description" content=""/>
    <link rel="stylesheet" href="index.min.css"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="page">
<div class="page__inner">
    <div class="head box i-bem" data-bem='{"box":{}}'>
        <div class="layout">
            <div class="layout__left">
                <form action="http://yandex.ru/yandsearch"></form>
            </div>
            <div class="layout__right">
                <div class="logo">
                    <div>
                        <div></div>
                        <div class="logo__slogan"><a href=index.php> Бургерные Москвы </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box__switcher"></div>
    </div>
    <style>

        a {
            color: black;
            text-decoration: none;
        }

        A:hover {
            color: black;
            text-decoration: none;
        }

        .goods__item  {
            width:100%;
        }









    </style>

    <?php


    $id = $_SERVER['REQUEST_URI'];
    $id = substr($id, 10);


    require_once 'bd.php';

    require_once 'Function.php';

    read_all($id,$link)



    ?>


    <div id="msgSubmit" class="h3 text-center hidden"></div>


    <div class="row">

        <div class="well" style="margin-top: 5%;">
            <h3>Ваше мнение</h3>
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="A" class="h4">Ваше имя</label>
                        <input type="text" class="form-control" id="A" placeholder="Гомер">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Почта</label>
                        <input type="text" class="form-control" id="D" placeholder="">

                    </div>


                    <div class="form-group col-sm-6">
                        <label for="B" class="h4">Оценка</label>
                        <select class="form-control" data-live-search="true" name="B" id="B">
                            <option value="1"> Ужасно (1 счастливый Гомер из 5)</option>
                            <option value="2"> Плохо (2 счастливых Гомера из 5)</option>
                            <option value="3"> Сойдет (3 счастливых Гомера из 5)</option>
                            <option value="4"> Годно (4 счастливых Гомера из 5)</option>
                            <option selected value="5"> Очень вкусно (5 счастливых Гомера из 5)</option>
                        </select>
                    </div>

                    <p><textarea rows="10" cols="2500000" id="text" class="form-control" name="text" size="150"
                                 style="width: 70%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"></textarea>
                    </p>


                </div>


                <input type="button" id="form-submit" class="btn btn-success btn-lg pull-right" value="Выcказаться">
                <div class="clearfix"></div>
            </form>


        </div>


        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

        <script type="text/javascript">


            $("#form-submit").bind("click", function (event) {

                var A = $("#A").val();
                var B = $("#B").val();
                var D = $("#D").val();
                var text = $("#text").val();
                var cafe_id = <?=$id?>;

                $.ajax({
                    type: "post",
                    url: "form-process.php",
                    data: "A=" + A + "&B=" + B + "&D=" + D
                    + "&cafe_id=" + cafe_id + '&text=' + text,
                    success: function (jsondata) {
                        $('.results').html('Автор = ' + jsondata.name + ', \n Nickname = ' + jsondata.nickname);
                    }


                })


            });

        </script>