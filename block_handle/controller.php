<?php

namespace BlockNamespace;

use Concrete\Core\Block\BlockController;
use Database;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 400;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btTable = 'btBlockTable';

    public function getBlockTypeDescription()
    {
        return t("Block Description");
    }

    public function getBlockTypeName()
    {
        return t("Block Name");
    }

    public function edit()
    {
        
    }

    public function add()
    {

    }    
    
    public function view()
    {

    }

    public function duplicate($newBlockID)
    {
        $db = $this->getDatabase();
    }

    public function save($args)
    {
        $db = $this->getDatabase();
    }

    public function delete()
    {
        $db = $this->getDatabase();
        $db->delete('btBlockTable', array('bID' => $this->bID));
    }
    
    protected function getDatabase()
    {
        return $this->app->make('Concrete\Core\Database\DatabaseManager')->connection();
    }

}
