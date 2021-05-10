<?php
$print="";
$Mode=$_GET['Mode'];
if($Mode=='html'){
    $print="
    <head>
    <title>網頁元件產生器</title>
    <meta charset='utf-8'>
    <link rel='icon' type='image/x-icon' href='https://kiriqua.com/img/logo/logo.png' />
    <link rel='shortcut icon' href='https://kiriqua.com/img/logo/logo.png' type='image/x-icon' />
    <link rel='stylesheet' href='./css/html.css'/>
    <script src='./js/html.js'></script>
    <script src='https://kiriqua.com/js/reset.js'></script>
</head>
<body onload='reset();'>
    <form name='form' id='form'>
        選擇元件：
        <input type='radio' name='tag' value='h1' />大標題
        <input type='radio' name='tag' value='h2' />中標題
        <input type='radio' name='tag' value='h3' />小標題
        <input type='radio' name='tag' value='p' />段落
        <input type='radio' name='tag' value='div' />換行區域
        <input type='radio' name='tag' value='span' />不換行區域
        <input type='radio' name='tag' value='a' />網頁<br>
        標籤內容：<input type='text' name='text' placeholder='輸入內容' /><br>
        指定ＩＤ：<input type='text' name='id' placeholder='輸入ID' /><br>
        字體顏色：<input type='text' name='color' placeholder='輸入顏色代碼' /><br>
        字體大小：<input type='text' name='size' placeholder='輸入字體大小' /><br>
        尺寸單位：
        <input type='radio' name='unit' value='px' />px
        <input type='radio' name='unit' value='%' />%
        <input type='radio' name='unit' value='pt' />pt
        <input type='radio' name='unit' value='cm' />cm<br>
        備註　　：<input type='text' name='title' /><br>
        網址　　：<input type='url' name='url' /><br><br>
        <input type='button' value='送出' onclick='linkstart()' title='確定嗎？不後悔嗎？' />
        <input type='button' value='重置' onclick='window.location.reload();' title='哈哈！後悔了吧！' />
        <input type='button' value='顯示代碼' onclick='show()' />
    </form><br>
    效果展示
    <div class='show'>
    <p id='put'></p>
    </div>";
}
 elseif($Mode=='css'){
    $print="
    <head>
    <title>CSS編輯器</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link rel='icon' type='image/x-icon' href='https://kiriqua.com/img/logo/logo.png' />
    <link rel='shortcut icon' href='https://kiriqua.com/img/logo/logo.png' type='image/x-icon' />
    <link href='./css/css.css' rel='stylesheet'>
    <script src='https://kiriqua.com/js/reset.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='./js/css.js'></script>
</head>
<body onload='reset();'>
<div class='left'>
<table for='css'>
    <form name='list'>
    <tbody>
        <tr>
            <td>.Class｛</td>
            <td><input type='text'id='Class' placeholder='輸入名稱' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='Height' />Height：</td>
            <td><input type='text' id='Heights' placeholder='輸入高度' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='Width'/>Width：</td>
            <td><input type='text' id='Widths' placeholder='輸入寬度' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='Color'/>Color：</td>
            <td><input type='text' id='Colors' placeholder='輸入字體顏色' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='FontFamily'/>Font-Family：</td>
            <td><input type='text' id='FontFamilys' placeholder='輸入字體' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='FontSize'/>Font-Size：</td>
            <td><input type='text' id='FontSizes' placeholder='輸入字體大小' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='BgColor'/>Bg-Color：</td>
            <td><input type='text' id='BgColors' placeholder='輸入背景顏色' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='BgImage'/>Bg-Image：</td>
            <td><input type='text' id='BgImages' placeholder='輸入背景圖片' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='BdStyle'/>Bd-Style：</td>
            <td><input type='text' id='BdStyles' placeholder='輸入邊框樣式' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='BdRadius'/>Bd-Radius：</td>
            <td><input type='text' id='BdRadiuss' placeholder='輸入邊框圓角' value=''/></td>
        </tr>
        <tr>
            <td><input type='checkbox' id='BdColor'/>Bd-Color：</td>
            <td><input type='text' id='BdColors' placeholder='輸入邊框顏色' value=''/></td>
        </tr>
        <tr>
            <td>}</td>
        </tr>
        <tr>
            <td>
            <input type='button' value='送出' id='start'/>
            <input type='reset' value='重置' title='哈哈！後悔了吧！' />
            <input type='button' value='顯示代碼' onclick='show()' />
            </td>
        </tr>
    </tbody>
    </form>
</table>
<div>
    效果展示
    <hr style='background-color:black;'>
    <div class='show' id='show'></div>
</div>
</div>
<div class='right'>
    代碼展示
    <div class='code' ><div id='Code'></div></div>
</div>";
 }
?>
<!DOCTYPE html>
<html lang="zh-TW">
<?php echo $print ?>

</body>
</html>