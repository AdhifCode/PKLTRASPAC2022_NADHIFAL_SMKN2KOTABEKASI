<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sistem pengurut angka super sederhana</h1>
<div>

    <button class="tambah">Tambah Kolom</button>
    <button class="kurang" >Kurang Kolom</button>
</div>
    
    <form action="urutangka.php" method="post">

            <table>
                
                <tr>
                    <td id="kolom">
                        <input type="number" id="kolominput" name="inputangka[]">
                    </td>
                </tr>
                <tr>
                    <td>
                    <select name="urutan" id="pilihan">
                        <option value="kecil-besar">kecil-besar</option>
                        <option value="besar-kecil">besar-kecil</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="urutkan">
                    </td>
                </tr>
            </table>
    </form>


    <script>
        var kliktambah = document.querySelector(".tambah");
        kliktambah.addEventListener("click", tambah);

        var klikkurang = document.querySelector(".kurang");
        klikkurang.addEventListener("click", kurang)

        function tambah(){
            var kolom= document.getElementById('kolom');
            var kolominput = document.createElement('input');
            kolominput.setAttribute("type", "number");
            kolominput.setAttribute("name", "inputangka[]");

            kolom.appendChild(kolominput);
        }
        function kurang(){
        
            var kolom= document.getElementById('kolom');
  
            
            kolom.removeChild(kolom.lastChild);
        }

        

        
    </script>





</body>
</html>
<?php
if (isset($_POST['urutkan'])){

    $hasilinput = $_POST['inputangka'];
    $hasilurutan = $_POST['urutan'];
    
    if ($hasilurutan === "kecil-besar" ){
        sort($hasilinput);

        }else{
            rsort($hasilinput);
        }

        foreach ($hasilinput as $hi){

            print_r ($hi);
           
        }
    
      }

?>