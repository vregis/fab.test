<html>
<head>
    <title>Result table</title>
</head>
<body>
    <table border = 1>
        <thead>
            <th>IP</th>
            <th>Browser</th>
            <th>OS</th>
            <th>First Url</th>
            <th>Last Url</th>
            <th>Count unique Url</th>
            <th>Time</th>
        </thead>
        <tbody>
        <?php if($data):?>
            <?php foreach($data['data'] as $part):?>
            <tr>
                <td><?php echo $part->getIp();?></td>
                <td><?php echo $part->getBrowser();?></td>
                <td><?php echo $part->getOs();?></td>
                <td><?php echo $part->getFirstUrl();?></td>
                <td><?php echo $part->getLastUrl();?></td>
                <td><?php echo $part->getUniqueUrl();?></td>
                <td><?php echo date("H:i:s", $part->getTime());?></td>
            </tr>
            <?php endforeach; ?>
        <?php endif;?>
        </tbody>

    </table>
</body>
</html>
