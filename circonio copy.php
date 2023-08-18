<?php

$tipos = [
    ['ideas'=>'Explore','upcera'],
    ['Multicapa'],
    ['HT'],
];

$colores = [
    'A1',
    'A2',
    'A3',
    'A3.5',
    'B1',
    'B2',
    'C1',
    'C2',
    'D1',
    'D2',
    'D3',
    'Blanco',

];

$alturas = [
    '14',
    '18',
    '20',
    '25',
];

?>

<!DOCTYPE html>
<html lang="en" class="">

<head>
    <title>Circonio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ideas-250': '#4f9cf4',
                        'ideas-500': '#4384ce',
                        'ideas-750': '#2a5281',
                    }
                }
            }
        }
    </script>

</head>

<body class="">

    <div class="grid grid-cols-2 place-content-start mx-auto mt-4 gap-0 justify-start" style="width: 200mm;">
        <?php
        foreach ($tipos as $tipo) {
            foreach ($colores as $color) {
                foreach ($alturas as $altura) {

        ?>
                    <div class="border-ideas-500 border-dashed border-[.1mm] flex items-center relative justify-center break-inside-avoid overflow-hidden" style="width: 100mm;height:37mm;">
                        <div class="space-y-2">
                            <h1 class="font-bold text-4xl text-gray-700 text-center">
                                <span>
                                    <?php echo ($tipo); ?>
                                </span>
                                <span class="text-ideas-500">
                                    <?php echo ($color); ?>
                                </span>
                                <span>
                                    <?php echo ($altura); ?>
                                </span>
                            </h1>
                            <h2 class="text-sm text-gray-400 text-center">
                                Circonio <span><?php echo ($tipo); ?></span> color <span class=""><?php echo ($color); ?></span> altura <span><?php echo ($altura); ?></span>mm
                            </h2>
                        </div>
                        <img src="https://www.ideasms.es/wp-content/uploads/2022/01/ideas-h100.svg" alt="" class="absolute left-[60mm] bottom-[-20mm] opacity-10" style="height:80mm;">
                    </div>
        <?php
                }
            }
        }

        ?>
    </div>






</body>

</html>