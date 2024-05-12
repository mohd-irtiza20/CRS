<script type="text/javascript">
  function Captcha() {
    var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    var i;
    // for (i=0;i<6;i++){
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = alpha[Math.floor(Math.random() * alpha.length)];
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    var e = alpha[Math.floor(Math.random() * alpha.length)];
    var f = alpha[Math.floor(Math.random() * alpha.length)];
    var g = alpha[Math.floor(Math.random() * alpha.length)];
    // }
    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
    document.getElementById("mainCaptcha").innerText = code
  }

  function ValidCaptcha() {
    var string1 = removeSpaces(document.getElementById('mainCaptcha').innerText);
    var string2 = removeSpaces(document.getElementById('txtInput').value);
    if (string1 == string2) {
      return true;
    } else {
      document.getElementById('cap').style.visibility = 'visible';
      Captcha();
      return false;
    }
  }

  function removeSpaces(string) {
    return string.split(' ').join('');
  }
</script>


<style type="text/css">
  .cap-wrapper {
    padding-top: 30px;
    margin-left: 200px;
  }

  .cap-wrapper>label {
    color: black;
    font-weight: 600;
  }

  .cap-wrapper>input[type='text'] {
    margin-left: 20px;
    height: 40px;
    width: 30%;
    text-indent: 20px;
    outline: none;
  }

  #cap {
    visibility: hidden;
  }
</style>