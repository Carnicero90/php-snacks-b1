<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_snacks</title>
</head>

<body>
    <main>
        <h1>SNACKS</h1>
        <!-- prima milestone -->
        <section>
            <h2>Prima Milestone</h2>
            <!-- php -->
            <?php
            // suddivisione dati un poco primitiva
            $squadre = [
                0 => 'Milan',
                1 => 'Lakers',
                2 => 'Pro Vercelli',
                3 => 'Virtus Bologna',
            ];
            $risultati_terza_giornata = [
                0 => [
                    'team_casa' => 0,
                    'team_fuori' => 2,
                    'punti_casa' =>  32,
                    'punti_fuori' => 65
                ],
                1 => [
                    'team_casa' => 3,
                    'team_fuori' => 1,
                    'punti_casa' =>  132,
                    'punti_fuori' => 65
                ],
            ]

            ?>
            <!-- END php -->
            <!-- table -->
            <table>
                <thead>
                    <tr>
                        <th>casa</th>
                        <th>fuori</th>
                        <th>risultato</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($risultati_terza_giornata); $i++) { ?>
                        <tr>
                            <td><?php echo $squadre[$risultati_terza_giornata[$i]['team_casa']] ?></td>
                            <td><?php echo $squadre[$risultati_terza_giornata[$i]['team_fuori']] ?></td>
                            <td style="text-align: right"><?php echo $risultati_terza_giornata[$i]['punti_casa'] . ' | ' . $risultati_terza_giornata[$i]['punti_fuori'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- END table -->
        </section>
        <!-- END prima milestone -->

        <!-- seconda milestone -->
        <section>
            <h2>Seconda Milestone</h2>
            <!-- php -->
            <?php
            // params
            $nome = $_GET['name'];
            $email = $_GET['mail'];
            $eta = $_GET['age'];

            // validazione
            $nome_adeguatamentente_lungo = strlen($nome) > 3;
            $mail_valida = strpos($email, '@') !== false && strpos($email, '.') !== false;
            $eta_valida = is_numeric($eta);
            $logged = $nome_adeguatamentente_lungo && $mail_valida && $eta_valida;
            ?>
            <!-- END php -->
            <?php if ($logged) { ?>
            <span>Accesso riuscito</span> <br>
            <span><?php echo 'Benvenuto, ' . $nome ?></span>
            <?php } else {?>
            <span>Accesso negato</span>
            <?php } ?>
        </section>
        <!-- END seconda milestone -->
    </main>
</body>
</html>
