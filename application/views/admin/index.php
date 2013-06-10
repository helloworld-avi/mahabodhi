<form name="admin_login_form" method="post" action="<?php echo base_url('admin/login'); ?>">
    <label for="adminname">Admin Name:</label>
    <input type="text" name="admin_name"/><br/>
    <label for="password">Password:</label>
    <input type="password" name="password"/><br/>
    <input type="submit" name="admin_login_submit" value="Submit"/>
</form>
<?php
print_r($session);
?>