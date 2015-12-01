<?php

class SmartForm {

  public static function open($action, $method = 'post', $fields = []) {

    echo \Form::open(array('url' => $action, 'method' => $method, 'files' => true));

    foreach($fields as $key => $value) {

      $class = (!empty($value[3])) ? $value[3] : '';
      $default = (!empty($value[2])) ? $value[2] : '';

      echo '<div class="form-group '.$class.'">';
      echo \Form::label($key, $value[0]);
      echo "<br />";

      switch($value[1]) {

        case 'file':
          echo \Form::{$value[1]}($key);
          break;

        case 'select':
            echo \Form::{$value[1]}($key, $default, $class, array('class'=>'form-control'));
          break;

        default:
          echo \Form::{$value[1]}($key, $default, array('class'=>'form-control'));

      }

      echo '</div>';

    }

  }

  public static function close($text = "Submit") {

    echo \Form::submit($text, array('class'=>'btn btn-primary btn-lg'));
    echo \Form::close();

  }

}
