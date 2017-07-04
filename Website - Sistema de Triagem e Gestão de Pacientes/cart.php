<?php
/*Terminal Node 1*/
if
(
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 1 
  ) 
)
{
    $terminalNode = -1;
    $class = 1;
}

/*Terminal Node 2*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 1 
  ) 
)
{
    $terminalNode = -2;
    $class = 1;
}

/*Terminal Node 3*/
if
(
  (
       $_POST['vomitos'] == 1 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 1 
  ) 
)
{
    $terminalNode = -3;
    $class = 1;
}

/*Terminal Node 4*/
if
(
  (
       $_POST['vomitos'] == 0 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 1 
  ) 
)
{
    $terminalNode = -4;
    $class = 2;
}

/*Terminal Node 5*/
if
(
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 1 
  ) 
)
{
    $terminalNode = -5;
    $class = 2;
}

/*Terminal Node 6*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.05) 
    &&
    ($_POST['glicemia'] <= 107)
)
{
    $terminalNode = -6;
    $class = 2;
}

/*Terminal Node 7*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
   ( $_POST['temperatura'] <= 38.05) &&
    ($_POST['glicemia'] > 107) &&
    ($_POST['glicemia'] <= 117.5) 
)
{
    $terminalNode = -7;
    $class = 3;
}

/*Terminal Node 8*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.05)&&
    ($_POST['glicemia'] > 117.5) &&
    ($_POST['glicemia'] <= 121.5)
)
{
    $terminalNode = -8;
    $class = 2;
}

/*Terminal Node 9*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.05) &&
    ($_POST['glicemia'] > 121.5) &&
    ($_POST['glicemia'] <= 142.5 )
)
{
    $terminalNode = -9;
    $class = 3;
}

/*Terminal Node 10*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.05) &&
    ($_POST['glicemia'] > 142.5 )
)
{
    $terminalNode = -10;
    $class = 2;
}

/*Terminal Node 11*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 38.05) 
)
{
    $terminalNode = -11;
    $class = 2;
}

/*Terminal Node 12*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.55) &&
    ($_POST['glicemia'] <= 148 )
)
{
    $terminalNode = -12;
    $class = 3;
}

/*Terminal Node 13*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] <= 38.55) &&
    ($_POST['glicemia'] > 148) 
)
{
    $terminalNode = -13;
    $class = 2;
}

/*Terminal Node 14*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 38.55) &&
    ($_POST['temperatura'] <= 39.15) &&
    ($_POST['glicemia'] <= 112.5) 
)
{
    $terminalNode = -14;
    $class = 3;
}

/*Terminal Node 15*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 38.55) &&
    ($_POST['temperatura'] <= 39.15) &&
    ($_POST['glicemia'] > 112.5) 
)
{
    $terminalNode = -15;
    $class = 2;
}

/*Terminal Node 16*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 39.15) 
)
{
    $terminalNode = -16;
    $class = 3;
}

/*Terminal Node 17*/
if
(
  (
       $_POST['vomitos'] == 1 
  ) &&
  (
       $_POST['hemorragia'] == 1 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 135.5) &&
    ($_POST['temperatura'] <= 36.85) 
)
{
    $terminalNode = -17;
    $class = 3;
}

/*Terminal Node 18*/
if
(
  (
       $_POST['vomitos'] == 0 
  ) &&
  (
       $_POST['hemorragia'] == 1 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 135.5) &&
    ($_POST['temperatura'] <= 36.85) 
)
{
    $terminalNode = -18;
    $class = 4;
}

/*Terminal Node 19*/
if
(
  (
       $_POST['hemorragia'] == 0 
  ) &&
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 135.5) &&
    ($_POST['temperatura'] <= 36.85) 
)
{
    $terminalNode = -19;
    $class = 4;
}

