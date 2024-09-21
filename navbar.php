

        

        <li><u><a id="userLink" href="index.php" style="color: black;"></a></u>&nbsp;&nbsp;</li>
        

      
<li><u><a href="index.php" style="color: black;">Home</a></u>&nbsp;&nbsp;</li>
<li><u><a href="trackstatus.php" style="color: black;" target="_blank">Update Application Details</a></u>&nbsp;&nbsp;</li>
<li><u><a href="aboutUs.php" style="color: black;">About US</a></u>&nbsp;&nbsp;</li>
<li><u><a href="contactUs.php" style="color: black;">Contact US</a></u>&nbsp;&nbsp;</li>
<li><u><a href="feedback.php" style="color: black;">Feedback</a></u>&nbsp;&nbsp;</li>
<li ><u><a id="sig" href="signin.php" style="color: black; " class="buttonCls">SignIn/SignUp</a></u>&nbsp;&nbsp;</li>
<li><button id="logoutButton">Logout</button></li>

<script>
        // Retrieve user's name from local storage
        var userName = localStorage.getItem('user_name');

        // Update the link text with the user's name
        if (userName) {
            document.getElementById('userLink').innerText = userName;
        }

        if(userName){
            document.getElementById('sig').hidden = true;
            document.getElementById('logoutButton').hidden = false;
        }else{
            document.getElementById('sig').hidden = false;
            document.getElementById('logoutButton').hidden = true;
        }
    </script>


<script>
        // Retrieve user's name from local storage
        var userName = localStorage.getItem('user_name');

        // Update the link text with the user's name
        if (userName) {
            // Hide the link if user's name is available
            document.getElementById('userLink').innerText = userName;
        }

        // Add event listener to the logout button
        document.getElementById('logoutButton').addEventListener('click', function() {
            // Clear all items from local storage
            localStorage.clear();
            // Redirect to the login page
            window.location.href = 'index.php';
        });
    </script>