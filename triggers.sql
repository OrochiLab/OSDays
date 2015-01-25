DELIMITER |
CREATE TRIGGER before_update_guest BEFORE INSERT
ON guest FOR EACH ROW
BEGIN
    IF NEW.sexe IS NOT NULL   -- le sexe n'est ni NULL
    AND NEW.sexe != 'M'       -- ni "M"
    AND NEW.sexe != 'F'       -- ni "F"
      THEN
        SET NEW.sexe = NULL;
    END IF;
END |
DELIMITER ;