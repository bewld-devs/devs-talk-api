<?php


use DevsTalk\Core\Mantle\App;
use DevsTalk\Core\Mantle\Logger;


function display(int $code, array $data = []) {
    http_response_code($code);
    echo json_encode($data);
    return;
}



function abort($message, $code) {

    if ($code === 0) {
        $code = 500;
        http_response_code(500);
    } elseif (is_string($code)) {
        http_response_code(500);
    } elseif ($code === "") {
        $code =  substr($message, -5, strpos($message, '!'));
        http_response_code(500);
    } else {
        http_response_code($code);
    }
    logger("Debug: {$message}");
    display($code, [
        'status' => 'fail',
        'message' => 'Error:' . $message
    ]);
    exit;
}


/**
 * View for test purposes only
 * 
 * Loads a specified file along with its data
 * 
 * @param String $filename Page to displayed
 * @param Array $data Data to be passed along
 * 
 * @return Require view
 */
function view(string $filename, array $data = []) {
    extract($data);

    return require "views/{$filename}.view.php";
}




/**
 * plural
 * This returns the plural version of common english words
 * --from stackoverflow
 * 
 * @param string $phrase the word to be pluralised
 * @param int $value 
 * 
 * @return string plural 
 */
function plural($phrase, $value) {
    $plural = '';
    if ($value > 1) {
        for ($i = 0; $i < strlen($phrase); $i++) {
            if ($i == strlen($phrase) - 1) {
                $plural .= ($phrase[$i] == 'y') ? 'ies' : (($phrase[$i] == 's' || $phrase[$i] == 'x' || $phrase[$i] == 'z' || $phrase[$i] == 'ch' || $phrase[$i] == 'sh') ? $phrase[$i] . 'es' : $phrase[$i] . 's');
            } else {
                $plural .= $phrase[$i];
            }
        }
        return $plural;
    }
    return $phrase;
}

/**
 * Delete a file
 */
function delete_file(String $path) {
    if (!unlink($path)) {
        logger("$path cannot be deleted due to an error");
    } else {
        logger("$path has been deleted");
    }
}



function logger($message) {
    Logger::log($message);
}



function is_dev() {
    if (ENV === 'development') {
        return true;
    } elseif (ENV === 'production') {
        return false;
    }
}

/**
 * singularize
 * This returns the singular version of common english words
 * --from https://www.kavoir.com/2011/04/php-class-converting-plural-to-singular-or-vice-versa-in-english.html
 * 
 * @param string $phrase the word to be pluralised
 * @param int $value 
 * 
 * @return string plural 
 */

function singularize($word) {
    $singular = array(
        '/(quiz)zes$/i' => '\1',
        '/(matr)ices$/i' => '\1ix',
        '/(vert|ind)ices$/i' => '\1ex',
        '/^(ox)en/i' => '\1',
        '/(alias|status)es$/i' => '\1',
        '/([octop|vir])i$/i' => '\1us',
        '/(cris|ax|test)es$/i' => '\1is',
        '/(shoe)s$/i' => '\1',
        '/(o)es$/i' => '\1',
        '/(bus)es$/i' => '\1',
        '/([m|l])ice$/i' => '\1ouse',
        '/(x|ch|ss|sh)es$/i' => '\1',
        '/(m)ovies$/i' => '\1ovie',
        '/(s)eries$/i' => '\1eries',
        '/([^aeiouy]|qu)ies$/i' => '\1y',
        '/([lr])ves$/i' => '\1f',
        '/(tive)s$/i' => '\1',
        '/(hive)s$/i' => '\1',
        '/([^f])ves$/i' => '\1fe',
        '/(^analy)ses$/i' => '\1sis',
        '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\1\2sis',
        '/([ti])a$/i' => '\1um',
        '/(n)ews$/i' => '\1ews',
        '/s$/i' => '',
    );

    $uncountable = array('equipment', 'information', 'rice', 'money', 'species', 'series', 'fish', 'sheep');

    $irregular = array(
        'person' => 'people',
        'man' => 'men',
        'child' => 'children',
        'sex' => 'sexes',
        'move' => 'moves'
    );

    $lowercased_word = strtolower($word);
    foreach ($uncountable as $_uncountable) {
        if (substr($lowercased_word, (-1 * strlen($_uncountable))) == $_uncountable) {
            return $word;
        }
    }

    foreach ($irregular as $_plural => $_singular) {
        if (preg_match('/(' . $_singular . ')$/i', $word, $arr)) {
            return preg_replace('/(' . $_singular . ')$/i', substr($arr[0], 0, 1) . substr($_plural, 1), $word);
        }
    }

    foreach ($singular as $rule => $replacement) {
        if (preg_match($rule, $word)) {
            return preg_replace($rule, $replacement, $word);
        }
    }

    return $word;
}

