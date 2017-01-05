<?php

namespace CedricZiel\FemanagerForceForum\Slot;

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;

class FemanagerForceRecordTypeSlot
{
    /**
     * @param FrontendUser $user
     */
    public function force($user)
    {
        $database = $this->getDatabase();
        $database->exec_UPDATEquery(
            'fe_users',
            sprintf('uid=%d', $user->getUid()),
            ['tx_extbase_type' => 'Mittwald\Typo3Forum\Domain\Model\User\FrontendUser']
        );
    }

    /**
     * @return DatabaseConnection
     */
    private function getDatabase()
    {
        return $GLOBALS['TYPO3_DB'];
    }
}
