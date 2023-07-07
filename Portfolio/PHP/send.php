<?php
// controlli
$error = false;
if(!isset($_POST['email']) || empty($_POST['email'])){
    $error = true;
}
if(!isset($_POST['object']) || empty($_POST['object'])){
    $error = true;
}
if(!isset($_POST['message']) || empty($_POST['message'])){
    $error = true;
}

if($error){
    echo "alcuni campi obbligatori non sono stati compilati";
    exit();
}

$result = mail ("inapeppe02@gmail.com", $_POST['object'], $_POST['message'],  "FROM: $_POST[email]");

if($result)
echo '<script type="text/javascript">
alert("Email inviata con successo")
window.location= "elements.html"
</script>';
else
echo '<script type="text/javascript">
alert("Ops abbiamo riscontrato un problema. Riprova!")
window.location= "elements.html"
</script>';