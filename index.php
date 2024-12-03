<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitech College</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
           
            <h1>Digitech College</h1>

             <img class="logo" src="448021804_904114498397676_8621585507555505592_n.jpg" alt="">
            <nav>
                <ul>
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=courses">Course Offered</a></li>
                    <li><a href="?page=about">About</a></li>
                    <li><a href="?page=contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) {
                case 'home':
                    echo "<h2>Welcome to Digitech College</h2><p>Your gateway to excellence in digital education.</p>";
                    break;
                case 'courses':
                    echo "<h2>Courses Offered</h2><ul>
                            <li>Food Service and Management</li>
                            <li>Computer Programming and Visual Graphic Design</li>
                            <li>Computer System Servicing and Electrical Technology</li>
                            <li>Welding Technology</li>
                          </ul>";
                    break;
                case 'about':
                    echo "<h2>About Us</h2><p>Digitech College is a premier institution focused on providing top-notch digital education for the modern era. </p>";
                    break;
                case 'contact':
                    echo "<h2>Contact Us</h2>
                          <p>Email: info@digitechcollege.edu</p>
                          <p>Phone: +1 234 567 890</p>
                          <p>Address: Purok Agawin, Red-V, Barangay Ibabang Dupay, Lucena City</p>";
                    break;
                default:
                    echo "<h2>Page Not Found</h2>";
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Digitech College. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>

