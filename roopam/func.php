<?php
class seeker{
    function slist(){
    $sql=mysql_query("select * from category");
        echo '<option>Choose an option</option>';  
        while($result=mysql_fetch_assoc($sql)){
         echo '<option>'.$result['category_name'].'</option>';    
        }
    }

   function profile($k){   
    $sql=mysql_query("select * from register_emp where email='$k'");
    $res=mysql_fetch_assoc($sql);
    echo '<img style="margin-top:80px;height:150px;width:170px" src="uploads/'.$res['picture'].'"/>';        
    echo '<table width="65%" style="font-family:\'Comfortaa\', cursive;margin-top:70px;float:right;"><tr><td><label>Name : </td><td>'.$res['firstname'].' '.$res['lastname'].'</label></td></tr><tr><td>';
    echo '<label>City : </td><td>'.$res['city'].'</label></td></tr>';   
    echo '<tr><td><label>Experience : </td><td>'.$res['experience'].'</label></td></tr>';
    echo '<tr><td><label>Userlevel : </td><td>A'.$res['userlevel'].'</label></td></tr>';
       if($res['jobready']==0){
       $v='No';
       }
       else{
       $v='Yes';
       }
    echo '<tr><td><label>Job Ready : </td><td>'.$v.'</label></td></tr>';
    echo '<tr><td><label>About : </td><td>'.$res['aboutme'].'</label></td></tr>';
    echo '<tr><td><label>Contact : </td><td>'.$res['phone'].'</label></td></tr>';
    echo '<tr><td><label>Email : </td><td>'.$res['email'].'</label></td></tr>';
    }  

    function lists($p,$q,$r){
    echo '<td><a href="#text" data-rel="popup">'.$p.'  '.$q.'</a>  </td>';  
    echo '<div data-role="popup" id="text" class="form-group" style="width:800px;height:400px;margin-top:2%px;margin-left:5%">';
    $a=new seeker();
    $a->profile($r); 
    }
}
?>
