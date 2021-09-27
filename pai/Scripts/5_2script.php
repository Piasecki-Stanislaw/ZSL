<?php
//print_r ($_POST);
if(!empty($_POST['name']) && !empty($_POST['figura'])){
    switch ($_POST['figura'])   {
        case 'kwadrat';
            header('location: ./Square.php');
        break;
        
        case 'prostokat';
        header('location: ./Rectangle.php');
        break;
    }
}
else {
?>
<script>
    history.back();
</script>
<?php
}
?>