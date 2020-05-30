<?php 
    session_start();
    include("../../includes/header.php");
    if(isset($_SESSION['status'])){
        if($_SESSION['status']=false){
            header("LOCATION: ../../");
        } 
    }else{
        header("LOCATION: ../../");
    }

?>

<body onload="clickl()">

    <div class="ui grid stackable">
        <?php 
            include("../../includes/menu.php");
        ?>

        <div class="ui thirteen wide column center aligned" style="margin-top: 100px;">
            <h2 class="ui blue image header">
                Bienvenue <span class="greating"><?php echo $_SESSION['login'] ?></span>
                <br>
                <br>
                <img src="../../images/workspace1_122059.png" style="width:200px;" class="image">
            </h2>
            <div class="content">Specifier votre choix en cliquant sur l'un des deux boutons ci-dessous</div>
            <div class="ui two column stackable center aligned grid segment">
                <div class="column">
                    <div class="ui button blue">Gerer les documents</div>
                </div>
                <div class="ui vertical divider">ou</div>
                <div class="column">
                    <div class="teal ui button ">Gerer les clients</div>
                </div>
            </div>
        </div>
        <?php 
                include("../../includes/footer.php");
            ?>

        <script>
            function offer() {
                xhttp = new XMLHttpRequest();
                xhttp.open("GET", "../traitements/eteindre.php", true);
                xhttp.send();
            }
            function clickl() {

                var menu = document.getElementById('mainmenu');
                menu.style.minHeight = screen.height;
            }
        </script>
</body>