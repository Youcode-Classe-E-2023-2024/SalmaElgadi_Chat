<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="<?= PATH ?>index.php?page=login">
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button type="submit" name="submit">Log in</button>
    </a>
  </form>
</div>