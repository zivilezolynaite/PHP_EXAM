/*
PAPILDOMAS
7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png . 
Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. (2 balai)
*/

<html>
<body>
<table>
    <tbody>
        <?php for ($j = 0; $j < 7; $j++) { ?>
            <tr>
                <?php for ($i = 0; $i < 7; $i++) { 
                    $backgroundColor = 'grey';
                    if ($i === $j || $i === (6 - $j)) {
                        $backgroundColor = '#7b8de8';
                    } ?>
                    <td style="width: 120px; height: 150px; background-color: <?= $backgroundColor ?>; border: solid 1px grey">
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>