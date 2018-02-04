<script LANGUAGE="JavaScript">
    function RedirectionJavascript(){
        document.location.href="location:connexion.php";
    }
</script>


<?php
    if (!(isset($_SESSION['pseudo']))) {
        header("location:connexion.php");
        ?>
        <script LANGUAGE="JavaScript">
            RedirectionJavascript()';
            </script>
<?php
    }
?>

