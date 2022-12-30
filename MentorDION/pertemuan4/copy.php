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

    <button class="tambah">Tambah</button>
    <button class="kurang" >Kurang</button>
</div>
<div>

    <input type="submit" class="tambahfilter" value="Tambah Filter">
    <input type="submit" class="kurangifilter" value="Kurangi FIlter"
    onclick="kurangifilter()">
</div>
          
    
    <form action="tambahfilterpengurutangka.php" method="post">

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
              


                <tr id ="lll">
                    <td id="tbhkrgfilter" >

                <div id="tempatfilter">
                    <div>
                        <input type="checkbox" name="cekkotak[]" id="cekkotakk" value="dicek">
                        <label for="cekkotakk" id="idlabel">Filter tampil hanya yang</label>
                        <select name="pilihfilter" id="selectid" >
                            <option  value="lebihbesardari">></option>
                            <option   value="lebihkecildari"><</option>
                        </select>
                        <input type="number" name="angkafilter[]">
                    </div>
                </div>

                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" name="cekawali" id="cekawali">
                        <label for="cekawali" id="ckawali">Awali dengan kata: </label>
                        <input type="text" name="awalidengan">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" name="cekgabung" id="cekgabung">
                        <label for="cekgabung" id="ckgabung">Gabungkan dengan pemisah: </label>
                        <input type="text" name="pemisah" id="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="proses">
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


//------------------

        var tbhfilter = document.querySelector(".tambahfilter");
        tbhfilter.addEventListener("click", tambahfilter);
        
        var krgfilter = document.querySelector(".kurangifilter");
        krgfilter.addEventListener("click", kurangfilter);

        function tambahfilter(){
            var barisfilter= document.getElementById('tbhkrgfilter');

            //cekbok
            var cekboxfilter = document.createElement('input');
            cekboxfilter.setAttribute("name", "cekkotak[]");
            cekboxfilter.setAttribute("type", "checkbox");
            
            //label
            var labelfilter = document.createElement('label');
            var textlabelfilter = document.createTextNode("Filter tampil hanya yang ");
            labelfilter.setAttribute("for", "cekkotakk");
            labelfilter.appendChild(textlabelfilter);

            //optionfilter
            var filter = document.createElement('select');
            filter.setAttribute("name", "pilihfilter[]");
            filter.setAttribute("id", "selectid[]");
            
            var option1 = document.createElement('option');
            option1.setAttribute("value", "lebihbesardari");
            option1.setAttribute("id", "value1");
            var textoption1 = document.createTextNode(">")
            option1.appendChild(textoption1);
            

            var option2 = document.createElement('option');
            option2.setAttribute("value", "lebihkecildari");
            option2.setAttribute("id", "value2");
            var textoption2 = document.createTextNode("<")
            option2.appendChild(textoption2);
            
            filter.appendChild(option1);
            filter.appendChild(option2);

            //inputfilter
            var inputfilter = document.createElement('input');
            kolominput.setAttribute("type", "number");
            inputfilter.setAttribute("name", "angkafilter[]");


            barisfilter.appendChild(cekboxfilter);//tambahinputcekbok
            barisfilter.appendChild(labelfilter);//tambahlabelcekbok
            barisfilter.appendChild(filter);//tambahselectoption
            barisfilter.appendChild(inputfilter);//tambahinputfilter

        }

        function kurangfilter(parent){
            // var $filter= document.getElementById('selectid[]');
            // var barisfilter= document.querySelector('#tbhkrgfilter');
            // barisfilter.removeChild(barisfilter.lastChild);
            // var cekboxfilter= document.querySelector('#cekkotakk');

            // barisfilter.removeChild(cekboxfilter.lastChild);
            // while (barisfilter.lastChild) {
            //     barisfilter.removeChild(barisfilter.lastChild);
            // }
            var kurangFTR = document.getElementById("tempatfilter");
            kureangFTR.remove;
        }

        // function kurangF() {
            
        // }



        

        
    </script>





</body>
</html>
<?php



if (isset($_POST['urutkan'])){

    $hasilinput = $_POST['inputangka'];
    $hasilurutan = $_POST['urutan'];
    
    $cekkotak = $_POST['cekkotak'] ??"";
    $pilihfilter = $_POST['pilihfilter']??"";
    $angkafilter = $_POST['angkafilter']??"";
    $cekawali = $_POST['cekawali']??"";
    $awalidengan = $_POST['awalidengan']??"";
    $cekgabung = $_POST['cekgabung']??"";
    $pemisah = $_POST['pemisah']??"";

    // if ($hasilurutan === "kecil-besar" ){
    //     sort($hasilinput);
        
    // }else{
    //         rsort($hasilinput);
    //     }

    //     foreach ($hasilinput as $angkanya){

    //         print_r ($angkanya);
           
    //     }

    if ($cekkotak){
        echo "ini if benar ";
        foreach ($angkafilter as $akf){

            echo $akf;
        }

            if ($pilihfilter === "lebihbesardari" ){
                echo "pilih lebih besar";
            }else{
                echo"pilih lebih kecil";
            }
        }else{
            echo " kosong";
        }
    
    echo"<br>";

    if($cekawali){
        
        $awalicek = $awalidengan;
        // foreach ($hasilinput as $angkanya){

        //         //     $hasil = $awalidengan . $angkanya;
        //         //    echo $hasil;
        //         }
        
    }else{
        echo"ga cek";
    }
    echo"<br>";

    if($cekgabung){
        // $ppp= implode($pemisah, $hasilinput);
        // echo "jalo";

        foreach ($hasilinput as $angkanya){


            
            $gabung = $awalidengan. $pemisah . $angkanya;
           echo $gabung;
        }
        // echo $ppp;
    }else{
        echo"ga cekgabung";
    }
    
    echo"<br>";


   
    
    
      }



?>