<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'DM Sans', sans-serif;
      background: #1a1a1a;
      position: relative;
    }
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background:
        radial-gradient(ellipse at 20% 20%, #1b4332 0%, transparent 55%),
        radial-gradient(ellipse at 80% 80%, #081c15 0%, transparent 55%),
        radial-gradient(ellipse at 60% 10%, #2d6a4f44 0%, transparent 45%);
      z-index: 0;
    }
    .login-box {
      position: relative;
      z-index: 1;
      background: rgba(149, 212, 90, 0.15);
      padding: 40px;
      border-radius: 20px;
      width: 320px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.5);
      text-align: center;
    }
    h2 {
      color: #fff;
      margin-bottom: 20px;
      font-weight: 600;
    }
    h2 span {
      color: #95d45a;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      background: rgba(255,255,255,0.1);
      color: #fff;
    }
    input::placeholder {
      color: #ccc;
    }
    button {
      width: 100%;
      padding: 12px;
      margin-top: 15px;
      border: none;
      border-radius: 8px;
      background: #95d45a;
      color: #1a1a1a;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #74b34a;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin <span>Login</span></h2>
    <form action="" method="post">
      <input type="text" name="username" required placeholder="USERNAME">
      <input type="password" name="password" required placeholder="PASSWORD">
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>