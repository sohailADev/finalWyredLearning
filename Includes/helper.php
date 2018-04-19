<?php
session_start();

function dnd($obj)
{
    echo '<pre>';
    die(print_r($obj));
    echo '</pre>';

}
function redirect($page)
{
    header('location:'.URLROOT.'/'.$page);
}
function isLogedIn()
{
    if (isset($_SESSION['_id'])) {
        return true;
    }

    else {
        return false;
    }
}
function flash($name = '', $message = '', $class = 'alert alert-success')
{
    if(!empty($name))
    {
        if(!empty($message) && empty($_SESSION[$name]))
        {
            if(!empty($_SESSION[$name]))
            {
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name. '_class']))
            {
                unset($_SESSION[$name. '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name. '_class'] = $class;
        }
        elseif(empty($message) && !empty($_SESSION[$name]))
        {
            $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
            echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name. '_class']);
        }
    }

}