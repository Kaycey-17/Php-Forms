<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Digital Identity</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body class="bg-light">

        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Conference Registration</h4>
                </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['error']; 
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>


                    <form action="Display.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" placeholder="Enter at least 3 characters" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Job Title</label>
                            <input type="text" name="jobtitle" placeholder="Enter related tech Job" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Favorite Programming Language</label>
                            <select name="language" class="form-select" required>
                                <option value="" disabled selected>-- Select a Language --</option>
                                <option value="PHP">PHP</option>
                                <option value="Java">Java</option>
                                <option value="Python">Python</option>
                                <option value="C++">C++</option>
                                <option value="C#">C#</option>
                                <option value="JavaScript">JavaScript</option>
                
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>