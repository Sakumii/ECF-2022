
 <?php
        if(!isset($_SESSION['id'])){

        ?>
        <?php
        }else{
        ?>
                

<!--Stucture list section-->

<main class="columns section_container " id="mainContainer">
        <section class="column is-three-quarter structure_list">
            
            <h3 class="subtitle is-6">Liste des structures actives : </h3>
            <?php require_once('member.php');

            foreach($req_member as $rm){ ?>

            <ul class="columns">
                <li class="column"><?php 
                echo $rm['pseudo']; ?>
                <br>
                <?php
                echo $rm['mail']; ?></li>
        </ul> 
        <?php
        } ?>
           
            </section>

            <!-- <section class="column is-one-quarter structure_list">
                <h3 class="subtitle is-6">Liste des structures non actives : </h3>
                    <ul class="content">
                        <li><p>structure 1</p></li>
                        <li><p>structure 2</p></li>
                        <li><p>structure 3</p></li>
                        <li><p>structure 4</p></li>
                    </ul>
            </section> -->
    
<!--Option control container-->

    <section class="column is-one-quarter  Op_control_contain" id="right_controler">
        <ol class="content">
            <li><input type="checkbox" id="toggle1" name="toggle" class="switch">
                    <label for="toggle1" class="label"></label> NewsLetter</li>

            <li><input type="checkbox" id="toggle2" name="toggle" class="switch">
                    <label for="toggle2" class="label"></label> Gérer le planning des équipes</li>

            <li><input type="checkbox" id="toggle3" name="toggle" class="switch">
                    <label for="toggle3" class="label"></label> Crée des événements</li>

            <li><input type="checkbox" id="toggle4" name="toggle" class="switch">
                    <label for="toggle4" class="label"></label> Vendre des boissons et snacks</li>

            <li><input type="checkbox" id="toggle5" name="toggle" class="switch">
                    <label for="toggle5" class="label"></label> Promotion de la salle</li>
            <li><input type="checkbox" id="toggle6" name="toggle" class="switch">
                    <label for="toggle6" class="label"></label> Gestionnaire de planning de cour</li>
            <li><input type="checkbox" id="toggle7" name="toggle" class="switch">
        </ol>
        </div>
    </section>
    </main>

    <?php
        }
    ?>

