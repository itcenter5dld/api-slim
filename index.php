<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get ('/main', function (){ echo 'หน้าแรก';
});

$app->get ('/register', function (){ echo 'สมัครสมาชิกใหม่';
});

$app->get ('/forgot', function (){ echo 'ลืมรหัส';
});


$app->get ('/edit', function (){ echo 'แก้ไขข้อมูลส่วนตัว';
});

$app->get ('/search', function (){ echo 'ค้นหาสถานที่';
});

$app->get ('/detail', function (){ echo 'ข้อมูลส่วนตัว';
});

$app->get ('/point', function (){ echo 'แสดงจุดพิกัดที่ค้นหา';
});

$app->get ('/goto', function (){ echo 'เดินทาง จากต้นทางไปยังจุดหมาย';
});

$app->get ('/editpoint', function (){ echo 'แก้ไขจุดพิกัด';
});



$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();