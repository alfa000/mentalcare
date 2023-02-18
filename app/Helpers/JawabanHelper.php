<?php
if (! function_exists('jawaban')) {
    function kebalikanJawaban($tipe){
        switch ($tipe) {
            case 'i':
                return 'e';
                break;
            case 'e':
                return 'i';
                break;
            case 'n':
                return 's';
                break;
            case 's':
                return 'n';
                break;
            case 't':
                return 'f';
                break;
            case 'f':
                return 't';
                break;
            case 'j':
                return 'p';
                break;
            case 'p':
                return 'j';
                break;
            case 'a':
                return 'tu';
                break;
            case 'tu':
                return 'a';
                break;
        }
    }
}
