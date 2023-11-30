<html>
  <head>
    <title>?0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
*{
  box-sizing: border-box;
}
body{
  margin: 0;
  padding: 0;
  background-color: black;
}
.commander{
  padding: 5rem 2rem;
  align-items: center;
  justify-content: center;
  text-align: center;
}
input[type=text]{
  width: 500px;
  color: lime;
  background-color: black;
}
h1{
  color: red;
}
    </style>
  </head>
  <body>
    <div class="commander">
      <h1>Access Granted!!</h1>
      <form action="post">
        <input type="text" name="command" placeholder="enter command" style="height:35px;"><br>
        <input type="text" name="result" readonly style="height:350px">
      </form>
    </div>
  </body>
</html>
