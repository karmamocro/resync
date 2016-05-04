<?php

function isAdmin(){
  if( !isset($_SESSION['user']['level'])){
       return false;
   }

   return ($_SESSION['user']['level'] == 1337);
}

function LoggedIn(){
  if(!isset($_SESSION['user']))
    return false;



  $user = $_SESSION['user'];

  $db = new PDO('mysql:host=cheatwith.me;dbname=resync', 'karma', 'karma');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //ophalen gebruikersinformatie, testen of wachtwoord en gebruikersnaam overeenkomen
  $checkUsers =
      "SELECT
          id_user
      FROM
          user
      WHERE
          username = :username
      AND
          password = :password";
  $userStmt = $db->prepare($checkUsers);
  $userStmt->execute(array(
                      ':username' => $user['username'],
                      ':password' => $user['password']
                      ));
  $user_arr = $userStmt->fetchAll();
  // var_dump($user);
  // die("x");
  if(!empty($user_arr))
    return true;

  return false;
}

function logOut(){
  // Initialize the session.
  // If you are using session_name("something"), don't forget it now!
  session_start();

  // Unset all of the session variables.
  $_SESSION = array();

  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }

  // Finally, destroy the session.
  session_destroy();

  header('Location: login.php');
  die();
}


function protectPage(){
  if (loggedIn() === false) {
    header('Location: login.php');
    exit();
  }
}

function logIn($username, $password){

  if (isset($username) && trim($username) != '' &&
      isset($password) && trim($password) != '')
  {
    //make username and password lowercase
    $username = strtolower($username);

    // echo "<pre>";	var_dump($_POST); echo "</pre>";
    //  echo  hash('sha256', $_POST['password']);
      try
      {
          //initialisatie
          $maxAttempts = 5; //pogingen binnen aantal minuten (zie volgende)
          $attemptsTime = 5; //tijd waarin pogingen gedaan mogen worden (in minuten, wil je dat in seconden e.d. met je de query aanpassen)

          //vul hier je eigen databasegegevens in, verbinding maken met database
          $db = new PDO('mysql:host=cheatwith.me;dbname=resync', 'karma', 'karma');
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          //ophalen gebruikersinformatie, testen of wachtwoord en gebruikersnaam overeenkomen
          $checkUsers =
              "SELECT
                  id_user,
                  username,
                  naam,
                  rechten_id,
                  password

              FROM
                  user
              WHERE
                  username = :username
              AND
                  password = :password";
          $userStmt = $db->prepare($checkUsers);
          $userStmt->execute(array(
                              ':username' => $username,
                              ':password' => hash('sha256', $username . $password)
                              ));
          $user = $userStmt->fetchAll();

          // echo "string";
          // var_dump($user);
          //ophalen inlogpogingen, alleen laatste vijf minuten
          $checkTries =
              "SELECT
                  username
              FROM
                  loginfail
              WHERE
                  DateAndTime >= NOW() - INTERVAL :attemptsTime MINUTE
              AND
                  username = :username
              GROUP BY
                  username, IP
              HAVING
                  (COUNT(username) = :maxAttempts)";
          $triesStmt = $db->prepare($checkTries);
          $triesStmt->execute(array(
                              ':username' => $username,
                              ':attemptsTime' => $attemptsTime,
                              ':maxAttempts' => $maxAttempts
                              ));
          $tries = $triesStmt->fetchAll();

          if (count($user) == 1 && count($tries) == 0)
          {
              $_SESSION['user'] = array('id' => $user[0]['id_user'],
                                        'IP' => $_SERVER['REMOTE_ADDR'],
                                        'level' => $user[0]['rechten_id'],
                                        'username' => $user[0]['username'],
                                        'password' => $user[0]['password'],
                                        'naam' => $user[0]['naam']);
              //pagina waar naartoe nadat er succesvol is ingelogd
              header('Location: index.php');
              die;
          }
          else
          {
              $insertTry =
                  "INSERT INTO
                      loginfail
                          (username,
                          IP,
                          dateAndTime)
                  VALUES
                      (:username,
                      :IP,
                      NOW())";
              $insertStmt = $db->prepare($insertTry);
              $insertStmt->execute(array(
                                      ':username' => $username,
                                      ':IP' => $_SERVER['REMOTE_ADDR']
                                      ));
              if(count($tries) > 0)
              {
                  return $message = 'You have too many times tried the wronge username/password. Please wait a few minutes to login';
              }
              else
              {
                  return $message = 'invalid username/password. Please try again';

              }
          }
      }
      catch (PDOException $e)
      {
          $message = $e->getMessage();
      }
      $db = NULL;
  }
  else
  {
      $message = 'please fill in all required information';
  }

}


 ?>
