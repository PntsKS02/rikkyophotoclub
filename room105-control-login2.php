<?php
session_start();
$UID = $_POST["inputsID"];
try{
        //追加事項の記入
        //PDOの設定
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
        $pdo = new PDO("mysql:host=mysql1018.db.sakura.ne.jp;dbname=focus-on_rikkyo","focus-on","Mitakari402085", $options); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    $sql = "select * from room105control WHERE userID = :UID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':UID', $UID);
    $stmt->execute();
    $rs = $stmt->fetchall();
	foreach($rs as $result){
            $member["id"] = $result["id"];
            $member["userID"] = $result["userID"];
            $member["PS"] = $result["PS"];
            $member["firstname"] = $result["firstname"];
            $member["middlename"] = $result["middlename"];
            $member["faculty"] = $result["faculty"];
    } 
    if (password_verify($_POST['inputsPS'], $member['PS'])) {
        $_SESSION['id'] = $member['userID'];
        $_SESSION['firstname'] = $member['firstname'];
        $_SESSION['middlename'] = $member['middlename'];
        $_SESSION['faculty'] = $member['faculty'];
        $_SESSION['control'] = $member['userID'];
        setcookie("P_S", "yes"); 
        header("location: room105-controlpage");
    }else{
        setcookie("P_S", "not");
        header("location: room105-control-login");
    }
    unset($pdo);
}catch(PDOException $e){
	
}
    ?>