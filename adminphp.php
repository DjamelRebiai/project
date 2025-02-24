<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <!-- ربط مكتبة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="globalecss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- ربط ملف CSS -->
    <script src="https://unpkg.com/feather-icons"></script> <!-- Include Feather Icons -->
</head>
<body>
<div class="bar1">
        <nav>
            <ul>
                <li><a href="#" onclick="showSection('home')"><i class="fas fa-home"></i> الصفحة الرئيسية</a></li>
                <li><a href="#" onclick="showSection('profile')"><i class="fas fa-user"></i> الملف الشخصي</a></li>
                <li><a href="#" onclick="showSection('settings')"><i class="fas fa-cog"></i> الإعدادات</a></li>
            </ul>
        </nav>
    </div> <!-- الحاوية الرئيسية -->
    <div class="container">
        <!-- الشريط العلوي -->
        <div class="bar">الشريط العلوي</div>

        <!-- المحتوى الرئيسي -->
        <div class="main">
            <!-- قسم الصفحة الرئيسية -->
            <div id="home" class="section active">
                <?php
                // Connexion à la base de données
                $con = mysqli_connect('localhost', 'root', '', 'commerce');
                if (!$con) {
                    die('Connection failed: ' . mysqli_connect_error());
                }

                // Requête pour sélectionner les vendeurs
                $select = 'SELECT * FROM vendor';
                $result = mysqli_query($con, $select);

                if ($result) {
                    echo "<div class='box-container'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <div class='card'>
                            <div class='social'>
                                <a class='fab fa-twitter' href='#'></a>
                                <a class='fab fa-facebook' href='#'></a>
                                <a class='fab fa-behance' href='#'></a>
                                <a class='fab fa-dribbble' href='#'></a>
                                <a class='fab fa-linkedin' href='#'></a>
                                <a class='fab fa-github' href='#'></a>
                            </div>
                            <div class='pic'>
                                <img src='".$row['photo']."' alt='profile-picture' title='Someone Famous'/>
                            </div>
                            <div class='content'>
                                <h3 class='title'>".$row['nom']."</h3>
                                <span>".$row['prenom']."</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                            </div>
                        </div>
                        ";
                    }
                    echo "</div>";
                } else {
                    echo 'Error: ' . mysqli_error($con);
                }

                // Fermeture de la connexion
                mysqli_close($con);
                ?>
            </div> 
            <div id="profile" class="section">
                <h1>صفحة الملف الشخصي</h1>
                <p>يمكنك تعديل معلوماتك هنا.</p>
            </div>
            <div id="settings" class="section">
                <h1>إضافة بائع</h1>
                <form action="adminconfig.php" method="post" enctype="multipart/form-data">
                    <p>الاسم:</p>
                    <input type="text" name="nom" required>
                    <br>
                    <p>اللقب:</p>
                    <input type="text" name="prenom" required>
                    <br>
                    <p>صورة المتجر:</p>
                    <input type="file" name="photo" accept="image/*" required>
                    <br><br>
                    <button type="submit" name="upload">إضافة</button>
                </form>
            </div>

                 <!-- التذييل -->
        <div class="footer">التذييل</div>
    </div>

        </div>

   
    <!-- ربط ملف JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Replace Feather Icons
            feather.replace();

            // Add event listeners to navbar links
            document.querySelectorAll('.navbar__link').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    showSection(this.getAttribute('href').substring(1));
                });
            });
        });

        function showSection(sectionId) {
            // إخفاء جميع الأقسام
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });

            // عرض القسم المحدد
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>