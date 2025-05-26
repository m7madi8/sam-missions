<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tasks = [];
    for ($i = 0; $i <= 4; $i++) {
        // الشيكبوكسات (إذا مش محدد معناها false)
        $tasks["task$i"] = isset($_POST["task$i"]) ? 'مكتمل' : 'غير مكتمل';
    }
    // حقول النص
    $tasks['text5'] = $_POST['text5'] ?? '';
    $tasks['text6'] = $_POST['text6'] ?? '';

    // حفظ البيانات في ملف نصي بصيغة JSON
    $data = json_encode($tasks, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    file_put_contents('tasks_data.json', $data);

    echo "تم حفظ البيانات بنجاح!";
    echo '<br><a href="index.html">عودة إلى القائمة</a>'; // أو رابط صفحتك
}
?>
