<?php
    
class Date {
    public static $date = '';
    public static $timestamp = '';
    public static $message = '';
    private static $input = '';
    const MAX_TIMESTAMP = 2147483648; // 2038 problem

    public static function processInput() {

        self::setInputFromUri();

        if (self::$input == '') {
            self::useDefault();
            return;
        }

        // check if it is a number
        $isNum = is_numeric(self::$input);

        if ($isNum) 
            self::processInputAsNumber();
        else
            self::processInputAsDateString();
    }

    private static function processInputAsDateString() {
        // try to convert input to unix timestamp
        $unix = strtotime(self::$input);

        if ($unix) {   
            self::$timestamp = $unix;
            self::setDateFromTimestamp(self::$timestamp);
        } else {
            self::setMessage("Sorry. Your input was invalid.");
        }
    }

    private static function processInputAsNumber() {
        if (self::$input < self::MAX_TIMESTAMP) {
            self::setDateFromTimestamp(self::$input);
            self::$timestamp = self::$input;
        } else {
            self::setMessage("Maximum timestamp exceeded.");
        }
    }

    private static function useDefault() {
        self::$timestamp = time();
        self::setDateFromTimestamp();
    }

    private static function setInputFromUri() {
        self::$input = isset($_GET['input']) ? strip_tags(trim($_GET['input'])) : '';
    }

    private static function setDateFromTimestamp() {
        self::$date = date("Y-m-d H:i:s", (int)self::$timestamp);
    }

    private static function setMessage(string $string) {
        self::$message = $string;
    }
    

}

    

   

    

 
    

