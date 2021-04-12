<?php
require "2-check.php";
?>
<h3>Forgot Password</h3>
<p>Provide your email address</p>

<form action="reset-password.php" method="post">
<p>
<label>Email</label><br>
<input

<?php
if(isset($_SESSION['email'])){
 echo "value" . $_SESSION['email'];
}
?>
type="text" name="email"
/>
</p>
<p>
<button type="submit">Send Reset Code</button>
</p>

</form>