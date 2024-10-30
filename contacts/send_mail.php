if($_SERVER[REQUEST_METHOD]==="POST"){

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  $project_type = htmlspecialchars($_POST['project_type']);
  $budget = htmlspecialchars($_POST['budget']);
  $subject = htmlspecialchars($_POST['subject']);
  $deadline = htmlspecialchars($_POST['deadline']);

}

//