<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h4 class="mb-0 text-primary">User Management</h4>
                <a href="ajouter_user.php" class="btn btn-primary">Add New User</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Created At</th>
                                <th class="text-center px-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['full_name'] ?? ''); ?></td>
                                <td><?php echo htmlspecialchars($row['email'] ?? ''); ?></td>
                                <td><span class="badge bg-secondary"><?php echo htmlspecialchars($row['Age'] ?? ''); ?></span></td>
                                <td><small class="text-muted"><?php echo htmlspecialchars($row['Created_User_at'] ?? ''); ?></small></td>
                                <td class="text-center px-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>