<!DOCTYPE html>
<?php $QRCode=$_POST['ID']*255+35+15*242-10+14*15556;
$QRCode=$QRCode*33;?>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Balti Optique</title>
<meta name="keywords" content="BALTI, OPTIQUE, LUNETTE, VISION, LENTILLE, LUNETTE SOLAIRE">
<meta name="description" content="BALTI OPTIQUE">
<meta name="author" content="OLYMPIANS">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
            width: 100%;
        }
        .bg {
            
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        img{
            width: 100%;
        }
        div img{
            width: 50%;
        }
    </style>
    <script src="../script/qrcode.js"></script>
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            
                
                <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>QR Code du Commande</h1>
                </div>
                <hr>
                <div id="qrbox" style="text-align: center;">
                    <div id="output" style="padding-left:15%; hight:150%; width:150%;"></div>
                </div>
                <hr>
                <a href="produit.php">Retour</a>
            </div>
            
        </div>
    </div>
    <script>
    
        let qrcode = new QRCode("output", {
            text: '<?php echo $QRCode; ?>',
            
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
        
        
        
    </script>
</body>

</html>