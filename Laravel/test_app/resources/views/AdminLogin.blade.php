<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('global/css/AFSstyle.css') }}">
</head>

<body>
    <div class="loginPage">
        <div class="rightpicture">
            <img src="{{ asset('global/images/PHP/Gate.jpg') }}" alt="Student Left Image">
        </div>
        <div class="loginContainer">
            <div class="logo">
                <img src="{{ asset('global/images/PHP/pup.png') }}" alt="Student Logo">
            </div>
            <div class="loginTitle">
                <h1>Admin Login</h1>
                <div class="titleDesc">
                    <p>"Unlocking a world of knowledge, one login at a time because your success deserves a
                        password!"</p>
                </div>
            </div>
            <div class="leftSide"> 
                <div class="fieldsContainer">
                    <form action="">
                        <div class="inputField">
                            <label for="studentNumber">Admin Number: </label>
                        </div><div class="inputField">
                            <input type="text" placeholder="Enter admin number" required>
                        </div>
                        <div class="inputField">
                            <label for="password">Password: </label>
                        </div><div class="inputField">
                            <input type="password" placeholder="" required>
                        </div>
                        <div class="loginButtons">
                            <button class="btn" onclick="openAdminDashboard()">Sign in</button>
                        </div>
                    </form>
                    <br>
                    <h4><a href="#">I forgot my password</a></h4>
                </div>
                <div class="loginFooter">
                    <p><small>By using this service, you understand and agree to the
                            <br>PUP Online Services <a href="https://www.pup.edu.ph/terms/"
                                style="color:#0D7CFE;" target="_blank">Terms of Use</a> and <a
                                href="https://www.pup.edu.ph/privacy/" style="color:#0D7CFE;" target="_blank">Privacy
                                Statement</a></small></p>
                </div>
            </div>
        </div>
    </div>

<script>
 
    function openAdminDashboard() {
        // Replace '<?= url('DashboardUI'); ?>' with the actual URL
        var admindashboardUrl = '<?= url('DashboardUI'); ?>';
        window.location.href = admindashboardUrl;
    }
 </script>

</body>

</html>
