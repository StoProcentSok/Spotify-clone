<?php include("includes/header.php") ?>
<h1 class="pageHeadingBig">You Might Also Like</h1>
<div class="gridViewContainer">
    <?php 
        $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");
        while($row = mysqli_fetch_array($albumQuery)){ //zmianna wartosci zmiennej $row na kazdy element z selecta po kolei
            
            echo "<div class='gridViewItem'>
                <a href='album.php?id=".$row['id']/*przekazanie parametru albumu w linku strony*/ ."'>
                    <img src=". $row['artworkPath'] ."> 

                    <div class='gridViewInfo'>"
                        . $row['title'] .
                    "</div>
                </a>
            </div>"; //lacenie dwochs trinogw z kodu php . . ; 
        }
    ?>
</div>

<?php include("includes/footer.php") ?>

              