
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Scan-Friend Steam</title>
</head>
<body style="position: relative; min-height: 100%; top: 0px">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-scan"> 
                <div>SCAN YOUR FRIENDLIST STEAM</div>
                <div>and look who got catch by Valve</div>
            </div>
        </div>
    </div>


    <div class="container start-script">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="link-insert">
                    <label for="link"> YOUR STEAM PROFILE :</label>
                    <input type="link" id="profile" name="profile" required
                    minlength="15" maxlength="70" size="20">
                </div>
            </div>
        </div>
    </div>

    <div class="container scan-list">

        <?php for($i=0;$i>10;$i++) { ?>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vignette">
                    <div class="profil-infos">
                        <img src="icon-profil.png">
                    </div>
                    <div class="more-about">
                        <p>PSEUDO</p>
                        <p>1601 day(s) since last ban</p>
                        <button class="btn-link"> Copy link</button>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        <?php } ?>

</body>
</html>