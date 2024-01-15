<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Todo</title>
</head>
<body>
    <div class="container">
        <h1>Edit Todo</h1>

        <form action="<?= base_url('update-todo/' . $todo->id) ?>" method="post">
            <div class="mb-3">
                <label for="todo" class="form-label">Edit Todo</label>
                <input type="text" name="todo" class="form-control" id="todo" value="<?= $todo->todo ?>">
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Edit Deadline</label>
                <input type="date" name="deadline" class="form-control" id="deadline" value="<?= $todo->deadline ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
