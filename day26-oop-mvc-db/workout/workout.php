<?php

// 1.
class computer
{
    // 2.
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'off';

    // 6.
    public function switchOff()
    {
        $this->status = 'off';
    }

    // 7.
    public function toggleSwitch()
    {
        $this->status = $this->status == 'on' ? 'off' : 'on';

        // alternative:
        // if ($this->status == 'on') {
        //     $this->status = 'off';
        // } else {
        //     $this->status = 'on';
        // }
    }
}

// 3.
$my_computer = new computer();

// 4.
$my_computer->model = 'Lenovo Yoga';
$my_computer->operating_system = 'Windows 10';
$my_computer->is_portable = true;
$my_computer->status = 'on';

// 6.
$my_computer->switchOff();

// 7.
$my_computer->toggleSwitch();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workout</title>
</head>
<body>
    
    <!-- 5. -->
    <h1>My computer</h1>
    <table>
        <tr><th>Model:</th><td><?php echo $my_computer->model ?></td>
        <tr><th>OS:</th><td><?= $my_computer->operating_system ?></td>
        <tr><th>Portable:</th><td><?= $my_computer->is_portable ? 'yes' : 'no' ?></td>
        <tr><th>Status:</th><td>switched <?= $my_computer->status ?></td>
    </table>
    
</body>
</html>


