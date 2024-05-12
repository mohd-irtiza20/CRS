<!DOCTYPE html>
<html>

<head>
    <title></title>
<style>
    
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.map-container {
  position: relative;
  overflow: hidden;
  max-width: 100%;
  margin-bottom: -5px;
}

.map-container iframe {
  width: 100%;
  height: 100%;
  border: 0;
}

.footer {
  background-color: #222;
  color: #fff;
  padding: 30px 0;
  text-align: center;
  font-size: 14px;
}

.footer .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer .column {
  flex: 1;
  min-width: 200px;
  text-align: left;
}

.footer .column h4 {
  color: #fff;
  font-size: 16px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.footer .column ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer .column ul li {
  margin-bottom: 10px;
}

.footer .column ul li a {
  color: #bbb;
  text-decoration: none;
  transition: color 0.3s;
}

.footer .column ul li a:hover {
  color: #fff;
}

.bottom {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
  font-size: 14px;
}

</style>
</head>

<body>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.394601898539!2d76.32667707426181!3d30.651014989579778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce8ae35ecd4e7%3A0xa00d8fe4f8221096!2sRIMT%20UNIVERSITY!5e0!3m2!1sen!2sin!4v1714414330123!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="footer">
        <div class="container">
            <div class="column">
                <h4>Employer</h4>
                <ul>
                    <li><a href='company/register.php'>Register With Us</a></li>
                    <li><a href='company/login.php'>Login</a></li>
                    <li><a href='companies.php'>Registered Companies With Us</a></li>
                </ul>
            </div>

            <div class="column">
                <h4>Information</h4>
                <ul>
                    <li><a href=''>About Us</a></li>
                    <li><a href=''>Careers With Us</a></li>
                    <li><a href=''>Contact With Us</a></li>
                    <li><a href=''>Blog</a></li>
                </ul>
            </div>

            <div class="column">
                <h4>Connect with Us</h4>
                <ul>
                    <li><a href=''>Facebook</a></li>
                    <li><a href=''>Twitter</a></li>
                    <li><a href=''>Instagram</a></li>
                </ul>
            </div>

            <div class="column">
                <h4>Jobs</h4>
                <ul>
                    <li><a href='jobs.php'>All Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='bottom'>Campus Placement System | All rights reserved 2024</div>
</body>

</html>