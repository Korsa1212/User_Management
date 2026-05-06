<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h4 class="mb-0 text-primary text-center">Create Account</h4>
                    </div>
                    <div class="card-body p-4">
                        
                        <!-- Display the error nicely if it exists -->
                        <?php if(!empty($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($error); ?>
                            </div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="nom" placeholder="John Doe">
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="motdepasse" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="motdepasse" placeholder="Min 8 characters">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="motdepasse2" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="re_password" id="motdepasse2" placeholder="Repeat password">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="Age" class="form-label">Age</label>
                                <input type="number" class="form-control" name="Age" id="Age" placeholder="18">
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Create Account</button>
                                <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>