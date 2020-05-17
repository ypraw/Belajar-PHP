<?php
	class Form
	{
		var $fl = array();
		var $act;
		var $submit = "Submit Form";
		var $jum = 0;

	    public function __construct($act, $submit)
	    {
	        $this->act 		= $act;
	        $this->submit 	= $submit;
	    }

	    function displayForm()
	    {
	    	echo "<form action='".$this->act."' method='POST'>";
	    	echo "<table width='100%'>";
	    	for ($i = 0; $i < count($this->fl); $i++) {
	    		echo "<tr>";
	    			echo "<td align='right'>".$this->fl[$i]['label']."</td>";
	    			echo "<td><input type='text' name='".$this->fl[$i]['name']."'></td>";
	    		echo "</tr>";
	    	}
	    		echo "<tr>";
	    			echo "<td colspan='2'><input type='submit' name='".$this->submit."'></td>";
	    		echo "</tr>";
	    	echo "</table>";
	    	echo "</form>";
	    }

	    function addField($name, $label)
	    {
	    	$this->fl[$this->jum]['name'] 	= $name;
	    	$this->fl[$this->jum]['label'] 	= $label;
	    	$this->jum++;
	    }
	}
?>