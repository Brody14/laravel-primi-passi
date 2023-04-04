<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>

    <style>
        .form{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn {
            width: 70px;
            padding: 5px;
            margin: 0 auto;
        }
        

    </style>
</head>
<body>
    <h1>Contatti</h1>
    <form class="form" action="">
        <input class="name" type="text" placeholder="Inserisci il tuo nome">
        <input class="mail" type="email" placeholder="Inserisci la tua e-mail">
        <textarea class="message" name="" id="" cols="30" rows="10" placeholder="Inserisci il tuo messaggio"></textarea>
        <input class="btn" type="submit" value="Invia">
    </form>
</body>
</html>