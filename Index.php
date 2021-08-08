<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>md5 Aaron Akers</title>
</head>
<body>
    <?php
        if (isset($_GET['userEntry'])) {
            $md5toBeCracked = $_GET['userEntry'];
            $stringForCheck = "0123456789";

            for ($i=0; $i < strlen($stringForCheck); $i++) { 
                $testString1 = $stringForCheck[$i];

                for ($j=0; $j; $j++) {
                    $testString2 = $stringForCheck[$j];

                    for ($k=0; $k < ; $k++) { 
                        $testString3 = $stringForCheck[$k];

                        for ($l=0; $l < ; $l++) { 
                            $testString4 = $stringForCheck[$l];

                            $toBeTested = $testString1.$testString2.$testString3.$testString4;

                            $hashCheck = hash('md5', $toBeTested);
                            if ($hashCheck == md5toBeCracked) {
                                $hashSolution = $toBeTested;
                                break;
                            }
                        }
                    }
                }
            }
        }
    ?>
    <h1>Week 7: md5 assignment</h1>
    <form method="get">
        <label for="userEntry">Enter md5:</label>
        <input type="text" name="userEntry" id="userEntry">
        <input type="submit" value="md5 Check">
    </form>
    <p>The hashed code is: <?=htmlentities($hashSolution); ?></p>
</body>
</html>
