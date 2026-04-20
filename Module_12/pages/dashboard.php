<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Loaction: login.php");
    exit();
}
?>

<?php include '../includes/header.php'; ?>

<div class="container mt-5">
    <h2>Welcome, <?php echo $_SESSION['user']; ?> !!! </h2>
</div>

<?php include '../includes/footer.php'; ?>