/*Terminal Node 20*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 135.5) &&
    ($_POST['temperatura'] > 36.85) 
)
{
    $terminalNode = -20;
    $class = 3;
}

/*Terminal Node 21*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 1 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] > 135.5)
)
{
    $terminalNode = -21;
    $class = 3;
}

/*Terminal Node 22*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 142) &&
    ($_POST['temperatura'] <= 38.15) 
)
{
    $terminalNode = -22;
    $class = 4;
}

/*Terminal Node 23*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 142) &&
    ($_POST['temperatura'] > 38.15) &&
    ($_POST['temperatura'] <= 38.55) 
)
{
    $terminalNode = -23;
    $class = 3;
}

/*Terminal Node 24*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 142) &&
    ($_POST['temperatura'] > 38.55) &&
    ($_POST['temperatura'] <= 39.35) 
)
{
    $terminalNode = -24;
    $class = 4;
}

/*Terminal Node 25*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 142) &&
    ($_POST['temperatura'] > 39.35) &&
    ($_POST['temperatura'] <= 39.65) 
)
{
    $terminalNode = -25;
    $class = 3;
}

/*Terminal Node 26*/
if
(
  (
       $_POST['tonturas'] == 1 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 142) &&
    ($_POST['temperatura'] > 39.65) 
)
{
    $terminalNode = -26;
    $class = 4;
}

/*Terminal Node 27*/
if
(
  (
       $_POST['hemorragia'] == 1 
  ) &&
  (
       $_POST['azia'] == 1 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 120.5) &&
    ($_POST['temperatura'] <= 36.75) 
)
{
    $terminalNode = -27;
    $class = 4;
}

/*Terminal Node 28*/
if
(
  (
       $_POST['hemorragia'] == 0 
  ) &&
  (
       $_POST['azia'] == 1 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 120.5) &&
    ($_POST['temperatura'] <= 36.35) 
)
{
    $terminalNode = -28;
    $class = 4;
}

/*Terminal Node 29*/
if
(
  (
       $_POST['hemorragia'] == 0 
  ) &&
  (
       $_POST['azia'] == 1 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 120.5) &&
    ($_POST['temperatura'] > 36.35) &&
    ($_POST['temperatura'] <= 36.75) 
)
{
    $terminalNode = -29;
    $class = 5;
}

/*Terminal Node 30*/
if
(
  (
       $_POST['azia'] == 1 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 120.5) &&
    ($_POST['temperatura'] > 36.75) 
)
{
    $terminalNode = -30;
    $class = 4;
}

/*Terminal Node 31*/
if
(
  (
       $_POST['azia'] == 0 
  ) &&
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 120.5) 
)
{
    $terminalNode = -31;
    $class = 5;
}

/*Terminal Node 32*/
if
(
  (
       $_POST['tonturas'] == 0 
  ) &&
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] > 120.5) &&
    ($_POST['glicemia'] <= 142) 
)
{
    $terminalNode = -32;
    $class = 4;
}

/*Terminal Node 33*/
if
(
  (
       $_POST['fractura'] == 1 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] > 142) 
)
{
    $terminalNode = -33;
    $class = 3;
}

/*Terminal Node 34*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] <= 124.5)
)
{
    $terminalNode = -34;
    $class = 5;
}

/*Terminal Node 35*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] > 124.5) &&
    ($_POST['glicemia'] <= 127.5) &&
    ($_POST['temperatura'] <= 36.65) 
)
{
    $terminalNode = -35;
    $class = 5;
}

/*Terminal Node 36*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 36.65) &&
    ($_POST['glicemia'] > 124.5) &&
    ($_POST['glicemia'] <= 126.5) 
)
{
    $terminalNode = -36;
    $class = 4;
}

/*Terminal Node 37*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['temperatura'] > 36.65) &&
    ($_POST['glicemia'] > 126.5) &&
    ($_POST['glicemia'] <= 127.5) 
)
{
    $terminalNode = -37;
    $class = 5;
}

/*Terminal Node 38*/
if
(
  (
       $_POST['fractura'] == 0 
  ) &&
  (
       $_POST['problema'] == 0 
  ) &&
  (
       $_POST['dificuldade'] == 0 
  ) &&
    ($_POST['glicemia'] > 127.5)
)
{
    $terminalNode = -38;
    $class = 4;
}
?>