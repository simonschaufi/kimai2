<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DoctrineMigrations;

use App\Doctrine\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * @version 2.x
 */
final class Version20261104172922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Increase invoice template name length';
    }

    public function up(Schema $schema): void
    {
        $schema->getTable('kimai2_invoice_templates')->getColumn('renderer')->setLength(50);
    }

    public function down(Schema $schema): void
    {
        $schema->getTable('kimai2_invoice_templates')->getColumn('renderer')->setLength(20);
    }
}
