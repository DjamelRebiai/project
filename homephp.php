<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- ربط ملف CSS -->
    <link rel="stylesheet" href="homecss.css">
    <!-- إضافة مكتبة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </div>

    <div class="container">
       

        <div id="home" class="section active">

            <div class="bar">bar</div>
            <div class="main">
                <h1>مرحبًا بك في الصفحة الرئيسية!</h1>
                <p>هذا هو محتوى الصفحة الرئيسية.</p>
            </div>
                <div class="footer">footer</div>

        </div>

        <div id="profile" class="section">
                <h1>صفحة الملف الشخصي</h1>
                <p>يمكنك تعديل معلوماتك هنا.</p>
        </div>

        <div id="settings" class="section">
                <h1>صفحة الإعدادات</h1>
                <p>قم بتعديل إعداداتك هنا.</p>
        </div>
       

        
    </div>

    <!-- ربط ملف JavaScript -->
    <script src="adminjs.js"></script>
</body>
</html>
