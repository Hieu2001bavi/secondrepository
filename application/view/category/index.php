<h1>Category</h1>
<table width='500'>
    <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Status</th>
        <th>Date</th>
        <th>#</th>
    </tr>
    <?php foreach ($cats as $cat) { ?>
        <tr>
            <td><?php echo $cat->cat_id ?></td>
            <td><?php echo $cat->cat_name ?></td>
            <td><?php echo ($cat->status)?"Hiển thị":"Ẩn" ?></td>
            <td><?php echo date("d-m-Y",strtotime($cat->date_create)) ?></td>
            <td></td>
        </tr>
    <?php } ?>
</table>