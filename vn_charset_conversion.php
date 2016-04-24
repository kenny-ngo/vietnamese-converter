<?php
/**
 * Vietnamese Character Encode / Decoding
 * name: vn_charset_conversion.php
 * by  : Kenny Ngo
 * Date: 04/24/2016
 */

class vn_charset_conversion {
   private $charmap = Array(
      'unicode' => Array(
         'ạ','ã','ả','á','à',
         'Ạ','Ã','Ả','Á','À',
         'ặ','ẵ','ẳ','ắ','ằ','ă',
         'Ặ','Ẵ','Ẳ','Ắ','Ằ','Ă',
         'ậ','ẫ','ẩ','ấ','ầ','â',
         'Ậ','Ẫ','Ẩ','Ấ','Ầ','Â',
         'Đ','đ',
         'ẹ','ẽ','ẻ','é','è',
         'Ẹ','Ẽ','Ẻ','É','È',
         'ệ','ễ','ể','ế','ề','ê',
         'Ệ','Ễ','Ể','Ế','Ề','Ê',
         'ị','ĩ','ỉ','í','ì',
         'Ị','Ĩ','Ỉ','Í','Ì',
         'ọ','õ','ỏ','ó','ò',
         'Ọ','Õ','Ỏ','Ó','Ò',
         'ộ','ỗ','ổ','ố','ồ','ô',
         'Ộ','Ỗ','Ổ','Ố','Ồ','Ô',
         'ợ','ỡ','ở','ớ','ờ','ơ',
         'Ợ','Ỡ','Ở','Ớ','Ờ','Ơ',
         'ụ','ũ','ủ','ú','ù',
         'Ụ','Ũ','Ủ','Ú','Ù',
         'ự','ữ','ử','ứ','ừ','ư',
         'Ự','Ữ','Ử','Ứ','Ừ','Ư',
         'ỵ','ỹ','ỷ','ý','ỳ',
         'Ỵ','Ỹ','Ỷ','Ý','Ỳ'
      ),
      'virq' => Array(
         'a.','a~','a?',"a'",'a`',
         'A.','A~','A?',"A'",'A`',
         'a(.','a(~','a(?',"a('",'a(`','a(',
         'A(.','A(~','A(?',"A('",'A(`','A(',
         'a^.','a^~','a^?',"a^'",'a^`','a^',
         'A^.','A^~',"A^?","A^'",'A^`','A^',
         'D-','d-',
         'e.','e~','e?',"e'",'e`',
         'E.','E~','E?',"E'",'E`',
         'e^.','e^~',"e^?","e^'",'e^`','e^',
         'E^.','E^~',"E^?","E^'",'E^`','E^',
         'i.','i~',"i?","i'",'i`',
         'I.','I~',"I?","I'",'I`',
         'o.','o~',"o?","o'",'o`',
         'O.','O~',"O?","O'",'O`',
         'o^.','o^~',"o^?","o^'",'o^`','o^',
         'O^.','O^~',"O^?","O^'",'O^`','O^',
         'o+.','o+~',"o+?","o+'",'o+`','o+',
         'O+.','O+~',"O+?","O+'",'O+`','O+',
         'u.','u~',"u?","u'",'u`',
         'U.','U~',"U?","U'",'U`',
         'u+.','u+~',"u+?","u+'",'u+`','u+',
         'U+.','U+~',"U+?","U+'",'U+`','U+',
         'y.','y~',"y?","y'",'y`',
         'Y.','Y~',"Y?","Y'",'Y`'
      ),
      'vnet' => Array(
         'aò','aÞ','aÒ','aì','aÌ',
         'Aò','AÞ','AÒ','Aì','AÌ',
         'ãò','ãÞ','ãÒ','ãì','ãÌ','ã',
         'Ãò','ÃÞ','ÃÒ','Ãì','ÃÌ','Ã',
         'âò','âÞ','âÒ','âì','âÌ','â',
         'Âò','ÂÞ','ÂÒ','Âì','ÂÌ','Â',
         'Ð','ð',
         'eò','eÞ','eÒ','eì','eÌ',
         'Eò','EÞ','EÒ','Eì','EÌ',
         'êò','êÞ','êÒ','êì','êÌ','ê',
         'Êò','ÊÞ','ÊÒ','Êì','ÊÌ','Ê',
         'iò','iÞ','iÒ','iì','iÌ',
         'Iò','IÞ','IÒ','Iì','IÌ',
         'oò','oÞ','oÒ','oì','oÌ',
         'Oò','OÞ','OÒ','Oì','OÌ',
         'ôò','ôÞ','ôÒ','ôì','ôÌ','ô',
         'Ôò','ÔÞ','ÔÒ','Ôì','ÔÌ','Ô',
         'õò','õÞ','õÒ','õì','õÌ','õ',
         'Õò','ÕÞ','ÕÒ','Õì','ÕÌ','Õ',
         'uò','uÞ','uÒ','uì','uÌ',
         'Uò','UÞ','UÒ','Uì','UÌ',
         'ýò','ýÞ','ýÒ','ýì','ýÌ','ý',
         'Ýò','ÝÞ','ÝÒ','Ýì','ÝÌ','Ý',
         'yò','yÞ','yÒ','yì','yÌ',
         'Yò','YÞ','YÒ','Yì','YÌ'
      ),
      'vni' => Array(
         'aï','aõ','aû','aù','aø',
         'AÏ','AÕ','AÛ','AÙ','AØ',
         'aë','aü','aú','aé','aè','aê',
         'AË','AÜ','AÚ','AÉ','AÈ','AÊ',
         'aä','aã','aå','aá','aà','aâ',
         'AÄ','AÃ','AÅ','AÁ','AÀ','AÂ',
         'Ñ','ñ',
         'eï','eõ','eû','eù','eø',
         'EÏ','EÕ','EÛ','EÙ','EØ',
         'eä','eã','eå','eá','eà','eâ',
         'EÄ','EÃ','EÅ','EÁ','EÀ','EÂ',
         'ò','ó','æ','í','ì',
         'Ò','Ó','Æ','Í','Ì',
         'oï','oõ','oû','où','oø',
         'OÏ','OÕ','OÛ','OÙ','OØ',
         'oä','oã','oå','oá','oà','oâ',
         'OÄ','OÃ','OÅ','OÁ','OÀ','OÂ',
         'ôï','ôõ','ôû','ôù','ôø','ô',
         'ÔÏ','ÔÕ','ÔÛ','ÔÙ','ÔØ','Ô',
         'uï','uõ','uû','uù','uø',
         'UÏ','UÕ','UÛ','UÙ','UØ',
         'öï','öõ','öû','öù','öø','ö',
         'ÖÏ','ÖÕ','ÖÛ','ÖÙ','ÖØ','Ö',
         'î','yõ','yû','yù','yø',
         'Î','YÕ','YÛ','YÙ','YØ'
      ),
      'ascii' => Array(
         'a','a','a','a','a',
         'A','A','A','A','A',
         'a','a','a','a','a','a',
         'A','A','A','A','A','A',
         'a','a','a','a','a','a',
         'A','A','A','A','A','A',
         'D','d',
         'e','e','e','e','e',
         'E','E','E','E','E',
         'e','e','e','e','e','e',
         'E','E','E','E','E','E',
         'i','i','i','i','i',
         'I','I','I','I','I',
         'o','o','o','o','o',
         'O','O','O','O','O',
         'o','o','o','o','o','o',
         'O','O','O','O','O','O',
         'o','o','o','o','o','o',
         'O','O','O','O','O','O',
         'u','u','u','u','u',
         'U','U','U','U','U',
         'u','u','u','u','u','u',
         'U','U','U','U','U','U',
         'y','y','y','y','y',
         'Y','Y','Y','Y','Y'
      )
   );
   private $input;
   function __construct($input = NULL) {
      $this->input = $input;
   }
   function __destruct() {}
   function convert($input = NULL, $from = 'unicode', $to = 'ascii'){
      if($input == NULL){
         $input = $this->input;
      }
      $map = array();
      foreach($this->charmap[$from] as $key=>$value){
         $map[$value] = $this->charmap[$to][$key];
      }
      if($to == 'unicode' || $to == 'ascii') {
         $input = str_replace(
            array("I'M","I'm","'ve","'ll","n't","'VE","'LL","N'T","'RE","'re"),
            array("I___M", "I___m","___ve","___ll","n___t","___VE","___LL","N___T","___RE","___re"),
            $input
         );
         $input = strtr($input,$map);
         $input = str_replace('___', "'", $input );

         return $input;
      }
      return $input = strtr($input,$map);
   }
   function tolower() {
      $buffers = $this->convert('unicode','virq');
      $buffers = strtolower($buffers);
      $buffers = $this->convert('virq','unicode',$buffers);
      return $buffers;
   }
   function toupper(){
      $buffers = $this->convert('unicode','virq');
      $buffers = strtoupper($buffers);
      $buffers = $this->convert('virq','unicode',$buffers);
      return $buffers;
   }
   function ucfirst() {
      $buffers = $this->convert('unicode','virq');
      $buffers = ucfirst(strtolower($buffers));
      $buffers = $this->convert('virq','unicode',$buffers);
      return $buffers;
   }
   function ucwords(){
      $buffers = $this->convert('unicode','virq');
      $buffers = ucwords(strtolower($buffers));
      $buffers = $this->convert('virq','unicode',$buffers);
      return $buffers;
   }
}
?>
