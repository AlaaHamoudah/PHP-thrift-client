 

/* call_server function send ajax requrest and pass parameters to php controllet 
 * method "post
 * data type :json 
 */
function call_server() {

    $.ajax({
        url: 'controller/client_ctrl.php', //path of thrift php code that interact with java server
        type: "POST",
        dataType: 'JSON',
        data: {
            'textToSwap': $('input[name=textToSwap]').val()},   // string to submit to be swapped
        success: function (response) {

            //parse response object
            if (response.status == 'success') {
                $('span.result').removeClass('error');
                $('span.result').html("Swapped text is: " + response.result);
            }
            else {  //error happened
                $('span.result').html("Oops something worng happened: " + response.message);
                $('span.result').addClass('error');

            }

        },
        error: function (xhr, status, error) {
            //error in ajax request
            // var err = eval("(" + xhr.responseText + ")");
            $('span.result').addClass('error');
            $('span.result').html("Oops something worng happened:: " + xhr.responseText);
        }
    });

}



/*
 * form validation script
 * */
(function ($) {

     
    //==================== [ Validate ] ==================  
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function (event) {
        event.preventDefault();
        var check = true;

         
        if (validate(input) == false) {  //empty field
            showValidate(input);
            check = false;
        }
     
        if (check) {  // non empty field
            call_server();
        } else
            return check;
    });


    function validate(input) {
        if ($(input).val().trim() == '') {
            return false;

        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }



})(jQuery);