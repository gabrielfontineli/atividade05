<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table style="display:table;">
            <thead>
                <tr>
                    <th colspan="2"></th>
                    <th class="musica">Musica</th>
                    <th class="genero">Genero</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="chart-table-image">
                        <a href="https://open.spotify.com/track/67BtfxlNbhBmCDR2L2l8qd" target="_blank">
                            <img src="https://i.scdn.co/image/ab67616d00004851664034dd80e91b28f773598d">
                        </a>
                    </td>
                    <td class="posicao">1</td>
                    
                    <td class="musica">
                        <strong> <?php echo $nome; ?> </strong>
                        <span>by Lil Nas X</span>
                    </td>
                    <td class="genero">viado</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>