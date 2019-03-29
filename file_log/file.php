<?php
// class File
// {
// 	public $filename;
// 	public function Read($file)
// 	{
		// $this->filename=$file;
		// $handle=fopen($file,'r');
		// return fgets($handle);
		// fclose($handle);

// 	}
// }
// $log=new File();
// echo "<pre>".$log->Read("tel5.txt")."</pre>";




// class File
// {
// 	public $filename;
// 	public $strdata;
// 	public function Write($file,$strdata)
// 	{


// 		$this->filename=$file;
// 		$this->strdata=$strdata;
// 		$handle=fopen($file,'w');
// 		fwrite($handle,$strdata);
// 		fclose($handle);
// 	}
// }
// $log=new File();
// $log->Write("tel5.txt","IT LEVEL3");





// class File
// {
// 	public $filename;
// 	public $strdata;
// 	public function Append($file,$strdata)
// 	{


// 		$this->filename=$file;
// 		$this->strdata=$strdata;
// 		$handle=fopen($file,'a');
// 		fwrite($handle,$strdata);
// 		fclose($handle);
// 	}
// }
// $log=new File();
// $log->Append("tel5.txt","students");


//you are not need to create notpad folder
// class File
// {
// 	public $filename;
// 	public $strdata;
// 	public function newFile($file,$strdata)
// 	{


// 		$this->filename=$file;
// 		$this->strdata=$strdata;
// 		$handle=fopen($file,'x');
// 		fwrite($handle,$strdata);
// 		fclose($handle);
// 	}
// }
// $log=new File();
// $log->newFile("text7.txt",'students');



// class File
// {
// 	public $filename;
// 	public $strdata;
// 	public function getContent($file)
// 	{


// 		$this->filename=$file;
// 		return file_get_contents($file);
// 		fclose($handle);
// 	}
// }
// $log=new File();
// $log->getContent("text7.txt");
// echo $log->getContent("text7.txt");


// class File
// {
// 	public $file;
// 	public $newFile;
// 	public function __construct($file,$copy)
// 	{


// 		$this->filename=$file;
// 		$this->newFilename=$copy;
// 		if(copy($file,$copy))
// 		{
// 			echo 'the file copy';
// 		}
// 		else{
// 			echo 'not copy';
// 		}
		
// 	}
// }
// $log=new File("text7.txt","text8.txt");




// class File
// {
// 	public $file;
// 	public $newFile;
// 	public function __construct($file,$rename)
// 	{


// 		$this->filename=$file;
// 		$this->newFilename=$rename;
// 		if(rename($file,$rename))
// 		{
// 			echo 'the file renamed';
// 		}
// 		else{
// 			echo 'not renemed';
// 		}
		
// 	}
// }
// $log=new File("text8.txt","rename.txt");



class File
{
	public $file;
	public function __construct($file)
	{


		$this->filename=$file;
		if(unlink($file))
		{
			echo 'the file deleted';
		}
		else{
			echo 'not deleted';
		}
		
	}
}
$log=new File("text7.txt");

?>