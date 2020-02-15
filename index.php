<?php

$code = array('.----', '..---', '...--', '....-', '.....', '-....', '--...', '---..', '----.', '-----');

$dig = array(1,2,3,4,5,6,7,8,9,0);


echo "<input type='text' name='digs' id='digs'>";
echo "<input type='button' value='Generte' onclick='clicked()'>";

?>

<script>
    const comma = ',';
    const rep = ' ';
    function clicked(){
        var val = document.getElementById('digs').value.toUpperCase();
        
        var dig = ["1","2","3","4","5","6","7","8","9","0","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        
        var code = ['.----', '..---', '...--', '....-', '.....', '-....', '--...', '---..', '----.', '-----', '.-', '-...', '-.-.', '-..', '.', '..-.', '--.', '....', '..', '.---', '-.-', '.-..', '--', '-.', '---', '.--.', '--.-', '.-.', '...', '-', '..-', '...-', '.--', '-..-', '-.--', '--..'];
        
        var val_arr = val.split('');
        var fin_arr = [];
        
        for(var i = 0; i < val_arr.length; i++){
            
            //concat(code[dig.indexOf(val_arr[i])]);
            var fin = '';
            console.log(fin.concat(code[dig.indexOf(val_arr[i])]));
            fin_arr.push(code[dig.indexOf(val_arr[i])]);
        }
       var fin_str = fin_arr.toString();
        
        var final = fin_str.replace(/,/g, " ");
        alert(final);
        //alert(code[dig.indexOf(val)]);
    }
    
</script>