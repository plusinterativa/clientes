<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	function removeAcentos($var){

    $acentos = array(

        '�','�','�','�', '�','�','�','�',

        '�', '�',

        '�', '�', 

        '�','�','�', '�', '�', '�',

        '�','�',

        '�', '�', '��o',

        '�','�', 

        '�','�',
		
		'�','�','�',
		
		

        );

    $remove_acentos = array(

        'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a',

        'e', 'e',

        'i', 'i',

        'o', 'o','o', 'o', 'o','o',

        'u', 'u',

        'c', 'c',

        'e', 'e',

        'u', 'u',
		
		'','','',
		
		
        );

    return str_replace($acentos, $remove_acentos, urldecode($var));

}

?>