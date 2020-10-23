<?php 
 

     $metaloides = ['B'];
     $metaloides1 = ['Si'];
     $metaloides2 = ['Ge','As',];
     $metaloides3 = ['Sb','Te'];
     $metaloides4 = ['Po'];

     $lantanidos = ['La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'];
     $lantanidos1 = ['La-Lu'];
     $actinidos = ['Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
     $actinidos1 = ['Ac-Lr'];

     $mTransicion = ['Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn'];
     $mTransicion1 = ['Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd'];
     $mTransicion2 = ['Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg'];
     $mTransicion3 = ['Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn'];

     $metaloides = ['B'];
     $metaloides1 = ['Si'];
     $metaloides2 = ['Ge','As',];
     $metaloides3 = ['Sb','Te'];
     $metaloides4 = ['Po'];

     $otrosMetales = ['Al'];
     $otrosMetales1 = ['Ga'];
     $otrosMetales2 = ['Ln','Sn'];
     $otrosMetales3 = ['TI','Pb','Bi'];
     $otrosMetales4 = ['Nh','FI','Mc','Lv'];

     $otrosNoMetales1 = ['C','N','O'];
     $otrosNoMetales2 = ['P','S'];
     $otrosNoMetales3 = ['Se'];

     $otrosNoMetales = ['H'];
     $alcalinos = ['Li','Na','K','Rb','Cs','Fr'];
     $alcalinoTerreos = ['Be','Mg','Ca','Sr', 'Ba','Ra'];
     $GasesNobles = ['He','Ne','Ar','Kr','Xe','Rn','Og'];

     $alogenos = ['F','CI','Br','I','At','Ts'];

    

     
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla periodica</title>
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
   
</head>
<body class="body">

<h1 style="text-align:center;">Elementos de la tabla periodica</h1>

<div class="row">
    <div class="col" style=" font-weight: bold; background-color: purple;"><p>Alcalinos</p></div>
    <div class="col" style=" font-weight: bold; background-color: plum;"><p>Alcalinotérreos</p></div>
    <div class="col" style=" font-weight: bold; background-color: rgb(199, 171, 13);"><p>Metales de Transicion</p></div>
    <div class="col" style=" font-weight: bold; background-color: chocolate;"><p>Lantánidos </p></div>
    <div class="col-12" style=" font-weight: bold; background-color: rgb(210, 30, 186);"><p>Actínidos</p></div>
            
    <div class="col" style=" font-weight: bold; background-color:yellowgreen;"><p>Metalodies</p></div>
    <div class="col" style=" font-weight: bold; background-color:yellow;"><p>Otros Metales</p></div>
    <div class="col" style=" font-weight: bold; background-color:green;"><p>Otros No Metales</p></div>
    <div class="col" style=" font-weight: bold; background-color:rgb(50, 130, 205);"><p>Alogenos</p></div>
    <div class="col" style=" font-weight: bold; background-color: blue;"><p>Gases Nobles</p></div>
    
</div>

 
<div >
<?php  foreach($otrosNoMetales as $ONM): ?>

<div style=" font-weight: bold; text-align:center" class="otrosNoMetales"> <?php echo "<span> {$ONM} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($alcalinos as $a): ?>

<div style="  font-weight: bold; text-align:center" class="alcalinos"> <?php echo "<span> {$a} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($alcalinoTerreos as $a2): ?>

<div style=" font-weight: bold; text-align:center" class="alcalinoTerreos"> <?php echo "<span> {$a2} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($GasesNobles as $GN): ?>

<div style=" font-weight: bold; text-align:center" class="gNobles"> <?php echo "<span> {$GN} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($lantanidos as $la): ?>

<div  style=" font-weight: bold; text-align:center"class="lantanidos"> <?php echo "<span> {$la} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($lantanidos1 as $la1): ?>

<div style=" font-weight: bold; text-align:center" class="lantanidos1"> <?php echo "<span> {$la1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($actinidos as $ac): ?>

<div style=" font-weight: bold; text-align:center" class="actinidos"> <?php echo "<span> {$ac} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($actinidos1 as $ac1): ?>

<div  style=" font-weight: bold; text-align:center" class="actinidos1"> <?php echo "<span> {$ac1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosNoMetales1 as $ONM1): ?>

<div style=" font-weight: bold; text-align:center" class="otrosNoMetales1"> <?php echo "<span> {$ONM1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosNoMetales2 as $ONM2): ?>

<div style=" font-weight: bold; text-align:center" class="otrosNoMetales2"> <?php echo "<span> {$ONM2} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosNoMetales3 as $ONM3): ?>

<div style=" font-weight: bold; text-align:center" class="otrosNoMetales3"> <?php echo "<span> {$ONM3} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($mTransicion as $Metra): ?>

<div style="font-weight: bold;text-align:center" class="mTransicion"> <?php echo "<span> {$Metra} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($mTransicion1 as $Metra1): ?>

<div style=" font-weight: bold; text-align:center" class="mTransicion1"> <?php echo "<span> {$Metra1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($mTransicion2 as $Metra2): ?>

<div style=" font-weight: bold; text-align:center" class="mTransicion2"> <?php echo "<span> {$Metra2} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($mTransicion3 as $Metra3): ?>

<div style=" font-weight: bold; text-align:center" class="mTransicion3"> <?php echo "<span> {$Metra3} </span>" ?> </div>

<?php endforeach ?>
</div>


<div>
<?php  foreach($otrosMetales as $OM): ?>

<div style=" font-weight: bold; text-align:center" class="otrosMetales"> <?php echo "<span> {$OM} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosMetales1 as $OM1): ?>

<div style=" font-weight: bold; text-align:center" class="otrosMetales1"> <?php echo "<span> {$OM1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosMetales2 as $OM2): ?>

<div style=" font-weight: bold; text-align:center" class="otrosMetales2"> <?php echo "<span> {$OM2} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosMetales3 as $OM3): ?>

<div style=" font-weight: bold; text-align:center" class="otrosMetales3"> <?php echo "<span> {$OM3} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($otrosMetales4 as $OM4): ?>

<div style=" font-weight: bold; text-align:center" class="otrosMetales4"> <?php echo "<span> {$OM4} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($metaloides as $Me): ?>

<div style=" font-weight: bold; text-align:center" class="metaloides"> <?php echo "<span> {$Me} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($metaloides1 as $Me1): ?>

<div style=" font-weight: bold; text-align:center" class="metaloides1"> <?php echo "<span> {$Me1} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($metaloides2 as $Me2): ?>

<div style=" font-weight: bold; text-align:center" class="metaloides2"> <?php echo "<span> {$Me2} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($metaloides3 as $Me3): ?>

<div style="font-weight: bold;text-align:center" class="metaloides3"> <?php echo "<span> {$Me3} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($metaloides4 as $Me4): ?>

<div style=" font-weight: bold; text-align:center" class="metaloides4"> <?php echo "<span> {$Me4} </span>" ?> </div>

<?php endforeach ?>
</div>


<div>
<?php  foreach($alogenos as $alo): ?>

<div style="font-weight: bold;text-align:center" class="alogenos"> <?php echo "<span> {$alo} </span>" ?> </div>

<?php endforeach ?>
</div>

<div class="ot otrosmetales"></div>



     
</body>
</html>