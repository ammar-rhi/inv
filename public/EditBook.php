<form method="POST" action="includes/EditBook.inc.php" enctype="multipart/form-data">
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['phone'] ?> " name="phone" />
    </div>
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['first_name'] ?>" name="first_name" />
    </div>
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['last_name'] ?>" name="last_name" />
    </div>
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['company'] ?>" name="company" />
    </div>
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['b_add'] ?>" name="b_add" />
    </div>
    <div class="form-group my-3">
        <input type="text" class="form-control" value="<?php echo $row['gstin'] ?>" name="gstin" />
    </div>


    <div class="mb-3">
        <label for="file" class="form-label">Upload pdf or docx format book document</label>
        <input class="form-control" type="file" name="file" value="<?php echo $row['filename'] ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <input type="hidden" name="prevfile" value="<?php echo $row['filename']; ?>" />
    <button type="submit" name="submit" class="btn my-3 fs-5 px-4" style="background: #068a9c;">Submit</button>
</form>