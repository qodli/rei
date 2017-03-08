
$(document).ready(function(){
	
	$(".input").keyup(function () {
		if ($(this).val().length >= 4){
    		$(this).css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
    	}else{
    		$(this).css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
    	}
	});

	// $(".email").keyup(function () {
	// 	var email = $(this).val();
	// 	if (isValidEmailAddress(email)){	
 //        	$.ajax({
 //                type: "POST",
 //                url: "http://pendaftaran.anggota-rei.com/validation",
 //                data: "email=" + $(".email").val(),
 //                success: function (msg) {
 //                    if (msg == "true"){
 //                        $(".email").css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
 //                    }else{
 //                        $(".email").css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
 //                    }
 //                }
 //            });
 //        }else{
 //            $(this).css({ "background": "#fff url('./assets/img/no.png')  98% 13px no-repeat" });
 //        }
	// });

    $(".email").keyup(function () {
        if ($(this).val().length >= 10){
            $(this).css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
        }else{
            $(this).css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
        }
    });    

	function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }


    $(".password").keyup(function () {
        if ($(".con_password").val().length >= 4){
            if ($(".con_password").val() != $(".password").val()){
                $(".con_password").css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
                $(".password").css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
                pwd = false;
                register_show();
            }else{
                $(".con_password").css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
                $(".password").css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
            }
        }
    });


    $(".con_password").keyup(function () {

    if ($(".password").val().length >= 4)
    {
        if ($(".con_password").val() != $(".password").val())
        {
            $(".con_password").css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
            $(".password").css({ "background": "#fff url('./assets/img/no.png') 98% 13px no-repeat" });
            pwd = false;
            register_show();
        }
        else {
            $(".con_password").css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });
            $(".password").css({ "background": "#fff url('./assets/img/yes.png') 98% 13px no-repeat" });

        }
    }
});

});
