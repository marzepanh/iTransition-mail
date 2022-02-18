$(document).ready(function(){

    setTimeout(showMess, 100);
    setInterval(showMess, 5000);

    function showMess(){
        $.ajax({
            type:"POST",
            url:"vendor/show.php",
            success:function(html){
                $('#messages').html(html);
            }
        });
    }
}); 