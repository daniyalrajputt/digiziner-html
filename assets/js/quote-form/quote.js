$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#form-quote').validator();


    // when the form is submitted
    $('#form-quote').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "quote.php";


            let input = document.querySelector(".input");
            let button = document.querySelector(".btn-next");
            button.disabled = true;
            input.addEventListener("change", stateHandle);
            
            function stateHandle() {
                if(document.querySelector(".input").value === "") {
                    button.disabled = true;
                } else {
                    button.disabled = false;
                }
            }
            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    // data = JSON object that contact.php returns

                    // we recieve the type of the message: success x danger and apply it to the 
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#form-quote').find('.messages').html(alertBox);
                        // empty the form
                        $('#form-quote')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});