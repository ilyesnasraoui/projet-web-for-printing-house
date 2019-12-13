<?PHP
class Avis
{
	private $id;
	private $text;
	private $note;
	private $date_creation;
	function __construct($id,$text,$note,$date_creation)
	{
		$this->id=$id;
		$this->text=$text;
		$this->note=$note;
		$this->date_creation=$date_creation;
	}
	
	function getId()
	{
		return $this->id;
	}
	function getText()
	{
		return $this->text;
	}
	function getNote()
	{
		return $this->note;
	}
	function getDate_creation()
	{
		return $this->date_creation;
	}
	function setId($id)
	{
		$this->id=$id;
	}
	function setText($text)
	{
		$this->text=$text;
	}
	function setNote($note)
	{
		$this->note=$note;
	}
	function setDate_creation($date_creation)
	{
		$this->date_creation=$date_creation;
	}
}

?>