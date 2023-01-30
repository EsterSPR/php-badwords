<?php
    $bigtext = $_POST['bigtext']; 
    $badword = $_POST['badword']; 

    echo $bigtext."<br/><br/>";
    echo "Il testo è lungo ".strlen($bigtext)." caratteri <br/><br/><hr/>";

    $bigtext_censored = str_replace($badword, '***', $bigtext);
    echo "<br/>".$bigtext_censored."<br/><br/>";
    echo "Il testo <u>censurato</u> è lungo ".strlen($bigtext_censored)." caratteri";
?>