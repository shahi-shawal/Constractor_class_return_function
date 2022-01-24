<?php
  class cousin{
        Public $a1,$b2,$c3,$d4,$e5,$f6,$g7,$h8,$i9,$j10;
       public function __construct($name0,$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9)
{
        	$this->a1=$name0;
        	$this->b2=$name1;
        	$this->c3=$name2;
        	$this->d4=$name3;
        	$this->e5=$name4;
        	$this->f6=$name5;
        	$this->g7=$name6;
        	$this->h8=$name7;
        	$this->i9=$name8;
        	$this->j10=$name9;
        }
        
        function all()
        {
        	echo $this->a1;
        	echo $this->b2;
        	echo $this->c3;
        	echo $this->d4;
        	echo $this->e5;
        	echo $this->f6;
        	echo $this->g7;
        	echo $this->h8;
        	echo $this->i9;
        	echo $this->j10;
        	
        	
        }
  }

   $mycousin= new cousin('mizan<br>','mamon<br>','rima<br>','yasir<br>','wafi<br>','waniya<br>','shahir<br>','warisha<br>','waziha<br>','yalin<br>');
   $mycousin-> all();

   $mycousin2= new cousin('fdf<br>','mamonfdg<br>','rdggdima<br>','yadgdsir<br>','wafigd<br>','wanggdiya<br>','shahirgd<br>','wadgrisha<br>','wadziha<br>','yalin<br>');
$mycousin2-> all();


















?>