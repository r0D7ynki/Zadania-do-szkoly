<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formularz php</title>
    <style>
      form {
        width: 200px;
        display: flex;
        flex-direction: column;
      }
      input,
      button {
        margin: 5px;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Imie" />
      <input type="text" name="surname" placeholder="Nazwisko" />
      <input type="text" name="email" placeholder="email" />
      <button type="submit">Prześlij</button>
    </form>

    <?php
    $name = "";
    $surname = "";
    $email = "";
    
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

?>

    <h1>Dane:</h1>
    <p>
      Imię:
      <?php echo $name; ?>
    </p>
    <p>
      Nazwisko:
      <?php echo $surname; ?>
    </p>
    <p>
      email:
      <?php echo $email; ?>
    </p>
  </body>
</html>
