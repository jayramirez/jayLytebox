if(empty($_POST) === false){
    $required_fields = array('firstname','lastname','age','gender','email','mobile');

    foreach ($_POST as $key => $value) {
      if(empty($value) && in_array($key, $required_fields) === true){
        $errors[]='Feilds are required.';
        break 1;
        }
        if(is_numeric($_POST['firstname']) == true || is_numeric($_POST['lastname']) == true){
          $errors[] = 'Invalid! must insert numbers in firstname or lastname field';
          break 1;
        }
        if(is_numeric($_POST['age']) == false){
        $errors[]='Invalid! must insert numbers in age field.';
        break 1;
      }elseif ($_POST['age'] <= 17) {
        $errors[]='Minimum age requirement 18.';
        break 1;
      }
      if(is_numeric($_POST['mobile']) == false){
        $errors[]='Invalid! must insert numbers in mobile field.';
        break 1;
      }
      if(empty($_POST['telephone']) === false){
          if(is_numeric($_POST['telephone']) == false){
            $errors[]='Invalid! must insert numbers in telephone field.';
            break 1;
          }
        }
      }
      
  }