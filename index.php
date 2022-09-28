<!DOCTYPE html>
  <html lang="en" dir="rtl">
  <head>
    <title>סקר שבת</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>


    <div class="container mt-3">
      <h2>סקר שבת</h2>
      <form action="./rishom.php" method="post">
        <div class="mb-3 mt-3">
          <label for="name">שם פרטי:</label>
          <br>
          <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" value="" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name">שם משפחה:</label>
          <br>
          <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" value="" required>
        </div>
        <div class="form-check text-end">
          <label class="form-check-label" for="check1">האם אתה פה שבת?</label>
          <input type="checkbox" class="form-check-input" id="is_here" name="is_here" value="1">
        </div>
        <div class="form-check text-end">
          <label class="form-check-label" for="check1">אורח?</label>
          <input type="checkbox" class="form-check-input" id="guest" name="guest" value="1">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">אישור</button>
        <input type="hidden" id="shabat" name="shabat" value="bereshit">
      </form>
    </div>

    <br>
    <div class="mb-3 mt-3">
    <a href="./gabaim.php">gabaim</a>
    </div>

  </body>
</html>

