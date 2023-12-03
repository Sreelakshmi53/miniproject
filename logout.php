<SCRIPT LANGUAGE="javascript">
//clears browser history and redirects url
function ClearHistory()
{
     var backlen = history.length;
     history.go(-backlen);
     window.location.href=login.php;
}
</SCRIPT>