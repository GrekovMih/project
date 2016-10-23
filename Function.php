<?php

    function read_all($id,$link)
    {
        if (empty($id)){
            $sql_select = "SELECT cafe.id, name, a, cafe.text,   AVG(ocenka) FROM cafe LEFT JOIN  comments
                           on cafe.id=cafe_id
                           GROUP BY cafe_id
                           ORDER BY AVG(ocenka)  DESC";

        }   else {
            $sql_select = "SELECT cafe.id, name, a, cafe.text,   AVG(ocenka)  FROM   cafe LEFT JOIN  comments
                           on cafe.id=cafe_id
                           WHERE cafe.id=$id";

                }


      /*  $sql_select = "SELECT cafe.id, name, a, cafe.text,   AVG(ocenka) FROM cafe LEFT JOIN  comments
                           on cafe.id=cafe_id
                           GROUP BY cafe_id
                           ORDER BY AVG(ocenka)  DESC"; */
        $result = mysqli_query($link, $sql_select) or die("������ " . mysqli_error($link));
        $row = mysqli_fetch_array($result);

        do {
            $id = $row['id'];
            $name = $row['name'];
            $text = $row['AVG(ocenka)'];
            $text = round($text, 2);;
            $a = $row['a'];

           echo "
                <li class='goods__item' >
                <h3>    $name  </h3>

                <span class='goods__price'><a href=id$id class='link link__control goods__link i-bem data-bem'='{link:{}}' role='link' tabindex='0'>
                 $text
                </a></span>
                <div class=goods__adress>$a</div></li>
          ";

          /*  echo "
                <ul class='goods' ><li class='goods__item2 box'><h3 class='goods__title'>  $name

                <span class='goods__price'><a href=id$id class='link link__control goods__link i-bem data-bem'='{link:{}}' role='link' tabindex='0'>
                     $text
                </a></span>


<div class=goods__adress>$a</div></li>
          ";
*/
        } while ($row = mysqli_fetch_array($result));
        mysqli_close($link);

    }



