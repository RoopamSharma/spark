<?php
if (isset($_POST['submit']))
{
    $time = $_POST['time'];
    $min_time=floor($time/60);
    ?>
    <div id="countdown"></div>
    <script type="text/javascript">

        var iTime = <?php echo gmdate("H:i:s",$min_time); ?>;
        function countdown()
        {                
            var i = setInterval(function(){
                document.getElementById("countdown").innerHTML = iTime;
                if(iTime==0){
                    alert('Countdown timer finished!');
                    clearInterval(i);
                } else {
                    iTime--;
                }                   
            },1000);                        
        }           
        countdown();
    </script>
    <?php
} else {
    ?>
    <form name="test" method="post">
        Enter time: <input type="text" name="time" />
        <input type="submit" name="submit" value="Submit" />
    </form>        
    <?php
}
 ?>