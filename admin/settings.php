<?php
session_start();
include("../includes/auth.php");
require_role('admin');

$page_title="Settings";
include("../includes/header.php");
include("../includes/navbar.php");
?>
<main class="container card">
  <h2>Settings</h2>
  <p>welcome.</p>
</main>
<?php include("../includes/footer.php"); ?>