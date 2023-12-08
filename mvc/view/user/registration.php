<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>

    <link type="text/css" rel="stylesheet" href="../public/css/master.css">
  </head>
  <body>

    <div class="">

       <h1>REGISTRATION PAGE</h1>
      <form action="/user/registration" method="post">

        <input class="input" required type="text" name="name" id="name">
        <label class="label" for="name">Name</label>
        <input class="input" required type="text" name="email" id="email">
        <label class="label" for="email">Email</label>
        <input class="input" required type="password" name="password" id="password">
        <label class="label" for="password">Password</label>
        <input class="input" required type="password" name="repPwd" id="repPwd">
        <label class="label" for="repPwd">Repit_Password</label>
        <button type="submit">signup</button>

      </form>

          <a href="/user/login">login</a>

    </div>
  </body>
</html>
