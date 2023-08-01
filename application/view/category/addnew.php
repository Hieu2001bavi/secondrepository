<form action="<?php echo URL; ?>category/addcat" method="post">
    <label>Category Name</label>
    <input type="text" name="cat_name" value="" required />
    <label>Status</label>
    <input type="checkbox" name="status" value="1" />
    <input type="submit" name="addnew" value="Submit" />
</form>