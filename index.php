<?php

$carteles = array(
    array('numero' => '01', 'nombre' => 'Scanbody', 'imagen' => 'sb'),
    array('numero' => '02', 'nombre' => 'Análogo', 'imagen' => 'an'),
    array('numero' => '04-05', 'nombre' => 'Calcinable', 'imagen' => 'cal'),
    array('numero' => '06', 'nombre' => 'Transfer', 'imagen' => 'tran'),
    array('numero' => '08', 'nombre' => 'Tapón Protección', 'imagen' => 'tapon'),
    array('numero' => '09', 'nombre' => 'Tornillo Clínica', 'imagen' => 'tcl'),
    array('numero' => '10', 'nombre' => 'Pilar Fresable', 'imagen' => 'fre'),
    array('numero' => '11', 'nombre' => 'Pilar Temporal AR', 'imagen' => 'tempar'),
    array('numero' => '12', 'nombre' => 'Pilar Cicatrización', 'imagen' => 'cic'),
    array('numero' => '12', 'nombre' => 'Pilar Cicatrización', 'imagen' => 'cic'),
    array('numero' => '13-15', 'nombre' => 'Pilar MultiUnit', 'imagen' => 'multi'),
    array('numero' => '16-17', 'nombre' => 'Interfase RO', 'imagen' => 'introt'),
    array('numero' => '18-19', 'nombre' => 'Interfase AR', 'imagen' => 'intar'),
    array('numero' => '20', 'nombre' => 'Delta-Loc', 'imagen' => 'deltaloc'),
    array('numero' => '20', 'nombre' => 'Delta-Loc', 'imagen' => 'deltaloc'),
    array('numero' => '21', 'nombre' => 'Análogo Digital', 'imagen' => 'and'),
    array('numero' => '21', 'nombre' => 'Análogo Digital Azul', 'imagen' => 'andb'),
    array('numero' => '22', 'nombre' => 'Pilar Temporal RO', 'imagen' => 'tempro'),
    array('numero' => '23-26', 'nombre' => 'MultiUnits Angulados', 'imagen' => 'mua'),
    array('numero' => '29', 'nombre' => 'Tornillo Torx', 'imagen' => 'torx'),
    array('numero' => '31', 'nombre' => 'Scanbody Intraoral', 'imagen' => 'sbi'),
    array('numero' => '56/58', 'nombre' => 'Interfase Personalizable', 'imagen' => 'intcu'),
    array('nombre' => 'Instrumental', 'imagen' => 'instru'),
    array('nombre' => 'Tornillos Dinámicos', 'imagen' => 'das')
);


?>



<!DOCTYPE html>
<html lang="en" class="w-[210mm]">

<head>
    <title>Carteles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'delta-250': '#3f8d4b',
                        'delta-500': '#2e6737',
                        'delta-750': '#17341b',
                    }
                }
            }
        }
    </script>

</head>

<body class="w-[210mm]">
    <?php foreach ($carteles as $cartel) { ?>
        <div class="h-[297mm] grid place-content-center">

            <div class="p-[10mm] border-delta-500-10 flex items-center justify-between relative" style="width: 150mm;height:100mm;">
                <div class="w-5/6">
                    <h1 class=" font-bold text-6xl text-gray-700">
                        <?php if (isset($cartel['numero'])) { ?>
                            <span class="text-delta-500"><?php echo ($cartel['numero']); ?></span><?php } ?>
                    </h1>
                    <h2 class="text-3xl"><span><?php echo ($cartel['nombre']); ?></span></h2>
                </div>
                <div class="">
                    <img src="./abutments/<?php echo ($cartel['imagen']) ?>.svg" alt="" style=" width:75mm;">
                </div>
                <div class="absolute left-0 bottom-[25mm] opacity-10 left-[10mm]">
                    <img src="https://deltaabutments.es/imgs/delta_svg_300.svg" alt="" style="height: 40mm;">
                </div>

                <!-- lineas -->
                
                <div class="absolute w-[20mm] h-[20mm] border-l border-black bottom-[-25mm] left-0"></div>
                <div class="absolute w-[20mm] h-[20mm] border-r border-black bottom-[-25mm] right-0"></div>

                <div class="absolute w-[20mm] h-[20mm] border-l border-black top-[-25mm] left-0"></div>
                <div class="absolute w-[20mm] h-[20mm] border-r border-black top-[-25mm] right-0"></div>
                
                
                <div class="absolute w-[20mm] h-[20mm] border-b border-black bottom-0 right-[-25mm]"></div>
                <div class="absolute w-[20mm] h-[20mm] border-b border-black bottom-0 left-[-25mm]"></div>

                <div class="absolute w-[20mm] h-[20mm] border-t border-black top-0 right-[-25mm]"></div>
                <div class="absolute w-[20mm] h-[20mm] border-t border-black top-0 left-[-25mm]"></div>


            </div>
        </div>
    <?php
    }

    ?>






</body>

</html>