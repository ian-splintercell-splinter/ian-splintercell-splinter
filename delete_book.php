<?php

// include function files for this application
require_once('book_sc_fns.php');
session_start();

do_html_header("Deleting product");
if (check_admin_user()) {
  if (isset($_POST['isbn'])) {
    $isbn = $_POST['isbn'];
    if(delete_book($isbn)) {
      echo "<p>Product ".$isbn." was deleted.</p>";
    } else {
      echo "<p>Product ".$isbn." could not be deleted.</p>";
    }
  } else {
    echo "<p>We need an Product Code to delete a product.  Please try again.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorised to view this page.</p>";
}

do_html_footer();

?>
