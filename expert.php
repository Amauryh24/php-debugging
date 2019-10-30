<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="ui main container">
        <h1 class="">Exercice challenge debboged !</h1>
        <div class="ui success message">
            <p>Exercice 1</p>
            <?php
            echo "Exercise 1 starts here:";
            echo new_exercise();
            function new_exercise()
            {
                $x = 1;
                $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
                echo  $block;
            }
            ?>
        </div>
        <div class="ui success message">
            <p>Exercice 2</p>
            <?php
            $week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
            $monday = $week[0];
            
            echo $monday;

            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 3</p>
            <?php
            $str = 'Debugged ! Also very fun';
            echo substr($str, 0, 10);
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 4</p>
            <?php
          foreach ($week as &$day) {
              $day = substr($day, 0, strlen($day)-3);
          }
        
        print_r($week);
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 5</p>
            <?php
         $arr = [];
         for ($letter = 'a'; $letter <= 'z'; $letter++) {
             array_push($arr, $letter);
             if ($letter == 'z') {
                 break;
             }
         }
         
         print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 6</p>
            <?php
    function randomHeroName()
    {
        $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
        $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
        $randname = [$hero_firstnames[array_rand($hero_firstnames)], $hero_lastnames[array_rand($hero_lastnames)]];
        echo(implode("-", $randname));
    }
    
    echo "Here is the name: ";
    randomHeroName();
              
       
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 7</p>
            <?php
                function copyright(int $year)
                {
                    echo "&copy; $year BeCode";
                }
                //print the copyright
                copyright(date('Y'));
               

             
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 8</p>
            <?php
               function login(string $email, string $password)
               {
                   if ($email == 'john@example.be' && $password == 'pocahontas') {
                       return 'Welcome John Smith';
                   }
                   return  'No access';
               }
            //should great the user with his full name (John Smith)
            $login = login('john@example.be', 'pocahontas');
            echo "$login <br>";
           
            //no access
            $login = login('john@example', 'dfgidfgdfg');
            echo "$login <br>";
            //no access
            $login = login('wrong@example', 'wrong');
            echo "$login <br>";
            ?>
        </div>

        <div class="ui success message">
            <p>Exercice 9</p>
            <?php

                function isLinkValid(string $link)
                {
                    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

                    foreach ($unacceptables as $unacceptable) {
                        if (strpos($link, $unacceptable) !== false) {
                            return 'Unacceptable Found<br />';
                        }
                    }
                    return 'Acceptable<br />';
                }
                //invalid link
                echo isLinkValid('http://www.google.com/hack.pdf');
                //invalid link
                echo  isLinkValid('https://google.com');

                //VALID link
                echo  isLinkValid('http://google.com');
                //VALID link
                echo  isLinkValid('http://google.com/test.txt');
            ?>
        </div>


        <div class="ui success message">
            <p>Exercice 10</p>
            <?php

                $areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
                $validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
                //from here on you can change the code
                $areTheseFruits = array_intersect($areTheseFruits, $validFruits);
                
                var_dump($areTheseFruits);//do not change this
            ?>
        </div>
    </div>
</body>

</html>