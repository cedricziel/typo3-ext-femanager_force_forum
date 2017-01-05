<?php

namespace CedricZiel\FemanagerForceForum\Slot;

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;

class FemanagerForceRecordTypeSlot
{
    /**
     * @param FrontendUser $user
     * @param string       $operation
     */
    public function force($user, $operation)
    {
        if (!$user instanceof FrontendUser) {
            return;
        }

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
