function Compare_pass ()
{
if ((document.getElementById("password").value) != (document.getElementById("repeat_pass").value))
{alert ('Пароли не совпадают! Будьте внимательнее');
document.getElementById('repeat_pass').value = ' ';
}
}