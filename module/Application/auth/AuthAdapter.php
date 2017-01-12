class Plugin_Auth_AuthAdapter extends Zend_Auth_Adapter_DbTable
{
 public function __construct()
 {
 $registry = Zend_Registry::getInstance();
 parent::__construct($registry->dbAdapter);
 $this->setTableName('user');
 $this->setIdentityColumn('username');
 $this->setCredentialColumn('passwort');
 $this->setCredentialTreatment('PASSWORD(?)');
 }
}
