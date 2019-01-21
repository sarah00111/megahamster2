<?php
    require_once "vendor/autoload.php";

    use HTL3R\Megahamster\The_Room;
    use HTL3R\Megahamster\The_Pit;
    use HTL3R\Megahamster\The_Flat;

    $r = new The_Flat();
    $r1 = new The_Room();
    $r2 = new The_Pit();

    if(!isset($_GET['format']) || $_GET['format']!='json') {

        if(!isset($_GET['id'])) {
            $_GET['id'] = 1;
        }

        if($_GET['id'] == 2) {
            /*echo "Impressum";*/
            $text = "Impressum";
        }else if($_GET['id'] == 3) {
            /*echo "Datenschutz";*/
            $text = "Datenschutz";
        }else if($_GET['id'] == 1) {
            /*echo "<h1> Hallo Web Hamster! </h1>";

            $r->outputProductInfo();
            echo"<br>";

            $r1->outputProductInfo();
            echo"<br>";

            $r2->outputProductInfo();
            echo"<br>";*/

            $text = "hamster";
        }

        /*echo "
            </body>
            </html>
        ";*/

        require("vendor/autoload.php");

        $view = new \TYPO3Fluid\Fluid\View\TemplateView();

        $paths = $view->getTemplatePaths();
        $paths->setTemplatePathAndFilename(__DIR__ . '/Templates/index.html');

        $view->assignMultiple([
            'text' => $text
        ]);

        $output = $view->render();
        echo $output;
    }else {
        header('Content-Type: application/json');

        switch ($_GET['id']) {
            case 2:
                echo json_encode(["Impressum"=>"Das ist das Impressum"]);
                break;
            default:
                echo json_encode(['TheRoom'=> $r1, 'TheFlat'=>$r, 'ThePit'=>$r2]);
        }
        /* echo json_encode($r);
         echo json_encode($r1);*/

    }



    ?>


