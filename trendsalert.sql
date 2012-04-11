SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `trendsalert` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `trendsalert` ;

-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(120) NULL ,
  `active` INT NULL ,
  `level` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `places`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `places` (
  `id` INT NOT NULL ,
  `title` VARCHAR(45) NULL ,
  `woeid` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alerts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alerts` (
  `id` INT NOT NULL ,
  `users_id` INT NOT NULL ,
  `keyword` VARCHAR(45) NULL ,
  `places_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_table1_users` (`users_id` ASC) ,
  INDEX `fk_alerts_places1` (`places_id` ASC) ,
  CONSTRAINT `fk_table1_users`
    FOREIGN KEY (`users_id` )
    REFERENCES `users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alerts_places1`
    FOREIGN KEY (`places_id` )
    REFERENCES `places` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trends`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `trends` (
  `id` INT NOT NULL ,
  `title` VARCHAR(45) NULL ,
  `places_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_trends_places1` (`places_id` ASC) ,
  CONSTRAINT `fk_trends_places1`
    FOREIGN KEY (`places_id` )
    REFERENCES `places` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
