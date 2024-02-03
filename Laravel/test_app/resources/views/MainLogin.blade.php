<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href= "{{ asset('global/css/loginstyle.css') }}">
    </head>
<body>
        <div class= "loginPage">
            <div class="rightpicture">
                <img src = "global/images/PHP/Gate.jpg" >
            </div>
            <div class="loginContainer">
                <div class= "logo">
                    <img src= "global/images/PHP/pup.png" >

                </div>
                <div class= "loginTitle">
                    <h1> Student Registration <h1> 
                    <h1> and Admission Management </h1> 
                    <div class= "titleDesc">
                        <p>"Your journey to success starts with us! Join us as we take you to greater heights."</p>
                    </div>
                </div>
                <div class = "leftSide">
                    <div class= "buttonsContainer">
                        <div class= "loginButtons">
                            <button class= "btn" onclick="openAdmin()">ADMIN</button>
                            <button class= "btn" onclick="openStudent()">STUDENT</button>
                            <!-- <button class= "btn" onclick="openStudent()">STUDENT</button> -->
                        </div>
                    </div>
                    <div class= "loginFooter">
                        <p>
                        <small> By using this service, you understood and agree to the 
                        <br>PUP Online Services <a href="https://www.pup.edu.ph/terms/" 
                        style="color:#0D7CFE;" target="_blank">Terms of Use</a> and <a href="https://www.pup.edu.ph/privacy/" style="color:#0D7CFE;" target="_blank">Privacy Statement</a>
                        <small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <script>
 
    function openAdmin() {
        // Replace '<?= url('AdminLogin'); ?>' with the actual URL
        var adminloginUrl = '<?= url('AdminLogin'); ?>';
        window.location.href = adminloginUrl;
    }

    function openStudent() {
        // Replace '<?= url('StudentLogin'); ?>' with the actual URL
        var studentloginUrl = '<?= url('StudentLogin'); ?>';
        window.location.href = studentloginUrl;
    }
    </script>
    
    </body>
</html>
