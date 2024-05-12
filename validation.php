<!DOCTYPE html>
<html>

<head>
<title></title>
</head>

<body>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() 
{

    //name validation
    $("#inputTextBox").keypress(function(event) 
    {
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) 
        {
            event.preventDefault();
            //  method stops the default action of an element from happening. 
        }
    });


    $("#inputTextBox2").keypress(function(event) 
    {
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) 
        {
            event.preventDefault();
            //  method stops the default action of an element from happening. 
        }
    });

    ///email
    $('input[type=email]').on('keypress', function(e) 
    {
        var re = /[A-Z0-9a-z@\._]/.test(e.key);
        if (!re) 
        {
            return false;
        }
    });

    //phone number

    $('#Number').keypress(function(event) 
    {
        var keycode = event.which;
        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) 
        {
            event.preventDefault();
        }
    });

});
</script>