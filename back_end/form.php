<!DOCTYPE html>
<?php require_once 'send_mail.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Back end</title>
    <style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>

  </head>
  <body>

    <h1>Get in contact with us</h1>
    <form action="form.php" method="POST">

    <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName"
            placeholder="Jane Doe" tabindex="1" required>
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail" placeholder="jane@doe.com" tabindex="2" required>
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject" placeholder="Hello There!" tabindex="3" required>
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"placeholder="Enter Message..." tabindex="4">
            </textarea>
            <span class="error"><?php echo $messageErr; ?></span>
        </p>

        <input type="submit" value="Contact us">
    </form>

  </body>
</html>
