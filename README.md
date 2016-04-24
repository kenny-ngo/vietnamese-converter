# Vietnamese Converter
A php class that converts Vietnamese characters into different character set

## Example
include_once('vn_charset_conversion.php');  
$objVN = new vn_charset_conversion();   
 
echo $objVN -> convert('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.');  
Output: Toi ten la Ngo Chi Dung. Nguoi da tao ra cai phan mem nay.  

echo $objVN -> convert('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.','unicode','virq');  
Output: To^i te^n la\` Ngo^ Chi' Du~ng. Ngu+o+\`i d-a~ ta.o ra ca'i pha^\`n me^\`m na\`y.  

### Available Methods
- convert($input)
- convert($input,'unicode','virq');
- convert($input,'unicode','vnet');
- convert($input,'unicode','vni');
- convert($input,'unicode','ascii');
- tolower($input) 
- toupper($input)
- ucfirst($input)
- ucwords($input)

Whereas $input = a unicode string

