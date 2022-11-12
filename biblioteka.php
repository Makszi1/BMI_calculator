<html lang="pl">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
<title>Kalkulator BMI</title>
</head>
<body>
        <?php
            //walidacja wprowadzanych danych
            $x = 1;
            $y = 1000;
            if(empty($_POST['waga'])){
                echo"<div id='arg_wys'><a>Wpisałeś niepoprawne dane </a>
                <br><br><br> <br><br><br>
                <a class='pow' href='index.html'>powrót</a></div>";
                exit();
            }

            if(empty($_POST['wzrost'])){
                echo"<div id='arg_wys'><a>Wpisałeś niepoprawne dane </a>
                <br><br><br> <br><br><br>
                <a class='pow' href='index.html'>powrót</a></div>";
                exit();
            }

            if($_POST['waga']<$x || $_POST['wzrost']<$x){
                echo"<div id='arg_wys'><a>Wpisałeś niepoprawne dane </a>
                <br><br><br> <br><br><br>
                <a class='pow' href='index.html'>powrót</a></div>";
                exit();
            }
            if($_POST['waga']>$y || $_POST['wzrost']>$y){
                echo"<div id='arg_wys'><a>Wpisałeś niepoprawne dane </a>
                <br><br><br> <br><br><br>
                <a class='pow' href='index.html'>powrót</a></div>";
                exit();
            }
            
            
                //obliczanie BMI



        $wzrost = $_POST['wzrost'];
        $waga = $_POST['waga'];	
        $wzrost_p = $wzrost * $wzrost;
        $wzrost_k = $wzrost_p + 0;
        $waga_k = $waga * 10000;
        $wynik = $waga_k / $wzrost_k;
        ?>

            <!-- wyswietlanie wynikow -->
                
        <p class="powitanie"> <b>Witam w kalkulatorze BMI</b>!</p>
        
    <div id="arg_wys">
        
          
    <?php 
        echo "Wzrost wynosi: &nbsp;&nbsp;".$wzrost."m"."<br>"."Twoja waga to:&nbsp;&nbsp;".$waga."kg";
        echo"<br>";
        echo"twoje BMI:&nbsp;&nbsp;";
        echo round($wynik, 2);
    
    echo"<br><br>";
        if($wynik<18.5){
                            echo"Na podstawie twojego BMI można stwierdzić że masz niedowagę";       
         }
          if($wynik>18.51&$wynik<24.99){
            echo"Na podstawie twojego BMI można stwierdzić że masz prawidłową wagę";       
         }
    if($wynik>25){
    echo"Na podstawie twojego BMI można stwierdzić że masz nadwagę";       
         }

          ?>
       <br> <br><br><br>
        <a class="pow" href="index.html">powrót</a>
</div>








</body>

</html>