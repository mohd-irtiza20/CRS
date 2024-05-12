<script type="text/javascript">
  function Captcha1() {
    x = Math.floor(Math.random() * 10);
    y = Math.floor(Math.random() * 10);
    document.getElementById("mainCaptcha1").innerText = x + " " + "+" + " " + y + " " + "=";
  }

  function ValidCaptcha1() {
    var string1 = x + y;
    var string2 = document.getElementById('txtInput1').value;
    if (string1 == string2) 
    {
      return true;
    } 
    else 
    {
      document.getElementById('cap1').style.visibility = 'visible';
      Captcha1();
      return false;
    }
  }
</script>

<style type="text/css">
  #cap1 {
    visibility: hidden;
    margin-top: 6px;
    background-color: #f2dede;
    color: #a94442;
    padding: 5px 0px;
    text-align: center;
    border-radius: 6px;
    width: 120px;
  }

  #refresh1{
    background-color: #333;
    color: #fff;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
  }

  #mainCaptcha1 {
    font-size: 17px;
    background-color: #333;
    color: white;
    padding: 10px;
    border-radius: 5px;
    width: 86px;
    text-align: center;
    margin-top: 10px;
  }

  #wrapper-cap1 {
    padding-top: 20px;
    margin-left: 20%;
  }

  #txtInput1 {
    width: 40%;
    height: 40px;
    /* margin-top: 30px; */
  }
</style>