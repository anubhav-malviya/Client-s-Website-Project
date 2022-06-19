
<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<?php
    include ('header.php');
?>

<!--        <h1>Hello, --><?php //echo $_SESSION['name']; ?><!--</h1>-->
<!--        <h1>Hello, --><?php //echo $_SESSION['city_name']; ?><!--</h1>-->
<!--        <a href="logout.php"><button class="normal">Logout</button></a>-->

        <div class="add-detail-form">

            <form action="<?php printf('%s?city=%s', 'addDetail.php',  $_SESSION['city_name']); ?>" method="post">
                <label>नमस्ते, <?php echo $_SESSION['name']; ?> जी (<?php echo $_SESSION['city_name']; ?> शहर प्रमुख)</label>
<!--                <h4>नमस्ते, --><?php //echo $_SESSION['name']; ?><!-- जी</h4>-->
<!--                <h4>(--><?php //echo $_SESSION['city_name']; ?><!-- शहर प्रमुख)</h4>-->
                <h2>नयी जानकारी जोड़े</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['msg'])) { ?>
                    <p class="msg"><?php echo $_GET['msg']; ?></p>
                <?php } ?>
                <label>नाम</label>
                <input type="text" name="pname" placeholder="नाम"><br>

                <label>मोबाइल नंबर</label>
                <input type="tel" name="mobilenumber" placeholder="मोबाइल नंबर"><br>

                <label>पता</label>
                <input type="text" name="address" placeholder="पता"><br>

                <label>शहर</label><br>
                <label class="fixed"><?php echo $_SESSION['city_name']; ?></label><br>

                <button class="normal" type="submit">Submit</button>
            </form>
        </div>

<?php
    include ('footer.php');
?>


<?php
} else{
    header("Location: loginForm.php");
    exit();
}
?>
