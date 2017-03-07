



<?php
	echo " I am here";
    try {
        // open connection to MongoDB server
        $conn = new Mongo('localhost');

        // access database
        $db = $conn->test;

        // access collection
        $collection = $db->login;


        $username = $_POST['username'];
        $password = $_POST['userPassword'];


        $user = $db->$collection->findOne(array('username'=> $username, 'password'=> $password));
        if(isset($check)){
            echo 'success';
        }else{
            echo 'failure';
        }
        

        // disconnect from server
        $conn->close();

    } catch (MongoConnectionException $e) {
        die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
        die('Error: ' . $e->getMessage());
    }

$_SESSION["loggedInUser"] = $correct;

?>
