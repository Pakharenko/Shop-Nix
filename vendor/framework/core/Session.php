<?php

namespace vendor\framework\core;

class Session
{
    public static function sessionSavePath($path)
    {
        return session_save_path($path);
    }
    
    public static function start()
    {
        return session_start();
    }

    public static function getName($session_name)
    {
        return session_name($session_name);
    }

    public static function getId($session_id)
    {
        return session_id($session_id);
    }

    public static function destroy()
    {
        return session_destroy();
    }
    
}