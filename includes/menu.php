
        <div class="ui menu two wide column inverted vertical dark top fixed" style=";z-index:10203;padding:60px 10px;" id="mainmenu">
            <div class="ui container" style="position:sticky; top:0px;">
                <a href="index.php" class="<?php echo  $index=="index"?"active":''; ?> item teal">Acceuil</a>
                <a href="documents.php" class="item teal <?php echo $index=="documents"?"active":''; ?>"> Documents</a>
                <a href="clients.php" class="<?php echo $index=="clients"?"active":''; ?> item teal">Clients</a>
                <div class="item teal">
                    <a href="../traitements/deconnexion.php" class="ui primary button"><i
                            class="ui log out icon"></i>Deconnexion</a>
                </div>
                <div class="item teal">
                    <a href="#" onclick="offer()" class="ui button red"><i
                            class="ui shutdown icon"></i> Eteindre</a>
                </div>
            </div>
        </div>
