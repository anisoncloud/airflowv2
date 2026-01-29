-- DropForeignKey
ALTER TABLE `todo` DROP FOREIGN KEY `todo_userId_fkey`;

-- DropIndex
DROP INDEX `todo_userId_key` ON `todo`;

-- AddForeignKey
ALTER TABLE `todo` ADD CONSTRAINT `todo_userId_fkey` FOREIGN KEY (`userId`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
