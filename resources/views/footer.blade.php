
<script src="js/chart.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                const loginButton = document.getElementById("loginButton");
                const logoutForm = document.getElementById("logoutForm");
                const logoutButton = document.getElementById("logoutButton");

                const isLoggedIn = @json(Auth::check()); /* logic untuk memeriksa status login */

                if (isLoggedIn) {
                    loginButton.style.display = "none";
                    logoutForm.style.display = "block";
                    logoutButton.style.display = "block";
                } else {
                    loginButton.style.display = "block";
                    logoutForm.style.display = "none";
                    logoutButton.style.display = "none";
                }
            });
              </script>
</body>
</html>