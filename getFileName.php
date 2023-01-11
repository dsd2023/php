//Get the extension of any file, e.g. .jpg, .gif, .docx, .pdf
public static  function GetFileExtension($FileName){
 $File=substr($FileName,strpos($FileName,"."));
 $File = strtolower($File);
 return $File;
 }
 
