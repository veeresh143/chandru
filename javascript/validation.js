
          var reg = /^[a-zA-Z]+$/;

function is_valid_char(textField)
{

if(!reg.test(textField.value))
{

alert("Please enter characters only");

textField.value="";

textField.focus();

return false;

}

}
 var reg1 = /^[0-9]+$/;

function is_valid_numbers(textField)
{

if(!reg1.test(textField.value))
{

alert("Please enter numbers only");

textField.value="";

textField.focus();

return false;

}

}