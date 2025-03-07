<section class="login-form-wrap">
  <h1><img src="Group 1.svg" alt="Alexia Logo" style="width: 150px; height: auto;"></h1>
  <form class="login-form" method="GET" action="regjistrimi.php">
    <label>
      <input type="text" name="emri" required placeholder="Emri">
    </label>
    <label>
      <input type="text" name="mbiemri" required placeholder="Mbiemri">
    </label>
    <label>
      <input type="text" name="vendi" required placeholder="Vendlindja">
    </label>
    <label>
      <input type="date" name="ditelindja" required placeholder="Ditelindja">
    </label>
    <label>
      <input type="email" name="email" required placeholder="Email">
    </label>
    <label> 
      <input type="password" name="pasi" required placeholder="Password">
    </label>
    <input type="submit" value="Regjistrohuni">
  </form>
  <h5>Posedoni një llogari?
    <br>
    Ju lutem<a href="loginform.php"> Kyçuni</a></h5>
</section>
<style>
* {
  box-sizing: border-box;
}

html {
  background: #e2e2e2;
}

body {
  background: #e2e2e2;
  margin: 0;
  padding: 0;
  font-family: "Lato", sans-serif;
}

.login-form-wrap {
  background: radial-gradient(
    ellipse at center,
    rgba(81, 112, 173, 1) 0%,
    rgba(53, 84, 147, 1) 100%
  );
  border: 1px solid #2d416d;
  box-shadow: 0 1px #5670a4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  width: 360px;
  margin: 60px auto;
  padding: 50px 30px 0 30px;
  text-align: center;
}

.login-form-wrap h1 {
  margin: 0 0 50px 0;
  padding: 0;
  font-size: 26px;
  color: #fff;
}

.login-form-wrap h5 {
  margin-top: 40px;
}

.login-form-wrap h5 > a {
  font-size: 14px;
  color: #fff;
  text-decoration: none;
  font-weight: 400;
}

.login-form input[type="email"],
.login-form input[type="password"],
.login-form input[type="text"],
.login-form input[type="date"] {
  width: 100%;
  border: 1px solid #314d89;
  outline: none;
  padding: 12px 20px;
  color: #afafaf;
  font-weight: 400;
  font-family: "Lato", sans-serif;
  cursor: pointer;
  margin-bottom: 10px;
  border-radius: 4px;
  box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.23) inset,
    0 1px 2px rgba(255, 255, 255, 0.1);
}

.login-form input[type="submit"] {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  background: linear-gradient(
    to bottom,
    rgba(224, 224, 224, 1) 0%,
    rgba(206, 206, 206, 1) 100%
  );
  display: block;
  margin: 20px auto 0 auto;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 8px;
  font-size: 17px;
  color: #636363;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
  font-weight: 700;
  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17),
    0 1px 0 rgba(255, 255, 255, 0.36) inset;
}

.login-form input[type="submit"]:hover {
  background: #ddd;
}

.login-form input[type="submit"]:active {
  padding-top: 9px;
  padding-bottom: 7px;
  background: #c9c9c9;
}

</style>