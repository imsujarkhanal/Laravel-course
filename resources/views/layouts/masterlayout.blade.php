<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Name - @yield('title')</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header>
    <h1>Website Name </h1>
  </header>

  <nav>
    <a href="/ ">Home</a>
    <a href="/about">About Us</a>
    <a href="/post">Post</a>
   
  </nav>

  <div class="content-wrapper">
    <main>
    @yield('content')
    </main>
    <aside>
      <ul>
        <li>Home</li>
        <li>About Us</li>
        <li>Gallery</li>
        <li>Contact Us</li>
      </ul>
    </aside>
  </div>

  <footer>
    Website name@copyright.
  </footer>

</body>
</html>