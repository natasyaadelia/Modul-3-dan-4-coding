<?php
        if(isset($_POST['submit'])){
            $Panjang   =$_POST['panjang'];
            $Lebarr  =$_POST['lebar'];
            
            $luas = $Panjang * $Lebarr;
            $keliling = 2*($Panjang+$Lebarr);

            echo "Hasil <br />";
            echo "Diketahui: <br />";
            echo "Panjang = $Panjang<br />";
            echo "Lebar = $Lebarr<br />";
            echo "Maka luas = [ $Panjang x $Lebarr ] = $luas<br />";
            echo "Maka keliling = [ 2 x $Panjang + $Lebarr ] = $keliling";
         }
    ?>