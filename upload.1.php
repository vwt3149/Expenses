<?php session_start(); ?>
<?php include'functions/queries.php'; ?>
<?php include'functions/functions.php'; ?>
<?php






$journalID = $_POST["journal_id"];
$img = $_FILES["fileToUpload"]["name"];
if ($_POST["btn_del"]) {
   
    echo $journalID;
    
    deleteJournal($link,$journalID);
}
elseif ($_POST["btn_edit"]) {
    # code...
}
elseif ($_POST["btn_add"]) {
    
    uploadEditAddJournal(addImageJournal($link,$journalID,$img));
}



?>