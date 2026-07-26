<?php
// 1. الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "family_tree_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// تحديد الشاشة الحالية (افتراضياً الشاشة الأولى: الرئيسية)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظام شجرة العائلة</title>
    <style>
        body { font-family: Tahoma, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        nav { background: #333; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center; }
        nav a { color: white; text-decoration: none; padding: 10px 15px; display: inline-block; }
        nav a:hover { background: #555; border-radius: 4px; }
        .screen { display: none; }
        .active { display: block; }
        input, select { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
        button { background: #4CAF50; color: white; padding: 10px 15px; border: none; cursor: pointer; }
        button:hover { background: #45a049; }
    </style>
</head>
<body>

<div class="container">
    <h2>مشروع شجرة العائلة</h2>
    
    <!-- شريط التنقل بين الشاشات الخمس -->
    <nav>
        <a href="?page=home">الرئيسية</a>
        <a href="?page=add">إضافة فرد</a>
        <a href="?page=view">عرض الشجرة</a>
        <a href="?page=search">بحث عن شخص</a>
        <a href="?page=details">التفاصيل والتعديل</a>
    </nav>

    <!-- الشاشة الأولى: الرئيسية -->
    <div class="screen <?php if($page == 'home') echo 'active'; ?>">
        <h3>مرحباً بكِ في واجهة شجرة العائلة</h3>
        <p>استخدمي القائمة بالأعلى للتنقل بسلاسة بين الشاشات الخمس المرتبطة بهذا النظام.</p>
    </div>

    <!-- الشاشة الثانية: إضافة فرد جديد -->
    <div class="screen <?php if($page == 'add') echo 'active'; ?>">
        <h3>شاشة إضافة فرد جديد</h3>
        <form method="POST" action="">
            <label>اسم الفرد:</label>
            <input type="text" name="member_name" required>
            <label>صلة القرابة / الأب:</label>
            <input type="text" name="relation">
            <button type="submit" name="save_member">حفظ البيانات</button>
        </form>
    </div>

    <!-- الشاشة الثالثة: عرض الشجرة -->
    <div class="screen <?php if($page == 'view') echo 'active'; ?>">
        <h3>شاشة عرض أفراد العائلة</h3>
        <p>هنا سيتم عرض قائمة الأفراد المسجلين في قاعدة البيانات:</p>
        <ul>
            <?php
            $result = $conn->query("SELECT * FROM members");
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row['name'] . "</li>";
                }
            } else {
                echo "<li>لا توجد بيانات مضافة حتى الآن.</li>";
            }
            ?>
        </ul>
    </div>

    <!-- الشاشة الرابعة: بحث عن شخص -->
    <div class="screen <?php if($page == 'search') echo 'active'; ?>">
        <h3>شاشة البحث</h3>
        <form method="GET">
            <input type="hidden" name="page" value="search">
            <input type="text" name="query" placeholder="اكتبي اسم الشخص للبحث عنه...">
            <button type="submit">بحث</button>
        </form>
    </div>

    <!-- الشاشة الخامسة: التفاصيل والتعديل -->
    <div class="screen <?php if($page == 'details') echo 'active'; ?>">
        <h3>شاشة التفاصيل والتعديل</h3>
        <p>هنا تظهر تفاصيل الشخص المختار وإمكانية التعديل عليها.</p>
    </div>

</div>

</body>
</html>
