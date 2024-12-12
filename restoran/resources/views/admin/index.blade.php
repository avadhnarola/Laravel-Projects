<title>Admin Login</title>
<link rel="stylesheet" href="admin_css/assets/vendor/css/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="admin_css/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="admin_css/assets/css/demo.css" />
<div class="mt-5">
    <div class="col-xl-4 m-auto">
        <div class="card mb-6">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h3 class="mb-0">Admin Login</h3>
            </div>
            <div class="card-body">
                <form id="loginForm" method="post">
                    @csrf
                    <div class="mb-6">
                        <label class="form-label" for="basic-default-fullname">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" />
                    </div>
                    <div class="mb-6">
                        <label class="form-label" for="basic-default-company">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="........" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary" name="submit" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        // Get form fields
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        // Email regex pattern for validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validate fields
        if (!email) {
            alert('Email is required.');
            e.preventDefault(); // Prevent form submission
            return;
        }

        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            e.preventDefault();
            return;
        }

        if (!password) {
            alert('Password is required.');
            e.preventDefault();
            return;
        }

        // if (password.length < 6) {
        //     alert('Password must be at least 6 characters long.');
        //     e.preventDefault();
        // }
    });
</script>