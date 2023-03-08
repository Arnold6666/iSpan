<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Document</title>
</head>

<body>
  <div>
    <a href="login.php">登入</a>
  </div>
  <form action="API.php" method="POST" id="myForm">
    帳號 <input type="text" name="uid" id="uid">
    <p>
      密碼 <input type="password" name="pwd" id="pwd">
    <p>
      <input type="submit" value="註冊">
  </form>
  <div id="response"></div>
  <script>
    // $(document).ready(function() {
    //   $('#myForm').submit(function(e) {
    //     function hash(string) {
    //       const utf8 = new TextEncoder().encode(string);
    //       return crypto.subtle.digest('SHA-256', utf8).then((hashBuffer) => {
    //         const hashArray = Array.from(new Uint8Array(hashBuffer));
    //         const hashHex = hashArray
    //           .map((bytes) => bytes.toString(16).padStart(2, '0'))
    //           .join('');
    //         return hashHex;
    //       });
    //     }
    //     e.preventDefault(); // 取消表單提交的預設行為
    //     let pwd = $("#pwd").val();
    //     let hash = hash(pwd); // 新的值
    //     alert(hash);
    //     $(this).find('input[name="sha256"]').val(hash);
    //     alert($(this).find('input[name="pwd"]').val()) // 修改隱藏欄位的值
    //     this.submit(); // 手動提交表單
    //   });
    // });

    function register() {
      let uid = $("#uid").val();
      let pwd = $("#pwd").val();
      $hash = hash(pwd);

      let mydata = {
        "uid": uid,
        "pwd": pwd,
      }

      $.ajax({
        type: "POST",
        url: "API.php",
        data: mydata,
        success: function(response) {
          $("#response").val(response)
        }
      });
    }
  </script>
</body>

</html>