<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Static Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="alert alert-danger" role="alert" id="alert_danger_custom" name="alrt_danger" style="display: none;">
        <button type="button" class="btn-close" aria-label="Close" id="close_danger"></button>
        Invalid Username/Password!
    </div>

    <div class="alert alert-success" role="alert" id="alert_success_custom" name="alrt_success" style="display: none;">
        <button type="button" class="btn-close" aria-label="Close" id="close_success"></button>
    </div>

    <div class="round-container text-center" id="cntnr">

        <div class="mb-4">
            <img src="blank.png" alt="Profile Picture" class="profile-pic">
        </div>

        
        <form method="post" id="loginForm">
            <div class="mb-3">
                <select class="form-select" name="options" aria-label="Default select example">
                    <option value="admin" selected>Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
                </select>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="floatingInput" id="floatingInput" placeholder="Username"
                    required>
                <label for="floatingInput">User Name</label>
            </div>

            <div class="form-floating mb-4">
                <input type="password" class="form-control" name="floatingPassword" id="floatingPassword"
                    placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" class="btn btn-primary" name="sbtn">SIGN IN</button>
        </form>

    </div>

    

    <script>

        document.getElementById('close_danger')?.addEventListener('click', function () {
            document.getElementById('alert_danger_custom').style.display = 'none';
        });

        document.getElementById('close_success')?.addEventListener('click', function () {
            document.getElementById('alert_success_custom').style.display = 'none';
        });


        document.getElementById('loginForm').addEventListener('submit', function () {
            document.getElementById('alert_danger_custom').style.display = 'none';
            document.getElementById('alert_success_custom').style.display = 'none';
        });
    </script>

</body>

</html>