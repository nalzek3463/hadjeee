<?php
    $brojStranica = ceil($totalProizvoda / $proizvodaPoStranici);
    for ($i = 1; $i <= $brojStranica; $i++) {
        echo "<li class='page-item" . ($trenutnaStranica == $i ? ' active' : '') . "'>";
        echo "<a class='page-link' href='?page=$i'>$i</a>";
        echo "</li>";
    }
?>