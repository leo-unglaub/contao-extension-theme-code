-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- 
-- Table `tl_theme`
-- 

CREATE TABLE `tl_theme` (
  `tc_header` blob NULL,
  `tc_footer` blob NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;