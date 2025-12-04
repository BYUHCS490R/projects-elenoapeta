<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Booking Confirmation — Game Hutt Tech Services</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="wrap header-grid">
      <div><h1>Booking Confirmation</h1></div>
      <nav aria-label="Main navigation">
        <a href="home.html" class="nav-link">Home</a>
        <a href="about.html" class="nav-link">About</a>
        <a href="services.html" class="nav-link">Services</a>
        <a href="repairs.html" class="nav-link">Repair Guides</a>
        <a href="contact.html" class="nav-link active">Contact</a>
      </nav>
    </div>
  </header>

  <main class="wrap">
    <?php if (!empty($errors)): ?>
      <section class="card">
        <h2>There were problems with your submission</h2>
        <ul>
          <?php foreach ($errors as $e) echo '<li>' . $e . '</li>'; ?>
        </ul>
        <p><a href="contact.html">Return to the form</a> and correct the fields.</p>
      </section>
    <?php else: ?>
      <section class="confirm">
        <h2>Thank you, <?php echo $name ?: 'Guest'; ?>.</h2>
        <p>We received your booking request. Below are the details you submitted:</p>
        <dl>
          <dt>Name</dt><dd><?php echo $name; ?></dd>
          <dt>Email</dt><dd><?php echo $email; ?></dd>
          <dt>Device</dt><dd><?php echo $device; ?></dd>
          <dt>Description</dt><dd><?php echo $desc; ?></dd>
          <dt>Student?</dt><dd><?php echo $student; ?></dd>
          <dt>Preferred date</dt><dd><?php echo $date; ?></dd>
        </dl>
        <p>We will contact you by email with the next steps.</p>
        <p><a href="home.html">Return to home</a></p>
      </section>
    <?php endif; ?>
  </main>

  <footer>
    <div class="wrap footer-grid">
      <div><h4>Contact</h4><p>Email: hello@gamehutt.example</p></div>
      <div><h4>References</h4><p><a href="references.html">References & image credits</a></p></div>
      <div><h4>Hours</h4><p>Mon–Fri 9:00–17:00</p></div>
    </div>
    <p class="center small">&copy; 2025 Game Hutt Tech Services</p>
  </footer>
</body>
</html>

