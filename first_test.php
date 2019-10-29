<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr) {
        //...wite your code here
        foreach ($arr as  $value)
        {
            $sum = $sum + $value;
        }
        return $sum;
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
        //...wite your code here
        $shortMe = trim($shortMe);
        $arrStr = explode(' ', $shortMe);
        $arrStrCon = count($arrStr);

        $array = [];
        for ($i = 0; $i < $arrStrCon; $i++) {
            $word = $arrStr[$i];
            $a = strlen($word);
            if ($a <= 6) {
                $array[] = $word;

            } else {
                $arr = str_split($word);
                $new_arr = array_slice($arr, 0, 6);
                $new_arr[] = '*';
                $str = implode($new_arr);
                $array[] = $str;

            }
            $string = implode(' ', $array);
            $string = trim($string);
        }
        return $string;
    }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
        //...wite your code here
        $result = 0;
        foreach ($arr as $key => $value)
        {

            if (iconv_strlen($value) >= 2) {
                $c = $key;

                $a = iconv_strlen($value)  ;
                $b = $value[0] ;
                $c = $value[$a - 1];
                if (($a >= 2) && ($b == $c)) {
                    $result++;

                }
            }
        }
        return $result;
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
        //...write your code here
      $str =  strrev ( $str) ;
      return $str;
    }

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










