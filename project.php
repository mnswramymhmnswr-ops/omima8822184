<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف التعريفي - أميمة منصور</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        .header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            text-align: center;
            padding: 40px 20px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2a5298;
            border-bottom: 2px solid #2a5298;
            padding-bottom: 5px;
            margin-top: 30px;
        }
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .skill-badge {
            background-color: #e3f2fd;
            color: #1565c0;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
        }
        .project-card {
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            background-color: #2a5298;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #1e3c72;
        }
        .contact-info {
            margin-top: 15px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="header">
        <!-- ضع اسم صورتك الشخصية هنا -->
        <img src="profile.jpg" alt="صورة البروفايل" class="profile-img">
        <h1>اميمه منصور</h1>
        <p>طالبة تقنية معلومات | مطورة ومصممة مواقع ويب</p>
    </div>

    <div class="container">
        <!-- من أنا -->
        <h2>من أنا 🙋‍♀️</h2>
        <p>أنا طالبة شغوفة بمجال تطوير الأنظمة والمواقع. قمت بتطوير نظام لإدارة السجلات الطبية وشجرة العائلة كجزء من أعمالي الأكاديمية ومشروعي التقني، وأحب تحويل الأفكار إلى مواقع حقيقية تعمل بكفاءة.</p>

        <!-- مهاراتي -->
        <h2>مهاراتي 💻</h2>
        <div class="skills-container">
            <span class="skill-badge">HTML5</span>
            <span class="skill-badge">CSS3</span>
            <span class="skill-badge">JavaScript</span>
            <span class="skill-badge">PHP</span>
            <span class="skill-badge">MySQL & Databases</span>
            <span class="skill-badge">UI/UX Design</span>
            <span class="skill-badge">GitHub</span>
        </div>

        <!-- مشاريعي -->
        <h2>مشاريعي 🚀</h2>
        
        <div class="project-card">
            <h3>1. نظام إدارة السجلات الطبية (مشروع التخرج)</h3>
            <p>نظام إلكتروني متكامل لإدخال وعرض السجلات الطبية، مرتبط بقاعدة بيانات MySQL ومنفذ عبر 3 شاشات.</p>
            <a href="medical_system.php" class="btn">عرض نظام السجلات الطبية</a>
        </div>

        <div class="project-card">
            <h3>2. مشروع شجرة العائلة</h3>
            <p>تطبيق ويب تفاعلي مكون من 5 شاشات لعرض التسلسل العائلي (الأب، الجد، والجد الأكبر) بتصميم عصري ومتجاوب.</p>
            <a href="family_tree.html" class="btn">عرض شجرة العائلة</a>
        </div>

        <!-- وسائل التواصل -->
        <h2>تواصل معي 📞</h2>
        <div class="contact-info">
            <p>📧 البريد الإلكتروني: oumayma@email.com</p>
            <p>📱 واتساب: +249XXXXXXXXX</p>
            <a href="https://github.com" target="_blank" class="btn">رابط GitHub</a>
        </div>
    </div>

</body>
</html>
