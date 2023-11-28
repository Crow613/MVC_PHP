

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
