
<?php
/*
 ФУНКЦИЯ ЗАПРОСОВ
 */
require 'connect.php'; /*Подключаем */

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}



//Проверка выполнения запроса к бд
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }

    return true;
}
//Запрос на получение данных одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";  /*Запрос*/

    if(!empty($params)){ //если параметры непустые
        $i = 0;
        foreach($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value ";
            }
            else{
                $sql = $sql . "AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);   /*Подготовка*/
    $query->execute();              /*Выполнение*/

    dbCheckError($query);

    return $query->fetchAll();
}


//Запрос на получение одной строки из конкретной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";  /*Запрос*/

    if(!empty($params)){ //если параметры непустые
        $i = 0;
        foreach($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value ";
            }
            else{
                $sql = $sql . "AND $key = $value";
            }
            $i++;
        }
    }
    //$sql = $sql . " LIMIT 1";

    $query = $pdo->prepare($sql);   /*Подготовка*/
    $query->execute();              /*Выполнение*/
    dbCheckError($query);
    return $query->fetch(); //лимит нужен если через fetchAll
}
$params = [
  'gender' => 1,
    'username' => 'Nataly'
];

//Запись в таблицу БД
function insert($table, $params){
    global $pdo;
    /*$sql="INSERT INTO $table (username, email, password, f_name, l_name, gender, birthday, admin, id_city) VALUES(:user,:mail,:pass,:fname,:lname,:sex,:bday,:adm,:city)" ;*/
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0){
            $coll = $coll . "$key";
            $mask = $mask . "'" . "$value" . "'";
        }else{
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value"."'";
        }
        $i++;
    }

    $sql ="INSERT INTO $table ($coll) VALUES($mask)";
    tt($sql);
    exit();
    $query = $pdo->prepare($sql);   /*Подготовка*/
    $query->execute($params);              /*Выполнение*/
    dbCheckError($query);

}
$arrData = [
    'username' => 'Glebych',
    'email' => 'bugaga@re.ru',
    'password' => 'xem564f849',
    'f_name' => 'Gleb',
    'l_name' => 'Martov',
    'gender' => '0',
    'birthday' => '1998-04-21',
    'admin' => '0',
    'id_city' => '3'
];

insert('users',$arrData);

//tt(selectAll('users', $params));
//tt(selectOne('users'));