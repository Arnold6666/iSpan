<?php
$size = getimagesize("america2.jpg");
// header("content-type: {$size['mime']}");
// readfile("america2.jpg");
// $data = file_get_contents("america2.jpg");
// echo $data;

echo "<pre>";
print_r($size);
echo "</pre>";
?>

<?php
// 圖片的exif可存經緯度，時間，裝置等等詳細資訊可透過，exif_read_data讀取。
// echo "test1.jpg:<br />\n";
// $exif = exif_read_data('tests/test1.jpg', 'IFD0');
// echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

// $exif = exif_read_data('tests/test2.jpg', 0, true);
// echo "test2.jpg:<br />\n";
// foreach ($exif as $key => $section) {
//     foreach ($section as $name => $val) {
//         echo "$key.$name: $val<br />\n";
//     }
// }
?>