const DEFAULT_VALIDATION_ERRORS = [
    'required' => 'Please enter the %s',
    'email' => 'The %s is not a valid email address',
    'min' => 'The %s must have at least %s characters',
    'max' => 'The %s must have at most %s characters',
    'between' => 'The %s must have between %d and %d characters',
    'same' => 'The %s must match with %s',
    'alphanumeric' => 'The %s should have only letters and numbers',
    'secure' => 'The %s must have between 8 and 64 characters and contain at least one number, one upper case letter, one lower case letter and one special character',
    'unique' => 'The %s already exists',
];


/**
 * Return true if a string is not empty
 * @param array $data
 * @param string $field
 * @return bool
 */
function is_required(array $data, string $field): bool {
    return isset($data[$field]) && trim($data[$field]) !== '';
}

/**
 * Return true if the value is a valid email
 * @param array $data
 * @param string $field
 * @return bool
 */
function is_email(array $data, string $field): bool {
    if (empty($data[$field])) {
        return true;
    }

    return filter_var($data[$field], FILTER_VALIDATE_EMAIL);
}

/**
 * Return true if a string has at least min length
 * @param array $data
 * @param string $field
 * @param int $min
 * @return bool
 */
function is_min(array $data, string $field, int $min): bool {
    if (!isset($data[$field])) {
        return true;
    }

    return mb_strlen($data[$field]) >= $min;
}

/**
 * Return true if a string cannot exceed max length
 * @param array $data
 * @param string $field
 * @param int $max
 * @return bool
 */
function is_max(array $data, string $field, int $max): bool {
    if (!isset($data[$field])) {
        return true;
    }

    return mb_strlen($data[$field]) <= $max;
}

/**
 * @param array $data
 * @param string $field
 * @param int $min
 * @param int $max
 * @return bool
 */
function is_between(array $data, string $field, int $min, int $max): bool {
    if (!isset($data[$field])) {
        return true;
    }

    $len = mb_strlen($data[$field]);
    return $len >= $min && $len <= $max;
}

/**
 * Return true if a string equals the other
 * @param array $data
 * @param string $field
 * @param string $other
 * @return bool
 */
function is_same(array $data, string $field, string $other): bool {
    if (isset($data[$field], $data[$other])) {
        return $data[$field] === $data[$other];
    }

    if (!isset($data[$field]) && !isset($data[$other])) {
        return true;
    }

    return false;
}

/**
 * Return true if a string is alphanumeric
 * @param array $data
 * @param string $field
 * @return bool
 */
function is_alphanumeric(array $data, string $field): bool {
    if (!isset($data[$field])) {
        return true;
    }

    return ctype_alnum($data[$field]);
}

/**
 * Return true if a password is secure
 * @param array $data
 * @param string $field
 * @return bool
 */
function is_secure(array $data, string $field): bool {
    if (!isset($data[$field])) {
        return false;
    }

    $pattern = "#.*^(?=.{8,64})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
    return preg_match($pattern, $data[$field]);
}


/**
 * Connect to the database and returns an instance of PDO class
 * or false if the connection fails
 *
 * @return \PDO
 */
function db(): \PDO {
    return App::get('database');
}

/**
 * Return true if the $value is unique in the column of a table
 * @param array $data
 * @param string $field
 * @param string $table
 * @param string $column
 * @return bool
 */
function is_unique(array $data, string $field, string $table, string $column): bool {
    if (!isset($data[$field])) {
        return true;
    }

    $sql = "SELECT $column FROM $table WHERE $column = :value";

    $stmt = db()->prepare($sql);
    $stmt->bindValue(":value", $data[$field]);

    $stmt->execute();

    return $stmt->fetchColumn() === false;
}
function build_table($array) {
    // start table
    $html = "<table class=\"w-full text-sm text-left text-gray-500 dark:text-gray-400\">";
    // header row
    $html .= "<thead class=\"sticky top-0  text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">";
    $html .= '<tr>';
    foreach ($array[0] as $key => $value) {
        $html .= '<th  scope="col" class="sticky top-0  px-6 py-3" >' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';
    $html .= "</thead>";
    // data rows
    $html .= ' <tbody class="overflow-y-auto">';
    foreach ($array as $key => $value) {
        $html .= '<tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">';
        foreach ($value as $key2 => $value2) {
            $html .= '<td class="px-6 py-4">' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= ' </tbody>';
    // finish table and return it

    $html .= '</table>';

    return $html;
}
