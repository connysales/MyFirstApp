<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .login {
  color: #000;
  text-transform: uppercase;
  letter-spacing: 2px;
  display: block;
  font-weight: bold;
  font-size: x-large;
}

.card {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 450px;
  width: 400px;
  flex-direction: column;
  gap: 35px;
  background: lightgray;
  box-shadow: 18px 18px 18px #c8c8c8,
        -18px -18px 36px #fefefe;
  border-radius: 8px;
}

.inputBox {
  position: relative;
  width: 250px;
}

.inputBox input {
  width: 100%;
  padding: 10px;
  outline: none;
  border: none;
  color: #000;
  font-size: 1em;
  background: transparent;
  border-left: 1px solid #000;
  border-bottom: 1px solid #000;
  transition: 0.1s;
  border-bottom-left-radius: 8px;
}

.inputBox span {
  margin-top: 5px;
  position: absolute;
  left: 0;
  transform: translateY(-4px);
  margin-left: 10px;
  padding: 10px;
  pointer-events: none;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 3px;
  border-radius: 8px;
}

.inputBox input:valid~span,
.inputBox input:focus~span {
  transform: translateX(113px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: #000;
  letter-spacing: 0.2em;
  color: #fff;
  border: 1px;
}

.inputBox input:valid,
.inputBox input:focus {
  border: 2px solid #000;
  border-radius: 8px;
}

.enter {
  height: 45px;
  width: 100px;
  border-radius: 5px;
  border: 1px solid #000;
  cursor: pointer;
  background-color: transparent;
  transition: 0.5s;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 2px;
  margin-bottom: 1em;
}

.enter:hover {
  background-color: rgb(0, 0, 0);
  color: gray;
}
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">First Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homepage">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="services1">Services 1</a></li>
                <li><a class="dropdown-item" href="services2">Services 2</a></li>
                
                <li><a class="dropdown-item" href="services3">Services 3</a></li>
              </ul>
            </li>
            <li class="nav-item">
            </li> <a class="nav-link " href="contact">Contact</a> </li>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="container">
        <div class="card">
            <a class="login">Sign In</a>
            <div class="inputBox">
                <input type="text" required="required">
                <span class="user">Username</span>
            </div>

            <div class="inputBox">
                <input type="password" required="required">
                <span>Password</span>
            </div>

            <button class="enter">Sign in</button>

        </div>
    </div>
        </div>
      </div>
    </nav>
    
      
    <!-- End Example Code -->
  </body>
</html>