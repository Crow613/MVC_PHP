<?php
use App\product\ModelCalculator;

 $calc =new ModelCalculator();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
          <h1>CALCULATOR</h1>
    <form action="/product/calculator" method="post" >

         <input type="number" name="num1" id="">

         <select name="options" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
         </select>

         <input type="number" name="num2" id="">

         <button type="submit" name="send">=</button>
         <label for="result"><?php $calc->match(); ?></label>

              <div class="">

                <a href="/user/login">logout</a>

              </div><br>

    </form>

</div>

</body>
</html>
<div>
