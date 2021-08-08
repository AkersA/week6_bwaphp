<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>md5 Aaron Akers</title>
</head>
<body>
    <pre>
    <?php
        $hashSolution = "No hash solution";
        if (isset($_GET['userEntry'])) {
            $md5toBeCracked = $_GET['userEntry'];
            $stringForCheck = "0123456789";
            $show = 15;
            $time_pre = microtime(true);

            for ($i=0; $i < strlen($stringForCheck); $i++) { 
                $testString1 = $stringForCheck[$i];

                for ($j=0; $j < strlen($stringForCheck); $j++) {
                    $testString2 = $stringForCheck[$j];

                    for ($k=0; $k < strlen($stringForCheck); $k++) {
                        $testString3 = $stringForCheck[$k];

                        for ($l=0; $l < strlen($stringForCheck); $l++) {
                            $testString4 = $stringForCheck[$l];

                            $toBeTested = $testString1.$testString2.$testString3.$testString4;

                            $hashCheck = hash('md5', $toBeTested);
                            if ($hashCheck == $md5toBeCracked) {
                                $hashSolution = $toBeTested;
                                break 4;
                            }

                            if ( $show > 0 ) {
                                print "\n$hashCheck $toBeTested";
                                $show = $show - 1;
                            }
                        }                        
                    }
                }
            }
                $time_post = microtime(true);
                print "\n\nElapsed time: ";
                print $time_post-$time_pre;
                print "\n";
        }
    ?>
    </pre>
    <h1>Week 7: md5 Cracker</h1>
    <form method="get">
        <label for="userEntry">Enter md5:</label>
        <input type="text" name="userEntry" id="userEntry">
        <input type="submit" value="md5 Check">
    </form>
    <p>The hashed code is: <?=htmlentities($hashSolution); ?></p>
</body>
</html>
