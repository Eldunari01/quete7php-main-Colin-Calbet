<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php') ?>
</head>

<body>
    <header>
        <?php include('include/header.php') ?>
    </header> 

    <!-- TEMPERATURES -->
    <?php include('include/temp.php'); ?>

    <section>

        <!-- CARTE -->
        <img class="map" src="img/carte.png" alt="">

        <!-- TEMPERATURES -->
        <?php 
            if(isset($T)){

                // NORD
                $tempN = array(
                    "<div class = 'haut'> $T[0]</div>",
                    "<div class = 'bas'> $T[1] </div>",
                    "<div class = 'gauche'> $T[2] </div>",
                    "<div class = 'droite'> $T[3] </div>",
                );

                // SUD
                $tempS = array(
                    "<div class = 'haut'> $T[4] </div>",
                    "<div class = 'bas'> $T[5] </div>",
                    "<div class = 'gauche'> $T[6] </div>",
                    "<div class = 'droite'> $T[7] </div>"
                );

                // OUEST
                $tempO = array(
                    "<div class = 'haut'> $T[8] </div>",
                    "<div class = 'bas'> $T[9] </div>",
                    "<div class = 'gauche'> $T[10] </div>",
                    "<div class = 'droite'> $T[11] </div>"
                );

                // EST
                $tempE = array(
                    "<div class = 'haut'> $T[12] </div>",
                    "<div class = 'bas'> $T[13] </div>",
                    "<div class = 'gauche'> $T[14] </div>",
                    "<div class = 'droite'> $T[15] </div>"
                );    
            }                         
        ?>

        <!-- NEWS -->
        <?php
        
        $orage = 'img/orage.png';
        $tornade = 'img/tornado.png';
        $metorite = 'img/meteorite.png';
        $ovni = 'img/ufo.png';

        function nord($nord){
            if($nord[0] == 1){
                // echo '<img src="./img/linkedin.png" alt="">';
                echo '<img src="img/orage.png" alt="">';
            }
            if($nord[1] == 1){
                echo '<img src="img/tornado.png" alt="">';
            }
            if($nord[2] == 1){
                echo '<img src="img/meteorite.png" alt="">';
            }
            if($nord[3] == 1){
                echo '<img src="img/ufo.png" alt="">';
            }
        }

        function sud($sud){
            if($sud[0] == 1){
                echo '<img src="img/orage.png" alt="">';
            }
            if($sud[1] == 1){
                echo '<img src="img/tornado.png" alt="">';
            }
            if($sud[2] == 1){
                echo '<img src="img/meteorite.png" alt="">';
            }
            if($sud[3] == 1){
                echo '<img src="img/ufo.png" alt="">';
            }
        }

        function ouest($ouest){
            if($ouest[0] == 1){
                echo '<img src="img/orage.png" alt="">';
            }
            if($ouest[1] == 1){
                echo '<img src="img/tornado.png" alt="">';
            }
            if($ouest[2] == 1){
                echo '<img src="img/meteorite.png" alt="">';
            }
            if($ouest[3] == 1){
                echo '<img src="img/ufo.png" alt="">';
            }
        }

        function est($est){
            if($est[0] == 1){
                echo '<img src="img/orage.png" alt="">';
            }
            if($est[1] == 1){
                echo '<img src="img/tornado.png" alt="">';
            }
            if($est[2] == 1){
                echo '<img src="img/meteorite.png" alt="">';
            }
            if($est[3] == 1){
                echo '<img src="img/ufo.png" alt="">';
            }
        }

        ?>

        <!-- NORD -->
        <div class="nord">
            <?php
                if(isset($tempN)){
                    foreach($tempN as $clef => $valeur){
                    echo $valeur;
                    }
                }

                nord($nord);
            ?>
        </div>

        <!-- SUD -->
        <div class="sud">
            <?php
                if(isset($tempS)){
                    foreach($tempS as $clef => $valeur){
                    echo $valeur;
                    }
                }

                sud($sud);
            ?>
        </div>

        <!-- OUEST -->
        <div class="ouest">
            <?php
                if(isset($tempO)){
                    foreach($tempO as $clef => $valeur){
                    echo $valeur;
                    }
                }

                ouest($ouest);
            ?>
        </div>

        <!-- EST -->
        <div class="est">
            <?php
                if(isset($tempE)){
                    foreach($tempE as $clef => $valeur){
                    echo $valeur;
                    }
                }

                est($est);
            ?>
        </div>

    </section>
    
    <?php include('include/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>