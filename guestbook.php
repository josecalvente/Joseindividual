
<!DOCTYPE html>
<html>
<head>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="mainbrackets.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="testdummyblack.png" />
<link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
<style>
        .entry{
            border: 10px solid;
            margin: 40px;
            padding: 10px;
            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
    h1{
        padding-left: 45%;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        font-size: 92px;
        padding: 80px 50px;
        text-align: center;
        text-transform: uppercase;
        text-rendering: optimizeLegibility;
        color: #131313;
        background-color: #e7e5e4;
        letter-spacing: .15em;
        text-shadow: 
      1px -1px 0 #767676, 
      -1px 2px 1px #737272, 
      -2px 4px 1px #767474, 
      -3px 6px 1px #787777, 
      -4px 8px 1px #7b7a7a, 
      -5px 10px 1px #7f7d7d, 
      -6px 12px 1px #828181, 
      -7px 14px 1px #868585, 
      -8px 16px 1px #8b8a89, 
      -9px 18px 1px #8f8e8d, 
      -10px 20px 1px #949392, 
      -11px 22px 1px #999897, 
      -12px 24px 1px #9e9c9c, 
      -13px 26px 1px #a3a1a1, 
      -14px 28px 1px #a8a6a6, 
      -15px 30px 1px #adabab, 
      -16px 32px 1px #b2b1b0, 
      -17px 34px 1px #b7b6b5, 
      -18px 36px 1px #bcbbba, 
      -19px 38px 1px #c1bfbf, 
      -20px 40px 1px #c6c4c4, 
      -21px 42px 1px #cbc9c8, 
      -22px 44px 1px #cfcdcd, 
      -23px 46px 1px #d4d2d1, 
      -24px 48px 1px #d8d6d5, 
      -25px 50px 1px #dbdad9, 
      -26px 52px 1px #dfdddc, 
      -27px 54px 1px #e2e0df, 
      -28px 56px 1px #e4e3e2;
                
    }
    textarea{
       border: 10px solid;  
        margin-left: 16%;
        width: 66%;
        padding: 22px 20px;
    }

    input[type=text] {
    width: 33%;
    padding: 11px 20px;
    margin: 6px 0;
    border: 5px solid;
    margin-left: 16%;
}
    
    input[type=submit] {
        border: 3px solid;
        margin-left: 16%;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        padding: 11px 11px;
        text-transform: uppercase;
        font-weight: 200;
    }
    
    h2{
        margin-left: 16%;
        text-transform: uppercase;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        font-size: 15px;
    }
    @media screen and (min-width: 240px) {
 h1{
     font-size: 62px;
    
    
}
    }
    </style>

</head>

<body>
   <?php require_once ('menu.php')?>
    <br><br><br><br>
    <h1>Guest Book</h1>
 
    <form method='post' action=''>
    <h2 style="margin-top:16px;">| please leave your comments here |</h2>
    <textarea name='message'></textarea><br>
    <h2>| signature |</h2>
    <input type='text' name='sender' /><br>
    <h2>| phone |</h2>
    <input type='text' name='phone' /><br>
     <h2>| email |</h2>
    <input type='text' name='email' /><br>
    <input type='submit' value='Send your message' />
    </form>
 
    <?php
   // $db = mysqli_connect('localhost', 'root', '', 'guestbook'); // Här kopplar vi upp till databasen
    $db = mysqli_connect('guestbook-219315.mysql.binero.se', '219315_xx63052', 'dualtone23', '219315-guestbook');
    
    
    if( isset($_POST['message']) && isset($_POST['sender']) && isset($_POST['phone']) && isset($_POST['email'])){ // om vi fått ett formulär med fälten 'message' och 'sender skickat'
         
        $sender = $_POST['sender'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $query = "
            INSERT INTO entries
            (date, sender, message, phone, email)
            VALUES
            (NOW(), '$sender', '$message', '$phone', '$email')
        "; // En SQL-fråga som lägger till ett nytt meddelande i databasen
 
        mysqli_query($db, $query); // Ställ frågan som vi skapade ovan i $query till dabatsen
 
        echo "Skickat!";
    }
     
 
    $query = "
        SELECT *
        FROM entries
        ORDER BY date DESC
    "; // En SQL-fråga som hämtar alla inläggen i gästboken från databasen med det senaste inlägget först
 
    $result = mysqli_query($db, $query); // Här skickar vi frågan ovan till databasen
 
    while( $row = mysqli_fetch_assoc($result) ){ // Eftersom vi inte vet antal rader vi får som svar kör vi en while-loop som tar en rad i taget och lägger i $row som då blir en array med alla värden i den raden där nycklarna har samma namn som kolumnerna i tabellen i databasen
        echo "
            <div class='entry'>
                <p>{$row['date']}</p>
                <p>{$row['message']}</p>
                <p>/{$row['sender']}</p>
                <p>/{$row['phone']}</p>
                <p>/{$row['email']}</p>

            </div>
        ";
    }
     
    ?>
 
     

    
</body>
    
</html>


