<?php

session_start();
function flash($name = '', $massage = '', $class = 'alert alert-success')
{
    if (!empty($name)) {
        if (!empty($massage) && empty($_SESSION['name'])) {

            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name . '_class'])) {
                // die($_SESSION[$name . '_class']);
                unset($_SESSION[$name . '_class']);
            }
            $_SESSION[$name] = $name;
            $_SESSION[$name . '_class'] = $name;
        } elseif (empty($massage) && !empty($_SESSION['name'])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo  '<div class="' . $class . '"id="msg_flash" >' . $_SESSION['name'] . '</div>';
            $_SESSION[$name];
            $_SESSION[$name . '_class'];
        }
    }
}
