<?PHP

class Club
{
	private $id;
	private $nom;
	private $des;
	private $adr;
	private $dom;

	function __construct($id,$nom,$des,$adr,$dom)
	{
		$this ->id = $id;
		$this ->nom = $nom;
		$this ->des = $des;
		$this ->adr = $adr;
		$this ->dom = $dom;
	}

	function afficherClub()
	{
		echo $this ->id;
		echo $this ->nom;
		echo $this ->des;
		echo $this ->adr;
		echo $this ->dom;
	}
}

?>