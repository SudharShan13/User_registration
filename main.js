$("#username").on("change", function () {
    console.log($(this).val());
    $.ajax({
        type: "POST",
        dataType: "json",
        data: {username : $(this).val()},
        url: 'usernamecomp.php',
        success: function(data) {
        if(data){
            console.log(data);
            alert("UserRegistered");
        }
        
        }
    });
});