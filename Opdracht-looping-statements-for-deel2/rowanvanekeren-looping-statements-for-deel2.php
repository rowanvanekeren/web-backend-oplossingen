<?php $rijen=10; $kolommen=10; $cijfer=0;

$ver =0;
$hor =0;


?>
 
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Opdracht-concat</title>

</head>

<body>



    <style>
        .green {
            background-color: green;
        }
    </style>








<table border="1">
    <?php for( $b=0 ; $b <=$ rijen; ++$b ): ?>

    <tr>
        <?php for( $i=0 ; $i <=$ kolommen; ++$i ): ?>

        <?php if(($b*$i)%2==0): ?>

        <td>
            <?php echo $b*$i ?>
        </td>


        <?php endif ?>

        <?php if(($b*$i)%2 !=0): ?>

        <td class="green">
            <?php echo $b*$i ?>
        </td>

        <?php endif ?>


        <?php endfor ?>
    </tr>

    <?php endfor ?>

</table>

</body>

</html>