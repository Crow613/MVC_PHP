<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>

    <form action="/" method="post">

         <input type="number" name="num1" id="">

         <select name="options" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
         </select>

         <input type="number" name="num2" id="">

         <button type="submit" name="send">=</button>

         <input name"resultNum" placeholder="<?=$calc->match(); ?>">

    </form>

</div>
    
</body>
</html>