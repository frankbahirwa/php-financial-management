CREATE EVENT migrate_data_event
ON SCHEDULE EVERY 1 DAY -- Change this to your desired interval
DO
BEGIN
    INSERT INTO migrated_data (data)
    SELECT data FROM original_data WHERE created_at < DATE_SUB(NOW(), INTERVAL 30 DAY); -- Change 30 to your desired days
    
    DELETE FROM original_data WHERE created_at < DATE_SUB(NOW(), INTERVAL 30 DAY);
END;
