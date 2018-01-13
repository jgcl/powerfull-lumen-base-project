<?php
class PdoMsSql
{
    private $pdo;

    public function __construct($hostname, $port, $dbname, $username, $pwd)
    {
        $this->hostname = $hostname;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function connect()
    {
        try {
            echo "connectando acimaq sqlserver...\n";
            $this->pdo = new PDO ("dblib:host=$this->hostname:$this->port;dbname=$this->dbname", "$this->username", "$this->pwd");
        } catch (PDOException $e) {
            echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        }

    }

    public function close()
    {
        unset($this->pdo);
        $this->pdo = null;
    }

    public function sql()
    {
        echo "iniciando query...\n";
        $stmt = $this->pdo->prepare("SELECT TOP 10 * FROM TGFPRO");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            //print_r($row);
            $row = (object) $row;
            echo "{$row->CODPROD} - {$row->DESCRPROD}\n";
        }
        unset($stmt);
        $this->close();
    }

}

$sqlSrv = new PdoMsSql('177.53.174.174','14333','SANKHYA_PROD','suporte','tecsis@skw2');
$sqlSrv->connect();
$sqlSrv->sql();
$sqlSrv->close();

?>