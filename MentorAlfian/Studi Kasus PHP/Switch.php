<?php      

$gamenya = $_POST['game'] ?? '';

function phpswitch(){

        switch ($gamenya)  
        {     
            case 'Valorant':   
                $output = "Valorant";  
                break;  
           case 'ML':   
               $output = "Mobile Legend";  
                break;
           case 'CSGO':   
               $output = "CS:GO";  
                break;
          case 'EPEP':   
               $output = "EPEP";  
                break;
           default:   
               $output = "Tidak terdeteksi :( ";  
               break;  
        }
        return $output;

}
          
?> 

<!-- variabel mobil adalah pagani, dan cara pemaaahamanya seperti ni
 "switch mengambil isi dari variabel mobil, kemudian switch mengoprasikannya
  dengan menyocokan pada case yang ada di dalam switch tersebut " -->