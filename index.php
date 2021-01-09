<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class RenderArray
    {
        public function printArray()
        {
            include 'config.php';
            echo "<h1>Task 1:Print Array</h1>";
            foreach ($student as $key => $values) {
                foreach ($values as $key2 => $values2) {
                    foreach ($values2 as $key3 => $values3) {
                        if (!is_array($values3)) {
                            echo $key . "=>" . $key2 . "=>" . "$key3" . "=>" . "$values3" . "<br>";
                        }
                    }
                }
                foreach ($values3 as $key4 => $values4) {
                }
                foreach ($values4 as $key5 => $values5) {
                    foreach ($values5 as $key6 => $values6) {
                        if (is_array($values6)) {
                            foreach ($values6 as $key7 => $values7) {
                                echo $key . "=>" . $key2 . "=>" . "$key3" . "=>" . "$key4" . "=>" . "$key5" . "=>" . "$key6" . "=>" . "$key7" . "=>" . "$values7" . "<br>";
                                break;
                            }
                        }
                    }
                }
                if (is_array($values6)) {
                    foreach ($values6 as $key7 => $values7) {
                        echo $key . "=>" . $key2 . "=>" . "$key3" . "=>" . "$key4" . "=>" . "$key5" . "=>" . "$values5" . "<br>";
                        break;
                    }
                }
            }
        }

        function stringSorting()
        {
            $string = ['5', '8', '7', '5', '5', '1', '6', '4', '9'];

            for ($j = 0; $j < count($string); $j++) {
                for ($i = 0; $i < count($string) - 1; $i++) {
                    if ($string[$i] > $string[$i + 1]) {
                        $temp = $string[$i + 1];
                        $string[$i + 1] = $string[$i];
                        $string[$i] = $temp;
                    }
                }
            }
            // $str = implode(',',array_unique(explode(',', $str)));
            echo "<pre>";
            echo "<h1>Task 2:Sorted String</h1>";
            print_r($string) . "<br>";
            echo "</pre>";
        }

        function SortAndRemoveDublicate()
        {
            $string1 = ['5', '8', '7', '4', '5', '1', '6', '4', '9'];
            $string2 = ['4', '5', '7', '8', '6', '9', '4'];
            $stringforsort = array_unique(array_merge($string1, $string2));

            for ($j = 0; $j < count($stringforsort); $j++) {
                for ($i = 0; $i < count($stringforsort) - 1; $i++) {
                    if ($stringforsort[$i] > $stringforsort[$i + 1]) {
                        $temp = $stringforsort[$i + 1];
                        $stringforsort[$i + 1] = $stringforsort[$i];
                        $stringforsort[$i] = $temp;
                    }
                }
            }
            echo "<pre>";
            echo "<h1>Task 3 : Merge two String and  Sort </h1>";
            print_r($stringforsort) . "<br>";
            echo "</pre>";
        }

        function snaketocamel()
        {
            $string = "john_peter";
            $str = str_replace("_", "", ucwords($string, " /_"));
            echo "<h1>Task 4 : Snake to Camel Case </h1>";
            echo $str . "<br>";
        }

        function ReplaceString()
        {
            $string = "Hello John Hello Peter";
            $substr = "hello";
            str_replace($substr, "***", $string, $counter);
            echo "<h1>Task 5 : Relace hello with *** </h1>";
            echo $string . "<br>";
            echo str_ireplace($substr, "***", $string, $counter) . "<br>";
            echo "<h3> Count and Define replace time is OOD OR EVEN </h3>";

            if ($counter % 2 == 0) {
                echo $counter . "(EVEN)" . ' replacements In the  String ', PHP_EOL;
            } else {
                echo $counter . "(ODD)" . ' replacements In the String', PHP_EOL;
            }

            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    }

    $obj = new RenderArray();
    $obj->printArray();
    $obj->stringSorting();
    $obj->SortAndRemoveDublicate();
    $obj->snaketocamel();
    $obj->ReplaceString();
    ?>
</body>

</html>